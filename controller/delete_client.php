<?php
include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];
if(!empty($_POST)){
 $manager->delete($id);
 header('location: ../index.php?cod=2');
}