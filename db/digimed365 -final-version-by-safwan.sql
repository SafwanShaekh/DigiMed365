-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 04:03 PM
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
-- Database: `digimed365`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'support@digimed365.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `dept`, `doctor`, `appointment_date`, `appointment_time`, `fullname`, `phone`, `message`, `user_id`) VALUES
(1, 'Accidents & Emergency', 'Dr. Alaina Araujo', '2023-06-05', '17:37:00', 'Local Admin', '923102009321', 'Hi, These is testing for book appointment or not', 1),
(3, 'General Surgery', 'Dr. Alaina Araujo', '2023-06-06', '22:58:00', 'Local Admin', '923102009321', 'This, is testing point 2 where we test about user_id is automatically add or not', 1),
(4, 'Choose a Department', 'Choose a Doctor', '0000-00-00', '00:00:00', '', '', '', 1),
(5, 'Anaesthesiology', 'Dr. Earnest Beason', '2023-06-14', '23:38:00', 'Mr-BLADE', '9320109127987', 'isyakjsahsja', 1),
(8, 'General Surgery', 'Dr. Cooper Weyker', '2023-06-15', '23:42:00', 'BLADE', '92310329823', 'it\'s not fun', 1),
(9, 'Cardiology', 'Dr. Cooper Weyker', '2023-06-07', '00:43:00', 'Mr-BLADE', '92310723897327', 'itsklakkaha', 1),
(10, 'Cardiology', 'Dr. Cooper Weyker', '2023-06-07', '00:43:00', 'Mr-BLADE', '92310723897327', 'itsklakkaha', 1),
(11, 'Mental Health', 'Dr. Cooper Weyker', '2023-06-23', '16:21:00', 'javed', '03152288535', 'message', 2),
(12, 'Accidents & Emergency', 'Dr. Cooper Weyker', '2023-06-23', '19:29:00', 'Safwan', '03152288535', 'message', 2),
(13, 'Accidents & Emergency', 'Dr. Cooper Weyker', '2023-06-29', '13:30:00', 'asdasd', '314234', '32141234123', 2),
(14, 'Haematology & Blood Bank', 'Dr. Huzaifa', '2023-06-23', '10:06:00', 'Safwan', '3179872187', 'it\'s urgent', 2),
(15, 'Accidents & Emergency', 'Dr. Kiran', '2023-06-23', '21:05:00', 'M.Shahbaz', '03142824729', 'Hi', 1),
(16, 'Accidents & Emergency', 'Dr. Saad Jilani', '2023-06-27', '04:11:00', 'safwan', '03152288535', 'this is a test message', 6),
(17, 'General Surgery', 'Dr. Saad Jilani', '2023-06-21', '06:02:00', 'Huzaifa', '9027834238', 'I want to have a quick checkup on my surgery', 7),
(18, 'Accidents & Emergency', 'Dr. Saad Jilani', '2023-06-24', '10:01:00', 'Khubaib', '012132423', 'Accident', 8),
(19, 'Anaesthesiology', 'Dr. Huzaifa', '2023-06-29', '15:38:00', 'ramzan', '03149379942', 'Its urgent', 9),
(20, 'Clinical Biochemistry', 'Dr. Saad Jilani', '2023-06-30', '15:49:00', 'ramzan', '03149379942', 'Its urgent plerase', 9);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `topic`, `phone`, `message`) VALUES
(1, 'Sheikh Muhammad Safwan', 'safwanshaekh786@gmail.com', 'TEST', '897897098', 'This is a test message.');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_items`
--

CREATE TABLE `deleted_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `deletion_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demo_request`
--

