-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12 Mai 2018 la 14:00
-- Versiune server: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `AuthorNames`
--

CREATE TABLE `AuthorNames` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `AuthorNames`
--

INSERT INTO `AuthorNames` (`author_id`, `first_name`, `middle_name`, `surname`) VALUES
(1, 'J', 'K', 'Rowling'),
(5, 'Stephen', NULL, 'King'),
(6, 'Oprah', NULL, 'Winfrey'),
(7, 'Barack', NULL, 'Obama'),
(8, 'J', 'R.R', 'Tolkein'),
(9, 'Charles', NULL, 'Dickens'),
(10, 'Dan', NULL, 'Brown'),
(11, 'John', NULL, 'Grisham'),
(12, 'Agatha', NULL, 'Christie'),
(13, 'Michael', NULL, 'Crichton'),
(14, 'Bill', NULL, 'Bryson'),
(15, 'Harper', NULL, 'Lee'),
(16, 'Philip', 'K', 'Dick'),
(17, 'George', NULL, 'Orwell'),
(18, 'Jane', NULL, 'Austen'),
(19, 'Roald', NULL, 'Dahl'),
(20, 'Hunter', 'S', 'Thompson'),
(21, 'Douglas', NULL, 'Adams'),
(22, 'Mario', NULL, 'Puzo'),
(23, 'Viktor', 'E', 'Frankl'),
(24, 'Steig', NULL, 'Larsson'),
(25, 'Robert', 'Louis', 'Stevenson'),
(26, 'Joseph', NULL, 'Heller'),
(27, 'Anthony', NULL, 'Burgess'),
(28, 'Stephenie', NULL, 'Meyer'),
(29, 'Jessica', NULL, 'Pearson');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Books_Authors`
--

CREATE TABLE `Books_Authors` (
  `books_authors_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Books_Authors`
--

INSERT INTO `Books_Authors` (`books_authors_id`, `book_id`, `author_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 28),
(9, 9, 28),
(10, 10, 28),
(11, 11, 28),
(12, 12, 8),
(13, 13, 8),
(14, 14, 8),
(15, 15, 7),
(16, 16, 13),
(17, 17, 14),
(18, 18, 15),
(19, 19, 16),
(20, 20, 17),
(21, 21, 18),
(22, 22, 19),
(23, 23, 20),
(24, 24, 21),
(25, 25, 22),
(26, 26, 23),
(27, 27, 24),
(28, 28, 25),
(29, 29, 26),
(30, 30, 27);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Book_info`
--

CREATE TABLE `Book_info` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `demographic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Book_info`
--

INSERT INTO `Book_info` (`book_id`, `book_title`, `ISBN`, `type_id`, `publisher_id`, `demographic_id`) VALUES
(1, 'Harry Potter and the Philospher\'s Stone', '9876543213567', 1, 1, 1),
(2, 'Harry Potter and the Chamber of Secrets', '9876543213577', 1, 1, 1),
(3, 'Harry Potter and the Prisoner of Azkaban', '9876543513567', 1, 1, 1),
(4, 'Harry Potter and the Goblet of Fire', '9876543216567', 1, 1, 1),
(5, 'Harry Potter and the Order of the Phoenix', '9876343213567', 1, 1, 1),
(6, 'Harry Potter and the Half Blood Prince', '9876543913567', 1, 1, 1),
(7, 'Harry Potter and the Deathly Hallows', '9846543213567', 1, 1, 1),
(8, 'Twilight', '9376543213567', 1, 3, 2),
(9, 'New Moon', '9336543213567', 1, 3, 2),
(10, 'Eclipse', '9376543213567', 1, 3, 2),
(11, 'Breaking Dawn', '9176543213567', 1, 3, 2),
(12, 'The Hobbit', '9176543213567', 1, 2, 3),
(13, 'The Lord of the Rings: Two Towers', '9176543213567', 1, 2, 3),
(14, 'The Lord of the Rings: Fellowship of the Ring', '9176543513567', 1, 2, 3),
(15, 'The Audacity of Hope', '9146543213567', 2, 4, 3),
(16, 'Jurassic Park', '9126543213567', 1, 5, 3),
(17, 'A Short History of Nearly Everything', '9826543213577', 2, 1, 3),
(18, 'To Kill a Mockingbird', '95765543513567', 1, 3, 3),
(19, 'Do Androids Dream of Electric Sheep?', '9876543236567', 1, 2, 3),
(20, 'Animal Farm', '9876343213507', 1, 1, 3),
(21, 'Pride and Pejudice', '9874543913567', 1, 5, 3),
(22, 'The Twits', '9846543113567', 1, 1, 1),
(23, 'Fear and Loathing in Las Vegas', '9076543213567', 1, 3, 4),
(24, 'The Hitchikers Guide to the Galaxy', '9336545213567', 1, 5, 3),
(25, 'The Godfather', '9376523210567', 1, 2, 4),
(26, 'Man\'s Serach for Meaning', '9176543213567', 2, 5, 4),
(27, 'The Girl with the Dragon Tattoo', '9176333213567', 1, 1, 4),
(28, 'The Bottle Imp', '9176543213467', 1, 4, 3),
(29, 'Catch 22', '9176500513567', 1, 3, 3),
(30, 'A Clockwork Orange', '9146543213567', 1, 4, 4),
(31, 'Shogun', '999999999', 1, 1, 1),
(32, 'A walk to remember', '9999999998', 1, 1, 1),
(33, 'Time Machine', '2423423423423432', 2, 1, 3),
(34, 'The Pianist', '3283298783269836', 2, 1, 2),
(35, 'Mengele', '778877878787', 1, 2, 1),
(36, 'La Tiganci', '9897876796767', 1, 1, 2);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Book_stock`
--

