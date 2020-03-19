-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 3 月 19 日 10:54
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `map`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `geo_locations`
--

CREATE TABLE `geo_locations` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` double(8,6) DEFAULT NULL,
  `lng` double(9,6) DEFAULT NULL,
  `icon` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのインデックス `geo_locations`
--
ALTER TABLE `geo_locations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのAUTO_INCREMENT `geo_locations`
--
ALTER TABLE `geo_locations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
