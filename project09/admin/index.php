<?php
    include'../header.php';
    ?>
    <main>
        <h2>Hiển thị danh sách</h2>
        <a href ="addExams.php">Thêm nhân viên</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Tên bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Thời gian thi</th>
                <th scope="col">Số câu hỏi</th>
                <th scope="col">Điểm cho mỗi câu trả lời</th>
                <th scope="col">Ngày tạo bài thi</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Mã truy cập bài thi</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                    include'../config.php';
                    $sql= "SELECT * FROM db_exams"; 
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){
                        echo' <tr>';
                        echo'<th scope="row">'.$row['id'].'</th>';
                        echo'<td>'.$row['exam_title'].'</td>';
                        echo' <td>'.$row['exam_datetime'].'</td>';
                        echo'<td>'.$row['duration'].'</td>';
                        echo'<td>'.$row['total_question'].'</td>';
                        echo'<td>'.$row['mark_per_right_anwser'].'</td> ' ;
                        echo'<td>'.$row['created_on'].'</td> ' ;
                        echo'<td>'.$row['status'].'</td> ' ;
                        echo'<td>'.$row['exam_code'].'</td> ' ;
                        echo'<td><a href="editExams.php?id='.$row['id'].'"><i class="fas fa-user-edit"></i></a></td>';
                        echo'<td><a href="deleteExams.php?id='.$row['id'].'"><i class="fas fa-user-times"></i></a></td>';
                        echo'</tr>';
                    }

                }
                ?>
               
                <!--<tr>
                <th scope="row">2</th>
                <td>Hoàng Thị Thúy</td>
                <td>Sinh viên</td>
                <td>1951061044@e.tlu.edu.vn</td>
                <td>0786746746</td>
                <td>Bộ môn CNTT</td>
                </tr>-->
                
            </tbody>
            </table>
     </main>
<?php
    include'../ooter.php';
?>