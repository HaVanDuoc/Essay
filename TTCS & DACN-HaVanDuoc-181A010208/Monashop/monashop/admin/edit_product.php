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
	<title>Edit Product | Monashop.com</title>
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
				<li class="active">Edit Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông tin sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
            <div class="container">

				<!--  -->
				<?php
                    include('../connect.php');

                    if(isset($_POST['txtname'])){
                        $id_product		=	$_POST['txtid'];
                        $name_product	=   $_POST['txtname'];
                        $type_product	=   $_POST['txttype'];
                        $price_product	=   $_POST['txtprice'];
                        $image_product	=   $_FILES['txtimage']['name'];
                        $tmp_name		=   $_FILES['txtimage']['tmp_name'];
						// $path	=	__DIR__."../../image/upload/product/".$image_product;
						$describe_product	=   $_POST['txtdes'];
						$trademark_product	=	$_POST['txttrademark'];
						$percent_product	=	$_POST['txtpercent'];
						$gift_product	=	$_POST['txtgift'];
						$count_product	=	$_POST['txtcount'];
						$path	=	"../image/upload/product/".$image_product;

                        
                        if($image_product!=""){
                            $sql = "UPDATE product SET name_product=N'$name_product', type_product=N'$type_product', price_product='$price_product', image_product=N'$image_product', describe_product=N'$des_product', trademark_product=N'$trademark_product' WHERE id_product=$id_product";
                        }
                        else{
                            $sql = "UPDATE product SET name_product=N'$name_product', type_product=N'$type_product', price_product='$price_product', describe_product=N'$des_product', trademark_product=N'$trademark_product' WHERE id_product=$id_product";
                        }
						$mq = mysqli_query($connect,$sql);
						
						if($mq){
							if($image_product!=""){
								unlink("$path");
								move_uploaded_file($tmp_name, $path);
							}
							echo "<script>window.location.href='list_product.php'</script>";
						}else{
							echo "<script>alert('Cập nhật thất bại')</script>";
						}
					}
					else{
						$sql	=	"SELECT * FROM product WHERE id_product=".$_GET['id'];
						$mq		=	mysqli_query($connect,$sql);
						$row	=	mysqli_fetch_array($mq);
						$name_product	=	$row['name_product'];
						$type_product	=	$row['type_product'];
						$price_product	=	$row['price_product'];
						$describe_product	=	$row['describe_product'];
						$image_product	=	$row['image_product'];
						$trademark_product	=	$row['trademark_product'];
						$percent_product	=	$row['percent_discount_product'];
						$gift_product	=	$row['gift_product'];
						$count_product	=	$row['count_product'];
					}
                ?>

				<!--  -->
                <form method="POST" name="frmInsert" enctype="multipart/form-data">
                    <!-- <div class="navbar navbar-brand">
                        Chỉnh sửa sản phẩm
                    </div> -->
                    <table class="table table-hover table-striped" style="margin-top: 20px;">
                        <tbody>
                            <tr>
                                <input type="hidden" name="txtid" value="<?=$_GET['id']?>">
                            </tr>
                            <tr>
                                <td>Tên sản phẩm:</td>
                                <td><input type="text" name="txtname" class="form-control" value="<?=$name_product?>"></td>
                            </tr>
                            <tr>
                                <td>Loại</td>
                                <td>
                                    <select name="txttype" class="form-control">
										<?php
											$sql	=	"SELECT type_product FROM type_product";
											$query	=	mysqli_query($connect,$sql);

											while($row=mysqli_fetch_array($query)){
												if($row['type_product'] == $type_product){
													echo "<option selected>".$row['type_product']."</option>";
												}else{
													echo "<option>".$row['type_product']."</option>";
												}
											}
										?>
                                    </select>
                                </td>
							</tr>
							<tr>
                                <td>Thương hiệu:</td>
                                <td>
                                    <select name="txttrademark" class="form-control">
										<?php
											$sql	=	"select trademark_product from trademark_product";
											$query	=	mysqli_query($connect,$sql);

											while($row=mysqli_fetch_array($query)){
												if($row['trademark_product'] == $trademark_product){
													echo "<option selected>".$row['trademark_product']."</option>";
												}else{
													echo "<option>".$row['trademark_product']."</option>";
												}
											}
										?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hình:</td>
                                <td><input type="file" value="<?=$image_product?>" name="txtimage" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Giá:</td>
                                <td><input type="text" value="<?=$price_product?>₫" name="txtprice" class="form-control"></td>
                            </tr>
							<tr>
                                <td>% Giảm giá:</td>
                                <td><input type="number" value="<?=$percent_product?>" name="txtpercent" class="form-control"></td>
                            </tr>
							<tr>
                                <td>Quà:</td>
                                <td><input type="number" value="<?=$gift_product?>" name="txtgift" class="form-control"></td>
                            </tr>
							<tr>
                                <td>Số lượng:</td>
                                <td><input type="number" value="<?=$count_product?>" name="txtcount" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mô tả:</td>
                                <td><textarea name="txtdes" id="editor1" class="form-control" rows="5"><?=$describe_product?></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <button type="submit" class="btn btn-success">Hoàn tất</button>&nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="javascript:window.location.href='list_product.php'" class="btn btn-warning">Hủy</button>
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