<?php
try {
    $bdd = new PDO ('mysql:host=localhost; dbname=tuto', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES utf8");
} catch (Exception $e) {
    die("Error : " . $e->getMessage());
}
