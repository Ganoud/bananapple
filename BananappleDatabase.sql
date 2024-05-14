-- MariaDB dump 10.19  Distrib 10.11.6-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: BananappleDatabase
-- ------------------------------------------------------
-- Server version	10.11.6-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES
(2,'BiPhone','Le \"BiPhone\" de la marque \"Banana\" est bien plus qu\'un simple téléphone portable. Avec son design élégant et ses fonctionnalités avancées, il repousse les limites de la technologie. Doté d\'un double système d\'exploitation, il offre une expérience utilisateur polyvalente, alliant la convivialité d\'iOS à la personnalisation de l\'Android. Son écran haute définition et ses caméras de pointe capturent chaque moment avec une clarté époustouflante. De plus, sa batterie longue durée garantit une utilisation ininterrompue tout au long de la journée. Le \"BiPhone\" redéfinit l\'excellence technologique et offre une alternative excitante aux produits Apple.'),
(3,'BiPad','Le \"BiPad\" de la marque \"Banana\" révolutionne le monde des tablettes avec sa combinaison unique de performance et d\'élégance. Son design fin et léger abrite un écran tactile d\'une netteté remarquable, offrant une expérience visuelle immersive pour le travail, les loisirs et tout ce qui se trouve entre les deux. Avec une gamme d\'applications et de fonctionnalités aussi vaste que votre imagination, le \"BiPad\" vous permet de rester productif, créatif et connecté où que vous soyez. Que vous soyez un professionnel en déplacement ou un amateur de divertissement à la recherche de la meilleure expérience, le \"BiPad\" vous offre une polyvalence sans compromis, faisant de lui un concurrent sérieux pour l\'iPad d\'Apple.'),
(4,'BiWatch','La \"BiWatch\" de la marque \"Banana\" est bien plus qu\'une montre connectée, c\'est votre compagnon de vie quotidien. Avec un design élégant et des fonctionnalités avancées telles que le suivi de la forme physique, la gestion des notifications et une autonomie impressionnante, elle redéfinit ce que peut offrir une montre intelligente. La \"BiWatch\" est l\'alternative parfaite à l\'Apple Watch, offrant style et fonctionnalité en un seul package.');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`category_id`),
  CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(25,'BiPhone X',999.99,'Le dernier smartphone révolutionnaire de Banana. Avec un écran Super Bi Retina XDR.',2,NULL,'dossier image/Biphone/x'),
