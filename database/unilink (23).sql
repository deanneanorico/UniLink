-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 07:40 PM
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
('0151ff6e-9363-11ee-b3c9-f80dac465db8', 'OJT', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'El Cocinero', '2024-01-01', '2024-01-31', '', '', ''),
('0f1d333c-95dc-11ee-8722-f80dac465db8', 'Food Teaching', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'El Cocinero', '2023-12-08', '2023-12-20', '<ul>\r\n	<li>Lorem ipsum dolor sit amet. Ut quisquam doloremque sit harum dolore ab quis facilis et deserunt minus est optio perferendis! Est quos error et nesciunt totam et exercitationem necessitatibus qui itaque molestiae ea internos sint est voluptas rerum id quia fugit.</li>\r\n	<li>Qui enim exercitationem et numquam velit et nulla dolorum. Qui galisum nulla et voluptatem sunt ut beatae laborum et totam illum in iste nisi ut quae quisquam. 33 sequi voluptas cum sequi unde 33 dolorem placeat sit nesciunt reprehenderit! Est neque dolores vel facilis velit et autem illo At tempore vitae?</li>\r\n</ul>\r\n', '<p>Lorem ipsum dolor sit amet. Ut quisquam doloremque sit harum dolore ab quis facilis et deserunt minus est optio perferendis! Est quos error et nesciunt totam et exercitationem necessitatibus qui itaque molestiae ea internos sint est voluptas rerum id quia fugit.</p>\r\n\r\n<p>Qui enim exercitationem et numquam velit et nulla dolorum. Qui galisum nulla et voluptatem sunt ut beatae laborum et totam illum in iste nisi ut quae quisquam. 33 sequi voluptas cum sequi unde 33 dolorem placeat sit nesciunt reprehenderit! Est neque dolores vel facilis velit et autem illo At tempore vitae?</p>\r\n', 'Fund of University'),
('105ede4c-6d23-11ee-b322-f80dac465db8', 'Community Health Education Program', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nutrition and Dietetics', 'Local', 'San Lazaro Hospital – Santa Cruz, Manila	', '2024-01-09', '2024-01-16', '<p>The Community Health Education Program is designed to address the critical need for health education and promotion at the community level. Many communities, especially underserved or at-risk populations, lack access to vital health information and resources. This program aims to bridge that gap by empowering individuals and communities to make informed decisions about their health and well-being. By providing education and support, the program can contribute to reducing health disparities, improving overall community health, and preventing or managing various health conditions.</p>\r\n', '<p><strong>Increase Health Literacy:</strong> The primary objective is to improve the health literacy of the community members. This includes their ability to understand, interpret, and use health information to make informed decisions. <strong>Raise Awareness:</strong> Create awareness about specific health issues or topics that are prevalent in the community, such as diabetes, cardiovascular health, or mental health.</p>\r\n', ''),
('11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Christmas Party', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Canyon Cove', '2024-01-10', '2024-01-21', '<ul>\r\n	<li>.sdddd</li>\r\n	<li>fdddfff</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>erewrwe</li>\r\n	<li>erewrwe</li>\r\n</ol>\r\n', '', 'Fund of University'),
('18210bc6-6d21-11ee-b322-f80dac465db8', 'Micro-teaching Session', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Elementary Education', 'International', 'Creative Dreams School	', '2023-10-19', '2023-12-01', '', '', 'Fund of University'),
('1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Hospitality Management', 'Local', 'Boracay Option Tours and Travel Services, Inc.', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p>\r\n\r\n<p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p>\r\n\r\n<p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>\r\n', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p>\r\n\r\n<p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p>\r\n\r\n<p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>\r\n', 'Fund Partner Agency'),
('28bee6f0-6d21-11ee-b322-f80dac465db8', 'Virtual Field Trip Creation', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Elementary Education', 'Local', 'Calatagan National High School', '2023-10-17', '2023-10-19', '', '', 'Fund Partner Agency'),
('2cb31331-6d1f-11ee-b322-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Canyon Cove', '2023-10-18', '2023-10-19', '', '', 'Fund of University'),
('2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'Seminar of IT Passport', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Bausas Surveying Office', '2023-11-20', '2023-11-30', '', '', ''),
('2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Juan Carlo the Caterer', '2023-11-28', '2023-12-02', '', '<p>.</p>\r\n', 'Fund of University'),
('3534cd39-87b5-11ee-bb2f-f80dac465db8', 'Intramurals', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Absolut Distillers, Inc.', '2024-01-09', '2024-01-16', '', '', 'Fund Partner Agency'),
('3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Passport Examination', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-10-17', '2023-10-22', '<p><strong>Certification and Credentialing:</strong> Examinations often serve as a basis for certifying individuals in various professions and awarding academic degrees or certifications. Passing exams can be a prerequisite for entering certain careers.</p>', '<p><strong>Assessment of Knowledge and Skills:</strong> One of the primary objectives of an examination project is to assess the knowledge, understanding, and skills of the individuals being examined. This can include subject-specific knowledge, problem-solving abilities, critical thinking, and practical skills.</p>', 'Fund Partner Agency'),
('46c3d598-af1c-11ee-83f7-f80dac465db8', 'On job training', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Secondary Education', 'Local', 'Lian Senior High School', '2024-01-01', '2024-01-31', '', '', ''),
('4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Student\'s Night ', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Municipality of Lian', '2023-11-28', '2023-11-29', '', '', ''),
('5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Telehealth Integration Project', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'Local', 'Batangas Provincial Hospital – Lemery, Batangas	', '2024-02-01', '2024-02-18', '<p>The Telehealth Integration Project is driven by the growing importance of telehealth in modern healthcare. Telehealth offers the potential to increase access to care, improve healthcare efficiency, and enhance patient outcomes. With advances in technology and the need for more accessible healthcare, integrating telehealth services into healthcare facilities is critical.</p>\r\n', '<p><strong>Telehealth Infrastructure Development:</strong> Create the necessary technological infrastructure within the healthcare facility to support telehealth services, including secure video conferencing and electronic health record integration.</p>\r\n', 'Fund of University'),
('66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Intramurals', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Tourism Management', 'Local', 'BernaBeach Resort', '2023-11-26', '2023-11-30', '', '', ''),
('789f329a-6d22-11ee-b322-f80dac465db8', 'Community Policing Effectiveness Assessment', 'ARASOF-Nasugbu', 'College of Arts and Sciences', 'Bachelor of Science in Criminology', 'Local', 'Philippine Army', '2023-10-17', '2023-10-31', '<p>Crime is a significant concern for both communities and law enforcement agencies. By evaluating the impact of community policing on crime rates, the project addresses a critical issue in criminology. It also assesses community satisfaction and trust, which are crucial for long-term crime reduction and public safety.</p>', '<p>To identify potential correlations or factors that contribute to the effectiveness of community policing, such as the extent of community engagement, the number of community policing programs, and the allocation of officers to specific neighborhoods.</p>', ''),
('ad8a9dd1-964c-11ee-8722-f80dac465db8', 'On Job Training', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Tourism Management', 'International', 'Rajah Travel Corporation', '2024-02-01', '2024-02-29', '', '', ''),
('beae0e4e-af1c-11ee-83f7-f80dac465db8', 'Guest Speaker', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Physical Education', 'Local', 'Lian Institute', '2024-02-01', '2024-02-29', '', '', ''),
('cb177da3-6d23-11ee-b322-f80dac465db8', 'Simulation-Based Interprofessional Training', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'Local', 'National Center for Mental Health – Mandaluyong, Metro Manila', '2023-10-01', '2023-10-17', '<p><strong>Patient Safety:</strong> Effective interprofessional teamwork and communication are critical to preventing medical errors and improving patient safety. <strong>Complex Healthcare Environments:</strong> Modern healthcare settings are complex, with various professionals working together to deliver care. Effective collaboration is necessary to navigate this complexity.</p>\r\n', '<p><strong>Skill Development:</strong> Provide healthcare professionals with opportunities to practice and develop essential interprofessional skills, including communication, teamwork, and leadership. <strong>Scenario-Based Training:</strong> Design realistic patient scenarios where healthcare teams must work together to diagnose, treat, and manage the patient&#39;s condition. These scenarios should mimic real clinical situations.</p>\r\n', 'Fund Partner Agency'),
('e6fc2b35-ac61-11ee-8eab-f80dac465db8', 'Seminar of Media', 'ARASOF-Nasugbu', 'College of Arts and Sciences', 'Bachelor of Arts in Communication', 'Local', 'Manila Broadcasting Philippines', '2024-01-09', '2024-01-12', '', '', '');

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
('08dc9cf8-af17-11ee-83f7-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Project Leader/s'),
('08dd2a9d-af17-11ee-83f7-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Project Member/s'),
('0fc36aec-af18-11ee-83f7-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Project Leader/s'),
('0fc375b8-af18-11ee-83f7-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Project Member/s'),
('2e119858-af17-11ee-83f7-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Leader/s'),
('2e11ad72-af17-11ee-83f7-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Member/s'),
('3f80e692-af18-11ee-83f7-f80dac465db8', '66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Project Leader/s'),
('3f80f3e1-af18-11ee-83f7-f80dac465db8', '66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Project Member/s'),
('4194cc5c-af1b-11ee-83f7-f80dac465db8', 'e6fc2b35-ac61-11ee-8eab-f80dac465db8', 'Project Leader/s'),
('4194d5aa-af1b-11ee-83f7-f80dac465db8', 'e6fc2b35-ac61-11ee-8eab-f80dac465db8', 'Project Member/s'),
('46c3da56-af1c-11ee-83f7-f80dac465db8', '46c3d598-af1c-11ee-83f7-f80dac465db8', 'Project Leader/s'),
('46c3e01f-af1c-11ee-83f7-f80dac465db8', '46c3d598-af1c-11ee-83f7-f80dac465db8', 'Project Member/s'),
('4e9fd290-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Project Leader/s'),
('4e9fd80f-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Project Member/s'),
('5a49195b-aed3-11ee-83f7-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('5a4924d0-aed3-11ee-83f7-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('77132c5e-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Leader/s'),
('771335bc-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Member/s'),
('789f3d46-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Leader/s'),
('789f42d5-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Member/s'),
('83b013a9-af1b-11ee-83f7-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('83b023ae-af1b-11ee-83f7-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('975bb027-af18-11ee-83f7-f80dac465db8', '0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Project Leader/s'),
('975bbb4e-af18-11ee-83f7-f80dac465db8', '0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Project Member/s'),
('b619fc2d-af19-11ee-83f7-f80dac465db8', 'ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Project Leader/s'),
('b61a131f-af19-11ee-83f7-f80dac465db8', 'ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Project Member/s'),
('bd4098f3-aed3-11ee-83f7-f80dac465db8', '3534cd39-87b5-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('bd40ab04-aed3-11ee-83f7-f80dac465db8', '3534cd39-87b5-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('beae1928-af1c-11ee-83f7-f80dac465db8', 'beae0e4e-af1c-11ee-83f7-f80dac465db8', 'Project Leader/s'),
('beae3209-af1c-11ee-83f7-f80dac465db8', 'beae0e4e-af1c-11ee-83f7-f80dac465db8', 'Project Member/s'),
('bebf0b3f-af1b-11ee-83f7-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('bebf7ee8-af1b-11ee-83f7-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('cf7b4a51-af1c-11ee-83f7-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('cf7b552e-af1c-11ee-83f7-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('e00bb3d0-af1c-11ee-83f7-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('e00bbd89-af1c-11ee-83f7-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('e3f56ca0-ade0-11ee-83f7-f80dac465db8', '2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('e3f57bbd-ade0-11ee-83f7-f80dac465db8', '2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('f0e8ac6a-937c-11ee-8c8d-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Leader/s'),
('f0e8b897-937c-11ee-8c8d-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Member/s'),
('fc57c5b7-af1b-11ee-83f7-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('fc57d48b-af1b-11ee-83f7-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Member/s');

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
('2e1b6e4b-af17-11ee-83f7-f80dac465db8', '2e119858-af17-11ee-83f7-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('4ea5d764-8df5-11ee-99cb-f80dac465db8', '4e9fd290-8df5-11ee-99cb-f80dac465db8', NULL, 'Assist the CICS Department'),
('4ea8a284-8df5-11ee-99cb-f80dac465db8', '4e9fd80f-8df5-11ee-99cb-f80dac465db8', NULL, 'Helps to assist.'),
('771fdb07-937d-11ee-8c8d-f80dac465db8', '77132c5e-937d-11ee-8c8d-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('77218b21-937d-11ee-8c8d-f80dac465db8', '771335bc-937d-11ee-8c8d-f80dac465db8', 'cbc45151-5318-11ee-aea5-0a0027000002', 'Prepare required reports/documentation'),
('78a0e3ed-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('78a28e27-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('83b79d17-af1b-11ee-83f7-f80dac465db8', '83b013a9-af1b-11ee-83f7-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('83b9c7e5-af1b-11ee-83f7-f80dac465db8', '83b023ae-af1b-11ee-83f7-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('9760660c-af18-11ee-83f7-f80dac465db8', '975bb027-af18-11ee-83f7-f80dac465db8', NULL, 'Assist the CABEIHM Department'),
('beca3fa1-af1b-11ee-83f7-f80dac465db8', 'bebf0b3f-af1b-11ee-83f7-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('becb83a1-af1b-11ee-83f7-f80dac465db8', 'bebf7ee8-af1b-11ee-83f7-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('becc0db1-af1b-11ee-83f7-f80dac465db8', 'bebf7ee8-af1b-11ee-83f7-f80dac465db8', 'cbc44f0f-5318-11ee-aea5-0a0027000002', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('e011ecfe-af1c-11ee-83f7-f80dac465db8', 'e00bb3d0-af1c-11ee-83f7-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('e01363ad-af1c-11ee-83f7-f80dac465db8', 'e00bbd89-af1c-11ee-83f7-f80dac465db8', 'cbc452c7-5318-11ee-aea5-0a0027000002', 'Assist in the morning and evaluation of the extension program'),
('fc5c3419-af1b-11ee-83f7-f80dac465db8', 'fc57c5b7-af1b-11ee-83f7-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('fc5da50e-af1b-11ee-83f7-f80dac465db8', 'fc57d48b-af1b-11ee-83f7-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `content` longtext NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `added_by`, `subject`, `content`, `date_added`) VALUES
(5, 45, 'Testing', 'Content Testing', '2023-12-21 00:00:00'),
(16, 45, 'Meeting', 'on Thursday', '2023-12-22 00:00:00'),
(18, 48, 'Exploratory meeting', 'meet with us', '2024-01-01 00:00:00'),
(19, 48, 'dsfsf', 'drwerwe', '2023-12-30 00:00:00'),
(20, 48, 'Pang CICS lang Subject', 'Pang CICS lang Content', '2023-12-29 00:00:00'),
(21, 48, 'pang CAS', 'status', '2023-12-30 00:00:00'),
(22, 45, 'for all', 'later on', '2024-01-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_recipents`
--

CREATE TABLE `announcement_recipents` (
  `id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `college` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement_recipents`
--

INSERT INTO `announcement_recipents` (`id`, `announcement_id`, `college`) VALUES
(6, 5, 'CTE'),
(17, 16, 'CICS'),
(18, 16, 'CABEIHM'),
(19, 16, 'CAS'),
(20, 16, 'CTE'),
(21, 16, 'CONAHS'),
(23, 18, 'CTE'),
(24, 19, 'CICS'),
(25, 20, 'CICS'),
(26, 21, 'CAS'),
(27, 22, 'CICS'),
(28, 22, 'CABEIHM'),
(29, 22, 'CAS'),
(30, 22, 'CTE'),
(31, 22, 'CONAHS');

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
('08f1d9f7-af17-11ee-83f7-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Sandwich ', 200, 30, 6000),
('08f2a0be-af17-11ee-83f7-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Soda', 200, 20, 4000),
('0fd00b1c-af18-11ee-83f7-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'sandwich ', 78, 78, 6084),
('2e1dba2c-af17-11ee-83f7-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'water', 100, 20, 2000),
('2e1e9881-af17-11ee-83f7-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'sandwich ', 100, 15, 1500),
('41985d61-af1b-11ee-83f7-f80dac465db8', 'e6fc2b35-ac61-11ee-8eab-f80dac465db8', 'Water', 34, 25, 850),
('4eaaa676-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Water', 300, 25, 7500),
('5a55cb81-aed3-11ee-83f7-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'item 1', 1, 2, 2),
('77227c08-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Water', 250, 20, 5000),
('772308a5-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Sandwich', 250, 25, 6250),
('83bad57e-af1b-11ee-83f7-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Water', 30, 30, 900),
('83bb422d-af1b-11ee-83f7-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Lunch', 30, 60, 1800),
('becd2c0f-af1b-11ee-83f7-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Tools', 500, 100, 50000),
('cf7fbe83-af1c-11ee-83f7-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Item 10', 45, 45, 2025),
('e0141234-af1c-11ee-83f7-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'sandwich ', 25, 30, 750),
('f0f83a10-937c-11ee-8c8d-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'sandwich ', 1000, 25, 25000);

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
(32, 'ARASOF-Nasugbu', 'Nasugbu, Batangas'),
(33, 'Alangilan, Campus', 'Alangilan, Batangas');

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
(68, 'College of Accountancy, Business, Economics, International Hospitality Management', 'CABEIHM', 32),
(81, 'College of Arts and Sciences', 'CAS', 32),
(82, 'College of Informatics and Computing Sciences', 'CICS', 32),
(83, 'College of Nursing and Allied Health Sciences', 'CONAHS', 32),
(84, 'College of Teacher Education', 'CTE', 32);

-- --------------------------------------------------------

--
-- Table structure for table `create_folder`
--

CREATE TABLE `create_folder` (
  `id` int(11) NOT NULL,
  `create_folder_id` int(11) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `createfolder` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_folder`
--

INSERT INTO `create_folder` (`id`, `create_folder_id`, `category`, `createfolder`, `created_by`) VALUES
(18, NULL, 'foreign', 'IT ', 49),
(19, NULL, 'local', 'Municipality of Lian', 49),
(26, 19, 'local', 'Narrative Report Lian', 49),
(29, 18, 'foreign', 'Narrative Report IT', 49),
(36, NULL, 'foreign', 'Philnits', 49),
(39, 36, 'foreign', 'Narrative PhilNits', 49),
(40, NULL, 'local', 'Nasugbu Bahay Aruga', 49),
(41, NULL, 'local', 'External Office', 49),
(45, NULL, 'local', 'CAS Folder', 51),
(46, NULL, 'foreign', 'Cas National', 51),
(47, NULL, 'local', '...', 49);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `create_folder_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkages`
--

CREATE TABLE `linkages` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category` varchar(20) NOT NULL,
  `overview` longtext NOT NULL,
  `strategic_fit` longtext NOT NULL,
  `intended_outcome` longtext NOT NULL,
  `scope` longtext NOT NULL,
  `arrangement` longtext NOT NULL,
  `risk_management` longtext NOT NULL,
  `monitoring` longtext NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages`
--

INSERT INTO `linkages` (`id`, `added_by`, `title`, `category`, `overview`, `strategic_fit`, `intended_outcome`, `scope`, `arrangement`, `risk_management`, `monitoring`, `date_added`, `status`) VALUES
(8, 48, 'MEMORANDUM OF UNDERSTANDING BETWEEN BATANGAS STATE UNIVERSITY AND PHILNITS FOUNDATION', 'International', '<p>Linkages Overview&nbsp;TEST</p>\r\n', '<p>Linkages Strategy&nbsp;TEST</p>\r\n', '<p>Linkages Outcome&nbsp;TEST</p>\r\n', '<p>Linkages Scope&nbsp;TEST</p>\r\n', '<p>Linkages Arrangements&nbsp;TEST</p>\r\n', '<p>Linkages Risk&nbsp;TEST</p>\r\n', '<p>Linkages Monitoring&nbsp;TEST</p>\r\n', '2023-12-29', 'For Notary'),
(9, 48, 'EXPLORATORY MEETING BETWEEN BATANGAS STATE UNIVERSITY AND RAJAH TRAVEL CORPORATION', 'International', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '<p>Lorem ipsum dolor sit amet. Sed sunt internos eum sunt natus non quam quam hic eius ipsum ut odio iure aut tenetur labore. Eum consectetur atque vel pariatur eius qui repellendus quod est distinctio officiis eos magnam sunt et ipsum animi ut ratione laudantium. Ad alias consequatur sed repellat rerum rem modi eius sit officiis libero et recusandae explicabo ut rerum quasi. Et perferendis facilis ab eius labore in sapiente consequuntur non ullam ullam non suscipit esse.</p>\r\n\r\n<p>Aut asperiores tempore rem esse inventore in velit voluptate et maxime blanditiis ut delectus laudantium. Sit commodi error aut nemo ratione et velit totam eum nesciunt illo ab doloribus nobis in enim voluptates! Non fugiat aliquid non nihil reprehenderit ut consequatur blanditiis sed voluptatibus ipsum quo dolorem voluptas qui placeat assumenda.</p>\r\n\r\n<p>Et aliquid aperiam vel incidunt omnis sit fugiat inventore est delectus doloribus in provident reiciendis qui minima tempora aut magni odio. Et dolorem aliquid eos officiis voluptatibus est possimus tempora aut perferendis eveniet est voluptatem alias est officiis maxime ex itaque dolor?</p>\r\n', '2023-12-29', 'For Exploratory'),
(10, 48, 'MEMORANDUM OF AGREEMENT BETWEEN BATANGAS STATE UNIVERSITY AND JABEZ MEDICAL CENTER', 'Local', '', '', '', '', '', '', '', '2024-01-08', 'For Signing'),
(11, 54, 'MEMORANDUM OF UNDERSTANDING BETWEEN BATANGAS STATE UNIVERSITY AND DEPARTMENT OF INFORMATION AND COMMUNICATIONS TECHNOLOGY', 'Local', '', '', '', '', '', '', '', '2024-01-09', 'For Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_activity`
--

CREATE TABLE `linkages_activity` (
  `id` int(11) NOT NULL,
  `linkages_implementation_plan_id` int(11) NOT NULL,
  `activity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_activity`
--

INSERT INTO `linkages_activity` (`id`, `linkages_implementation_plan_id`, `activity`) VALUES
(19, 11, 'Collaborative Research and Extension Projects'),
(20, 11, 'Research Forum'),
(49, 24, 'Plan 1 Act TEST'),
(50, 24, 'Plan 1 Act TEST'),
(51, 25, 'Plan 2 Act TEST'),
(52, 25, 'Plan 2 Act TEST'),
(53, 26, 'Plan 3  Ac TEST'),
(54, 26, 'Plan 3  Ac TEST'),
(55, 26, 'Plan 3  Ac TEST'),
(56, 29, 'Collaborative Research and Extension Projects');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_audience`
--

CREATE TABLE `linkages_audience` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `audience` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_audience`
--

INSERT INTO `linkages_audience` (`id`, `linkages_id`, `audience`) VALUES
(7, 11, 'VCDEA, VCAA, VCRDES, Research, Extension Services, Dean, and Staff'),
(8, 11, 'VCDEA, VCAA, VCRDES, Research, Extension Services, Dean, and Staff'),
(13, 8, 'Audience 1 TEST'),
(15, 10, 'VCDEA, VCAA, VCRDES, Research, Extension Services, Dean, and Staff'),
(16, 9, 'VCDEA, VCAA, VCRDES, Research, Extension Services, Dean, and Staff');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_implementation_plan`
--

CREATE TABLE `linkages_implementation_plan` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_implementation_plan`
--

INSERT INTO `linkages_implementation_plan` (`id`, `linkages_id`) VALUES
(24, 8),
(25, 8),
(26, 8),
(30, 9),
(31, 9),
(29, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `linkages_outcome`
--

CREATE TABLE `linkages_outcome` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `outcome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_outcome`
--

INSERT INTO `linkages_outcome` (`id`, `linkages_id`, `outcome`) VALUES
(7, 11, 'Signed MOU/MOA'),
(8, 11, 'Signed Research'),
(14, 8, 'Outcomes 1 TEST'),
(15, 8, 'LASD;LFJAS;DKLFNANSD;FKN'),
(17, 10, 'Signed MOU/MOA'),
(18, 9, 'Signed MOU/MOA');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_pap`
--

CREATE TABLE `linkages_pap` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `project` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_pap`
--

INSERT INTO `linkages_pap` (`id`, `linkages_id`, `project`) VALUES
(7, 11, 'MOU/MOA'),
(8, 11, 'Research'),
(13, 8, 'PAP 1 TEST'),
(15, 10, 'MOU/MOA'),
(16, 9, 'MOU/MOA');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_personnel_and_officials`
--

CREATE TABLE `linkages_personnel_and_officials` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `personnels` varchar(200) NOT NULL,
  `officials` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_personnel_and_officials`
--

INSERT INTO `linkages_personnel_and_officials` (`id`, `linkages_id`, `personnels`, `officials`) VALUES
(21, 11, 'Personnel 1', 'ARASOF Nasugbu'),
(22, 11, 'VCDEA and Office', 'ARASOF Nasugbu'),
(35, 8, 'Personnel 1 TEST', 'Officials 1 TEST'),
(36, 8, 'Personnel 2 TEST', 'Officials 2 TEST'),
(37, 8, 'Personnel 3 TEST', 'Officials 3 TEST'),
(40, 10, 'Collaborative Research and Extension Projects', '1 (2023)'),
(41, 9, 'Personnel 1', 'Officials 1'),
(42, 9, 'VCDEA and Office', 'ARASOF Nasugbu');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_resources`
--

CREATE TABLE `linkages_resources` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `resources` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_resources`
--

INSERT INTO `linkages_resources` (`id`, `linkages_id`, `resources`) VALUES
(18, 11, 'Collaborative Research and Extension Projects'),
(19, 11, 'Research Forum'),
(32, 8, 'Resources 1'),
(33, 8, 'Resources 2'),
(34, 8, 'Resources 3'),
(36, 10, 'Collaborative Research and Extension Projects'),
(37, 9, '.');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_sm`
--

CREATE TABLE `linkages_sm` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `strategy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_sm`
--

INSERT INTO `linkages_sm` (`id`, `linkages_id`, `strategy`) VALUES
(7, 11, 'Exploratory Meetings'),
(8, 11, 'Exploratory Meetings'),
(13, 8, 'Strategy 1 TEST'),
(15, 10, 'Exploratory Meetings'),
(16, 9, 'Exploratory Meetings');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_timing`
--

CREATE TABLE `linkages_timing` (
  `id` int(11) NOT NULL,
  `linkages_id` int(11) NOT NULL,
  `timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_timing`
--

INSERT INTO `linkages_timing` (`id`, `linkages_id`, `timing`) VALUES
(7, 11, 'As agreed'),
(8, 11, 'As agreed'),
(13, 8, 'Timing 1 TEST'),
(15, 10, 'As agreed'),
(16, 9, 'As agreed');

-- --------------------------------------------------------

--
-- Table structure for table `linkages_year`
--

CREATE TABLE `linkages_year` (
  `id` int(11) NOT NULL,
  `linkages_implementation_plan_id` int(11) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkages_year`
--

INSERT INTO `linkages_year` (`id`, `linkages_implementation_plan_id`, `year`) VALUES
(6169, 11, '2024'),
(6170, 11, '2024'),
(6195, 24, '2021'),
(6196, 24, '2022'),
(6197, 25, '2023'),
(6198, 26, '2024'),
(6199, 26, '2025'),
(6200, 26, '2026'),
(6203, 29, '1 (2023)'),
(6204, 30, '1 (2024)'),
(6205, 30, '2 (2025)');

-- --------------------------------------------------------

--
-- Table structure for table `narrative_report`
--

CREATE TABLE `narrative_report` (
  `id` varchar(255) NOT NULL,
  `activityform_id` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `sponsor` longtext NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `objectives` longtext NOT NULL,
  `overview` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narrative_report`
--

INSERT INTO `narrative_report` (`id`, `activityform_id`, `activity_name`, `sponsor`, `start_date`, `end_date`, `objectives`, `overview`) VALUES
('04c40755-ab98-11ee-801b-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'test', '', '2023-11-21', '2023-11-21', '', ''),
('081f9720-9335-11ee-a838-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Intramurals', '<p>.</p>', '2023-12-06', '2023-12-06', '<p>.</p>', '<p>.</p>'),
('360978fd-ab92-11ee-801b-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'test', '', '2023-11-21', '2023-11-21', '', ''),
('3bfb4e8f-a63d-11ee-a34f-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'dfsf', '<ul>\r\n	<li>irikrkirikrir</li>\r\n	<li>erwre</li>\r\n</ul>\r\n', '2023-12-08', '2023-12-20', '<ol>\r\n	<li>dsxfdsffdsf &nbsp;&nbsp;</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>erwerwer</li>\r\n</ul>\r\n', '<p>3434</p>\r\n'),
('5c6c14ca-aa07-11ee-a52c-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Passport Examination', '', '2023-10-17', '2023-10-22', '<p><strong>Assessment of Knowledge and Skills:</strong> One of the primary objectives of an examination project is to assess the knowledge, understanding, and skills of the individuals being examined. This can include subject-specific knowledge, problem-solving abilities, critical thinking, and practical skills.</p>\r\n', ''),
('60aea6bd-95e0-11ee-8722-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p>\r\n\r\n<p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p>\r\n\r\n<p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>\r\n', ''),
('74ae40bc-9512-11ee-be1c-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', ''),
('95c72a05-a63d-11ee-a34f-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'dfsf', '<ul>\r\n	<li>irikrkirikrir</li>\r\n	<li>erwreded</li>\r\n</ul>\r\n', '2023-12-08', '2023-12-20', '<ol>\r\n	<li>dsxfdsffdsf &nbsp;&nbsp;</li>\r\n	<li>wedewdesd</li>\r\n	<li>edes</li>\r\n</ol>\r\n', '<p>3434</p>\r\n'),
('b75b8d41-9515-11ee-be1c-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', ''),
('f3a64ca4-95e2-11ee-8722-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p>\r\n\r\n<p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p>\r\n\r\n<p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `narrative_report_representative`
--

CREATE TABLE `narrative_report_representative` (
  `id` varchar(255) NOT NULL,
  `narrative_report_id` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narrative_report_representative`
--

INSERT INTO `narrative_report_representative` (`id`, `narrative_report_id`, `role`) VALUES
('04c42502-ab98-11ee-801b-f80dac465db8', '04c40755-ab98-11ee-801b-f80dac465db8', 'Project Leader/s'),
('04c42d62-ab98-11ee-801b-f80dac465db8', '04c40755-ab98-11ee-801b-f80dac465db8', 'Project Member/s'),
('081fdc1b-9335-11ee-a838-f80dac465db8', '081f9720-9335-11ee-a838-f80dac465db8', 'Project Leader/s'),
('081fed5c-9335-11ee-a838-f80dac465db8', '081f9720-9335-11ee-a838-f80dac465db8', 'Project Member/s'),
('36099cfd-ab92-11ee-801b-f80dac465db8', '360978fd-ab92-11ee-801b-f80dac465db8', 'Project Leader/s'),
('3609ae8a-ab92-11ee-801b-f80dac465db8', '360978fd-ab92-11ee-801b-f80dac465db8', 'Project Member/s'),
('3bfb6d39-a63d-11ee-a34f-f80dac465db8', '3bfb4e8f-a63d-11ee-a34f-f80dac465db8', 'Project Leader/s'),
('3bfb7c30-a63d-11ee-a34f-f80dac465db8', '3bfb4e8f-a63d-11ee-a34f-f80dac465db8', 'Project Member/s'),
('5c6c2e85-aa07-11ee-a52c-f80dac465db8', '5c6c14ca-aa07-11ee-a52c-f80dac465db8', 'Project Leader/s'),
('5c6c7214-aa07-11ee-a52c-f80dac465db8', '5c6c14ca-aa07-11ee-a52c-f80dac465db8', 'Project Member/s'),
('60aeb5a1-95e0-11ee-8722-f80dac465db8', '60aea6bd-95e0-11ee-8722-f80dac465db8', 'Project Leader/s'),
('60aec05b-95e0-11ee-8722-f80dac465db8', '60aea6bd-95e0-11ee-8722-f80dac465db8', 'Project Member/s'),
('74ae4d2e-9512-11ee-be1c-f80dac465db8', '74ae40bc-9512-11ee-be1c-f80dac465db8', 'Project Leader/s'),
('74ae5734-9512-11ee-be1c-f80dac465db8', '74ae40bc-9512-11ee-be1c-f80dac465db8', 'Project Member/s'),
('95c73352-a63d-11ee-a34f-f80dac465db8', '95c72a05-a63d-11ee-a34f-f80dac465db8', 'Project Leader/s'),
('95c73b9f-a63d-11ee-a34f-f80dac465db8', '95c72a05-a63d-11ee-a34f-f80dac465db8', 'Project Member/s'),
('b75b99ad-9515-11ee-be1c-f80dac465db8', 'b75b8d41-9515-11ee-be1c-f80dac465db8', 'Project Leader/s'),
('b75ba282-9515-11ee-be1c-f80dac465db8', 'b75b8d41-9515-11ee-be1c-f80dac465db8', 'Project Member/s'),
('f3a65e63-95e2-11ee-8722-f80dac465db8', 'f3a64ca4-95e2-11ee-8722-f80dac465db8', 'Project Leader/s'),
('f3a66576-95e2-11ee-8722-f80dac465db8', 'f3a64ca4-95e2-11ee-8722-f80dac465db8', 'Project Member/s');

-- --------------------------------------------------------

--
-- Table structure for table `narrative_report_representative_list`
--

CREATE TABLE `narrative_report_representative_list` (
  `id` varchar(255) NOT NULL,
  `narrative_report_representative_id` varchar(255) NOT NULL,
  `representative_roles_id` varchar(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narrative_report_representative_list`
--

INSERT INTO `narrative_report_representative_list` (`id`, `narrative_report_representative_id`, `representative_roles_id`, `name`, `designation`) VALUES
('08325219-9335-11ee-a838-f80dac465db8', '081fdc1b-9335-11ee-a838-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('5c760c48-aa07-11ee-a52c-f80dac465db8', '5c6c2e85-aa07-11ee-a52c-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('5c7872f9-aa07-11ee-a52c-f80dac465db8', '5c6c7214-aa07-11ee-a52c-f80dac465db8', '563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services'),
('60b7ff92-95e0-11ee-8722-f80dac465db8', '60aeb5a1-95e0-11ee-8722-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('60b89db2-95e0-11ee-8722-f80dac465db8', '60aeb5a1-95e0-11ee-8722-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('74b15d63-9512-11ee-be1c-f80dac465db8', '74ae4d2e-9512-11ee-be1c-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('74b2513a-9512-11ee-be1c-f80dac465db8', '74ae4d2e-9512-11ee-be1c-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('b75fc24a-9515-11ee-be1c-f80dac465db8', 'b75b99ad-9515-11ee-be1c-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('b760b48b-9515-11ee-be1c-f80dac465db8', 'b75b99ad-9515-11ee-be1c-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('f3ac5d1d-95e2-11ee-8722-f80dac465db8', 'f3a65e63-95e2-11ee-8722-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('f3acdda7-95e2-11ee-8722-f80dac465db8', 'f3a65e63-95e2-11ee-8722-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director');

-- --------------------------------------------------------

--
-- Table structure for table `narrative_report_responsibilities_list`
--

CREATE TABLE `narrative_report_responsibilities_list` (
  `id` varchar(255) NOT NULL,
  `narrative_report_representative_id` varchar(255) NOT NULL,
  `responsibilities_id` varchar(255) DEFAULT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narrative_report_responsibilities_list`
--

INSERT INTO `narrative_report_responsibilities_list` (`id`, `narrative_report_representative_id`, `responsibilities_id`, `responsibility`) VALUES
('082e1cea-9335-11ee-a838-f80dac465db8', '081fdc1b-9335-11ee-a838-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('0836cd5d-9335-11ee-a838-f80dac465db8', '081fed5c-9335-11ee-a838-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('5c7322a6-aa07-11ee-a52c-f80dac465db8', '5c6c2e85-aa07-11ee-a52c-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('5c77bfa1-aa07-11ee-a52c-f80dac465db8', '5c6c7214-aa07-11ee-a52c-f80dac465db8', 'cbc45151-5318-11ee-aea5-0a0027000002', 'Prepare required reports/documentation'),
('60b56262-95e0-11ee-8722-f80dac465db8', '60aeb5a1-95e0-11ee-8722-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('60b7b5fc-95e0-11ee-8722-f80dac465db8', '60aeb5a1-95e0-11ee-8722-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('74b00ee3-9512-11ee-be1c-f80dac465db8', '74ae4d2e-9512-11ee-be1c-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('74b0ef84-9512-11ee-be1c-f80dac465db8', '74ae4d2e-9512-11ee-be1c-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('b75e4a22-9515-11ee-be1c-f80dac465db8', 'b75b99ad-9515-11ee-be1c-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('b75f4aec-9515-11ee-be1c-f80dac465db8', 'b75b99ad-9515-11ee-be1c-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('f3ab8c8f-95e2-11ee-8722-f80dac465db8', 'f3a65e63-95e2-11ee-8722-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('f3abf911-95e2-11ee-8722-f80dac465db8', 'f3a65e63-95e2-11ee-8722-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `category`, `name`, `college_id`, `status`) VALUES
(11, 'Local', 'Absolut Distillers, Inc.', 82, 'Successful Partner'),
(12, 'Local', 'AIG Shared Services', 82, 'Successful Partner'),
(13, 'Local', 'Bausas Surveying Office', 82, 'Successful Partner'),
(14, 'International', 'Bureau of Fire Protection Nasugbu Branch', 82, 'Successful Partner'),
(15, 'International', 'Calatagan Municipal Police Station', 82, 'Successful Partner'),
(16, 'Local', 'Amara en Terrazas', 68, 'Successful Partner'),
(17, 'Local', 'Boracay Option Tours and Travel Services, Inc.', 68, 'Successful Partner'),
(18, 'Local', 'Chateau Royale', 68, 'Successful Partner'),
(19, 'International', 'Crosswinds Resort Suites', 68, 'Successful Partner'),
(20, 'International', 'El Cocinero', 68, 'Successful Partner'),
(23, 'local', 'Juan Carlo the Caterer', 68, 'Successful Partner'),
(24, 'local', 'BernaBeach Resort', 68, 'Successful Partner'),
(25, 'Local', 'Lago De Oro', 68, 'Successful Partner'),
(26, 'Local', 'Punta Fuego Village Homeowners Association Inc.', 68, 'Successful Partner'),
(27, 'Local', 'Splendido Tower 2	', 68, 'Successful Partner'),
(28, 'International', 'Rajah Travel Corporation', 68, 'Successful Partner'),
(29, 'Local', 'First Nasugbu Natural Farmers’ Association', 81, 'Successful Partner'),
(30, 'Local', 'Philippine Air Force', 81, 'Successful Partner'),
(31, 'Local', 'Manila Broadcasting Philippines', 81, 'Successful Partner'),
(32, 'Local', 'Municipal Disaster Risk Reduction and Management Office (MDRRMO) - Nasugbu, Batangas', 81, 'Successful Partner'),
(33, 'International', 'Hung Vuong University, Socialist Republic of Vietnam', 81, 'Successful Partner'),
(34, 'International', 'Innovative Investors and Financing Co., Inc.', 81, 'Successful Partner'),
(35, 'International', 'Integrated Professional Counselors Association of the Philippines (IPCAP)	', 81, 'Successful Partner'),
(36, 'International', 'PhilAm Life	', 82, 'Successful Partner'),
(37, 'International', 'KEPCO Ilijan Corporation', 82, 'Successful Partner'),
(38, 'International', 'Orange Apps', 82, 'Successful Partner'),
(39, 'Local', 'Batangas Provincial Hospital – Lemery, Batangas	', 83, 'Successful Partner'),
(40, 'Local', 'National Center for Mental Health – Mandaluyong, Metro Manila', 83, 'Successful Partner'),
(41, 'International', 'Chateau Royale Hotel Resort	', 83, 'Successful Partner'),
(42, 'Local', 'Lian Institute', 84, 'Successful Partner'),
(43, 'International', 'Creative Dreams School	', 84, 'Successful Partner'),
(44, 'Local', 'Calatagan National High School', 84, 'Successful Partner'),
(45, 'Local', 'Lian Senior High School', 84, 'Successful Partner'),
(46, 'Local', 'San Lazaro Hospital – Santa Cruz, Manila	', 83, 'Successful Partner');

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
(27, 32, 84, 'BEED', 'Bachelor of Elementary Education'),
(28, 32, 84, 'BPED', 'Bachelor of Physical Education'),
(29, 32, 84, 'BSED', 'Bachelor of Secondary Education'),
(37, 32, 81, 'BAC', 'Bachelor of Arts in Communication'),
(38, 32, 81, 'BSP', 'Bachelor of Science in Psychology'),
(39, 32, 81, 'BSFT', 'Bachelor of Science in Food Technology'),
(40, 32, 81, 'BSC', 'Bachelor of Science in Criminology'),
(41, 32, 81, 'BSFAS', 'Bachelor of Science in Fisheries and Aquatic Sciences'),
(42, 32, 82, 'BSIT', 'Bachelor of Science in Information Technology'),
(43, 32, 83, 'BSN', 'Bachelor of Science in Nursing'),
(44, 32, 83, 'BSND', 'Bachelor of Science in Nutrition and Dietetics'),
(45, 32, 68, 'BSA', 'Bachelor of Science in Accountancy'),
(46, 32, 68, 'BSMA', 'Bachelor of Science in Management Accounting'),
(47, 32, 68, 'BSBA-HRM', 'Bachelor of Science in Business Administration (HRM)'),
(48, 32, 68, 'BSBA-MM', 'Bachelor of Science in Business Administration (MM)'),
(49, 32, 68, 'BSBA-FM', 'Bachelor of Science in Business Administration (FM)'),
(50, 32, 68, 'BSHM', 'Bachelor of Science in Hospitality Management'),
(51, 32, 68, 'BSTM', 'Bachelor of Science in Tourism Management');

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
('0fcee1ef-af18-11ee-83f7-f80dac465db8', '0fc36aec-af18-11ee-83f7-f80dac465db8', NULL, 'Mr. Marvin Hernandez', 'Host'),
('0fcfa01c-af18-11ee-83f7-f80dac465db8', '0fc375b8-af18-11ee-83f7-f80dac465db8', NULL, 'Deanne Anorico', 'Student Org'),
('2e1c0e8e-af17-11ee-83f7-f80dac465db8', '2e119858-af17-11ee-83f7-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('2e1d55c5-af17-11ee-83f7-f80dac465db8', '2e119858-af17-11ee-83f7-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('4ea7e8e5-8df5-11ee-99cb-f80dac465db8', '4e9fd290-8df5-11ee-99cb-f80dac465db8', NULL, 'Noey M. De Jesus', 'Faculty'),
('4ea92239-8df5-11ee-99cb-f80dac465db8', '4e9fd80f-8df5-11ee-99cb-f80dac465db8', NULL, 'Djoanna Marie V. Salac', 'Faculty'),
('772086d5-937d-11ee-8c8d-f80dac465db8', '77132c5e-937d-11ee-8c8d-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('7721e86c-937d-11ee-8c8d-f80dac465db8', '771335bc-937d-11ee-8c8d-f80dac465db8', '563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services'),
('78a1bf98-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('78a2fa8e-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', '56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('83b931b8-af1b-11ee-83f7-f80dac465db8', '83b013a9-af1b-11ee-83f7-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('83ba6ebf-af1b-11ee-83f7-f80dac465db8', '83b023ae-af1b-11ee-83f7-f80dac465db8', '56347dce-5318-11ee-aea5-0a0027000002', 'Dr. Joy M. Reyes', 'Campus Director'),
('9760bc90-af18-11ee-83f7-f80dac465db8', '975bb027-af18-11ee-83f7-f80dac465db8', NULL, 'Gloria Rearte', 'Faculty'),
('becac1fc-af1b-11ee-83f7-f80dac465db8', 'bebf0b3f-af1b-11ee-83f7-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('beccaf54-af1b-11ee-83f7-f80dac465db8', 'bebf7ee8-af1b-11ee-83f7-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('beccf0de-af1b-11ee-83f7-f80dac465db8', 'bebf7ee8-af1b-11ee-83f7-f80dac465db8', '56347f43-5318-11ee-aea5-0a0027000002', 'Atty. Alvin R. De Silva', 'Chancellor'),
('e012d3c3-af1c-11ee-83f7-f80dac465db8', 'e00bb3d0-af1c-11ee-83f7-f80dac465db8', '56347d3b-5318-11ee-aea5-0a0027000002', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('e013d4c2-af1c-11ee-83f7-f80dac465db8', 'e00bbd89-af1c-11ee-83f7-f80dac465db8', '563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('f0f56436-937c-11ee-8c8d-f80dac465db8', 'f0e8ac6a-937c-11ee-8c8d-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('f0f693f8-937c-11ee-8c8d-f80dac465db8', 'f0e8b897-937c-11ee-8c8d-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('f0f6f9fc-937c-11ee-8c8d-f80dac465db8', 'f0e8b897-937c-11ee-8c8d-f80dac465db8', '56347f03-5318-11ee-aea5-0a0027000002', 'Dr. Romel U. Briones', 'Campus Director'),
('fc5cba3b-af1b-11ee-83f7-f80dac465db8', 'fc57c5b7-af1b-11ee-83f7-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('fc5e05a6-af1b-11ee-83f7-f80dac465db8', 'fc57d48b-af1b-11ee-83f7-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director');

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
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `create_folder_id` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `create_folder_id`, `path`) VALUES
(5, 47, 'Batangas_State_Logo.png'),
(7, 26, 'cics.pdf'),
(8, 26, '412544836_1414920392443282_7188525657652304350_n.jpg');

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
  `college_abbrev` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `privelege` varchar(25) NOT NULL,
  `profile_pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `mid_name`, `last_name`, `sex`, `email`, `campus`, `college_abbrev`, `pass`, `privelege`, `profile_pic`) VALUES
(45, 'Assoc. Prof.', 'Lorenjane', 'E.', 'Balan', 'Female', 'loren.jane@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$5.eyTiUB2C0ZQFumu.1d0.AC6UD/Hs3uJdDyfDqEiaeAUwhvP9vEu', 'VCDEA', 'user-head.png'),
(47, 'Ms.', 'Lorenjane', 'E.', 'Balan', 'Female', 'admin@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$SPq2rT1ZTtln2UB.chW0v.ebLEH31wXr6yE1YGfdq5ApzNldE6ZVm', 'Admin', 'user-admin.png'),
(48, 'Ms.', 'Meg', '', 'Perea', 'Female', 'meg.perea@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$Jg0aNw9fn0gqGQMLPpv.Xebkq3q6wk2GIsrliD.ElkcSBhLGuKuvO', 'Head', 'undraw_profile.svg'),
(49, 'Dr.', 'Lorissa Joana ', 'E.', 'Buenas', 'Female', 'cics.nasugbu@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CICS', '$2y$10$85f.xN2gviSJOF48PdSlHeNVW6U7Kg.0./kWd4weon/rITvq5QQ3C', 'Dean', 'BSU.png'),
(50, 'Asst. Prof.', 'Renalyn', 'D.', 'Malabanan', 'Female', 'conahs.nasugbu@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CONAHS', '$2y$10$KJ9kjM7aZv2hRAVMuOwJuue3Eg6P2pfKhz9Fkk/Uya2tDnaiXQpym', 'Dean', NULL),
(51, 'Dr.', 'Maria Luisa', 'A.', 'Valdez', 'Female', 'cas.nasugbu@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CAS', '$2y$10$tIvqd0A6b10WzC0hfJvT3.4AU6qDGKpsuGd7PFSwoQ96VRFfcHbNO', 'Dean', 'BSU-Campus.jpg'),
(52, 'Dr.', 'Anania', 'B.', 'Aquino', 'Female', 'cte.nasugbu@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CTE', '$2y$10$qdAn0N5ufrgN.tk49JCJdOddGdIi44y9xbiR2nP4x5cEeXDeIp1Ua', 'Dean', NULL),
(53, 'Dr.', 'Gloria', 'A. ', 'Rearte', 'Female', 'cabeihm.nasugbu@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CABEIHM', '$2y$10$1sfKTFCufGMjP5XmqWO/1uV3EeAaD2Bv9/g4h6MDIhal1UyIfHJNm', 'Dean', NULL),
(54, 'Ms.', 'Maria Mariel', 'D. ', 'Perea', 'Female', 'externalaffairs.nasugbu@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$0hGQyOlw19Vs/kyFTLCoAuNSuuHmvZkJM41xcfWhv0rhkvaCFV8q.', 'Head', 'user-head.png');

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
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `announcement_recipents`
--
ALTER TABLE `announcement_recipents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_id` (`announcement_id`);

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
-- Indexes for table `create_folder`
--
ALTER TABLE `create_folder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_folder_id` (`create_folder_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_folder_id` (`create_folder_id`);

--
-- Indexes for table `linkages`
--
ALTER TABLE `linkages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `linkages_activity`
--
ALTER TABLE `linkages_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_implementation_plan_id` (`linkages_implementation_plan_id`);

--
-- Indexes for table `linkages_audience`
--
ALTER TABLE `linkages_audience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_implementation_plan`
--
ALTER TABLE `linkages_implementation_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_outcome`
--
ALTER TABLE `linkages_outcome`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_pap`
--
ALTER TABLE `linkages_pap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_personnel_and_officials`
--
ALTER TABLE `linkages_personnel_and_officials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages` (`linkages_id`);

--
-- Indexes for table `linkages_resources`
--
ALTER TABLE `linkages_resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_sm`
--
ALTER TABLE `linkages_sm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_timing`
--
ALTER TABLE `linkages_timing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_id` (`linkages_id`);

--
-- Indexes for table `linkages_year`
--
ALTER TABLE `linkages_year`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkages_implementation_plan_id` (`linkages_implementation_plan_id`);

--
-- Indexes for table `narrative_report`
--
ALTER TABLE `narrative_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityform_id` (`activityform_id`);

--
-- Indexes for table `narrative_report_representative`
--
ALTER TABLE `narrative_report_representative`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narrative_report_id` (`narrative_report_id`);

--
-- Indexes for table `narrative_report_representative_list`
--
ALTER TABLE `narrative_report_representative_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narrative_report_representative_id` (`narrative_report_representative_id`),
  ADD KEY `representative_roles_id` (`representative_roles_id`);

--
-- Indexes for table `narrative_report_responsibilities_list`
--
ALTER TABLE `narrative_report_responsibilities_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narrative_report_representative_id` (`narrative_report_representative_id`),
  ADD KEY `responsibilities_id` (`responsibilities_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_id` (`college_id`);

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
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_folder_id` (`create_folder_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `announcement_recipents`
--
ALTER TABLE `announcement_recipents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `create_folder`
--
ALTER TABLE `create_folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkages`
--
ALTER TABLE `linkages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `linkages_activity`
--
ALTER TABLE `linkages_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `linkages_audience`
--
ALTER TABLE `linkages_audience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `linkages_implementation_plan`
--
ALTER TABLE `linkages_implementation_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `linkages_outcome`
--
ALTER TABLE `linkages_outcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `linkages_pap`
--
ALTER TABLE `linkages_pap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `linkages_personnel_and_officials`
--
ALTER TABLE `linkages_personnel_and_officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `linkages_resources`
--
ALTER TABLE `linkages_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `linkages_sm`
--
ALTER TABLE `linkages_sm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `linkages_timing`
--
ALTER TABLE `linkages_timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `linkages_year`
--
ALTER TABLE `linkages_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6206;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `announcement_recipents`
--
ALTER TABLE `announcement_recipents`
  ADD CONSTRAINT `announcement_recipents_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`id`);

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
-- Constraints for table `create_folder`
--
ALTER TABLE `create_folder`
  ADD CONSTRAINT `create_folder_ibfk_1` FOREIGN KEY (`create_folder_id`) REFERENCES `create_folder` (`id`),
  ADD CONSTRAINT `create_folder_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`create_folder_id`) REFERENCES `create_folder` (`id`);

--
-- Constraints for table `linkages`
--
ALTER TABLE `linkages`
  ADD CONSTRAINT `linkages_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `linkages_activity`
--
ALTER TABLE `linkages_activity`
  ADD CONSTRAINT `linkages_activity_ibfk_1` FOREIGN KEY (`linkages_implementation_plan_id`) REFERENCES `linkages_implementation_plan` (`id`);

--
-- Constraints for table `linkages_audience`
--
ALTER TABLE `linkages_audience`
  ADD CONSTRAINT `linkages_audience_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_implementation_plan`
--
ALTER TABLE `linkages_implementation_plan`
  ADD CONSTRAINT `linkages_implementation_plan_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_outcome`
--
ALTER TABLE `linkages_outcome`
  ADD CONSTRAINT `linkages_outcome_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_pap`
--
ALTER TABLE `linkages_pap`
  ADD CONSTRAINT `linkages_pap_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_personnel_and_officials`
--
ALTER TABLE `linkages_personnel_and_officials`
  ADD CONSTRAINT `linkages_personnel_and_officials_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_resources`
--
ALTER TABLE `linkages_resources`
  ADD CONSTRAINT `linkages_resources_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_sm`
--
ALTER TABLE `linkages_sm`
  ADD CONSTRAINT `linkages_sm_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_timing`
--
ALTER TABLE `linkages_timing`
  ADD CONSTRAINT `linkages_timing_ibfk_1` FOREIGN KEY (`linkages_id`) REFERENCES `linkages` (`id`);

--
-- Constraints for table `linkages_year`
--
ALTER TABLE `linkages_year`
  ADD CONSTRAINT `linkages_year_ibfk_1` FOREIGN KEY (`linkages_implementation_plan_id`) REFERENCES `linkages_implementation_plan` (`id`);

--
-- Constraints for table `narrative_report`
--
ALTER TABLE `narrative_report`
  ADD CONSTRAINT `narrative_report_ibfk_1` FOREIGN KEY (`activityform_id`) REFERENCES `activityform` (`id`);

--
-- Constraints for table `narrative_report_representative`
--
ALTER TABLE `narrative_report_representative`
  ADD CONSTRAINT `narrative_report_representative_ibfk_1` FOREIGN KEY (`narrative_report_id`) REFERENCES `narrative_report` (`id`);

--
-- Constraints for table `narrative_report_representative_list`
--
ALTER TABLE `narrative_report_representative_list`
  ADD CONSTRAINT `narrative_report_representative_list_ibfk_1` FOREIGN KEY (`narrative_report_representative_id`) REFERENCES `narrative_report_representative` (`id`),
  ADD CONSTRAINT `narrative_report_representative_list_ibfk_2` FOREIGN KEY (`representative_roles_id`) REFERENCES `representative_roles` (`id`);

--
-- Constraints for table `narrative_report_responsibilities_list`
--
ALTER TABLE `narrative_report_responsibilities_list`
  ADD CONSTRAINT `narrative_report_responsibilities_list_ibfk_1` FOREIGN KEY (`narrative_report_representative_id`) REFERENCES `narrative_report_representative` (`id`),
  ADD CONSTRAINT `narrative_report_responsibilities_list_ibfk_2` FOREIGN KEY (`responsibilities_id`) REFERENCES `responsibilities` (`id`);

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`collegeID`);

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

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`create_folder_id`) REFERENCES `create_folder` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
