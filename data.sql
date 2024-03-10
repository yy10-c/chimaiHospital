-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-03-10 06:41:13
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `detection`
--

CREATE TABLE `detection` (
  `病歷編號` varchar(20) NOT NULL,
  `in_put` int(5) NOT NULL,
  `out_put` int(5) NOT NULL,
  `HE_stain` int(5) NOT NULL,
  `IHC_stain` int(5) NOT NULL,
  `白片` int(5) NOT NULL,
  `使用量` int(5) NOT NULL,
  `DNA` int(5) NOT NULL,
  `RNA` int(5) NOT NULL,
  `體積` int(10) NOT NULL,
  `濃度` int(5) NOT NULL,
  `濃度檢測方法` tinyint(1) NOT NULL,
  `圖片` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `detection_result`
--

CREATE TABLE `detection_result` (
  `Result_ID` varchar(40) NOT NULL,
  `Sample_ID` varchar(40) NOT NULL,
  `TestResult` varchar(60000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE `employee` (
  `員工編號` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `姓名` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `密碼` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `employee`
--

INSERT INTO `employee` (`員工編號`, `姓名`, `密碼`) VALUES
('A00001', '莊大為', '0000'),
('B20132', '王俞閔', '0519');

-- --------------------------------------------------------

--
-- 資料表結構 `hospital`
--

CREATE TABLE `hospital` (
  `醫院` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `院號` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `hospital`
--

INSERT INTO `hospital` (`醫院`, `院號`) VALUES
('彰化基督教', '225'),
('林口長庚', '227'),
('高醫', '228'),
('台大', '229'),
('台大癌醫', '304');

-- --------------------------------------------------------

--
-- 資料表結構 `operationlog`
--

CREATE TABLE `operationlog` (
  `Log_ID` int(100) NOT NULL,
  `Sample_ID` varchar(40) NOT NULL,
  `operatoR` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `operationData` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `project`
--

CREATE TABLE `project` (
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `sample`
--

CREATE TABLE `sample` (
  `ID` varchar(40) NOT NULL,
  `hospital_ID` varchar(10) NOT NULL,
  `sample_type` varchar(100) NOT NULL,
  `inspect_method` varchar(100) NOT NULL COMMENT '檢查方法\r\n1.nonodrop\r\n2.qubit'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `檢驗項目`
--

CREATE TABLE `檢驗項目` (
  `項目編號` int(11) NOT NULL,
  `項目名稱` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `送檢單`
--

CREATE TABLE `送檢單` (
  `Lab_ID` int(10) NOT NULL,
  `Sample_ID` varchar(40) NOT NULL,
  `病歷號` varchar(20) NOT NULL,
  `病歷編號` varchar(20) NOT NULL,
  `in_put` int(5) NOT NULL,
  `out_put` int(5) NOT NULL,
  `送檢單位` varchar(10) NOT NULL,
  `送檢人` varchar(20) NOT NULL,
  `檢體採檢日` date NOT NULL,
  `檢體項目` varchar(10) NOT NULL,
  `名稱` varchar(10) NOT NULL,
  `姓別` varchar(10) NOT NULL,
  `年齡` int(3) NOT NULL,
  `聯絡人` varchar(10) NOT NULL,
  `電話` int(10) NOT NULL,
  `郵件信箱` varchar(30) NOT NULL,
  `圖片` varchar(30) NOT NULL,
  `代完成日` date NOT NULL,
  `報告寄回時間` date NOT NULL,
  `檢體寄回時間` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `detection_result`
--
ALTER TABLE `detection_result`
  ADD PRIMARY KEY (`Result_ID`);

--
-- 資料表索引 `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`員工編號`);

--
-- 資料表索引 `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`院號`);

--
-- 資料表索引 `operationlog`
--
ALTER TABLE `operationlog`
  ADD PRIMARY KEY (`Log_ID`);

--
-- 資料表索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`hospital_ID`);

--
-- 資料表索引 `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `hospital_ID` (`hospital_ID`);

--
-- 資料表索引 `送檢單`
--
ALTER TABLE `送檢單`
  ADD PRIMARY KEY (`Lab_ID`),
  ADD KEY `送檢人` (`送檢人`),
  ADD KEY `Sample_ID` (`Sample_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
