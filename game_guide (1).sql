-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 01:45 AM
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
-- Database: `gameguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_guide`
--

CREATE TABLE `game_guide` (
  `Answers` varchar(200) NOT NULL,
  `Guide` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_guide`
--

INSERT INTO `game_guide` (`Answers`, `Guide`) VALUES
('A-A-A', 'Communication: Practice clear and concise communication with your team.\r\n\r\nUse in-game voice or text chat effectively to share strategies and updates.\r\n\r\nPlanning: Analyze the game map or objectives before each session. Discuss tactics with your team to ensure everyone is aligned.\r\n\r\nPatience: Stay calm under pressure and avoid rushing decisions. Let the strategy unfold naturally.\r\n\r\nStudy the Game: Watch tutorials, professional matches, or guides to learn advanced strategies and how they’re imp'),
('A-A-B', 'Focus on Decision-Making: Develop the habit of analyzing risks and rewards for every move.\r\nTrain for Adaptability: Practice reacting to opponents’ strategies while sticking to your overall game plan.\r\nCompetitive Practice: Play ranked modes or tournaments to get accustomed to competitive scenarios.\r\nReview Matches: Analyze your gameplay to identify areas where strategy broke down or where you could have been more efficient.'),
('A-A-C', 'Master Fundamentals: Focus on core skills like resource management, positioning, and timing.\r\nSelf-Reliance: Learn to rely on your decisions, whether it’s choosing engagements or navigating objectives.\r\nStudy Opponents: Observe common patterns in opponent behavior to predict and counter them.\r\nExperiment: Use solo practice modes or unranked games to test different strategies and refine your techniques.'),
('A-B-A', 'kawdgakwjdb'),
('A-B-B', 'uawdghawjbdjbd'),
('A-B-C', 'woidhqiohdqbdw'),
('A-C-A', 'wdadwdawdawd'),
('A-C-B', 'oubacbajlkcb'),
('A-C-C', 'kjcbajlwbcwjlbc'),
('B-A-A', 'alkcbnalbcw'),
('B-A-B', 'kjcbawcgwvbc'),
('B-A-C', 'jvbcaekjfgkjabf'),
('B-B-A', 'Work on Team Dynamics: Practice coordinating fast, decisive actions with your team.\r\nSharpen Reflexes: Use aim trainers or reaction drills to improve response times.\r\nMaster Positioning: Learn to stay in the right spots for engaging enemies or supporting teammates.\r\nEncourage Positivity: Be a motivating presence for your team, keeping morale high.'),
('B-B-B', 'Perfect Mechanics: Focus on skills like aiming, movement, and quick decision-making.\r\nPush Aggressively: Learn to recognize when to go on the offensive and capitalize on openings.\r\nAdapt Quickly: Stay flexible to counter unexpected strategies or opponents.\r\nStay in Control: Keep emotions in check to avoid burnout or frustration during competitive play.'),
('B-B-C', 'Play Confidently: Trust your instincts when making quick decisions.\r\nOptimize Efficiency: Learn to manage time and resources effectively in fast-paced scenarios.\r\nLearn from Losses: Use failures as opportunities to improve decision-making and mechanics.\r\nStay Calm Under Pressure: Practice maintaining composure in intense situations.'),
('B-C-A', 'vkjhawchlch'),
('B-C-B', 'ckjawgcj,bacjkbcjb'),
('B-C-C', 'cawdjalchjbwaljcbwclgacg'),
('C-A-A', 'ckjwagckjvwcv'),
('C-A-B', 'cluwabckjawgvckauwcawugc'),
('C-A-C', 'ckjwagckjghclhclh'),
('C-B-A', 'kcjwgckjagckjwbc'),
('C-B-B', 'gawgalkfghalkfhalkf'),
('C-B-C', 'gliwahglahvablcb'),
('C-C-A', 'Foster Versatility: Be prepared to switch roles or tactics to support your team effectively.\r\nThink Outside the Box: Experiment with innovative strategies that surprise your opponents.\r\nImprove Awareness: Stay mindful of your team’s actions and adapt your gameplay to fit their needs.\r\nCollaborate Actively: Regularly discuss strategies and plans with your teammates to build synergy.'),
('C-C-B', 'Practice Adaptability: Work on adjusting your gameplay based on opponents\' tactics.\r\nFocus on Goals: Set specific objectives during matches and plan around achieving them.\r\nBuild Confidence: Trust in your strategies and execution, even in competitive settings.\r\nLearn from Others: Watch competitive players to gain insights into advanced techniques.'),
('C-C-C', 'Hone All-Rounder Skills: Practice core mechanics, strategy, and decision-making equally.\r\nExperiment Freely: Try out new approaches to gameplay and refine what works best for you.\r\nTrack Progress: Set personal goals and monitor your improvement over time.\r\nStay Disciplined: Focus on consistency in your performance, especially in solo play.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_guide`
--
ALTER TABLE `game_guide`
  ADD PRIMARY KEY (`Answers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
