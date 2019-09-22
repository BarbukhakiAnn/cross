<?php 
include_once 'function.php';
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$link=connectToDb(); 

// $DB_HOST = 'localhost';
// $DB_USER = 'root';
// $DB_PASS = '';
// $DB_NAME = 'barbukhaki';

// $link = mysqli_connect (
//     $DB_HOST ,
//     $DB_USER ,
//     $DB_PASS ,
//     $DB_NAME 
// );

$results =login (
    $link,
    htmlspecialchars ($data['login']),
    htmlspecialchars ($data['password'])
);
// $sql = "SELECT * FROM users WHERE LOGIN = '{$data['login']}' AND PASSWORD = '{$data['password']}';" ;

// $result = mysqli_query($link, $sql);

// //var_dump(mysqli_error($link));

// $results =[];

// if ($user= mysqli_fetch_assoc($result)){
//     $sql = "SELECT * FROM results WHERE USER_ID= {$user['ID']};";
//     $result =mysqli_query ($link, $sql);
//     if ($res = mysqli_fetch_assoc($result)) {
//         $results['cross']=$res['CROSS_WIN'];
//         $results['zero']=$res['ZERO_WIN'];
//         $results['res_id']=$res['ID'];
//     }
//     else {
//         $results['error'] = 'Результаты не найдены';
//     }
// }
// else {
//     $results['error'] = 'Пользователь не найден';
// }

mysqli_close($link);

die(json_encode($results));



