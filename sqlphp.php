CREATE TABLE `termine` (
  `id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `datum` DATE NOT NULL ,
  `titel` VARCHAR( 256 ) NOT NULL ,
  `beschreibung` BLOB NOT NULL
) ENGINE = MYISAM ;


INSERT INTO `termine` (`id`,`datum`,`titel`,`beschreibung`)
VALUES (
NULL , '2012-08-10', 'PHP-Kurs.com besuchen ab 9:00', ''
), (
NULL , '2012-08-16', 'Geburtstag Elke', ''
);






define ( 'MYSQL_HOST', 'localhost' );
define ( 'MYSQL_BENUTZER', 'root' );
define ( 'MYSQL_KENNWORT', '' );
define ( 'MYSQL_DATENBANK', 'terminkalender' );



$db_link = @mysql_connect (MYSQL_HOST,
                           MYSQL_BENUTZER,
                           MYSQL_KENNWORT);
 
if ( ! $db_link )
{
  // hier sollte dann später dem Programmierer eine
  // E-Mail mit dem Problem zukommen gelassen werden
  // die Fehlermeldung für den Programmierer sollte
  // das Problem ausgeben mit: mysql_error()
  die('keine Verbindung zur Zeit möglich - später probieren ');
}



<?php
define ( 'MYSQL_HOST', 'localhost' );
define ( 'MYSQL_BENUTZER', 'root' );
define ( 'MYSQL_KENNWORT', '' );
define ( 'MYSQL_DATENBANK', 'terminkalender' );
 
$db_link = @mysql_connect (MYSQL_HOST,
                           MYSQL_BENUTZER,
                           MYSQL_KENNWORT);
 
if ( ! $db_link )
{
  // hier sollte dann später dem Programmierer eine
  // E-Mail mit dem Problem zukommen gelassen werden
  // die Fehlermeldung für den Programmierer sollte
  // das Problem ausgeben mit: mysql_error()
  die('keine Verbindung zur Zeit möglich - später probieren ');
}
?>


https://www.php-kurs.com/beispiel-terminkalender-in-php-und-mysql.htm
