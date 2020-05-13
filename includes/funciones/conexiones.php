<?php

//Conexion al localhost
$userConexion = "postgres";
$passwordConexion = "D9h54q";
$dbnameconexion = "comandas";
$portConexion = "5432";
$hostConexion = "127.0.0.1";
$cadenaConexionCon = "host=$hostConexion port=$portConexion dbname=$dbnameconexion user=$userConexion password=$passwordConexion";
$conexionCon = pg_connect($cadenaConexionCon) or die("Error en la conexión");

//Iniciar session
session_start();

 ?>
