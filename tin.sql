CREATE TABLE `klientat` (
  `id` int(20) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwordi` varchar(30) NOT NULL,
  `role` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientat`
--

INSERT INTO `klientat` (`id`, `emri`, `mbiemri`, `username`, `passwordi`, `role`) VALUES
(31, 'Admin', 'Admin', 'admin99', '000000', 1),
(33, 'Ramiz', 'Hoxha', 'ramizhoxha1', '123456', 0),
(34, 'Artan', 'Osmani', 'artan11', '222222', 0),
(35, 'Yll', 'Smakiqi', 'yllsmakiqi2', '444444', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `product_id` int(255) NOT NULL,
  `emriprod` varchar(255) NOT NULL,
  `cmimiprod` int(255) NOT NULL,
  `fotoprod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`product_id`, `emriprod`, `cmimiprod`, `fotoprod`) VALUES
(1, 'B.I.G', 75, 'images\\bigi.jpeg'),
(2, 'Joker', 75, 'images/jokeri.jpeg'),
(3, 'Da Vinci', 75, 'images/favinqi.jpeg'),
(4, 'Dreamville', 75, 'images/fotohome.jpeg'),
(5, 'Roza', 75, 'images/roza.jpeg'),
(6, 'Tupac', 75, 'images/tu.jpeg'),
(7, 'Peaky Blinders', 75, 'images/peakyblinders.jpeg'),
(9, 'Naturo', 75, 'images/syteenarutos.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientat`
--
ALTER TABLE `klientat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klientat`
--
ALTER TABLE `klientat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
