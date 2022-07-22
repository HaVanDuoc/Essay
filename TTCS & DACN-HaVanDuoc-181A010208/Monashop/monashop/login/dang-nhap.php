<?php
    if (session_id() === '') {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập | Monashop.com</title>

    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../login/dang_nhap.css">

    <script type="text/javascript" src="../javascript/javascript.js"></script>
</head>

<!-- xử lý đăng nhập -->
<?php
    include('../connect.php');
    include('../function/function.php');

    if (isset($_POST['btnDangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Kiểm tra đầy đủ dữ liệu
        if (!$username || !$password) {
            echo 'Không được để trống';
        } else {
            $sql = "SELECT username, password FROM user WHERE username = '$username'";
            $query = mysqli_query($connect, $sql);

            if (mysqli_num_rows($query) == 0) {
                echo '<script>alert("Tên đăng nhập không tồn tại")</script>';
                header("Location:dang-nhap.php");
            } else {
                // nếu tồn tại tên đăng nhập thì kiểm tra mật khẩu
                $row = mysqli_fetch_assoc($query);
                if ($password != $row['password']) {
                    echo 'Mật khẩu không chính xác';
                    exit;
                }
            }

            // nếu đúng hết thì lưu vào session
            $_SESSION['login'] = $username;
            echo "<script>alert('Xin chào . <?=$username?> . Chào mừng đến với Monashop.com!')</script>";
            header('location:/monashop/');
            die();
        }
    }
?>

<body>
    <!-- header -->
    <?= include('../style/header.php')?>

    <!-- content -->
    <section>
        <div class="box_dangnhap">
            <img src="/monashop/image/i1.png" alt="">
            <p class="lead_text">Tra cứu thông tin đơn hàng</p>

            <!-- form đăng nhập -->
            <form action="" method="POST" id="frmLogin" class="frmDangnhap">
                <div>
                    <i class="fas fa-mobile-alt"></i>
                    <input type="text" id="username" name="username" placeholder="Nhập tài khoản/SĐT mua hàng">
                    
                    <div><p id="username_error" class="notify_error"></p></div>
                </div>

                <div>
                    <i class="fas fa-unlock-alt"></i>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                    
                    <div><p id="password_error" class="notify_error"></p></div>
                </div>

                <button type="submit" onclick="return chkDangNhap();" id="btnDangnhap" name="btnDangnhap" class="btnDangnhap" ><span>Tiếp tục</span></button>
            </form>
            <!-- end form đăng nhập -->

            <div class="support">
                <a href="#">Gặp khó khăn?</a> &nbsp;&nbsp;
                <a href="/monashop/login/dang-ky.php">Đăng ký ngay</a>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?= include(__DIR__.'/../style/footer.php')?>

</body>
</html>