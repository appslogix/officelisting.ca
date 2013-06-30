-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2013 at 12:07 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `office_um`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` VALUES(1, '257 Old Yonge Street, Toronto, ON, Canada', 'M5K2R5', 'This is a building that was just recently opened.', 'b8912aba386b5a15daff5002de558d494143c961.jpg', 1);
INSERT INTO `buildings` VALUES(3, '70 Transwell Avenue, Toronto, ON, Canada', 'M2N 5L1', 'This is description', '', 1);
INSERT INTO `buildings` VALUES(5, '8 Broadway Avenue, Toronto, ON, Canada', 'M9N 738', 'this is is a teste', '', 1);
INSERT INTO `buildings` VALUES(8, '60 Centre Street, New York, NY', '839873', 'this is a trial place to test for it', '', 1);
INSERT INTO `buildings` VALUES(9, '3020 Bayview Avenue, Toronto, ON, Canada', 'M2N 5l1', 'This is a test submit', '', 1);
INSERT INTO `buildings` VALUES(12, '77 Ryerson Avenue, Toronto, ON, Canada', 'M3N 4K1', 'This is another test place fot he', '', 1);
INSERT INTO `buildings` VALUES(13, '89383 Sheffler Road, Elmira, OR', 'M99303', 'This is another place', '', 1);
INSERT INTO `buildings` VALUES(14, '9809 Cross Creek Court, Dallas, TX', '32002', 'this is a test', '', 1);
INSERT INTO `buildings` VALUES(21, 'Melbourne, Victoria, 3000, Australia', '3987209', 'this is a test', '1.-icons.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin2 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` VALUES(1, 'United States');
INSERT INTO `countries` VALUES(2, 'United Kingdom');
INSERT INTO `countries` VALUES(3, 'Norway');
INSERT INTO `countries` VALUES(4, 'Greece');
INSERT INTO `countries` VALUES(5, 'Afghanistan');
INSERT INTO `countries` VALUES(6, 'Albania');
INSERT INTO `countries` VALUES(7, 'Algeria');
INSERT INTO `countries` VALUES(8, 'American Samoa');
INSERT INTO `countries` VALUES(9, 'Andorra');
INSERT INTO `countries` VALUES(10, 'Angola');
INSERT INTO `countries` VALUES(11, 'Anguilla');
INSERT INTO `countries` VALUES(12, 'Antigua & Barbuda');
INSERT INTO `countries` VALUES(13, 'Antilles, Netherlands');
INSERT INTO `countries` VALUES(182, 'Senegal');
INSERT INTO `countries` VALUES(15, 'Argentina');
INSERT INTO `countries` VALUES(16, 'Armenia');
INSERT INTO `countries` VALUES(17, 'Aruba');
INSERT INTO `countries` VALUES(18, 'Australia');
INSERT INTO `countries` VALUES(19, 'Austria');
INSERT INTO `countries` VALUES(20, 'Azerbaijan');
INSERT INTO `countries` VALUES(21, 'Bahamas, The');
INSERT INTO `countries` VALUES(22, 'Bahrain');
INSERT INTO `countries` VALUES(23, 'Bangladesh');
INSERT INTO `countries` VALUES(24, 'Barbados');
INSERT INTO `countries` VALUES(25, 'Belarus');
INSERT INTO `countries` VALUES(26, 'Belgium');
INSERT INTO `countries` VALUES(27, 'Belize');
INSERT INTO `countries` VALUES(28, 'Benin');
INSERT INTO `countries` VALUES(29, 'Bermuda');
INSERT INTO `countries` VALUES(30, 'Bhutan');
INSERT INTO `countries` VALUES(31, 'Bolivia');
INSERT INTO `countries` VALUES(32, 'Bosnia and Herzegovina');
INSERT INTO `countries` VALUES(33, 'Botswana');
INSERT INTO `countries` VALUES(34, 'Brazil');
INSERT INTO `countries` VALUES(35, 'British Virgin Islands');
INSERT INTO `countries` VALUES(36, 'Brunei Darussalam');
INSERT INTO `countries` VALUES(37, 'Bulgaria');
INSERT INTO `countries` VALUES(38, 'Burkina Faso');
INSERT INTO `countries` VALUES(39, 'Burundi');
INSERT INTO `countries` VALUES(40, 'Cambodia');
INSERT INTO `countries` VALUES(41, 'Cameroon');
INSERT INTO `countries` VALUES(42, 'Canada');
INSERT INTO `countries` VALUES(43, 'Cape Verde');
INSERT INTO `countries` VALUES(44, 'Cayman Islands');
INSERT INTO `countries` VALUES(45, 'Central African Republic');
INSERT INTO `countries` VALUES(46, 'Chad');
INSERT INTO `countries` VALUES(47, 'Chile');
INSERT INTO `countries` VALUES(48, 'China');
INSERT INTO `countries` VALUES(49, 'Colombia');
INSERT INTO `countries` VALUES(50, 'Comoros');
INSERT INTO `countries` VALUES(51, 'Congo');
INSERT INTO `countries` VALUES(52, 'Congo');
INSERT INTO `countries` VALUES(53, 'Cook Islands');
INSERT INTO `countries` VALUES(54, 'Costa Rica');
INSERT INTO `countries` VALUES(55, 'Cote D''Ivoire');
INSERT INTO `countries` VALUES(56, 'Croatia');
INSERT INTO `countries` VALUES(57, 'Cuba');
INSERT INTO `countries` VALUES(58, 'Cyprus');
INSERT INTO `countries` VALUES(59, 'Czech Republic');
INSERT INTO `countries` VALUES(60, 'Denmark');
INSERT INTO `countries` VALUES(61, 'Djibouti');
INSERT INTO `countries` VALUES(62, 'Dominica');
INSERT INTO `countries` VALUES(63, 'Dominican Republic');
INSERT INTO `countries` VALUES(64, 'East Timor (Timor-Leste)');
INSERT INTO `countries` VALUES(65, 'Ecuador');
INSERT INTO `countries` VALUES(66, 'Egypt');
INSERT INTO `countries` VALUES(67, 'El Salvador');
INSERT INTO `countries` VALUES(68, 'Equatorial Guinea');
INSERT INTO `countries` VALUES(69, 'Eritrea');
INSERT INTO `countries` VALUES(70, 'Estonia');
INSERT INTO `countries` VALUES(71, 'Ethiopia');
INSERT INTO `countries` VALUES(72, 'Falkland Islands');
INSERT INTO `countries` VALUES(73, 'Faroe Islands');
INSERT INTO `countries` VALUES(74, 'Fiji');
INSERT INTO `countries` VALUES(75, 'Finland');
INSERT INTO `countries` VALUES(76, 'France');
INSERT INTO `countries` VALUES(77, 'French Guiana');
INSERT INTO `countries` VALUES(78, 'French Polynesia');
INSERT INTO `countries` VALUES(79, 'Gabon');
INSERT INTO `countries` VALUES(80, 'Gambia, the');
INSERT INTO `countries` VALUES(81, 'Georgia');
INSERT INTO `countries` VALUES(82, 'Germany');
INSERT INTO `countries` VALUES(83, 'Ghana');
INSERT INTO `countries` VALUES(84, 'Gibraltar');
INSERT INTO `countries` VALUES(86, 'Greenland');
INSERT INTO `countries` VALUES(87, 'Grenada');
INSERT INTO `countries` VALUES(88, 'Guadeloupe');
INSERT INTO `countries` VALUES(89, 'Guam');
INSERT INTO `countries` VALUES(90, 'Guatemala');
INSERT INTO `countries` VALUES(91, 'Guernsey and Alderney');
INSERT INTO `countries` VALUES(92, 'Guinea');
INSERT INTO `countries` VALUES(93, 'Guinea-Bissau');
INSERT INTO `countries` VALUES(94, 'Guinea, Equatorial');
INSERT INTO `countries` VALUES(95, 'Guiana, French');
INSERT INTO `countries` VALUES(96, 'Guyana');
INSERT INTO `countries` VALUES(97, 'Haiti');
INSERT INTO `countries` VALUES(179, 'San Marino');
INSERT INTO `countries` VALUES(99, 'Honduras');
INSERT INTO `countries` VALUES(100, 'Hong Kong, (China)');
INSERT INTO `countries` VALUES(101, 'Hungary');
INSERT INTO `countries` VALUES(102, 'Iceland');
INSERT INTO `countries` VALUES(103, 'India');
INSERT INTO `countries` VALUES(104, 'Indonesia');
INSERT INTO `countries` VALUES(105, 'Iran, Islamic Republic of');
INSERT INTO `countries` VALUES(106, 'Iraq');
INSERT INTO `countries` VALUES(107, 'Ireland');
INSERT INTO `countries` VALUES(108, 'Israel');
INSERT INTO `countries` VALUES(109, 'Ivory Coast (Cote d''Ivoire)');
INSERT INTO `countries` VALUES(110, 'Italy');
INSERT INTO `countries` VALUES(111, 'Jamaica');
INSERT INTO `countries` VALUES(112, 'Japan');
INSERT INTO `countries` VALUES(113, 'Jersey');
INSERT INTO `countries` VALUES(114, 'Jordan');
INSERT INTO `countries` VALUES(115, 'Kazakhstan');
INSERT INTO `countries` VALUES(116, 'Kenya');
INSERT INTO `countries` VALUES(117, 'Kiribati');
INSERT INTO `countries` VALUES(118, 'Korea, (South) Rep. of');
INSERT INTO `countries` VALUES(119, 'Kuwait');
INSERT INTO `countries` VALUES(120, 'Kyrgyzstan');
INSERT INTO `countries` VALUES(121, 'Lao People''s Dem. Rep.');
INSERT INTO `countries` VALUES(122, 'Latvia');
INSERT INTO `countries` VALUES(123, 'Lebanon');
INSERT INTO `countries` VALUES(124, 'Lesotho');
INSERT INTO `countries` VALUES(125, 'Libyan Arab Jamahiriya');
INSERT INTO `countries` VALUES(126, 'Liechtenstein');
INSERT INTO `countries` VALUES(127, 'Lithuania');
INSERT INTO `countries` VALUES(128, 'Luxembourg');
INSERT INTO `countries` VALUES(129, 'Macao, (China)');
INSERT INTO `countries` VALUES(130, 'Macedonia, TFYR');
INSERT INTO `countries` VALUES(131, 'Madagascar');
INSERT INTO `countries` VALUES(132, 'Malawi');
INSERT INTO `countries` VALUES(133, 'Malaysia');
INSERT INTO `countries` VALUES(134, 'Maldives');
INSERT INTO `countries` VALUES(135, 'Mali');
INSERT INTO `countries` VALUES(136, 'Malta');
INSERT INTO `countries` VALUES(137, 'Martinique');
INSERT INTO `countries` VALUES(138, 'Mauritania');
INSERT INTO `countries` VALUES(139, 'Mauritius');
INSERT INTO `countries` VALUES(140, 'Mexico');
INSERT INTO `countries` VALUES(141, 'Micronesia');
INSERT INTO `countries` VALUES(142, 'Moldova, Republic of');
INSERT INTO `countries` VALUES(143, 'Monaco');
INSERT INTO `countries` VALUES(144, 'Mongolia');
INSERT INTO `countries` VALUES(145, 'Montenegro');
INSERT INTO `countries` VALUES(146, 'Morocco');
INSERT INTO `countries` VALUES(147, 'Mozambique');
INSERT INTO `countries` VALUES(148, 'Myanmar (ex-Burma)');
INSERT INTO `countries` VALUES(149, 'Namibia');
INSERT INTO `countries` VALUES(150, 'Nepal');
INSERT INTO `countries` VALUES(151, 'Netherlands');
INSERT INTO `countries` VALUES(152, 'New Caledonia');
INSERT INTO `countries` VALUES(153, 'New Zealand');
INSERT INTO `countries` VALUES(154, 'Nicaragua');
INSERT INTO `countries` VALUES(155, 'Niger');
INSERT INTO `countries` VALUES(156, 'Nigeria');
INSERT INTO `countries` VALUES(157, 'Northern Mariana Islands');
INSERT INTO `countries` VALUES(159, 'Oman');
INSERT INTO `countries` VALUES(160, 'Pakistan');
INSERT INTO `countries` VALUES(161, 'Palestinian Territory');
INSERT INTO `countries` VALUES(162, 'Panama');
INSERT INTO `countries` VALUES(163, 'Papua New Guinea');
INSERT INTO `countries` VALUES(164, 'Paraguay');
INSERT INTO `countries` VALUES(165, 'Peru');
INSERT INTO `countries` VALUES(166, 'Philippines');
INSERT INTO `countries` VALUES(167, 'Poland');
INSERT INTO `countries` VALUES(168, 'Portugal');
INSERT INTO `countries` VALUES(170, 'Qatar');
INSERT INTO `countries` VALUES(171, 'Reunion');
INSERT INTO `countries` VALUES(172, 'Romania');
INSERT INTO `countries` VALUES(173, 'Russian Federation');
INSERT INTO `countries` VALUES(174, 'Rwanda');
INSERT INTO `countries` VALUES(175, 'Saint Kitts and Nevis');
INSERT INTO `countries` VALUES(176, 'Saint Lucia');
INSERT INTO `countries` VALUES(177, 'St. Vincent & the Grenad.');
INSERT INTO `countries` VALUES(178, 'Samoa');
INSERT INTO `countries` VALUES(180, 'Sao Tome and Principe');
INSERT INTO `countries` VALUES(181, 'Saudi Arabia');
INSERT INTO `countries` VALUES(183, 'Serbia');
INSERT INTO `countries` VALUES(184, 'Seychelles');
INSERT INTO `countries` VALUES(185, 'Singapore');
INSERT INTO `countries` VALUES(186, 'Slovakia');
INSERT INTO `countries` VALUES(187, 'Slovenia');
INSERT INTO `countries` VALUES(188, 'Solomon Islands');
INSERT INTO `countries` VALUES(189, 'Somalia');
INSERT INTO `countries` VALUES(190, 'South Sudan');
INSERT INTO `countries` VALUES(191, 'Spain');
INSERT INTO `countries` VALUES(192, 'Sri Lanka');
INSERT INTO `countries` VALUES(193, 'Sudan');
INSERT INTO `countries` VALUES(194, 'Suriname');
INSERT INTO `countries` VALUES(195, 'Swaziland');
INSERT INTO `countries` VALUES(196, 'Sweden');
INSERT INTO `countries` VALUES(197, 'Switzerland');
INSERT INTO `countries` VALUES(198, 'Syrian Arab Republic');
INSERT INTO `countries` VALUES(199, 'Taiwan');
INSERT INTO `countries` VALUES(200, 'Tajikistan');
INSERT INTO `countries` VALUES(201, 'Tanzania, United Rep. of');
INSERT INTO `countries` VALUES(202, 'Thailand');
INSERT INTO `countries` VALUES(203, 'Togo');
INSERT INTO `countries` VALUES(204, 'Tonga');
INSERT INTO `countries` VALUES(205, 'Trinidad & Tobago');
INSERT INTO `countries` VALUES(206, 'Tunisia');
INSERT INTO `countries` VALUES(207, 'Turkey');
INSERT INTO `countries` VALUES(208, 'Turkmenistan');
INSERT INTO `countries` VALUES(209, 'Uganda');
INSERT INTO `countries` VALUES(210, 'Ukraine');
INSERT INTO `countries` VALUES(211, 'United Arab Emirates');
INSERT INTO `countries` VALUES(212, 'Uruguay');
INSERT INTO `countries` VALUES(213, 'Uzbekistan');
INSERT INTO `countries` VALUES(214, 'Vanuatu');
INSERT INTO `countries` VALUES(215, 'Venezuela');
INSERT INTO `countries` VALUES(216, 'Viet Nam');
INSERT INTO `countries` VALUES(217, 'Virgin Islands, U.S.');
INSERT INTO `countries` VALUES(218, 'Yemen');
INSERT INTO `countries` VALUES(219, 'Zambia');
INSERT INTO `countries` VALUES(220, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `dialing_code`
--

CREATE TABLE `dialing_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dialing_code` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=247 ;

--
-- Dumping data for table `dialing_code`
--

INSERT INTO `dialing_code` VALUES(1, 'AF', 'Afghanistan', 93);
INSERT INTO `dialing_code` VALUES(2, 'AX', 'Aland Islands', 0);
INSERT INTO `dialing_code` VALUES(3, 'AL', 'Albania', 355);
INSERT INTO `dialing_code` VALUES(4, 'DZ', 'Algeria', 213);
INSERT INTO `dialing_code` VALUES(5, 'AS', 'American Samoa', 1);
INSERT INTO `dialing_code` VALUES(6, 'AD', 'Andorra', 376);
INSERT INTO `dialing_code` VALUES(7, 'AO', 'Angola', 244);
INSERT INTO `dialing_code` VALUES(8, 'AI', 'Anguilla', 1);
INSERT INTO `dialing_code` VALUES(9, 'AQ', 'Antarctica', 0);
INSERT INTO `dialing_code` VALUES(10, 'AG', 'Antigua and Barbuda', 1);
INSERT INTO `dialing_code` VALUES(11, 'AR', 'Argentina', 54);
INSERT INTO `dialing_code` VALUES(12, 'AM', 'Armenia', 374);
INSERT INTO `dialing_code` VALUES(13, 'AW', 'Aruba', 297);
INSERT INTO `dialing_code` VALUES(14, 'AU', 'Australia', 61);
INSERT INTO `dialing_code` VALUES(15, 'AT', 'Austria', 43);
INSERT INTO `dialing_code` VALUES(16, 'AZ', 'Azerbaijan', 994);
INSERT INTO `dialing_code` VALUES(17, 'BS', 'Bahamas', 1);
INSERT INTO `dialing_code` VALUES(18, 'BH', 'Bahrain', 973);
INSERT INTO `dialing_code` VALUES(19, 'BD', 'Bangladesh', 880);
INSERT INTO `dialing_code` VALUES(20, 'BB', 'Barbados', 1);
INSERT INTO `dialing_code` VALUES(21, 'BY', 'Belarus', 375);
INSERT INTO `dialing_code` VALUES(22, 'BE', 'Belgium', 32);
INSERT INTO `dialing_code` VALUES(23, 'BZ', 'Belize', 501);
INSERT INTO `dialing_code` VALUES(24, 'BJ', 'Benin', 229);
INSERT INTO `dialing_code` VALUES(25, 'BM', 'Bermuda', 1);
INSERT INTO `dialing_code` VALUES(26, 'BT', 'Bhutan', 975);
INSERT INTO `dialing_code` VALUES(27, 'BO', 'Bolivia', 591);
INSERT INTO `dialing_code` VALUES(28, 'BA', 'Bosnia and Herzegovina', 387);
INSERT INTO `dialing_code` VALUES(29, 'BW', 'Botswana', 267);
INSERT INTO `dialing_code` VALUES(30, 'BV', 'Bouvet Island', 0);
INSERT INTO `dialing_code` VALUES(31, 'BR', 'Brazil', 55);
INSERT INTO `dialing_code` VALUES(32, 'IO', 'British Indian Ocean Territory', 1);
INSERT INTO `dialing_code` VALUES(33, 'BN', 'Brunei Darussalam', 673);
INSERT INTO `dialing_code` VALUES(34, 'BG', 'Bulgaria', 359);
INSERT INTO `dialing_code` VALUES(35, 'BF', 'Burkina Faso', 226);
INSERT INTO `dialing_code` VALUES(36, 'BI', 'Burundi', 257);
INSERT INTO `dialing_code` VALUES(37, 'KH', 'Cambodia', 855);
INSERT INTO `dialing_code` VALUES(38, 'CM', 'Cameroon', 237);
INSERT INTO `dialing_code` VALUES(39, 'CA', 'Canada', 1);
INSERT INTO `dialing_code` VALUES(40, 'CV', 'Cape Verde', 238);
INSERT INTO `dialing_code` VALUES(41, 'KY', 'Cayman Islands', 1);
INSERT INTO `dialing_code` VALUES(42, 'CF', 'Central African Republic', 236);
INSERT INTO `dialing_code` VALUES(43, 'TD', 'Chad', 235);
INSERT INTO `dialing_code` VALUES(44, 'CL', 'Chile', 56);
INSERT INTO `dialing_code` VALUES(45, 'CN', 'China', 86);
INSERT INTO `dialing_code` VALUES(46, 'CX', 'Christmas Island', 0);
INSERT INTO `dialing_code` VALUES(47, 'CC', 'Cocos (Keeling) Islands', 0);
INSERT INTO `dialing_code` VALUES(48, 'CO', 'Colombia', 57);
INSERT INTO `dialing_code` VALUES(49, 'KM', 'Comoros', 269);
INSERT INTO `dialing_code` VALUES(50, 'CG', 'Congo', 242);
INSERT INTO `dialing_code` VALUES(51, 'CD', 'Congo, Democratic Republic of the', 243);
INSERT INTO `dialing_code` VALUES(52, 'CK', 'Cook Islands', 682);
INSERT INTO `dialing_code` VALUES(53, 'CR', 'Costa Rica', 506);
INSERT INTO `dialing_code` VALUES(54, 'CI', 'Côte d''Ivoire', 225);
INSERT INTO `dialing_code` VALUES(55, 'HR', 'Croatia', 385);
INSERT INTO `dialing_code` VALUES(56, 'CU', 'Cuba', 53);
INSERT INTO `dialing_code` VALUES(57, 'CY', 'Cyprus', 357);
INSERT INTO `dialing_code` VALUES(58, 'CZ', 'Czech Republic', 420);
INSERT INTO `dialing_code` VALUES(59, 'DK', 'Denmark', 45);
INSERT INTO `dialing_code` VALUES(60, 'DJ', 'Djibouti', 253);
INSERT INTO `dialing_code` VALUES(61, 'DM', 'Dominica', 1);
INSERT INTO `dialing_code` VALUES(62, 'DO', 'Dominican Republic', 1);
INSERT INTO `dialing_code` VALUES(63, 'EC', 'Ecuador', 593);
INSERT INTO `dialing_code` VALUES(64, 'EG', 'Egypt', 20);
INSERT INTO `dialing_code` VALUES(65, 'SV', 'El Salvador', 503);
INSERT INTO `dialing_code` VALUES(66, 'GQ', 'Equatorial Guinea', 240);
INSERT INTO `dialing_code` VALUES(67, 'ER', 'Eritrea', 291);
INSERT INTO `dialing_code` VALUES(68, 'EE', 'Estonia', 372);
INSERT INTO `dialing_code` VALUES(69, 'ET', 'Ethiopia', 251);
INSERT INTO `dialing_code` VALUES(70, 'FK', 'Falkland Islands (Malvinas)', 500);
INSERT INTO `dialing_code` VALUES(71, 'FO', 'Faroe Islands', 298);
INSERT INTO `dialing_code` VALUES(72, 'FJ', 'Fiji', 679);
INSERT INTO `dialing_code` VALUES(73, 'FI', 'Finland', 358);
INSERT INTO `dialing_code` VALUES(74, 'FR', 'France', 33);
INSERT INTO `dialing_code` VALUES(75, 'GF', 'French Guiana', 594);
INSERT INTO `dialing_code` VALUES(76, 'PF', 'French Polynesia', 689);
INSERT INTO `dialing_code` VALUES(77, 'TF', 'French Southern Territories', 262);
INSERT INTO `dialing_code` VALUES(78, 'GA', 'Gabon', 241);
INSERT INTO `dialing_code` VALUES(79, 'GM', 'Gambia', 220);
INSERT INTO `dialing_code` VALUES(80, 'GE', 'Georgia', 995);
INSERT INTO `dialing_code` VALUES(81, 'DE', 'Germany', 49);
INSERT INTO `dialing_code` VALUES(82, 'GH', 'Ghana', 233);
INSERT INTO `dialing_code` VALUES(83, 'GI', 'Gibraltar', 350);
INSERT INTO `dialing_code` VALUES(84, 'GR', 'Greece', 30);
INSERT INTO `dialing_code` VALUES(85, 'GL', 'Greenland', 299);
INSERT INTO `dialing_code` VALUES(86, 'GD', 'Grenada', 1);
INSERT INTO `dialing_code` VALUES(87, 'GP', 'Guadeloupe', 590);
INSERT INTO `dialing_code` VALUES(88, 'GU', 'Guam', 1);
INSERT INTO `dialing_code` VALUES(89, 'GT', 'Guatemala', 502);
INSERT INTO `dialing_code` VALUES(90, 'GG', 'Guernsey', 0);
INSERT INTO `dialing_code` VALUES(91, 'GN', 'Guinea', 224);
INSERT INTO `dialing_code` VALUES(92, 'GW', 'Guinea-Bissau', 245);
INSERT INTO `dialing_code` VALUES(93, 'GY', 'Guyana', 592);
INSERT INTO `dialing_code` VALUES(94, 'HT', 'Haiti', 509);
INSERT INTO `dialing_code` VALUES(95, 'HM', 'Heard Island and McDonald Islands', 0);
INSERT INTO `dialing_code` VALUES(96, 'VA', 'Holy See (Vatican City State)', 0);
INSERT INTO `dialing_code` VALUES(97, 'HN', 'Honduras', 504);
INSERT INTO `dialing_code` VALUES(98, 'HK', 'Hong Kong', 852);
INSERT INTO `dialing_code` VALUES(99, 'HU', 'Hungary', 36);
INSERT INTO `dialing_code` VALUES(100, 'IS', 'Iceland', 354);
INSERT INTO `dialing_code` VALUES(101, 'IN', 'India', 91);
INSERT INTO `dialing_code` VALUES(102, 'ID', 'Indonesia', 62);
INSERT INTO `dialing_code` VALUES(103, 'IR', 'Iran, Islamic Republic of', 98);
INSERT INTO `dialing_code` VALUES(104, 'IQ', 'Iraq', 964);
INSERT INTO `dialing_code` VALUES(105, 'IE', 'Ireland', 353);
INSERT INTO `dialing_code` VALUES(106, 'IM', 'Isle of Man', 0);
INSERT INTO `dialing_code` VALUES(107, 'IL', 'Israel', 972);
INSERT INTO `dialing_code` VALUES(108, 'IT', 'Italy', 39);
INSERT INTO `dialing_code` VALUES(109, 'JM', 'Jamaica', 1);
INSERT INTO `dialing_code` VALUES(110, 'JP', 'Japan', 81);
INSERT INTO `dialing_code` VALUES(111, 'JE', 'Jersey', 0);
INSERT INTO `dialing_code` VALUES(112, 'JO', 'Jordan', 962);
INSERT INTO `dialing_code` VALUES(113, 'KZ', 'Kazakhstan', 7);
INSERT INTO `dialing_code` VALUES(114, 'KE', 'Kenya', 254);
INSERT INTO `dialing_code` VALUES(115, 'KI', 'Kiribati', 686);
INSERT INTO `dialing_code` VALUES(116, 'KP', 'Korea, Democratic People''s Republic of', 850);
INSERT INTO `dialing_code` VALUES(117, 'KR', 'Korea, Republic of', 82);
INSERT INTO `dialing_code` VALUES(118, 'KW', 'Kuwait', 965);
INSERT INTO `dialing_code` VALUES(119, 'KG', 'Kyrgyzstan', 996);
INSERT INTO `dialing_code` VALUES(120, 'LA', 'Lao People''s Democratic Republic', 856);
INSERT INTO `dialing_code` VALUES(121, 'LV', 'Latvia', 371);
INSERT INTO `dialing_code` VALUES(122, 'LB', 'Lebanon', 961);
INSERT INTO `dialing_code` VALUES(123, 'LS', 'Lesotho', 266);
INSERT INTO `dialing_code` VALUES(124, 'LR', 'Liberia', 231);
INSERT INTO `dialing_code` VALUES(125, 'LY', 'Libyan Arab Jamahiriya', 218);
INSERT INTO `dialing_code` VALUES(126, 'LI', 'Liechtenstein', 423);
INSERT INTO `dialing_code` VALUES(127, 'LT', 'Lithuania', 370);
INSERT INTO `dialing_code` VALUES(128, 'LU', 'Luxembourg', 352);
INSERT INTO `dialing_code` VALUES(129, 'MO', 'Macao', 853);
INSERT INTO `dialing_code` VALUES(130, 'MK', 'Macedonia, the former Yugoslav Republic of', 0);
INSERT INTO `dialing_code` VALUES(131, 'MG', 'Madagascar', 261);
INSERT INTO `dialing_code` VALUES(132, 'MW', 'Malawi', 265);
INSERT INTO `dialing_code` VALUES(133, 'MY', 'Malaysia', 60);
INSERT INTO `dialing_code` VALUES(134, 'MV', 'Maldives', 960);
INSERT INTO `dialing_code` VALUES(135, 'ML', 'Mali', 223);
INSERT INTO `dialing_code` VALUES(136, 'MT', 'Malta', 356);
INSERT INTO `dialing_code` VALUES(137, 'MH', 'Marshall Islands', 692);
INSERT INTO `dialing_code` VALUES(138, 'MQ', 'Martinique', 596);
INSERT INTO `dialing_code` VALUES(139, 'MR', 'Mauritania', 222);
INSERT INTO `dialing_code` VALUES(140, 'MU', 'Mauritius', 230);
INSERT INTO `dialing_code` VALUES(141, 'YT', 'Mayotte', 269);
INSERT INTO `dialing_code` VALUES(142, 'MX', 'Mexico', 52);
INSERT INTO `dialing_code` VALUES(143, 'FM', 'Micronesia, Federated States of', 691);
INSERT INTO `dialing_code` VALUES(144, 'MD', 'Moldova', 373);
INSERT INTO `dialing_code` VALUES(145, 'MC', 'Monaco', 377);
INSERT INTO `dialing_code` VALUES(146, 'MN', 'Mongolia', 976);
INSERT INTO `dialing_code` VALUES(147, 'ME', 'Montenegro', 382);
INSERT INTO `dialing_code` VALUES(148, 'MS', 'Montserrat', 1);
INSERT INTO `dialing_code` VALUES(149, 'MA', 'Morocco', 212);
INSERT INTO `dialing_code` VALUES(150, 'MZ', 'Mozambique', 258);
INSERT INTO `dialing_code` VALUES(151, 'MM', 'Myanmar', 95);
INSERT INTO `dialing_code` VALUES(152, 'NA', 'Namibia', 264);
INSERT INTO `dialing_code` VALUES(153, 'NR', 'Nauru', 674);
INSERT INTO `dialing_code` VALUES(154, 'NP', 'Nepal', 977);
INSERT INTO `dialing_code` VALUES(155, 'NL', 'Netherlands', 31);
INSERT INTO `dialing_code` VALUES(156, 'AN', 'Netherlands Antilles', 599);
INSERT INTO `dialing_code` VALUES(157, 'NC', 'New Caledonia', 687);
INSERT INTO `dialing_code` VALUES(158, 'NZ', 'New Zealand', 64);
INSERT INTO `dialing_code` VALUES(159, 'NI', 'Nicaragua', 505);
INSERT INTO `dialing_code` VALUES(160, 'NE', 'Niger', 227);
INSERT INTO `dialing_code` VALUES(161, 'NG', 'Nigeria', 234);
INSERT INTO `dialing_code` VALUES(162, 'NU', 'Niue', 683);
INSERT INTO `dialing_code` VALUES(163, 'NF', 'Norfolk Island', 0);
INSERT INTO `dialing_code` VALUES(164, 'MP', 'Northern Mariana Islands', 1);
INSERT INTO `dialing_code` VALUES(165, 'NO', 'Norway', 47);
INSERT INTO `dialing_code` VALUES(166, 'OM', 'Oman', 968);
INSERT INTO `dialing_code` VALUES(167, 'PK', 'Pakistan', 92);
INSERT INTO `dialing_code` VALUES(168, 'PW', 'Palau', 680);
INSERT INTO `dialing_code` VALUES(169, 'PS', 'Palestinian Territory, Occupied', 0);
INSERT INTO `dialing_code` VALUES(170, 'PA', 'Panama', 507);
INSERT INTO `dialing_code` VALUES(171, 'PG', 'Papua New Guinea', 675);
INSERT INTO `dialing_code` VALUES(172, 'PY', 'Paraguay', 595);
INSERT INTO `dialing_code` VALUES(173, 'PE', 'Peru', 51);
INSERT INTO `dialing_code` VALUES(174, 'PH', 'Philippines', 63);
INSERT INTO `dialing_code` VALUES(175, 'PN', 'Pitcairn', 0);
INSERT INTO `dialing_code` VALUES(176, 'PL', 'Poland', 48);
INSERT INTO `dialing_code` VALUES(177, 'PT', 'Portugal', 351);
INSERT INTO `dialing_code` VALUES(178, 'PR', 'Puerto Rico', 1);
INSERT INTO `dialing_code` VALUES(179, 'QA', 'Qatar', 974);
INSERT INTO `dialing_code` VALUES(180, 'RE', 'R閡nion', 0);
INSERT INTO `dialing_code` VALUES(181, 'RO', 'Romania', 40);
INSERT INTO `dialing_code` VALUES(182, 'RU', 'Russian Federation', 7);
INSERT INTO `dialing_code` VALUES(183, 'RW', 'Rwanda', 250);
INSERT INTO `dialing_code` VALUES(184, 'BL', 'Saint Barth閘emy', 0);
INSERT INTO `dialing_code` VALUES(185, 'SH', 'Saint Helena', 290);
INSERT INTO `dialing_code` VALUES(186, 'KN', 'Saint Kitts and Nevis', 1);
INSERT INTO `dialing_code` VALUES(187, 'LC', 'Saint Lucia', 1);
INSERT INTO `dialing_code` VALUES(188, 'MF', 'Saint Martin (French part)', 0);
INSERT INTO `dialing_code` VALUES(189, 'PM', 'Saint Pierre and Miquelon', 508);
INSERT INTO `dialing_code` VALUES(190, 'VC', 'Saint Vincent and the Grenadines', 1);
INSERT INTO `dialing_code` VALUES(191, 'WS', 'Samoa', 685);
INSERT INTO `dialing_code` VALUES(192, 'SM', 'San Marino', 378);
INSERT INTO `dialing_code` VALUES(193, 'ST', 'Sao Tome and Principe', 239);
INSERT INTO `dialing_code` VALUES(194, 'SA', 'Saudi Arabia', 966);
INSERT INTO `dialing_code` VALUES(195, 'SN', 'Senegal', 221);
INSERT INTO `dialing_code` VALUES(196, 'RS', 'Serbia', 381);
INSERT INTO `dialing_code` VALUES(197, 'SC', 'Seychelles', 248);
INSERT INTO `dialing_code` VALUES(198, 'SL', 'Sierra Leone', 232);
INSERT INTO `dialing_code` VALUES(199, 'SG', 'Singapore', 65);
INSERT INTO `dialing_code` VALUES(200, 'SK', 'Slovak', 421);
INSERT INTO `dialing_code` VALUES(201, 'SI', 'Slovenia', 386);
INSERT INTO `dialing_code` VALUES(202, 'SB', 'Solomon Islands', 677);
INSERT INTO `dialing_code` VALUES(203, 'SO', 'Somalia', 252);
INSERT INTO `dialing_code` VALUES(204, 'ZA', 'South Africa', 27);
INSERT INTO `dialing_code` VALUES(205, 'GS', 'South Georgia and the South Sandwich Islands', 0);
INSERT INTO `dialing_code` VALUES(206, 'ES', 'Spain', 34);
INSERT INTO `dialing_code` VALUES(207, 'LK', 'Sri Lanka', 94);
INSERT INTO `dialing_code` VALUES(208, 'SD', 'Sudan', 249);
INSERT INTO `dialing_code` VALUES(209, 'SR', 'Suriname', 597);
INSERT INTO `dialing_code` VALUES(210, 'SJ', 'Svalbard and Jan Mayen', 0);
INSERT INTO `dialing_code` VALUES(211, 'SZ', 'Swaziland', 268);
INSERT INTO `dialing_code` VALUES(212, 'SE', 'Sweden', 46);
INSERT INTO `dialing_code` VALUES(213, 'CH', 'Switzerland', 41);
INSERT INTO `dialing_code` VALUES(214, 'SY', 'Syrian Arab Republic', 963);
INSERT INTO `dialing_code` VALUES(215, 'TW', 'Taiwan, Province of China', 886);
INSERT INTO `dialing_code` VALUES(216, 'TJ', 'Tajikistan', 992);
INSERT INTO `dialing_code` VALUES(217, 'TZ', 'Tanzania, United Republic of', 255);
INSERT INTO `dialing_code` VALUES(218, 'TH', 'Thailand', 66);
INSERT INTO `dialing_code` VALUES(219, 'TL', 'Timor-Leste', 0);
INSERT INTO `dialing_code` VALUES(220, 'TG', 'Togo', 228);
INSERT INTO `dialing_code` VALUES(221, 'TK', 'Tokelau', 690);
INSERT INTO `dialing_code` VALUES(222, 'TO', 'Tonga', 676);
INSERT INTO `dialing_code` VALUES(223, 'TT', 'Trinidad and Tobago', 1);
INSERT INTO `dialing_code` VALUES(224, 'TN', 'Tunisia', 216);
INSERT INTO `dialing_code` VALUES(225, 'TR', 'Turkey', 90);
INSERT INTO `dialing_code` VALUES(226, 'TM', 'Turkmenistan', 993);
INSERT INTO `dialing_code` VALUES(227, 'TC', 'Turks and Caicos Islands', 1);
INSERT INTO `dialing_code` VALUES(228, 'TV', 'Tuvalu', 688);
INSERT INTO `dialing_code` VALUES(229, 'UG', 'Uganda', 256);
INSERT INTO `dialing_code` VALUES(230, 'UA', 'Ukraine', 380);
INSERT INTO `dialing_code` VALUES(231, 'AE', 'United Arab Emirates', 971);
INSERT INTO `dialing_code` VALUES(232, 'GB', 'United Kingdom of Great Britain and Northern Ireland', 44);
INSERT INTO `dialing_code` VALUES(233, 'US', 'United States of America', 1);
INSERT INTO `dialing_code` VALUES(234, 'UM', 'United States Minor Outlying Islands', 0);
INSERT INTO `dialing_code` VALUES(235, 'UY', 'Uruguay', 598);
INSERT INTO `dialing_code` VALUES(236, 'UZ', 'Uzbekistan', 998);
INSERT INTO `dialing_code` VALUES(237, 'VU', 'Vanuatu', 678);
INSERT INTO `dialing_code` VALUES(238, 'VE', 'Venezuela', 58);
INSERT INTO `dialing_code` VALUES(239, 'VN', 'Viet Nam', 84);
INSERT INTO `dialing_code` VALUES(240, 'VG', 'Virgin Islands, British', 0);
INSERT INTO `dialing_code` VALUES(241, 'VI', 'Virgin Islands, U.S.', 0);
INSERT INTO `dialing_code` VALUES(242, 'WF', 'Wallis and Futuna', 681);
INSERT INTO `dialing_code` VALUES(243, 'EH', 'Western Sahara', 0);
INSERT INTO `dialing_code` VALUES(244, 'YE', 'Yemen', 967);
INSERT INTO `dialing_code` VALUES(245, 'ZM', 'Zambia', 260);
INSERT INTO `dialing_code` VALUES(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favourite_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  PRIMARY KEY (`favourite_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` VALUES(1, 5, 1);
INSERT INTO `favourites` VALUES(2, 5, 5);
INSERT INTO `favourites` VALUES(10, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `site_url` varchar(85) NOT NULL,
  `site_email` varchar(85) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` VALUES(1, 'localhost/officelisting.ca', 'patrick@appslogix.ca');

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `space_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `suite_number` int(11) NOT NULL,
  `square_footage` int(11) NOT NULL,
  `lease_term` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `monthly_rents` decimal(10,2) NOT NULL,
  `email_list_optin` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `space_active` int(1) NOT NULL,
  PRIMARY KEY (`space_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` VALUES(1, 0, 1, 342, 1500, 'Long term', 'This is a recently renovated units.', 'Patrick', 'Ejelle-Ndille', 'patrickndille@gmail.com', 2147483647, 3000.00, 0, '8000983c69584c67ee55e71ff37ee056ecead0cb.jpg', 1);
INSERT INTO `spaces` VALUES(3, 0, 3, 501, 1800, 'Short Term', 'this is a short term lease', 'Olivier', 'Kingston', 'olivier@mail.com', 2147483647, 2500.00, 0, '', 1);
INSERT INTO `spaces` VALUES(5, 0, 3, 343, 898, 'Immediate', 'immediate for rent by landlord', 'Sanili', 'Ngupa', 'ngupa@gmail.com', 2147483647, 2000.00, 0, '', 1);
INSERT INTO `spaces` VALUES(6, 0, 3, 9999, 9999, 'terms', 'descriptions', 'paddys', 'escobas', 'escobas@paddymail.com', 2147483647, 9000.00, 0, '', 1);
INSERT INTO `spaces` VALUES(7, 0, 3, 4013, 3900, 'Long Term', 'This is an office that was listed by a user', 'Esther', 'Fletcher', 'esther@fletcher.com', 2147483647, 4000.00, 0, '', 1);
INSERT INTO `spaces` VALUES(8, 0, 3, 701, 2100, 'Long Term', 'This is a newly renovated office that we are looking to get someone to  rent for 1400 a month. Let me know if you are interested', 'Donald', 'Swanson', 'do_swan@gmail.com', 647, 1400.00, 0, '', 1);
INSERT INTO `spaces` VALUES(9, 0, 3, 69, 1000, 'Monthly', 'This is another test building with a plus....', 'Patrick', 'Ejelle-Ndille', 'patrick@appslogix.ca', 647, 1450.00, 0, '', 1);
INSERT INTO `spaces` VALUES(10, 0, 3, 888, 2570, 'Long term', 'This is gross. Lol', 'Belinda', 'Koskovsky', 'belkoskov@gmail.com', 987654321, 7000.00, 0, '', 1);
INSERT INTO `spaces` VALUES(11, 0, 3, 112, 1112, 'Daily', 'Created from user account', 'Pablo', 'Escobar', 'pablo@escobar.com', 2147483647, 9000.00, 0, '', 1);
INSERT INTO `spaces` VALUES(13, 5, 3, 1800, 2330, 'Monthly', 'This is a large office space in a very prestigious building. You will have the opportunity to be in the mist of several large companies like Verision, IBM, Intel, MicroSoft etc.', 'Patrick', 'Ndille', 'patrick@appslogix.ca', 2147483647, 4525.00, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(9) NOT NULL,
  `password` varchar(32) NOT NULL,
  `temp_pass` varchar(32) NOT NULL,
  `temp_pass_active` int(1) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dialing_code` int(5) NOT NULL,
  `phone` int(25) NOT NULL,
  `city` varchar(80) NOT NULL,
  `country` varchar(80) NOT NULL,
  `thumb_path` varchar(150) NOT NULL,
  `img_path` varchar(150) NOT NULL,
  `active` int(1) NOT NULL,
  `level_access` int(1) NOT NULL,
  `act_key` varchar(80) NOT NULL,
  `reg_date` varchar(45) NOT NULL,
  `last_active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'user1', '317da97d438875c141a4b5f9f67dfdd0', 'd0ygOllq', 0, 'John', 'Doe', 'test@localhost', 254, 723456789, 'Kigali', 'Afghanistan', '', '', 1, 2, '', 'Wednesday, Sep 28, 2011, 8:47 am', '');
INSERT INTO `users` VALUES(2, 'admin', '317da97d438875c141a4b5f9f67dfdd0', '7XxhOeEU', 1, 'Site', 'Admin', 'patrick@appslogix.ca', 1, 2147483647, 'Toronto', 'Canada', '', '', 1, 1, '', '', '');
INSERT INTO `users` VALUES(3, 'user2', '2c5c4e7fd92598deeecbcd8da0edb373', '', 0, 'Jane', 'Doe', 'user2@mail.com', 0, 0, '', 'Kenya', '', '', 2, 2, '', 'Wednesday, Dec 21, 2011, 6:06 am', '');
INSERT INTO `users` VALUES(5, 'appslogix', '996da2ce0ab38466500e7a121220d3e6', '', 0, '', '', 'info@appslogix.ca', 0, 0, '', '', '', '', 1, 2, 'fb41d70a239d59a569b2800da2cb615f', 'Saturday, Jun 29, 2013, 9:40 am', '');
