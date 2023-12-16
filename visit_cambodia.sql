-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 11:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visit_cambodia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CateID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CateID`, `Category`) VALUES
(1, 'Place To Visit'),
(2, 'Package Tour'),
(3, 'Transpotation'),
(4, 'Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `tbldata`
--

CREATE TABLE `tbldata` (
  `id` int(11) NOT NULL,
  `CateID` int(11) NOT NULL,
  `DateIn` datetime NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `DesURL` varchar(1000) NOT NULL,
  `ImageUrl` varchar(1000) NOT NULL,
  `ProName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldata`
--

INSERT INTO `tbldata` (`id`, `CateID`, `DateIn`, `Description`, `DesURL`, `ImageUrl`, `ProName`) VALUES
(3, 1, '2023-11-22 12:11:18', '                Phnom Penh is the capital and most populous city of Cambodia. It has been the national capital since the French protectorate of Cambodia and has grown to become the nation\'s primate city and its economic, industrial, and cultural centre.            ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/667592199Phnom-Penh.webp', 'Phnom Penh'),
(4, 1, '2023-11-22 12:11:41', 'Angkor Wat is a temple complex in Cambodia, located on a site measuring 162.6 hectares. The Guinness World Records considers it as the largest religious structure in the world. \r\n', 'https://images.search.yahoo.com/search/images;_ylt=AwrgN8NB311lTHkR7TxXNyoA;_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=Angkor+Wat+Temple&fr2=piv-web&type=E210US885G0&fr=mcafee#id=5&iurl=https%3A%2F%2Fwww.fodors.com%2Fwp-content%2Fuploads%2F2018%2F10%2F06_Angkor101_SunsetTemples_shutterstock_328490993.jpg&action=click', '../images/374941822Siem Reap Teample.jpg', 'Angkor Wat Temple'),
(5, 1, '2023-11-22 12:11:43', 'Sihanoukville, also known as Kampong Som, is a coastal city in Cambodia and the capital of Preah Sihanouk Province, at the tip of an elevated peninsula in the country\'s south-west on the Gulf of Thailand.           ', 'https://www.booking.com/city/kh/kampong-saom.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/60088777Sihanoukvile.webp', 'Sihanoukvile'),
(6, 1, '2023-11-22 16:11:34', '             Kampot is a city in southern Cambodia and the capital of Kampot Province. It is on the Praek Tuek Chhu River southeast of the Elephant Mountains and around 5 km from the Gulf of Thailand.                ', 'https://www.booking.com/city/kh/kampot.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1791075805Kampot.webp', 'Kampot'),
(9, 1, '2023-11-22 16:11:59', '                     Koh Rong is the second largest island of Cambodia. The word Rong might refer to an old term for cave or tunnel although some islanders say Rong refers to a historical person\'s name.        ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/2050094935koh-Rong-Island.webp', 'Koh Rong Island'),
(11, 1, '2023-11-22 16:11:22', '        Pub Street is located in the south end of central Siem Reap, steps from the Old Market and Night Market, and, more importantly, from Mad Monkey Siem Reap. You’ll find it labeled on city maps as “Street 8.” ', 'https://madmonkeyhostels.com/h2o_blog/pub-street-siem-reap-ultimate-guide-2017/', '../images/1682510685Pub Street.jpg', 'Pub Street '),
(12, 1, '2023-11-22 16:11:39', '       Kampot is famous for its remarkable natural beauty, including the Bokor National Park, the Kampot River, and the nearby beaches.', 'https://www.google.com/search?sca_esv=582587607&sxsrf=AM9HkKnmRGu53NrFPVNty-KD4opTbWFU7w:1700045604323&q=Krong+Kampot&si=ALGXSlYh1-GEPndq7qMo--O-TPixQtNN4JMroSxgItz5kq0stNLrBRT7AmQndP1Jb4dP_msBS6UdhRc4994PZ2rg3DcFmZHQQg%3D%3D&sa=X&ved=2ahUKEwjZwOOy68WCAxWVmFYBHZfMAo4Qs4ILegQIFRAB&biw=1536&bih=707&dpr=1.25', '../images/1802386755krong Kampot.jpg', 'Krong Kampot'),
(22, 1, '2023-11-22 16:11:28', '                            Koh Rong Sanloem is an island off the coast of Sihanoukville, Cambodia, 4 km south of Koh Rong. It is around 9 km long, 4 km wide and 1 km wide at its narrowest point.', 'https://www.booking.com/city/kh/koh-rong-samloem.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/535526342Koh-Rong-Saloem.webp', 'Koh Rong Sanloem'),
(23, 1, '2023-11-22 16:11:14', '                            Kep is the smallest province of Cambodia covering 336 km2, with a population of 41,798. It is one of the newest Cambodian provinces, together with Pailin, Sihanoukville and Tboung Khmum, created by Royal Decree on 22 December 2008, which separated.', 'https://www.booking.com/city/kh/kep.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1957123120Kep.webp', 'Kep'),
(24, 1, '2023-11-22 16:11:39', '                Battambang is the capital of Battambang Province and the third largest city in Cambodia. Founded in the 11th century by the Khmer Empire, Battambang is the leading rice-producing province of the country.            ', 'https://www.booking.com/city/kh/batdambang.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/378191524Battambong.webp', 'Battambang'),
(25, 2, '2023-11-22 16:11:46', '                            Watch the sunrise at Angkor wat and soak up the early morning atmosphere. Spend the rest of the day at the temple hopping with a professional local guide, in a small group or choose a private tour for your group only.', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/150249752Angkor Wat Sunrise Small Group.jpg', 'Angkor Wat Sunrise Small Group'),
(26, 2, '2023-11-22 17:11:33', '                            Experience the beauty of a sunrise at Angkor wat, and explore serene backgrounds by cycling. Discover hidden paths and lesser-known areas of the temple complex. Appro 15-25km easy ride affe breakfast.', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/114958952Angkor Sunrise Expedition.jpg', 'Angkor Sunrise Expedition '),
(27, 2, '2023-11-22 17:11:04', '                            Discover the best of the Siem Reap’s temples, experience the Grand Circuit, and soak up the dawn atmosphere at Angkor Wat Before exploring its majestic temples.', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/13174900622 Days Temples with Sunrise – Small Group.jpg', '2 Days Temples with Sunrise – Small Group'),
(28, 2, '2023-11-22 17:11:21', '                            The Angkor temple complex is one of the larges religious sites in the world and one day is only enough to take in the highlights. This 2-day tour lets you cover more ground and discover less-visited gems such as Preah Khan & Ta Nei Temple', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/15905733042 Days Best Temples with sunset and sunrise – Private Tour.jpeg', '2 Days Best Temples with sunset and sunrise – Private Tour'),
(29, 2, '2023-11-22 17:11:37', '             Siem Reap offers a unique opportunity to interact with friendly locals in our villages, which are nestled amidst countless paddy fields. It’s the perfect place to explore Cambodia’s rural lifestyle.               ', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/626234138A Morning in the Cambodian Countryside.jpg', 'A Morning in the Cambodian Countryside'),
(30, 2, '2023-11-22 17:11:48', '                Explore the country and the real life of Cambodian local people. Take the boat cruise to visit the fishing villages, flooded forest and learn about the world’s second largest freshwater Tonle Sap Lake', 'https://www.journeycambodia.com/?gclid=CjwKCAiA9dGqBhAqEiwAmRpTC2Z8p3eipwjcroAY5sazkQuZ4XqLQKyYE2qd-CXFz2X2T6KWCfTrHhoCJm8QAvD_BwE#', '../images/1260029037Tonle Sap Fishing Village & Flooded Forest – Small Group.jpg', 'Tonle Sap Fishing Village & Flooded Forest – Small Group'),
(31, 2, '2023-11-22 17:11:18', '                            A supremely mellow riverside town, Kratie has an expansive riverfront and some of the best Mekong sunsets in Cambodia.', 'https://www.booking.com/city/kh/kracheh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/363602450kratie.webp', 'Dolphin watching, Sunsets, Nature in Kratie'),
(32, 2, '2023-11-22 17:11:00', 'The provincial capital of Mondulkiri, Sen Monorom is really an overgrown village, a charming community set in the spot where the legendary hills meet. In the centre of town are two lakes, leading some dreamers to call it ‘the Switzerland of Cambodia’.The area around Sen Monorom is peppered with minority villages and picturesque waterfalls, making it the ideal place to spend some time. ', 'https://www.booking.com/country/kh.en-gb.html?aid=1148957;gad_source=1;ws=;gclid=Cj0KCQjw-pyqBhDmARIsAKd9XIMjG6oUTrMJryIMPI9m-QjiXUTS7uHk9K-uJo7dh3AIYISY082eaXYaAoKBEALw_wcB;label=kh-Gkzi0fBd*kpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo ', '../images/1655347455Sen-Monorom.webp', 'Nature, Waterfalls, Nature walks in Sen Monorom'),
(33, 3, '2023-11-22 17:11:30', '                     Travel around Cambodia with professional taxi drivers and comfortable vehicles. We are able to arrange a transfer from A to B in all Cambodian provinces. Mango Taxi has driver teams in every large city in Cambodia. It allows providing a car within an hour. Our 24/7 support team stands ready to provide assistance with any questions. We have fully licensed tour guides who speak your languages that very passionate about their professionalism, to share their country’s History, Culture, Daily Life, and traditions.      ', 'https://mangotaxi.asia/our-services/', '../images/1474300873taxi.webp', 'Taxi'),
(34, 3, '2023-11-22 17:11:48', '                           Traveling to Cambodia or any other country, an Airport taxi transfer is always an important part of the trip. It is your first impression of the country.\r\nThere are many different ways to get from the airport to your destination in Cambodia, such as shuttle train, public buses, independent taxi and Tuk Tuk drivers at the airport arrival area. However, these transport services have several disadvantages – you need to stay in a line in the heat, you need to negotiate the price, which could be exhausting and stressful.\r\nDrivers may not have a license, the price could be overcharged, and eventually.\r\n\r\n ', 'https://mangotaxi.asia/our-services/', '../images/1710193745Airpot.webp', 'Airport Transfer'),
(35, 3, '2023-11-22 17:11:18', '                            From a business trip around the special economic zone to a real estate inspection trip – our drivers always ready to ride you from point to point and our support team will assist you with itinerary and schedule. For your convenience, we are able to offer a business minivan.', 'https://mangotaxi.asia/our-services/', '../images/1370128440bussiness travel.webp', 'Business Travel To Cambodia'),
(36, 3, '2023-11-22 17:11:15', '       You cant get there by car, but we’re happy to provide you with private speed boat. In 40 minutes you can reach most of popular resorts at Koh Rong and Koh Rong Samloem islands.\r\nNo waiting for the schedled ferry, no crowds – jump in to the boat directly from your car and enjoy stanning views over Cambodian islands and bays.\r\n                     ', 'https://mangotaxi.asia/our-services/', '../images/1156580149boat.webp', 'Boat'),
(37, 3, '2023-11-22 17:11:11', '                            The fastest way to reach any destination in Cambodia – is a chartered helicopter.', 'https://mangotaxi.asia/our-services/', '../images/769270712helipcopter.webp', 'Helicopter'),
(38, 4, '2023-11-29 10:11:31', '             Hotel in Siem Reap\r\n\r\n\r\n✔️   Popular with guests booking hotels in Siem Reap            ', 'https://www.booking.com/country/kh.en.html?aid=306395;label=kh-ed477Fe2Dc5J_J9WnlAlawS392865647257:pl:ta:p12120:p2:ac:ap:neg:fi:tiaud-146342136310:kwd-103784754:lp1009829:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c;ws=&gad_source=1&gclid=CjwKCAiA0syqBhBxEiwAeNx9N3-akwzWmU1thJ2ksZwClbkLjXKQIoVYG-VgApFDZY3Kjrw5S1GQwxoCx60QAvD_BwE', '../images/710126247Golden Temple Hotel.jpg', 'Golden Temple Hotel ⭐️⭐️⭐️⭐️'),
(39, 4, '2023-11-29 10:11:34', '                Hotel in Daun Penh, Phnom Penh\r\n\r\n✔️Popular with guests booking hotels in Phnom Penh.\r\n       ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/797206193Ohna Phnom Penh Palace Hotel.jpg', 'Ohna Phnom Penh Palace Hotel⭐️⭐️⭐️⭐️'),
(40, 4, '2023-11-29 10:11:38', '                   Hotel in Siem Reap\r\n\r\n✔️Popular with guests booking hotels in Phnom Penh\r\n         ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1220127020Anansaya La Maison.jpg', 'Anansaya La Maison ⭐️ ⭐️ ⭐️ ⭐️'),
(41, 4, '2023-11-29 10:11:43', '         Sen Monorom, Sen Monorom\r\n\r\n✔️Popular with guests booking hotels in Mondulkiri\r\n\r\n                   ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/264174075KNN Resort Mondulkiri.jpg', 'KNN Resort Mondulkiri ⭐️ ⭐️ ⭐️ ⭐️ ⭐️'),
(42, 4, '2023-11-29 10:11:16', '           Hotel in Siem Reap\r\n\r\n✔️Popular with guests booking hotels in Siem Reap                 ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1100096419Mane Boutique Hotel & Spa.jpg', 'Mane Boutique Hotel & Spa ⭐️ ⭐️ ⭐️ ⭐️'),
(43, 4, '2023-11-29 10:11:05', '                        Kampot, Kampot    \r\n\r\n✔️Popular with guests booking hotels in Kampot', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1354876436Peam Snea Resort.jpg', 'Peam Snea Resort ⭐️ ⭐️ ⭐️ ⭐️'),
(44, 4, '2023-11-29 10:11:43', '                  Hotel in Siem Reap \r\n\r\n✔️Popular with guests booking hotels in Siem Reap         ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/865018440Mane Colonial Classic.jpg', 'Mane Colonial Classic ⭐️ ⭐️ ⭐️ ⭐️ ⭐️'),
(45, 4, '2023-11-29 11:11:13', '                     Hotel in Chamkar Mon, Phnom Penh\r\n\r\n✔️Popular with guests booking hotels in Phnom Penh    ', 'https://www.booking.com/city/kh/phnom-penh.en-gb.html?aid=1148957&label=kh-Gkzi0fBd%2AkpI37BRUbr5TwS589480608125%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12620163402%3Alp1009829%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YYriJK-Ikd_d_R21tvRGSUo&sid=7c2f37144144a4c43f21531b7ab8a840', '../images/1056061062SUN & MOON, Riverside Hotel.jpg', 'SUN & MOON, Riverside Hotel⭐️ ⭐️ ⭐️ ⭐️ ⭐️'),
(46, 1, '2023-11-29 11:11:48', '      Tonlé Sap is a lake in the northwest of Cambodia. It belongs to the Mekong River system. It is the largest freshwater lake in Southeast Asia and one of the most diverse and productive ecosystems in the world.                    ', 'https://www.google.com/search?sca_esv=586234374&sxsrf=AM9HkKn_xGeZqFTukeiqUwBR1kiTmZR4rQ:1701253405223&q=Tonl%C3%A9+Sap&stick=H4sIAAAAAAAAAOOQUeLUz9U3MCy0sDQ1kkxOzE3KT8lMVMhLLCktSsxRSEsFMVKLo6QCchKTUxVC8hXKMoszSxQy8xScoYpPMYKNsKhKKSyGss0K0vIMoGyw0acYuUBs0wLzLOP0X4ySzrgsamBhXMTKFZKfl3N4pUJwYsEtNkmGA1cylzzV2fB-yYt9fHdmBvGtdVr9rCTLzQ4A4OoRO70AAAA&sa=X&ved=2ahUKEwjukJDn_uiCAxXVhlYBHUGJCC4Qs9oBKAJ6BAhUEAQ&biw=1536&bih=707&dpr=1.25', '../images/1451788835TonleSap.jpg', 'Tonle Sap'),
(47, 1, '2023-11-29 11:11:06', '                     The Cardamom Mountains, or the Krâvanh Mountains, is a mountain range in the south west of Cambodia and Eastern Thailand. The majority of the range is within Cambodia.       ', 'https://images.search.yahoo.com/search/images;_ylt=AwrOrsL0EWdl5PcFAKFXNyoA;_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Nj?p=Cardamom+Mountains&fr=mcafee#id=8&iurl=https%3A%2F%2Fmedia-cdn.tripadvisor.com%2Fmedia%2Fphoto-s%2F10%2Fcf%2F1c%2Fb9%2Ftrekking-in-the-cardamom.jpg&action=click', '../images/521523722Cardamom Mountains.jpg', 'Cardamom Mountains'),
(48, 0, '2023-12-05 11:12:18', '', '', '../images/545659805', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CateID`);

--
-- Indexes for table `tbldata`
--
ALTER TABLE `tbldata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldata`
--
ALTER TABLE `tbldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