CREATE TABLE `demo_request` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo_request`
--

INSERT INTO `demo_request` (`id`, `fullname`, `email`, `phone`, `city`, `specialization`) VALUES
(1, 'sheikh muhammad safwan', 'safwanshaekh55@gmail.com', '3424243234', 'Chakwal', 'sdfhkjsdlaf'),
(2, 'Muhammad Huzaifa', 'huzaifaqureshi@hotmail.com', '03151052449', 'Burewala', 'Cardiologist'),
(3, 'khalid', 'khalid@gmail.com', '03149847343', 'Bhakkar', 'Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `dept_description`) VALUES
(1, 'Accidents & Emergency', 'The Accident and Emergency (A&E) department, also known as the Emergency department (ED), is a medical facility designed to provide immediate and life-saving care to patients who are experiencing severe illnesses or injuries. This department is staffed by a team of highly trained medical professionals, including emergency physicians, nurses, and other healthcare workers, who are equipped to handle a wide range of medical emergencies.\r\n\r\nThe A&E department is open 24/7 and is designed to provide rapid assessment, stabilization, and treatment to patients who arrive with critical or life-threatening injuries or illnesses. Patients in A&E may include those suffering from heart attacks, strokes, severe trauma, major burns, or other medical emergencies that require immediate attention.\r\n\r\nThe A&E team works in a fast-paced and high-pressure environment, and must be able to respond quickly and effectively to a wide range of medical emergencies. They are equipped with advanced medical technologies and diagnostic tools, including X-ray machines, CT scanners, ultrasound machines, and laboratory testing facilities, which enable them to diagnose and treat patients as quickly and efficiently as possible.\r\n\r\nIn addition to providing immediate care to critically ill or injured patients, the A&E department also provides ongoing support and care to patients after they have been stabilized. Patients may be referred to other medical departments or specialties for ongoing treatment or management of their conditions.\r\n\r\nOverall, the A&E department is a crucial part of the healthcare system, providing life-saving care to patients in their most critical moments of need.'),
(2, 'Anaesthesiology', 'Anaesthesiology is a critical medical specialty that focuses on providing patients with pain relief and comfort during surgical procedures or other medical interventions. Anaesthesiologists are specially trained physicians who are responsible for administering anaesthesia, monitoring patients\' vital signs during procedures, and managing any complications that may arise during or after the procedure.\r\n\r\nAnaesthesia can take many forms, including general anaesthesia, regional anaesthesia, and local anaesthesia. General anaesthesia involves putting the patient into a deep sleep, while regional anaesthesia numbs a specific area of the body, and local anaesthesia numbs a small area for minor procedures.\r\n\r\nAnaesthesiologists also play a crucial role in critical care medicine, providing pain relief and support for patients in intensive care units (ICUs) and emergency departments. They manage patients\' pain and discomfort, as well as provide respiratory and cardiovascular support as needed.\r\n\r\nIn addition to providing patient care, anaesthesiologists also engage in research and education to advance the field of anaesthesiology. They work closely with other healthcare providers, including surgeons, nurses, and other medical professionals, to provide comprehensive and high-quality care to patients.\r\n\r\nOverall, the Anaesthesiology department is an essential component of the medical field, providing patients with safe and effective pain management and support during procedures and critical care situations.'),
(3, 'Cardiology', 'The Cardiology department is a branch of medicine that focuses on the diagnosis, treatment, and prevention of cardiovascular diseases. This specialty deals with the heart and its associated blood vessels, including their structure, function, and disorders that affect them. Cardiologists are medical professionals who specialize in diagnosing and treating heart-related conditions, which can include heart attacks, arrhythmias, congestive heart failure, and heart valve disorders.\r\n\r\nCardiology departments typically offer a range of services, including non-invasive diagnostic tests such as electrocardiograms, echocardiograms, and stress tests, as well as invasive procedures like cardiac catheterization, angioplasty, and stent placement. They may also provide specialized treatments such as pacemaker implantation, electrophysiology studies, and cardiac rehabilitation programs to help patients recover from heart-related conditions.\r\n\r\nThe Cardiology department plays a crucial role in the healthcare system, as cardiovascular diseases are a leading cause of death worldwide. With advances in technology and treatment options, the field of Cardiology continues to evolve, with new techniques and procedures being developed all the time. As such, Cardiology departments are staffed by highly trained and experienced professionals who work tirelessly to provide patients with the best possible care for their heart health.'),
(4, 'Clinical Biochemistry', 'Clinical Biochemistry is a branch of laboratory medicine that deals with the study of the biochemical processes within the human body, and the role of these processes in disease. It involves the measurement of specific substances in blood, urine, and other body fluids, and the interpretation of these results to aid in the diagnosis, treatment, and monitoring of various diseases.\r\n\r\nThe Clinical Biochemistry department is an essential part of any modern hospital or medical facility. The department is responsible for conducting a wide range of tests on patient samples, including tests for glucose levels, liver and kidney function, lipid levels, and hormone levels. These tests help doctors to diagnose and monitor a variety of conditions, such as diabetes, liver and kidney disease, and hormonal imbalances.\r\n\r\nIn addition to patient testing, the Clinical Biochemistry department also plays an important role in research and development. Biochemists work to develop new and improved tests and techniques for the diagnosis and treatment of disease, and to advance our understanding of the underlying biochemical processes involved in various conditions.\r\n\r\nThe department is staffed by a team of highly trained and experienced medical laboratory scientists, biochemists, and other healthcare professionals. These individuals work together to ensure that patient samples are handled safely and accurately, and that test results are interpreted correctly and communicated to the appropriate healthcare providers in a timely manner.\r\n\r\nOverall, the Clinical Biochemistry department is a crucial component of the modern healthcare system. Through the use of advanced laboratory techniques and cutting-edge research, it helps to improve the diagnosis and treatment of a wide range of medical conditions, and plays a vital role in maintaining the health and well-being of patients around the world.'),
(5, 'General Surgery', 'General Surgery is a medical specialty that focuses on the diagnosis, treatment, and management of a wide range of surgical conditions affecting various organs and tissues in the body. General Surgeons are highly trained medical professionals who perform surgical procedures to remove tumors, repair injuries, and improve bodily functions. \r\n\r\nThe department of General Surgery covers a wide range of surgical procedures such as appendectomy, cholecystectomy, hernia repair, mastectomy, and various types of bowel surgery. General Surgeons are also involved in the diagnosis and management of conditions such as breast cancer, thyroid diseases, and digestive disorders. \r\n\r\nGeneral Surgeons work in close collaboration with other healthcare professionals, such as anesthesiologists, radiologists, and oncologists, to ensure the best possible outcomes for their patients. They are skilled in using advanced surgical techniques, including laparoscopic and robotic surgery, to minimize the risk of complications and facilitate faster recovery times.\r\n\r\nGeneral Surgery is a constantly evolving field that is at the forefront of medical research and technology. General Surgeons are constantly updating their knowledge and skills to keep up with the latest advancements in surgical techniques and procedures.\r\n\r\nAll in all, the General Surgery department plays a critical role in the medical field by providing surgical interventions for a wide range of conditions and improving the overall health and well-being of patients.'),
(6, 'Haematology & Blood Bank', 'The Haematology and Blood Bank department is an essential component of medical care that deals with the study of blood and blood-forming tissues. Haematologists are specialists who diagnose and treat disorders of the blood and blood-forming tissues, such as anaemia, haemophilia, and leukemia.\r\n\r\nThe Blood Bank component of this department is responsible for collecting, processing, and storing blood and its components, such as red blood cells, white blood cells, and platelets. Blood banks also conduct compatibility testing to ensure that donated blood is safe for transfusions.\r\n\r\nHaematology and Blood Bank departments work closely with other medical departments to provide critical care for patients with life-threatening conditions, such as bleeding disorders, severe infections, and cancer. They play a vital role in transfusion medicine and ensure the safe and effective use of blood products for patients in need.\r\n\r\nOverall, the Haematology and Blood Bank department is an important part of the medical field that deals with the study of blood and blood-forming tissues, and provides crucial support for patients with a wide range of medical conditions.'),
(7, 'Microbiology', 'The Microbiology department is a critical component of the medical field, dedicated to the study of microorganisms and their effects on human health. This department plays a vital role in disease diagnosis, treatment, and prevention. Microbiologists in this department work tirelessly to identify and characterize microorganisms, including bacteria, viruses, fungi, and parasites, and study their interactions with human cells and tissues.\r\n\r\nThe Microbiology department employs various techniques to detect and identify microorganisms, such as culturing, staining, and molecular testing. They also study the mechanisms of resistance to antibiotics and other antimicrobial agents, and work to develop new drugs and therapies to combat resistant strains of microorganisms.\r\n\r\nIn addition to disease diagnosis and treatment, the Microbiology department is also involved in public health efforts such as tracking outbreaks of infectious diseases and monitoring the spread of antibiotic-resistant strains. They work closely with epidemiologists, healthcare providers, and public health officials to identify and mitigate potential health threats.\r\n\r\nOverall, the Microbiology department is a critical component of the medical field, providing essential services in the fight against infectious diseases and the promotion of public health. Their work is invaluable in preventing the spread of disease, improving patient outcomes, and advancing our understanding of the complex interactions between microorganisms and the human body.'),
(8, 'Mental Health', 'The Mental Health department is an integral part of the medical field that specializes in the diagnosis, treatment, and prevention of mental health disorders. Mental health professionals who work in this department include psychiatrists, psychologists, social workers, and other mental health specialists. \r\n\r\nMental health disorders can have a significant impact on an individual\'s overall health and well-being, and can often be debilitating without proper treatment. The Mental Health department provides a range of services to patients suffering from mental health disorders, including therapy, medication management, and other supportive services. \r\n\r\nMental health professionals in this department work with patients to identify the root cause of their mental health symptoms and develop a comprehensive treatment plan that is tailored to their unique needs. They also work to educate patients on the importance of self-care and provide resources to support their ongoing mental health and wellness.\r\n\r\nOverall, the Mental Health department plays a critical role in the medical field, providing essential services to patients struggling with mental health disorders. With a focus on compassionate care and evidence-based treatment, mental health professionals in this department work to promote the overall health and well-being of their patients and support their journey towards recovery.'),
(9, 'Diabetes & Metabolism', 'The Diabetes & Metabolism department is a specialty area of medicine that focuses on the diagnosis, treatment, and management of diabetes and other disorders of metabolism. These disorders can affect how your body processes food and uses energy.\r\n\r\nDiabetes is a chronic condition that affects millions of people worldwide. It occurs when the body cannot produce enough insulin or cannot effectively use the insulin it produces. Insulin is a hormone that helps regulate blood sugar levels, and when it is not functioning properly, it can lead to serious complications such as heart disease, kidney failure, and nerve damage.\r\n\r\nThe Diabetes & Metabolism department works with patients to manage their diabetes through various treatments such as medication, diet, exercise, and insulin therapy. The department also conducts research to better understand the underlying causes of diabetes and develop new treatments and medications to improve patient outcomes.\r\n\r\nIn addition to diabetes, the department also treats other disorders of metabolism, such as metabolic syndrome, which is a group of conditions that increase the risk of heart disease, stroke, and diabetes. They also work with patients who have hormone disorders, such as thyroid disease and adrenal disorders.\r\n\r\nThe Diabetes & Metabolism department is staffed by a team of medical professionals, including endocrinologists, diabetes educators, and dietitians. These experts work together to provide comprehensive care to patients and help them manage their condition effectively. With the help of this department, patients with diabetes and other metabolic disorders can lead healthy and active lives.'),
(10, 'Dermatology', 'Dermatology is a branch of medicine that focuses on the diagnosis, treatment, and prevention of conditions related to the skin, hair, nails, and mucous membranes. Dermatologists are medical professionals who specialize in providing care for patients with skin-related conditions.\r\n\r\nDermatology encompasses a wide range of conditions, from minor skin irritations to more severe skin diseases such as psoriasis, eczema, acne, and skin cancer. Dermatologists may use a variety of diagnostic tools, such as biopsies, skin tests, and blood tests, to identify and treat these conditions.\r\n\r\nTreatment options for dermatological conditions may include topical or systemic medications, surgery, or phototherapy. Dermatologists may also provide advice on preventative measures, such as proper skin care and sun protection.\r\n\r\nIn addition to providing clinical care, dermatologists may also engage in research and education related to the field of dermatology. They may work in a variety of settings, including private practices, hospitals, clinics, and research institutions.\r\n\r\nOverall, dermatology plays a crucial role in the field of medicine, helping to diagnose and treat a wide range of conditions that affect the skin and its associated structures. If you have any concerns about your skin or related conditions, consider seeking the expertise of a dermatologist for proper diagnosis and treatment.'),
(11, 'Gastroenterology', 'The Gastroenterology department is a specialized medical department that deals with the diagnosis, treatment, and prevention of diseases and disorders that affect the digestive system. This includes disorders of the esophagus, stomach, intestines, liver, pancreas, and gallbladder. Gastroenterologists are medical doctors who specialize in this field and are trained to perform diagnostic and therapeutic procedures such as endoscopy, colonoscopy, and biopsy.\r\n\r\nThe department offers a wide range of services, including the evaluation and management of conditions such as gastroesophageal reflux disease (GERD), inflammatory bowel disease (IBD), irritable bowel syndrome (IBS), peptic ulcer disease, liver disease, and pancreatic disorders. The department also provides nutrition counseling and support for patients who require dietary modifications to manage their conditions.\r\n\r\nGastroenterology is a rapidly evolving field, with ongoing advancements in technology and treatment options. The department is at the forefront of these developments and incorporates the latest techniques and therapies into patient care. The department works collaboratively with other medical departments and specialties to provide comprehensive care for patients with complex medical conditions.\r\n\r\nIf you are experiencing symptoms related to your digestive system, you may be referred to the Gastroenterology department for evaluation and treatment. Our team of experienced and compassionate healthcare professionals is dedicated to providing the highest quality of care to our patients.'),
(12, 'exampkle', 'example');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctor_image` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `doctor_specialization` varchar(250) NOT NULL,
  `introduction` varchar(2000) NOT NULL,
  `educational_qualifications` varchar(2000) NOT NULL,
  `work_experience` varchar(2000) NOT NULL,
  `surgeries_completed` int(11) DEFAULT NULL,
  `count_of_satisfied_patients` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_image`, `doctor_name`, `doctor_email`, `doctor_password`, `doctor_specialization`, `introduction`, `educational_qualifications`, `work_experience`, `surgeries_completed`, `count_of_satisfied_patients`) VALUES
(3, '16875552773.jpg', 'Dr. Cooper Weyker ', 'cooper@weyker.com', 'cooperweyker234', 'Hematologists', 'Dr. Cooper Weyker is a distinguished medical professional specializing in the field of hematology. As a hematologist, Dr. Weyker has extensive knowledge and expertise in the diagnosis and treatment of blood disorders, including anemia, leukemia, lymphoma, and other related conditions. With years of experience in this specialized area of medicine, Dr. Weyker has gained a reputation for his exceptional skill and dedication to providing his patients with the highest quality care. His expertise in hematology, combined with his compassionate approach, has made him a trusted and respected member of the medical community.', 'hospital internship', '1-year', 8, 7),
(7, '16875270633.jpg', 'Dr. Huzaifa', 'huzaifa@doctor.com', 'huzaifa123', 'Dermatologists', 'Dr. Kiran is a Master of Science in Plastic Surgery specializing in the field of Plastic Surgeon. As a hematologist, Dr. Kiran has extensive knowledge and expertise in the diagnosis and treatment of blood disorders, including anemia, leukemia, lymphoma, and other related conditions. With years of experience in this specialized area of medicine, Dr. Kiran has gained a reputation for his exceptional skill and dedication to providing his patients with the highest quality care. His expertise in hematology, combined with his compassionate approach, has made him a trusted and respected member of the medical community.', 'PG diploma', '3-years', 10, 9),
(8, '16875268391.jpg', 'Dr. Saad Jilani', 'saad@digimed.com', 'saad123', 'Cardiologists', 'Dr. Saad is a Master of Science in Cardiology specializing in the field of Cardiologist. As a hematologist, Dr. Saad has extensive knowledge and expertise in the diagnosis and treatment of blood disorders, including anemia, leukemia, lymphoma, and other related conditions. With years of experience in this specialized area of medicine, Dr. Saad has gained a reputation for his exceptional skill and dedication to providing his patients with the highest quality care. His expertise in hematology, combined with his compassionate approach, has made him a trusted and respected member of the medical community.', 'PG diploma', '3-years', 34, 33),
(9, '16875271092.jpg', 'Dr. Kiran', 'kiran@digimed.com', 'kiran123', 'Plastic Surgeon', 'Dr. Kiran is a Master of Science in Plastic Surgery specializing in the field of Plastic Surgeon. As a hematologist, Dr. Kiran has extensive knowledge and expertise in the diagnosis and treatment of blood disorders, including anemia, leukemia, lymphoma, and other related conditions. With years of experience in this specialized area of medicine, Dr. Kiran has gained a reputation for his exceptional skill and dedication to providing his patients with the highest quality care. His expertise in hematology, combined with his compassionate approach, has made him a trusted and respected member of the medical community.', 'PG diploma', '3-years', 34, 33);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creation_datetime` datetime DEFAULT current_timestamp(),
  `update_datetime` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creation_datetime`, `update_datetime`) VALUES
(2, 'Anesthesiologist', '2023-04-02 02:43:21', '2023-04-29 12:18:06'),
(4, 'Cardiologists', '2023-04-02 03:19:37', '2023-04-02 15:37:56'),
(5, 'Dermatologists', '2023-04-02 15:44:21', '2023-04-02 15:44:21'),
(6, 'Hematologists', '2023-04-02 15:44:47', '2023-04-02 15:44:54'),
(9, 'Plastic Surgeon', '2023-04-07 20:18:21', '2023-04-07 20:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `dr_deleted_items`
--

CREATE TABLE `dr_deleted_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `deletion_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_deleted_items`
--

