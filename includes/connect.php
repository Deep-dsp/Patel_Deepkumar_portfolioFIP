<?php 
    // $db_dsn = array( 
    //     'host' => 'localhost',
    //     'dbname' => 'portfolioDB',
    //     'charset' => 'utf8'
    // );
    $db_dsn = array( 
        'host' => 'localhost',
        'dbname' => 'workArea',
        'charset' => 'utf8'
    );

    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');

    //This is the DB credentials

    // $db_user = 'root';
    // $db_pass = ''; // windows users leave this blank
    $db_user = 'd_patel109038';
    $db_pass = '210897Dp!';

    try{
        $pdo = new PDO($dsn, $db_user, $db_pass);
        // var_dump($pdo);
        // echo (in this case) is almost like console.log
        // echo "you're in! enjoy the show";
    } catch (PDOException $exception){
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }