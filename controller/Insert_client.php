<?php 
include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();



if(!empty($_POST)){
    $manager->inserir($_POST);
    header('location: ../index.php?cod=1');
}