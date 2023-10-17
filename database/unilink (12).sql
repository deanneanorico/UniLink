-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 09:39 PM
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
('105ede4c-6d23-11ee-b322-f80dac465db8', 'Community Health Education Program', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'International', 'Hospitality Institute of America-Philippines Inc.', '2023-10-18', '2023-10-31', '<p>The Community Health Education Program is designed to address the critical need for health education and promotion at the community level. Many communities, especially underserved or at-risk populations, lack access to vital health information and resources. This program aims to bridge that gap by empowering individuals and communities to make informed decisions about their health and well-being. By providing education and support, the program can contribute to reducing health disparities, improving overall community health, and preventing or managing various health conditions.</p>', '<p><strong>Increase Health Literacy:</strong> The primary objective is to improve the health literacy of the community members. This includes their ability to understand, interpret, and use health information to make informed decisions. <strong>Raise Awareness:</strong> Create awareness about specific health issues or topics that are prevalent in the community, such as diabetes, cardiovascular health, or mental health.</p>', ''),
('18210bc6-6d21-11ee-b322-f80dac465db8', 'Micro-teaching Session', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Elementary Education', 'Local', 'Municipality of Lian', '2023-10-19', '2023-12-01', '', '', 'Fund of University'),
('1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Municipal Agriculture Office/Fishery Unit-Nasugbu', '2023-10-01', '2023-10-07', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', '<p>Lorem ipsum dolor sit amet. Ab dignissimos fuga eos asperiores doloribus qui impedit nihil aut deleniti natus ad soluta autem ea incidunt quod eum officia amet. Vel ratione totam ut velit voluptas hic aliquid dolores in quasi omnis cum similique maxime rem minima iste aut blanditiis expedita?</p><p>Non architecto quas aut provident odio qui quia modi. Quo accusantium error et repellendus aliquam est praesentium voluptas aut totam obcaecati ab galisum perferendis ea incidunt eligendi est nemo quibusdam? Non assumenda quam At galisum sapiente sed nostrum numquam. Et labore accusamus et fugit maiores aut delectus accusamus ea esse quis in minus omnis est quam dolor.</p><p>Et quisquam totam a eligendi assumenda ut aliquam quibusdam sed enim similique. Quo earum nemo quo quae omnis aut facere atque ut consectetur ullam et architecto rerum eum perferendis voluptas. Sit porro magnam non rerum nihil id voluptas atque.</p>', 'Fund Partner Agency'),
('27c05737-6cf2-11ee-9abb-b42e99640312', 'Test', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-10-17', '2023-10-17', '<p>asdf</p>', '<p>asdf</p>', ''),
('28bee6f0-6d21-11ee-b322-f80dac465db8', '', 'ARASOF-Nasugbu', 'College of Teacher Education', 'Bachelor of Elementary Education', '', NULL, '2023-10-17', '2023-10-19', '', '', 'Fund Partner Agency'),
('2cb31331-6d1f-11ee-b322-f80dac465db8', 'Graduation Party-Speaker', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Hung Voung University', '2023-10-18', '2023-10-19', '', '', 'Fund of University'),
('3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Passport Examination', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-10-17', '2023-10-22', '<p><strong>Certification and Credentialing:</strong> Examinations often serve as a basis for certifying individuals in various professions and awarding academic degrees or certifications. Passing exams can be a prerequisite for entering certain careers.</p>', '<p><strong>Assessment of Knowledge and Skills:</strong> One of the primary objectives of an examination project is to assess the knowledge, understanding, and skills of the individuals being examined. This can include subject-specific knowledge, problem-solving abilities, critical thinking, and practical skills.</p>', 'Fund Partner Agency'),
('42269ed4-6d1e-11ee-b322-f80dac465db8', 'Final Defense', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'International', 'Global University Network for Innovation', '2023-11-19', '2023-11-29', '<p><strong>Critical Thinking</strong>: The defense assesses the student\'s ability to think critically and analytically. They are expected to answer challenging questions and defend their work against criticism.</p>', '<p><strong>Defend the Work</strong>: Be prepared to defend the research and answer questions from the evaluating committee. This involves critical thinking and the ability to address criticisms and concerns.</p>', 'Fund of University'),
('5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Telehealth Integration Project', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', 'Bachelor of Science in Nursing', 'International', 'Hospitality Institute of America-Philippines Inc.', '2023-10-17', '2023-12-18', '<p>The Telehealth Integration Project is driven by the growing importance of telehealth in modern healthcare. Telehealth offers the potential to increase access to care, improve healthcare efficiency, and enhance patient outcomes. With advances in technology and the need for more accessible healthcare, integrating telehealth services into healthcare facilities is critical.</p>', '<p><strong>Telehealth Infrastructure Development:</strong> Create the necessary technological infrastructure within the healthcare facility to support telehealth services, including secure video conferencing and electronic health record integration.</p>', 'Fund Partner Agency'),
('789f329a-6d22-11ee-b322-f80dac465db8', 'Community Policing Effectiveness Assessment', 'ARASOF-Nasugbu', 'College of Arts and Sciences', 'Bachelor of Science in Criminology', 'Local', 'Philippine Army', '2023-10-17', '2023-10-31', '<p>Crime is a significant concern for both communities and law enforcement agencies. By evaluating the impact of community policing on crime rates, the project addresses a critical issue in criminology. It also assesses community satisfaction and trust, which are crucial for long-term crime reduction and public safety.</p>', '<p>To identify potential correlations or factors that contribute to the effectiveness of community policing, such as the extent of community engagement, the number of community policing programs, and the allocation of officers to specific neighborhoods.</p>', ''),
('9cfad68e-62a3-11ee-9903-b42e99640312', 'Graduation Disco Party', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', 'Bachelor of Science in Information Technology', 'Local', 'Canyon Cove', '2023-07-30', '2023-07-31', '<p>Alak Ingredients</p>', '<p>Pulutan Ingredients</p>', 'Fund of University'),
('b9994b6d-6d1f-11ee-b322-f80dac465db8', 'Seminar of Waste Disposal', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', 'Bachelor of Science in Accountancy', 'Local', 'Municipality of Lian', '2023-10-18', '2023-12-18', '', '', 'Fund Partner Agency'),
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
('105ee5fe-6d23-11ee-b322-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('105eea2c-6d23-11ee-b322-f80dac465db8', '105ede4c-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('1821194e-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('18213365-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('1b6f9dec-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Leader/s'),
('1b6fa8bd-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'Project Member/s'),
('28bef474-6d21-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Leader/s'),
('28befc13-6d21-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Project Member/s'),
('2cb31d18-6d1f-11ee-b322-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Leader/s'),
('2cb33341-6d1f-11ee-b322-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'Project Member/s'),
('51dad921-6d24-11ee-b322-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Leader/s'),
('51dae2d7-6d24-11ee-b322-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Project Member/s'),
('5cfc6c35-6d23-11ee-b322-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('5cfc7754-6d23-11ee-b322-f80dac465db8', '5cfc62a5-6d23-11ee-b322-f80dac465db8', 'Project Member/s'),
('7122d4fd-6d1c-11ee-b322-f80dac465db8', '27c05737-6cf2-11ee-9abb-b42e99640312', 'Project Leader/s'),
('7122f280-6d1c-11ee-b322-f80dac465db8', '27c05737-6cf2-11ee-9abb-b42e99640312', 'Project Member/s'),
('789f3d46-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Leader/s'),
('789f42d5-6d22-11ee-b322-f80dac465db8', '789f329a-6d22-11ee-b322-f80dac465db8', 'Project Member/s'),
('81ca8f5e-6d1e-11ee-b322-f80dac465db8', '42269ed4-6d1e-11ee-b322-f80dac465db8', 'Project Leader/s'),
('81caaba7-6d1e-11ee-b322-f80dac465db8', '42269ed4-6d1e-11ee-b322-f80dac465db8', 'Project Member/s'),
('b999524b-6d1f-11ee-b322-f80dac465db8', 'b9994b6d-6d1f-11ee-b322-f80dac465db8', 'Project Leader/s'),
('b9995913-6d1f-11ee-b322-f80dac465db8', 'b9994b6d-6d1f-11ee-b322-f80dac465db8', 'Project Member/s'),
('c5bd6e76-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Project Member/s'),
('c5bd7c25-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Project Staff'),
('cb178cfc-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Leader/s'),
('cb1796ef-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Project Member/s');

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
('10620d0a-6d23-11ee-b322-f80dac465db8', '105ee5fe-6d23-11ee-b322-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('106343a0-6d23-11ee-b322-f80dac465db8', '105eea2c-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('1823ab0c-6d21-11ee-b322-f80dac465db8', '1821194e-6d21-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('1824ce5c-6d21-11ee-b322-f80dac465db8', '18213365-6d21-11ee-b322-f80dac465db8', 'cbc452c7-5318-11ee-aea5-0a0027000002', 'Assist in the morning and evaluation of the extension program'),
('1b78b545-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', 'cbc44ded-5318-11ee-aea5-0a0027000002', 'Monitor the flow of the training'),
('1b79eefd-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('51e21718-6d24-11ee-b322-f80dac465db8', '51dad921-6d24-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('51e35044-6d24-11ee-b322-f80dac465db8', '51dae2d7-6d24-11ee-b322-f80dac465db8', 'cbc45151-5318-11ee-aea5-0a0027000002', 'Prepare required reports/documentation'),
('5cfed98f-6d23-11ee-b322-f80dac465db8', '5cfc6c35-6d23-11ee-b322-f80dac465db8', 'cbc44b18-5318-11ee-aea5-0a0027000002', 'Identify the projects overall goal, outcome and objectives'),
('5cffe9fc-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('5d00616b-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', 'cbc44f0f-5318-11ee-aea5-0a0027000002', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('78a0e3ed-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', 'cbc44e89-5318-11ee-aea5-0a0027000002', 'Prepare project/activity proposal'),
('78a28e27-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('81d0edc9-6d1e-11ee-b322-f80dac465db8', '81ca8f5e-6d1e-11ee-b322-f80dac465db8', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('81d24aa9-6d1e-11ee-b322-f80dac465db8', '81caaba7-6d1e-11ee-b322-f80dac465db8', 'cbc45151-5318-11ee-aea5-0a0027000002', 'Prepare required reports/documentation'),
('c5c40278-6d24-11ee-b322-f80dac465db8', 'c5bd6e76-6d24-11ee-b322-f80dac465db8', 'cbc44f0f-5318-11ee-aea5-0a0027000002', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('c5c576c8-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Taga collect ng funds para sa alak at pulutan'),
('c5c61249-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Taga bili ng alak at pulutan'),
('c5c69343-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Taga timpla ng alak'),
('c5c72c2c-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Taga luto ng pulutan'),
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
('1825bb6d-6d21-11ee-b322-f80dac465db8', '18210bc6-6d21-11ee-b322-f80dac465db8', 'sandwich ', 25, 30, 750),
('1b7dd049-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'water', 100, 20, 2000),
('1b7e8d9a-6be9-11ee-b322-f80dac465db8', '1b6f8d0f-6be9-11ee-b322-f80dac465db8', 'sandwich ', 100, 15, 1500),
('28c1365c-6d21-11ee-b322-f80dac465db8', '28bee6f0-6d21-11ee-b322-f80dac465db8', 'Item 10', 45, 45, 2025),
('2cb7a44b-6d1f-11ee-b322-f80dac465db8', '2cb31331-6d1f-11ee-b322-f80dac465db8', 'sandwich ', 1000, 25, 25000),
('51e43649-6d24-11ee-b322-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Water', 250, 20, 5000),
('51e4b42e-6d24-11ee-b322-f80dac465db8', '3a68b59d-6d1d-11ee-b322-f80dac465db8', 'Sandwich', 250, 25, 6250),
('81d3adb6-6d1e-11ee-b322-f80dac465db8', '42269ed4-6d1e-11ee-b322-f80dac465db8', 'Pizza', 3, 150, 450),
('81d427d9-6d1e-11ee-b322-f80dac465db8', '42269ed4-6d1e-11ee-b322-f80dac465db8', 'Del Monte', 3, 28, 84),
('b99cca28-6d1f-11ee-b322-f80dac465db8', 'b9994b6d-6d1f-11ee-b322-f80dac465db8', 'Fan', 200, 250, 50000),
('c5caf4b3-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Gin Bilog', 25, 75, 1875),
('c5cb6326-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Sizzling Sisig', 25, 80, 2000),
('c5cdaf3a-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Tokwa baboy', 25, 50, 1250),
('c5ce3a81-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'water', 56, 78, 4368),
('c5ceb095-6d24-11ee-b322-f80dac465db8', '9cfad68e-62a3-11ee-9903-b42e99640312', 'water', 45, 67, 3015),
('cb1c7297-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Water', 30, 30, 900),
('cb1cf26d-6d23-11ee-b322-f80dac465db8', 'cb177da3-6d23-11ee-b322-f80dac465db8', 'Lunch', 30, 60, 1800);

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
-- Table structure for table `narrative_report`
--

CREATE TABLE `narrative_report` (
  `id` varchar(255) NOT NULL,
  `activityform_id` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `sponsor` longtext NOT NULL,
  `participants` longtext NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `objectives` longtext NOT NULL,
  `overview` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narrative_report`
--

INSERT INTO `narrative_report` (`id`, `activityform_id`, `activity_name`, `sponsor`, `participants`, `start_date`, `end_date`, `objectives`, `overview`) VALUES
('32a41bdf-6ce7-11ee-9abb-b42e99640312', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Test Activity Title', '<p>Test Sponsor</p>', '<p>Test Participants</p>', '2002-09-23', '2002-09-23', '<p>Test Objectives</p>', '<p>Test Overview</p>'),
('36432db2-6d00-11ee-b322-f80dac465db8', '27c05737-6cf2-11ee-9abb-b42e99640312', '', '', '', '0000-00-00', '0000-00-00', '', ''),
('8799184e-6ce7-11ee-9abb-b42e99640312', '9cfad68e-62a3-11ee-9903-b42e99640312', 'Test Activity Title', '<p>Test Sponsor</p>', '<p>Test Participants</p>', '2002-09-23', '2002-09-23', '<p>Test Objectives</p>', '<p>Test Overview</p>');

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
('32a4217d-6ce7-11ee-9abb-b42e99640312', '32a41bdf-6ce7-11ee-9abb-b42e99640312', 'Project Leader/s'),
('32a42b5c-6ce7-11ee-9abb-b42e99640312', '32a41bdf-6ce7-11ee-9abb-b42e99640312', 'Project Member/s'),
('36433a70-6d00-11ee-b322-f80dac465db8', '36432db2-6d00-11ee-b322-f80dac465db8', 'Project Leader/s'),
('3643463c-6d00-11ee-b322-f80dac465db8', '36432db2-6d00-11ee-b322-f80dac465db8', 'Project Member/s'),
('87991dc1-6ce7-11ee-9abb-b42e99640312', '8799184e-6ce7-11ee-9abb-b42e99640312', 'Project Leader/s'),
('87992006-6ce7-11ee-9abb-b42e99640312', '8799184e-6ce7-11ee-9abb-b42e99640312', 'Project Member/s');

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
('32a5b836-6ce7-11ee-9abb-b42e99640312', '32a4217d-6ce7-11ee-9abb-b42e99640312', NULL, 'Dr. Lorissa Joanna Buenas', 'CICS Dean'),
('32a5f4b8-6ce7-11ee-9abb-b42e99640312', '32a4217d-6ce7-11ee-9abb-b42e99640312', NULL, 'Asst. Prof. Renz Mervin A. Salac', 'Chief Proponent and Faculty Member CICS'),
('32a7b809-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Ako', 'Student'),
('32a7ec89-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Deanne Bulilit', 'Student'),
('32a83032-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Dudoy', 'Student'),
('32a86670-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Duday', 'Student'),
('32a89a29-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Joe Honey', 'Student'),
('32a8d073-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Joy-lyn', 'Student'),
('879aca53-6ce7-11ee-9abb-b42e99640312', '87991dc1-6ce7-11ee-9abb-b42e99640312', NULL, 'Dr. Lorissa Joanna Buenas', 'CICS Dean'),
('879b0ad0-6ce7-11ee-9abb-b42e99640312', '87991dc1-6ce7-11ee-9abb-b42e99640312', NULL, 'Asst. Prof. Renz Mervin A. Salac', 'Chief Proponent and Faculty Member CICS'),
('879c5fd1-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Ako', 'Student'),
('879c8f08-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Deanne Bulilit', 'Student'),
('879cce80-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Dudoy', 'Student'),
('879d03af-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Duday', 'Student'),
('879d49c0-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Joe Honey', 'Student'),
('879d9457-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Joy-lyn', 'Student');

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
('32a50d6d-6ce7-11ee-9abb-b42e99640312', '32a4217d-6ce7-11ee-9abb-b42e99640312', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('32a64208-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga collect ng funds para sa alak at pulutan'),
('32a6c036-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga bili ng alak at pulutan'),
('32a742cc-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga timpla ng alak'),
('32a78122-6ce7-11ee-9abb-b42e99640312', '32a42b5c-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga luto ng pulutan'),
('879a4889-6ce7-11ee-9abb-b42e99640312', '87991dc1-6ce7-11ee-9abb-b42e99640312', 'cbc44eca-5318-11ee-aea5-0a0027000002', 'Coordinate with the coorperating agency/resource persons'),
('879b47b6-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga collect ng funds para sa alak at pulutan'),
('879b832b-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga bili ng alak at pulutan'),
('879bf8f2-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga timpla ng alak'),
('879c302e-6ce7-11ee-9abb-b42e99640312', '87992006-6ce7-11ee-9abb-b42e99640312', NULL, 'Taga luto ng pulutan');

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
(5, 'International', 'Hospitality Institute of America-Philippines Inc.'),
(6, 'International', 'Hung Voung University'),
(7, 'Local', 'Western Balayan Telephone System Inc.'),
(8, 'Local', 'Municipality of Calatagan'),
(9, 'Local', 'Bureau of Fire Protection Nasugbu Branch'),
(10, 'Local', 'Philippine Army');

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
('10627be1-6d23-11ee-b322-f80dac465db8', '105ee5fe-6d23-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('1063c75e-6d23-11ee-b322-f80dac465db8', '105eea2c-6d23-11ee-b322-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('182472c1-6d21-11ee-b322-f80dac465db8', '1821194e-6d21-11ee-b322-f80dac465db8', '56347d3b-5318-11ee-aea5-0a0027000002', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('18253b85-6d21-11ee-b322-f80dac465db8', '18213365-6d21-11ee-b322-f80dac465db8', '563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('1b7be79b-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', '56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('1b7d108c-6be9-11ee-b322-f80dac465db8', '1b6f9dec-6be9-11ee-b322-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('2cb58f51-6d1f-11ee-b322-f80dac465db8', '2cb31d18-6d1f-11ee-b322-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('2cb65bd4-6d1f-11ee-b322-f80dac465db8', '2cb33341-6d1f-11ee-b322-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('2cb6ca97-6d1f-11ee-b322-f80dac465db8', '2cb33341-6d1f-11ee-b322-f80dac465db8', '56347f03-5318-11ee-aea5-0a0027000002', 'Dr. Romel U. Briones', 'Campus Director'),
('51e284f9-6d24-11ee-b322-f80dac465db8', '51dad921-6d24-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('51e3b980-6d24-11ee-b322-f80dac465db8', '51dae2d7-6d24-11ee-b322-f80dac465db8', '563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services'),
('5cff604b-6d23-11ee-b322-f80dac465db8', '5cfc6c35-6d23-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('5d00f85d-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', '56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('5d01940f-6d23-11ee-b322-f80dac465db8', '5cfc7754-6d23-11ee-b322-f80dac465db8', '56347f43-5318-11ee-aea5-0a0027000002', 'Atty. Alvin R. De Silva', 'Chancellor'),
('78a1bf98-6d22-11ee-b322-f80dac465db8', '789f3d46-6d22-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('78a2fa8e-6d22-11ee-b322-f80dac465db8', '789f42d5-6d22-11ee-b322-f80dac465db8', '56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('81d19c8a-6d1e-11ee-b322-f80dac465db8', '81ca8f5e-6d1e-11ee-b322-f80dac465db8', '5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('81d33e89-6d1e-11ee-b322-f80dac465db8', '81caaba7-6d1e-11ee-b322-f80dac465db8', '563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('b99bb766-6d1f-11ee-b322-f80dac465db8', 'b999524b-6d1f-11ee-b322-f80dac465db8', '56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('b99c4d8a-6d1f-11ee-b322-f80dac465db8', 'b9995913-6d1f-11ee-b322-f80dac465db8', '56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('c5c46090-6d24-11ee-b322-f80dac465db8', 'c5bd6e76-6d24-11ee-b322-f80dac465db8', NULL, 'Dr. Lorissa Joanna Buenas', 'CICS Dean'),
('c5c4ead7-6d24-11ee-b322-f80dac465db8', 'c5bd6e76-6d24-11ee-b322-f80dac465db8', NULL, 'Asst. Prof. Renz Mervin A. Salac', 'Chief Proponent and Faculty Member CICS'),
('c5c810c7-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Ako', 'Student'),
('c5c88ecf-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Deanne Bulilit', 'Student'),
('c5c9041e-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Dudoy', 'Student'),
('c5c986c9-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Duday', 'Student'),
('c5c9ee40-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Joe Honey', 'Student'),
('c5ca8a08-6d24-11ee-b322-f80dac465db8', 'c5bd7c25-6d24-11ee-b322-f80dac465db8', NULL, 'Joy-lyn', 'Student'),
('cb1aa244-6d23-11ee-b322-f80dac465db8', 'cb178cfc-6d23-11ee-b322-f80dac465db8', '56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('cb1bd8b6-6d23-11ee-b322-f80dac465db8', 'cb1796ef-6d23-11ee-b322-f80dac465db8', '56347dce-5318-11ee-aea5-0a0027000002', 'Dr. Joy M. Reyes', 'Campus Director');

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
(11, 'Ms.', 'Meg', '', 'Perea', 'Female', 'meg.perea@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Informatics and Computing Sciences', '$2y$10$annAKGwAxDJavv9f1Jaxb.6OTWYgAg8sJgvBLaTXqV7Jrgut9PoJm', 'Head'),
(12, 'Asst. Prof.', 'Alvin', 'C. ', 'Andulan', 'Male', 'alvin.andulan@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Accountancy, Business, Economics, International Hospitality Management', '$2y$10$dPqazzV20all5XV1Yt7T0.t3pSNztijt7nM.UOfUlgNDY239cpclO', 'Faculty'),
(13, 'Mr.', 'John Ian', 'V.', 'Cumal', 'Male', 'ian.cumal@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Teacher Education', '$2y$10$m4H3dNYPrmpcWPA57O3tOOWudqN.Q.gIxcSkd8RSU0kVLuCjkrcZu', 'Faculty'),
(14, 'Prof.', 'Maria Luisa', 'A.', 'Valdez', 'Female', 'luisa.valdez@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Arts and Sciences', '$2y$10$GTEchV4xDT5HdRdEzYp66eJtsfnMIZcVBOTEA3xwBqyeroPKkR/lu', 'Faculty'),
(15, 'Asst. Prof.', 'Ronarica', 'B.', 'Diones', 'Female', 'ronarica.diones@g.batstate-u.edu.ph', 'ARASOF-Nasugbu', 'College of Nursing and Allied Health Sciences', '$2y$10$9rxEfSU/G3oVtBw3dr/8B.M/j.CHOg0/UoQ3eIBXXEUCNYDvowTAK', 'Faculty');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
