<?php
        include("template/header.php");
    ?>
  <body>

    

    <?php
        include("config/db.php");
    ?>
 
 <div id="main-main" class="container"> 
        <main>
            <h2 class="text-center">Cán Bộ</h2>
            
            <div class="CoQuan">
            <table class="table table-success table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ Tên</th>               
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nơi Công Tác</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT HoTen, tbl_canbo.SDT,tbl_canbo.email, TenCQ FROM tbl_coquan, tbl_canbo  Where tbl_canbo.id_CQ = tbl_coquan.id";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['HoTen']; ?> </td>                                  
                                    <td> <?php echo $row['SDT']; ?></td>                               
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['TenCQ']; ?></td>

                                </tr>
                    <?php
                            $i++;
                            }
                        }

                        
                    ?>
                    
                    
                </tbody>
                </table>

            </div>
        </main>
    </div>

<?php
    include("template/footer.php");
?>