CREATE TABLE `Book_stock` (
  `book_stock_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `stock_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Book_stock`
--

INSERT INTO `Book_stock` (`book_stock_id`, `book_id`, `stock_level`) VALUES
(11, 1, 1),
(12, 2, 2),
(13, 3, 3),
(14, 4, 4),
(15, 5, 5),
(16, 6, 1),
(17, 7, 2),
(18, 8, 3),
(19, 9, 4),
(20, 10, 5),
(21, 11, 1),
(22, 12, 2),
(23, 13, 3),
(24, 14, 4),
(25, 15, 5),
(26, 16, 1),
(27, 17, 2),
(28, 18, 3),
(29, 19, 4),
(30, 20, 5),
(31, 21, 1),
(32, 22, 2),
(33, 23, 3),
(34, 24, 4),
(35, 25, 5),
(36, 26, 1),
(37, 27, 2),
(38, 28, 3),
(39, 29, 4),
(40, 30, 5);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Demographics`
--

CREATE TABLE `Demographics` (
  `demographic_id` int(11) NOT NULL,
  `demographic_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Demographics`
--

INSERT INTO `Demographics` (`demographic_id`, `demographic_type`) VALUES
(1, 'Children'),
(2, 'Young Adult'),
(3, 'Adults'),
(4, 'Mature');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Employee`
--

CREATE TABLE `Employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Employee`
--

INSERT INTO `Employee` (`employee_id`, `first_name`, `surname`, `username`, `password`, `email_address`) VALUES
(1, 'Alice', 'Creasey', 'BadAlice', 'skulls&crossbones', 'alice@library.com'),
(2, 'Jess', 'Pearson', 'BadJess', 'password1', 'jess@library.com'),
(3, 'Claudia', 'Danciu', 'BadClaudia', 'password2', 'claudia@library.com'),
(4, 'Foluke', 'Agbede', 'BadFoluke', 'password3', 'foluke@library.com');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Genres`
--

CREATE TABLE `Genres` (
  `genre_id` int(11) NOT NULL,
  `genre_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Genres`
--

INSERT INTO `Genres` (`genre_id`, `genre_type`) VALUES
(1, 'Crime'),
(2, 'Comics'),
(3, 'Drama'),
(4, 'Fantasy'),
(5, 'Folklore'),
(6, 'Politics'),
(7, 'History'),
(8, 'Self-Improvement'),
(9, 'Suspense'),
(10, 'Horror'),
(21, 'Humour'),
(22, 'Science'),
(23, 'Biography'),
(24, 'Autobiography'),
(25, 'Classics'),
(26, 'Childrens'),
(27, 'Science Fiction'),
(28, 'Travel');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Genres_book`
--

CREATE TABLE `Genres_book` (
  `genre_book_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Genres_book`
--

INSERT INTO `Genres_book` (`genre_book_id`, `genre_id`, `book_id`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 4, 5),
(6, 4, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 4, 10),
(11, 4, 11),
(12, 4, 12),
(13, 4, 13),
(14, 4, 14),
(15, 24, 15),
(16, 27, 16),
(17, 22, 17),
(18, 25, 18),
(19, 27, 19),
(20, 25, 20),
(21, 25, 21),
(22, 26, 22),
(23, 21, 23),
(24, 21, 24),
(25, 1, 25),
(26, 8, 26),
(27, 9, 27),
(28, 4, 28),
(29, 21, 29),
(30, 27, 30);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `length_of_loan`
--

CREATE TABLE `length_of_loan` (
  `length_of_loan_id` int(11) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `loan_start_date` date NOT NULL,
  `loan_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `length_of_loan`
--

INSERT INTO `length_of_loan` (`length_of_loan_id`, `borrower_id`, `book_id`, `loan_start_date`, `loan_end_date`) VALUES
(5, 1, 1, '2018-01-01', '2018-01-20'),
(6, 2, 2, '2018-01-02', '2018-01-21'),
(7, 3, 3, '2018-01-03', '2018-01-22'),
(8, 4, 4, '2018-01-04', '2018-01-23'),
(9, 3, 1, '2018-01-01', '2018-01-08'),
(10, 3, 2, '2018-01-08', '2018-01-15'),
(11, 3, 3, '2018-01-15', '2018-01-22'),
(12, 3, 4, '2018-01-22', '2018-01-29'),
(13, 3, 5, '2018-01-29', '2018-02-05'),
(14, 3, 6, '2018-02-05', '2018-02-12'),
(15, 3, 7, '2018-02-12', '2018-02-19');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Member`
--

CREATE TABLE `Member` (
  `borrower_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `house_number` varchar(20) NOT NULL,
  `postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Member`
--

INSERT INTO `Member` (`borrower_id`, `first_name`, `surname`, `username`, `password`, `email_address`, `telephone`, `house_number`, `postcode`) VALUES
(1, 'John', 'Child', 'JohnChild', 'johnsPassword', 'johnchild@gmail.com', '07654764222', '10', 'BD23 2BA'),
(2, 'Lee', 'Mayer', 'LeeMayer', 'LeesPassword', 'Lee@gmail.com', '07876578999', '2', 'LS16 9LG'),
(3, 'James', 'Shakespere', 'JamesShakespere', 'JamesPassword', 'James@gmail.com', '07787665432', '45', 'LS10 1QG'),
(4, 'Stephanie', 'Hodges', 'StephanieHodges', 'StephaniesPassword', 'Stephanie@gmail.com', '0113254987', '5', 'LS11 1GB'),
(52, 'claudia', 'danciu', 'dia', '1234567', 'contact@claudiadanciu.com', '+447465265917', '1111', 'LS101Jg'),
(53, 'John', 'Doe', 'John', '11111111', 'John@doe.com', '+447465265917', '111', '11111'),
(54, 'Bad', 'Alice', 'BadAlice', '$2y$10$IVxJrfgGQfWwos/M7c.7SeGo5ApakQXqDGdbFTF7YQTZ1jhOrLUqi', 'BadAlice@hotgirl.com', '+447465265917', '1111', '1111'),
(55, 'claudia', 'danciu', 'Amazing', '$2y$10$AWm/iFDUV/8QYMBDRjnOQO.uS3wX5o6qJsKWVGqZMdrkSTZJzZe3a', 'claudia.borosianu@gmail.com', '+447465265917', '1111', 'LS101Jg'),
(56, 'Dia', 'DD', 'DiaDD', '$2y$10$pCEFgGnxrshDrPfVa.AgqeQKoAPmpkqbJDX7VobqFlmcr6VItHkCG', 'contact@claudiadanciu.com', '1111111', '1111', '1111'),
(57, 'Claudia', 'Danciu', 'claudia', '$2y$10$QVIrqPIfocpd4u7V6Yg/SOPrEFJFwwOclHasgTRQ8FpqTPL9.1BXS', 'claudia@yahoo.com', '1111', '111', '1111'),
(58, '1', '1', '1', '$2y$10$jAcz68k1igOLbu687YT26OIbnUZlcOI37gCgDy/pFQ7ZBekhY42Qe', '1@y.com', '1', '1', '1'),
(59, 'Maria', 'DB', 'Maria', '$2y$10$cOwMkroEcZ2YIHKxo5.FNOFWjsyrP47lnm2giG.j8FdIVLmJ.hNyK', 'Maria@yahoo.com', '1111', '1111', '1111'),
(60, 'a', 'q', 'q', '$2y$10$Cfm/g14GvjqFeE.k/eqdr.GP7QYxpjhRzIsfbkA9c.KAk7srGwiGO', 'a@q.com', '111', '111', '111'),
(61, '', '', 'qwerty', '$2y$10$ve8twK/O9x64qe.umzQEle17Gt60ttCJLbLmrSLit56/NAP7g2rN6', '', '', '', ''),
(62, '111111', '111111', '111111', '$2y$10$vFO6L3ZXBBK.QAjQCrfPC.4U47w6U/M7KuseSGirMmVCS1y3RHwcW', '11111@saksdna.csacak', '', '', ''),
(63, '11', '11', 'Cal', '$2y$10$mIRRdAy1zge.C8IxEvMC3.E3dn8nSZP46ao0hWqZJN6a4y4MS4WG6', 'Claudia@yahoo.com', '11', '11', '11');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Publisher`
--

CREATE TABLE `Publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Publisher`
--

INSERT INTO `Publisher` (`publisher_id`, `publisher_name`) VALUES
(1, 'Penguin'),
(2, 'MacMillan'),
(3, 'HarperCollins'),
(4, 'Simon & Schuster'),
(5, 'Hachette Livre');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Types`
--

CREATE TABLE `Types` (
  `type_id` int(11) NOT NULL,
  `book_prose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Types`
--

INSERT INTO `Types` (`type_id`, `book_prose`) VALUES
(1, 'Fiction'),
(2, 'Non-Fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AuthorNames`
--
ALTER TABLE `AuthorNames`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `Books_Authors`
--
ALTER TABLE `Books_Authors`
  ADD PRIMARY KEY (`books_authors_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `Book_info`
--
ALTER TABLE `Book_info`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `demographic_id` (`demographic_id`);

--
-- Indexes for table `Book_stock`
--
ALTER TABLE `Book_stock`
  ADD PRIMARY KEY (`book_stock_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `Demographics`
--
ALTER TABLE `Demographics`
  ADD PRIMARY KEY (`demographic_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `Genres`
--
ALTER TABLE `Genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `Genres_book`
--
ALTER TABLE `Genres_book`
  ADD PRIMARY KEY (`genre_book_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `length_of_loan`
--
ALTER TABLE `length_of_loan`
  ADD PRIMARY KEY (`length_of_loan_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `length_of_loan_ibfk_1` (`borrower_id`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`borrower_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AuthorNames`
--
ALTER TABLE `AuthorNames`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Books_Authors`
--
ALTER TABLE `Books_Authors`
  MODIFY `books_authors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Book_info`
--
ALTER TABLE `Book_info`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `Book_stock`
--
ALTER TABLE `Book_stock`
  MODIFY `book_stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `Demographics`
--
ALTER TABLE `Demographics`
  MODIFY `demographic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Genres`
--
ALTER TABLE `Genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `Genres_book`
--
ALTER TABLE `Genres_book`
  MODIFY `genre_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `length_of_loan`
--
ALTER TABLE `length_of_loan`
  MODIFY `length_of_loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Member`
--
ALTER TABLE `Member`
  MODIFY `borrower_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `Publisher`
--
ALTER TABLE `Publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Types`
--
ALTER TABLE `Types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `Books_Authors`
--
ALTER TABLE `Books_Authors`
  ADD CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book_info` (`book_id`),
  ADD CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `AuthorNames` (`author_id`);

--
-- Restrictii pentru tabele `Book_info`
--
ALTER TABLE `Book_info`
  ADD CONSTRAINT `book_info_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `Types` (`type_id`),
  ADD CONSTRAINT `book_info_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `Publisher` (`publisher_id`),
  ADD CONSTRAINT `book_info_ibfk_3` FOREIGN KEY (`demographic_id`) REFERENCES `Demographics` (`demographic_id`);

--
-- Restrictii pentru tabele `Book_stock`
--
ALTER TABLE `Book_stock`
  ADD CONSTRAINT `book_stock_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book_info` (`book_id`);

--
-- Restrictii pentru tabele `Genres_book`
--
ALTER TABLE `Genres_book`
  ADD CONSTRAINT `genres_book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `Genres` (`genre_id`),
  ADD CONSTRAINT `genres_book_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `Book_info` (`book_id`);

--
-- Restrictii pentru tabele `length_of_loan`
--
ALTER TABLE `length_of_loan`
  ADD CONSTRAINT `length_of_loan_ibfk_1` FOREIGN KEY (`borrower_id`) REFERENCES `Member` (`borrower_id`),
  ADD CONSTRAINT `length_of_loan_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `Book_info` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
