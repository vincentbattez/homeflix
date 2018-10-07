-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 07 oct. 2018 à 21:14
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `homeflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `hf_episodes`
--

CREATE TABLE `hf_episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_saison` int(10) UNSIGNED NOT NULL,
  `id_serie` int(10) UNSIGNED NOT NULL,
  `n` int(11) NOT NULL,
  `current` tinyint(1) NOT NULL,
  `viewed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hf_episodes`
--

INSERT INTO `hf_episodes` (`id`, `id_saison`, `id_serie`, `n`, `current`, `viewed`) VALUES
(1, 1, 1, 1, 0, 1),
(70, 1, 1, 2, 0, 1),
(71, 1, 1, 3, 0, 1),
(72, 1, 1, 4, 0, 1),
(73, 1, 1, 5, 0, 1),
(74, 1, 1, 6, 0, 1),
(75, 1, 1, 7, 0, 1),
(76, 1, 1, 8, 0, 1),
(77, 1, 1, 9, 0, 1),
(78, 2, 1, 1, 0, 1),
(79, 2, 1, 2, 0, 1),
(80, 2, 1, 3, 0, 1),
(81, 2, 1, 4, 0, 1),
(82, 2, 1, 5, 0, 1),
(83, 2, 1, 6, 0, 1),
(84, 2, 1, 7, 0, 1),
(85, 2, 1, 8, 0, 1),
(86, 2, 1, 9, 0, 1),
(87, 2, 1, 10, 0, 1),
(88, 3, 1, 1, 0, 1),
(89, 3, 1, 2, 0, 1),
(90, 3, 1, 3, 0, 1),
(91, 3, 1, 4, 0, 1),
(92, 3, 1, 5, 0, 1),
(93, 3, 1, 6, 0, 1),
(94, 3, 1, 7, 0, 1),
(95, 3, 1, 8, 0, 1),
(96, 3, 1, 9, 0, 1),
(97, 3, 1, 10, 0, 1),
(98, 4, 1, 1, 0, 1),
(99, 4, 1, 2, 0, 1),
(100, 4, 1, 3, 0, 1),
(101, 4, 1, 4, 0, 1),
(102, 4, 1, 5, 1, 0),
(103, 4, 1, 6, 0, 0),
(104, 4, 1, 7, 0, 0),
(105, 4, 1, 8, 0, 0),
(106, 4, 1, 9, 0, 0),
(107, 4, 1, 10, 0, 0),
(108, 4, 1, 11, 0, 0),
(109, 4, 1, 12, 0, 0),
(110, 4, 1, 13, 0, 0),
(111, 4, 1, 14, 0, 0),
(112, 4, 1, 15, 0, 0),
(113, 4, 1, 16, 0, 0),
(114, 4, 1, 17, 0, 0),
(115, 4, 1, 18, 0, 0),
(116, 4, 1, 19, 0, 0),
(117, 4, 1, 20, 0, 0),
(118, 5, 1, 1, 0, 0),
(119, 5, 1, 2, 0, 0),
(120, 5, 1, 3, 0, 0),
(121, 5, 1, 4, 0, 0),
(122, 5, 1, 5, 0, 0),
(123, 5, 1, 6, 0, 0),
(124, 5, 1, 7, 0, 0),
(125, 5, 1, 8, 0, 0),
(126, 5, 1, 9, 0, 0),
(127, 5, 1, 10, 0, 0),
(128, 5, 1, 11, 0, 0),
(129, 5, 1, 12, 0, 0),
(130, 5, 1, 13, 0, 0),
(131, 5, 1, 14, 0, 0),
(132, 5, 1, 15, 0, 0),
(133, 5, 1, 16, 0, 0),
(134, 5, 1, 17, 0, 0),
(135, 5, 1, 18, 0, 0),
(136, 5, 1, 19, 0, 0),
(137, 5, 1, 20, 0, 0),
(138, 6, 2, 1, 0, 1),
(139, 6, 2, 2, 0, 1),
(140, 6, 2, 3, 0, 1),
(141, 6, 2, 4, 0, 1),
(142, 6, 2, 5, 0, 1),
(143, 6, 2, 6, 0, 1),
(144, 6, 2, 7, 0, 1),
(145, 6, 2, 8, 0, 1),
(146, 6, 2, 9, 0, 1),
(147, 7, 2, 1, 0, 1),
(148, 7, 2, 2, 0, 1),
(149, 7, 2, 3, 0, 1),
(150, 7, 2, 4, 0, 1),
(151, 7, 2, 5, 0, 1),
(152, 7, 2, 6, 0, 1),
(153, 7, 2, 7, 0, 1),
(154, 7, 2, 8, 0, 1),
(155, 7, 2, 9, 0, 1),
(156, 7, 2, 10, 0, 1),
(157, 7, 2, 11, 0, 1),
(158, 7, 2, 12, 0, 1),
(159, 7, 2, 13, 0, 1),
(160, 7, 2, 14, 0, 1),
(161, 7, 2, 15, 0, 1),
(162, 7, 2, 16, 0, 1),
(163, 7, 2, 17, 0, 1),
(164, 7, 2, 18, 0, 1),
(165, 7, 2, 19, 0, 1),
(166, 7, 2, 20, 0, 1),
(167, 7, 2, 21, 0, 1),
(168, 7, 2, 22, 0, 1),
(169, 7, 2, 23, 0, 1),
(170, 7, 2, 24, 0, 1),
(171, 7, 2, 25, 0, 1),
(172, 7, 2, 26, 0, 1),
(173, 7, 2, 27, 0, 1),
(174, 8, 2, 1, 0, 1),
(175, 8, 2, 2, 0, 1),
(176, 8, 2, 3, 0, 1),
(177, 8, 2, 4, 0, 1),
(178, 8, 2, 5, 0, 1),
(179, 8, 2, 6, 0, 1),
(180, 8, 2, 7, 0, 1),
(181, 8, 2, 8, 0, 1),
(182, 8, 2, 9, 0, 1),
(183, 8, 2, 10, 0, 1),
(184, 8, 2, 11, 0, 1),
(185, 8, 2, 12, 0, 1),
(186, 8, 2, 13, 0, 1),
(187, 8, 2, 14, 0, 1),
(188, 8, 2, 15, 0, 1),
(189, 8, 2, 16, 0, 1),
(190, 8, 2, 17, 0, 1),
(191, 8, 2, 18, 0, 1),
(192, 8, 2, 19, 0, 1),
(193, 8, 2, 20, 0, 1),
(194, 8, 2, 21, 0, 1),
(195, 8, 2, 22, 0, 1),
(196, 8, 2, 23, 0, 1),
(197, 8, 2, 24, 0, 1),
(198, 8, 2, 25, 0, 1),
(199, 9, 2, 1, 0, 1),
(200, 9, 2, 2, 0, 1),
(201, 9, 2, 3, 0, 1),
(202, 9, 2, 4, 0, 1),
(203, 9, 2, 5, 0, 1),
(204, 9, 2, 6, 0, 1),
(205, 9, 2, 7, 0, 1),
(206, 9, 2, 8, 0, 1),
(207, 9, 2, 9, 0, 1),
(208, 9, 2, 10, 0, 1),
(209, 9, 2, 11, 0, 1),
(210, 9, 2, 12, 0, 1),
(211, 9, 2, 13, 0, 1),
(212, 9, 2, 14, 0, 1),
(213, 9, 2, 15, 1, 0),
(214, 9, 2, 16, 0, 0),
(215, 9, 2, 17, 0, 0),
(216, 10, 2, 1, 0, 0),
(217, 10, 2, 2, 0, 0),
(218, 10, 2, 3, 0, 0),
(219, 10, 2, 4, 0, 0),
(220, 10, 2, 5, 0, 0),
(221, 10, 2, 6, 0, 0),
(222, 10, 2, 7, 0, 0),
(223, 10, 2, 8, 0, 0),
(224, 10, 2, 9, 0, 0),
(225, 10, 2, 10, 0, 0),
(226, 10, 2, 11, 0, 0),
(227, 10, 2, 12, 0, 0),
(228, 10, 2, 13, 0, 0),
(229, 10, 2, 14, 0, 0),
(230, 10, 2, 15, 0, 0),
(231, 10, 2, 16, 0, 0),
(232, 10, 2, 17, 0, 0),
(233, 10, 2, 18, 0, 0),
(234, 10, 2, 19, 0, 0),
(235, 10, 2, 20, 0, 0),
(236, 10, 2, 21, 0, 0),
(237, 10, 2, 22, 0, 0),
(238, 10, 2, 23, 0, 0),
(239, 10, 2, 24, 0, 0),
(240, 11, 2, 1, 0, 0),
(241, 11, 2, 2, 0, 0),
(242, 11, 2, 3, 0, 0),
(243, 11, 2, 4, 0, 0),
(244, 11, 2, 5, 0, 0),
(245, 11, 2, 6, 0, 0),
(246, 11, 2, 7, 0, 0),
(247, 11, 2, 8, 0, 0),
(248, 11, 2, 9, 0, 0),
(249, 11, 2, 10, 0, 0),
(250, 11, 2, 11, 0, 0),
(251, 11, 2, 12, 0, 0),
(252, 11, 2, 13, 0, 0),
(253, 11, 2, 14, 0, 0),
(254, 11, 2, 15, 0, 0),
(255, 11, 2, 16, 0, 0),
(256, 11, 2, 17, 0, 0),
(257, 11, 2, 18, 0, 0),
(258, 11, 2, 19, 0, 0),
(259, 11, 2, 20, 0, 0),
(260, 11, 2, 21, 0, 0),
(261, 11, 2, 22, 0, 0),
(262, 11, 2, 23, 0, 0),
(263, 11, 2, 24, 0, 0),
(264, 12, 2, 1, 0, 0),
(265, 12, 2, 2, 0, 0),
(266, 12, 2, 3, 0, 0),
(267, 12, 2, 4, 0, 0),
(268, 12, 2, 5, 0, 0),
(269, 12, 2, 6, 0, 0),
(270, 12, 2, 7, 0, 0),
(271, 12, 2, 8, 0, 0),
(272, 12, 2, 9, 0, 0),
(273, 12, 2, 10, 0, 0),
(274, 12, 2, 11, 0, 0),
(275, 12, 2, 12, 0, 0),
(276, 12, 2, 13, 0, 0),
(277, 12, 2, 14, 0, 0),
(278, 12, 2, 15, 0, 0),
(279, 12, 2, 16, 0, 0),
(280, 12, 2, 17, 0, 0),
(281, 12, 2, 18, 0, 0),
(282, 12, 2, 19, 0, 0),
(283, 12, 2, 20, 0, 0),
(284, 12, 2, 21, 0, 0),
(285, 12, 2, 22, 0, 0),
(286, 13, 2, 1, 0, 0),
(287, 13, 2, 2, 0, 0),
(288, 13, 2, 3, 0, 0),
(289, 13, 2, 4, 0, 0),
(290, 13, 2, 5, 0, 0),
(291, 13, 2, 6, 0, 0),
(292, 13, 2, 7, 0, 0),
(293, 13, 2, 8, 0, 0),
(294, 13, 2, 9, 0, 0),
(295, 13, 2, 10, 0, 0),
(296, 13, 2, 11, 0, 0),
(297, 13, 2, 12, 0, 0),
(298, 13, 2, 13, 0, 0),
(299, 13, 2, 14, 0, 0),
(300, 13, 2, 15, 0, 0),
(301, 13, 2, 16, 0, 0),
(302, 13, 2, 17, 0, 0),
(303, 13, 2, 18, 0, 0),
(304, 13, 2, 19, 0, 0),
(305, 13, 2, 20, 0, 0),
(306, 13, 2, 21, 0, 0),
(307, 13, 2, 22, 0, 0),
(308, 13, 2, 23, 0, 0),
(309, 13, 2, 24, 0, 0),
(310, 14, 2, 1, 0, 0),
(311, 14, 2, 2, 0, 0),
(312, 14, 2, 3, 0, 0),
(313, 14, 2, 4, 0, 0),
(314, 14, 2, 5, 0, 0),
(315, 14, 2, 6, 0, 0),
(316, 14, 2, 7, 0, 0),
(317, 14, 2, 8, 0, 0),
(318, 14, 2, 9, 0, 0),
(319, 14, 2, 10, 0, 0),
(320, 14, 2, 11, 0, 0),
(321, 14, 2, 12, 0, 0),
(322, 14, 2, 13, 0, 0),
(323, 14, 2, 14, 0, 0),
(324, 14, 2, 15, 0, 0),
(325, 14, 2, 16, 0, 0),
(326, 14, 2, 17, 0, 0),
(327, 14, 2, 18, 0, 0),
(328, 14, 2, 19, 0, 0),
(329, 14, 2, 20, 0, 0),
(330, 14, 2, 21, 0, 0),
(331, 14, 2, 22, 0, 0),
(332, 14, 2, 23, 0, 0),
(333, 14, 2, 24, 0, 0),
(334, 15, 2, 1, 0, 0),
(335, 15, 2, 2, 0, 0),
(336, 15, 2, 3, 0, 0),
(337, 15, 2, 4, 0, 0),
(338, 15, 2, 5, 0, 0),
(339, 15, 2, 6, 0, 0),
(340, 15, 2, 7, 0, 0),
(341, 15, 2, 8, 0, 0),
(342, 15, 2, 9, 0, 0),
(343, 15, 2, 10, 0, 0),
(344, 15, 2, 11, 0, 0),
(345, 15, 2, 12, 0, 0),
(346, 15, 2, 13, 0, 0),
(347, 15, 2, 14, 0, 0),
(348, 15, 2, 15, 0, 0),
(349, 15, 2, 16, 0, 0),
(350, 15, 2, 17, 0, 0),
(351, 15, 2, 18, 0, 0),
(352, 15, 2, 19, 0, 0),
(353, 15, 2, 20, 0, 0),
(354, 15, 2, 21, 0, 0),
(355, 15, 2, 22, 0, 0),
(356, 15, 2, 23, 0, 0),
(357, 15, 2, 24, 0, 0),
(358, 16, 2, 1, 0, 0),
(359, 16, 2, 2, 0, 0),
(360, 16, 2, 3, 0, 0),
(361, 16, 2, 4, 0, 0),
(362, 16, 2, 5, 0, 0),
(363, 16, 2, 6, 0, 0),
(364, 16, 2, 7, 0, 0),
(365, 16, 2, 8, 0, 0),
(366, 16, 2, 9, 0, 0),
(367, 16, 2, 10, 0, 0),
(368, 16, 2, 11, 0, 0),
(369, 16, 2, 12, 0, 0),
(370, 16, 2, 13, 0, 0),
(371, 16, 2, 14, 0, 0),
(372, 16, 2, 15, 0, 0),
(373, 16, 2, 16, 0, 0),
(374, 16, 2, 17, 0, 0),
(375, 16, 2, 18, 0, 0),
(376, 16, 2, 19, 0, 0),
(377, 16, 2, 20, 0, 0),
(378, 16, 2, 21, 0, 0),
(379, 16, 2, 22, 0, 0),
(380, 16, 2, 23, 0, 0),
(381, 16, 2, 24, 0, 0),
(382, 16, 2, 25, 0, 0),
(383, 17, 2, 1, 0, 0),
(384, 17, 2, 2, 0, 0),
(385, 17, 2, 3, 0, 0),
(386, 17, 2, 4, 0, 0),
(387, 17, 2, 5, 0, 0),
(388, 17, 2, 6, 0, 0),
(389, 17, 2, 7, 0, 0),
(390, 17, 2, 8, 0, 0),
(391, 17, 2, 9, 0, 0),
(392, 17, 2, 10, 0, 0),
(393, 17, 2, 11, 0, 0),
(394, 17, 2, 12, 0, 0),
(395, 17, 2, 13, 0, 0),
(396, 17, 2, 14, 0, 0),
(397, 17, 2, 15, 0, 0),
(398, 17, 2, 16, 0, 0),
(399, 17, 2, 17, 0, 0),
(400, 17, 2, 18, 0, 0),
(401, 17, 2, 19, 0, 0),
(402, 17, 2, 20, 0, 0),
(403, 17, 2, 21, 0, 0),
(404, 17, 2, 22, 0, 0),
(405, 17, 2, 23, 0, 0),
(406, 17, 2, 24, 0, 0),
(407, 18, 2, 1, 0, 0),
(408, 18, 2, 2, 0, 0),
(409, 18, 2, 3, 0, 0),
(410, 18, 2, 4, 0, 0),
(411, 18, 2, 5, 0, 0),
(412, 18, 2, 6, 0, 0),
(413, 18, 2, 7, 0, 0),
(414, 18, 2, 8, 0, 0),
(415, 18, 2, 9, 0, 0),
(416, 18, 2, 10, 0, 0),
(417, 18, 2, 11, 0, 0),
(418, 18, 2, 12, 0, 0),
(419, 18, 2, 13, 0, 0),
(420, 18, 2, 14, 0, 0),
(421, 18, 2, 15, 0, 0),
(422, 18, 2, 16, 0, 0),
(423, 18, 2, 17, 0, 0),
(424, 18, 2, 18, 0, 0),
(425, 18, 2, 19, 0, 0),
(426, 18, 2, 20, 0, 0),
(427, 18, 2, 21, 0, 0),
(428, 18, 2, 22, 0, 0),
(429, 18, 2, 23, 0, 0),
(430, 18, 2, 24, 0, 0),
(431, 19, 2, 1, 0, 0),
(432, 19, 2, 2, 0, 0),
(433, 19, 2, 3, 0, 0),
(434, 19, 2, 4, 0, 0),
(435, 19, 2, 5, 0, 0),
(436, 19, 2, 6, 0, 0),
(437, 19, 2, 7, 0, 0),
(438, 19, 2, 8, 0, 0),
(439, 19, 2, 9, 0, 0),
(440, 19, 2, 10, 0, 0),
(441, 19, 2, 11, 0, 0),
(442, 19, 2, 12, 0, 0),
(443, 19, 2, 13, 0, 0),
(444, 19, 2, 14, 0, 0),
(445, 19, 2, 15, 0, 0),
(446, 19, 2, 16, 0, 0),
(447, 19, 2, 17, 0, 0),
(448, 19, 2, 18, 0, 0),
(449, 19, 2, 19, 0, 0),
(450, 19, 2, 20, 0, 0),
(451, 19, 2, 21, 0, 0),
(452, 19, 2, 22, 0, 0),
(453, 19, 2, 23, 0, 0),
(454, 19, 2, 24, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `hf_saisons`
--

CREATE TABLE `hf_saisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_serie` int(10) UNSIGNED NOT NULL,
  `n` int(11) NOT NULL,
  `current` tinyint(1) NOT NULL,
  `viewed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hf_saisons`
--

INSERT INTO `hf_saisons` (`id`, `id_serie`, `n`, `current`, `viewed`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 1, 0),
(5, 1, 5, 0, 0),
(6, 2, 1, 0, 1),
(7, 2, 2, 0, 1),
(8, 2, 3, 0, 1),
(9, 2, 4, 1, 0),
(10, 2, 5, 0, 0),
(11, 2, 6, 0, 0),
(12, 2, 7, 0, 0),
(13, 2, 8, 0, 0),
(14, 2, 9, 0, 0),
(15, 2, 10, 0, 0),
(16, 2, 11, 0, 0),
(17, 2, 12, 0, 0),
(18, 2, 13, 0, 0),
(19, 2, 14, 0, 0),
(20, 2, 15, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `hf_series`
--

CREATE TABLE `hf_series` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hf_series`
--

