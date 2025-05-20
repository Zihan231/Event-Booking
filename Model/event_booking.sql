-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 02:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `E_ID` int(100) NOT NULL,
  `E_Name` varchar(100) NOT NULL,
  `E_Location` varchar(100) NOT NULL,
  `E_Date` date NOT NULL,
  `E_Time` time(6) NOT NULL,
  `E_Description` text NOT NULL,
  `E_Category` varchar(20) NOT NULL,
  `E.Price` int(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `Thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`E_ID`, `E_Name`, `E_Location`, `E_Date`, `E_Time`, `E_Description`, `E_Category`, `E.Price`, `short_description`, `Thumbnail`) VALUES
(1, 'Music Era', 'Sunset Arena', '2025-05-24', '09:15:00.000000', 'Experience an unforgettable evening filled with smooth jazz melodies and live performances by talented musicians. Join us for Jazz Night Live — where soulful tunes, vibrant rhythms, and great ambiance come together to create the perfect night out for music lovers.', 'music', 50, 'Enjoy smooth jazz with top local artists!', 'Featured_Img_1.jpg'),
(2, 'Champions League Final', 'Paris, France', '2025-05-31', '12:54:32.000000', 'Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.', 'sports', 499, 'Enjoy the thrill of final match.', 'uefa-champions-league-stadium-0rqhq348gkv25lxg.jpg'),
(3, 'Jazz Night Live', 'New Orleans, USA', '2025-06-15', '19:30:00.000000', 'Experience an unforgettable evening filled with smooth jazz melodies and live performances by talented musicians. Perfect for music lovers looking to unwind in a soulful atmosphere.', 'music', 199, 'Live jazz performances in a cozy setting.', 'Jazz Night Live.png'),
(4, 'Tech Innovators Summit', 'San Francisco, USA', '2025-08-10', '09:00:00.000000', 'Join industry leaders and forward-thinking entrepreneurs at the Tech Innovators Summit to explore cutting-edge technologies and business strategies shaping the future.', 'conference', 299, 'Explore future tech with top minds.', 'Tech Innovators Summit.png'),
(5, 'Art & Culture Fest', 'Florence, Italy', '2025-07-21', '11:00:00.000000', 'Celebrate creativity at the Art & Culture Fest, featuring visual art exhibitions, workshops, and performances. A cultural fusion of tradition and modern expression.', 'arts', 99, 'Celebrate creativity and culture together.', 'Art & Culture Fest.jpg'),
(6, 'Startup Pitch Day', 'Berlin, Germany', '2025-09-05', '10:00:00.000000', 'Witness ambitious entrepreneurs pitch their groundbreaking ideas to a panel of investors and mentors. Networking opportunities and innovation await!', 'business', 20, 'Pitch your startup to investors.', 'Startup Pitch Day.jpg'),
(7, 'Comedy Night Special', 'London, UK', '2025-06-01', '20:00:00.000000', 'Laugh out loud with some of the best stand-up comedians from around the world. Comedy Night Special guarantees a fun evening filled with laughter and joy.', 'entertainment', 49, 'An evening full of laughter and fun.', 'Comedy Night Special.jpg'),
(8, 'Fitness Bootcamp', 'Sydney, Australia', '2025-07-05', '06:30:00.000000', 'Start your day strong with our intensive fitness bootcamp designed to boost your stamina, strength, and motivation. Open for all fitness levels.', 'health', 59, 'Morning workouts that push limits.', 'Fitness Bootcamp.jpg\r\n'),
(9, 'Food Carnival 2025', 'Bangkok, Thailand', '2025-08-12', '14:00:00.000000', 'Taste flavors from around the world at the Food Carnival 2025. A paradise for food lovers, featuring street food, chef demos, and culinary contests.', 'food', 25, 'Taste food from around the world.', 'Food Carnival 2025.jpeg'),
(10, 'Eco Awareness March', 'Amsterdam, Netherlands', '2025-06-20', '10:00:00.000000', 'Support environmental sustainability and raise your voice for climate action in the annual Eco Awareness March. Let’s walk for a greener tomorrow.', 'social', 10, 'March for a greener planet.', 'Eco Awareness March.webp'),
(11, 'Hblu On the floor', 'Noakhali, Bangladesh', '2025-05-29', '09:41:31.000000', 'Bla bla bla', 'arts', 69, 'So fun!!', 'Hbau.avif'),
(12, 'Jazz Night Fever', 'Dhaka, Bangladesh', '2025-06-01', '07:00:00.000000', 'A smooth night of live jazz performances.', 'music', 120, 'Smooth jazz all night.', 'jazz.avif'),
(13, 'Tech Expo 2025', 'Chattogram, Bangladesh', '2025-06-10', '10:00:00.000000', 'Discover the latest in tech and innovation.', 'technology', 300, 'Explore new tech.', 'medium-shot-man-wearing-vr-glasses_23-2149126949.avif'),
(14, 'Color Fest', 'Sylhet, Bangladesh', '2025-06-15', '11:00:00.000000', 'A colorful festival with music and food.', 'festival', 150, 'Get colorful and dance.', 'realistic-colorful-holi-gulal_23-2148850705.avif'),
(15, 'Startup Meetup', 'Dhaka, Bangladesh', '2025-06-20', '09:30:00.000000', 'Meet investors and fellow founders.', 'business', 0, 'Pitch your startup.', 'person-using-tablet_53876-13420.avif'),
(16, 'Comedy Carnival', 'Rajshahi, Bangladesh', '2025-06-25', '08:00:00.000000', 'Laugh out loud with top comedians.', 'theatre', 200, 'Laugh all night!', 'puppet-show-free-photo-hd-background_915071-98517.avif'),
(17, 'Photography Walk', 'Cox’s Bazar, Bangladesh', '2025-07-01', '06:30:00.000000', 'Explore and shoot beautiful landscapes.', 'art', 100, 'Click beautiful scenes.', 'beautiful_1203-2633.avif'),
(18, 'Book Fair', 'Dhaka, Bangladesh', '2025-07-05', '10:00:00.000000', 'Discover thousands of books and meet authors.', 'education', 50, 'Books & authors.', 'carnival-city-stacked-books-with-literaryt-00014-01_1022456-34011.avif'),
(19, 'Foodies Festival', 'Khulna, Bangladesh', '2025-07-10', '11:00:00.000000', 'Taste dishes from top chefs and street vendors.', 'food', 250, 'Tasty food fest.', 'flat-design-street-food-market-illustration_52683-118401.avif'),
(20, 'Gaming League Finals', 'Dhaka, Bangladesh', '2025-07-15', '04:00:00.000000', 'Watch the best teams battle it out.', 'esports', 400, 'Top gamers compete.', 'male-game-show-host-is-hosting-competition_1218436-1665.avif'),
(21, 'Dance Battle', 'Comilla, Bangladesh', '2025-07-20', '05:30:00.000000', 'Who will be the dance champion?', 'dance', 180, 'Dance like fire.', 'photo-dynamic-portrait-young-man-woman-dancing-hiphop-isolated-black-background-with-mixed-light_575980-47577.avif'),
(22, 'Green Future Forum', 'Dhaka, Bangladesh', '2025-07-25', '09:00:00.000000', 'Talks and workshops on sustainability.', 'conference', 80, 'Sustain the future.', 'tech-brand-together_23-2150966123.avif'),
(23, 'Night Sky Watch', 'Rangamati, Bangladesh', '2025-08-01', '08:00:00.000000', 'View stars and planets with experts.', 'science', 70, 'See stars clearly.', 'camera-milky-way-blackground_335224-790.avif'),
(24, 'Coding Bootcamp', 'Dhaka, Bangladesh', '2025-08-05', '09:00:00.000000', 'Learn web development in 3 days.', 'education', 500, 'Code your future.', 'programming-background.avif'),
(25, 'Live Orchestra', 'Barisal, Bangladesh', '2025-08-10', '07:30:00.000000', 'Classical music performed live.', 'music', 220, 'Live classical music.', 'band-performing-studio_107420-96137.avif'),
(26, 'Art Exhibition', 'Dhaka, Bangladesh', '2025-08-15', '12:00:00.000000', 'Explore modern and traditional artwork.', 'arts', 60, 'Visual art showcase.', 'watercolor-art-exhibition.avif'),
(27, 'Charity Run', 'Sylhet, Bangladesh', '2025-08-20', '06:00:00.000000', 'Run for a cause and raise funds.', 'sports', 30, 'Run and donate.', 'world-cancer-day-awareness-landing.avif'),
(28, 'Film Festival', 'Dhaka, Bangladesh', '2025-08-25', '03:00:00.000000', 'Watch indie and international films.', 'movie', 150, 'Films from around the world.', 'cinema-movie-film.avif'),
(29, 'Startup Pitch Day', 'Dhaka, Bangladesh', '2025-08-28', '10:00:00.000000', 'Pitch to investors, win funding.', 'business', 0, 'Show your ideas.', 'business-template-design_23-2151119828.avif'),
(30, 'Youth Leadership Summit', 'Khulna, Bangladesh', '2025-09-01', '09:00:00.000000', 'Empowering the leaders of tomorrow.', 'education', 90, 'Lead the future.', 'gradient-international-youth.avif'),
(31, 'Drone Show', 'Cox’s Bazar, Bangladesh', '2025-09-05', '08:30:00.000000', 'Sky lights up with drone magic.', 'technology', 200, 'Drones in the sky.', 'generative-ai-drone-performs.avif');

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `Pro_Id` int(100) NOT NULL,
  `Pro_Promo-code` varchar(100) NOT NULL,
  `Pro_Discount` varchar(50) NOT NULL,
  `Pro_Exp-date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_Id` int(100) NOT NULL,
  `U_FirstName` varchar(100) NOT NULL,
  `U_LastName` varchar(100) NOT NULL,
  `U_Email` varchar(100) NOT NULL,
  `U_Password` varchar(100) NOT NULL,
  `U_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `V_Id` int(100) NOT NULL,
  `V_Name` varchar(20) NOT NULL,
  `V_Capacity` varchar(100) NOT NULL,
  `V_Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`V_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `E_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `V_Id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
