<?php

use Mars\Collection\Kernel;

require_once __DIR__.'/../vendor/autoload.php';

$db = new PDO('mysql:host=localhost;dbname=test', 'root', '#akilAdmin2018');

$a = $db->query("SELECT * FROM articles");
$a = $a->fetchAll(PDO::FETCH_OBJ);

$articles = new Kernel($a);

foreach ($articles as $article) {
    echo $article->title, '<br>';
}
