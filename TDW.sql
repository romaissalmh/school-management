-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 mars 2021 à 21:37
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity_desc` varchar(255) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`id`, `activity_desc`, `student_id`, `type`) VALUES
(1, 'Football', 4, 'Sport'),
(2, 'Athlétisme', 5, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `user_id`) VALUES
(2, 22);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `image_url`, `description`, `type`) VALUES
(2, 'Little Green Idea – Keep Your Cool This Summer\r\n', 'http://localhost/app/img/uploads/ecole-12548.jpg', 'On hot summer days a breath of cool air-conditioning can provide much-needed refreshment. However, constantly running the AC is hard on your wallet and the planet.\r\n\r\nSo, how can we keep cool without racking up financial and ecological debt?\r\n\r\nWear loose, lightweight clothing. This is not only cool but can provide good sun protection if chosen well. Natural fibres allow easier air flow.\r\nEat light and cool. Summer salads, microwaved vegetables and cooking small food items on the barbeque all keep your house (and you) cooler. If you must turn on the stovetop or oven, try to choose meals that cook quickly such as stir-fries rather than roasts or casseroles.\r\nDrink plenty of water. Many girls carry around water bottles and sip, but do not drink deeply. Having several substantial drinks each day will help you to keep well hydrated on sweaty days. Sydney tap water is a very healthy and environmentally friendly choice for drinking.\r\nTake quick, cool showers. These save energy both from water heating and home cooling, as well as saving water. A short, cool shower before bed can help you to sleep on warm nights.\r\nClose your curtains and blinds during the day to block out the heat. At night, open them to allow breezes to flow and cool the rooms naturally.\r\nUse fans to encourage air flow and help sweat to evaporate. These can dramatically cut the need for air conditioning.\r\nHang out at the shops. The shopping centres are running air conditioning, so you may want to take advantage of this during the hottest times of day.\r\nMake large ice blocks for your pet. Our dogs and cats get hot, too! A large ice block made in an ice cream container can provide much-needed coolness and hydration on a hot day. If you add a little bit of stock (not too much, as it will be very salty) or some kibble, your pet will have tasty, cool fun.\r\nWith the tips above you can enjoy your air conditioning in moderation, save money and shrink your ecological footprint.', 'Middle'),
(5, 'Inscription à l’événement AI DAY du club School of AI Algiers', 'http://localhost/app/img/uploads/Frame-12.png', 'Hello folks !  \r\nSchool of AI Algiers is thrilled to invite you to the second edition of AI Day ! We have prepared a full day of discussions, workshops and talks with experts in their fields ! Check below for more details about the four tracks of workshops and the content of the conferences.You can register and consult the website of the event by clicking this button', 'Parent'),
(6, 'Achetez un masque, aidez un enfant !', 'http://localhost/app/img/uploads/masque-sourire.png', '« La pandémie du sourire »\r\n\r\nPour nous rappeler que le verbe souffrir\r\n\r\nNe vaut rien devant le verbe s’offrir…\r\n\r\nS’offrir les plus beaux mots que l’on pourrait dire\r\n\r\nL’amour n’est-il pas le plus beau des messages\r\n\r\nSi notre message en toutes les langues on voudrait le traduire\r\n\r\nLe sourire n’est-t-il pas le meilleur des langages\r\n\r\nSi chaque masque représentait un sourire\r\n\r\nOn aimerait le voir sur tous vos visages\r\n\r\nSi chaque sourire entraînait un fou rire\r\n\r\nOn aimerait que cette joie entre vous se propage\r\n\r\nQue cette joie touche les plus innocents\r\n\r\nQuoi de plus beau qu’un sourire sur la bouche d’un enfant.\r\n\r\nCar un masque peut devenir un sourire…\r\n\r\nGrâce à vous …', 'Primary'),
(7, 'Applied Learning Experience 2019', 'http://localhost/app/img/uploads/ShortStoryCompetition.png', 'The Year 10 Applied Learning Experience (ALE) provides an opportunity for students to gain first-hand knowledge and perspective on issues that are currently shaping our society and our world. The girls were involved in a range of experiences and they have provided articles based on their experiences during the ALE week. Thank you to Mrs Libby Bennett, EA to the Deans and Ms Jennifer Hurll, Year 10 Coordinator, for their support with ALE 2019.', 'Secondary'),
(8, 'Buy And Help others', 'http://localhost/app/img/uploads/news_buyfromthebush.jpg', 'With little spare cash, our country families cannot shop at their local businesses as much as they would like to. These businesses are the heart of their towns. Do your Christmas shopping online and help our boarding families and their communities.', 'Secondary'),
(9, 'ARTEMIS Winners at Regionals', 'http://localhost/app/img/uploads/winners-announced-header.jpg', 'The theme for this year&#39;s competition was &#39;City Shaper&#39;, and the teams were challenged to complete a series of missions inspired by building a better future for our community. Teams were also tasked with redesigning a community space using innovative, accessible and sustainable technology.\r\n\r\nWe are very proud of the hard work we put in to achieve such amazing results at this year&#39;s competition. We learnt many valuable lessons such as teamwork, coding and presenting. We hope that next year we can do it all again!', 'Middle'),
(10, '2021 Spring Instrumental Festival', 'http://localhost/app/img/uploads/ILoad31994___Medium.jpg', 'The annual Spring Instrumental Festival was in full force with almost 300 students from Kindergarten to Year 11 performing solos in six different venues throughout the afternoon and evening. For many, this was their first performance in front of peers, family and teachers – others were seasoned performers. Nonetheless, the degree of discipline, confidence and musicality displayed by all these students when playing was astounding. Congratulations to the Abbotsleigh instrumental tutors for their care and expertise in teaching these girls.', 'Primary'),
(11, 'Everett Scholarships', 'http://localhost/app/img/uploads/5.jpg', 'The Everett Scholarships were first offered in 2000 following a gift from Mrs Shirley Fong (AOG Shirley Lee, 1951) to honour Miss G Gordon Everett, a great Headmistress whose care and assistance inspired Shirley Fong and the many other young women who came under her guidance.\r\n\r\nOne scholarship is available annually to a Year 9 Abbotsleigh student moving from Year 9 to Year 10. The scholarship gives special recognition to a student’s sound academic progress, contribution to Senior College activities and a positive influence within the Senior School. The scholarship provides remission of tuition fees for the first two terms of Year 10.', 'Primary'),
(12, 'Parent meeting NEXT WEEK', 'http://localhost/app/img/uploads/Parent-Meeting-e1564596346836.png', 'Please join us sunday, march 13rd, 2021 in the Multipurpose room for our parent teachers meeting', 'Parent'),
(13, 'PSD hires principal for Kinard Core Knowledge Middle School', 'http://localhost/app/img/uploads/LMatkinEdited.jpg', 'Poudre School District is thrilled to announce that Lindsey Matkin has been selected as the principal for Kinard Core Knowledge School.\r\n\r\nMatkin will take over at the end of the school year when current Kinard Principal Jesse Morrill transitions to his new role as principal of PSD’s under-construction middle-high school at the Prospect Road site, expected to open in fall 2022.\r\n\r\n“In 2004, I was a part of the foundational staff who helped to open Kinard. It is an honor to return and serve the Kinard community once again and build on past relationships. I look forward to expanding the innovative and engaging student experience through collaborative relationships among students and staff while challenging the staff and students to care with Kinard character,” Matkin said.', 'Teacher');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `groupNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`id`, `level_id`, `grade`, `groupNum`) VALUES
(1, 1, 5, 1),
(2, 1, 5, 2),
(3, 1, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `logo_url` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(10) UNSIGNED NOT NULL,
  `fax` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `logo_url`, `email`, `phonenumber`, `fax`, `facebook`, `linkedIn`, `adress`) VALUES
