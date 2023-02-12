<?php
    session_start();
    include_once("init.php");
    
    $title =  "Подготовительные задания к курсу";
    $heaer = "Задание";

    $text = $_POST['text'];

    /* подлючение к БД*/
    $pdo = new PDO("mysql:host=localhost;dbname=lessons", "root", "321478828");
  
    /* проверяем значение*/
    //vardump($_POST); die;

    
    /* проверка, есть данные текст уже в базе*/
    $sql = "SELECT * FROM tbl_text WHERE text=:text";
    $statment = $pdo->prepare($sql);
    $statment->execute(['text' => $text]);

    $task = $statment->fetch(PDO::FETCH_ASSOC); //получаем только одну запись

/* проверяем значение*/
// vardump($task); die;

if(!empty($task)){
    $message = "Введенная запись присутствует в таблице";
    $_SESSION['danger'] = $message;
    header("Location: /task_11.php");
    exit;
}
  

    //запрос
    $sql = "INSERT INTO tbl_text (text) VALUES (:text)";

    //поготовка и сохранение запроса
    $statment = $pdo->prepare($sql);

    //выполнение 
    $statment->execute(['text' => $text]);

    //возврат на начальную страницу
    header("Location: /task_11.php");


 
?>