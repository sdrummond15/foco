SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `q74gf_doings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_start` date DEFAULT NULL,
  `hour_start` time DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `hour_end` time DEFAULT NULL,
  `contact` varchar(15) NOT NULL,
  `description` mediumtext NOT NULL,
  `published` tinyint(3) NOT NULL,
  `checked_out` int(10) NOT NULL,
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `ordering` int(10) NOT NULL,
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q74gf_doings` (`id`, `name`, `alias`, `image`, `date_start`, `hour_start`, `date_end`, `hour_end`, `contact`, `description`, `published`, `checked_out`, `checked_out_time`, `created`, `created_by`, `modified`, `modified_by`, `ordering`, `publish_up`, `publish_down`) VALUES
(1, 'Pré-Carnaval', 'pre-carnaval', 'images/eventos/pre_carnaval.jpg', '2019-02-24', '00:00:00', '0000-00-00', '00:00:00', '', 'Este ano a folia vai começar mais cedo no Jaraguá! No dia 24 de fevereiro, o Clube irá promover uma grande festa pré-carnaval, aberta para convidados. Com atrações especiais, o evento promete abrir em grande estilo a folia em 2019.', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:28:22', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Happy Hour Projeto Verão', 'happy-hour-projeto-verao', 'images/eventos/projeto_verao.jpg', '2019-02-22', '00:00:00', '0000-00-00', '00:00:00', '', 'Confira a programação e participe!\r\n', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:08:30', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Baile do Pirata', 'baile-do-pirata', 'images/eventos/baile_pirata.jpg', '2019-03-02', '00:00:00', '0000-00-00', '00:00:00', '', 'Vista sua fantasia e venha se divertir!\r\n', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:19:08', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Matinê Infantil', 'matine-infantil', 'images/eventos/matine_infantil.jpg', '2019-03-03', '10:00:00', '0000-00-00', '14:00:00', '', 'Carnaval das crianças no Clube Jaraguá!', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:23:50', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Carnaval', 'carnaval', 'images/eventos/carnaval.jpg', '2019-03-04', '00:00:00', '2019-03-05', '00:00:00', '', 'Vem para a folia e traga sua família!', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-23 13:12:13', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ressaca Carnaval', 'ressaca-carnaval', 'images/eventos/ressaca_carnaval.jpg', '2019-03-10', '00:00:00', '0000-00-00', '00:00:00', '', 'A folia não acabou.\r\nEstamos esperando você!', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:33:39', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Happy Hour', 'happy-hour', 'images/eventos/happy_hour.jpg', '2019-03-22', '00:00:00', '0000-00-00', '00:00:00', '', 'É dia de happy hour. Comemore conosco com tudo que você tem direito!', 0, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-02-17 20:39:37', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '2º Churrascão do Clube Jaraguá', '2-churrascao-do-clube-jaragua', 'images/eventos/churrascao.jpg', '2019-05-18', '15:00:00', '0000-00-00', '21:00:00', '(31) 3490-9109', '<p>Local: Estacionamento do Clube Jaraguá</p>\r\n<p>Open Bar e Open Food. Atrações musicais Paulinho Alabart, Banda Urbana 2 e Preto Brass.&nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Vendas limitadas a 800 ingressos.</strong></p>', 1, 0, '0000-00-00 00:00:00', '2019-02-13 00:30:02', 195, '2019-03-18 13:40:18', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CIFU 2019', 'cifu-2019', 'images/eventos/cifu_2019.jpg', '2019-03-24', '00:00:00', '2019-06-09', '00:00:00', '(31) 3490-9111', '<p>Local: Campos de Futebol</p>\r\n<p>1ª rodada – 30 e 31/3;<br />2ª rodada – 6 e 7/4;<br />3ª rodada – 13 e 14/4;<br />4ª rodada – 4 e 5/5;<br />5ª rodada – 25 e 26/5;<br />6ª rodada – 1 e 2/6 (semifinais);&nbsp;<br />7ª rodada (final) – 9/6.</p>\r\n<p>As datas podem ser alteradas devido a fatores climáticos.</p>\r\n<p>Categorias: Jovem, Master, Bronze, Prata, Ouro, Diamante.</p>', 1, 0, '0000-00-00 00:00:00', '2019-02-23 12:54:58', 195, '2019-03-16 13:40:00', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Torneio Interno de Futebol Feminino 2019', 'torneio-interno-de-futebol-feminino-2019', 'images/eventos/torneio_feminino2019.jpg', '2019-03-24', '00:00:00', '2019-06-09', '00:00:00', '(31) 3490-9111', '<p>Local: Campos de Futebol Informações:</p>\r\n<p>1ª rodada – 30 e 31/3; <br />2ª rodada – 6 e 7/4; <br />3ª rodada – 13 e 14/4; <br />4ª rodada – 4 e 5/5; <br />5ª rodada – 25 e 26/5; <br />6ª rodada – 1 e 2/6 (semifinais); <br />7ª rodada (final) – 9/6.</p>\r\n<p>As datas podem ser alteradas devido a fatores climáticos.</p>', 1, 0, '0000-00-00 00:00:00', '2019-02-23 13:03:50', 195, '2019-03-18 14:00:32', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Arraiá do Jara', 'arraia-do-jara', 'images/banners/arraia_jara2019.jpg', '2019-06-15', '18:00:00', '2019-06-16', '04:00:00', '', '<p>Local: Clube Jaraguá</p>\r\n<p>Atrações musicais – Daniel, Sambô, Everton Calazans e Banda, Rayan Carlo, Leo De Lima. Boate Teen e Área Infantil (18 às 0h). Apresentação da Quadrilha: Grupo Folclórico Arraial do Milho Verde. Convite Não Sócio Adulo (a partir de 13 anos) – R$ 80,00 e Convite Não Sócio Criança (6 a 12 anos) – R$ 40,00.</p>\r\n<p>Contato: 3490-9109/9110</p>', 1, 0, '0000-00-00 00:00:00', '2019-02-23 13:09:55', 195, '2019-05-01 00:01:37', 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');


ALTER TABLE `q74gf_doings`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `q74gf_doings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
