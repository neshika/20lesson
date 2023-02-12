<?php
$j=1;
$users = [
    [
        'FirstName' => 'Mark',
        'LastName' => 'Otto',
        "UserName" => '@mdo',
    ],
    [
        'FirstName' => 'Jack',
        'LastName' => 'div',
        "UserName" => '@fat',
    ],
    [
        'FirstName' => 'Larry',
        'LastName' => 'the Bird',
        "UserName" => '@twitter'
    ],
    [
        'FirstName' => 'Larry and Bird',
        'LastName' => 'Bird',
        "UserName" => '@twitter'
    ]
    ];

$pdo = new PDO("mysql:host=localhost;dbname=lessons", "root", "321478828");
$statment = $pdo->prepare("select * from tasks");
$statment->execute();
$tasks = $statment->fetchAll(PDO::FETCH_ASSOC);
//var_dump($tasks); die;
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 0; $i < count($users); $i++):?>
                                            <tr>
                                                <th scope="row"><?php echo $i+1;?></th>
                                                <td><?php echo $users[$i]['FirstName'];?></td>
                                                <td><?php echo $users[$i]['LastName'];?></td>
                                                <td><?php echo $users[$i]['UserName'];?></td>
                                                <td>
                                                    <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                    <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                    <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                                </td>
                                            </tr>
                                        <?php endfor;?>    

                                        <?php foreach($users as $user):?>
                                            <tr>
                                                <th scope="row"><?php echo $j;?></th>
                                                <td><?php echo $user['FirstName'];?></td>
                                                <td><?php echo $user['LastName'];?></td>
                                                <td><?php echo $user['UserName'];?></td>
                                                <td>
                                                    <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                    <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                    <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                                </td>
                                            </tr>
                                        <?php $j++; endforeach;?>    
                                        <hr>
                                        <?php foreach($tasks as $task):?>
                                            <tr>
                                                <th scope="row"><?php echo $task['id'];?></th>
                                                <td><?php echo $task['firstname'];?></td>
                                                <td><?php echo $task['lastname'];?></td>
                                                <td><?php echo $task['users'];?></td>
                                                <td>
                                                    <a href="show.php?id=<?php echo $task['id'];?>" class="btn btn-info">Просмотреть</a>
                                                    <a href="edit.php?id=<?php echo $task['id'];?>" class="btn btn-warning">Изменить</a>
                                                    <a href="delete.php?id=<?php echo $task['id'];?>" class="btn btn-danger">Удалить</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>        

                                       <!-- <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry the Bird</td>
                                            <td> Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
