-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 07:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

create database onlineclassroom;
  use onlineclassroom;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclassroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrecord`
--

CREATE TABLE `classrecord` (
  `subject_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `assignment_assignment` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `score` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `student_id` int(100) NOT NULL,
  `subject_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identification_quiz`
--

CREATE TABLE `identification_quiz` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `learning_materials`
--

CREATE TABLE `learning_materials` (
  `subject_id` int(100) NOT NULL,
  `lecture_number` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multianswer_choices`
--

CREATE TABLE `multianswer_choices` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multianswer_quiz`
--

CREATE TABLE `multianswer_quiz` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multipleanswer_answers`
--

CREATE TABLE `multipleanswer_answers` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `answers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multiplechoice_choices`
--

CREATE TABLE `multiplechoice_choices` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `choice_letter` varchar(10) NOT NULL,
  `choices` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multiplechoice_quiz`
--

CREATE TABLE `multiplechoice_quiz` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email-address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `course_about` varchar(250) NOT NULL,
  `teacher_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_announcement`
--

CREATE TABLE `subject_announcement` (
  `subject_id` int(100) NOT NULL,
  `announcement_number` int(100) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_assignment`
--

CREATE TABLE `subject_assignment` (
  `subject_id` int(100) NOT NULL,
  `assignment_number` int(100) NOT NULL,
  `date` date NOT NULL,
  'time' time NOT NULL,
  `title` varchar(100) NOT NULL,
  `instruction` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_quiz`
--

CREATE TABLE `subject_quiz` (
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `date` date NOT NULL,
  'time' time NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submits_assignment`
--

CREATE TABLE `submits_assignment` (
  `student_id` int(100) NOT NULL,
  `subject_id` int(100) NOT NULL,
  `assignment_number` int(100) NOT NULL,
  `date_submitted` datetime(6) NOT NULL,
  `content` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submits_quiz`
--

CREATE TABLE `submits_quiz` (
  `student_id` int(100) NOT NULL,
  `subject_id` int(100) NOT NULL,
  `quiz_number` int(100) NOT NULL,
  `date_submitted` datetime(6) NOT NULL,
  `content` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `teacher_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
