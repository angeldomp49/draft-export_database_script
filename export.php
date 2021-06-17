<?php
define( 'DB_NAME', 'espacioc_admbdyates' );
define( 'DB_USER', 'espacioc_yates' );
define( 'DB_PASSWORD', 'pixel504' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
$mysqlExportPath ='backup.sql';



$command='mysqldump --opt -h' .DB_HOST .' -u' .DB_USER .' -p' .DB_PASSWORD .' ' .DB_NAME .' > ' .$mysqlExportPath;
exec($command,$output,$worked);
switch($worked){
    case 0:
        echo 'The database <b>' .DB_NAME .'</b> was successfully stored in the following path '.getcwd().'/' .$mysqlExportPath .'</b>';
    break;
    case 1:
        echo 'An error occurred when exporting <b>' .DB_NAME .'</b> zu '.getcwd().'/' .$mysqlExportPath .'</b>';
    break;
    case 2:
        echo 'An export error has occurred, please check the following information: <br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .DB_NAME .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .DB_USER .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .DB_HOST .'</b></td></tr></table>';
    break;
}