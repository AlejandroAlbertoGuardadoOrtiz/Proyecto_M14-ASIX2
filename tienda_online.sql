-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 16:30:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `alias` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `stock` int(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `spotify` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`alias`, `nombre`, `imagen`, `stock`, `precio`, `spotify`, `descripcion`) VALUES
('abb', 'ACDC, Back in Black', './img/ACDC_Back_in_Black.png', 5, 10, 'https://open.spotify.com/embed/album/6mUdeDZCsExyJLMdAfDuwh?utm_source=generator', 'Back in Black es el séptimo álbum de estudio de la banda australiana de hard rock AC/DC, lanzado en 1980. Fue grabado en Bahamas y, por segunda vez, producido por Robert \"Mutt\" Lange, siendo Highway to Hell la primera ocasión\r\n\r\nEn este disco figura por primera vez como vocalista Brian Johnson, quien sustituyó a Bon Scott tras su trágica muerte. Las ventas mundiales del disco ascienden a más de 50 millones de copias, lo que lo convierte en el segundo más vendido de la historia de la música detrás de Thriller de Michael Jackson a pesar de nunca haber llegado al número 1 del Billboard 200. El álbum está dedicado a Bon Scott, la portada del disco (el logo de AC/DC sobre un fondo negro) es un claro homenaje al cantante fallecido.'),
('aaero', 'Aerosmith, Aerosmith\'s Greatest Hits', './img/Aerosmith_Aerosmiths_Greatest Hits.jpg', 5, 12, 'https://open.spotify.com/embed/album/3VNTh6evo3MyUsStAiatcY?utm_source=generator', 'Greatest Hits es el primer álbum compilatorio de Aerosmith. Obtuvo multi-platino y contiene algunos de los hits que hizo de la banda un icono de la era del rock de los 70\'s. Algunas versiones remasterizadas de Greatest Hits aparecieron en los 90\'s y son considerados responsables de la reaparición de la banda con sus éxitos clásicos durante la nueva década.'),
('bb', 'Boston, Boston', './img/boston_boston.jpg', 8, 7, 'https://open.spotify.com/embed/album/2QLp07RO6anZHmtcKTEvSC?utm_source=generator', 'Boston es el título del primer álbum de la banda de rock homónima y el cuarto más vendido en los años 1970.\r\n\r\nLa banda estaba liderada por Tom Scholz, compositor y guitarrista del grupo, quien grababa maquetas en un estudio que poseía en el sótano de su casa; entre estas grabaciones estaban seis de las ocho canciones de este disco debut del grupo, que grabaron en Los Ángeles.'),
('grad', 'Guns N Roses, Appetite for Destruction', './img/gunsandrosesad.jpg', 3, 9, 'https://open.spotify.com/embed/album/28yHV3Gdg30AiB8h8em1eW?utm_source=generator', 'es el álbum debut de la banda estadounidense de hard rock Guns N\' Roses, fue publicado por la compañía discográfica Geffen Records el 21 de julio de 1987. Alcanzó el éxito masivo en todo el mundo de forma explosiva posterior a su lanzamiento. Asimismo, Appetite for Destruction es el álbum debut más vendido en toda la historia musical, con más de 30 millones de copias vendidas en todo el mundo.'),
('impowerslave', 'Iron Maiden, Powerslave', './img/ironmaidenpowerslave.jpg', 14, 15, 'https://open.spotify.com/embed/album/309KOMEivisMmBuzk09635?utm_source=generator', 'Powerslave es el quinto álbum de estudio de la banda inglesa de heavy metal Iron Maiden publicado en 1984. La portada presenta a Eddie the Head como la estatua enorme de un faraón.\r\nEste disco fue grabado por los integrantes del grupo a raíz de unas vacaciones que pasaron en Egipto, después de quedar impresionados con la majestuosidad de las pirámides.'),
('jppainkiller', 'Judas Priest, Painkiller', './img/JudasPriestPainkiller.jpg', 11, 25, 'https://open.spotify.com/embed/album/7LgrhuKnAXpNEv8qzcVd2t?utm_source=generator', 'Painkiller es el duodécimo álbum de estudio de la banda británica de heavy metal Judas Priest, publicado en 1990 por Columbia Records. Además, es la última producción con el vocalista Rob Halford luego que en 1992 renunciara, lo que produjo en el grupo un hiato de cerca de cinco años.'),
('kfollowtheleader', 'Korn, Follow The Leader', './img/korn-Follow-the-Leader.jpg', 10, 10, 'https://open.spotify.com/embed/album/0gsiszk6JWYwAyGvaTTud4?utm_source=generator', 'Follow the Leader es el tercer álbum de estudio de la banda de nu metal estadounidense Korn, lanzado el 18 de agosto de 1998 a través de las discográficas Immortal y Epic Records. El material discográfico fue un éxito en los Estados Unidos, debido a que se vendieron más de 5 000 000 de unidades, y unas 14 000 000 a nivel mundial. En Canadá, Australia y Nueva Zelanda también recibió la aceptación del público, por el hecho de haber liderado las listas de ventas comerciales.'),
('kissues', 'Korn, Issues', './img/korn-Issues.jpg', 12, 12, 'https://open.spotify.com/embed/album/5U0pevIOTrPoDsN8YsBCBh?utm_source=generator', 'Issues es el cuarto álbum de estudio de la banda de metal estadounidense Korn, lanzado el 16 de noviembre de 1999 por Immortal y Epic Records. Desde su lanzamiento, el álbum ha vendido más de 11 000 000 de copias en todo el mundo y es uno de los preferidos por los fanes. El álbum fue promovido por la banda a lo largo del año 2000 con la exitosa gira Sick and Twisted Tour.'),
('kk', 'Korn, Korn', './img/korn-Korn.jpg', 14, 14, 'https://open.spotify.com/embed/album/7D3XFJlfZIkmGWqZXm2X8z?utm_source=generator', 'Korn es el primer álbum de estudio de la banda. Lanzado en 1994 simultáneamente por Immortal/Epic Records. Sus características más reseñables son dos guitarras con gran distorsión, con siete cuerdas y con numerosos efectos, una batería muy seca y característica, un bajo que tiene gran protagonismo y técnica, y unas letras que en su mayoría hablan de problemas personales y sociales que afectaron en la vida de Jonathan Davis. Se pueden encontrar diferentes mezclas de sonidos que generan climas bastantes ásperos en canciones como \"Faget\", o cierto sadismo en entonaciones de Davis en \"Daddy\".'),
('lzlz', 'Led Zeppelin, Led Zeppelin IV', './img/Led_Zeppelin_Led_Zeppelin_IV.jpg', 9, 10, 'https://open.spotify.com/embed/album/5EyIDBAqhnlkAHqvPRwdbX?utm_source=generator', 'Led Zeppelin IV (nombre con el que se le conoce a pesar de no tener título) es el cuarto álbum de estudio del grupo inglés Led Zeppelin, lanzado el 8 de noviembre de 1971 por Atlantic Records. Fue producido por Jimmy Page, guitarrista del grupo, y grabado entre diciembre de 1970 y febrero de 1971. Contiene la canción \"Stairway to Heaven\".'),
('lzpg', 'Led Zeppelin, Physical Graffiti', './img/lzpg.jpg', 8, 12, 'https://open.spotify.com/embed/album/4Q7cPyiP8cMIlUEHAqeYfd?utm_source=generator', 'Physical Graffiti es el sexto álbum de estudio de la banda británica Led Zeppelin, publicado el 24 de febrero de 1975, siendo la primera publicación del grupo con su propio sello Swan Song Records. Con 15 millones de copias vendidas, es el séptimo álbum de rock con más ventas de los años 1970.\r\n\r\nSalió al mercado casi dos años después de Houses of the Holy, y fue grabado en 1974, con material adicional inédito grabado en años anteriores.'),
('lphybridtheory', 'Linkin Park, Hybrid Theory', './img/linkin-park-hybrid-theory.jpeg', 6, 11, 'https://open.spotify.com/embed/album/6hPkbAV3ZXpGZBGUvL6jVM?utm_source=generator', 'Hybrid Theory es el álbum debut de la banda estadounidense Linkin Park, publicado por la compañía discográfica Warner Bros. Records el 24 de octubre de 2000. Hybrid Theory debe su título al nombre anterior del grupo y, según la crítica, hace referencia a la mezcla «híbrida» de heavy metal y rap que caracteriza a su sonido. El trabajo fue un éxito comercial: es el álbum de rock del siglo xxi con mayor cantidad de ventas y el segundo álbum debut más vendido de la historia. Además, alcanzó el segundo puesto en la lista Billboard 200, así como otras posiciones altas en otras listas del mundo.'),
('lpmeteora', 'Linkin Park, Meteora', './img/linkin-park-meteora.jpg', 12, 11, 'https://open.spotify.com/embed/album/4Gfnly5CzMJQqkUFfoHaP3?utm_source=generator', 'Meteora es el segundo álbum del grupo Linkin Park, es un disco cargado de una estética plenamente callejera, con grandes influencias del grafiti y con el estilo único que les caracteriza. El nombre del mismo estuvo inspirado en la región rocosa de Meteora en Grecia, donde están construidos numerosos monasterios encima de las piedras.\r\nEste álbum con su rap metal y nu metal, se asemeja a su anterior trabajo, Hybrid Theory, sin embargo este disco se diferenció por ser más melódico en general, alternando también con pequeñas influencias del rock/metal industrial y por la incorporación de nuevos instrumentos.\r\nUna vez más, se van alternando a la hora de cantar entre Chester, dándole un toque más melódico combinándolo con una voz metal y, Mike que le da el toque rap al grupo, además de hacer los coros.'),
('lpminutestomidnight', 'Linkin Park, Minutes to Midnight', './img/linkin-park-minutes-to-midnight.jpg', 5, 11, 'https://open.spotify.com/embed/album/7pgs38iLfEqUtwgCRgvbND?utm_source=generator', 'Minutes to Midnight es el tercer álbum de estudio de la banda de rock estadounidense Linkin Park lanzado el 14 de mayo de 2007.  El álbum fue producido por Mike Shinoda y Rick Rubin, y es el primer álbum de estudio de Linkin Park producido sin Don Gilmore, quien había producido los dos álbumes anteriores de la banda.'),
('mmasterofpuppets', 'Metallica, Master Of Puppets', './img/metallica.jfif', 9, 19, 'https://open.spotify.com/embed/album/2Lq2qX3hYhiuPckC8Flj21?utm_source=generator', 'Master of Puppets es el tercer álbum de estudio del grupo musical de thrash metal estadounidense Metallica. Fue lanzado al mercado el 3 de marzo de 1986, bajo el sello de Elektra Records, alcanzando el puesto 29 en el Billboard 200. El álbum fue el primer disco de oro de la banda tras vender 500 000 copias en Estados Unidos, aunque luego superaría las 6 millones. Master of Puppets es el último álbum de Metallica en el que participa el bajista Cliff Burton, quien moriría en un trágico accidente de autobús meses después del lanzamiento del disco.'),
('mm', 'Metallica, Metallica', './img/mm.jpg', 7, 10, 'https://open.spotify.com/embed/album/3dck2tBxGfxj9m3CguDgjb?utm_source=generator', 'Metallica (también conocido como The Black Album por su portada), es el quinto álbum de estudio del grupo musical estadounidense de thrash metal Metallica. Fue el primer álbum de estudio de Metallica producido por Bob Rock. Recibió elogios de la crítica y se convirtió en el álbum más vendido del grupo musical. El álbum contiene importantes éxitos del grupo como «Enter Sandman», «Sad but True», «The Unforgiven», «Wherever I May Roam» y «Nothing Else Matters». Vendió más de 597 000 de copias en su debut uno en Billboard 200 el 31 de agosto de 1991 y en total vendió 16,4 millones de copias en Estados Unidos según Nielsen Music. El álbum ha vendido 30 millones en el mundo.'),
('pfw', 'Pink Floyd, The Wall', './img/pfw.jpg', 9, 10, 'https://open.spotify.com/embed/album/6WaIQHxEHtZL0RZ62AuY0g?utm_source=generator', 'Es el undécimo álbum de estudio del grupo musical británica de rock progresivo Pink Floyd y el segundo doble, se lanzó al mercado en noviembre de 1979 en el Reino Unido y en enero de 1980 en Estados Unidos. Se grabó entre abril y noviembre bajo la dirección del productor Bob Ezrin y de los miembros de Pink Floyd David Gilmour y Roger Waters.'),
('soadhypnotice', 'System Of A Down, Hypnotize', './img/SystemOfADown Hypnotize.jpg', 14, 14, 'https://open.spotify.com/embed/album/1UeOoLhpWzpuM5cWQsbCXg?utm_source=generator', 'Hypnotize es el quinto álbum de System of a Down y la segunda parte que completa el disco doble Mezmerize/Hypnotize. Fue lanzado el 22 de noviembre de 2005 por American Recordings, Columbia Records, seis meses después del lanzamiento de Mezmerize. Hypnotize contiene doce nuevas canciones en una edición especial diseñada por Vartan Malakian, padre del guitarrista y compositor Daron Malakian. Contiene los sencillos \"Hypnotize\" y \"Lonely Day\". La última canción de Hypnotize, \"Soldier Side\" completa a \"Soldier Side - Intro\", la cual aparece en el álbum Mezmerize.'),
('soadsoad', 'System Of A Down, System Of A Down', './img/SystemOfADown.jpg', 12, 12, 'https://open.spotify.com/embed/album/3sSfjX4fhZonjyZ10x0l0f?utm_source=generator', 'System of a Down es el primer disco de la banda System of a Down, lanzado en 1998 por American Recordings. Cuenta con el cantante Serj Tankian, el guitarrista Daron Malakian, el baterista John Dolmayan y el bajista Shavo Odadjian. El álbum consiguió un disco de oro por la RIAA (Recording Industry Association of America). Contiene los sencillos \"Sugar\" y \"Spiders\". El álbum finalizó el año 1998 en el puesto 124 de la lista de Billboard.'),
('soadtoxicity', 'System Of A Down, Toxicity', './img/SystemOfADown Toxicity.jpg', 13, 15, 'https://open.spotify.com/embed/album/6jWde94ln40epKIQCd8XUh?utm_source=generator', 'Toxicity es el segundo álbum de estudio de la banda System of a Down. Publicado el 4 de septiembre de 2001 por American Recordings, este CD tuvo gran éxito internacional, al vender más de 12 millones de copias a nivel mundial, y dio a conocer a la banda en todo el mundo. Forma parte de la lista de los 100 discos que debes tener antes del fin del mundo, publicada en 2012 por Sony Music.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Nombre` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Apellido` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `usuario` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contraseña` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Nombre`, `Apellido`, `usuario`, `contraseña`, `direccion`, `email`) VALUES
('Javier', 'cabello', 'cxzcx', '$2y$10$Heo9hrRQ6EPcwe2vUqi/wez/i0Sm0hbqPBCSQxvXaVmVUyTgwD99O', NULL, 'czxc@sda.com'),
('sdasd', 'dada', 'dasdas', '$2y$10$TO5vKW7IunxbYq6SSgQnb.oOh01oEx1iWX7vphzFB3zSLsVeAxHjG', NULL, 'dadsa@dfas.com'),
('Javier', 'cabello', 'hola', '$2y$10$67DkK6iNMx7J4LktOTnP2uOcRRa0GZ3/e83LkvZmwGAkS8VpwDkzy', NULL, 'fdffsad@wfsad.com'),
('Javier', 'cabello', 'Jacama', '$2y$10$heXiP5b8xmQa5SZniZ/luuWhVWDLUH61b.SDc2BTzUEHUC6XC0coi', NULL, 'javibobby@hotmail.com'),
('alejandro', 'ortiz', 'sdads', '$2y$10$jrtlvAjvDHLgpdtZUu0nWe4IfC/0cgOVIKFJbm.grwF6MRKYAJMOe', NULL, 'alejandro50386@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
