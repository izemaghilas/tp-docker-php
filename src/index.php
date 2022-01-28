<?php

require_once './db.php';


$query = DB::getInstance()->prepare("SELECT * FROM articles");
$query->execute();
$result = $query->fetchAll();

print("Liste des articles :\n");
echo '<pre>';
print_r($result);
echo '</pre>';