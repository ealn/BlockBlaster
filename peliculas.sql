-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 11:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockblaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `ID_PELICULA` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PAIS` varchar(50) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `DESCRIPCION` blob NOT NULL,
  `DURACION` int(11) NOT NULL,
  `LINK` blob NOT NULL,
  `IMG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`ID_PELICULA`, `NOMBRE`, `PAIS`, `YEAR`, `DESCRIPCION`, `DURACION`, `LINK`, `IMG`) VALUES
(1, 'Birdman o (La inesperada virtud de la ignorancia)', 'Estados Unidos', '2014', 0x426972646d616e206f72202854686520556e657870656374656420566972747565206f662049676e6f72616e6365292028656e2065737061c3b16f6c2c20426972646d616e206f206c6120696e657370657261646120766972747564206465206c612069676e6f72616e6369612920657320756e612070656cc3ad63756c612065737461646f756e6964656e73652064652068756d6f72206e6567726f20646972696769646120706f7220416c656a616e64726f20476f6e7ac3a16c657a2049c3b1c3a1727269747520792070726f7461676f6e697a61646120706f72204d69636861656c204b6561746f6e2c20456d6d612053746f6e652c20456477617264204e6f72746f6e2c20416e647265612052697365626f726f7567682c205a6163682047616c696669616e616b69732c204e616f6d69205761747473207920416d79205279616e2e, 119, 0x656d6265642f374774525037506971776f, 'images/1.jpg'),
(2, '12 años de esclavitud', 'Estados Unidos', '2013', 0x31322061c3b16f73206465206573636c6176697475642073652065737472656ec3b320656e20656c20466573746976616c2064652043696e652064652054656c6c757269646520656c2033302064652061676f73746f2064652032303133207920686120726563696269646f206372c3ad74696361732067656e6572616c6d656e746520706f73697469766173206465206c6f7320657370656369616c69737461732e20537520646562757420656e206c6f732063696e65732065737461646f756e6964656e7365732066756520656c203138206465206f63747562726520646520323031332c206d69656e747261732071756520656e205265696e6f20556e69646f2066756520656c20313020646520656e65726f20646520323031342e, 134, 0x656d6265642f384d734554765159465a38, 'images/2.jpg'),
(3, 'Argo', 'Estados Unidos', '2012', 0x4172676f20657320756e612070656cc3ad63756c612064652073757370656e73652065737461646f756e6964656e73652064656c2061c3b16f20323031323220646972696769646120706f722042656e204166666c65636b2c2067616e61646f72612064656c20c393736361722061206c61206d656a6f722070656cc3ad63756c612e20457320756e61206472616d6174697a616369c3b36e206465206c61207061727469636970616369c3b36e2064656c20656e746f6e636573206167656e7465206465206c612043494120546f6e79204d656e64657a20656e20656c2068697374c3b37269636f20726573636174652064652073656973206469706c6f6dc3a17469636f73206465206c6f732045737461646f7320556e69646f7320647572616e7465206c6f73207072696d65726f73206d65736573206465206c6120637269736973206465206c6f7320726568656e657320656e204972c3a16e2c2073756365736f20636f6e6f6369646f20636f6d6f2043616e616469616e2043617065722e, 120, 0x656d6265642f727548316e4151686a4930, 'images/3.jpg'),
(4, 'El discurso del rey', 'Reino Unido', '2010', 0x456c20646973637572736f2064656c2072657920e2809474c3ad74756c6f206f726967696e616c3a20546865204b696e67277320537065656368e2809420657320756e612070656cc3ad63756c612062726974c3a16e696361206465203230313020646972696769646120706f7220546f6d20486f6f7065722061207061727469722064656c206775696f6e206573637269746f20706f7220446176696420536569646c65722e2050657274656e6563652061206c6f732067c3a96e65726f73206472616dc3a17469636f20652068697374c3b37269636f2e204c61207472616d61206769726120656e20746f726e6f20616c206475717565204a6f72676520646520596f726b20717569656e2c20706172612076656e636572206c612074617274616d7564657a2c20616375646520616c20666f6e6f61756469c3b36c6f676f206175737472616c69616e6f204c696f6e656c204c6f6775652e, 118, 0x656d6265642f6a434f58634e525775424d, 'images/4.jpg'),
(5, 'Zona de miedo', 'Estados Unidos', '2008', 0x5468652048757274204c6f636b65722028746974756c61646120456e2074696572726120686f7374696c20656e2045737061c3b1612079205a6f6e61206465206d6965646f206f20566976697220616c206cc3ad6d69746520656e2048697370616e6f616dc3a9726963612920657320756e612070656cc3ad63756c612065737461646f756e6964656e736520646520323030382c20646972696769646120706f72204b61746872796e20426967656c6f772079206573637269746120706f72204d61726b20426f616c2e2050726f7461676f6e697a61646120706f72204a6572656d792052656e6e65722c20416e74686f6e79204d61636b6965207920427269616e2047657261676874792c2072656c61746120656c2064c3ad6120612064c3ad6120646520756e6120627269676164612065737461646f756e6964656e736520646520617274696669636965726f7320646573706c656761646120656e204972616b2e, 131, 0x656d6265642f416a346f46743844535277, 'images/5.jpg'),
(6, 'El Artista', 'Francia', '2011', 0x5468652041727469737420e28094636f6e6f6369646120636f6d6f20456c206172746973746120656e2048697370616e6f616dc3a972696361e2809420657320756e612070656cc3ad63756c61206672616e636573616e62203120322033203420352036206465206472616d61207920636f6d6564696120726f6dc3a16e7469636120656e20656c20657374696c6f20646520756e612070656cc3ad63756c61206d75646120656e20626c616e636f2079206e6567726f2e37203820392031302045736372697461207920646972696769646120706f72204d696368656c2048617a616e617669636975732c20657374c3a12070726f7461676f6e697a61646120706f72204a65616e2044756a617264696e20792042c3a972c3a96e6963652042656a6f2e20, 100, 0x656d6265642f6849386945595042677149, 'images/6.jpg'),
(7, '¿Quién quiere ser millonario?', 'Reino Unido', '2008', 0x536c756d646f67204d696c6c696f6e616972652028746974756c61646120c2bf517569c3a96e2071756965726520736572206d696c6c6f6e6172696f3f20656e2048697370616e6f616dc3a9726963612920657320756e612070656cc3ad63756c6120496e64696f2d62726974c3a16e6963612064656c20323030382c20646972696769646120706f722044616e6e7920426f796c652079206573637269746120706f722053696d6f6e2042656175666f792c2067616e61646f72612064652038205072656d696f7320c393736361722e204c612070656cc3ad63756c6120657374c3a12062617361646120656e206c61206e6f76656c6120c2bf51756965726520736572206d696c6c6f6e6172696f3f202874c3ad74756c6f206f726967696e616c3a205120262041292c2064656c206573637269746f722079206469706c6f6dc3a17469636f20696e64696f2056696b6173205377617275702e, 120, 0x656d6265642f59357a5479687264576334, 'images/7.jpg'),
(8, 'Sin lugar para los débiles', 'Estados Unidos', '2007', 0x204c612070656cc3ad63756c612065732070726f7461676f6e697a61646120706f7220546f6d6d79204c6565204a6f6e65732c204a61766965722042617264656d2079204a6f73682042726f6c696e2079206e61727261206c6120686973746f72696120646520756e20686f6d6272652071756520736520746f706120636f6e20756e6120666f7274756e6120717565206e6f206c652070657274656e6563652c206c6f2071756520726573756c746120656e20756e206472616d612071756520656e7472656c617a61206c6f732063616d696e6f73206465207472657320686f6d6272657320656e20656c20646573c3a9727469636f2070616973616a652064656c206f6573746520646520546578617320656e206c6f732061c3b16f7320313938302e, 122, 0x656d6265642f3338415f5f5754332d6f30, 'images/8.jpg'),
(9, 'Los infiltrados', 'Estados Unidos', '2006', 0x20546865204465706172746564206675652067616e61646f72612064656c205072656d696f20c393736361722061206c61206d656a6f722070656cc3ad63756c6120656e206c6120656e7472656761206ec3ba6d65726f203739206465206c6f73207072656d696f73206465206c612041636164656d6961206465206c61732041727465732079206c6173204369656e636961732043696e656d61746f6772c3a166696361732e204d617274696e2053636f727365736520726563696269c3b320656c20c3937363617220616c206d656a6f72206469726563746f722c205468656c6d61205363686f6f6e6d616b657220656c20c3937363617220616c206d656a6f72206d6f6e74616a6520792057696c6c69616d204d6f6e6168616e20656c20c3937363617220616c206d656a6f7220677569c3b36e20616461707461646f2c20746f646f7320706f722073752072657370656374697661206c61626f7220656e20657374652066696c6d652e, 151, 0x656d6265642f6e35476f4b664169366e4d, 'images/9.jpg'),
(10, 'Crash (Alto impacto)', 'Estados Unidos', '2004', 0x2050726f7461676f6e697a61646120706f7220756e207265706172746f20636f72616c20656e20656c2071756520646573746163616e206e6f6d6272657320636f6d6f20446f6e2043686561646c652c2054657272656e636520486f776172642c205279616e205068696c6c697070652c204d6174742044696c6c6f6e2c205468616e646965204e6577746f6e2c20436872697320427269646765732c2053616e6472612042756c6c6f636b2079204272656e64616e204672617365722e20526573756c74c3b32067616e61646f72612064652074726573205072656d696f7320c3937363617220656e206c61206564696369c3b36e20646520323030352c20696e636c7579656e646f20656c20c393736361722061206c61206d656a6f722070656cc3ad63756c612c20c3937363617220616c206d656a6f72206775696f6e206f726967696e616c207920c3937363617220616c206d656a6f72206d6f6e74616a652e, 112, 0x656d6265642f6475724e776539704c3045, 'images/10.jpg'),
(11, 'El Señor de los Anillos: el retorno del Rey', 'Estados Unidos', '2003', 0x204573206c6120746572636572612070656cc3ad63756c61206465206c61207472696c6f67c3ad612063696e656d61746f6772c3a16669636120646520456c207365c3b16f72206465206c6f7320616e696c6c6f732c20646972696769646120706f72205065746572204a61636b736f6e20792062617361646120656e206c612074657263657261207061727465206465206c61206f627261206465204a2e20522e20522e20546f6c6b69656e2c20456c207365c3b16f72206465206c6f7320416e696c6c6f732e205475766f20756e20707265737570756573746f206465203934206d696c6c6f6e65732064652064c3b36c6172657320792066756520726f646164612064656c203131206465206f637475627265206465203139393920616c2032322064652064696369656d62726520646520323030302e, 200, 0x656d6265642f6355757a332d5143673538, 'images/11.jpg'),
(12, 'El Gladiador', 'Estados Unidos', '2000', 0x43726f776520696e74657270726574612061204dc3a178696d6f2044c3a963696d6f204d65726964696f2c20756e206c65616c2067656e6572616c2068697370616e6f2064656c20656ac3a9726369746f206465206c6120416e746967756120526f6d612c20717565206573207472616963696f6e61646f20706f722043c3b36d6f646f2c20656c20616d626963696f736f2068696a6f2064656c20656d70657261646f722c20717569656e2068612061736573696e61646f2061207375207061647265207920736520686120686563686f20636f6e20656c2074726f6e6f2e20466f727a61646f206120636f6e766572746972736520656e206573636c61766f2c204dc3a178696d6f20747269756e666120636f6d6f20676c61646961646f72206d69656e7472617320616e68656c612076656e676172206c61206d75657274652064652073752066616d696c6961207920737520656d70657261646f722e, 155, 0x656d6265642f6f774b3171784473656c45, 'images/12.jpg'),
(13, 'Titanic', 'Estados Unidos', '1997', 0x546974616e696320657320756e612070656cc3ad63756c612065737461646f756e6964656e7365206472616dc3a1746963612d646520636174c3a17374726f666520646520313939372064697269676964612079206573637269746120706f72204a616d65732043616d65726f6e20792070726f7461676f6e697a61646120706f72204c656f6e6172646f20446943617072696f2c204b6174652057696e736c65742c2042696c6c79205a616e652c204b617468792042617465732c20476c6f7269612053747561727420792042696c6c20506178746f6e2e204c61207472616d612c20756e612065706f7065796120726f6dc3a16e746963612c3320342072656c617461206c612072656c616369c3b36e206465204a61636b20446177736f6e207920526f7365204465576974742042756b6174652e, 195, 0x656d6265642f5a51366b6c4f4e43713473, 'images/13.jpg'),
(14, 'Corazón valiente', 'Estados Unidos', '1995', 0x4272617665686561727420657320756e612070656cc3ad63756c612065737461646f756e6964656e73652068697374c3b3726963612d6472616dc3a17469636120646520313939352064697269676964612c2070726f64756369646120792070726f7461676f6e697a61646120706f72204d656c20476962736f6e2e204c612063696e746120c3a9706963612c2062617361646120656e206c6120766964612064652057696c6c69616d2057616c6c6163652c20756e2068c3a9726f65206e6163696f6e616c206573636f63c3a97320717565207061727469636970c3b320656e206c61205072696d6572612047756572726120646520496e646570656e64656e636961206465204573636f6369612c206675652067616e61646f72612064652063696e636f205072656d696f73206465206c612041636164656d69612c20696e636c7579656e646f20656c20c393736361722061206c61204d656a6f722070656cc3ad63756c612e, 177, 0x656d6265642f31636e6f4d384569474755, 'images/14.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`ID_PELICULA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID_PELICULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
