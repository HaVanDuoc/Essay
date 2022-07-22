<?php
    if (session_id() === '') {
        session_start();
    }
    // var_dump($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng || MONASHOP.com</title>
</head>
<body>
    <section>
        <style>
            body {
                background: #f1f4f7;
                /* padding-top: 60px; */
                font-size: 14px;
                color: #444444;
                font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            .panel-container {
                padding-top: 20px;
            }
            .panel {
                border: 0;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
                box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
            }

            .container-fluid {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .table {
                background: #fff;
            }
            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }
            table {
                background-color: transparent;
            }
            table {
                border-spacing: 0;
                border-collapse: collapse;
            }
            .table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
                border-top: 0;
            }
            .table > thead > tr > th {
                border-bottom: 1px solid #e6e7e8;
                vertical-align: middle;
                /* height: 50px; */
            }
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                padding: 8px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd;
            }
            th {
                text-align: left;
            }
        </style>

        <div class="panel panel-container">
			<div class="container-fluid">
				<table class="table">
					<thead>
						<tr>
							<th>Hình</th>
							<th>Sản phẩm</th>
							<th>Giá</th>
                            <th>Số lượng</th>
							<th></th>
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

							// $sql	=	"SELECT * FROM product";
							// $mq		=	mysqli_query($connect,$sql);
							// $count	=	mysqli_num_rows($mq);

                            $count  =   count($_SESSION['cart']);
							
							$pageSize	=	3;
							$pos		=	(!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
							$i			=	1;
							$sql		=	"select * from product limit $pos, $pageSize";
							$mq			=	mysqli_query($connect,$sql);

							$path	=	"../image/upload/product/";

                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $value){ 
                                    echo' <tr>';
                                    echo'<td style="width:200px"><img src="'.$path.''.$value['product_image_name'].'" width="150px" height="160px"></td>';
                                    echo'<td>'.$value['product_name'].' x'.$value['num'].'</td>';
                                    echo'<td>'.number_format($value['price'],0,",",".").'</td>';
                                    // echo'<td>'.$value['num'].'</td>';
                                    // echo'<td>'.$value['price']*$value['num'].'</td>';
                                    echo'<td><a href="./deletecart.php?id='.$value['id'].'"><i class="fas fa-trash"  style="color: red;"></i></a></td>';
                                    echo'</tr>';
                                    $i++;
                                }
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
										echo "<a href='index.php?page=$i'";
										underline($page,$i);
										echo ">".$i."</a>&nbsp;&nbsp";
									}
								?>
							</th>
						</tr>
					</tbody>
				</table>
			</div>

            <style>
                .order123{
                    margin: 20px 20px;
                }
                .order123 a{
                    border-radius: 4px;
                    padding: 10px 20px;
                    color: white;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .next{
                    float: left;
                    background-color: #FFC602;
                }
                .order{
                    float: right;
                    background-color: red;
                }
            </style>
            <div class="order123 clearfix">
                <a href="" class="next">Tiếp tục mua hàng</a>
                <a href="" class="order">Đặt hàng</a>
            </div>
		</div>
    </section>
</body>
</html>