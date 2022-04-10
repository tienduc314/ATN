-- phpMyAdmin SQL Dump
-- version 5.1.3
-- SQLINES DEMO *** admin.net/
--
-- Host: 127.0.0.1
-- SQLINES DEMO *** Apr 09, 2022 at 05:15 PM
-- SQLINES DEMO *** 0.4.24-MariaDB
-- PHP Version: 7.4.28

/* SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; */
START TRANSACTION;
time_zone := "+00:00";


/* SQLINES DEMO *** ARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/* SQLINES DEMO *** ARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/* SQLINES DEMO *** LLATION_CONNECTION=@@COLLATION_CONNECTION */;
/* SQLINES DEMO *** tf8mb4 */;

--
-- SQLINES DEMO *** _shop`
--

-- SQLINES DEMO *** ---------------------------------------

--
-- SQLINES DEMO *** or table `category`
--

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE category (
  Cat_ID varchar(10) NOT NULL,
  Cat_Name varchar(30) NOT NULL,
  Cat_Des varchar(1000) DEFAULT NULL
) ;

--
-- SQLINES DEMO *** table `category`
--

INSERT INTO category (Cat_ID, Cat_Name, Cat_Des) VALUES
('C001', 'LEGO', 'ATN product'),
('C002', 'BABIE', 'ATN product');

-- SQLINES DEMO *** ---------------------------------------

--
-- SQLINES DEMO *** or table `customer`
--

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE customer (
  Username varchar(20) NOT NULL,
  Password varchar(40) NOT NULL,
  CustName varchar(30) NOT NULL,
  gender int NOT NULL,
  Address varchar(1000) NOT NULL,
  telephone varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  CusDate int NOT NULL,
  CusMonth int NOT NULL,
  CusYear int NOT NULL,
  SSN varchar(10) DEFAULT NULL,
  ActiveCode varchar(100) NOT NULL,
  state int NOT NULL
) ;

--
-- SQLINES DEMO *** table `customer`
--

INSERT INTO customer (Username, Password, CustName, gender, Address, telephone, email, CusDate, CusMonth, CusYear, SSN, ActiveCode, state) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 0, '146B mau than', '0337905287', 'admin@gmail.com', 20, 5, 1988, '', '', 1),
('duc', 'e10adc3949ba59abbe56e057f20f883e', 'nguyen tien duc', 0, '146B mau than', '0777555444', 'tienduc314@gmail.com', 19, 5, 1992, '', '', 0),
('user', 'e10adc3949ba59abbe56e057f20f883e', 'user', 0, 'Can Tho', '0337905287', 'user@gmail.com', 19, 8, 2001, '', '', 0);

-- SQLINES DEMO *** ---------------------------------------

--
-- SQLINES DEMO *** or table `product`
--

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE product (
  Product_ID varchar(10) NOT NULL,
  Product_Name varchar(30) NOT NULL,
  Price bigint NOT NULL,
  oldPrice decimal(12,2) NOT NULL,
  SmallDesc varchar(1000) NOT NULL,
  DetailDesc text NOT NULL,
  ProDate timestamp(0) NOT NULL,
  Pro_qty int NOT NULL,
  Pro_image varchar(200) NOT NULL,
  Cat_ID varchar(10) NOT NULL
) ;

--
-- SQLINES DEMO *** table `product`
--

INSERT INTO product (Product_ID, Product_Name, Price, oldPrice, SmallDesc, DetailDesc, ProDate, Pro_qty, Pro_image, Cat_ID) VALUES
('01', 'Mandalore Building', 500, '0.00', 'LEGO Star Wars Duel on Mandalore 75310 Building Kit', '', '2022-04-09 16:49:54', 12, 'starwar.jfif', 'C001'),
('02', 'Troopers Building', 505, '0.00', 'LEGO Star Wars 501st Legion Clone Troopers Building Kit, Cool Action Set for Creative Play 75280', '', '2022-04-09 16:49:47', 21, 'starwar2.jfif', 'C001'),
('03', 'Batch Shuttle', 300, '0.00', 'LEGO Star Wars The Bad Batch Shuttle 75314', '', '2022-04-09 16:48:07', 17, 'batchshuttle.jfif', 'C001'),
('04', 'BrickHeadz', 399, '0.00', 'LEGO BrickHeadz Star Wars The Mandalorian & The Child 75317', '', '2022-04-09 16:48:57', 19, 'brickheadz.jfif', 'C001'),
('05', 'Mandalorian', 790, '0.00', 'LEGO Star Wars Mandalorian Battle Pack Shock Troopers and Speeder Bike Building Kit 75267', '', '2022-04-09 16:51:48', 15, 'mandalorian.jfif', 'C001'),
('06', 'Barbie doll', 680, '0.00', 'Barbie Dreamtopia Rainbow Magic Mermaid Doll', '', '2022-04-09 16:53:15', 23, 'rainbow.jfif', 'C002'),
('07', '​Barbie Careers', 899, '0.00', '​Barbie Careers Space Discovery Dolls & Science Classroom Playset', '', '2022-04-09 16:54:12', 20, 'careers.jfif', 'C002'),
('08', 'Puppy', 350, '0.00', 'Barbie Puppy Party Doll and Playset', '', '2022-04-09 17:00:18', 20, 'puppyparty.jfif', 'C002'),
('09', 'Chelsea', 540, '0.00', 'Barbie and Chelsea the Lost Birthday Splashtastic Pool Surprise Playset', '', '2022-04-09 17:06:37', 7, 'chelsea.jfif', 'C002'),
('10', 'Babie Doctor', 550, '0.00', 'Barbie You Can Be Anything Baby Doctor Blonde Doll and Playset', '', '2022-04-09 17:08:50', 9, 'doctor.jfif', 'C002');

--
-- SQLINES DEMO *** d tables
--

--
-- SQLINES DEMO ***  `category`
--
ALTER TABLE category
  ADD PRIMARY KEY (Cat_ID);

--
-- SQLINES DEMO ***  `customer`
--
ALTER TABLE customer
  ADD PRIMARY KEY (Username);

--
-- SQLINES DEMO ***  `product`
--
ALTER TABLE product
  ADD PRIMARY KEY (Product_ID),
  ADD KEY `Cat_ID` (Cat_ID);

--
-- SQLINES DEMO *** umped tables
--

--
-- SQLINES DEMO *** able `product`
--
ALTER TABLE product
  ADD CONSTRAINT product_ibfk_1 FOREIGN KEY (Cat_ID) REFERENCES category (Cat_ID);
COMMIT;

/* SQLINES DEMO *** ER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* SQLINES DEMO *** ER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* SQLINES DEMO *** ON_CONNECTION=@OLD_COLLATION_CONNECTION */;
