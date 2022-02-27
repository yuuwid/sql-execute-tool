-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2022 pada 08.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_practice_tool`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Perum Astuti (Persero) Tbk', 'Dk. Adisucipto No. 407, Banjarbaru 68068, SulUt', '(+62) 689 3967 097'),
(2, 'UD Mandasari Widodo Tbk', 'Ds. Cut Nyak Dien No. 174, Palopo 70178, SulSel', '(+62) 27 2550 1764'),
(3, 'Perum Hasanah Tbk', 'Ds. Gotong Royong No. 476, Palangka Raya 50446, PapBar', '0860 0042 0814'),
(4, 'CV Melani', 'Ds. Jakarta No. 921, Palangka Raya 96065, SulSel', '(+62) 718 8102 420'),
(5, 'PT Megantara Hasanah', 'Dk. Fajar No. 115, Parepare 47912, SumSel', '0624 4046 5398');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `company_id` int(11) DEFAULT NULL,
  `profession` varchar(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `persons`
--

INSERT INTO `persons` (`id`, `name`, `company_id`, `profession`, `address`, `email`) VALUES
(1, 'Raina Winarsih', 5, 'Personnel Recruiter', 'Psr. Ters. Buah Batu No. 87, Sukabumi 87717, SulTra', 'rina.nurdiyanti@siregar.my.id'),
(2, 'Najib Sitompul', 2, 'Telecommunications Equipment Installer', 'Ki. Setia Budi No. 236, Blitar 25211, NTB', 'prayitna.pudjiastuti@natsir.sch.id'),
(3, 'Zulaikha Nasyidah', 5, 'Agricultural Technician', 'Ki. Flores No. 25, Tasikmalaya 79271, KepR', 'adikara.hardiansyah@gmail.co.id'),
(4, 'Tasnim Kadir Maulana S.Psi', 1, 'Broadcast Technician', 'Jr. Honggowongso No. 525, Denpasar 59605, MalUt', 'vwinarno@gmail.com'),
(5, 'Puti Rahayu M.Farm', 2, 'Pile-Driver Operator', 'Jln. Abdul Rahmat No. 496, Kendari 49917, JaTim', 'reza98@sihotang.id'),
(6, 'Ifa Diana Namaga', 5, 'Bookbinder', 'Kpg. Sutarto No. 161, Kediri 76487, SulTra', 'nugroho.hasta@yahoo.com'),
(7, 'Akarsana Januar', 1, 'Taxi Drivers and Chauffeur', 'Jln. Panjaitan No. 408, Binjai 16193, SulSel', 'dono56@wijaya.asia'),
(8, 'Sabar Mansur', 3, 'Stonemason', 'Gg. Tambun No. 25, Cimahi 99554, Banten', 'warsita.astuti@gmail.co.id'),
(9, 'Siti Fitria Nasyidah M.M.', 2, 'Stock Clerk', 'Jln. Kebangkitan Nasional No. 229, Binjai 23725, Riau', 'jamalia59@yahoo.com'),
(10, 'Tantri Aryani S.E.', 4, 'Professor', 'Psr. Ters. Buah Batu No. 386, Kendari 24783, Bengkulu', 'banawa24@ardianto.tv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `title` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `body`) VALUES
(1, 6, 'Jack-in-the-box, and up the.', 'jack-in-the-box-and-up-the', 'Bill\'s place for a minute or two, and the baby was howling so much contradicted in her life before, and behind it when she caught it, and talking over its head. \'Very uncomfortable for the next witness.\' And he got up this morning, but I don\'t take this young lady tells us a story.\' \'I\'m afraid I am, sir,\' said Alice; \'but a grin without a porpoise.\' \'Wouldn\'t it really?\' said Alice in a very little use, as it was good manners for her to.'),
(2, 2, 'Hatter. \'Stolen!\' the King in a.', 'hatter-stolen-the-king-in-a', 'She ate a little feeble, squeaking voice, (\'That\'s Bill,\' thought Alice,) \'Well, I can\'t put it in a great thistle, to keep herself from being run over; and the Mock Turtle repeated thoughtfully. \'I should think very likely true.) Down, down, down. Would the fall NEVER come to the heads of the singers in the morning, just time to go, for the hedgehogs; and in THAT direction,\'.'),
(3, 2, 'Queen. \'I never said I didn\'t!\'.', 'queen-i-never-said-i-didn-t', 'Stigand, the patriotic archbishop of Canterbury, found it advisable--\"\' \'Found WHAT?\' said the Hatter. This piece of it had finished this short speech, they all stopped and looked at Alice. \'It must have been ill.\' \'So they were,\' said the Duchess, it had been. But her sister sat still just as I tell you!\' said Alice. \'Well, I hardly know--No more, thank ye; I\'m better now--but I\'m a deal too far off to trouble myself about you: you must manage the.'),
(4, 7, 'She was a different person.', 'she-was-a-different-person', 'White Rabbit as he spoke. \'UNimportant, of course, Alice could see this, as she came upon a little now and then unrolled the parchment scroll, and read as follows:-- \'The Queen of Hearts, and I could say if I like being that person, I\'ll come up: if not, I\'ll stay down here! It\'ll be no use in the.'),
(5, 1, 'Bill had left off when they liked, so that.', 'bill-had-left-off-when-they-liked-so-that', 'I should think it was,\' he said. \'Fifteenth,\' said the Dormouse; \'VERY ill.\' Alice tried to curtsey as she could not remember ever having heard of such a long silence after this, and she tried the effect of lying down on one knee as he said in a game of play with a growl, And concluded the banquet--] \'What IS the fun?\' said Alice. \'What IS a long time with great emphasis, looking hard at Alice the moment how large she had put the hookah out of its mouth, and addressed.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `npm` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `name`, `npm`, `gender`, `birth`) VALUES
(1, 'Kasiyah Ratna Usada M.Pd', '08.2018.1.07414', 'Female', '2001-04-11'),
(2, 'Jaeman Mahendra S.Kom', '06.2018.1.08547', 'Male', '2003-12-16'),
(3, 'Puji Handayani', '04.2019.1.07707', 'Female', '1989-02-25'),
(4, 'Marwata Radika Pradipta M.Kom.', '06.2018.1.04445', 'Male', '1990-08-23'),
(5, 'Zamira Hasanah', '08.2019.1.09019', 'Female', '2005-05-14'),
(6, 'Rachel Prastuti', '04.2018.1.07633', 'Female', '2014-10-30'),
(7, 'Wardaya Nainggolan', '06.2019.1.07441', 'Male', '2015-01-24'),
(8, 'Jumadi Kanda Maryadi', '07.2021.1.05824', 'Male', '1982-03-15'),
(9, 'Kamaria Pertiwi', '07.2021.1.05597', 'Female', '1971-05-20'),
(10, 'Bancar Luthfi Pratama S.H.', '09.2021.1.04239', 'Male', '1981-08-13'),
(11, 'Hadi Imam Sihombing S.Gz', '04.2022.1.02583', 'Male', '1993-05-23'),
(12, 'Lalita Lailasari', '04.2022.1.05718', 'Female', '2001-08-19'),
(13, 'Jais Kurniawan', '07.2019.1.04828', 'Male', '2010-06-14'),
(14, 'Nadine Wijayanti', '07.2019.1.07955', 'Female', '1990-10-21'),
(15, 'Gatra Tamba', '07.2019.1.02618', 'Male', '2015-12-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`) VALUES
(1, 'Gantar Manah Haryanto', 'lwijayanti'),
(2, 'Tina Nasyiah S.Gz', 'hastuti.jessica'),
(3, 'Nardi Tarihoran M.Pd', 'anggabaya.yulianti'),
(4, 'Kasim Wibisono', 'mandasari.salsabila'),
(5, 'Dewi Icha Hasanah', 'gpradana'),
(6, 'Banawi Salahudin', 'zulaika.juli'),
(7, 'Ghaliyati Ade Wulandari M.TI.', 'safina03'),
(8, 'Johan Winarno', 'wira84'),
(9, 'Adinata Siregar', 'suwarno.vanya'),
(10, 'Icha Sudiati S.Pt', 'kalim.sitompul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `slug` (`slug`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
