<?php
    include'../header.php';
    include'../config.php';
?>
<main>
<h3>Thêm thông tin lưu trữ bài thi</h3>
<form action="process_addExams.php"method="post">
  <div class="form-group row">
    <label for="examTitle" class="col-sm-2 col-form-label">Tên bài thi</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="exam_title" name ="examTitile">
    </div>
  </div>
  <div class="form-group row">
    <label for="examDatetime" class="col-sm-2 col-form-label">Ngày thi</label>
    <div class="col-sm-10">
      <input type="" class="form-control" id="exam_datetime" name="examDatetime">
    </div>
  </div>
  <div class="form-group row">
    <label for="Duration" class="col-sm-2 col-form-label">Thời gian làm bài</label>
    <div class="col-sm-10">
      <input type="datetime" class="form-control" id="duration" name="Duration">
    </div>
  </div>
  <div class="form-group row">
    <label for="Totalquestion" class="col-sm-2 col-form-label">Số câu hỏi</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="total_question" name="Totalquestion">
    </div>
  </div>
  
    <div class="form-group row">
      <label for="Mark" class="col-sm-2 col-form-label">Điểm thi</label>
      <div class="col-sm-10">
      <div class="col-sm-10">
      <input type="number" class="form-control" id="mark_per_right_anwser" name="Mark">
    </div>
  </div>
  <div class="form-group row">
      <label for="Created on" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
      <div class="col-sm-10">
      <input type="datatime" class="form-control" id="created_on" name="Created on">
    </div>
  </div>
  <div class="form-group row">
      <label for="Status" class="col-sm-2 col-form-label">Trạng thái</label>
      <div class="col-sm-10">
      <div class="col-sm-10">
      <input type="text" class="form-control" id="status" name="Status">
    </div>
  </div>
  <div class="form-group row">
      <label for="Examcode" class="col-sm-2 col-form-label">Mã truy cập bài thi</label>
      <div class="col-sm-10">
      <div class="col-sm-10">
      <input type="text" class="form-control" id="exam_code" name="Examcode">
    </div>
  </div>      
    <div class="form-group row">
    <label for="empMobile" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <button type="submit" class ="atm btn-success">Lưu lại</button>
      </div>
    </div>

</form>

</main>
<?php
    include'../footer.php';
    ?>