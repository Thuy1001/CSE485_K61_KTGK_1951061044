<?php
    $exam_title = $_POST['examTitle'];
    $exam_datetime= $_POST['examDatetime'];
    $duration = $_POST['Duration'];
    $total_question= $_POST['Totalquestion'];
    $office_id = $_POST['office'];
    include'../config.php';
    $sql = "INSERT INTO db_employees(emp_name,emp_position,emp_email,emp_mobile,office_id)
    VALUE ('$emp_name','$emp_position','$emp_email','$emp_mobile','$office_id')";
    $result= mysqli_query($conn,$sql);
    if($result > 0){
       header('Location:index.php');
    }else{
        echo"Loi";
    }
    mysqli_close($conn);

?>