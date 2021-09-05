<?php 
require 'libs/rb.php';
R::setup( 'mysql:host=127.0.0.1;dbname=u1448977_default','u1448977_default', 'hG3DIjK06FHPxe2Q' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();