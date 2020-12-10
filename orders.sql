SET FOREIGN_KEY_CHECKS=0;
CREATE TABLE `orders` (
`id` int(11) NOT NULL auto_increment,
  `date` Date NOT NULL,
  `rct` varchar(50) default NOT NULL,
  `description` varchar(200) default NOT NULL,
  `quantity` int(200) default NOT NULL,
  `unit_price` int(11) default NOT NULL,
  `t_amount` int(11) default NOT NULL,
  `vat` int(11) default NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `orders` VALUES ('2015-11-20', '11', 'Ente', 1,15000,15000,2288);
INSERT INTO `orders` VALUES ('2015-11-20', '10', 'Ente', 10,15000,150000,22881);
INSERT INTO `orders` VALUES ('2015-11-20', '9', 'Soup of the day', 1,8000,8000,1220);
INSERT INTO `orders` VALUES ('2015-11-20','8', 'Ugandan Coffee', 3,6000,18000,2746);
INSERT INTO `orders` VALUES ('2015-11-20','7','fruit juice(One Item)',1,7000,7000,1068);
INSERT INTO `orders` VALUES ('2015-11-20','6','Soup of the day ',3,8000,24000,3661);
INSERT INTO `orders` VALUES ('2015-11-20','5','Fruit juice(One Item)',3,7000,21000,3203);
INSERT INTO `orders` VALUES ('2015-11-20','4','Fruit juice(cocktail)',3,10000,30000,4576);
