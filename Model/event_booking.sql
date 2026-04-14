-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 09:40 PM
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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_Check` varchar(100) NOT NULL,
  `a_Status` varchar(100) NOT NULL,
  `a_Event_Name` varchar(100) NOT NULL,
  `a_EventID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`a_id`, `a_name`, `a_email`, `a_Check`, `a_Status`, `a_Event_Name`, `a_EventID`) VALUES
(1, 'John Doe', 'john.doe1@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(2, 'Jane Smith', 'jane.smith2@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(3, 'Alice Brown', 'alice.brown3@example.com', 'Unchecked', 'Absent', 'Tech Expo', 101),
(4, 'Bob Johnson', 'bob.johnson4@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(5, 'Carol Davis', 'carol.davis5@example.com', 'Unchecked', 'Absent', 'Tech Expo', 101),
(6, 'Dave Wilson', 'dave.wilson6@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(7, 'Eve Miller', 'eve.miller7@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(8, 'Frank Moore', 'frank.moore8@example.com', 'Unchecked', 'Absent', 'Tech Expo', 101),
(9, 'Grace Lee', 'grace.lee9@example.com', 'Checked', 'Present', 'Tech Expo', 101),
(10, 'Hank Clark', 'hank.clark10@example.com', 'Unchecked', 'Absent', 'Tech Expo', 101),
(11, 'Ivy Adams', 'ivy.adams11@example.com', 'Checked', 'Present', 'Science Fair', 102),
(12, 'Jack Turner', 'jack.turner12@example.com', 'Unchecked', 'Absent', 'Science Fair', 102),
(13, 'Karen Harris', 'karen.harris13@example.com', 'Checked', 'Present', 'Science Fair', 102),
(14, 'Leo Baker', 'leo.baker14@example.com', 'Checked', 'Present', 'Science Fair', 102),
(15, 'Mona Scott', 'mona.scott15@example.com', 'Unchecked', 'Absent', 'Science Fair', 102),
(16, 'Nate Young', 'nate.young16@example.com', 'Checked', 'Present', 'Science Fair', 102),
(17, 'Olivia Hill', 'olivia.hill17@example.com', 'Checked', 'Present', 'Science Fair', 102),
(18, 'Paul King', 'paul.king18@example.com', 'Unchecked', 'Absent', 'Science Fair', 102),
(19, 'Quinn Green', 'quinn.green19@example.com', 'Checked', 'Present', 'Science Fair', 102),
(20, 'Rachel Wright', 'rachel.wright20@example.com', 'Unchecked', 'Absent', 'Science Fair', 102),
(21, 'Sam White', 'sam.white21@example.com', 'Checked', 'Present', 'AI Summit', 103),
(22, 'Tina Lewis', 'tina.lewis22@example.com', 'Unchecked', 'Absent', 'AI Summit', 103),
(23, 'Umar Hall', 'umar.hall23@example.com', 'Checked', 'Present', 'AI Summit', 103),
(24, 'Vera Allen', 'vera.allen24@example.com', 'Checked', 'Present', 'AI Summit', 103),
(25, 'Will Harris', 'will.harris25@example.com', 'Unchecked', 'Absent', 'AI Summit', 103),
(26, 'Xena Nelson', 'xena.nelson26@example.com', 'Checked', 'Present', 'AI Summit', 103),
(27, 'Yasir Cox', 'yasir.cox27@example.com', 'Checked', 'Present', 'AI Summit', 103),
(28, 'Zoe Ward', 'zoe.ward28@example.com', 'Unchecked', 'Absent', 'AI Summit', 103),
(29, 'Alan Price', 'alan.price29@example.com', 'Checked', 'Present', 'AI Summit', 103),
(30, 'Bella Ross', 'bella.ross30@example.com', 'Unchecked', 'Absent', 'AI Summit', 103),
(31, 'Carl James', 'carl.james31@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(32, 'Dana Stone', 'dana.stone32@example.com', 'Unchecked', 'Absent', 'Robotics Day', 104),
(33, 'Eli Grant', 'eli.grant33@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(34, 'Fiona Hunt', 'fiona.hunt34@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(35, 'George Ray', 'george.ray35@example.com', 'Unchecked', 'Absent', 'Robotics Day', 104),
(36, 'Holly Lane', 'holly.lane36@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(37, 'Ian Reed', 'ian.reed37@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(38, 'Julia West', 'julia.west38@example.com', 'Unchecked', 'Absent', 'Robotics Day', 104),
(39, 'Kyle Ross', 'kyle.ross39@example.com', 'Checked', 'Present', 'Robotics Day', 104),
(40, 'Lily Ford', 'lily.ford40@example.com', 'Unchecked', 'Absent', 'Robotics Day', 104),
(41, 'Mason Bell', 'mason.bell41@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(42, 'Nina Fox', 'nina.fox42@example.com', 'Unchecked', 'Absent', 'Startup Meet', 105),
(43, 'Oscar Webb', 'oscar.webb43@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(44, 'Penny Dean', 'penny.dean44@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(45, 'Ray Kim', 'ray.kim45@example.com', 'Unchecked', 'Absent', 'Startup Meet', 105),
(46, 'Sara Long', 'sara.long46@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(47, 'Tom Nash', 'tom.nash47@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(48, 'Una Shaw', 'una.shaw48@example.com', 'Unchecked', 'Absent', 'Startup Meet', 105),
(49, 'Victor Snow', 'victor.snow49@example.com', 'Checked', 'Present', 'Startup Meet', 105),
(50, 'Wendy Cole', 'wendy.cole50@example.com', 'Unchecked', 'Absent', 'Startup Meet', 105),
(51, 'ZOZO', 'Zozo@gmail.com', 'Checked', 'Present', 'Tech Expo', 105),
(52, 'ZOZO', 'Zozo@gmail.com', 'Checked', 'Present', 'Tech Expo', 105),
(53, 'ZOZO', 'Zozo@gmail.com', 'Checked', 'Present', 'Tech Expo', 105),
(54, 'ZOZO', 'Zozo@gmail.com', 'Unchecked', 'Present', 'Tech Expo', 1111),
(55, 'antu', 'antu@gmail.com', 'Checked', 'Present', 'Tech Expo', 122),
(56, 'rahul', 'rahul@gmail.com', 'Unchecked', 'Present', 'Tech Expo', 123),
(57, 'zihan', 'zihan@gmail.com', 'Unchecked', 'Present', 'Tech Expo', 133),
(58, 'zozo', 'zozo@gmail.com', 'Unchecked', 'Present', 'Tech Expo', 122),
(59, 'Xz', 'sdfs@sdfsd.cd', 'Checked', 'asdaadsads', 'dsfsfsf', 5);

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
  `Thumbnail` text DEFAULT NULL,
  `venue_ID` int(11) NOT NULL,
  `PromoCode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`E_ID`, `E_Name`, `E_Location`, `E_Date`, `E_Time`, `E_Description`, `E_Category`, `E.Price`, `short_description`, `Thumbnail`, `venue_ID`, `PromoCode`) VALUES
(1, 'Music Era', 'Sunset Arena', '2025-05-24', '09:15:00.000000', 'Experience an unforgettable evening filled with smooth jazz melodies and live performances by talented musicians. Join us for Jazz Night Live — where soulful tunes, vibrant rhythms, and great ambiance come together to create the perfect night out for music lovers.', 'music', 50, 'Enjoy smooth jazz with top local artists!', 'Featured_Img_1.jpg', 3, 0),
(2, 'Champions League Final', 'Paris, France', '2025-05-31', '12:54:32.000000', 'Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.Enjoy the thrill of final match.', 'sports', 499, 'Enjoy the thrill of final match.', 'uefa-champions-league-stadium-0rqhq348gkv25lxg.jpg', 0, 0),
(3, 'Jazz Night Live', 'New Orleans, USA', '2025-06-15', '19:30:00.000000', 'Experience an unforgettable evening filled with smooth jazz melodies and live performances by talented musicians. Perfect for music lovers looking to unwind in a soulful atmosphere.', 'music', 199, 'Live jazz performances in a cozy setting.', 'Jazz Night Live.png', 0, 0),
(4, 'Tech Innovators Summit', 'San Francisco, USA', '2025-08-10', '09:00:00.000000', 'Join industry leaders and forward-thinking entrepreneurs at the Tech Innovators Summit to explore cutting-edge technologies and business strategies shaping the future.', 'conference', 299, 'Explore future tech with top minds.', 'Tech Innovators Summit.png', 0, 0),
(5, 'Art & Culture Fest', 'Florence, Italy', '2025-07-21', '11:00:00.000000', 'Celebrate creativity at the Art & Culture Fest, featuring visual art exhibitions, workshops, and performances. A cultural fusion of tradition and modern expression.', 'arts', 99, 'Celebrate creativity and culture together.', 'Art & Culture Fest.jpg', 0, 0),
(6, 'Startup Pitch Day', 'Berlin, Germany', '2025-09-05', '10:00:00.000000', 'Witness ambitious entrepreneurs pitch their groundbreaking ideas to a panel of investors and mentors. Networking opportunities and innovation await!', 'business', 20, 'Pitch your startup to investors.', 'Startup Pitch Day.jpg', 0, 0),
(7, 'Comedy Night Special', 'London, UK', '2025-06-01', '20:00:00.000000', 'Laugh out loud with some of the best stand-up comedians from around the world. Comedy Night Special guarantees a fun evening filled with laughter and joy.', 'entertainment', 49, 'An evening full of laughter and fun.', 'Comedy Night Special.jpg', 0, 0),
(8, 'Fitness Bootcamp', 'Sydney, Australia', '2025-07-05', '06:30:00.000000', 'Start your day strong with our intensive fitness bootcamp designed to boost your stamina, strength, and motivation. Open for all fitness levels.', 'health', 59, 'Morning workouts that push limits.', 'Fitness Bootcamp.jpg\r\n', 0, 0),
(9, 'Food Carnival 2025', 'Bangkok, Thailand', '2025-08-12', '14:00:00.000000', 'Taste flavors from around the world at the Food Carnival 2025. A paradise for food lovers, featuring street food, chef demos, and culinary contests.', 'food', 25, 'Taste food from around the world.', 'Food Carnival 2025.jpeg', 0, 0),
(10, 'Eco Awareness March', 'Amsterdam, Netherlands', '2025-06-20', '10:00:00.000000', 'Support environmental sustainability and raise your voice for climate action in the annual Eco Awareness March. Let’s walk for a greener tomorrow.', 'social', 10, 'March for a greener planet.', 'Eco Awareness March.webp', 0, 0),
(11, 'Hblu On the floor', 'Noakhali, Bangladesh', '2025-05-29', '09:41:31.000000', 'Bla bla bla', 'arts', 69, 'So fun!!', 'Hbau.avif', 0, 0),
(12, 'Jazz Night Fever', 'Dhaka, Bangladesh', '2025-06-01', '07:00:00.000000', 'A smooth night of live jazz performances.', 'music', 120, 'Smooth jazz all night.', 'jazz.avif', 0, 0),
(13, 'Tech Expo 2025', 'Chattogram, Bangladesh', '2025-06-10', '10:00:00.000000', 'Discover the latest in tech and innovation.', 'technology', 300, 'Explore new tech.', 'medium-shot-man-wearing-vr-glasses_23-2149126949.avif', 0, 0),
(14, 'Color Fest', 'Sylhet, Bangladesh', '2025-06-15', '11:00:00.000000', 'A colorful festival with music and food.', 'festival', 150, 'Get colorful and dance.', 'realistic-colorful-holi-gulal_23-2148850705.avif', 0, 0),
(15, 'Startup Meetup', 'Dhaka, Bangladesh', '2025-06-20', '09:30:00.000000', 'Meet investors and fellow founders.', 'business', 0, 'Pitch your startup.', 'person-using-tablet_53876-13420.avif', 0, 0),
(16, 'Comedy Carnival', 'Rajshahi, Bangladesh', '2025-06-25', '08:00:00.000000', 'Laugh out loud with top comedians.', 'theatre', 200, 'Laugh all night!', 'puppet-show-free-photo-hd-background_915071-98517.avif', 0, 0),
(17, 'Photography Walk', 'Cox’s Bazar, Bangladesh', '2025-07-01', '06:30:00.000000', 'Explore and shoot beautiful landscapes.', 'art', 100, 'Click beautiful scenes.', 'beautiful_1203-2633.avif', 0, 0),
(18, 'Book Fair', 'Dhaka, Bangladesh', '2025-07-05', '10:00:00.000000', 'Discover thousands of books and meet authors.', 'education', 50, 'Books & authors.', 'carnival-city-stacked-books-with-literaryt-00014-01_1022456-34011.avif', 0, 0),
(19, 'Foodies Festival', 'Khulna, Bangladesh', '2025-07-10', '11:00:00.000000', 'Taste dishes from top chefs and street vendors.', 'food', 250, 'Tasty food fest.', 'flat-design-street-food-market-illustration_52683-118401.avif', 0, 0),
(20, 'Gaming League Finals', 'Dhaka, Bangladesh', '2025-07-15', '04:00:00.000000', 'Watch the best teams battle it out.', 'esports', 400, 'Top gamers compete.', 'male-game-show-host-is-hosting-competition_1218436-1665.avif', 0, 0),
(21, 'Dance Battle', 'Comilla, Bangladesh', '2025-07-20', '05:30:00.000000', 'Who will be the dance champion?', 'dance', 180, 'Dance like fire.', 'photo-dynamic-portrait-young-man-woman-dancing-hiphop-isolated-black-background-with-mixed-light_575980-47577.avif', 0, 0),
(22, 'Green Future Forum', 'Dhaka, Bangladesh', '2025-07-25', '09:00:00.000000', 'Talks and workshops on sustainability.', 'conference', 80, 'Sustain the future.', 'tech-brand-together_23-2150966123.avif', 0, 0),
(23, 'Night Sky Watch', 'Rangamati, Bangladesh', '2025-08-01', '08:00:00.000000', 'View stars and planets with experts.', 'science', 70, 'See stars clearly.', 'camera-milky-way-blackground_335224-790.avif', 0, 0),
(24, 'Coding Bootcamp', 'Dhaka, Bangladesh', '2025-08-05', '09:00:00.000000', 'Learn web development in 3 days.', 'education', 500, 'Code your future.', 'programming-background.avif', 0, 0),
(25, 'Live Orchestra', 'Barisal, Bangladesh', '2025-08-10', '07:30:00.000000', 'Classical music performed live.', 'music', 220, 'Live classical music.', 'band-performing-studio_107420-96137.avif', 0, 0),
(26, 'Art Exhibition', 'Dhaka, Bangladesh', '2025-08-15', '12:00:00.000000', 'Explore modern and traditional artwork.', 'arts', 60, 'Visual art showcase.', 'watercolor-art-exhibition.avif', 0, 0),
(27, 'Charity Run', 'Sylhet, Bangladesh', '2025-08-20', '06:00:00.000000', 'Run for a cause and raise funds.', 'sports', 30, 'Run and donate.', 'world-cancer-day-awareness-landing.avif', 0, 0),
(28, 'Film Festival', 'Dhaka, Bangladesh', '2025-08-25', '03:00:00.000000', 'Watch indie and international films.', 'movie', 150, 'Films from around the world.', 'cinema-movie-film.avif', 0, 0),
(29, 'Startup Pitch Day', 'Dhaka, Bangladesh', '2025-08-28', '10:00:00.000000', 'Pitch to investors, win funding.', 'business', 40, 'Show your ideas.', 'business-template-design_23-2151119828.avif', 0, 0),
(30, 'Youth Leadership Summit', 'Khulna, Bangladesh', '2025-09-01', '09:00:00.000000', 'Empowering the leaders of tomorrow.', 'education', 90, 'Lead the future.', 'gradient-international-youth.avif', 0, 0),
(31, 'Drone Show', 'Cox’s Bazar, Bangladesh', '2025-09-05', '08:30:00.000000', 'Sky lights up with drone magic.', 'technology', 200, 'Drones in the sky.', 'generative-ai-drone-performs.avif', 0, 0),
(50, 'Saturday Night Main ', 'Newyork, USA', '2025-05-31', '20:30:00.000000', 'It looks as if WWE will keep the tradition of Saturday Night’s Main Event alive.', 'Sports', 299, 'It looks as if WWE will keep the tradition of Saturday Night’s Main Event alive. Last month’s re-deb', '20250117.webp', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `Pro_Id` int(11) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Discount` varchar(50) NOT NULL,
  `Pro_Exp-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`Pro_Id`, `Code`, `Discount`, `Pro_Exp-date`) VALUES
(1, 'ASDAD', '50', '2025-05-31'),
(2, 'sfsdf', '50', '2025-05-31'),
(3, 'xs', '50', '2025-05-30'),
(4, 'xyz', '40', '2025-05-24'),
(5, 'sfsd', '50', '2025-05-16'),
(6, 'AVS', '10', '2025-05-31'),
(7, 'Last', '20', '2025-05-31');

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
  `U_Type` varchar(100) NOT NULL,
  `isBanned` tinyint(1) DEFAULT NULL,
  `isSuspended` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_Id`, `U_FirstName`, `U_LastName`, `U_Email`, `U_Password`, `U_Type`, `isBanned`, `isSuspended`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', NULL, NULL),
(3, 'admin', 'admin', 'admin@fake.com', 'admin', 'admin', 0, NULL),
(4, 'Zihan', 'Islam', 'Zihan@gmail.com', 'haha', 'admin', 0, NULL),
(6, 'Rafi', 'Khan', 'rafi_khan@example.com', 'welcome', 'admin', 0, NULL),
(8, 'Hasan', 'Ali', 'hasan.ali@example.com', 'secure456', 'customer', 0, NULL),
(9, 'Nadia', 'Sultana', 'nadia_s@example.com', 'testpass', 'admin', 0, NULL),
(10, 'Niloy', 'Sneha', 'NiloySneha@gmail.com', 'sssss', 'customer', 0, NULL),
(41, 'Jane', 'Smith', 'jane.smith@example.com', 'pass123', 'customer', 0, NULL),
(44, 'Charlie', 'Davis', 'charlie.d@example.com', 'pass123', 'customer', 0, NULL),
(45, 'Emily', 'Clark', 'emily.c@example.com', 'pass123', 'admin', 0, '2025-06-08'),
(46, 'David', 'Lewis', 'david.l@example.com', 'pass123', 'customer', 0, NULL),
(47, 'Grace', 'Hall', 'grace.h@example.com', 'pass123', 'customer', 0, NULL),
(48, 'Henry', 'Allen', 'henry.a@example.com', 'pass123', 'customer', 0, NULL),
(49, 'Isla', 'Young', 'isla.y@example.com', 'pass123', 'customer', 0, NULL),
(50, 'Jack', 'King', 'jack.k@example.com', 'pass123', 'customer', 1, NULL),
(51, 'Lily', 'Scott', 'lily.s@example.com', 'pass123', 'customer', 0, NULL),
(52, 'Mason', 'Green', 'mason.g@example.com', 'pass123', 'customer', 0, NULL),
(53, 'Nora', 'Adams', 'nora.a@example.com', 'pass123', 'customer', 0, NULL),
(54, 'Oscar', 'Baker', 'oscar.b@example.com', 'pass123', 'customer', 0, NULL),
(55, 'Penny', 'Campbell', 'penny.c@example.com', 'pass123', 'customer', 0, NULL),
(56, 'Quinn', 'Mitchell', 'quinn.m@example.com', 'pass123', 'customer', 0, NULL),
(57, 'Ryan', 'Perez', 'ryan.p@example.com', 'pass123', 'customer', 0, NULL),
(58, 'Sophia', 'Roberts', 'sophia.r@example.com', 'pass123', 'customer', 0, NULL),
(59, 'Thomas', 'Turner', 'thomas.t@example.com', 'pass123', 'customer', 0, '2025-06-07'),
(60, 'Uma', 'Phillips', 'uma.p@example.com', 'pass123', 'customer', 1, NULL),
(61, 'Victor', 'Evans', 'victor.e@example.com', 'pass123', 'customer', 1, NULL),
(62, 'Wendy', 'Collins', 'wendy.c@example.com', 'pass123', 'customer', 0, NULL),
(63, 'Xavier', 'Murphy', 'xavier.m@example.com', 'pass123', 'customer', 0, NULL),
(64, 'Yara', 'Richardson', 'yara.r@example.com', 'pass123', 'customer', 0, NULL),
(65, 'Antu', 'Chodu', 'Antu@gmail.com', '123456789', 'customer', NULL, NULL);

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
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`V_Id`, `V_Name`, `V_Capacity`, `V_Location`) VALUES
(1, 'sdad', '3453', 'sdfsdf'),
(2, 'xfgdfg', '42344', 'sfsdfs'),
(3, 'Gojnobi Stadim', '100000', 'Bhola, Sadar'),
(4, 'Camp Nuo', '800000', 'Barcelona, spain'),
(5, 'Santiago Bernabeu', '150000', 'Madrid, Spain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`E_ID`),
  ADD KEY `Venue_ID_fk` (`venue_ID`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_Id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`V_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `E_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `Pro_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `V_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`venue_ID`) REFERENCES `venues` (`V_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
