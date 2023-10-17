-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 09:59 AM
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
-- Database: `unilink`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityform`
--

CREATE TABLE `activityform` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activity_title` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `partner_type` varchar(100) DEFAULT NULL,
  `partner` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `rationale` mediumtext DEFAULT NULL,
  `objective` mediumtext DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activityform`
--

INSERT INTO `activityform` (`id`, `activity_title`, `campus`, `college`, `program`, `partner_type`, `partner`, `start_date`, `end_date`, `rationale`, `objective`, `budget`) VALUES
('1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Municipal Agriculture Office/Fishery Unit-Nasugbu', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', 'Fund Partner Agency'),
('9cfad68e-62a3-11ee-9903-b42e99640312', 'Graduation Disco Party', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-07-30', '2023-07-31', '<p>Alak Ingredients</p>', '<p>Pulutan Ingredients</p>', 'Fund of University');

-- --------------------------------------------------------

--
-- Table structure for table `activity_representatives`
--

CREATE TABLE `activity_representatives` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activityform_id` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_representatives`
--

INSERT INTO `activity_representatives` (`id`, `activityform_id`, `role`) VALUES
('1b6f9dec-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Leader/s'),
('1b6fa8bd-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Member/s'),
('5072df9a-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Project Member/s'),
('5072ecc3-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Project Staff');

-- --------------------------------------------------------

--
-- Table structure for table `activity_representatives_responsibilities`
--

CREATE TABLE `activity_representatives_responsibilities` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activity_representatives_id` varchar(255) DEFAULT NULL,
  `responsibilities_id` varchar(255) DEFAULT NULL,
  `responsibility` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_representatives_responsibilities`
--

INSERT INTO `activity_representatives_responsibilities` (`id`, `activity_representatives_id`, `responsibilities_id`, `responsibility`) VALUES
('1b78b545-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('1b79eefd-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('507c027c-6cbb-11ee-b322-f80dac465db8', '5072df9a-6cbb-11ee-b322-f80dac465db8', 'cbc44f0f-5318-11ee-aea5-0a0027000002', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('507de0e7-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Taga collect ng funds para sa alak at pulutan'),
('507e93f9-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Taga bili ng alak at pulutan'),
('507f134b-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Taga timpla ng alak'),
('50800d7e-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Taga luto ng pulutan');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activityform_id` varchar(255) DEFAULT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_cost` double DEFAULT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `activityform_id`, `item_description`, `quantity`, `unit_cost`, `total`) VALUES
('1b7dd049-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'water', 100, 20, 2000),
('1b7e8d9a-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'sandwich ', 100, 15, 1500),
('50823656-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Gin Bilog', 25, 75, 1875),
('5082707a-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Sizzling Sisig', 25, 80, 2000),
('5082a5a3-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Tokwa baboy', 25, 50, 1250),
('5082f054-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'water', 56, 78, 4368),
('50833aed-6cbb-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'water', 45, 67, 3015);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(50) NOT NULL,
  `campus_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `campus_name`, `address`) VALUES
(5, 'ARASOF-Nasugbu', 'Nasugbu, Batangas'),
(8, 'Alangilan Campus', 'Alangilan, Batangas'),
(9, 'Balayan Campus', 'Balayan, Batangas'),
(10, 'JPLPC-Malvar Campus', 'Malvar, Batangas'),
(15, 'Pablo Borbon Campus', 'Rizal Avenue, Batangas '),
(17, 'Lemery Campus', 'Lemery, Batangas'),
(20, 'Mabini Campus', 'Mabini, Batangas'),
(21, 'Lipa Campus', 'Lipa, Batangas'),
(22, 'Rosario Campus', 'Rosario, Batangas'),
(23, 'San Juan Campus', 'San Juan, Batangas'),
(24, 'Lobo Campus', 'Lobo, Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collegeID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `college_abbrev` varchar(50) DEFAULT NULL,
  `campusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`collegeID`, `name`, `college_abbrev`, `campusID`) VALUES
(1, 'College of Informatics and Computing Sciences', 'CICS', 5),
(12, 'College of Accountancy, Business, Economics, International Hospitality Management', 'CABEIHM', 5),
(13, 'College of Arts and Sciences', 'CAS', 5),
(14, 'College of Nursing and Allied Health Sciences', 'CONAHS', 5),
(15, 'College of Teacher Education', 'CTE', 5);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `category`, `name`) VALUES
(1, 'International', 'Philippine National IT Standards Foundation'),
(2, 'Local', 'Canyon Cove'),
(3, 'Local', 'Municipality of Lian'),
(4, 'International', 'Global University Network for Innovation'),
(5, 'International', 'Hospitality Institute of America-Philippines Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `campus_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `abbreviation` varchar(50) NOT NULL,
  `program` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `campus_id`, `college_id`, `abbreviation`, `program`) VALUES
