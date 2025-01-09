-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql3104.db.sakura.ne.jp
-- 生成日時: 2025 年 1 月 10 日 03:06
-- サーバのバージョン： 8.0.40
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `tanajun_user_db_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `timeline_table`
--

CREATE TABLE `timeline_table` (
  `id` int NOT NULL,
  `uname` varchar(64) NOT NULL,
  `tweet` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `timeline_table`
--

INSERT INTO `timeline_table` (`id`, `uname`, `tweet`, `time`) VALUES
(3, '', 'テスト', '2024-12-31 02:31:56'),
(4, '', 'あいうえお', '2024-12-31 02:38:05'),
(6, '', 'ツイートの右側にミートボール追加したんですけど削除は動くけど、編集が編集後にエラーになってしまいます（ぴえん）', '2024-12-31 13:38:15'),
(8, '', 'あ', '2024-12-31 13:45:56'),
(9, '', '年末年始休暇中にXAMPPがぶっこわれてたぴえん', '2025-01-03 05:41:44'),
(11, '', 'さくらにアップロードができんぴえん', '2025-01-03 12:27:24'),
(13, '', '見てない間にみんなが年末年始にぴえんしててワロタ', '2025-01-08 23:30:39'),
(14, '', 'ツイート右側のミートボールから編集も実行可能になりました！！！', '2025-01-09 22:51:10'),
(16, '', 'なんとか最低限の機能は実装できました、、、', '2025-01-10 03:03:04');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `timeline_table`
--
ALTER TABLE `timeline_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `timeline_table`
--
ALTER TABLE `timeline_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
