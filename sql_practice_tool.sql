-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2022 pada 18.10
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
-- Struktur dari tabel `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `profession` varchar(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `persons`
--

INSERT INTO `persons` (`id`, `name`, `profession`, `address`, `email`) VALUES
(1, 'Indah Nurdiyanti', 'minima', 'Ki. Baja No. 280, Lhokseumawe 35254, KepR', 'ismail.prayoga@gmail.co.id'),
(2, 'Kalim Latupono M.Farm', 'facilis', 'Jln. Bah Jaya No. 519, Ambon 30518, KalSel', 'tarihoran.uchita@safitri.info'),
(3, 'Laila Haryanti S.Kom', 'ut', 'Jln. Bambon No. 14, Surakarta 96911, MalUt', 'tasnim75@gmail.com'),
(4, 'Kasusra Rajasa M.TI.', 'aut', 'Ki. Krakatau No. 871, Denpasar 39915, Bengkulu', 'enteng.januar@gunawan.org'),
(5, 'Artawan Sihotang', 'dolorem', 'Kpg. Kalimantan No. 502, Tanjungbalai 40919, KepR', 'nyoman.utami@gmail.co.id'),
(6, 'Lembah Panca Kusumo', 'saepe', 'Dk. K.H. Wahid Hasyim (Kopo) No. 114, Solok 70656, JaTim', 'opermata@gmail.com'),
(7, 'Yani Hassanah', 'error', 'Gg. Bagas Pati No. 306, Padangpanjang 43629, Riau', 'luthfi01@gunarto.sch.id'),
(8, 'Cawuk Sinaga', 'beatae', 'Jr. Bakau No. 796, Bontang 41365, SumSel', 'jhalimah@rahmawati.co.id'),
(9, 'Gina Novitasari', 'esse', 'Jr. Tambak No. 62, Bau-Bau 59566, JaTim', 'jfarida@nasyiah.org'),
(10, 'Garan Siregar', 'explicabo', 'Gg. Sam Ratulangi No. 982, Tanjung Pinang 16870, KepR', 'joktaviani@yahoo.co.id'),
(11, 'Estiono Dongoran S.Pt', 'mollitia', 'Ki. Abdul. Muis No. 713, Singkawang 53376, SulTra', 'hardi93@yahoo.co.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `author`) VALUES
(1, 'Iusto rerum distinctio saepe commodi voluptate qui deserunt nihil harum tempore.', 'iusto-rerum-distinctio-saepe-commodi-voluptate-qui-deserunt-nihil-harum-tempore.', 'Possimus tenetur non et dolores iusto ut sit. Debitis quis impedit et quis. Velit iste sequi quis corporis. Quibusdam et repudiandae pariatur. Aliquam voluptates qui quo ut qui. Debitis ut eos repellendus ex similique est quo. Sunt quidem cupiditate suscipit tempore laborum ipsa reiciendis. Et expedita soluta inventore assumenda. Quia soluta quia tenetur exercitationem quo aut. Molestiae magnam aperiam et distinctio exercitationem quos. Quisquam autem quis voluptate maxime autem. Autem maxime rerum ut qui ut quo dolores. Soluta ut ut voluptas odit itaque incidunt. Voluptatibus ut ut officiis dolor sed. Sed sequi et modi dolorem omnis magnam. Rem et ut accusamus officia quas. Minima perferendis dolores qui et ullam corrupti. Quo eos rerum aliquid minus voluptas voluptates. Ex qui nesciunt eaque perspiciatis.', 'Harjaya Erik Wibowo M.M.'),
(2, 'Placeat minus optio officiis voluptatum sapiente quisquam quos et enim cumque ipsum tempora doloremque.', 'placeat-minus-optio-officiis-voluptatum-sapiente-quisquam-quos-et-enim-cumque-ipsum-tempora-doloremque.', 'Pariatur error reprehenderit sunt sequi nisi. Qui earum harum a corrupti. Odio corporis voluptas minus quos esse eaque. Eos voluptatem voluptatibus maxime sit. Ut autem excepturi cumque sint labore. Qui numquam voluptates facere ea. Voluptatem sit ipsum quisquam explicabo. Ea voluptatum placeat sequi et itaque delectus. Illum consequuntur aut quas assumenda voluptatem molestiae. Ipsa odit eligendi porro rerum quidem sunt. Vel veritatis deserunt minus fugit. Ullam optio eum corrupti ab eaque cupiditate. Ut tempore aspernatur id aspernatur consequatur harum asperiores. Et doloremque dolor iure nostrum aliquam ipsam minus. Impedit saepe maiores eveniet voluptate. Dolorum cumque qui quae alias. Voluptatibus aliquid praesentium necessitatibus odio.', 'Pangestu Situmorang'),
(3, 'Tempora asperiores molestias repellat id omnis tempore nulla ut dolores eius dolor.', 'tempora-asperiores-molestias-repellat-id-omnis-tempore-nulla-ut-dolores-eius-dolor.', 'Sunt veritatis nemo sit culpa sit tenetur. Praesentium autem distinctio repellat eveniet. Autem dolorem voluptate voluptate amet. Eos ipsa quibusdam itaque quia magnam ut. Ea accusantium aut iure et. Sit dolores aperiam labore suscipit tempore aliquam ut. Repellat facilis optio earum est quos. Impedit voluptatem non eum impedit voluptatibus. Et natus odit totam sapiente nobis dignissimos rerum. Ipsum similique qui aut ea est officiis officia. Neque incidunt quia veniam sint similique. Expedita optio eos quam. Cupiditate iure fugiat ex voluptatem alias. Voluptatem voluptates et hic accusamus aperiam. At doloremque mollitia doloribus cum. Sunt omnis voluptas aspernatur voluptate.', 'Panca Habibi'),
(4, 'Deserunt saepe cupiditate quae consequatur consequatur.', 'deserunt-saepe-cupiditate-quae-consequatur-consequatur.', 'Reiciendis quaerat et corporis molestiae hic excepturi odio. Unde praesentium laboriosam ad corrupti. Dolores adipisci excepturi eos nihil. Et eum a vel velit et tenetur sunt. Et aut repudiandae fugit ea laudantium sapiente praesentium. Ullam voluptate ad quasi ut et ipsa. Provident quia vero esse quae architecto error eum. Ullam assumenda voluptatem modi hic aperiam quasi. Non quis qui laborum. Quasi veniam officiis quaerat numquam. Accusamus et architecto beatae et aut quae omnis dolore.', 'Rendy Harsanto Saragih S.Pd'),
(5, 'Quam voluptatem saepe quia.', 'quam-voluptatem-saepe-quia.', 'Et quia molestias optio vel vel nisi. Laudantium sed amet odio consequatur. Quas eius iusto omnis molestiae. Dolorum aspernatur ut cumque ex sequi et. Quia fugit ex pariatur. Sequi doloremque nam tempora eos omnis dolores vitae est. Dolor temporibus saepe atque et omnis labore tempora. Et ullam ut id id.', 'Lasmanto Sakti Salahudin'),
(6, 'Cupiditate eos quos quam earum ut quae rerum id culpa.', 'cupiditate-eos-quos-quam-earum-ut-quae-rerum-id-culpa.', 'Velit soluta fugiat praesentium labore et a earum dolor. Voluptatem occaecati sed et porro est amet velit. Ut quas sint suscipit at sequi quo. Eum maiores iste tenetur. Maxime earum sed sed dolor culpa autem. Magnam aliquam deleniti fugit consequuntur dolor nobis suscipit. Et eum vel ipsum nostrum eos. Ut deserunt eaque repudiandae exercitationem dolore facere. Id molestiae eveniet cupiditate magnam aut ut. Soluta vel quis ducimus odit. Sit et maxime id ipsa sunt voluptas. Ea quas laborum ea ut. Ut voluptatem corrupti aperiam sunt. Doloribus rem fuga eum quaerat officia reiciendis porro.', 'Mulyanto Permadi M.TI.'),
(7, 'Sunt et ut nisi accusantium sed molestiae excepturi.', 'sunt-et-ut-nisi-accusantium-sed-molestiae-excepturi.', 'Voluptate accusamus qui et culpa tenetur doloribus eveniet. Ipsum aut debitis sequi nihil cupiditate. Voluptates molestias sit est veniam minus. Voluptatibus quis nulla facere non. Quas consequatur labore mollitia enim minus et. Sed quidem et qui soluta enim quo. Aspernatur consectetur voluptatem qui voluptas laudantium fugit quam velit. Quia fugit rerum perspiciatis eius est suscipit iure.', 'Rendy Gunarto S.E.I'),
(8, 'Accusantium nostrum quas tenetur amet deserunt iste quod.', 'accusantium-nostrum-quas-tenetur-amet-deserunt-iste-quod.', 'Est doloremque aut cum aut nostrum doloribus. Ullam autem quis quis libero omnis. Accusamus enim maiores fugit qui magnam. Odio sapiente tempore qui voluptas odio velit ipsa. Omnis odio reprehenderit perspiciatis eveniet tempore ea. Occaecati sit esse vitae cupiditate. Facilis quod ea harum rerum illum. In dolorem natus debitis architecto facilis. Et repellat eaque consequatur et modi. Perspiciatis non nihil sapiente voluptas. Fugit alias qui temporibus blanditiis molestiae tempora officia. Laborum sint voluptatem voluptatem dolorum sint. Tempore corporis enim quia ut error velit. Ut totam aut corrupti voluptate dolor ad et. Qui ut ratione ea sunt aspernatur tenetur laborum.', 'Gatot Gara Nainggolan S.Kom'),
(9, 'Cum a minus asperiores ut minus excepturi iure ut.', 'cum-a-minus-asperiores-ut-minus-excepturi-iure-ut.', 'Vel quo odit non nisi molestias. Qui rerum eos assumenda quia deleniti sit. Eos impedit enim aut ut voluptas nemo enim. Architecto rerum et temporibus consequatur qui in. Magni magnam dolores enim provident nisi voluptatem. Porro nulla reiciendis earum in quo et. Doloribus natus voluptates deleniti sunt consequuntur consequatur nulla. Id incidunt aspernatur tempora. Consequuntur voluptate adipisci qui dignissimos maxime nobis.', 'Sadina Susanti'),
(10, 'Nihil voluptas repellat non non deleniti.', 'nihil-voluptas-repellat-non-non-deleniti.', 'Sed et maiores non aut. Est aut molestias et pariatur sit. Aut minus fugiat velit. Maiores quis qui assumenda nulla pariatur aut incidunt. Placeat odio molestias quae. Ipsa eveniet aut omnis tempora. Ut vero ut error et. Sapiente et quod quas nihil qui ut. Officia qui consequatur cumque dolor cumque. Ducimus qui aliquam atque aut qui nihil cum officia. Ratione sed labore explicabo non tenetur. Tempora et ut ratione qui earum sunt. Repellendus impedit velit aperiam et et nemo dolore.', 'Jayadi Nababan'),
(11, 'Voluptas distinctio sint soluta molestiae quisquam nulla ducimus error temporibus consequatur dolores.', 'voluptas-distinctio-sint-soluta-molestiae-quisquam-nulla-ducimus-error-temporibus-consequatur-dolores.', 'Repellat est tempore ullam et non. Quam blanditiis quibusdam repellendus excepturi voluptatem aut. Harum ab hic doloremque. Incidunt explicabo voluptatibus eos quo. Consequatur esse officia ut optio. Laboriosam voluptatibus laboriosam aut. Omnis impedit omnis in ut. Sint molestiae sint illum et quia ratione eligendi. Omnis repellat aut minus illo consectetur animi.', 'Cici Hastuti');

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
(1, 'Agus Firgantoro S.Pt', '09.2018.1.02821', '0', '2018-07-14'),
(2, 'Tasnim Sirait', '08.2021.1.03919', '0', '2002-04-11'),
(3, 'Najwa Usada', '07.2020.1.04649', '1', '1999-01-11'),
(4, 'Belinda Padmasari', '07.2018.1.05099', '0', '2001-12-23'),
(5, 'Ghaliyati Wastuti', '09.2021.1.03960', '0', '1974-05-16'),
(6, 'Galih Budiman', '05.2019.1.04805', '1', '1997-01-04'),
(7, 'Mahdi Utama', '05.2020.1.07355', '0', '1994-02-28'),
(8, 'Mutia Purwanti', '08.2022.1.05299', '0', '1979-03-27'),
(9, 'Maimunah Mayasari', '03.2018.1.09922', '1', '2013-02-10'),
(10, 'Laila Purwanti S.Ked', '02.2021.1.05635', '0', '1970-02-14'),
(11, 'Wulan Novi Kuswandari M.Farm', '02.2019.1.01666', '0', '2003-10-23'),
(12, 'Okto Nugroho', '09.2020.1.08865', '1', '1979-03-16'),
(13, 'Elisa Zulaika S.Ked', '03.2021.1.07953', '0', '2001-07-10'),
(14, 'Prima Gunawan S.Sos', '09.2019.1.02372', '1', '2019-06-02'),
(15, 'Jaga Laksana Wasita M.TI.', '06.2021.1.05013', '0', '1993-03-16'),
(16, 'Victoria Maria Riyanti S.E.', '06.2022.1.03139', '0', '2015-02-23'),
(17, 'Salimah Indah Rahimah', '03.2018.1.06712', '1', '1973-08-14'),
(18, 'Dodo Zulkarnain', '04.2018.1.02458', '1', '2013-02-01'),
(19, 'Puji Maryati', '06.2019.1.09806', '0', '1992-01-26'),
(20, 'Raditya Wijaya', '09.2022.1.02219', '0', '1993-10-03'),
(21, 'Dalima Yuliarti M.M.', '07.2019.1.04049', '1', '1990-06-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
