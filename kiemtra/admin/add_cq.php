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
    
    <?php
        include("../config/db.php");
        session_start();
    ?>
    
    <div id="main-main" class="container-fluid" >
        <main>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>Tên Cơ Quan</td>
                        <td>
                            <input type="text" name="txtTenCQ" placeholder="Nhập tên cơ quan">
                        </td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td>
                            <input type="text" name="txtSDT" placeholder="nhập số điện thoại">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td>
                            <input type="text" name="txtDiaChi" placeholder="nhập địa chỉ">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="txtEmail" placeholder="nhập email">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddCQ" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAddCQ'])){
                    $tencq   = $_POST['txtTenCQ'];
                    $sdt   = $_POST['txtSDT'];
                    $diachi   = $_POST['txtDiaChi'];
                    $email        = $_POST['txtEmail'];
                    
                   

                    
                    $sql = "INSERT INTO tbl_coquan ( TenCQ, SDT, DiaChi, Email)
                            VALUES ('$tencq','$sdt','$diachi',' $email')";
                    
                    
                    if(mysqli_query($conn,$sql)){
                        header('location: coquan_ql.php');
                    }
                    
                }

            ?>
        </main>
    </div>
    <?php
    include("../template/footer.php");
?>