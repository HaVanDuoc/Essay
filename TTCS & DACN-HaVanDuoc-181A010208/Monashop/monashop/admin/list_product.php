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
	<title>Product | MONASHOP.com</title>
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
</head>


<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="../admin/"><span>Mona</span>Admin</a>
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
			<li  class="active"><a href="list_product.php"><em class="fa fa-calendar">&nbsp;</em> Sản phẩm</a></li>
			<li><a href="list_user.php"><em class="fa fa-user">&nbsp;</em> Tài khoản</a></li>
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
			<li><a href="../admin/logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
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
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<button type="button" onclick="javascript:window.location.href='insert_product.php'" class="btn btn-primary" style="margin-bottom: 10px; float: right;">Thêm</button>
			</div>
		</div><!-- Insert product button -->
		
		<div class="panel panel-container">
			<div class="container-fluid">
				<table class="table">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Hình</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<script>
							function del_confirm(strlink){
								del	=	confirm("Bạn có muốn xóa không ?");
							}
							if(del!=0){
								window.location.href=strlink;
							}
						</script>
						<?php
							include('../connect.php');
							include('../function/function.php');

							$sql	=	"SELECT * FROM product";
							$mq		=	mysqli_query($connect,$sql);
							$count	=	mysqli_num_rows($mq);
							
							$pageSize	=	5;
							$pos		=	(!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
							$i			=	1;
							$sql		=	"select * from product limit $pos, $pageSize";
							$mq			=	mysqli_query($connect,$sql);

							$path	=	"../image/upload/product/";

							while($row=mysqli_fetch_array($mq)){
								echo "
									<tr>
										<td>$i</td>
										<td>".$row['name_product']."</td>
										<td>".format_money($row['price_product'])."</td>
										<td><img src='$path$row[image_product]' width=100 height=100></td>
										<td><a href='../admin/edit_product.php?id=".$row['id_product']."'>Sửa</a></td>
										<td><a href='../admin/del_product.php?id=".$row['id_product']."'>Xóa</a></td>
									</tr>
								";
								$i++;
							}
						?>
						<tr>
							<th colspan="6">
								<?php									
									if (!function_exists('underline')) {
										if (!isset($_GET['page'])) {
											$page = 1;
										} else {
											$page = $_GET['page'];
										}
										function underline($page, $i){
											if ($page == $i) {
												echo 'style="text-decoration: underline;"';
											}
										}
									} // underline current page

									for($i=1; $i<=ceil($count/$pageSize);$i++){
										echo "<a href='list_product.php?page=$i'";
										underline($page,$i);
										echo ">".$i."</a>&nbsp;&nbsp";
									}
								?>
							</th>
						</tr>
					</tbody>
				</table>
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