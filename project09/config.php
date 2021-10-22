<?php
    define('HOST','localhost');
    define('USER','root');
    const PASS ='';
    const DB= 'quanlythi';
    $conn =mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die('Khong ket noi');

}
?>