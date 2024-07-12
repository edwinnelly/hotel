<?php
class Manager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getDbConnection();
    }

    public function getDbConnection()
    {
        // Securely establish and return the database connection
        try {
            $dsn = 'mysql:host=localhost;dbname=vioo_dev;charset=utf8mb4';
            $username = 'root';
            $password = '';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            return new PDO($dsn, $username, $password, $options);

        } catch (PDOException $e) {
            error_log('Connection Error: ' . $e->getMessage());
            throw new RuntimeException('Database connection error: ' . $e->getMessage());
        }
    }

    /**
     * Executes a SQL query with optional parameters.
     * 
     * @param string $sql The SQL query to execute.
     * @param array $params Optional parameters for prepared statement.
     */
    public function executeQuery($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            echo "Success"; // Print success message
        } catch (PDOException $e) {
            error_log('Execute Error: ' . $e->getMessage());
            echo '<p>An error occurred while executing the query.</p>'; // Print error message
        }
    }

    public function fetchData($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);

            // Check if prepare() succeeded
            if (!$stmt) {
                throw new PDOException('Failed to prepare query.');
            }

            // Execute the prepared statement with parameters
            $stmt->execute($params);

            // Fetch all results as associative array
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Check if results array is empty
            if (empty($results)) {
                // Optionally handle empty result set case
                return [];
            }

            // Sanitize each field in the results array to prevent XSS
            foreach ($results as &$row) {
                foreach ($row as $key => &$value) {
                    // Check if value is not null before sanitizing
                    if (!is_null($value)) {
                        $row[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                    }
                  
                }
                unset($value); // Unset reference
            }
            unset($row); // Unset reference

            return $results;

        } catch (PDOException $e) {
            // Log the error for debugging
            error_log('Fetch Error: ' . $e->getMessage());

            // Sanitize error message before outputting to prevent XSS
            $errorMessage = 'An error occurred while fetching data.';
            echo '<p>' . htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') . '</p>';

            // Optionally, throw the exception to propagate it further
            throw $e;

        } catch (Exception $e) {
            // Log unexpected data type or other exceptions
            error_log('Fetch Error: ' . $e->getMessage());

            // Handle unexpected exceptions here
            echo '<p>An unexpected error occurred.</p>';
            return []; // Return empty array or handle as appropriate
        } 
    }

    public function get_request($txt)
    {
        // Retrieve the value from the $_GET array, trim any whitespace, or return an empty string if the key does not exist
        $txt = trim($_GET[$txt] ?? '');

        // Sanitize the input to prevent XSS by converting special characters to HTML entities
        return htmlspecialchars($txt, ENT_QUOTES, 'UTF-8');
    }

    /** 
     * Function to treat POST values 
     */
    public function post_request($txt)
    {
        // Retrieve the value from the $_POST array, trim any whitespace, or return an empty string if the key does not exist
        $txt = trim($_POST[$txt] ?? '');

        // Sanitize the input to prevent XSS by converting special characters to HTML entities
        return htmlspecialchars($txt, ENT_QUOTES, 'UTF-8');
    }


     /** function to logout a user **/
     public function logout()
     {
         // remove all session variables
         session_unset();
         // destroy the session
         session_destroy();
     }
 
     /** function to check if a user is logged in **/
     public function checkLogin()
     {
         if (isset($_SESSION['login_user'])) {
             return 'logged';
         } else {
             return 'nau';
         }
     }
 
     /** function to reduce the lenght of a string **/
     public function stringFormat($string, $len)
     {
         if (strlen($string) > $len) {
             return substr($string, 0, $len) . '...';
         } else {
             return $string;
         }
     }

     public function time_ago($timestamp)
     {
         try {
             $current_time = new DateTime();
             $past_time = new DateTime($timestamp);
             $interval = $current_time->diff($past_time);
 
             if ($interval->y > 0) {
                 return $interval->y . " year" . ($interval->y > 1 ? 's' : '') . " ago";
             } elseif ($interval->m > 0) {
                 return $interval->m . " month" . ($interval->m > 1 ? 's' : '') . " ago";
             } elseif ($interval->d > 0) {
                 return $interval->d . " day" . ($interval->d > 1 ? 's' : '') . " ago";
             } elseif ($interval->h > 0) {
                 return $interval->h . " hour" . ($interval->h > 1 ? 's' : '') . " ago";
             } elseif ($interval->i > 0) {
                 return $interval->i . " minute" . ($interval->i > 1 ? 's' : '') . " ago";
             } else {
                 return "Just now";
             }
         } catch (Exception $e) {
             return "Invalid timestamp";
         }
     }


     public function rateLimit($max_requests, $period) {
        $current_time = time();
        if (!isset($_SESSION['rate_limit'])) {
            // If rate limit session data doesn't exist, initialize it
            $_SESSION['rate_limit'] = ['count' => 1, 'start_time' => $current_time];
            return false; // No rate limit reached, continue
        }
        
        // Calculate time passed since last request
        $time_passed = $current_time - $_SESSION['rate_limit']['start_time'];
        
        // If time passed exceeds the specified period, reset rate limit
        if ($time_passed > $period) {
            $_SESSION['rate_limit'] = ['count' => 1, 'start_time' => $current_time];
            return false; // No rate limit reached, continue
        }
    
        // Check if the number of requests is within the limit
        if ($_SESSION['rate_limit']['count'] < $max_requests) {
            $_SESSION['rate_limit']['count']++;
            return false; // No rate limit reached, continue
        }
    
        // Rate limit exceeded
        return true; // Rate limit reached, stop further processing
    }
    



}

