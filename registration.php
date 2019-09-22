<?php
include_once 'function.php';
$json = file_get_contents('php://input');
$data = json_decode ($json, true);

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


$result = registration (
                        $link,
                        $data ['name'],
                        $data['login'],
                        $data['login'],
                        $data['password']


);
// $sql = "INSERT INTO users (`NAME`, `LOGIN`, `PASSWORD`,`LAST_NAME`) 
//                     VALUES(" .  "'" . htmlspecialchars ($data['name'])."',".
//                                 "'" . htmlspecialchars ($data['login'])."',".
//                                 "'" . htmlspecialchars ($data['password'])."',".
//                                 "'" . htmlspecialchars ($data['last-name'])."'".
                    
//                     ");";
// $res= mysqli_query($link, $sql);
//  var_dump ($res);
//  $result =[];

//  if ($res){
//      $id = mysqli_insert_id ($link);
//      $sql = "INSERT INTO results (`USER_ID`, `CROSS_WIN`, `ZERO_WIN`) 
//                     VALUES ($id, 0,0);";
//     mysqli_query($link, $sql);  
//     if ($res)  {
//         $result =login (
//             $link,
//             htmlspecialchars ($data['login']),
//             htmlspecialchars ($data['password'])
//         );
//         // $result['cross']=0;
//         // $result['zero']=0;
//         // $result['res_id']=$id;
//     }
//  }
 mysqli_close($link);

 die (json_encode($result));

// var_dump (mysqli_error($link));

// $id = mysqli_insert_id($link);
// $sql = "INSERT INTO results (`USER_ID`, `CROSS_WIN`, `ZERO_WIN`) 
//                     VALUES ($id, 0,0);";
// mysqli_query($link, $sql);

