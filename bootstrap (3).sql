-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 06:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `file_id` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `course_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`file_id`, `title`, `course_code`) VALUES
('666', 'ami tumi', 'cse110');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `size` int(200) NOT NULL,
  `topic_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `credit` int(50) NOT NULL,
  `id` varchar(10) NOT NULL,
  `book name` varchar(150) NOT NULL,
  `teacher name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_title`, `credit`, `id`, `book name`, `teacher name`) VALUES
('ACC204', 'Industrial Management and Accountancy', 2, '1-2', '', ''),
('CSE110 ', 'Computer Fundamental', 2, '1-1', '', ''),
('CSE112', 'Structure Programming language', 3, '1-1', '', ''),
('CSE113', 'Structure Programming language Language lab', 3, '1-1', '', ''),
('CSE120', 'Discrete mathematics', 2, '1-1', '', ''),
('CSE160', 'Introduction to Digital Electronics ', 2, '1-2', '', ''),
('CSE161', 'Introduction to Digital Electronics Lab', 1, '1-2', '', ''),
('CSE162', 'Data Structure', 3, '1-2', '', ''),
('CSE163 ', 'Data Structure Lab', 2, '1-2', '', ''),
('CSE210', 'Digital Logic Design', 3, '2-1', '', ''),
('CSE211', 'Digital Logic Design  Lab', 1, '2-1', '', ''),
('CSE212', 'Object Oriented Programming', 3, '2-1', '', ''),
('CSE213', 'Object Oriented Programming Lab', 3, '2-1', '', ''),
('CSE260', 'Design and Analysis of Algorithms', 3, '2-2', '', ''),
('CSE261', 'Design and Analysis of Algorithms Lab', 2, '2-2', '', ''),
('CSE262', 'Automata Theory', 2, '2-2', '', ''),
('CSE270', 'Concrete Mathematics and Numerical Analysis', 2, '2-2', '', ''),
('CSE271', 'Concrete Mathematics and Numerical Analysis Lab', 1, '2-2', '', ''),
('CSE300', 'Computer Graphics', 3, '3-1', '', ''),
('CSE301', 'Computer Graphics Lab', 1, '3-1', '', ''),
('CSE302', 'Compiler Design ', 3, '3-1', '', ''),
('CSE303', 'Compiler Design Lab', 1, '3-1', '', ''),
('CSE310', 'Computer Architecture and Organization', 3, '3-1', '', ''),
('CSE311', 'Computer Architecture and Organization Lab', 1, '3-1', '', ''),
('CSE312', 'Computer Networks', 3, '3-1', '', ''),
('CSE313', 'Computer Networks Lab', 1, '3-1', '', ''),
('CSE350', 'System Analysis and Design', 3, '3-2', '', ''),
('CSE352 ', 'E-Commerce and Web Engineering', 3, '3-2', '', ''),
('CSE353', 'E-Commerce and Web Engineering Lab', 1, '3-2', '', ''),
('CSE360', 'Microprocessor and Assembly Language', 3, '3-2', '', ''),
('CSE361', 'Microprocessor and Assembly Language Lab', 1, '3-2', '', ''),
('CSE362', 'Operating System and System Programming', 3, '3-2', '', ''),
('CSE363', 'Operating System and System Programming Lab', 1, '3-2', '', ''),
('CSE370', 'Software Engineering', 3, '3-2', '', ''),
('CSE400', 'Parallel Processing and Distributed System', 3, '4-1', '', ''),
('CSE401', 'Parallel Processing and Distributed System Lab', 1, '4-1', '', ''),
('CSE402', 'Computer Simulation and Modeling Lab', 1, '4-1', '', ''),
('CSE410', 'Digital Signal Processing', 3, '4-1', '', ''),
('CSE411', 'Digital Signal Processing Lab', 1, '4-1', '', ''),
('CSE412', 'Communication Engineering', 3, '4-1', '', ''),
('CSE413', 'Communication Engineering Lab', 1, '4-1', '', ''),
('CSE450 ', 'Artificial Intelligence', 3, '4-2', '', ''),
('CSE451', 'Artificial Intelligence  Lab', 1, '4-2', '', ''),
('CSE452', 'Digital Image Processing', 3, '4-2', '', ''),
('CSE453', 'Digital Image Processing Lab', 1, '4-2', '', ''),
('CSE462', 'Cryptography and Network Security', 3, '4-2', '', ''),
('CSE463', 'Cryptography and Network Security Lab', 1, '4-2', '', ''),
('CSE488', 'Project/Thesis', 3, '4-2', '', ''),
('CSE489', 'Board viva-voce', 2, '4-2', '', ''),
('ECO204', 'Economics', 2, '2-1', '', ''),
('EEE104', 'Electrical Circuit Analysis', 2, '1-1', '', ''),
('EEE105', 'Electrical Circuit Analysis Lab', 1, '1-1', '', ''),
('EEE156', 'Electronic Devices and Circuits', 2, '1-2', '', ''),
('EEE157', 'Electronic Devices and Circuits Lab ', 1, '1-2', '', ''),
('ENG104', 'Technical English ', 2, '1-1', '', ''),
('ENG105', 'English Language  Lab1', 1, '1-1', '', ''),
('ENG205', 'English Language Lab II', 1, '2-1', '', ''),
('LAW254', 'Cyber and Intellectual Property Law', 2, '2-2', '', ''),
('MAT104', 'Algebra, Trigonometry and Vector', 3, '1-1', '', ''),
('MAT156', 'Differential and Integral Calculus', 3, '1-2', '', ''),
('MAT204', 'Matrices and Differential Equations', 3, '2-1', '', ''),
('MAT256', 'Linear Algebra', 3, '2-2', '', ''),
('PHY154', 'Electromagnetism, Optics and Modern Physics', 3, '1-2', '', ''),
('PHY155', 'Physics Lab', 1, '1-2', '', ''),
('STA154', 'Statistics for Engineers', 2, '1-2', '', ''),
('STA254', 'Theory of Statistics', 2, '2-2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(100) NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `size` int(250) NOT NULL,
  `topic_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `location`, `size`, `topic_name`) VALUES
(115, '3-802.16e.pdf', 'go/3-802.16e.pdf', 206404, 'link_list'),
(116, '3-802.16e_2.pdf', 'go/3-802.16e_2.pdf', 206404, 'link_list'),
(117, '7. PHP & Database bangla.pdf', 'go/7. PHP & Database bangla.pdf', 151425, 'link_list'),
(118, 'ANN_3.pdf', 'go/ANN_3.pdf', 230460, 'array'),
(119, 'Cell Splitting.pdf', 'go/Cell Splitting.pdf', 447779, 'array'),
(120, 'Chapter-8-Metrics-for-process-and-projects.ppt', 'go/Chapter-8-Metrics-for-process-and-projects.ppt', 271872, 'array'),
(121, 'ANN.pdf', 'go/ANN.pdf', 230460, 'Functions'),
(122, 'ANN.pdf', 'go/ANN.pdf', 230460, 'Computer'),
(123, 'ANN_3.pdf', 'go/ANN_3.pdf', 230460, 'Computer'),
(124, 'AuthenticationRequirements.pdf', 'go/AuthenticationRequirements.pdf', 418490, 'Computer'),
(125, 'ChallF.pdf', 'go/ChallF.pdf', 269074, 'Computer'),
(126, 'compression.pdf', 'go/compression.pdf', 21205, 'Computer'),
(127, '7. PHP & Database bangla.pdf', 'go/7. PHP & Database bangla.pdf', 151425, 'Computer'),
(128, 'academiccalendarjan-june201311-12-201211dec2012_2.pdf', 'go/academiccalendarjan-june201311-12-201211dec2012_2.pdf', 131411, 'Computer'),
(129, '1975-011-002-01.pdf', 'go/1975-011-002-01.pdf', 976571, 'Computer'),
(130, 'Cell Splitting.pdf', 'go/Cell Splitting.pdf', 447779, 'Computer'),
(131, 'final.pdf', 'go/final.pdf', 1374412, 'Computer'),
(139, 'kompendium_eng.pdf', 'go/kompendium_eng.pdf', 469013, 'Computer'),
(140, 'Theory of Computer Science Automata, Language and Computation.pdf', 'go/Theory of Computer Science Automata, Language and Computation.pdf', 17671852, 'Computer'),
(141, 'Lab-2-Calculating-Arithematic-Expression.pdf', 'go/Lab-2-Calculating-Arithematic-Expression.pdf', 533376, 'Computer'),
(142, 'Lab-2.pdf', 'go/Lab-2.pdf', 533376, 'Computer'),
(143, 'Lab-2-Calculating-Arithematic-Expression.pdf', 'go/Lab-2-Calculating-Arithematic-Expression.pdf', 533376, 'Computer'),
(144, 'Lab-2.pdf', 'go/Lab-2.pdf', 533376, 'Computer'),
(145, 'Data Communications and Networking By Behrouz A.Forouzan.pdf', 'go/Data Communications and Networking By Behrouz A.Forouzan.pdf', 11363830, 'Computer'),
(146, '7. PHP & Database bangla.pdf', 'go/7. PHP & Database bangla.pdf', 151425, 'Computer'),
(147, 'Assessment 1.pdf', 'go/Assessment 1.pdf', 150994, 'Computer'),
(148, 'final.pdf', 'go/final.pdf', 1374412, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `mim`
--

CREATE TABLE IF NOT EXISTS `mim` (
  `name` varchar(255) NOT NULL,
`s_id` int(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `c_no` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34335 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mim`
--

INSERT INTO `mim` (`name`, `s_id`, `cgpa`, `gender`, `c_no`) VALUES
('sadi', 34334, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `semister`
--

CREATE TABLE IF NOT EXISTS `semister` (
  `sn` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
`id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `user_name` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
`sl_num` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_name`, `passw`, `sl_num`) VALUES
('shaikh sadi', '1', 1),
('shaikh sadi', '3', 2),
('shaikh sadi', '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE IF NOT EXISTS `student_reg` (
  `name` varchar(100) NOT NULL,
  `brows_kye` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`name`, `brows_kye`) VALUES
('shaikh sadi', 'sk'),
('asad ', 'asd'),
('asif', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `user_name` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
`sl_num` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_name`, `passw`, `sl_num`) VALUES
('akkas ali', '9', 1),
('akkas ali', '8', 2),
('jamal uddin', '5656', 3),
('jamal uddin', '34', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE IF NOT EXISTS `teacher_reg` (
  `name` varchar(100) NOT NULL,
  `brows_kye` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`name`, `brows_kye`) VALUES
('akkas ali', 'aks'),
('jamal uddin', 'jml'),
('nesarul haque', 'nsr');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
`id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `topic_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `course_code`, `topic_name`) VALUES
(5, 'CSE110', 'Computer Basics'),
(6, 'CSE110', 'Computer Hardware and Peripherals'),
(7, 'CSE110 ', 'Software'),
(8, 'CSE110', 'Data Processing'),
(9, 'CSE110 ', 'Computer Networks'),
(10, 'CSE110', 'Basic Units of Computer Hardware'),
(11, 'CSE110 ', 'Keyboard'),
(12, 'CSE110', 'Internal structure of CPU'),
(13, 'CSE110 ', 'Functions of RAM'),
(14, 'CSE110', 'ROM and Cache memory'),
(15, 'CSE110 ', 'Different types of Monitors'),
(16, 'CSE110', 'Impact and Non-impact Printers, Scanner, Plotter'),
(17, 'CSE112', 'Introduction'),
(18, 'CSE112', 'Simple C'),
(19, 'EEE104', 'Instrumentation'),
(20, 'EEE104', 'Networks Analysis'),
(21, 'EEE104', 'Filters'),
(22, 'EEE104', 'Kirchhoff''s laws'),
(23, 'EEE104', 'Wheatstone bridge'),
(24, 'EEE104', 'Millman’s theorem'),
(26, 'EEE104', 'Design conditions & uses, Active Filters'),
(27, 'EEE104', 'signal generator'),
(28, 'EEE104', ' oscilloscop'),
(29, 'PHY154', ' Different electrical units'),
(30, 'PHY154', 'Electromagnetism'),
(31, 'PHY154', 'electric field'),
(32, 'PHY154', ' Coulomb’s law'),
(33, 'PHY154', 'Optics'),
(34, 'PHY154', 'Gauss’s law and its applications'),
(35, 'PHY154', ' Bohr’s atom'),
(36, 'PHY154', 'Atomic models'),
(37, 'PHY154', 'Scalar and vector potentials'),
(38, 'PHY154', 'Scalar and vector potentials'),
(39, 'EEE156', 'Semiconductor Diodes'),
(40, 'EEE156', 'n-and p-type semiconductors'),
(41, 'EEE156', 'p-n junction diodes and their volt-ampere characteristics'),
(42, 'EEE156', 'zener diode'),
(43, 'EEE156', 'Transistor'),
(44, 'EEE156', 'Transistor action'),
(45, 'EEE156', 'types of brazing and bias stabilization'),
(46, 'EEE156', 'DC characteristics of CE'),
(47, 'CSE160', 'Fundamentals of Digital Logic System'),
(48, 'CSE160', ' Number Systems and Codes'),
(49, 'CSE160', 'Logic Circuit Design'),
(50, 'CSE160', 'Logic Gates and Boolean Algebra'),
(51, 'CSE160', 'Adder'),
(52, 'CSE160', 'Subtractor'),
(53, 'CSE160', 'carry-look-ahead adder'),
(54, 'CSE160', 'Karnaugh Map Method'),
(55, 'CSE162', 'Arrays'),
(56, 'CSE162', ' Queues and Recursion'),
(57, 'CSE162', 'Circular'),
(58, 'CSE162', 'Different types of stacks and queues'),
(59, 'CSE162', 'Direct and indirect recursion'),
(60, 'CSE162', 'depth of recursion'),
(61, 'CSE162', 'Simulation of Recursion'),
(62, 'CSE162', 'Removal of recursion'),
(63, 'CSE162', 'silinked stacks and queues'),
(64, 'CSE162', 'ngly linked lists'),
(65, 'MAT204: ', ' Adjoint'),
(66, 'MAT204: ', 'Algebra of Matrices'),
(67, 'MAT204: ', ' Properties and evaluation'),
(68, 'MAT204: ', 'Inverse and rank of matrix-definition'),
(69, 'MAT204: ', 'Elementary Transformations'),
(70, 'MAT204: ', ' Echelon'),
(71, 'MAT204: ', 'Characteristic Equation'),
(72, 'MAT204: ', ' Eigenvalues'),
(73, 'MAT204', 'Solutions of first order and first degree and first-order and higher degree equations with variable coefficients'),
(74, 'MAT204: ', 'Solution of Higher-Order '),
(75, 'MAT204: ', ' Series solution of linear differential equation'),
(76, 'MAT204: ', 'Differential Equations'),
(77, 'ACC204', 'Industry'),
(78, 'ACC204', ' Commerce-Industry'),
(79, 'ACC204', 'Fundamentals of Management'),
(80, 'ACC204', ' Meaning of Management'),
(81, 'ACC204', 'Factory Location and Plant Layout'),
(82, 'ACC204', ' Factors Determining Location of Factory'),
(83, 'ACC204', ' Types of Layout'),
(84, 'ACC204', ' Problems of Layout.'),
(85, 'ECO204', 'Basic Concepts of Economics'),
(86, 'ECO204', ' Definition and subject matter of Economics'),
(87, 'ECO204', 'Theory of Demand'),
(88, 'ECO204', ' Supply and Consumer Behavior: Law of Demand'),
(89, 'ECO204', ' Meaning of production'),
(90, 'ECO204', 'Production and Costs and Theory of the Firm'),
(91, 'ECO204', 'Theory of the Firm'),
(92, 'ECO204', ' Perfect competition and monopoly'),
(93, 'CSE210', 'Transistor Latch, NAND gate latch'),
(94, 'CSE210', 'Flip-Flops (FF) and related devices'),
(95, 'CSE210', ' formal representation of sequential circuits'),
(96, 'CSE210', 'Introduction to sequential circuits'),
(97, 'CSE210', 'BCD to decimal decoders'),
(98, 'CSE210', ' BCD to 7 segments decoder/drivers'),
(99, 'CSE212', 'Object oriented programming'),
(100, 'CSE212', 'Introduction'),
(101, 'CSE212', ' Base'),
(102, 'CSE212', 'Classes'),
(103, 'CSE212', 'Exception handling'),
(104, 'CSE212', ' Exception Handling'),
(105, 'CSE212', ' Basic Structure'),
(106, 'CSE212', 'Structures in Java'),
(107, 'CSE212', 'Enterprise Java'),
(108, 'CSE212', 'Enterprise Java frame work'),
(109, 'CSE300', 'Introduction to Computer Graphics and Graphics systems'),
(110, 'CSE300', ' Overview of computer graphics'),
(111, 'CSE300', 'representing pictures'),
(112, 'CSE300', ' preparing'),
(113, 'CSE300', 'Scan conversion'),
(114, 'CSE300', 'Points & lines'),
(115, 'CSE300', '2D transformation and viewing'),
(116, 'CSE300', ' Basic transformations'),
(117, 'CSE300', '3D transformation and viewing'),
(118, 'CSE300', ' 3D transformations'),
(119, 'CSE300', 'Curves'),
(120, 'CSE300', ' Curve representation'),
(121, 'CSE302', 'Introduction'),
(122, 'CSE302', 'Introduction to compiler'),
(123, 'CSE302', 'Grammars'),
(124, 'CSE302', ' Notation and concepts for languages and Grammars'),
(125, 'CSE302', 'Parsing'),
(126, 'CSE302', ' Basic parsing technique'),
(127, 'CSE302', 'Error'),
(128, 'CSE302', ' Compile time error handling'),
(129, 'CSE310', 'Concepts and Terminology'),
(130, 'CSE310', ' Digital computer components Hardware & Software and their dual nature'),
(131, 'CSE310', 'Processor Design'),
(132, 'CSE310', 'Introduction'),
(133, 'CSE310', 'Control Design'),
(134, 'CSE310', 'Hardwired control'),
(135, 'CSE310', 'Memory Devices and its Organization'),
(136, 'CSE310', 'Different types of semiconductor memory'),
(137, 'CSE310', 'System Organization'),
(138, 'CSE310', 'Communications'),
(139, 'CSE312', '\r\n Computer Networks and Applications'),
(140, 'CSE312', 'Introduction'),
(141, 'CSE312', 'Physical Layer'),
(142, 'CSE312', 'Circuit switching and Packet switching'),
(143, 'CSE312', 'Medium Access Sublayer'),
(144, 'CSE312', ' Pure and slotted ALOHA'),
(145, 'CSE312', 'Network Layer'),
(146, 'CSE312', ' Internet address'),
(147, 'CSE320', 'Introduction to database system'),
(148, 'CSE320', ' Overview'),
(149, 'CSE320', 'The Entity-Relationship model'),
(150, 'CSE320', ' Basic concept'),
(151, 'CSE320', 'Relational model'),
(152, 'CSE320', ' Structure of relational databases'),
(153, 'CSE320', 'Structured Query Language'),
(154, 'CSE320', ' The form of a basic SQL query'),
(155, 'CSE350', 'Introduction'),
(156, 'CSE350', ' Introduction to information systems'),
(157, 'CSE350', 'Overview'),
(158, 'CSE350', 'system concepts and the information systems environment'),
(159, 'CSE350', 'Systems Analysis'),
(160, 'CSE350', ' Systems planning and the initial investigation'),
(161, 'CSE350', 'Systems Design'),
(162, 'CSE350', ' The process and stages of systems design'),
(163, 'CSE350', 'System Implementation'),
(164, 'CSE350', 'system testing and quality assurance'),
(165, 'CSE352', 'E-Commerce Basics'),
(166, 'CSE352', ' E-Commerce Definition'),
(167, 'CSE352', 'E-Commerce Options'),
(168, 'CSE352', ' Internet Access Requirements'),
(169, 'CSE352', 'Marketing Issues'),
(170, 'CSE352', ' Online and Offline Market Research'),
(171, 'CSE352', 'Mobile Commerce'),
(172, 'CSE352', ' Over view of M-Commerce'),
(173, 'CSE360', 'Microprocessor Fundamentals'),
(174, 'CSE360', ' Architecture of a microprocessor'),
(175, 'CSE360', 'Architecture'),
(176, 'CSE360', ' Architecture of Intel 8086 Microprocessor'),
(177, 'CSE360', 'Programming Model'),
(178, 'CSE360', ' Programming model of 8086 processor'),
(179, 'CSE360', 'Assembly Language'),
(180, 'CSE360', ' Introduction to IMB PC Assembly Language'),
(181, 'CSE360', 'Flow control'),
(182, 'CSE360', ' Flow control instructions, Conditional jumps'),
(183, 'CSE362', 'Introduction'),
(184, 'CSE362', 'Introduction to OS'),
(185, 'CSE362', 'System Structure'),
(186, 'CSE362', ' Computer system operation'),
(187, 'CSE362', 'File Systems'),
(188, 'CSE362', ' file concept'),
(189, 'CSE362', ' Disk reliability'),
(190, 'CSE362', 'Disk Management'),
(191, 'CSE370', 'Introduction'),
(192, 'CSE370', ' Introduction to software engineering'),
(193, 'CSE370', 'Software development life-cycle'),
(194, 'CSE370', ' Requirement analysis'),
(195, 'CSE370', 'System Design'),
(196, 'CSE370', ' Problem partitioning, abstraction'),
(197, 'CSE370', 'Coding'),
(198, 'CSE370', ' TOP-DOWN and BOTTOM-UP structure programming'),
(199, 'CSE400', 'Introduction'),
(200, 'CSE400', ' Trends towards parallel processing'),
(201, 'CSE400', 'Hardware Technology'),
(202, 'CSE400', 'Advanced processor Technology'),
(203, 'CSE400', 'Pipelining and Vector Processing'),
(204, 'CSE400', 'Principles of Pipelining'),
(205, 'CSE400', 'Distributed Processing'),
(206, 'CSE400', ' Introduction'),
(207, 'CSE402', 'Introduction to Simulation'),
(208, 'CSE402', 'simulation methods'),
(209, 'CSE402', 'Random number generator'),
(210, 'CSE402', ' analogue '),
(211, 'CSE402', 'Discrete system simulation'),
(212, 'CSE402', ' Simulation of a pert network'),
(213, 'CSE402', 'Introduction to simulation packages'),
(214, 'CSE402', 'Computer animation'),
(215, 'CSE410', 'Introduction'),
(216, 'CSE410', ' signals'),
(217, 'CSE410', ' Discrete time signals'),
(218, 'CSE410', 'Discrete time signals and systems'),
(219, 'CSE410', 'The z-transform'),
(220, 'CSE410', ' Introduction'),
(221, 'CSE410', 'Frequency analysis of signals and systems'),
(222, 'CSE410', 'Frequency analysis of continuous time signals'),
(223, ' CSE412', ' Communication Engineering Fundamentals'),
(224, ' CSE412', 'Fundamentals'),
(225, 'CSE412', 'Amplitude Modulation'),
(226, 'CSE412', 'Amplitude modulation'),
(227, 'CSE412', 'Frequency Modulation'),
(228, 'CSE412', 'Frequency Modulation, Sinusoidal FM'),
(229, 'CSE412', 'Propagation'),
(230, 'CSE412', 'Radio Wave Propagation'),
(231, 'CSE450', 'Introduction: History of AI - Intelligent agents '),
(232, 'CSE450', ' Structure of agents and its functions'),
(233, 'CSE450', 'Knowledge Representation'),
(234, 'CSE450', ' Approaches and issues in knowledge representation'),
(235, 'CSE450', 'Reasoning under uncertainty'),
(236, 'CSE450', ' Logics of non-monotonic reasoning '),
(237, 'CSE450', 'Planning and Learning'),
(238, 'CSE450', ' Planning with state space search '),
(239, 'CSE452', 'Introduction and Fundamental to Digital Image Processing'),
(240, 'CSE452', ' What is Digital Image Processing'),
(241, 'CSE452', 'Image Enhancement in the Spatial Domain & Frequency domain'),
(242, 'CSE452', 'Image Enhancement in the Spatial Domain & Frequency domain: Background'),
(243, 'CSE452', 'Image Restor Image ation:Degradation/Restoration Process,'),
(244, 'CSE452', ' Noise models'),
(245, 'CSE452', 'Color Image Processing'),
(246, 'CSE452', ' Color Fundamentals'),
(247, 'CSE462', ' Cryptography Overview and Terminologies\r\n'),
(248, 'CSE462', 'Cryptography-\r\nOverview'),
(249, 'CSE462', ' Symmetric Cipher Model'),
(250, 'CSE462', 'Symmetric Ciphers'),
(251, 'CSE462', 'Public-Key Encryption: Principles of Public-Key Cryptosystems'),
(252, 'CSE462', ' Principles of Public-Key Cryptosystems'),
(253, 'CSE462', 'Network Security Practice'),
(254, 'CSE462', 'Kerberos'),
(255, 'ENG104', 'Grammatical principles'),
(256, 'ENG104', 'modals'),
(257, 'ENG104', 'phrases & idioms'),
(258, 'ENG104', 'prefixes & suffixes'),
(259, 'ENG104', ''),
(260, 'ENG104', ' conditional sentences'),
(261, 'ENG204', ', sentence structures'),
(262, 'ENG204', 'Paragraph writing '),
(263, 'MAT104', 'Algebra of sets'),
(264, 'MAT104', ' De Morgan’s rule'),
(265, 'MAT104', 'Theory of Equations'),
(266, 'MAT104', ' Theorem'),
(267, 'MAT104', 'De Moiver’ theorem.'),
(268, 'MAT104', ' Deduction from De Moiver’s theorem.'),
(269, 'MAT204', 'surface and volume integral'),
(270, 'MAT204', 'Vector Addition'),
(271, 'CSE112', 'Program structure in C'),
(272, 'CSE112', ' program creating'),
(273, 'CSE112', 'Compound Data Types'),
(274, 'CSE112', 'Array'),
(275, 'CSE112', ' C Functions and user defined functions'),
(276, 'CSE112', 'Functions'),
(277, 'CSE120', 'Mathematical Logic'),
(278, 'CSE120', ' Connectives'),
(279, 'CSE120', 'Sets'),
(280, 'CSE120', ' Basic concept of set theory'),
(281, 'CSE120', 'Relation and ordering'),
(282, 'CSE120', ' Relations');

-- --------------------------------------------------------

--
-- Table structure for table `uplot`
--

CREATE TABLE IF NOT EXISTS `uplot` (
`id` int(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL,
  `size` int(100) NOT NULL,
  `topic_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uplot`
--

INSERT INTO `uplot` (`id`, `name`, `location`, `size`, `topic_name`) VALUES
(34, '20170106_123752.jpg', 'uploads/20170106_123752.jpg', 300887, 'link_list'),
(35, 'unspecified.jpg', 'uploads/unspecified.jpg', 172621, 'array'),
(36, 'screenshot.png', 'uploads/screenshot.png', 410797, 'link_list'),
(37, 'Untitled.png', 'uploads/Untitled.png', 658645, 'link_list'),
(38, '15095106_619282298243859_4568302546166147950_n.jpg', 'uploads/15095106_619282298243859_4568302546166147950_n.jpg', 56041, 'array'),
(39, '12741956_1674670546131447_3557605878199815221_n.jpg', 'uploads/12741956_1674670546131447_3557605878199815221_n.jpg', 68738, 'loop'),
(40, '13000299_801017120029706_8039495648065780842_n.jpg', 'uploads/13000299_801017120029706_8039495648065780842_n.jpg', 21807, 'loop'),
(41, '13000299_801017120029706_8039495648065780842_n.jpg', 'uploads/13000299_801017120029706_8039495648065780842_n.jpg', 21807, 'pointer'),
(42, '15621812_221465654971620_6623787699321746013_n.jpg', 'uploads/15621812_221465654971620_6623787699321746013_n.jpg', 50772, 'pointer'),
(43, '14713726_1795716304044466_6989029788619901999_n.jpg', 'uploads/14713726_1795716304044466_6989029788619901999_n.jpg', 43916, 'link_list');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `size` int(200) NOT NULL,
  `topic_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `location`, `size`, `topic_name`) VALUES
(8, '(3) Facebook.mp4', 'uploads/(3) Facebook.mp4', 578340, 'array'),
(9, '(5) Facebook.mp4', 'uploads/(5) Facebook.mp4', 505110, 'array'),
(10, '(5) Facebook.mp4', 'uploads/(5) Facebook.mp4', 505110, 'loop'),
(11, '(3) Facebook.mp4', 'uploads/(3) Facebook.mp4', 578340, 'Computer'),
(12, '(5) Facebook.mp4', 'uploads/(5) Facebook.mp4', 505110, 'Computer'),
(13, '(7) Facebook.mp4', 'uploads/(7) Facebook.mp4', 663577, 'Computer'),
(14, '(1) Mahmud Rahman.mp4', 'uploads/(1) Mahmud Rahman.mp4', 1278451, 'Computer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mim`
--
ALTER TABLE `mim`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `semister`
--
ALTER TABLE `semister`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`sl_num`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`sl_num`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uplot`
--
ALTER TABLE `uplot`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `mim`
--
ALTER TABLE `mim`
MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34335;
--
-- AUTO_INCREMENT for table `semister`
--
ALTER TABLE `semister`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `sl_num` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `sl_num` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=283;
--
-- AUTO_INCREMENT for table `uplot`
--
ALTER TABLE `uplot`
MODIFY `id` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
