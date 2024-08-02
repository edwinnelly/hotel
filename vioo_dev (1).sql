-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2024 at 10:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vioo_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_accounts`
--

CREATE TABLE `business_accounts` (
  `hotel_id` int(11) NOT NULL,
  `business_account` int(11) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `hotel_state` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `added_date` varchar(22) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password_key` varchar(222) DEFAULT NULL,
  `sec_key` varchar(222) DEFAULT NULL,
  `agent_id` varchar(33) DEFAULT NULL,
  `activation` varchar(10) NOT NULL DEFAULT 'no',
  `year_built` varchar(20) DEFAULT NULL,
  `aboutus` text DEFAULT NULL,
  `policies` text DEFAULT NULL,
  `important_note` text DEFAULT NULL,
  `accessibility` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_accounts`
--

INSERT INTO `business_accounts` (`hotel_id`, `business_account`, `business_name`, `address`, `phone`, `email_address`, `longitude`, `latitude`, `rooms`, `country`, `hotel_state`, `description`, `added_date`, `username`, `password_key`, `sec_key`, `agent_id`, `activation`, `year_built`, `aboutus`, `policies`, `important_note`, `accessibility`) VALUES
(93, 71435580, 'Nino Hotel', 'No11 Old GRA Port Harcourt River State', '0912383838393', 'ninohotel@nino.com', 12322.1, 122123, NULL, 'Belgium', 'akwa ibom', 'To see correct prices and occupancy information, please add the number of children in your group and their ages to your search.', '2024-07-12 18:47:04', '12132323', NULL, NULL, '34934434', 'no', NULL, '&lt;h3&gt;Welcome to ABC Hotel&lt;/h3&gt;&lt;h4&gt;Unparalleled Luxury and Comfort&lt;/h4&gt;&lt;p&gt;ABC Hotel stands as a beacon of luxury and comfort, offering an unparalleled experience for all its guests. Nestled in the heart of [City Name], our hotel provides a perfect blend of modern elegance and timeless charm.&lt;/p&gt;&lt;h4&gt;Exquisite Accommodations&lt;/h4&gt;&lt;p&gt;Our rooms and suites are designed with meticulous attention to detail, ensuring a stay that is both comfortable and memorable. Each room is equipped with state-of-the-art amenities, including high-speed internet, flat-screen TVs, and plush bedding. Many rooms offer breathtaking views of the city skyline or the tranquil waterfront.&lt;/p&gt;&lt;h4&gt;World-Class Dining&lt;/h4&gt;&lt;p&gt;At ABC Hotel, dining is an experience unto itself. Our award-winning restaurant, [Restaurant Name], serves a delectable array of international cuisines prepared by our renowned chefs. Whether you&#039;re in the mood for a gourmet meal or a casual snack, our dining options cater to all tastes and preferences.&lt;/p&gt;', '&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; font-weight: 500; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Check-in&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(2, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Check-in time starts at 4:00 PM&lt;/div&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Minimum check-in age: 21&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; font-weight: 500; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Check-out&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(2, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Check-out before 11 AM&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Special check-in instructions&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Front desk staff will greet guests on arrival&lt;/div&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;This property doesn&#039;t offer after-hours check-in&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Access methods&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Staffed front desk&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Pets&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; itemprop=&quot;petsAllowed&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Pets not allowed&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;&lt;h3 class=&quot;uitk-heading uitk-heading-5&quot; tabindex=&quot;-1&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; touch-action: manipulation; font-size: 1.25rem; line-height: 1.5rem; color: var(--egds-heading__color,var(--int__egds-text__color,var(--egds-legacy-color))); --int__egds-text__color: var(--egds-on-surface); --egds-legacy-color: #191e3b;&quot;&gt;Children and extra beds&lt;/h3&gt;&lt;h4&gt;&lt;div class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start-by-medium uitk-layout-grid-item-has-column-start-by-large&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start-large); color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px; --uitk-layoutgrid-column-start-medium: span 1; --uitk-layoutgrid-column-start-large: span 2;&quot;&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-columns-by-medium uitk-layout-grid-has-columns-by-large uitk-layout-grid-has-space uitk-layout-grid-display-grid uitk-spacing uitk-spacing-padding-blockstart-three&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); grid-template-columns: var(--uitk-layoutgrid-columns-large); --egds-legacy-spacing-border-color: #dfe0e4; padding-block-start: 0.75rem; --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-columns-medium: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-columns-large: repeat(1, minmax(0, 1fr)); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-three); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-three);&quot;&gt;&lt;div data-stid=&quot;content-item&quot; class=&quot;uitk-layout-grid-item uitk-layout-grid-item-has-column-start&quot; style=&quot;margin: 0px; padding: 0px; grid-column-start: var(--uitk-layoutgrid-column-start,initial); --uitk-layoutgrid-column-start: span 1;&quot;&gt;&lt;div class=&quot;uitk-layout-flex uitk-layout-flex-gap-six&quot; style=&quot;margin: 0px; padding: 0px; display: flex; gap: 1.5rem;&quot;&gt;&lt;div class=&quot;uitk-layout-flex-item uitk-layout-flex-item-max-width-full_width uitk-layout-flex-item-flex-grow-1&quot; style=&quot;margin: 0px; padding: 0px; flex-grow: 1; max-inline-size: 100%;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;uitk-layout-grid uitk-layout-grid-has-auto-columns uitk-layout-grid-has-space uitk-layout-grid-display-grid&quot; style=&quot;margin: 0px; padding: 0px; --uitk-layoutgrid-egds-size__0x: 0px; --uitk-layoutgrid-egds-size__0x__half: 2px; --uitk-layoutgrid-egds-size__0x__quarter: 1px; --uitk-layoutgrid-egds-size__1x: 0.25rem; --uitk-layoutgrid-egds-size__1x__half: 0.375rem; --uitk-layoutgrid-egds-size__2x: 0.5rem; --uitk-layoutgrid-egds-size__3x: 0.75rem; --uitk-layoutgrid-egds-size__3x__half: 0.875rem; --uitk-layoutgrid-egds-size__4x: 1rem; --uitk-layoutgrid-egds-size__4x__half: 1.125rem; --uitk-layoutgrid-egds-size__5x: 1.25rem; --uitk-layoutgrid-egds-size__6x: 1.5rem; --uitk-layoutgrid-egds-size__7x: 1.75rem; --uitk-layoutgrid-egds-size__8x: 2rem; --uitk-layoutgrid-egds-size__9x: 2.25rem; --uitk-layoutgrid-egds-size__10x: 2.5rem; --uitk-layoutgrid-egds-size__11x: 2.75rem; --uitk-layoutgrid-egds-size__12x: 3rem; --uitk-layoutgrid-egds-size__13x: 3.25rem; --uitk-layoutgrid-egds-size__14x: 3.5rem; --uitk-layoutgrid-egds-size__15x: 3.75rem; --uitk-layoutgrid-egds-size__16x: 4rem; --uitk-layoutgrid-egds-size__17x: 4.25rem; --uitk-layoutgrid-egds-size__18x: 4.5rem; --uitk-layoutgrid-egds-size__24x: 6rem; --uitk-layoutgrid-egds-size__30x: 7.5rem; --uitk-layoutgrid-egds-size__37x: 9.25rem; --uitk-layoutgrid-egds-size__38x: 9.5rem; --uitk-layoutgrid-egds-size__40x: 10rem; --uitk-layoutgrid-egds-size__48x: 12rem; --uitk-layoutgrid-egds-size__70x: 17.5rem; --uitk-layoutgrid-egds-size__72x: 18rem; --uitk-layoutgrid-egds-size__76x: 19rem; --uitk-layoutgrid-egds-size__88x: 22rem; --uitk-layoutgrid-egds-size__96x: 24rem; --uitk-layoutgrid-egds-size__104x: 26rem; --uitk-layoutgrid-egds-size__112x: 28rem; --uitk-layoutgrid-egds-size__120x: 30rem; --uitk-layoutgrid-egds-size__180x: 45rem; --uitk-layoutgrid-egds-size__312x: 78rem; --uitk-layoutgrid-egds-size__500x: 125rem; --uitk-layoutgrid-space-half: 2px; --uitk-layoutgrid-space-one: 0.25rem; --uitk-layoutgrid-space-two: 0.5rem; --uitk-layoutgrid-space-three: 0.75rem; --uitk-layoutgrid-space-four: 1rem; --uitk-layoutgrid-space-six: 1.5rem; --uitk-layoutgrid-space-twelve: 3rem; --uitk-layoutgrid-space-xsmall: var(--egds-spacing-extra-small); --uitk-layoutgrid-space-small: var(--egds-spacing-small); --uitk-layoutgrid-space-medium: var(--egds-spacing-medium); --uitk-layoutgrid-space-large: var(--egds-spacing-large); --uitk-layoutgrid-space-xlarge: var(--egds-spacing-extra-large); display: grid; grid-auto-columns: var(--uitk-layoutgrid-auto-columns); column-gap: var(--uitk-layoutgrid-column-gap,initial); row-gap: var(--uitk-layoutgrid-row-gap,initial); --uitk-layoutgrid-auto-columns: minmax(var(--uitk-layoutgrid-egds-size__0x), 1fr); --uitk-layoutgrid-column-gap: var(--uitk-layoutgrid-space-two); --uitk-layoutgrid-row-gap: var(--uitk-layoutgrid-space-two);&quot;&gt;&lt;div class=&quot;uitk-layout-grid-item&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Children are welcome&lt;/div&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;3 children, up to the age of 12 years, can stay for free if using existing beds when occupying the parent or guardian&#039;s room&lt;/div&gt;&lt;div class=&quot;uitk-text uitk-text-spacing-two uitk-type-300 uitk-text-standard-theme&quot; style=&quot;margin: 0px; padding: 0px; color: var(--egds-text__color,var(--int__egds-text__color,var(--egds-legacy-color))); font-synthesis: style; --egds-legacy-color: #191e3b; --int__egds-text__color: var(--egds-on-surface); margin-block-start: 0.5rem; font-size: 0.875rem; line-height: 1.125rem; min-inline-size: calc(4px + 1.125rem);&quot;&gt;Rollaway/extra beds are not available&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/h4&gt;', '&lt;h4&gt;Commitment to Sustainability&lt;/h4&gt;&lt;p&gt;We are committed to sustainability and strive to minimize our environmental impact. Our hotel implements various eco-friendly practices, including energy-efficient lighting, water conservation measures, and a robust recycling program.&lt;/p&gt;&lt;h4&gt;Book Your Stay&lt;/h4&gt;&lt;p&gt;Experience the luxury and comfort of ABC Hotel. Book your stay today and discover why we are the preferred choice for travelers from around the world.&lt;/p&gt;', '&lt;h3&gt;&lt;span style=&quot;color: rgb(25, 30, 59); font-family: &amp;quot;Centra No2&amp;quot;, -apple-system, &amp;quot;system-ui&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;If you have requests for specific accessibility needs, please contact the property using the information on the reservation confirmation received after booking.&lt;/span&gt;&lt;br&gt;&lt;/h3&gt;');
INSERT INTO `business_accounts` (`hotel_id`, `business_account`, `business_name`, `address`, `phone`, `email_address`, `longitude`, `latitude`, `rooms`, `country`, `hotel_state`, `description`, `added_date`, `username`, `password_key`, `sec_key`, `agent_id`, `activation`, `year_built`, `aboutus`, `policies`, `important_note`, `accessibility`) VALUES
(94, 56678921, 'Suansd Hotel', 'No11 new gra phc', '098765456712', 'suan@gmail.com', 122323, 23233200, NULL, 'Albania', 'edo', 'adHJVQWD Q', '2024-07-13 13:06:18', '12345678', NULL, NULL, '34934434', 'no', NULL, '&amp;lt;script&amp;gt;alert(&#039;jcwebweboe&#039;);&amp;lt;/script&amp;gt;', '&lt;br /&gt;\r\n&lt;b&gt;Deprecated&lt;/b&gt;:  html_entity_decode(): Passing null to parameter #1 ($string) of type string is deprecated in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/hotel/clients/dist/apps/hotel_profile_update.php&lt;/b&gt; on line &lt;b&gt;124&lt;/b&gt;&lt;br /&gt;', '&lt;br /&gt;\r\n&lt;b&gt;Deprecated&lt;/b&gt;:  html_entity_decode(): Passing null to parameter #1 ($string) of type string is deprecated in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/hotel/clients/dist/apps/hotel_profile_update.php&lt;/b&gt; on line &lt;b&gt;139&lt;/b&gt;&lt;br /&gt;', '&lt;br /&gt;\r\n&lt;b&gt;Deprecated&lt;/b&gt;:  html_entity_decode(): Passing null to parameter #1 ($string) of type string is deprecated in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/hotel/clients/dist/apps/hotel_profile_update.php&lt;/b&gt; on line &lt;b&gt;110&lt;/b&gt;&lt;br /&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `emp_account` varchar(33) DEFAULT '0',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `hiredate` date NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalcode` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `login_sec` varchar(255) DEFAULT NULL,
  `access_level_id` int(11) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `emp_account`, `firstname`, `lastname`, `dateofbirth`, `gender`, `hiredate`, `position`, `department`, `salary`, `email_address`, `phonenumber`, `address`, `city`, `state`, `postalcode`, `country`, `password`, `login_sec`, `access_level_id`, `username`, `photo`) VALUES
