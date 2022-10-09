<?php
/*********************************************************************************
 *
 *                           A C H T U N G !
 *
 *  ||  Bitte verändern Sie die folgenden Datenbankkonstanten zu der        ||
 *  \/  MySQL Datenbank und dem MySQL-Benutzer, den Sie erstellt haben.     \/
 *********************************************************************************
 */
define("OBIB_HOST",     getenv("OBIB_HOST"));
define("OBIB_DATABASE", getenv("OBIB_DATABASE"));
define("OBIB_USERNAME", getenv("OBIB_USERNAME"));
define("OBIB_PWD",      getenv("OBIB_PWD"));
define("MAIN_LOCALE",   getenv("MAIN_LOCALE") ?: "de"); // de oder en
/*********************************************************************************
 *  /\                                                                      /\
 *  ||                                                                      ||
 *********************************************************************************
 */
?>
