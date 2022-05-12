<?php
include_once '../db.php';

if(isset($_POST['save']))
{
    $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
    $contra = $MySQLiconn->real_escape_string($_POST['contra']);
    $id_cargo = $MySQLiconn->real_escape_string($_POST['id_cargo']);
    
    $SQL = $MySQLiconn->query("INSERT INTO usuarioscrud(usuario,contra,id_cargo) VALUES ('$usuario', '$contra','$id_cargo')");
    if(!$SQL)
    {
        echo $MySQLiconn->error;
    }
}

if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM usuarioscrud WHERE id=".$_GET['del']);
    header("Location: listado.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM usuarioscrud WHERE id
        =".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE usuarioscrud SET usuario='".$_POST['usuario']."', contra='".$_POST['contra']."',id_cargo='".$_POST['id_cargo']."' WHERE id=".$_GET['edit']);
    header("Location: listado.php");
}

?>