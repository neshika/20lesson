<?php
    include_once("init.php");
    $title =  "Подготовительные задания к курсу";
    $heaer = "Задание";

    /* подлючение к БД*/
    $pdo = new PDO("mysql:host=localhost;dbname=lessons", "root", "321478828");
  
    /* проверяем значение*/
    //vardump($_POST); die;

    $text = $_POST['text'];

    //запрос
    $sql = "INSERT INTO tbl_text (text) VALUES (:text)";

    //поготовка и сохранение запроса
    $statment = $pdo->prepare($sql);

    //выполнение 
    $statment->execute(['text' => $text]);

    //возврат на начальную страницу
    header("Location: /task_10.php");


 
?>