(3, 5, 1, 'BSIT', 'Bachelor of Science in Information Technology'),
(7, 5, 12, 'BSA', 'Bachelor of Science in Accountancy'),
(8, 5, 12, 'BSMA', 'Bachelor of Science in Management Accounting'),
(9, 5, 12, 'BSBA', 'Bachelor of Science in Business Administration'),
(10, 5, 12, 'BSHM', 'Bachelor of Science in Hospitality Management'),
(11, 5, 12, 'BSTM', 'Bachelor of Science in Tourism Management'),
(12, 5, 13, 'BAC', 'Bachelor of Arts in Communication'),
(13, 5, 13, 'BSP', 'Bachelor of Science in Psychology'),
(14, 5, 13, 'BSFT', 'Bachelor of Science in Food Technology'),
(15, 5, 13, 'BSC', 'Bachelor of Science in Criminology'),
(16, 5, 13, 'BSFAS', 'Bachelor of Science in Fisheries and Aquatic Sciences'),
(17, 5, 14, 'BSN', 'Bachelor of Science in Nursing'),
(18, 5, 14, 'BSND', 'Bachelor of Science in Nutrition and Dietetics'),
(19, 5, 15, 'BEED', 'Bachelor of Elementary Education'),
(20, 5, 15, 'BPED', 'Bachelor of Physical Education'),
(21, 5, 15, 'BSED', 'Bachelor of Secondary Education');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activity_representatives_id` varchar(255) DEFAULT NULL,
  `representative_roles_id` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`id`, `activity_representatives_id`, `representative_roles_id`, `name`, `designation`) VALUES
('1b7be79b-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('1b7d108c-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('507cc403-6cbb-11ee-b322-f80dac465db8', '5072df9a-6cbb-11ee-b322-f80dac465db8', NULL, 'Dr. Lorissa Joanna Buenas', 'CICS Dean'),
('507d7e9b-6cbb-11ee-b322-f80dac465db8', '5072df9a-6cbb-11ee-b322-f80dac465db8', NULL, 'Asst. Prof. Renz Mervin A. Salac', 'Chief Proponent and Faculty Member CICS'),
('50806107-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Ako', 'Student'),
('5080c3f3-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Deanne Bulilit', 'Student'),
('508118b6-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Dudoy', 'Student'),
('508153fb-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Duday', 'Student'),
('5081a709-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Joe Honey', 'Student'),
('5081e4ee-6cbb-11ee-b322-f80dac465db8', '5072ecc3-6cbb-11ee-b322-f80dac465db8', NULL, 'Joy-lyn', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `representative_roles`
--

CREATE TABLE `representative_roles` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `name` varchar(100) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `representative_roles`
--

INSERT INTO `representative_roles` (`id`, `name`, `designation`) VALUES
('5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('56347d12-5318-11ee-aea5-0a0027000002', 'Atty. Luzviminda V. Rosales', 'Vice President for Administrator and Financer'),
('56347d3b-5318-11ee-aea5-0a0027000002', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('56347da9-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Sandy M. Gonzales', 'Campus Director'),
('56347dce-5318-11ee-aea5-0a0027000002', 'Dr. Joy M. Reyes', 'Campus Director'),
('56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('56347ede-5318-11ee-aea5-0a0027000002', 'Dr. Rhobert E. Alvarez', 'Capus Director'),
('56347f03-5318-11ee-aea5-0a0027000002', 'Dr. Romel U. Briones', 'Campus Director'),
('56347f23-5318-11ee-aea5-0a0027000002', 'Dr. Jodi Belina A. Bejer', 'Campus Director'),
('56347f43-5318-11ee-aea5-0a0027000002', 'Atty. Alvin R. De Silva', 'Chancellor'),
('56347f63-5318-11ee-aea5-0a0027000002', 'Dr. Philip Y. Del Rosario', 'Chancellor'),
('56347f84-5318-11ee-aea5-0a0027000002', 'Dr. Enrico M. Dalangin', 'Chancellor'),
('56347fa3-5318-11ee-aea5-0a0027000002', 'Dr. Vaberlie P. Mandane Garcia', 'Director for Extension Servies'),
('56347fcb-5318-11ee-aea5-0a0027000002', 'Dr. Benedict O. Medina', 'Asst. Director for Extension Monitoring and Impace Assessment'),
('56347fea-5318-11ee-aea5-0a0027000002', 'Ms. Kristia Lei A. Reyes', 'Asst. Director for Community Development Services'),
('5634800b-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Asst. Director for Gender and Development Advocacies'),
('5634806d-5318-11ee-aea5-0a0027000002', 'Dr. Vaberlie P. Mandane-Garcia', 'Vice Chancellor for Research, Development and Extension Services'),
('56348096-5318-11ee-aea5-0a0027000002', 'Dr. Elisa D. Gutierrez', 'Vice Chancellor for Research, Development and Extension Services'),
('563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('563480d6-5318-11ee-aea5-0a0027000002', 'Asst. Prof. Rosana C. Lat', 'Vice Chancellor for Research, Development and Extension Services'),
('563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services');

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `role` varchar(100) NOT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`id`, `role`, `responsibility`) VALUES
('cbc3acfb-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Spearhead the extension project'),
('cbc44b18-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Identify the projects overall goal, outcome and objectives'),
('cbc44ded-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Monitor the flow of the training'),
('cbc44e89-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Prepare project/activity proposal'),
('cbc44eca-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Coordinate with the coorperating agency/resource persons'),
('cbc44f0f-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('cbc44f54-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Delegate work to the project, staff'),
('cbc44f96-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assist in coordination with the coorperating agency'),
('cbc44fd1-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assign resource persons from the University with specialization in the topics'),
('cbc4500f-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Act as technical team in the online platforms'),
('cbc45041-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Coordinate with the rest of the project management team'),
('cbc45079-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in communication with the coorperating agencies'),
('cbc450ac-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in organization of the beneficiaries'),
('cbc450e4-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', ' Assist in the preparation and implementing of the extension program'),
('cbc4511a-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Prepare training materials and presentations'),
('cbc45151-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Prepare required reports/documentation'),
('cbc452c7-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in the morning and evaluation of the extension program');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `mid_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `privelege` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `mid_name`, `last_name`, `sex`, `email`, `campus`, `college`, `pass`, `privelege`) VALUES
(7, 'Asst. Prof.', 'Renz Mervin', 'A.', 'Salac', 'Male', 'renz.mervin@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', '$2y$10$rbFxMWen7a7QZJcTztgQRuf4/AmxWQAmIXIYFIP4TMSe5R16k41Pu', 'Faculty'),
(8, 'Ms.', 'Ma. Deanne Grace', 'Galima', 'Anorico', 'Female', 'deanne.anorico@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', '$2y$10$n4FDvQri0mnqedbLljmGhe7YSQ.NSLDpLCNXBrOCgenXOs0VWupM6', 'Admin'),
(10, 'Dr.', 'Lorissa Joana ', 'E.', 'Buenas', 'Female', 'lorissa.joana@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', '$2y$10$SS1Dg5ptcWcoKdD1UwGcru8bRR7GSUirGB/RPikQyQQ18Ba7z9CA6', 'Dean'),
(11, 'Ms.', 'Meg', '', 'Perea', 'Female', 'meg.perea@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', '$2y$10$annAKGwAxDJavv9f1Jaxb.6OTWYgAg8sJgvBLaTXqV7Jrgut9PoJm', 'Head');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityform`
--
ALTER TABLE `activityform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_representatives`
--
ALTER TABLE `activity_representatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityform_id` (`activityform_id`);

--
-- Indexes for table `activity_representatives_responsibilities`
--
ALTER TABLE `activity_representatives_responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_representatives_id` (`activity_representatives_id`),
  ADD KEY `responsibilities_id` (`responsibilities_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityform_id` (`activityform_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collegeID`),
  ADD KEY `campusID` (`campusID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_id` (`campus_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_representatives_id` (`activity_representatives_id`),
  ADD KEY `representative_roles_id` (`representative_roles_id`);

--
-- Indexes for table `representative_roles`
--
ALTER TABLE `representative_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_representatives`
--
ALTER TABLE `activity_representatives`
  ADD CONSTRAINT `activity_representatives_ibfk_1` FOREIGN KEY (`activityform_id`) REFERENCES `activityform` (`id`);

--
-- Constraints for table `activity_representatives_responsibilities`
--
ALTER TABLE `activity_representatives_responsibilities`
  ADD CONSTRAINT `activity_representatives_responsibilities_ibfk_1` FOREIGN KEY (`activity_representatives_id`) REFERENCES `activity_representatives` (`id`),
  ADD CONSTRAINT `activity_representatives_responsibilities_ibfk_2` FOREIGN KEY (`responsibilities_id`) REFERENCES `responsibilities` (`id`);

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`activityform_id`) REFERENCES `activityform` (`id`);

--
-- Constraints for table `college`
--
ALTER TABLE `college`
  ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`campusID`) REFERENCES `campus` (`id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`campus_id`) REFERENCES `campus` (`id`),
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`college_id`) REFERENCES `college` (`collegeID`);

--
-- Constraints for table `representatives`
--
ALTER TABLE `representatives`
  ADD CONSTRAINT `representatives_ibfk_1` FOREIGN KEY (`activity_representatives_id`) REFERENCES `activity_representatives` (`id`),
  ADD CONSTRAINT `representatives_ibfk_2` FOREIGN KEY (`representative_roles_id`) REFERENCES `representative_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