INSERT INTO `dr_deleted_items` (`item_id`, `item_name`, `item_type`, `deletion_date`) VALUES
(1, '', '', '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `health_vitals`
--

CREATE TABLE `health_vitals` (
  `user_id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `bmi` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `pulse_rate` int(11) NOT NULL,
  `body_temp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_vitals`
--

INSERT INTO `health_vitals` (`user_id`, `doctorname`, `user_name`, `bmi`, `weight`, `pulse_rate`, `body_temp`) VALUES
(4, 'Dr. Huzaifa', 'Safwan', 20, 75, 86, 37),
(5, 'Dr. Kiran', 'Shahbaz', 88, 57, 120, 70),
(6, 'Dr. Saad Jilani', 'Huzaifa', 78, 56, 120, 78),
(7, 'Dr. Saad Jilani', 'Khubaib', 89, 75, 120, 78),
(8, 'Dr. Saad Jilani', 'ramzan', 120, 120, 120, 120);

-- --------------------------------------------------------

--
-- Table structure for table `laboritories`
--

CREATE TABLE `laboritories` (
  `lab_id` int(11) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_email` varchar(255) NOT NULL,
  `lab_phone` varchar(255) NOT NULL,
  `lab_address` varchar(255) NOT NULL,
  `lab_Description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboritories`
--

INSERT INTO `laboritories` (`lab_id`, `logo_image`, `lab_name`, `lab_email`, `lab_phone`, `lab_address`, `lab_Description`) VALUES
(1, '1687542530labs.png', 'Karachi Laboratory Diagnostic Centre', 'info@kldc.pk', '(021) 34145074', 'Unit 2, Star Homes, Plot 15/25, Block 3, BMCHS, Main Shaheed-e-Millat Road, Karachi, Pakistan', 'We aim to be the most trusted laboratory partner, provide state-of-the-art medical diagnostic solution'),
(2, '1687542828labs4.png', 'C Lab Diagnostics', 'info@clabpvtltd.com', ' 0304 1112080', 'Taj Medical Complex, Block C-1 & Shop-14 Block-A, M.A Jinnah Road, Karachi., Karachi, Pakistan', 'Your health is our top priority. Experience reliable diagnostic services at C-Lab.'),
(3, '1687543123labs2.png', 'Advanced Lab', 'Info@advancedhealth.com.pk', '(021) 111 222 995', 'B-31, Block-15, off University Road, Gulshan-e-Iqbal, Karachi., Karachi, Pakistan', 'Advanced Lab is one of the fastest-growing ISO 15189:2012 Certified Laboratory'),
(4, '1687543273labs3.png', 'One Health Lab & Pharmacy', 'info@onehealth.pk', ' 0304 1117428', '18-Ground Floor Gulshan-e-Shamim Commercial ll Block 8, Federal B Area., Karachi, Pakistan', 'One Health is a chain of Lab, Pharmacy and Clinics offering home services in karachi.'),
(5, '1687543402labs5.png', 'ATCO Laboratories Limited', 'info@atcolab.com', '(021) 111 111 645', 'B-18, S.I.T.E. Manghopir Road, Karachi, Pakistan', 'ATCO Laboratories Limited is one of the pioneers in Pakistan’s pharmaceutical industry sector.'),
(6, '1687543521labs6.png', 'Mehran Laboratory & Diagnostic Center', 'mehranlab@outlook.com', '0333 3637834', 'Al Raheem Avenue Gulistan e johar Block 9 , Opposite Habib University Karachi, Karachi, Pakistan', 'Mehran Lab has always been upfront for the nobel cause of giving best services with reasonable prices'),
(7, '1687543629labs7.png', 'Surge Laboratories', 'info@surgelaboratories.com', '(021) 111 742 762', '5th Floor, Commerce Center, Grant Rd, New Chali, Karachi, Sindh, Karachi, Pakistan', 'We are committed to producing high-quality, innovative, and effective pharmaceutical medicaments.'),
(8, '1687543829labs8.png', 'CDC LAB', 'cdclabmalir@gmail.com', '0330 2423999', 'Shop # 2 Shamsi Arcade, Main Jamia Millia Rd, Gulshan-e-Rafi Malir, Karachi, Pakistan', 'CDC is working with mission \"Excellence in Diagnostics\" using the latest technology experienced'),
(9, '1687543993labs9.png', 'NIBD', 'info@nibd.edu.pk', '(021) 111 120 140', 'ST 2/A Block 17 Gulshan-e-Iqbal , KDA Scheme 24, Karachi, Pakistan', 'National Institute of Blood Diseases (NIBD) is committed to serving people suffering from genetic.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1, 6, 'Hi, Local Admin , Thank for booking appointment tell me about your deseases'),
(2, 6, 1, 'Thanks for your consern. but i update a website so i test it'),
(3, 6, 1, 'shkjjkajhak'),
(4, 1, 6, 'ajhkhakjha'),
(5, 6, 1, 'hi'),
(6, 3, 2, 'Hello Doctor Cooper'),
(7, 3, 2, 'this is safwan'),
(8, 2, 3, 'Hello huzaifa'),
(9, 7, 2, 'hello doctor'),
(10, 1, 9, 'Testing123'),
(11, 8, 6, 'Hi Doctor'),
(12, 8, 7, 'Hello doctor'),
(13, 7, 8, 'hello huzaifa'),
(14, 8, 8, 'Hello Doctor'),
(15, 8, 8, 'can I get an appointment at 10:00?'),
(16, 8, 9, 'Hello doctor this is ramzan'),
(17, 7, 9, 'Hello Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

CREATE TABLE `qr_code` (
  `qr_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_dir` varchar(255) NOT NULL,
  `qr_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`qr_id`, `doctor_name`, `user_id`, `upload_dir`, `qr_dir`) VALUES
(10, 'Dr. Alaina Araujo', 1, 'uploads/soaked.jpeg', 'qrcodes/6485ecd79d6bd.png'),
(11, 'Dr. Cooper Weyker', 2, 'uploads/Screenshot (11).png', 'qrcodes/6494314525b7c.png'),
(12, 'Dr. Huzaifa', 2, 'uploads/Test-Report-Email.jpg', 'qrcodes/64946456dbcb4.png'),
(13, 'Dr. Huzaifa', 2, 'uploads/MicrosoftTeams-image 1 (1).png', 'qrcodes/6494a0520fb26.png'),
(14, 'Dr. Saad Jilani', 7, 'uploads/test-thumb4.jpg', 'qrcodes/6496163cac747.png'),
(15, 'Dr. Saad Jilani', 6, 'uploads/medical-report-1.png', 'qrcodes/64967746d7750.png'),
(16, 'Dr. Saad Jilani', 6, 'uploads/medical-report-1.png', 'qrcodes/6496777bb24f5.png'),
(17, 'Dr. Saad Jilani', 8, 'uploads/medical-report-2.jpg', 'qrcodes/64967be200a95.png'),
(18, 'Dr. Saad Jilani', 8, 'uploads/medical-report-2.jpg', 'qrcodes/64967be784b26.png'),
(19, 'Dr. Huzaifa', 9, 'uploads/medical-report-2.jpg', 'qrcodes/64969dfce1400.png'),
(20, 'Dr. Huzaifa', 9, 'uploads/medical-report-2.jpg', 'qrcodes/64969e0221e0c.png'),
(21, 'Dr. Huzaifa', 9, 'uploads/medical-report-2.jpg', 'qrcodes/6496a057eca65.png'),
(22, 'Dr. Huzaifa', 9, 'uploads/medical-report-2.jpg', 'qrcodes/6496a05dd109b.png'),
(23, 'Dr. Saad Jilani', 9, 'uploads/medical-report-2.jpg', 'qrcodes/6496a4e965a5b.png'),
(24, 'Dr. Saad Jilani', 9, 'uploads/medical-report-2.jpg', 'qrcodes/6496a4ef22116.png'),
(25, 'Dr. Huzaifa', 9, 'uploads/Test-Report-Email (1).jpg', 'qrcodes/6496a70a24378.png'),
(26, 'Dr. Huzaifa', 9, 'uploads/Test-Report-Email (1).jpg', 'qrcodes/6496a7110df0f.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cnic` varchar(15) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `phone`, `cnic`, `town`, `city`, `country`, `zipcode`, `about`) VALUES
(5, 'Muhammad Arbaz ', 'iamarbazhussai3182@gmail.com', 'arbaz', '923102200930', '42201787987319', NULL, NULL, NULL, NULL, NULL),
(6, 'safwan', 'safwanshaekh786@gmail.com', 'saf123', '+9292729082', '4220118735785', NULL, NULL, NULL, NULL, NULL),
(7, 'huzaifa qureshi', 'huzaifaqureshi@hotmail.com', 'huzaifa', '987324923849', '42201-12436236-', 'Jamshed Town', 'Karachi', 'Pakistan', '75100', 'none'),
(8, 'khubaib', 'khubaib@gmai.com', 'khu123', '031522222222', '4220138947234', NULL, NULL, NULL, NULL, NULL),
(9, 'ramzan', 'ramzan@gmail.com', 'ramzan123', '03149379942', '4220118735785', NULL, NULL, NULL, NULL, NULL),
(10, 'safwan', 'ali@gmail.com', 'saf123', '03152288535', '4220118735785', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vault`
--

CREATE TABLE `vault` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `file_extension` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vault`
--

INSERT INTO `vault` (`file_id`, `file_name`, `file`, `username`, `upload_date`, `file_extension`) VALUES
(42, 'medical-report-2.jpg ', 'uploads/medical-report-2.jpg ', ' khubaib', '2023-06-24', ' jpg'),
(43, 'medical-report-2.jpg ', 'uploads/medical-report-2.jpg ', ' khubaib', '2023-06-24', ' jpg'),
(44, 'medical-report-2.jpg ', 'uploads/medical-report-2.jpg ', ' ramzan', '2023-06-24', ' jpg'),
(45, 'digimed365.pdf ', 'uploads/digimed365.pdf ', ' ramzan', '2023-06-24', ' pdf'),
(46, 'MicrosoftTeams-image 1 (1).png ', 'uploads/MicrosoftTeams-image 1 (1).png ', ' ramzan', '2023-06-24', ' png'),
(47, 'Test-Report-Email (1).jpg ', 'uploads/Test-Report-Email (1).jpg ', ' ramzan', '2023-06-24', ' jpg'),
(48, 'Test-Report-Email (1).jpg ', 'uploads/Test-Report-Email (1).jpg ', ' ramzan', '2023-06-24', ' jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted_items`
--
ALTER TABLE `deleted_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `demo_request`
--
ALTER TABLE `demo_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr_deleted_items`
--
ALTER TABLE `dr_deleted_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `health_vitals`
--
ALTER TABLE `health_vitals`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `laboritories`
--
ALTER TABLE `laboritories`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `qr_code`
--
ALTER TABLE `qr_code`
  ADD PRIMARY KEY (`qr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vault`
--
ALTER TABLE `vault`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleted_items`
--
ALTER TABLE `deleted_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `demo_request`
--
ALTER TABLE `demo_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dr_deleted_items`
--
ALTER TABLE `dr_deleted_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_vitals`
--
ALTER TABLE `health_vitals`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laboritories`
--
ALTER TABLE `laboritories`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `qr_code`
--
ALTER TABLE `qr_code`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vault`
--
ALTER TABLE `vault`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