(1, '0', 'Mark', 'Doe', '1980-01-15', 'M', '2020-05-10', 'Manager', 'Sales', 75000.00, 'john.doe@example.com', '555-1234', '123 Elm St', 'Somewhere', 'CA', '90210', 'USA', '12345', NULL, NULL, NULL, NULL),
(2, '0', 'Jane', 'Smith', '1985-02-20', 'F', '2019-03-15', 'Developer', 'IT', 90000.00, 'jane.smith@example.com', '555-5678', '456 Oak St', 'Anywhere', 'TX', '75001', 'USA', '12345', NULL, NULL, NULL, NULL),
(3, '0', 'Alice', 'Johnson', '1990-07-30', 'F', '2021-09-01', 'Analyst', 'Finance', 65000.00, 'alice.johnson@example.com', '555-9876', '789 Pine St', 'Everywhere', 'NY', '10001', 'USA', '12345', NULL, NULL, NULL, NULL),
(4, '0', 'Michael', 'Brown', '1978-03-22', 'M', '2018-04-15', 'Designer', 'Marketing', 70000.00, 'michael.brown@example.com', '555-2345', '101 Maple St', 'Springfield', 'IL', '62704', 'USA', '12345', NULL, NULL, NULL, NULL),
(5, '0', 'Emily', 'Davis', '1982-05-30', 'F', '2017-11-10', 'HR Specialist', 'HR', 65000.00, 'emily.davis@example.com', '555-6789', '202 Birch St', 'Austin', 'TX', '73301', 'USA', '12345', NULL, NULL, NULL, NULL),
(6, '0', 'David', 'Wilson', '1992-08-14', 'M', '2019-01-20', 'Sales Associate', 'Sales', 60000.00, 'david.wilson@example.com', '555-8765', '303 Cedar St', 'Denver', 'CO', '80201', 'USA', '12345', NULL, NULL, NULL, NULL),
(7, '0', 'Sarah', 'Miller', '1987-10-05', 'F', '2021-07-18', 'Marketing Coordinator', 'Marketing', 62000.00, 'sarah.miller@example.com', '555-4321', '404 Spruce St', 'Miami', 'FL', '33101', 'USA', '12345', NULL, NULL, NULL, NULL),
(8, '0', 'James', 'Taylor', '1975-12-25', 'M', '2016-03-25', 'Finance Manager', 'Finance', 95000.00, 'james.taylor@example.com', '555-1235', '505 Willow St', 'Seattle', 'WA', '98101', 'USA', '12345', NULL, NULL, NULL, NULL),
(9, '0', 'Laura', 'Anderson', '1989-02-19', 'F', '2020-10-09', 'IT Support', 'IT', 68000.00, 'laura.anderson@example.com', '555-9875', '606 Fir St', 'Boston', 'MA', '02101', 'USA', '12345', NULL, NULL, NULL, NULL),
(10, '0', 'Robert', 'Thomas', '1984-07-07', 'M', '2018-08-25', 'Logistics Coordinator', 'Logistics', 62000.00, 'robert.thomas@example.com', '555-3456', '707 Redwood St', 'San Francisco', 'CA', '94101', 'USA', '12345', NULL, NULL, NULL, NULL),
(11, '0', 'Olivia', 'Jackson', '1991-11-11', 'F', '2022-01-15', 'Content Writer', 'Content', 60000.00, 'olivia.jackson@example.com', '555-6543', '808 Chestnut St', 'New York', 'NY', '10001', 'USA', '12345', NULL, NULL, NULL, NULL),
(12, '0', 'Daniel', 'White', '1983-04-23', 'M', '2017-05-30', 'Project Manager', 'Operations', 85000.00, 'daniel.white@example.com', '555-7654', '909 Aspen St', 'Los Angeles', 'CA', '90001', 'USA', '12345', NULL, NULL, NULL, NULL),
(13, '0', 'Sophia', 'Harris', '1995-09-01', 'F', '2019-12-22', 'Customer Service Rep', 'Customer Service', 58000.00, 'sophia.harris@example.com', '555-4567', '1010 Pine St', 'Chicago', 'IL', '60601', 'USA', '12345', NULL, NULL, NULL, NULL),
(14, '34934434', 'John', 'Doe', '1980-01-15', 'M', '2020-05-10', 'Manager', 'Sales', 75000.00, 'johndoe@example.com', '555-1234', '123 Elm St', 'Somewhere', 'CA', '90210', 'USA', '$2y$10$P9Jn0F9eZV/0KqA1ytDUF.YTsYznwX8tt1hnrgea4pVN6S51SNHFS', '6d48c59ebb53e09ebf18284c5aae0ff863a36a32f13c7c7d635c9e7792c09895', 1, 'john_doe', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(255) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_facilities`
--

INSERT INTO `hotel_facilities` (`facility_id`, `facility_name`, `hotel_id`) VALUES
(171, 'Themed dinner nights', 71435580),
(172, 'Bike tours', 71435580),
(177, 'Non-Smoking Rooms', 71435580),
(179, 'Golf Course', 71435580),
(181, 'Breakfast Included', 71435580),
(182, 'Wheelchair Accessible', 71435580),
(183, 'Safety Deposit Box', 71435580),
(184, 'Children&#039;s Playground', 71435580),
(186, 'Library', 71435580),
(187, 'Gift Shop', 71435580),
(188, 'Tennis Court', 71435580),
(189, 'Bicycle Rental', 71435580),
(190, 'Car Rental', 71435580),
(191, 'Air Conditioning (AC)', 71435580),
(192, 'Mini Bar', 71435580),
(193, 'Jacuzzi', 71435580),
(194, 'Swimming Pool', 71435580),
(195, 'Fitness Center / Gym', 71435580),
(196, 'Spa', 71435580),
(197, 'Restaurant', 71435580),
(198, 'Bar', 71435580),
(199, 'Live music/performance', 71435580),
(200, 'Happy hour', 71435580),
(201, 'Elevator', 71435580),
(202, 'Luggage Storage', 71435580),
(203, 'Pets Allowed', 71435580),
(204, 'Evening entertainment', 71435580),
(205, 'Nightclub/DJ', 71435580),
(206, 'Entertainment staff', 71435580),
(207, 'Karaoke', 71435580),
(208, 'Beach Access', 71435580),
(209, 'Games room', 71435580);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_gallery`
--

CREATE TABLE `hotel_gallery` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `dated_uploaded` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_gallery`
--

INSERT INTO `hotel_gallery` (`id`, `hotel_id`, `description`, `photo_path`, `dated_uploaded`) VALUES
(26, 71435580, 'front view', '11989520374246387605img-7.jpg', NULL),
(27, 71435580, 'back view', '48648912397570615320img-6.jpg', NULL),
(28, 71435580, 'cem veiw', '08812734954712506963img-4.jpg', NULL),
(29, 71435580, 'poet view', '71954746028510239683img-5.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `room_id` int(11) NOT NULL,
  `room_pass` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `room_type` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `max_occupancy` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_category`
--

CREATE TABLE `hotel_room_category` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `dated_added` datetime DEFAULT current_timestamp(),
  `price` double DEFAULT NULL,
  `custom_amenities` text DEFAULT NULL,
  `total_rooms` int(11) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_room_category`
--

INSERT INTO `hotel_room_category` (`id`, `hotel_id`, `category_name`, `dated_added`, `price`, `custom_amenities`, `total_rooms`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `descriptions`) VALUES
(72, 71435580, 'Standard Room', '2024-08-01 22:52:16', 100, 'Free WiFi, Air Conditioning', 50, 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg', 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg', 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg', 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg', 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg', NULL),
(73, 71435580, 'Deluxe Room', '2024-08-01 22:52:16', 150, 'Free WiFi, Air Conditioning, Mini Bar', 30, 'https://images.pexels.com/photos/3184335/pexels-photo-3184335.jpeg', 'https://images.pexels.com/photos/3184335/pexels-photo-3184335.jpeg', 'https://images.pexels.com/photos/3184335/pexels-photo-3184335.jpeg', 'https://images.pexels.com/photos/3184335/pexels-photo-3184335.jpeg', 'https://images.pexels.com/photos/3184335/pexels-photo-3184335.jpeg', NULL),
(74, 71435580, 'Suite', '2024-08-01 22:52:16', 250, 'Free WiFi, Air Conditioning, Mini Bar, Sea View', 20, 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg', 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg', 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg', 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg', 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg', NULL),
(75, 71435580, 'Family Room', '2024-08-01 22:52:16', 200, 'Free WiFi, Air Conditioning, Kitchenette', 15, 'https://images.pexels.com/photos/2082202/pexels-photo-2082202.jpeg', 'https://images.pexels.com/photos/2082202/pexels-photo-2082202.jpeg', 'https://images.pexels.com/photos/2082202/pexels-photo-2082202.jpeg', 'https://images.pexels.com/photos/2082202/pexels-photo-2082202.jpeg', 'https://images.pexels.com/photos/2082202/pexels-photo-2082202.jpeg', NULL),
(76, 71435580, 'Economy Room', '2024-08-01 22:52:16', 80, 'Free WiFi, Air Conditioning', 40, 'https://images.pexels.com/photos/1553287/pexels-photo-1553287.jpeg', 'https://images.pexels.com/photos/1553287/pexels-photo-1553287.jpeg', 'https://images.pexels.com/photos/1553287/pexels-photo-1553287.jpeg', 'https://images.pexels.com/photos/1553287/pexels-photo-1553287.jpeg', 'https://images.pexels.com/photos/1553287/pexels-photo-1553287.jpeg', NULL),
(77, 71435580, 'Executive Suite', '2024-08-01 22:52:16', 300, 'Free WiFi, Air Conditioning, Mini Bar, Sea View, Room Service', 10, 'https://images.pexels.com/photos/1472635/pexels-photo-1472635.jpeg', 'https://images.pexels.com/photos/1472635/pexels-photo-1472635.jpeg', 'https://images.pexels.com/photos/1472635/pexels-photo-1472635.jpeg', 'https://images.pexels.com/photos/1472635/pexels-photo-1472635.jpeg', 'https://images.pexels.com/photos/1472635/pexels-photo-1472635.jpeg', NULL),
(78, 71435580, 'Presidential Suite', '2024-08-01 22:52:16', 500, 'Free WiFi, Air Conditioning, Mini Bar, Sea View, Private Pool, Butler Service', 5, 'https://images.pexels.com/photos/325557/pexels-photo-325557.jpeg', 'https://images.pexels.com/photos/325557/pexels-photo-325557.jpeg', 'https://images.pexels.com/photos/325557/pexels-photo-325557.jpeg', 'https://images.pexels.com/photos/325557/pexels-photo-325557.jpeg', 'https://images.pexels.com/photos/325557/pexels-photo-325557.jpeg', NULL),
(79, 71435580, 'Single Room', '2024-08-01 22:52:16', 70, 'Free WiFi, Air Conditioning', 25, 'https://images.pexels.com/photos/4504242/pexels-photo-4504242.jpeg', 'https://images.pexels.com/photos/4504242/pexels-photo-4504242.jpeg', 'https://images.pexels.com/photos/4504242/pexels-photo-4504242.jpeg', 'https://images.pexels.com/photos/4504242/pexels-photo-4504242.jpeg', 'https://images.pexels.com/photos/4504242/pexels-photo-4504242.jpeg', NULL),
(80, 71435580, 'Twin Room', '2024-08-01 22:52:16', 90, 'Free WiFi, Air Conditioning, Mini Bar', 35, 'https://images.pexels.com/photos/2821059/pexels-photo-2821059.jpeg', 'https://images.pexels.com/photos/2821059/pexels-photo-2821059.jpeg', 'https://images.pexels.com/photos/2821059/pexels-photo-2821059.jpeg', 'https://images.pexels.com/photos/2821059/pexels-photo-2821059.jpeg', 'https://images.pexels.com/photos/2821059/pexels-photo-2821059.jpeg', NULL),
(81, 71435580, 'Luxury Suite', '2024-08-01 22:52:16', 400, 'Free WiFi, Air Conditioning, Mini Bar, Sea View, Private Terrace', 8, 'https://images.pexels.com/photos/2970066/pexels-photo-2970066.jpeg', 'https://images.pexels.com/photos/2970066/pexels-photo-2970066.jpeg', 'https://images.pexels.com/photos/2970066/pexels-photo-2970066.jpeg', 'https://images.pexels.com/photos/2970066/pexels-photo-2970066.jpeg', 'https://images.pexels.com/photos/2970066/pexels-photo-2970066.jpeg', NULL),
(82, 71435580, 'Corner Room', '2024-08-01 22:52:16', 110, 'Free WiFi, Air Conditioning, Balcony', 20, 'https://images.pexels.com/photos/1541187/pexels-photo-1541187.jpeg', 'https://images.pexels.com/photos/1541187/pexels-photo-1541187.jpeg', 'https://images.pexels.com/photos/1541187/pexels-photo-1541187.jpeg', 'https://images.pexels.com/photos/1541187/pexels-photo-1541187.jpeg', 'https://images.pexels.com/photos/1541187/pexels-photo-1541187.jpeg', NULL),
(83, 71435580, 'Penthouse Suite', '2024-08-01 22:52:16', 600, 'Free WiFi, Air Conditioning, Mini Bar, Sea View, Private Pool, Concierge Service', 3, 'https://images.pexels.com/photos/3760755/pexels-photo-3760755.jpeg', 'https://images.pexels.com/photos/3760755/pexels-photo-3760755.jpeg', 'https://images.pexels.com/photos/3760755/pexels-photo-3760755.jpeg', 'https://images.pexels.com/photos/3760755/pexels-photo-3760755.jpeg', 'https://images.pexels.com/photos/3760755/pexels-photo-3760755.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_checker`
--

CREATE TABLE `hotel_room_checker` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `category_room_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nearby_category_hotel`
--

CREATE TABLE `nearby_category_hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nearby_category_hotel`
--

INSERT INTO `nearby_category_hotel` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Attractions', 'Nearby places of interest and sightseeing locations', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(2, 'Transportation', 'Available public and private transportation options nearby', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(3, 'Dining', 'Local restaurants, cafes, and food joints', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(4, 'Shopping', 'Nearby shopping centers, markets, and stores', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(5, 'Entertainment', 'Nearby entertainment options such as theaters, cinemas, and nightlife', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(6, 'Nature', 'Natural attractions such as parks, gardens, and beaches', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(7, 'Healthcare', 'Nearby hospitals, clinics, and pharmacies', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(8, 'Education', 'Nearby educational institutions such as schools and universities', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(9, 'Business', 'Nearby business centers, offices, and conference facilities', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(10, 'Sports and Recreation', 'Nearby sports facilities and recreational areas', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(11, 'Cultural Sites', 'Nearby cultural and historical sites such as museums and monuments', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(12, 'Religious Sites', 'Nearby places of worship and religious significance', '2024-07-28 11:02:15', '2024-07-28 11:02:15'),
(13, 'Airports', 'Nearby airports and air travel facilities', '2024-07-28 11:02:15', '2024-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `nearby_places`
--

CREATE TABLE `nearby_places` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nearby_places`
--

INSERT INTO `nearby_places` (`id`, `hotel_id`, `category_id`, `name`, `description`, `distance`, `created_at`, `updated_at`) VALUES
(27, 71435580, 2, 'City Park', 'A spacious public park with walking trails and a lake', 300, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(28, 71435580, 3, 'Art Museum', 'A museum featuring contemporary and classic art exhibits', 1500, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(29, 71435580, 4, 'Gourmet Bistro', 'A restaurant offering gourmet meals and fine dining', 500, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(30, 71435580, 5, 'Community Library', 'A local library with extensive book collections and study areas', 700, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(31, 71435580, 6, 'Sunny Beach', 'A sandy beach popular for swimming and sunbathing', 1000, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(32, 71435580, 7, 'Hiking Trail', 'A scenic trail ideal for hiking and nature walks', 2000, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(33, 71435580, 8, 'Grand Mall', 'A large shopping mall with a variety of retail stores', 800, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(34, 71435580, 9, 'Historic Landmark', 'A landmark of historical and cultural importance', 600, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(35, 71435580, 10, 'Adventure Park', 'A park with adventure rides and recreational activities', 2500, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(36, 71435580, 11, 'Botanical Gardens', 'Gardens featuring a diverse collection of plants and flowers', 400, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(37, 71435580, 12, 'Movie Theater', 'A theater complex showing the latest films', 900, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(38, 71435580, 13, 'City Zoo', 'A zoo housing a wide variety of animal species', 1500, '2024-07-30 14:06:23', '2024-07-30 14:06:23'),
(39, 71435580, 1, 'Fitness Center', 'A gym with modern equipment and fitness classes', 200, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(40, 71435580, 2, 'Central Park', 'A large urban park with playgrounds and picnic areas', 350, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(41, 71435580, 3, 'Modern Art Gallery', 'A gallery showcasing modern and contemporary art pieces', 1200, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(42, 71435580, 4, 'Fine Dining Restaurant', 'A restaurant offering gourmet cuisine and a fine dining experience', 450, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(43, 71435580, 5, 'Public Library', 'A library with a vast collection of books and multimedia resources', 800, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(44, 71435580, 6, 'Beachfront', 'A beautiful beach ideal for swimming and relaxation', 950, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(45, 71435580, 7, 'Nature Reserve Trail', 'A trail through a protected nature reserve', 2200, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(46, 71435580, 8, 'Shopping Plaza', 'A shopping center with a variety of stores and eateries', 700, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(48, 71435580, 2, 'Botanical Park', 'A park with diverse plant species and walking paths', 300, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(49, 71435580, 3, 'Historical Museum', 'A museum dedicated to the history of the region', 1400, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(50, 71435580, 4, 'Italian Restaurant', 'A restaurant specializing in Italian cuisine', 550, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(51, 71435580, 5, 'Community Center', 'A center offering various community activities and services', 600, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(52, 71435580, 6, 'Lakeside Park', 'A park by the lake with boating and picnic facilities', 1100, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(53, 71435580, 7, 'Mountain View Trail', 'A hiking trail with stunning mountain views', 2500, '2024-07-30 14:08:48', '2024-07-30 14:08:48'),
(54, 71435580, 8, 'Entertainment Complex', 'A complex with cinemas, bowling, and arcade games', 850, '2024-07-30 14:08:48', '2024-07-30 14:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `special_requests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_accounts`
--
ALTER TABLE `business_accounts`
  ADD PRIMARY KEY (`hotel_id`),
  ADD UNIQUE KEY `hotel_account` (`business_account`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `hotel_room_category`
--
ALTER TABLE `hotel_room_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_room_checker`
--
ALTER TABLE `hotel_room_checker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby_category_hotel`
--
ALTER TABLE `nearby_category_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby_places`
--
ALTER TABLE `nearby_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_accounts`
--
ALTER TABLE `business_accounts`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_room_category`
--
ALTER TABLE `hotel_room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `hotel_room_checker`
--
ALTER TABLE `hotel_room_checker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nearby_category_hotel`
--
ALTER TABLE `nearby_category_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nearby_places`
--
ALTER TABLE `nearby_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