(18, NULL, 'hr_kessi@esi.dz', 549876238, 549876238, NULL, NULL, 'Cité 62 lgts n°51 Staoueli 16000 Alger');

-- --------------------------------------------------------

--
-- Structure de la table `edt`
--

CREATE TABLE `edt` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `edt`
--

INSERT INTO `edt` (`id`, `class_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'Junior'),
(2, 'Middle'),
(3, 'Senior');

-- --------------------------------------------------------

--
-- Structure de la table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mark`
--

INSERT INTO `mark` (`id`, `student_id`, `subject_id`, `mark`) VALUES
(7, 4, 5, 19),
(8, 4, 1, 17),
(9, 4, 4, 15),
(10, 4, 3, 17),
(11, 5, 5, 19),
(12, 5, 6, 17),
(13, 5, 1, 18),
(14, 5, 7, 15);

-- --------------------------------------------------------

--
-- Structure de la table `meal`
--

CREATE TABLE `meal` (
  `id` int(11) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `meal`
--

INSERT INTO `meal` (`id`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`) VALUES
(2, 'Soupe aux légumes', 'Pattes', 'Chorba', 'Farine du riz', 'Lentilles');

-- --------------------------------------------------------

--
-- Structure de la table `observations`
--

CREATE TABLE `observations` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `observations`
--

INSERT INTO `observations` (`id`, `student_id`, `teacher_id`, `subject_id`, `observation`) VALUES
(1, 4, 1, 5, 'I congratulate Farid for this good progress. '),
(2, 5, 3, 1, ' Keep the same working spirit for next year.'),
(3, 5, 1, 5, 'Student motivated sociable sensitive literary skills rigorous'),
(4, 4, 3, 1, 'A smooth start to the year.');

-- --------------------------------------------------------

--
-- Structure de la table `paragraph`
--

CREATE TABLE `paragraph` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paragraph`
--

INSERT INTO `paragraph` (`id`, `title`, `image_url`, `paragraph`) VALUES
(5, 'About us', 'http://localhost/app/img/uploads/unnamed.jpg', 'Codex Institute is a leader in education, where both learners and educators thrive. Our students are unafraid to be awesome. We empower them to serve and inspire the community and become strong global citizens and courageous, socially responsible leaders.'),
(6, 'The School&#39;s Purpose', '', 'What we do\r\nWe empower amazing students to do amazing things. \r\n\r\nHow we do things\r\nOur teachers are role models who inspire each studentto reach her personal best. Their lessons last a lifetime.');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id`, `user_id`) VALUES
(6, 25);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `edt_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `starting_hour` varchar(25) NOT NULL,
  `finishing_hour` varchar(25) NOT NULL,
  `weekday` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `edt_id`, `teacher_id`, `subject_id`, `starting_hour`, `finishing_hour`, `weekday`) VALUES
(79, 5, 3, 1, '8h', '9h', 'Sunday'),
(80, 5, 4, 5, '9h', '10h', 'Sunday'),
(81, 5, 5, 6, '10h', '11h', 'Sunday'),
(82, 5, 5, 6, '11h', '12h', 'Sunday'),
(83, 5, 1, 2, '13h', '14h', 'Sunday'),
(84, 5, 1, 2, '14h', '15h', 'Sunday'),
(85, 5, 1, 2, '8h', '9h', 'Monday'),
(86, 5, 4, 5, '9h', '10h', 'Monday'),
(87, 5, 4, 5, '10h', '11h', 'Monday'),
(88, 5, 5, 3, '11h', '12h', 'Monday'),
(89, 5, 5, 3, '13h', '14h', 'Monday'),
(90, 5, 3, 3, '14h', '15h', 'Monday'),
(97, 5, 3, 1, '8h', '9h', 'Tuesday'),
(98, 5, 3, 1, '9h', '10h', 'Tuesday'),
(99, 5, 4, 6, '10h', '11h', 'Tuesday'),
(100, 5, 4, 6, '11h', '12h', 'Tuesday'),
(101, 5, 1, 2, '13h', '14h', 'Tuesday'),
(102, 5, 5, 4, '14h', '15h', 'Tuesday'),
(103, 5, 3, 1, '8h', '9h', 'Wednesday'),
(104, 5, 1, 2, '9h', '10h', 'Wednesday'),
(105, 5, 1, 2, '10h', '11h', 'Wednesday'),
(106, 5, 5, 3, '11h', '12h', 'Wednesday'),
(107, 5, 5, 4, '13h', '14h', 'Wednesday'),
(108, 5, 5, 5, '14h', '15h', 'Wednesday'),
(109, 5, 4, 6, '8h', '9h', 'Thursday'),
(110, 5, 4, 6, '9h', '10h', 'Thursday'),
(111, 5, 5, 4, '10h', '11h', 'Thursday'),
(112, 5, 1, 2, '11h', '12h', 'Thursday'),
(113, 5, 3, 1, '13h', '14h', 'Thursday'),
(114, 5, 3, 1, '14h', '15h', 'Thursday');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `user_id`, `class_id`, `parent_id`) VALUES
(4, 26, 1, 6),
(5, 27, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Mathematics'),
(2, 'Physics'),
(3, 'Arabic'),
(4, 'French'),
(5, 'English'),
(6, 'Science'),
(7, 'Hist/Geo'),
(8, 'Music'),
(9, 'Civic education');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `heure_reception` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`id`, `user_id`, `heure_reception`) VALUES
(1, 2, '09:30:00'),
(3, 17, '11:00:00'),
(4, 28, '13:30:00'),
(5, 29, '15:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber1` int(10) UNSIGNED DEFAULT NULL,
  `phonenumber2` int(10) UNSIGNED DEFAULT NULL,
  `phonenumber3` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `family_name`, `first_name`, `dateOfBirth`, `address`, `phonenumber1`, `phonenumber2`, `phonenumber3`, `email`, `role`) VALUES
(2, 'teacher1', 'Hamidi', 'Nassim', '1987-02-16', 'Alger', 578987468, NULL, NULL, 'n_hamidi@esi.dz', 'teacher'),
(17, 'teacher2', 'Fatiha', 'Slimani', '1987-02-11', 'Alger Oued Smar', 549878545, NULL, NULL, 'f_slimani@esi.dz', 'teacher'),
(22, '$2y$10$Rwp9DxMZYQu5rL7R5Nn9De0aJW.ZUlNIxdBF85gevugPCPPKngbTW', 'Kessi', 'Romaissa', '1999-11-10', 'BP NO 216 ANNANE', 549788787, NULL, NULL, 'hr_kessi@esi.dz', 'admin'),
(25, '$2y$10$CoXDugEGd5pDtxv3zhlUWekdmDU2jwB9tYBmJoyIV8GccUxFEf4qy', 'Bali', 'Sahim', '1950-11-10', 'Tizi Ouzou', 547898878, NULL, NULL, 'bali_sahim@gmail.com', 'parent'),
(26, '$2y$10$fXNY8Chs1W2enBMYZEkEkOsrZ3P26JDYzZomKmKqppsZXB/ZByz8u', 'Bali', 'Farid', '2008-12-10', 'Tizi Ouzou', 549788787, NULL, NULL, 'f_bali@esi.dz', 'student'),
(27, '$2y$10$ELhKj2ClGSD7lVm3HGbeLOxa/AcbsWEg95mtra4/J3tKKLEBT5zle', 'Bali', 'Cicily', '2010-10-14', 'Tizi ouzou', 547898878, NULL, NULL, 'c_bali@esi.dz', 'student'),
(28, '$2y$10$QS8f3t067FE4q/Zg2A7FeOUebkgGYUVIvbEcu1nQuzHNSJ9vCrVn6', 'Malki', 'Sarab', '1987-03-18', 'Tizi Ouzou', 549874787, 0, 0, 's_malki@esi.dz', 'teacher'),
(29, '$2y$10$hXgMn3lC9IqRykYm1Z/vYeNv9NTTdV3e69v/EI8Fcosj5VA22HscC', 'Kateb', 'Mouad', '1988-03-03', 'El herrach Alger', 549877787, 0, 0, 'm_kateb@esi.dz', 'teacher');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `edt`
--
ALTER TABLE `edt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Index pour la table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Index pour la table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Index pour la table `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `edt_id` (`edt_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Index pour la table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `edt`
--
ALTER TABLE `edt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `paragraph`
--
ALTER TABLE `paragraph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `edt`
--
ALTER TABLE `edt`
  ADD CONSTRAINT `edt_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mark_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `observations_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `observations_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `observations_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`edt_id`) REFERENCES `edt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `session_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
