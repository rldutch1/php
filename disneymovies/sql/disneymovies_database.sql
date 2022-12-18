-- phpMyAdmin SQL Dump
-- version 4.2.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 05:57 PM
-- Server version: 5.5.36-cll-lve
-- PHP Version: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robdba3`
--

-- --------------------------------------------------------

--
-- Table structure for table `disneymovies`
--

DROP TABLE IF EXISTS `disneymovies`;
CREATE TABLE IF NOT EXISTS `disneymovies` (
`id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `disc` int(2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Cartoon Collection 2006' AUTO_INCREMENT=222 ;

--
-- Dumping data for table `disneymovies`
--

INSERT INTO `disneymovies` (`id`, `title`, `disc`) VALUES
(11, 'Brother Bear', 3),
(12, 'Ice Age', 3),
(13, 'Monsters Inc.', 3),
(14, 'Robin Hood', 3),
(15, 'Robots', 3),
(16, 'The Incredibles', 3),
(17, 'All Dogs Go to Heaven', 4),
(18, 'All Dogs Go to Heaven 2', 4),
(19, 'Cinderella', 4),
(20, 'Fantasia', 4),
(21, 'Hercules', 4),
(22, 'Joseph King of Dreams', 4),
(23, 'An American Tail', 2),
(24, 'Chicken Little', 2),
(25, 'Howls Moving Castle', 2),
(26, 'Poohs Heffalump Halloween Movie', 2),
(27, 'The Prince of Egypt', 2),
(28, 'The Road to El Dorado', 2),
(29, 'Aladdin', 1),
(30, 'Aladdin - Not the Robin Williams Version', 1),
(31, 'Aladdin and the Adventures of All Time', 1),
(32, 'Aladdin and the King of Thieves', 1),
(33, 'Aladdin The Return of Jafar', 1),
(34, 'Princess Stories', 1),
(35, 'Little Mermaid', 1),
(36, 'Little Mermaid 2 Return to the Sea', 1),
(37, 'Shark Tales', 10),
(38, 'Rainbow Fish', 10),
(39, 'Finding Nemo', 10),
(40, 'Help Im a Fish', 10),
(41, 'Stuart Little 1', 10),
(42, 'Stuart Little 2', 10),
(43, 'Stuart Little 3 - Call of the Wild', 10),
(44, 'Mulan', 12),
(45, 'Mulan 2', 12),
(46, 'Peter Pan', 12),
(47, 'Peter Pan - Return to Neverland', 12),
(48, 'Snow White and The 7 Dwarfs', 12),
(49, 'Pocahontas', 12),
(50, 'Pocahontas 2', 12),
(51, 'The Many Adventures of Winnie the Pooh', 11),
(52, 'Winnie the Pooh Springtime with Roo', 11),
(53, 'Winnie the Pooh Piglets Big Movie', 11),
(54, 'Winnie the Pooh The Tigger Movie', 11),
(55, 'Winnie the Pooh Un-Valentines Day A Valentine For You', 11),
(56, 'Winnie the Pooh All for One, One For All', 11),
(57, 'Alice in Wonderland', 9),
(58, 'Pinocchio', 9),
(59, 'Lady and the Tramp', 9),
(60, 'Lady and the Tramp 2', 9),
(61, 'Hunchback of Notre Dame', 9),
(62, 'Hunchback of Notre Dame 2', 9),
(63, 'The Sword of the Stone', 9),
(64, 'The Fox and the Hound', 9),
(65, 'The Lion King', 7),
(66, 'The Lion King 2 - Simbas Pride', 7),
(67, 'The Lion King 1 and a Half', 7),
(68, 'The Lion King Timon and Pumbaa', 7),
(69, 'Leo the Lion King of the Jungle', 7),
(70, 'Lilo and Stitch', 8),
(71, 'Lilo and Stitch 2', 8),
(72, 'Stitch the Movie', 8),
(73, 'Home on the Range', 8),
(74, 'Team America World Police', 8),
(75, 'Beauty and the Beast - Enchanted Christmas', 19),
(76, 'Beauty and the Beast', 19),
(77, 'Cinderella II', 19),
(78, 'Jonah', 19),
(79, 'The Emperors New Groove', 19),
(80, 'The Black Cauldron', 19),
(81, 'Food and Party', 20),
(82, 'To Know Animal', 20),
(83, 'Color A Figure Music', 20),
(84, 'Outdoor Activities', 20),
(85, 'From Head to Foot', 20),
(86, 'Occasions and Space', 20),
(87, 'Good Morning Good Night', 20),
(88, 'To Greet', 20),
(89, 'Tarzan', 13),
(90, 'Tarzan 2', 13),
(91, 'Tarzan and Jane', 13),
(92, 'The Jungle Book', 13),
(93, 'The Jungle Book 2', 13),
(94, 'George of the Jungle', 13),
(95, 'George of the Jungle 2', 13),
(96, 'The Happy Elf', 15),
(97, 'Disneys Christmas Favorites', 15),
(98, 'Cartoon Network Christmas Rocks', 15),
(99, 'Kronks New Groove', 15),
(100, 'Tom and Jerry The Fast and the Furry', 15),
(101, 'The Corpse Bride', 15),
(102, 'Ice Age 2 - The Meltdown', 21),
(103, 'The Wild', 22),
(117, 'Atlantis Milos Return', 5),
(118, 'Winnie the Pooh Heffalump', 5),
(119, 'Sinbad', 5),
(120, 'Sleeping Beauty', 5),
(121, 'The Iron Giant', 5),
(122, 'The Polar Express', 5),
(123, 'Madagascar', 6),
(124, 'Shrek', 6),
(125, 'Shrek 2', 6),
(126, 'Valiant', 6),
(127, 'The Magic Roundabout', 6),
(128, 'ZZZZTESTMOVIE', 10000),
(129, 'TESTMOVIE1', 10000),
(130, 'TESTMOVIE2', 10000),
(131, 'TESTMOVIE3', 10000),
(132, 'TESTMOVIE4', 10000),
(133, 'POSTTEST', 10000),
(134, 'POSTTEST', 10000),
(135, 'POSTTEST', 10000),
(136, 'POSTTEST', 10000),
(137, 'POSTTEST', 10000),
(138, 'Bambi', 14),
(139, 'Dumbo', 14),
(140, 'Charlotte''s Web', 14),
(141, 'Chicken Run', 14),
(142, 'ANTZ', 14),
(143, 'A Bugs Life', 14),
(144, 'Spirit', 14),
(145, 'Home on the Range', 14),
(146, '', 0),
(147, 'Chuggly Wuggly', 10000),
(148, 'POSTTEST', 10000),
(149, 'Roberto', 50000),
(150, '', 0),
(151, 'POSTTEST', 10000),
(152, 'Robert Holland', 50000),
(153, 'POSTTEST', 10000),
(154, 'POSTTEST', 10000),
(155, 'POSTTEST', 10000),
(156, 'POSTTEST', 10000),
(157, 'POSTTEST', 10000),
(158, 'POSTTEST', 10000),
(159, 'Robert Holland 1', 50000),
(160, '', 0),
(161, '', 0),
(162, '', 0),
(163, 'Robert Holland 2', 50000),
(164, 'Stanley Holland', 50000),
(165, '', 0),
(166, '', 0),
(167, '', 0),
(168, 'Holland Robert', 50000),
(169, '', 0),
(170, 'Holland Stanley', 50000),
(171, '', 0),
(172, '', 0),
(173, '', 0),
(174, '', 0),
(175, '', 0),
(176, '', 0),
(177, 'Billy Bob', 11000),
(178, '', 0),
(179, '', 0),
(180, 'Jingwaa Rabbit', 50004),
(181, '', 0),
(182, 'Wicket World', 40000),
(183, '', 0),
(184, 'Jinglewad McGilicutty', 50000),
(185, '', 0),
(186, '', 0),
(187, 'Sunglasses', 0),
(188, '', 0),
(189, 'Sunglasses Oakley', 50000),
(190, '', 0),
(191, 'TESTING 1232', 50000),
(192, '', 0),
(193, 'Testing 123', 50000),
(194, '', 0),
(195, '', 0),
(196, '', 0),
(197, 'ffffffff', 50000),
(198, 'Robert Holland', 50000),
(199, 'Robert Holland', 50000),
(200, 'Connected Successfully...', 50000),
(201, 'I am a success', 50000),
(202, 'Cool Movie 1', 50000),
(203, 'This is a movie. There are many like it but this one is mine. ', 50000),
(204, 'This is a movie', 50000),
(205, 'Robert Holland 3', 50000),
(206, 'Vernon Holland III', 50000),
(207, 'Robert Holland 4', 0),
(208, 'Cool Movie', 50000),
(209, 'Hot Movie', 50000),
(210, 'Tall Movie', 50000),
(211, 'Short Movie', 50000),
(212, 'Long Movie', 50000),
(213, 'Summer Nights in Baghdad', 50000),
(214, 'Bummer Nights in Baghdad', 50000),
(215, 'Slumber Nights in Baghdad', 50000),
(216, 'SkyFall', 50000),
(217, 'Joebob and the Jerkoffs', 50000),
(218, '', 0),
(219, 'Youtube Movie', 50000),
(220, 'This Name Is Cool', 50000),
(221, 'Frozen', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disneymovies`
--
ALTER TABLE `disneymovies`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disneymovies`
--
ALTER TABLE `disneymovies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=222;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
