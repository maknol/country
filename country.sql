-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 01:40 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `cid` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bul` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `cid`, `bul`, `eng`) VALUES
(1, 'c001', 'САЩ', 'United States'),
(9, 'c002', 'Западна Германия', 'West Germany'),
(10, 'c004', 'Великобритания', 'UK'),
(11, 'c006', 'Канада', 'Canada'),
(12, 'c007', 'Русия', 'Russia'),
(13, 'c008', 'Италия', 'Italy'),
(14, 'c009', 'Испания', 'Spain'),
(15, 'c010', 'Аржентина', 'Argentina'),
(16, 'c011', 'Бразилия', 'Brazil'),
(17, 'c012', 'Колумбия', 'Colombia'),
(18, 'c013', 'Финландия', 'Finland'),
(19, 'c014', 'Хонконг', 'Hong Kong'),
(20, 'c015', 'Иран', 'Iran'),
(21, 'c016', 'Малайзия', 'Malaysia'),
(22, 'c017', 'Пакистан', 'Pakistan'),
(23, 'c018', 'Швеция', 'Sweden'),
(24, 'c019', 'Австралия', 'Australia'),
(25, 'c020', 'България', 'Bulgaria'),
(26, 'c021', 'Коста Рика', 'Costa Rica'),
(27, 'c022', 'Франция', 'France'),
(28, 'c023', 'Унгария', 'Hungary'),
(29, 'c024', 'Ирландия', 'Ireland'),
(30, 'c025', 'Мексико', 'Mexico'),
(31, 'c026', 'Полша', 'Poland'),
(32, 'c027', 'Сингапур', 'Singapore'),
(33, 'c028', 'Швейцария', 'Switzerland'),
(34, 'c029', 'Австрия', 'Austria'),
(35, 'c030', 'Чехия', 'Czech Republic'),
(36, 'c031', 'Германия', 'Germany'),
(37, 'c032', 'Исландия', 'Iceland'),
(38, 'c033', 'Нидерландия (Холандия)', 'Netherlands'),
(39, 'c034', 'Португалия', 'Portugal'),
(40, 'c035', 'Южноафриканска република', 'South Africa'),
(41, 'c036', 'Тайланд', 'Thailand'),
(42, 'c037', 'Белгия', 'Belgium'),
(43, 'c038', 'Китай', 'China'),
(44, 'c039', 'Дания', 'Denmark'),
(45, 'c040', 'Гърция', 'Greece'),
(46, 'c041', 'Индия', 'India'),
(47, 'c043', 'Нова Зеландия', 'New Zealand'),
(48, 'c044', 'Румъния', 'Romania'),
(49, 'c045', 'Чехословакия', 'Czechoslovakia'),
(50, 'c046', 'Света Елена', 'Saint Helena'),
(51, 'c047', 'Света Лучия', 'Saint Lucia'),
(52, 'c048', 'Бермудски о-ви', 'Bermuda'),
(53, 'c071', 'Бутан', 'Bhutan'),
(54, 'c072', 'Боливия', 'Bolivia'),
(55, 'c073', 'Босна и Херцеговина', 'Bosnia and Herzegovina'),
(56, 'c074', 'Ботсвана', 'Botswana'),
(57, 'c075', 'Остров Буве', 'Bouvet Island'),
(58, 'c076', 'Британски Вирджински острови', 'British Virgin Islands'),
(59, 'c077', 'Бруней', 'Brunei Darussalam'),
(60, 'c078', 'Буркина Фасо', 'Burkina Faso'),
(61, 'c079', 'Мианмар', 'Burma'),
(62, 'c080', 'Бурунди', 'Burundi'),
(63, 'c081', 'Камбоджа', 'Cambodia'),
(64, 'c082', 'Камерун', 'Cameroon'),
(65, 'c083', 'Кабо Верде', 'Cape Verde'),
(66, 'c084', 'Кайманови о-ви', 'Cayman Islands'),
(67, 'c085', 'Централноафриканска република', 'Central African Republic'),
(68, 'c086', 'Чад', 'Chad'),
(70, 'c087', 'Чили', 'Chile'),
(71, 'c088', 'О-в Рождество или Коледен о-в', 'Christmas Island'),
(72, 'c089', 'Кокосови острови', 'Cocos (Keeling) Islands'),
(73, 'c090', 'Коморски о-ви', 'Comoros'),
(74, 'c091', 'Конго', 'Congo'),
(75, 'c092', 'Кук', 'Cook Islands'),
(76, 'c093', 'Кот д`Ивоар', 'Côte d`Ivoire'),
(77, 'c095', 'Хърватия', 'Croatia'),
(78, 'c096', 'Куба', 'Cuba'),
(79, 'c097', 'Кипър', 'Cyprus'),
(81, 'c100', 'Джибути', 'Djibouti'),
(82, 'c101', 'Доминика', 'Dominica'),
(83, 'c102', 'Доминикана', 'Dominican Republic'),
(84, 'c103', 'ГДР', 'East Germany'),
(85, 'c104', 'Еквадор', 'Ecuador'),
(86, 'c105', 'Египет', 'Egypt'),
(87, 'c106', 'Салвадор', 'El Salvador'),
(88, 'c107', 'Екваториална Гвинея', 'Equatorial Guinea'),
(89, 'c108', 'Еритрея', 'Eritrea'),
(90, 'c109', 'Естония', 'Estonia'),
(91, 'c110', 'Етиопия', 'Ethiopia'),
(92, 'c111', 'Фолкландски острови', 'Falkland Islands'),
(93, 'c112', 'Фарьорски острови', 'Faroe Islands'),
(94, 'c113', 'Югославия', 'Federal Republic of Yugoslavia'),
(95, 'c114', 'Микронезия', 'Federated States of Micronesia'),
(96, 'c115', 'Фиджи', 'Fiji'),
(97, 'c116', 'Френска Гвиана', 'French Guiana'),
(98, 'c117', 'Френска Полинезия', 'French Polynesia'),
(99, 'c118', 'Френски южни и антарктически територии', 'French Southern Territories'),
(100, 'c119', 'Габон', 'Gabon'),
(102, 'c120', 'Гамбия', 'Gambia'),
(103, 'c121', 'Грузия', 'Georgia'),
(104, 'c122', 'Гана', 'Ghana'),
(105, 'c123', 'Гибралтар', 'Gibraltar'),
(106, 'c124', 'Гренландия', 'Greenland'),
(107, 'c125', 'Гренада', 'Grenada'),
(108, 'c126', 'Гваделупа', 'Guadeloupe'),
(109, 'c127', 'Гуам', 'Guam'),
(110, 'c128', 'Гватемала', 'Guatemala'),
(111, 'c129', 'Гърнзи', 'Guernsey'),
(112, 'c130', 'Гвинея', 'Guinea'),
(113, 'c131', 'Гвинея-Бисау', 'Guinea-Bissau'),
(114, 'c132', 'Гвиана', 'Guyana'),
(115, 'c133', 'Хаити', 'Haiti'),
(116, 'c134', 'Ватикана', 'Holy See Vatican City State)'),
(117, 'c135', 'Хондурас', 'Honduras'),
(118, 'c136', 'Индонезия', 'Indonesia'),
(119, 'c137', 'Ирак', 'Iraq'),
(120, 'c138', 'Ман', 'Isle of Man'),
(121, 'c139', 'Израел', 'Israel'),
(122, 'c140', 'Ямайка', 'Jamaica'),
(123, 'c141', 'Джърси', 'Jersey'),
(124, 'c142', 'Йордания', 'Jordan'),
(125, 'c143', 'Казахстан', 'Kazakhstan'),
(126, 'c144', 'Кения', 'Kenya'),
(127, 'c145', 'Кирибати', 'Kiribati'),
(128, 'c146', 'Корея', 'Korea'),
(129, 'c147', 'Косово', 'Kosovo'),
(130, 'c148', 'Кувейт', 'Kuwait'),
(131, 'c149', 'Киргизстан', 'Kyrgyzstan'),
(132, 'c150', 'Лаос', 'Laos'),
(133, 'c151', 'Латвия', 'Latvia'),
(134, 'c152', 'Ливан', 'Lebanon'),
(135, 'c153', 'Лесото', 'Lesotho'),
(136, 'c154', 'Либерия', 'Liberia'),
(137, 'c155', 'Либия', 'Libya'),
(138, 'c156', 'Лихтенщайн', 'Liechtenstein'),
(139, 'c157', 'Литва', 'Lithuania'),
(140, 'c158', 'Люксембург', 'Luxembourg'),
(141, 'c159', 'Макао', 'Macao'),
(142, 'c160', 'Мадагаскар', 'Madagascar'),
(143, 'c161', 'Малави', 'Malawi'),
(144, 'c162', 'Малдиви', 'Maldives'),
(145, 'c163', 'Мали', 'Mali'),
(146, 'c164', 'Малта', 'Malta'),
(147, 'c165', 'Маршалови о-ви', 'Marshall Islands'),
(148, 'c166', 'Мартиника', 'Martinique'),
(149, 'c167', 'Мавритания', 'Mauritania'),
(150, 'c168', 'Мавриций', 'Mauritius'),
(151, 'c169', 'Майот', 'Mayotte'),
(152, 'c170', 'Молдова', 'Moldova'),
(153, 'c171', 'Монако', 'Monaco'),
(154, 'c172', 'Монголия', 'Mongolia'),
(155, 'c173', 'Черна гора', 'Montenegro'),
(156, 'c174', 'Монтсерат', 'Montserrat'),
(157, 'c175', 'Мароко', 'Morocco'),
(158, 'c176', 'Мозамбик', 'Mozambique'),
(160, 'c178', 'Намибия', 'Namibia'),
(161, 'c179', 'Науру', 'Nauru'),
(162, 'c180', 'Непал', 'Nepal'),
(163, 'c181', 'Нидерландски Антили', 'Netherlands Antilles'),
(164, 'c182', 'Нова Каледония', 'New Caledonia'),
(165, 'c183', 'Никарагуа', 'Nicaragua'),
(166, 'c184', 'Нигер', 'Niger'),
(167, 'c185', 'Нигерия', 'Nigeria'),
(168, 'c186', 'Ниуе', 'Niue'),
(169, 'c187', 'Норфолк', 'Norfolk Island'),
(170, 'c188', 'Северна Корея', 'North Korea'),
(171, 'c189', 'ДР Виетнам', 'North Vietnam'),
(172, 'c190', 'Северни Мариански о-ви', 'Northern Mariana Islands'),
(173, 'c191', 'Норвегия', 'Norway'),
(174, 'c192', 'Оман', 'Oman'),
(175, 'c193', 'Палау', 'Palau'),
(176, 'c194', 'Палестина', 'Palestine'),
(177, 'c195', 'Панама', 'Panama'),
(178, 'c196', 'Папуа Нова Гвинея', 'Papua New Guinea'),
(179, 'c197', 'Парагвай', 'Paraguay'),
(180, 'c198', 'Перу', 'Peru'),
(181, 'c199', 'Филипини', 'Philippines'),
(182, 'c200', 'Питкерн', 'Pitcairn'),
(183, 'c201', 'Пуерто Рико', 'Puerto Rico'),
(184, 'c202', 'Катар', 'Qatar'),
(185, 'c203', 'Македония', 'Republic of Macedonia'),
(186, 'c204', 'Реюнион', 'Réunion'),
(187, 'c205', 'Руанда', 'Rwanda'),
(188, 'c206', 'Сен Бартелми', 'Saint Barthélemy'),
(189, 'c207', 'Сейнт Китс и Невис', 'Saint Kitts and Nevis'),
(190, 'c208', 'Сейнт Мартин (Френска част)', 'Saint Martin (French part)'),
(191, 'c209', 'Сен Пиер и Микелон', 'Saint Pierre and Miquelon'),
(193, 'c210', 'Сейнт Винсент и Гренадини', 'Saint Vincent and the Grenadines'),
(194, 'c211', 'Самоа', 'Samoa'),
(195, 'c212', 'Сан Марино', 'San Marino'),
(196, 'c213', 'Сао Томе и Принсипи', 'Sao Tome and Principe'),
(197, 'c214', 'Саудитска Арабия', 'Saudi Arabia'),
(198, 'c215', 'Сенегал', 'Senegal'),
(199, 'c216', 'Сърбия и Черна гора', 'Serbia and Montenegro'),
(200, 'c217', 'Сейшели', 'Seychelles'),
(202, 'c219', 'Сиера Леоне', 'Sierra Leone'),
(203, 'c220', 'Словакия', 'Slovakia'),
(204, 'c221', 'Словения', 'Slovenia'),
(205, 'c222', 'Соломонови о-ви', 'Solomon Islands'),
(206, 'c223', 'Сомалия', 'Somalia'),
(207, 'c224', 'Южна Джорджия и Южни Сандвичеви о-ви', 'South Georgia and the South Sandwich Islands'),
(208, 'c225', 'Южна Корея', 'South Korea'),
(210, 'c228', 'Шри Ланка', 'Sri Lanka'),
(211, 'c229', 'Судан', 'Sudan'),
(212, 'c230', 'Суринам', 'Suriname'),
(213, 'c231', 'Свалбард и Ян Майен', 'Svalbard and Jan Mayen'),
(214, 'c232', 'Свазиленд', 'Swaziland'),
(215, 'c233', 'Сирия', 'Syria'),
(216, 'c234', 'Тайван', 'Taiwan'),
(217, 'c235', 'Таджикистан', 'Tajikistan'),
(218, 'c236', 'Танзания', 'Tanzania'),
(219, 'c237', 'Източен Тимор', 'Timor-Leste'),
(220, 'c238', 'Того', 'Togo'),
(221, 'c239', 'Токелау', 'Tokelau'),
(222, 'c240', 'Тонга', 'Tonga'),
(223, 'c241', 'Тринидад и Тобаго', 'Trinidad and Tobago'),
(224, 'c242', 'Тунис', 'Tunisia'),
(225, 'c243', 'Турция', 'Turkey'),
(226, 'c244', 'Туркменистан', 'Turkmenistan'),
(227, 'c245', 'Търкс и Кайкос', 'Turks and Caicos Islands'),
(228, 'c246', 'Тувалу', 'Tuvalu'),
(229, 'c247', 'Американски Вирджински о-ви', 'U.S Virgin Islands'),
(230, 'c248', 'Уганда', 'Uganda'),
(231, 'c249', 'Украйна', 'Ukraine'),
(232, 'c250', 'Обединени арабски емирства', 'United Arab Emirates'),
(233, 'c251', 'Малки далечни о-ви на САЩ', 'United States Minor Outlying Islands'),
(234, 'c252', 'Уругвай', 'Uruguay'),
(235, 'c253', 'Узбекистан', 'Uzbekistan'),
(236, 'c254', 'Вануату', 'Vanuatu'),
(237, 'c255', 'Венецуела', 'Venezuela'),
(238, 'c257', 'Уолис и Футуна', 'Wallis and Futuna'),
(239, 'c258', 'Западна Сахара', 'Western Sahara'),
(240, 'c259', 'Йемен', 'Yemen'),
(241, 'c227', 'Заир (Конго)', 'Zaire'),
(242, 'c005', 'Замбия', 'Zambia'),
(243, 'c003', 'Зимбабве', 'Zimbabwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cid_2` (`cid`),
  ADD UNIQUE KEY `bul_3` (`bul`),
  ADD KEY `bul_2` (`bul`),
  ADD KEY `eng_2` (`eng`);
ALTER TABLE `country` ADD FULLTEXT KEY `bul` (`bul`);
ALTER TABLE `country` ADD FULLTEXT KEY `eng` (`eng`);
ALTER TABLE `country` ADD FULLTEXT KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
