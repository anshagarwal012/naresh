-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2023 at 07:31 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u338280037_olive`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(50) NOT NULL,
  `datetime` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `datetime`, `name`, `email`, `phone`, `message`) VALUES
(2, '05-03-23 12:18:28', 'Sukumar Sudhakar', 'sukumarsudhakar@gmail.com', '09818444140', 'Need to understand what type of funding you do for what all type of start ups...'),
(3, '27-03-23 10:52:19', 'Mohammed Fazulullah', 'smautomationsolution@gmail.com', '7397299376', 'WE ARE STARTUP COMPANY  WITH 3 YEARS OF BUSINESS EXPERIENCE & WORK EXPERIENCE IS 14 YEARS IN AUTOMATION FIELD SCETORS.\r\nWE REQUIRED FUNDS RAISING TO DEVELOP MY BUSINESS.\r\nWE HAVE 2 YEARS OF IT RETURNS.\r\nWE HAVE BRANCHES IN TAMIL NADU & ANDHRA PRADESH');

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

CREATE TABLE `funding` (
  `id` int(50) NOT NULL,
  `datetime` varchar(50) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `startupdesc` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `stage` varchar(255) DEFAULT NULL,
  `funding` varchar(255) DEFAULT NULL,
  `pitch_desk` varchar(255) DEFAULT NULL,
  `sdocuments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `funding`
--