INSERT INTO `hf_series` (`id`, `title`) VALUES
(1, 'Vikings'),
(2, 'Grey\'s Anatomy');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_03_201238_hf_series', 1),
(2, '2018_10_03_210010_hf_saisons', 1),
(3, '2018_10_03_210020_hf_episodes', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hf_episodes`
--
ALTER TABLE `hf_episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hf_episodes_id_saison_index` (`id_saison`),
  ADD KEY `hf_episodes_id_serie_index` (`id_serie`);

--
-- Index pour la table `hf_saisons`
--
ALTER TABLE `hf_saisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hf_saisons_id_serie_index` (`id_serie`);

--
-- Index pour la table `hf_series`
--
ALTER TABLE `hf_series`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hf_episodes`
--
ALTER TABLE `hf_episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT pour la table `hf_saisons`
--
ALTER TABLE `hf_saisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `hf_series`
--
ALTER TABLE `hf_series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hf_episodes`
--
ALTER TABLE `hf_episodes`
  ADD CONSTRAINT `hf_episodes_id_saison_foreign` FOREIGN KEY (`id_saison`) REFERENCES `hf_saisons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hf_episodes_id_serie_foreign` FOREIGN KEY (`id_serie`) REFERENCES `hf_series` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `hf_saisons`
--
ALTER TABLE `hf_saisons`
  ADD CONSTRAINT `hf_saisons_id_serie_foreign` FOREIGN KEY (`id_serie`) REFERENCES `hf_series` (`id`) ON DELETE CASCADE;
