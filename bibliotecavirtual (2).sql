-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 13:21:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecavirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLibro` int(11) NOT NULL,
  `autorLibro` text NOT NULL,
  `nombreLibro` varchar(200) NOT NULL,
  `editorialLibro` varchar(30) NOT NULL,
  `fechaLibro` date NOT NULL,
  `pdfLibro` varchar(500) NOT NULL,
  `imagenLibro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idLibro`, `autorLibro`, `nombreLibro`, `editorialLibro`, `fechaLibro`, `pdfLibro`, `imagenLibro`) VALUES
(1, 'Chemella Graciela', 'EGB 2 : Matematicas', 'ministerio de educacion ', '2000-01-01', 'https://shortest.link/DOA', '../img/im1.jpg'),
(2, 'Perczyck Jaime', 'EGB 2 : Educacion Fisica', 'ministerio de educacion', '2000-01-01', 'https://shortest.link/DOH', '../img/img4.jpg'),
(3, 'Clerico Maria Laura', 'EGB 3: Formacion etica y ciudadana', 'ministerio de educacion ', '2000-01-01', 'https://shortest.link/DOF', '../img/img3.jpg'),
(4, 'Mario Petrosini ', 'EGB 3 : Tecnologia', 'ministerio de educacion', '2000-01-01', 'https://shortest.link/DOD', '../img/img2.jpg'),
(5, 'Alvarado Maite', 'EGB 3 : Lengua ', 'ministerio de educacion ', '2000-01-01', 'https://shortest.link/DOJ', '../img/img5.jpg'),
(6, 'Inhelder, Bärbel; Piaget', 'De la lógica del niño a la lógica del adolescente : ensayo sobre la construcción de las estructuras operatorias formales', 'ministerio de educacion', '1985-01-01', 'https://shortest.link/DNX', '../img/img6.jpg'),
(7, 'Piaget, Jean; Inhelder, Bärbe', 'Psicología del niño', 'ministerio de educacion', '1977-01-01', 'https://shortest.link/DOh', '../img/img7.jpg'),
(8, 'Piaget, Jean; Petit, Nuria', 'Seis estudios de psicología', 'ministerio de educacion', '1998-01-01', 'https://shortest.link/DOX', '../img/img8.jpg'),
(9, 'Itkin, Silvia Nora', 'Ciencias sociales : una aproximación al conocimiento del entorno social', 'ministerio de educacion', '1999-01-01', 'https://shortest.link/DPm', '../img/img9.jpg'),
(10, 'Itkin, Silvia Nora', 'Ciencias naturales : una aproximación al conocimiento del entorno natural', 'ministerio de educacion', '1999-01-01', 'https://shortest.link/DPu', '../img/img10.jpg'),
(11, 'Educativo', 'Programación profesional con Visual Basic [recurso electrónico]', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/DPx', '../img/img11.jpg'),
(12, 'Educativo', 'Enciclopedia multimedia Aula Abierta', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/F79', '../img/img12.jpg'),
(13, 'Posse, Beatriz Elena; Krause', 'La situación económica en la Argentina : Siglo XXI', 'ministerio de educacion', '2002-01-01', 'https://shortest.link/F7k', '../img/img13.jpg'),
(14, 'Yauch, Wilbur A', 'Las relaciones humanas y la escuela', 'ministerio de educacion', '1969-01-01', 'https://shortest.link/F7z', '../img/img14.jpg'),
(15, 'Lara, Albina L', 'Los cambios mundiales y la enseñanza de la geografía', 'ministerio de educacion', '1994-01-01', 'ttps://shortest.link/DQ9', '../img/img15.jpg'),
(16, 'Pelosi, Hebe Carmen', 'Historia. 1 : Módulo 1 : la romanización de España', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/DQe', '../img/img16.jpg'),
(17, 'Pelosi, Hebe Carmen', 'Historia 1:Módulo 2 : la España visigoda y cristiana ', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/DQq', '../img/img17.jpg'),
(18, 'Pelosi, Hebe Carmen', ' Historia 1:Módulo 3 : las culturas indígenas', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/DQB', '../img/img18.jpg'),
(19, 'Splitter, Laurence J', 'La otra educación : filosofía para niños y la comunidad de indagación', 'ministerio de educacion', '1996-01-01', 'https://shortest.link/F8j', '../img/img19.jpg'),
(20, 'Guasco, María Josefa', 'Geometría su enseñanza', 'ministerio de educacion', '1996-01-01', 'https://shortest.link/DQT', '../img/img20.jpg'),
(21, 'Nérici, Imídeo Giuseppe', 'Hacia una didáctica general dinámica', 'ministerio de educacion', '1969-01-01', 'https://shortest.link/DZ9', '../img/img21.jpg'),
(22, 'Mattos, Luiz Alves', 'Compendio de didáctica general', 'ministerio de educacion', '1963-01-01', 'https://shortest.link/DZg', '../img/img22.jpg'),
(23, 'Cernuschi, Félix', 'Cómo debe orientarse la enseñanza de la ciencia', 'ministerio de educacion', '1961-01-01', 'https://shortest.link/DZT', '../img/img23.jpg'),
(24, 'Gómez, Germán Rafael', 'La enseñanza de las ciencias : su enfoque histórico-evolutivo', 'ministerio de educacion', '1969-01-01', 'https://shortest.link/DZZ', '../img/img24.jpg'),
(25, 'Flichman, Eduardo', 'Pensamiento científico. 3 : la polémica epistemológica actual, curso de pensamiento científico', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/D-c', '../img/img25.jpg'),
(26, 'Burucúa, José Emilio', 'Pensamiento científico : historia de la idea de progreso', 'ministerio de educacion', '1996-01-01', 'https://shortest.link/D-s', '../img/img26.jpg'),
(27, 'Aljanati, David Jorge', 'Biología. 1 : la vida en la tierra. Una introducción al estudio de la ecosfera : libro del profesor', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/D-u', '../img/img27.jpg'),
(28, 'Fierro, Alfredo', 'Psicología del desarrollo : el mundo del adolescente', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/D-O', '../img/img28.jpg'),
(29, 'Perkins, David', 'La escuela inteligente : del adiestramiento de la memoria a la educación de la mente', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/D-U', '../img/img29.jpg'),
(30, 'Nassif, Ricardo', 'Pedagogía general', 'ministerio de educacion', '1958-01-01', 'https://shortest.link/Gem', '../img/img30.png'),
(31, 'Stinnett, T.M', 'La profesión de enseñar', 'ministerio de educacion', '1968-01-01', 'https://shortest.link/HBP', '../img/img31.jpg'),
(32, 'Doval, Luis', 'Tecnología : estrategia didáctica', 'ministerio de educacion', '1998-01-01', 'https://shortest.link/Gf9', '../img/img32.jfif'),
(33, 'Foncuberta, Juan', 'Análisis matemático : sus aplicaciones', 'ministerio de educacion', '1996-01-01', 'https://shortest.link/Gfq', '../img/img33.jfif'),
(34, 'Berté, Annie', 'Matemática : de EGB 3 al polimodal', 'ministerio de educacion', '1999-01-01', 'https://shortest.link/Gfu', '../img/img34.jpg'),
(35, 'Carmen, Luis \r\n', 'La enseñanza y el aprendizaje de las ciencias de la naturaleza en la educación secundaria', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/Gfx', '../img/img35.jpg'),
(36, 'Rico, Luis', 'La educación matemática en la enseñanza secundaria', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/HCw', '../img/img36.jfif'),
(37, 'Palladino, Enrique', 'Administración organizacional : calidad, capacitación, evaluación', 'ministerio de educacion', '1998-01-01', 'https://shortest.link/HCB', '../img/img37.png'),
(38, 'Slavin, Robert E', 'Aprendizaje cooperativo : teoría, investigación y práctica', 'ministerio de educacion', '1999-01-01', 'https://shortest.link/HCN', '../img/img38.jfif'),
(39, 'Atorresi, Ana', 'Lengua y literatura : los estudios semióticos : el caso de la crónica periodística', 'ministerio de educacion', '1996-01-01', 'https://shortest.link/GjU', '../img/img39.jfif'),
(40, 'Foguelman, Dina', 'Ecología : el agua en Argentina', 'ministerio de educacion', '1994-01-01', 'https://shortest.link/HGV', '../img/img40.jpg'),
(41, 'Foguelman, Dina', 'Ecología 2 : biodiversidad, poblaciones y conservaciones de recursos vivos', 'ministerio de educacion', '1995-01-01', 'https://shortest.link/Gkb', '../img/img41.jpg'),
(42, 'Brailovsky, Antonio Elio', 'El ambiente en la sociedad colonial', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/Gkq', '../img/img42.jpg'),
(43, 'Reid, David J', 'Ciencia para todos en secundaria', 'ministerio de educacion', '1993-01-01', 'https://shortest.link/Gkx', '../img/img43.jpg'),
(44, 'Doval, Luis', 'Tecnología : estrategia didáctica', 'ministerio de educacion', '1998-01-01', 'https://shortest.link/GkG', '../img/img44.png'),
(45, 'Gay, Aquiles', 'Temas para la educación tecnológica : modelos, materiales, energía, sistemas, lectura del objeto', 'ministerio de educacion', '1999-01-01', 'https://shortest.link/HJe', '../img/img45.jpg'),
(46, 'Vitagliano, Miguel', 'Lecturas críticas sobre la narrativa argentina', 'ministerio de educacion', '1997-01-01', 'https://shortest.link/HJn', '../img/img46.jfif'),
(47, 'Duràn, Diana', 'Las sociedades y los espacios geogràficos', 'ministerio de educacion', '1996-01-01', 'https://shortesgt.link/HJt', '../img/img47.jfif'),
(48, 'Maiztegui, Alberto', 'Fìsica : Su enseñanza1', 'ministerio de educacion', '1997-01-01', 'https://bit.ly/3DuFpMm', '../img/img48.jpg'),
(49, 'Oszlak, Oscar', 'La formaciòn del Estado argentino : Orden, progreso y organizaciòn Nacional', 'ministerio de educacion', '1997-01-01', 'https://bit.ly/3DmmIdu', '../img/img49.jpg'),
(50, 'Iglesias, Evaristo', 'LA ESCUELA PUBLICA BONAERENSE : Hasta la caìda de Rosas', 'ministerio de educacion', '1946-01-01', 'https://bit.ly/3km1wvA', '../img/img50.jfif'),
(51, 'Schuster, Fèlix G', 'Pensamiento Cientìfico : Mètodo y conocimiento en ciencias sociales. Humanismo y ciencia', 'ministerio de educacion', '1985-01-01', 'https://bit.ly/3krB8jV', '../img/img51.jpg'),
(52, 'Center Office of Information', 'Los Servicios Sociales en Gran Bretaña', 'ministerio de educacion', '1966-01-01', 'https://bit.ly/38fuMyv', '../img/img52.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `Rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `NombreUsuario` text NOT NULL,
  `ContrasenaUsuario` varchar(10) NOT NULL,
  `NombreCompleto` text NOT NULL,
  `emailUsuario` varchar(80) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NombreUsuario`, `ContrasenaUsuario`, `NombreCompleto`, `emailUsuario`, `idRol`) VALUES
(2, 'admin', '29921', 'administrador', 'adminbvirtual@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
