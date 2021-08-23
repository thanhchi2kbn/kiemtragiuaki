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
                        <td>Tên Cán Bộ</td>
                        <td>
                            <input type="text" name="txtTenCB" placeholder="Nhập tên cán bộ">
                        </td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td>
                            <input type="text" name="txtSDT" placeholder="nhập số điện thoại">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="txtEmail" placeholder="nhập email">
                        </td>
                    </tr>
                    <tr>
                        <td>Mã Cơ Quan Công Tác</td>
                        <td>
                            <input type="text" name="txtID" placeholder="Nhập Mã Phòng">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddCB" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>

    <div id="main-main" class="container"> 
    
        <main>
            <h2 class="text-center">Mã Phòng Ban</h2>
            
            <div class="CoQuan">
            <table class="table table-light table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã Cơ Quan</th>               
                    <th scope="col">Tên Cơ Quan</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM tbl_coquan";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['id']; ?> </td>                                  
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


        <!-- xử lý -->
            <?php
                if(isset($_POST['btnAddCB'])){
                    $tencq   = $_POST['txtTenCB'];
                    $sdt   = $_POST['txtSDT'];                 
                    $email        = $_POST['txtEmail'];
                    $maphong   = $_POST['txtID'];
                    
                   

                    
                    $sql = "INSERT INTO tbl_canbo (HoTen, SDT, email, id_CQ)
                            VALUES ('$tencq','$sdt','$email',' $maphong')";
                    
                    
                    if(mysqli_query($conn,$sql)){
                        header('location: canbo_ql.php');
                    }
                    
                }

            ?>
        </main>
    </div>
    <?php
    include("../template/footer.php");
?>