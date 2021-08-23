<?php
    
    include("../config/db.php");
    $id_can_xoa = $_GET['id'];
    
    //Bước 02: Thực hiện câu truy vấn
    $sql = "DELETE FROM tbl_coquan WHERE id=$id_can_xoa";
    $result = mysqli_query($conn,$sql);
     echo $sql;
    //Bước 03: Xử lý kết quả nếu mysqli_query xóa thành công > trả về true
    if($result == true){
        header('location: coquan_ql.php');
    }

?>