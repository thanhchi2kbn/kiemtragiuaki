<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>BaiKiemTra</title>
  </head>

  <h1 class="bg-light p-1 text-center m-2"> Website danh bạ điện thoại trường đại học Thủy lợi </h1>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item alig">
                <a class="nav-link active" aria-current="page" href="http://localhost:81/kiemtra/admin">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost:81/kiemtra/admin/coquan_ql.php">Cơ Quan</a>
                </li>

                <li class="nav-item">
                <a class="nav-link " href="http://localhost:81/kiemtra/admin/canbo_ql.php">Cán Bộ</a>
                </li>

                <li class="nav-item">
                <a class="nav-link " href="http://localhost:81/kiemtra/admin/logout.php">Log-out</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
    </header> 
  <body>

    

    <?php
        include("../config/db.php");
        session_start();
        if(!isset($_SESSION['login'])){
            header('location:'.SITEURL.'/admin/login.php');
        }
    ?>
 
 <div id="main-main" class="container"> 
        <main>
            <h2 class="text-center">Cán Bộ</h2>
            <div>
                <a href="add_cb.php" class="btn btn-success">Thêm Cán Bộ Mới</a>
            </div>
            <div class="CoQuan">
            <table class="table table-success table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ Tên</th>               
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nơi Công Tác</th>
                    <th scope="col">Xoá</th>
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
                                    <td><a href="delete_cb.php?id=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>

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
    include("../template/footer.php");
?>