(26,'BiPhone 11 Pro',1099.99,'Le téléphone le plus puissant jamais créé par Banana. Doté de trois caméras révolutionnaires.',2,10.00,'dossier image/Biphone/11 pro'),
(27,'BiPhone SE (2021)',499.99,'Un smartphone compact et abordable par Banana, avec la puissance de la puce A13.',2,NULL,'dossier image/Biphone/se'),
(28,'BiPhone 13',1099.99,'Le dernier bijou de Banana, doté d\'un design élégant et de la technologie de pointe.',2,10.00,'dossier image/Biphone/13'),
(29,'BiPhone 12 Mini',699.99,'Un téléphone compact mais puissant par Banana, avec un écran Super Bi Retina.',2,20.00,'dossier image/Biphone/12 mini'),
(30,'BiPhone XR',599.99,'Un smartphone coloré et performant par Banana, doté du puissant processeur A12 Bionic.',2,30.00,'dossier image/Biphone/xr'),
(31,'BiPhone 6S',299.99,'Un classique revisité par Banana, avec un écran Retina HD et un design emblématique.',2,NULL,NULL),
(32,'BiPhone XS Max',899.99,'Un téléphone élégant et puissant par Banana, avec un grand écran Super Bi Retina.',2,NULL,NULL),
(33,'BiPhone 8 Plus',799.99,'Un téléphone phare par Banana, doté d\'une double caméra et de la puissance de la puce A11 Bionic.',2,NULL,NULL),
(34,'BiPhone 5S',199.99,'Un classique intemporel par Banana, avec un design emblématique et des performances fiables.',2,NULL,NULL),
(35,'BiPad Pro',1299.99,'La tablette la plus avancée de Banana, avec un écran Liquid Bi Retina et une puce M1.',3,NULL,NULL),
(36,'BiPad Air',899.99,'Une tablette légère et puissante par Banana, avec un écran Liquid Bi Retina et la compatibilité Apple Pencil.',3,NULL,NULL),
(37,'BiPad Mini',499.99,'Une tablette compacte par Banana, idéale pour la portabilité et la productivité.',3,NULL,NULL),
(38,'BiPad (2021)',599.99,'La dernière version de la tablette emblématique de Banana, avec un design élégant et des performances supérieures.',3,NULL,NULL),
(39,'BiPad Pro 12.9 (2022)',1499.99,'La tablette ultime de Banana, avec un écran Liquid Bi XDR et des capacités de studio.',3,10.00,NULL),
(40,'BiPad 10.2 (2022)',329.99,'La tablette polyvalente de Banana, parfaite pour le travail et les loisirs.',3,20.00,NULL),
(41,'BiPad Pro 11 (2022)',1099.99,'Une tablette puissante et portable par Banana, conçue pour les professionnels créatifs.',3,NULL,NULL),
(42,'BiPad 9.7 (2021)',399.99,'Une tablette abordable par Banana, avec un écran Retina et une compatibilité avec Apple Pencil.',3,NULL,NULL),
(43,'BiPad Mini 6 (2021)',699.99,'La dernière version de la tablette compacte de Banana, avec des performances améliorées et un design élégant.',3,NULL,NULL),
(44,'BiPad Air 5 (2021)',799.99,'Une tablette élégante et performante par Banana, avec un design fin et des performances améliorées.',3,30.00,NULL),
(45,'BiWatch Series 7',399.99,'La dernière montre intelligente de Banana, avec un écran plus grand et des fonctionnalités avancées de suivi de la santé.',4,NULL,NULL),
(46,'BiWatch SE',279.99,'Une montre intelligente abordable par Banana, avec des fonctionnalités avancées de suivi de la forme physique et de la santé.',4,NULL,NULL),
(47,'BiWatch Series 6',349.99,'Une montre intelligente élégante et puissante par Banana, dotée d\'un capteur d\'oxygène dans le sang et d\'un suivi avancé de la forme physique.',4,NULL,NULL),
(48,'BiWatch Series 5',299.99,'Une montre intelligente emblématique de Banana, avec un écran Always-On Retina et une boussole intégrée.',4,20.00,NULL),
(49,'BiWatch Series 4',249.99,'Une montre intelligente avancée de Banana, avec un écran plus grand et des fonctionnalités de suivi de la santé améliorées.',4,NULL,NULL),
(50,'BiWatch Series 3',199.99,'Une montre intelligente abordable par Banana, idéale pour le suivi de la forme physique et les notifications.',4,NULL,NULL),
(51,'BiWatch SE (2021)',279.99,'La version économique de la montre intelligente de Banana, avec un design élégant et des fonctionnalités avancées de suivi de la santé.',4,30.00,NULL),
(52,'BiWatch Series 2',199.99,'Une montre intelligente avancée de Banana, dotée d\'un GPS intégré et d\'une résistance à l\'eau.',4,NULL,NULL),
(53,'BiWatch Series 1',149.99,'La première montre intelligente de Banana, avec un écran Retina et des fonctionnalités de suivi de la santé.',4,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `zip_code` varchar(5) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Matthias','LIETARD-ANDREOLI',NULL,NULL,NULL,NULL,NULL,NULL),
(2,'Nicolas','PAJOT',NULL,NULL,NULL,NULL,NULL,NULL),
(12,NULL,NULL,'test@test.com','$2y$10$pNW3tsAAO98OP8j1jgQAI.JO2.kUg5KDjcCdzmMfDxI9s.g/khBxK',NULL,NULL,NULL,NULL),
(13,NULL,NULL,'matthias.lietard@outlook.fr','$2y$10$fmzNA6ZplpMgUZV7HQxD2O9YD01EsISN5g5azHJbgoVtjM90.0PNy',NULL,NULL,NULL,NULL),
(14,NULL,NULL,'a@a.a','$2y$10$1xv5Dnrjj4egvpM.k6uHT.ag9F17WW9QukpLO9Ab63mTl/BrS.3Ly',NULL,NULL,NULL,NULL),
(15,NULL,NULL,'matthias.lietard@outlook.fr','$2y$10$tsOTrRmVIhfahE8Nd.ETduhGn6EtsvXzVs3O4uNu4wIgkFWaquSsS',NULL,NULL,NULL,NULL),
(16,NULL,NULL,'feur@feur.feur','$2y$10$A6jv5ATm.BTATgQZuNLVK.agUki4wWYDnaXeyZXZjaKf1KXOf16kK',NULL,NULL,NULL,NULL),
(17,NULL,NULL,'a@a.a','$2y$10$mvpAS5Y2zfZ.jwg5Fbb8D.IelmVuSLr/h5PMiEwKGNTpzeJPKxFIS',NULL,NULL,NULL,NULL),
(18,NULL,NULL,'a@a.a','$2y$10$OFlcMYorFxYveaL6RvGxc.tzrxRm17gi8e1ADBp6NlHm.lHR4M6vO',NULL,NULL,NULL,NULL),
(19,NULL,NULL,'a@a.a','$2y$10$KZlIj67ytXfDsmIRq3jBeesK5vfDAfamqQzQmvxk6R7mhmenkj92G',NULL,NULL,NULL,NULL),
(20,NULL,NULL,'matthias.lietard@outlook.fr','$2y$10$UZ8mlK81hVzGeGQouaOOVuEKWedEek4g9Y5UyQHM62nG9IigKKuIO',NULL,NULL,NULL,NULL),
(21,NULL,NULL,'ntm@zbi.com','$2y$10$e3WUrSHPMPtWdE8qYpVXnuMqQUJYml5eAkY3Z8/gknk0.SQLGH8ni',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-14 10:49:13
