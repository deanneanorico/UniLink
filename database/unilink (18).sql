-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:31 AM
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
('0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Intramurals', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Amara en Terrazas', '2023-12-05', '2023-12-30', '', '', 'Fund Partner Agency'),
('0f1d333c-95dc-11ee-8722-f80dac465db8', 'dfsf', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'El Cocinero', '2023-12-08', '2023-12-20', '<ol><li>dsfs</li></ol>', '<ol><li>dsxfdsffdsf &nbsp;&nbsp;</li></ol>', ''),
('105ede4c-6d23-11ee-b322-f80dac465db8', 'Community Health Education Program', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'International', 'Hospitality Institute of America-Philippines Inc.', '2023-10-18', '2023-10-31', '<p>The Community Health Education Program is designed to address the critical need for health education and promotion at the community level. Many communities, especially underserved or at-risk populations, lack access to vital health information and resources. This program aims to bridge that gap by empowering individuals and communities to make informed decisions about their health and well-being. By providing education and support, the program can contribute to reducing health disparities, improving overall community health, and preventing or managing various health conditions.</p>', '<p><strong>Increase Health Literacy:</strong> The primary objective is to improve the health literacy of the community members. This includes their ability to understand, interpret, and use health information to make informed decisions. <strong>Raise Awareness:</strong> Create awareness about specific health issues or topics that are prevalent in the community, such as diabetes, cardiovascular health, or mental health.</p>', ''),
('11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'test', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Canyon Cove', '2023-11-21', '2023-11-21', '<p>.</p>', '', ''),
('18210bc6-6d21-11ee-b322-f80dac465db8', 'Micro-teaching Session', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Elementary Education', 'Local', 'Municipality of Lian', '2023-10-19', '2023-12-01', '', '', 'Fund of University'),
('1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Chateau Royale', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', 'Fund Partner Agency'),
('28bee6f0-6d21-11ee-b322-f80dac465db8', 'Virtual Field Trip Creation', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Secondary Education', 'Local', 'Municipality of Calatagan', '2023-10-17', '2023-10-19', '', '', 'Fund Partner Agency'),
('2cb31331-6d1f-11ee-b322-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Canyon Cove', '2023-10-18', '2023-10-19', '', '', 'Fund of University'),
('2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'wewe', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', '', '', '2023-11-20', '2023-11-30', '', '', ''),
('2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'Global University Network for Innovation', '2023-11-28', '2023-12-02', '<p>.</p>', '<p>.</p>', 'Fund of University'),
('3534cd39-87b5-11ee-bb2f-f80dac465db8', 'wewe', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', '', NULL, '2023-11-20', '2023-11-30', '', '', 'Fund Partner Agency'),
('3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Passport Examination', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-10-17', '2023-10-22', '<p><strong>Certification and Credentialing:</strong> Examinations often serve as a basis for certifying individuals in various professions and awarding academic degrees or certifications. Passing exams can be a prerequisite for entering certain careers.</p>', '<p><strong>Assessment of Knowledge and Skills:</strong> One of the primary objectives of an examination project is to assess the knowledge, understanding, and skills of the individuals being examined. This can include subject-specific knowledge, problem-solving abilities, critical thinking, and practical skills.</p>', 'Fund Partner Agency'),
('4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Student\'s Night ', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Municipality of Lian', '2023-11-28', '2023-11-29', '', '', ''),
('5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Telehealth Integration Project', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'International', 'Hospitality Institute of America-Philippines Inc.', '2023-10-17', '2023-12-18', '<p>The Telehealth Integration Project is driven by the growing importance of telehealth in modern healthcare. Telehealth offers the potential to increase access to care, improve healthcare efficiency, and enhance patient outcomes. With advances in technology and the need for more accessible healthcare, integrating telehealth services into healthcare facilities is critical.</p>', '<p><strong>Telehealth Infrastructure Development:</strong> Create the necessary technological infrastructure within the healthcare facility to support telehealth services, including secure video conferencing and electronic health record integration.</p>', 'Fund Partner Agency'),
('66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Intramurals', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'Hung Voung University', '2023-11-26', '2023-11-30', '', '', ''),
('69017def-9363-11ee-b3c9-f80dac465db8', 'Tree Planting', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'Crosswinds Resort Suites', '2023-12-01', '2023-12-04', '', '', 'Fund of University'),
('789f329a-6d22-11ee-b322-f80dac465db8', 'Community Policing Effectiveness Assessment', 'ARASOF-Nasugbu', 'College of Arts and Sciences', 'Bachelor of Science in Criminology', 'Local', 'Philippine Army', '2023-10-17', '2023-10-31', '<p>Crime is a significant concern for both communities and law enforcement agencies. By evaluating the impact of community policing on crime rates, the project addresses a critical issue in criminology. It also assesses community satisfaction and trust, which are crucial for long-term crime reduction and public safety.</p>', '<p>To identify potential correlations or factors that contribute to the effectiveness of community policing, such as the extent of community engagement, the number of community policing programs, and the allocation of officers to specific neighborhoods.</p>', ''),
('7da20315-9668-11ee-83fd-f80dac465db8', 'deannne', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'Crosswinds Resort Suites', '2023-12-30', '2023-12-30', '', '', ''),
('85952ef2-8d47-11ee-97e4-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', '', NULL, '2023-11-28', '2023-11-28', '', '', ''),
('a089a774-8df9-11ee-99cb-f80dac465db8', 'Intramurals', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'International', 'Hung Voung University', '2023-11-26', '2023-11-30', '', '', ''),
('ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Testing', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Amara en Terrazas', '2023-09-23', '2023-09-23', '', '', ''),
('cb177da3-6d23-11ee-b322-f80dac465db8', 'Simulation-Based Interprofessional Training', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'International', 'Hospitality Institute of America-Philippines Inc.', '2023-10-01', '2023-10-17', '<p><strong>Patient Safety:</strong> Effective interprofessional teamwork and communication are critical to preventing medical errors and improving patient safety. <strong>Complex Healthcare Environments:</strong> Modern healthcare settings are complex, with various professionals working together to deliver care. Effective collaboration is necessary to navigate this complexity.</p>', '<p><strong>Skill Development:</strong> Provide healthcare professionals with opportunities to practice and develop essential interprofessional skills, including communication, teamwork, and leadership. <strong>Scenario-Based Training:</strong> Design realistic patient scenarios where healthcare teams must work together to diagnose, treat, and manage the patient\'s condition. These scenarios should mimic real clinical situations.</p>', 'Fund Partner Agency');

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
('0152066f-9363-11ee-b3c9-f80dac465db8', '0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Project Leader/s'),
('01520ed9-9363-11ee-b3c9-f80dac465db8', '0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Project Member/s'),
('0f1d3cd1-95dc-11ee-8722-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Project Leader/s'),
('0f1d42bb-95dc-11ee-8722-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'Project Member/s'),
('105ee5fe-6d23-11ee-b322-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('105eea2c-6d23-11ee-b322-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('1821194e-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('18213365-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('2fab294c-8d48-11ee-97e4-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Project Leader/s'),
('2fab3c26-8d48-11ee-97e4-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'Project Member/s'),
('3534db4a-87b5-11ee-bb2f-f80dac465db8', '3534cd39-87b5-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('3534e3f7-87b5-11ee-bb2f-f80dac465db8', '3534cd39-87b5-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('4e9fd290-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Project Leader/s'),
('4e9fd80f-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Project Member/s'),
('5cfc6c35-6d23-11ee-b322-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('5cfc7754-6d23-11ee-b322-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('6200bc6c-9361-11ee-b3c9-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Leader/s'),
('6200caf9-9361-11ee-b3c9-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Member/s'),
('69018996-9363-11ee-b3c9-f80dac465db8', '69017def-9363-11ee-b3c9-f80dac465db8', 'Project Leader/s'),
('6901a03d-9363-11ee-b3c9-f80dac465db8', '69017def-9363-11ee-b3c9-f80dac465db8', 'Project Member/s'),
('6b44f5e8-95db-11ee-8722-f80dac465db8', 'a089a774-8df9-11ee-99cb-f80dac465db8', 'Project Leader/s'),
('6b44fdf9-95db-11ee-8722-f80dac465db8', 'a089a774-8df9-11ee-99cb-f80dac465db8', 'Project Member/s'),
('77132c5e-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Leader/s'),
('771335bc-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Member/s'),
('789f3d46-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Leader/s'),
('789f42d5-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Member/s'),
('7da20e0e-9668-11ee-83fd-f80dac465db8', '7da20315-9668-11ee-83fd-f80dac465db8', 'Project Leader/s'),
('7da21d45-9668-11ee-83fd-f80dac465db8', '7da20315-9668-11ee-83fd-f80dac465db8', 'Project Member/s'),
('7dbfc147-87c5-11ee-bb2f-f80dac465db8', '2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('7dbfcbf0-87c5-11ee-bb2f-f80dac465db8', '2d05cb7e-87b5-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('85954139-8d47-11ee-97e4-f80dac465db8', '85952ef2-8d47-11ee-97e4-f80dac465db8', 'Project Leader/s'),
('85954fed-8d47-11ee-97e4-f80dac465db8', '85952ef2-8d47-11ee-97e4-f80dac465db8', 'Project Member/s'),
('8d400ea2-8df9-11ee-99cb-f80dac465db8', '66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Project Leader/s'),
('8d401937-8df9-11ee-99cb-f80dac465db8', '66bc6b42-8df9-11ee-99cb-f80dac465db8', 'Project Member/s'),
('ad8ab2a9-964c-11ee-8722-f80dac465db8', 'ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Project Leader/s'),
('ad8ac443-964c-11ee-8722-f80dac465db8', 'ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Project Member/s'),
('b2af841b-937d-11ee-8c8d-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Project Leader/s'),
('b2af8dea-937d-11ee-8c8d-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Project Member/s'),
('cb178cfc-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('cb1796ef-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('de3ba23e-6d7b-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('de3baefc-6d7b-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('f0e8ac6a-937c-11ee-8c8d-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Leader/s'),
('f0e8b897-937c-11ee-8c8d-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Member/s');

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
('0154cbaa-9363-11ee-b3c9-f80dac465db8', '0152066f-9363-11ee-b3c9-f80dac465db8', NULL, 'Assist the CICS Department'),
('10620d0a-6d23-11ee-b322-f80dac465db8', '105ee5fe-6d23-11ee-b322-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('106343a0-6d23-11ee-b322-f80dac465db8', '105eea2c-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('1823ab0c-6d21-11ee-b322-f80dac465db8', '1821194e-6d21-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('1824ce5c-6d21-11ee-b322-f80dac465db8', '18213365-6d21-11ee-b322-f80dac465db8', 'cbc452c7-5318-11ee-aea5-0a0027000002', 'Assist in the morning and evaluation of the extension program'),
('4ea5d764-8df5-11ee-99cb-f80dac465db8', '4e9fd290-8df5-11ee-99cb-f80dac465db8', NULL, 'Assist the CICS Department'),
('4ea8a284-8df5-11ee-99cb-f80dac465db8', '4e9fd80f-8df5-11ee-99cb-f80dac465db8', NULL, 'Helps to assist.'),
('5cfed98f-6d23-11ee-b322-f80dac465db8', '5cfc6c35-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('5cffe9fc-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('5d00616b-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', 'cbc44f0f-5318-11ee-aea5-0a0027000002', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('6206e703-9361-11ee-b3c9-f80dac465db8', '6200bc6c-9361-11ee-b3c9-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('620a2bc0-9361-11ee-b3c9-f80dac465db8', '6200bc6c-9361-11ee-b3c9-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('771fdb07-937d-11ee-8c8d-f80dac465db8', '77132c5e-937d-11ee-8c8d-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('77218b21-937d-11ee-8c8d-f80dac465db8', '771335bc-937d-11ee-8c8d-f80dac465db8', 'cbc45151-5318-11ee-aea5-0a0027000002', 'Prepare required reports/documentation'),
('78a0e3ed-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('78a28e27-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('cb19a07d-6d23-11ee-b322-f80dac465db8', 'cb178cfc-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('cb1b6b10-6d23-11ee-b322-f80dac465db8', 'cb1796ef-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives');

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
('01566044-9363-11ee-b3c9-f80dac465db8', '0151ff6e-9363-11ee-b3c9-f80dac465db8', 'Water', 25, 35, 875),
('0f1f5b0f-95dc-11ee-8722-f80dac465db8', '0f1d333c-95dc-11ee-8722-f80dac465db8', 'sd', 45, 45, 2025),
('1825bb6d-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'sandwich ', 25, 30, 750),
('2fb0c53e-8d48-11ee-97e4-f80dac465db8', '2fab14d4-8d48-11ee-97e4-f80dac465db8', 'sandwich ', 78, 78, 6084),
('4eaaa676-8df5-11ee-99cb-f80dac465db8', '4e9fccce-8df5-11ee-99cb-f80dac465db8', 'Water', 300, 25, 7500),
('620c8b0e-9361-11ee-b3c9-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'water', 100, 20, 2000),
('620d7d60-9361-11ee-b3c9-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'sandwich ', 100, 15, 1500),
('69048960-9363-11ee-b3c9-f80dac465db8', '69017def-9363-11ee-b3c9-f80dac465db8', 'Pizza', 5, 120, 600),
('77227c08-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Water', 250, 20, 5000),
('772308a5-937d-11ee-8c8d-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Sandwich', 250, 25, 6250),
('7da72c90-9668-11ee-83fd-f80dac465db8', '7da20315-9668-11ee-83fd-f80dac465db8', 'dss', 56, 56, 3136),
('8599b619-8d47-11ee-97e4-f80dac465db8', '85952ef2-8d47-11ee-97e4-f80dac465db8', 'sandwich ', 67, 78, 5226),
('ad933da6-964c-11ee-8722-f80dac465db8', 'ad8a9dd1-964c-11ee-8722-f80dac465db8', 'Water', 1, 1, 1),
('b2b4bf11-937d-11ee-8c8d-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'item 1', 1, 2, 2),
('cb1c7297-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Water', 30, 30, 900),
('cb1cf26d-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Lunch', 30, 60, 1800),
('de45b692-6d7b-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Item 10', 45, 45, 2025),
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
(33, 'Alangilan, Campus', 'Alangilan, Batangass');

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
('081f9720-9335-11ee-a838-f80dac465db8', '11c2cb25-87c7-11ee-bb2f-f80dac465db8', 'Intramurals', '<p>.</p>', '2023-12-06', '2023-12-06', '<p>.</p>', '<p>.</p>'),
('60aea6bd-95e0-11ee-8722-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p>\r\n\r\n<p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p>\r\n\r\n<p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>\r\n', ''),
('74ae40bc-9512-11ee-be1c-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', '', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', ''),
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
('081fdc1b-9335-11ee-a838-f80dac465db8', '081f9720-9335-11ee-a838-f80dac465db8', 'Project Leader/s'),
('081fed5c-9335-11ee-a838-f80dac465db8', '081f9720-9335-11ee-a838-f80dac465db8', 'Project Member/s'),
('60aeb5a1-95e0-11ee-8722-f80dac465db8', '60aea6bd-95e0-11ee-8722-f80dac465db8', 'Project Leader/s'),
('60aec05b-95e0-11ee-8722-f80dac465db8', '60aea6bd-95e0-11ee-8722-f80dac465db8', 'Project Member/s'),
('74ae4d2e-9512-11ee-be1c-f80dac465db8', '74ae40bc-9512-11ee-be1c-f80dac465db8', 'Project Leader/s'),
('74ae5734-9512-11ee-be1c-f80dac465db8', '74ae40bc-9512-11ee-be1c-f80dac465db8', 'Project Member/s'),
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
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `category`, `name`, `college_id`) VALUES
(11, 'Local', 'Absolut Distillers, Inc.', 82),
(12, 'Local', 'AIG Shared Services', 82),
(13, 'Local', 'Bausas Surveying Office', 82),
(14, 'International', 'Bureau of Fire Protection Nasugbu Branch', 82),
(15, 'International', 'Calatagan Municipal Police Station', 82),
(16, 'Local', 'Amara en Terrazas', 68),
(17, 'Local', 'Boracay Option Tours and Travel Services, Inc.', 68),
(18, 'Local', 'Chateau Royale', 68),
(19, 'International', 'Crosswinds Resort Suites', 68),
(20, 'International', 'El Cocinero', 68);

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
(30, 32, 68, 'BSA', 'Bachelor of Science in Accountancy'),
(31, 32, 68, 'BSMA', 'Bachelor of Science in Management Accounting'),
(34, 32, 68, 'BSBA', 'Bachelor of Science in Business Administration'),
(35, 32, 68, 'BSHM', 'Bachelor of Science in Hospitality Management'),
(36, 32, 68, 'BSTM', 'Bachelor of Science in Tourism Management'),
(37, 32, 81, 'BAC', 'Bachelor of Arts in Communication'),
(38, 32, 81, 'BSP', 'Bachelor of Science in Psychology'),
(39, 32, 81, 'BSFT', 'Bachelor of Science in Food Technology'),
(40, 32, 81, 'BSC', 'Bachelor of Science in Criminology'),
(41, 32, 81, 'BSFAS', 'Bachelor of Science in Fisheries and Aquatic Sciences'),
(42, 32, 82, 'BSIT', 'Bachelor of Science in Information Technology'),
(43, 32, 83, 'BSN', 'Bachelor of Science in Nursing'),
(44, 32, 83, 'BSND', 'Bachelor of Science in Nutrition and Dietetics');

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
('015572a7-9363-11ee-b3c9-f80dac465db8', '0152066f-9363-11ee-b3c9-f80dac465db8', NULL, 'Noey M. De Jesus', 'Faculty'),
('10627be1-6d23-11ee-b322-f80dac465db8', '105ee5fe-6d23-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('1063c75e-6d23-11ee-b322-f80dac465db8', '105eea2c-6d23-11ee-b322-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('182472c1-6d21-11ee-b322-f80dac465db8', '1821194e-6d21-11ee-b322-f80dac465db8', '56347d3b-5318-11ee-aea5-0a0027000002', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('18253b85-6d21-11ee-b322-f80dac465db8', '18213365-6d21-11ee-b322-f80dac465db8', '563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('2fae6040-8d48-11ee-97e4-f80dac465db8', '2fab294c-8d48-11ee-97e4-f80dac465db8', NULL, 'Asst. Prof. Renz Mervin A. Salac', 'Capstone Leader'),
('2faffab9-8d48-11ee-97e4-f80dac465db8', '2fab3c26-8d48-11ee-97e4-f80dac465db8', NULL, 'Deanne', 'Student Org'),
('4ea7e8e5-8df5-11ee-99cb-f80dac465db8', '4e9fd290-8df5-11ee-99cb-f80dac465db8', NULL, 'Noey M. De Jesus', 'Faculty'),
('4ea92239-8df5-11ee-99cb-f80dac465db8', '4e9fd80f-8df5-11ee-99cb-f80dac465db8', NULL, 'Djoanna Marie V. Salac', 'Faculty'),
('5cff604b-6d23-11ee-b322-f80dac465db8', '5cfc6c35-6d23-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('5d00f85d-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('5d01940f-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', '56347f43-5318-11ee-aea5-0a0027000002', 'Atty. Alvin R. De Silva', 'Chancellor'),
('620ac707-9361-11ee-b3c9-f80dac465db8', '6200bc6c-9361-11ee-b3c9-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('620c08b3-9361-11ee-b3c9-f80dac465db8', '6200bc6c-9361-11ee-b3c9-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('772086d5-937d-11ee-8c8d-f80dac465db8', '77132c5e-937d-11ee-8c8d-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('7721e86c-937d-11ee-8c8d-f80dac465db8', '771335bc-937d-11ee-8c8d-f80dac465db8', '563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services'),
('78a1bf98-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('78a2fa8e-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', '56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('cb1aa244-6d23-11ee-b322-f80dac465db8', 'cb178cfc-6d23-11ee-b322-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('cb1bd8b6-6d23-11ee-b322-f80dac465db8', 'cb1796ef-6d23-11ee-b322-f80dac465db8', '56347dce-5318-11ee-aea5-0a0027000002', 'Dr. Joy M. Reyes', 'Campus Director'),
('f0f56436-937c-11ee-8c8d-f80dac465db8', 'f0e8ac6a-937c-11ee-8c8d-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('f0f693f8-937c-11ee-8c8d-f80dac465db8', 'f0e8b897-937c-11ee-8c8d-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('f0f6f9fc-937c-11ee-8c8d-f80dac465db8', 'f0e8b897-937c-11ee-8c8d-f80dac465db8', '56347f03-5318-11ee-aea5-0a0027000002', 'Dr. Romel U. Briones', 'Campus Director');

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
  `college_abbrev` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `privelege` varchar(25) NOT NULL,
  `profile_pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `mid_name`, `last_name`, `sex`, `email`, `campus`, `college_abbrev`, `pass`, `privelege`, `profile_pic`) VALUES
(32, 'Ms.', 'Ma. Deanne Grace', 'G.', 'Anorico', 'Female', '20-78556@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$pNu90rT1iA1.tmAi54d3i.LNrLhvWNENtpeJrd2nX6FNur7Y/8z3.', 'Admin', NULL),
(33, 'Dr.', 'Lorrisa Joana', 'E.', 'Buenas', 'Female', 'lorissa.joana@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CICS', '$2y$10$4gsxfgsbzomMKdUEFY8wQ.XpXUlyfjwJ5Zz7pqW7tLZJSbC6f6bRu', 'Dean', NULL),
(34, 'Ms.', 'Ma. Deanne Grace', 'G.', 'Anorico', 'Female', 'mayette.cananea@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CABEIHM', '$2y$10$BZcOfTZ2Fa.BfNgZrKskqO1Indb8zBcDbz.Q4e8JHoI8af4DoUHBG', 'Dean', 'webcam-toy-photo81.jpg'),
(36, 'Mr. ', 'Marvin', 'C.', 'Hernandez', 'Male', 'marvin.hernandez@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CABEIHM', '$2y$10$BQrdeJ7Fnj8RO.mIdXSC8OS3rHqN09ZoMESearAQnzhd04miogLGG', 'Associate Dean', NULL),
(37, 'Dr. ', 'Anania', 'B.', 'Aquino', 'Female', 'anania.aquino@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CTE', '$2y$10$8NTpJ6mQs1NT6nBrmAtUaebWBK7fXJ2cNShApoAsgQVyp43kzBZb.', 'Dean', NULL),
(38, 'Asst. Prof.', 'Gliceria ', 'R. ', 'Quizon', 'Female', 'gliceria.quizon@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CTE', '$2y$10$CNVYpA6cDCGtSoxiJjaF9uNqA8DGsEWAGn9IAyURnf5x68ODurwTK', 'Associate Dean', NULL),
(39, 'Dr.', 'Maria Luisa', 'A.', 'Valdez', 'Female', 'luisa.valdez@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CAS', '$2y$10$Hb/58zrQ8QKvaolbxXBBCeqqCWhxRx2skdrNfTvPT/JSdmpieAg5e', 'Dean', NULL),
(40, 'Mr.', 'Jonas', 'C.', 'Villaveza', 'Male', 'jonas.villaveza@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CAS', '$2y$10$GlDchuGQH.5pXpDVbnor2uIaK2wImMYFXHIdBhtsklHo7IOzk3azW', 'Associate Dean', NULL),
(41, 'Asst. Prof.', 'Renalyn', 'D.', 'Malabanan', 'Female', 'rena.malabanan@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CONAHS', '$2y$10$WCQdVGUEY4MwNNpTkOD8NuQ6Dt7TiN0Qx4FMJlvqnvdufRdwxqsKC', 'Dean', NULL),
(44, 'Mr.', 'Carl Joriz Mickeal', 'S.', 'Marasigan', 'Male', 'carl.marasigan@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$FM5Yn0/C2LU61qeH65neNOzxrojA/woLDOknjWdTJzLxDcXrgpHu.', 'Head', 'Batangas_State_Logo.png'),
(45, 'Assoc. Prof.', 'Lorenjane', 'E.', 'Balan', 'Female', 'loren.jane@g.batstate-u.edu.ph', 'none', 'none', '$2y$10$5.eyTiUB2C0ZQFumu.1d0.AC6UD/Hs3uJdDyfDqEiaeAUwhvP9vEu', 'VCDEA', 'user-head.png'),
(46, 'Ms.', 'Erlyn', 'S.', 'Andrin', 'Female', '20-78362@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'CAS', '$2y$10$MjhD5xBWYWtDC7kuf4e1/.O9EaFwvgYIO4MfIlC2xaG.o3scjZkSm', 'Associate Dean', NULL);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
