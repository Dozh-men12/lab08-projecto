<?php
include_once 'db.php';

if(isset($_POST['save']))
{
    $pais_proveniencia  = $MySQLiconn->real_escape_string($_POST['pais_proveniencia']);
    $producto = $MySQLiconn->real_escape_string($_POST['producto']);
    $descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
    $fecha_exportacion = $MySQLiconn->real_escape_string($_POST['fecha_exportacion']);
    $pais_receptor = $MySQLiconn->real_escape_string($_POST['pais_receptor']);

    $SQL = $MySQLiconn->query("INSERT INTO pais (pais_proveniencia, producto, descripcion, fecha_exportacion, pais_receptor) VALUES('$pais_proveniencia','$producto','$descripcion','$fecha_exportacion','$pais_receptor')");

    if(!$SQL)
    {
        echo $MySQLiconn->error;
    }
}

if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM pais WHERE id=".$_GET['del']);
    header("Location: pais.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM pais WHERE id
        =".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE pais SET pais_proveniencia='".$_POST['pais_proveniencia']."', producto='".$_POST['producto']."', descripcion='".$_POST['descripcion']."', fecha_exportacion='".$_POST['fecha_exportacion']."', pais_receptor='".$_POST['pais_receptor']."' WHERE id=".$_GET['edit']);
    header("Location: pais.php");
}

?>