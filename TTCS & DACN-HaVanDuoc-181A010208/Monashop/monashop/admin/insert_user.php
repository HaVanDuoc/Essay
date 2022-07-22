<?php
	// session_start();
	// if(isset($_SESSION["username"])){
	// 	$username   =   $_SESSION["username"];
	// }else{
	// 	header("location:../");
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mona - Product</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
		function checkRegister(){
			if(document.frmInsert.username.value	== ""){
				alert("Tên đăng nhập không được để trống.");
				document.frmInsert.username.focus();
				return;
			}
			if(document.frmInsert.password.value	== ""){
				alert("Mật khẩu không được để trống.");
				document.frmInsert.password.focus();
				return;
			}
			document.frmInsert.submit();
		}
	</script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html"><span>Mona</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		<li><a href="../admin/"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="list_product.php"><em class="fa fa-calendar">&nbsp;</em> Sản phẩm</a></li>
			<li class="active"><a href="list_user.php"><em class="fa fa-user">&nbsp;</em> Tài khoản</a></li>
			<li><a href="list_order.php"><em class="fa fa-shopping-cart">&nbsp;</em> Đơn hàng</a></li>
			<li><a href="manage_database.php"><em class="fa fa-database">&nbsp;</em> Database</a></li>
			<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul> -->
			</li>
			<li><a href="../"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đăng ký tài khoản</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
            <div class="container">
                <?php
                    include('../connect.php');

                    if(isset($_POST['username'])){
						$username	=	$_POST['username'];
						$password	=	$_POST['password'];
						$first_name	=	$_POST['firstname'];
						$last_name	=	$_POST['lastname'];
						$image	=	$_FILES['image']['name'];
						$tmp_name	=	$_FILES['image']['tmp_name'];
						$birthday	=	$_POST['birthday'];
						$sex		=	$_POST['sex'];
						$phone_number	=	$_POST['phone_number'];
						$address	=	$_POST['address'];
                        
                        $sql    =   "INSERT INTO user(username, password, first_name, last_name, image, birthday, sex, phone_number, address)
									VALUES (N'$username', N'$password', N'$first_name', N'$last_name', N'$image', N'$birthday', N'$sex', N'$phone_number', N'$address')";
                        $query	=   mysqli_query($connect,$sql);

                        if(isset($query)){
							$row	=	mysqli_fetch_array(mysqli_query($connect,'SELECT * FROM user'));
                            move_uploaded_file($tmp_name,"../image/upload/user/".$image_user);
                            echo "<script>window.location.href='list_user.php'</script>";
                        }else{
                            echo "<script>alert('Đăng ký thất bại')</script>";
                        }
                    }
                    else{
                        $sql    =   "SELECT * FROM user";
                        $mq     =   mysqli_query($connect,$sql);
                    }
                ?>
                <form method="POST" name="frmInsert" enctype="multipart/form-data">
                    <table class="table table-hover table-striped" style="margin-top: 20px;">
                        <tbody>
                            <tr>
                                <td>Họ:</td>
                                <td><input type="text" name="firstname" class="form-control"></td>
                            </tr>
							<tr>
                                <td>Tên:</td>
                                <td><input type="text" name="lastname" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tài khoản:</td>
                                <td><input type="text" name="username" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu:</td>
                                <td><input type="password" name="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td>
                                    <select name="sex" class="form-control">
										<option>Nam</option>
										<option>Nữ</option>
										<option value="">Khác</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td>Ảnh cá nhân:</td>
								<td><input type="file" name="image" class="form-control"></td>
							</tr>
                            
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <button type="button" class="btn btn-success" onclick="checkRegister()">Thêm</button>&nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
			</div>
		</div>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>