INSERT INTO `funding` (`id`, `datetime`, `sname`, `fname`, `email`, `phone`, `position`, `startupdesc`, `industry`, `website`, `country`, `stage`, `funding`, `pitch_desk`, `sdocuments`) VALUES
(1, '28-02-23 11:02:13', 'Ghumelu', 'Bhaskar Gautam', 'investment@wuagle.com', '+91-7579292951', 'Founders', 'Ghumelu is an AI/AR based navigation platform which let anyone to monetize travel step of anywhere, anytime even in case of zero connectivity for free.', 'AI & Machine Learning', 'https://www.ghumelu.com', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1677562333Wuagle_Private_Limited_Feb_4_23.pdf', 'admin/uploads/1677562333competition_analysis.pdf'),
(2, '06-03-23 10:50:33', 'Ardhan Labs', 'Vaibhav Bhatnagar', 'vaibhav@ardhanlabs.com', '8160341723', 'Founder', 'Ardhan Labs is an Aerospace & Defence Start Up with focus on bringing autonomous AI-driven system to the frontline.  Our Goal is to create truly innovative, â€˜Make In Indiaâ€™ AI driven Infrastructure independent solutions.', 'Other', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1678123231Ardhan Labs_Investor-Deck.pdf', NULL),
(3, '19-03-23 12:30:37', 'Fydo', 'Satyajeet Patnayak', 'satyajeet@fydo.in', '9031716589', 'CEO', 'A Hyperlocal AdTech startup that provides platform for small and medium businesses to advertise their products and offers to their nearby customers without any hefty cost unlike brands that have a huge marketing budget and team, At the same time, a one-st', 'FinTech', 'https://www.fydo.in/', 'India', 'Generating Revenue', 'Seed', 'admin/uploads/1679209236Fydo Deck.pdf', NULL),
(6, '25-03-23 12:12:21', 'Factorcard', 'Prathmesh Gaikwad', 'prathmesh@factorcard.in', '09112135885', 'Co Founder', 'A preapproved factoring line that can be accessed through a card and an app.', 'FinTech', 'factorcard.in', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679726541FactorcardPitch.pdf', ''),
(7, '25-03-23 12:35:28', 'Factorcard', 'Prathmesh', 'prathmesh@factorcard.in', '9112135885', 'Co founder', 'A pre-approved factoring line that can be accessed through a card and an app.', 'FinTech', 'www.factorcard.in', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679727928FactorcardPitchDeck.pdf', ''),
(8, '25-03-23 05:35:11', 'Datelink ', 'Sai Vishal reddy ', 'saivishalreddy335@gmail.com', '9704371934', 'Founder', 'People going on date for money', 'Social Network', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679745911Copy of Presentation_compressed.pdf', ''),
(9, '25-03-23 07:19:04', 'Super cane harvester machines pvt ltd ', 'Basavaraj Tatawati ', 'tatawati@rediffmail.com', '09448289995', 'Promoter director ', 'Wholestalk sugarcane harvester installed on Tractor ', 'AgriTech', 'Supercane.co.in', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1679752143SUPER_75_PRESENTATION.pptx', 'admin/uploads/1679752143DIPP74816_SUPER_CANE_HARVESTER_MACHINES_PRIVATE_LIMITED_RECOGNITION_6299650521912918701.pdf'),
(10, '25-03-23 07:22:51', 'Fascinating styles', 'Guruprasad', 'guruchalva@gmail.com', '+917337636953', 'Founder', 'Fascinating styles is first ever indian youth fashion brand. We want to be the youth fashion brand catering to the 16-30 growing age population of India. The youth of India have a growing desire to try out Sport Wears and Designer wears. Our USP is qualit', 'E-Commerce', 'https://www.fascinatingstyles.com/', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679752371Fascinating Styles V2.pdf', 'admin/uploads/1679752371Copy of Data_Request_for_Financial_Projections_fascinating_styles(1).xlsx'),
(11, '25-03-23 08:28:55', 'Croplly ', 'Manish', 'manishkm022@gmail.com', '9990881929', 'Founder & CEO', 'An Open-Source platform that offers financial\r\n& post-harvesting services to small &\r\nmarginalized farmers for makes farming easy\r\nthrough technology.', 'AgriTech', 'https://croplly.com', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679756335Deckcroplly (4).pdf', ''),
(12, '25-03-23 08:30:29', 'Croplly ', 'Manish', 'manishkm022@gmail.com', '+919990881929', 'Founder & CEO', 'An Open-Source platform that offers financial\r\n & post-harvesting services to small &\r\n marginalized farmers for makes farming easy\r\n through technology.', 'AgriTech', 'https://croplly.com', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679756429Deckcroplly (4).pdf', ''),
(13, '26-03-23 10:38:22', 'ByeDoctor technologies private limited ', 'Vaibhav Chauhan ', 'vaicha551@gmail.com', '9625816349', 'CEO', 'Our company BYEDOCTOR is an chronic disease reversal platform .\r\n\r\nObjective.\r\n\r\n1. To help reverse chronic diseases of billions of people around.\r\n\r\n2. Prove the power of raw vegan diet in reversing chronic diseases.\r\n\r\n3. Help people lead a medicine fre', 'HealthTech', '', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679807302ByeDoctor grx venture.pdf', ''),
(14, '26-03-23 10:39:08', 'ByeDoctor technologies private limited ', 'Vaibhav Chauhan ', 'vaicha551@gmail.com', '9625816349', 'CEO', 'Our company BYEDOCTOR is an chronic disease reversal platform .\r\n\r\nObjective.\r\n\r\n1. To help reverse chronic diseases of billions of people around.\r\n\r\n2. Prove the power of raw vegan diet in reversing chronic diseases.\r\n\r\n3. Help people lead a medicine fre', 'HealthTech', '', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679807348ByeDoctor grx venture.pdf', ''),
(15, '26-03-23 11:52:53', 'RP GOAT FARM ', 'Ram pal ', 'ramp09584@gmail.com', '8009352952', 'Funds are desperately needed to start up ', 'need funds', 'Other', '', 'India', 'Development Stage', 'Pre-A', 'admin/uploads/167981177220220422_100152.jpg', 'admin/uploads/167981177220230119_163739~2.jpg'),
(16, '26-03-23 11:56:03', 'Evya', 'Vipindas v p', 'vipindasnair@evya.co.in', '8105391144', 'Founder and CEO', 'EVYA Is an One Stop Solution For Electric vehicles,\r\nOur goal is to Create EVYA Network Across Nation, As Service as a product, Charging Service, Swapping service, Complete vehicle care and our mission is to EV Should travel across the nation without fear', 'Smart Transport', 'evya.co.in', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679811963EVYA Pitch Deck (Confidential) .pdf', ''),
(17, '26-03-23 10:38:49', 'Medift ', 'Shivprasad Roul ', '2105158@kiit.ac.in', '8320642171', 'CEO ', 'Medift is a healthcare startup that aims to provide a seamless and efficient solution for medical emergencies. Its main focus is on connecting patients in need of urgent medical attention with the nearest ambulance available. Through its platform, Medift ', 'HealthTech', '', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679850528medift123.pdf', 'admin/uploads/1679850528Medift Final.pdf'),
(18, '27-03-23 09:28:00', 'POBITRAM AGRO SERVICES ', 'SK ALAMGIR', 'skalamgir.com@gmail.com', '+919735846435', 'Directory ', 'Agriculture productivity ', 'AgriTech', '', 'India', 'Development Stage', 'Seed', 'admin/uploads/1679889479Our Service Line.pdf', ''),
(19, '27-03-23 09:30:35', 'POBITRAM AGRO SERVICES ', 'SK ALAMGIR', 'skalamgir.com@gmail.com', '+919735846435', 'Directory ', 'Agriculture productivity, product import, export ', 'AgriTech', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679889635Our Service Line.pdf', ''),
(20, '27-03-23 09:30:47', 'POWERIFY TECHNOLOGIES LLP', 'Afthab mohamed rafy', 'rafyafthab24@gmail.com', '8848061476', 'Founder & CEO', 'Powerify is a mobile EV charging service provider that aims to solve the problem of the lack of EV charging infrastructure in India. The company provides an on-demand, scheduled, and emergency rescue charge delivery service for electric vehicle owners, al', 'Franshise', 'https://powerify.in/', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679889647Powerify pitch-deck.pdf', ''),
(21, '27-03-23 10:06:41', 'ghumiya.com', 'Shashi Parvat', 'ola@ghumiya.com', '9560830086', 'Co-founder', 'Ghumiya.com is an end-to-end experience led travel management company. \r\n\r\nWe at ghumiya.com collaborate to help design, curate & handpick the most sought after, indigenous & off-beat destination in India or abroad for you and your loved ones.\r\n\r\nIn addit', 'Other', 'www.ghumiya.com', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1679891800Ghumiya_COCO_Model_Mar 24th_5%Stake .pdf', 'admin/uploads/1679891800Ghumiya_Business Plan_Mar 24_2023_.xlsx'),
(22, '27-03-23 10:44:58', 'Healthsure (M/S Kariakali Amman Foods Private Limited)', 'Guru Abishek', 'reach@healthsure.in', '09940647545', 'Revenue Stage', 'Millet Value Add Products like Millet Tea, Millet Soup, Millet Dosa, CFTRI certified Health Mix and more.', 'AgriTech', 'www.healthsure.in', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1679894097Healthsure Millet Breakfast and Millet Tea - investor proposal.pdf', ''),
(23, '27-03-23 04:38:01', 'Mobirapid Private Limited', 'Anmol Makkar', 'anmol@mobirapid.com', '9783448444', 'CEO', 'Recommerce Platform for Mobiles and Laptops. Working on Recommerce Supply chain', 'Retail-Tech / B2B', 'https://mobirapid.in', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679915281mobirapid_pitch_deck.pdf', ''),
(24, '27-03-23 04:58:58', 'Pottangadi Monark India pvt.ltd', 'Mahesh R. Pottangadi', 'maheshpottangadi@gmail.com', '+917736221000', 'Managing Director', 'Fmcg company', 'Manufacturing', 'www.pottangadimonark.com', 'India', 'Development Stage', 'Seed', 'admin/uploads/1679916538IMG-20230327-WA0110.jpg', ''),
(25, '27-03-23 05:13:30', 'Arclight Games', 'Anirudh Dey', 'anirudh.dey@arclightgames.com', '9971616604', 'CTO & CPO', 'Arclight Games is a games as a service platform, which creates a bridge between Players and Developers', 'Other', 'https://in.linkedin.com/company/arclight-games', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1679917410Games As A Service (3).pdf', ''),
(26, '27-03-23 09:56:19', 'Saisadhna Agro Farmer Producer Company limited ', 'Rekha Mane ', 'saisadhnaagro@gmail.com', '7558606006 ', 'Managing Director ', '', 'AgriTech', '', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679934379IMG-20230311-WA0012.jpg', ''),
(27, '28-03-23 08:32:39', 'Beggars Corporation (Humanomics Pvt Ltd)', 'Chandra Mishra', 'beggarscorporation@gmail.com', '+918178167725', 'Founder & CEO', 'Creating begging free society by turning beggars into entrepreneurs through converting donations into social investments.\r\n\r\nCharity breeds poverty, only Profit with Purpose can break the Poverty Trap and make the poor both Creator & Owner of Wealth. Call', 'Other', 'https://beggarscorporation.com/', 'India', 'Generating Revenue', 'Pre-Seed', 'admin/uploads/1679972558BC for Global VC March 2023.pdf', 'admin/uploads/1679972558Financial Statement.pdf'),
(28, '28-03-23 11:13:02', 'Pivott TechnoSports', 'O\'Neill Noah', 'oneill@pivotttechnosports.com', '9867588300', 'CEO/Co-Founder', 'PIVOTT TECHNOSPORTS principal objective is to organize structure and govern Tennis Ball Cricket In India, with the help of technology through its IP INDIAN TENNIS CRICKET FEDERATION. ITCF will be responsible for the development and implementation of techn', 'Other', 'work in progress', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1679982182BUSINESS PLAN NEW.pdf', ''),
(29, '28-03-23 12:16:39', 'Attar', 'MUAAZ ATTAR', 'muaazattar86@gmail.com', '9890654721', 'Owner', 'Ecommerce multi vendor market place', 'E-Commerce', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679985999project report pptt pdf 1.pdf', ''),
(30, '28-03-23 12:47:55', 'pawwow', 'Subodh Naudiyal', 'subodh.naudiyal@genesisbci.com', '9321803669', 'CEO', 'paw-wow.com is a D2C subscription based company that makes it easy for pet owners to provide hassle free fresh, \r\nhealthy and individualized/personalized nutrition for their beloved pets\r\n', 'E-Commerce', 'www.paw-wow.com (proposed name)', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679987873pawwow pitch deck final.pdf', 'admin/uploads/1679987873paw-wow financials.xlsx'),
(31, '28-03-23 12:49:55', 'pawwow', 'Subodh Naudiyal', 'subodh.naudiyal@genesisbci.com', '09321803669', 'CEO', 'paw-wow.com is a D2C subscription based company that makes it easy for pet owners to provide hassle free fresh, \r\nhealthy and individualized/personalized nutrition for their beloved pets\r\n', 'E-Commerce', 'www.paw-wow.com (proposed name)', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679987993pawwow pitch deck final.pdf', 'admin/uploads/1679987993paw-wow financials.xlsx'),
(32, '28-03-23 02:49:56', 'ARG Namkeen Private Limited', 'AJAY SINGH', 'sajay6679@gmail.com', '7016703321', 'early', 'We will be manufacturing a variety of Indian Namkeens \r\n& Snacks that cater to the diverse tastes of our \r\ncustomers. Our product range includes popular snacks \r\nlike Kurkure, Noodles, Wafers, Punjabi tadka, Aloo Sev, \r\nKhatta Meetha, Teekha Meetha, Faral', 'Other', 'Na', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1679995196Pitch Deck_2.5Cr.pptx', 'admin/uploads/1679995196ARG Namkeen Pvt Ltd_1.pptx'),
(33, '28-03-23 06:19:16', 'SUNWIND ECO TECHNOLOGIES PRIVATE LIMITED ', 'SRIKANTH SARANGAPANI', 'director@sunwindecotechnologies.in', '7200828147', 'DIRECTOR ', 'Greetings from Sunwind Eco Technologies, Chennai.\r\nWe are a solar power Plant system integrator providing complete EPC solution for Solar Power Plants of any capacity from KW to MW, right from feasibility study to selection of technology, installation of ', 'Other', 'http://sunwindecotechnologies.in', 'India', 'Generating Revenue', 'Pre-A', 'admin/uploads/1680007755Pich deck for Olive venture partner _28.3.2023.pdf', 'admin/uploads/1680007755Sunwind company profile_14.8.2022.pdf'),
(42, '29-03-23 01:25:09', 'Credexon', 'Yash Gupta', 'yash@credexon.com', '+919910031512', 'Founder and Director', 'A revolutionary fantasy gaming app that combines the talents of both sports fans and finance aficionados, Credexon enables users to invest their knowledge in the world of sports to generate amazing returns! Credexon offers unique stock market ideas such a', 'Other', 'https://credexon.com/', 'India', 'Development Stage', 'Seed', 'admin/uploads/1680076504Credexon Pitch Deck (4).pdf', ''),
(43, '30-03-23 11:05:19', 'VSRM Innovative Ventures', 'Dr.R.Udayakumar, M.E, Ph.d', 'harishragasri@gmail.com', '7338793348', 'Founder and CEO', 'The vision of VSRM Innovative Ventures is to provide innovative solutions to the core Engineering problems in Traffic and Transportation Engineering sector in general and Railway Engineering in particular using recent technologies and cross domain applica', 'Smart Transport', '', 'India', 'Development Stage', 'Seed', 'admin/uploads/1680154517Pitch Deck of OHE Cantilever Design.pdf', 'admin/uploads/1680154517Letter on shortlisting-OHE.pdf'),
(44, '30-03-23 12:45:14', 'YCLEPT 4E LABS', 'Shreyank U', 'shineagain23@gmail.com', '07795530460', 'CEO', 'An Urban Innovation Company & Technology Integration Catalyst for Smart Cities & Communities tackling Infrastructure, Green spaces, Energy & Climate Change.', 'Other', 'https://y4elabs.com/', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1680160508Y4E LABS PD.pdf', ''),
(46, '30-03-23 07:05:35', 'Vajram Electric', 'Dr Irfan Khan', 'omkar@ebikego.in', '7208979116', 'Business head ', 'Vajram electric is a made in India EV OEM which manufactures a portfolio of vehicles and exports in the European and the north American Market. We have already sold 30000 units. Vajram electrics will soon launch its portfolio in the Indian market and Oman', 'Manufacturing', 'https://www.vajramelectric.com/', 'India', 'Development Stage', 'Seed', 'admin/uploads/1680183334Vajram Electric Investor Deck (5).pdf', ''),
(47, '31-03-23 02:32:13', 'Masonic e com p ltd.', 'sonal garg', 'sonal.garg@sadar24.com', '9811184500', 'Director', 'we an e commerce marketplace by the name sadar24.com . whereby we have given an organized platform to the vendors  who were working from there shops till now', 'E-Commerce', 'www.sadar24.com', 'India', 'Generating Revenue', 'Pre-A', 'admin/uploads/1680253332Pitch Deck- Sadar24 (1.4.23).pdf', ''),
(48, '01-04-23 07:17:56', 'Dream Home ', 'Priyankar Ojah ', 'pallababhijitpriyankar@gmail.com', '9707453713', 'Co-founder ', 'Dream House is an online platform that connects homeowners and renters\r\nwith top-rated architecture and interior design professionals. The platform\r\nallows users to browse profiles, view portfolios, and compare prices, so they\r\ncan find the right professi', 'Other', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1680356869Dream Home Pitch Deck.pdf', ''),
(49, '01-04-23 07:37:12', 'Community Jungle ', 'Pallab Deka', 'pallabspaceinfinity@gmail.com', '9132031754', 'Co-founder.', 'Community Jungle will build a common Plateform for\r\nall people of all profession so don\'t need to access the\r\ndifferent site or download the different apps for\r\ndifferent profession people\r\nCommunity Jungle will not only provide a community\r\nplatform but ', 'Social Network', '', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1680358029community Jungle (olive).pdf', ''),
(50, '02-04-23 01:20:42', 'BOM CABS', 'Dhananjaya V P', 'admin@danext.in', '8892491431', 'LAUNCHED', 'Company with an aggregator license valid for 5 years from Karnataka State Transport Authority which is mandatory for an online taxi service.\r\n\r\n- We provide city taxi, rental, outstation, and delivery booking through an app-based service system with nearl', 'Ride Hailing', 'www.bomcabs.in', 'India', 'Idea Stage', 'Pre-A', 'admin/uploads/1680421839Bom Cabs - Business Plan(CIM) ..pdf', 'admin/uploads/1680421839Funds Required and Utilization pdf.pdf'),
(51, '03-04-23 08:23:56', 'Vsam ', 'Mohammed Aamir Ali ', 'founder@vsam.me', '+919625044812', 'Founder and CEO ', 'Short video competition social media platform ', 'Social Network', 'www.vsam.me ', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1680533634Vsam - Pitch Deck -V8-250k.pdf', ''),
(52, '04-04-23 04:00:34', 'Boondein', 'Rohit Kumar', 'rohitspin21@gmail.com', '9871857223', 'Founder', 'We are working on Fintech startup based on credit co-operatives.\r\n\r\nBoondein A banking platform for all credit cooperatives would combine the innovations in user experience, speed and data analysis promoted by fintech, with the ownership and participation', 'FinTech', 'N/A', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1680604234Boondein14.pdf', ''),
(53, '05-04-23 12:41:53', 'Global 1', 'Hritik Gaikwad', 'hritik@global1.net.in', '7498880974', 'Pre seed', 'am a banker and also do forex tradering\r\nI have idea which can change change,\r\nThere are 60+ exchangers in world but 88% of world population don\'t even know about that I am preparing a team which is going to create a app which contains all maximum exchang', 'Lending & Financing', 'http://global1nextgentradingapp.godaddysites.com', 'India', 'Idea Stage', 'Pre-Seed', 'admin/uploads/1680678713GLOBA1.pdf', 'admin/uploads/1680678713IMG_20230208_152243.jpg'),
(54, '27-04-23 02:58:06', 'BiB', 'Abhinav Singh', 'abhhinavsingh.bib@gmail.com', '8340546686', 'CEO', 'BIB is a PropTech company focused on solving real estate related issues with customer centric solutions.', 'PropTech', '', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1682587685Pitch Deck with Prototype Link.pdf', ''),
(55, '13-06-23 10:40:11', 'BeFriends - HAZHTeq Innovations Pvt Ltd', 'Hakimuddin Vohra', 'hakim@befriendsapp.in', '8460844958', 'Founder', 'My companyÂ HAZHTeq Innovations Pvt Ltd, is developingÂ BeFriends,Â a Community powered A.I. backed Emotional Wellness Platform, to help the youth by encouraging them to take care of their mental wellbeing through a 360-degree approach, which supports the', 'HealthTech', 'https://befriendsapp.in/', 'India', 'Development Stage', 'Pre-Seed', 'admin/uploads/1686633009Pitch - Copy.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `lp`
--

CREATE TABLE `lp` (
  `id` int(50) NOT NULL,
  `datetime` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `referral` varchar(255) DEFAULT NULL,
  `active_investor` varchar(255) DEFAULT NULL,
  `invest_as` varchar(255) DEFAULT NULL,
  `radio` varchar(255) DEFAULT NULL,
  `declaration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lp`
--

INSERT INTO `lp` (`id`, `datetime`, `name`, `email`, `phone`, `city`, `state`, `country`, `linkedin_url`, `company_name`, `referral`, `active_investor`, `invest_as`, `radio`, `declaration`) VALUES
(3, '24-02-23 10:37:15', 'ABHINAV ARORA', 'ABHINAVARORA@SYNOKEMPHAR', '9810641111', 'NEW DELHI', 'DELHI', 'India', '', 'SYNOKEM PHARMACEUTICAL LIMITED', '', 'Yes', 'Myself as an individual', '1', 'on'),
(4, '27-02-23 01:35:10', 'RAJESH MALHOTRA', 'rajesh.everest56@gmail.com', '9811014334', 'New Delhi', 'DELHI', 'India', '', '', '', 'Yes', 'Myself as an individual', '5', 'on'),
(5, '03-03-23 04:43:02', 'ashok', 'ashok.gupta@shalimarpaints.com', '8130007600', 'delhi', 'delhi', 'India', '', 'shalimar paints', '', 'Yes', 'Myself as an individual', '1', 'on'),
(6, '09-03-23 12:41:43', 'Bhawnesh Vij', 'Bhawnesh.vij@hmcgroup.in', '9958652999', 'Gurugram', 'Haryana', 'India', '', 'Hero Cycles', '', 'Yes', 'LLC', '5', 'on'),
(7, '17-03-23 05:39:31', 'jaiwant bery', 'jaiwant.bery3006@gmail.com', '9810021106', 'delhi', 'delhi', 'India', '', 'barflex polyfilms limited', '', 'Yes', 'Myself as an individual', '1', 'on'),
(10, '21-04-23 10:27:55', 'Chandrashekar Kupperi', 'chandrashekar.kupperi@gmail.com', '+919940060273', 'Chennai', 'Tamil Nadu', 'India', 'https://www.linkedin.com/in/chandrashekar-kupperi-7472b86/', 'ANOVA Corporate Services Pvt Ltd', '', 'Yes', 'Myself as an individual', '2', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `filename`, `cat`, `uploaded_at`) VALUES
(1, '16915663091.png', 'Deep Tech', '2023-08-09 07:31:49'),
(2, '16915663152.png', 'D2C', '2023-08-09 07:31:55'),
(3, '16915663193.png', 'Fintech', '2023-08-09 07:31:59'),
(4, '16915663234.png', 'EdTech', '2023-08-09 07:32:03'),
(5, '16915663285.png', 'Enterprise IT', '2023-08-09 07:32:08'),
(6, '16915663326.png', 'EV Mobility', '2023-08-09 07:32:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding`
--
ALTER TABLE `funding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lp`
--
ALTER TABLE `lp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funding`
--
ALTER TABLE `funding`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `lp`
--
ALTER TABLE `lp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
