<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM cliente';
	return $mysqli->query($sql);

}

function add( $nombres, $apellidopat, $apellidomat, $telefono, $correo, $password )
{
	global $mysqli;
	$sql = "INSERT INTO cliente (id, nombres, apellidopat, apellidomat, telefono, correo, password) VALUES (null, '{$nombres}','{$apellidopat}','
                                                                                                        {$apellidomat}','{$telefono}','{$correo}','{$password}')";
	$mysqli->query($sql);

}

function update( $id, $nombres, $apellidopat, $apellidomat, $telefono, $correo, $password )
{
	global $mysqli;
	$sql = "UPDATE cliente SET nombres = '{$nombres}', apellidopat = '{$apellidopat}', apellidomat = '{$apellidomat}', 
                                telefono = '{$telefono}', correo = '{$correo}', password = '{$password}' WHERE id = {$id}";
	$mysqli->query( $sql );

}

function delete( $id )
{
	global $mysqli;
	$sql = "DELETE FROM cliente WHERE id = {$id}";
	$mysqli->query($sql);
}

function get_user_by_id( $id )
{
	global $mysqli;
	$sql = "SELECT * FROM cliente WHERE id = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}