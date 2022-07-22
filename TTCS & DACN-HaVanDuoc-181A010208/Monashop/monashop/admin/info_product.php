<?php
    session_start();
    // session_destroy();
    var_dump($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/Monashop.css">
    <link rel="stylesheet" type="text/css" href="../css/info_product.css">
</head>
<body>
<header>
        	<div class="header">
            	<div class="header-logo">
					<a href="../"><img src="../Image/logo-mona-shop.jpg" width="200" height="40"></a>
                </div>
                
                <div class="header-search">
                	<input type="text" placeholder="Nhập tên điện thoại, máy tính, phụ kiện ... cần tìm"/>
                    <input type="submit" value="Tìm"/>
                </div>
                
                <div class="header-login">
                	<ul>
                    	<li><a href="Tinhay.html"><img src="../Image/icon-newspaper.png" width="24" height="24"><br><span>Tin hay</span></a></li>
                    	<li><a href="Dangnhap.html"><img src="../Image/images.png" width="24" height="24"><br><span>Đăng nhập</span></a></li>
                        <li><a href="../shoppingcart/cart.php"><img src="../Image/icon-cart.jpg" width="24" height="24"><br><span>Giỏ hàng<span></a></li>
                	</ul>
                </div>
            </div>
        </header>	
        
        <nav>
            <table width=1300px>
              <tr>
                <td width="162"><a href='../mona/dienthoai.php'><b>| Điện thoại |</b></a></td>
                <td width="104"><a href='../mona/laptop.php'><b>| Laptop |</b></a></td>
                <td width="139"><a href="../mona/tables.php"><b>| Tablet |</b></a></td>
                <td width="247"><a href="../mona/dongho.php"><b>| Đồng hồ thời trang |</b></a></td>
                <td width="115"><a href="../mona/pc.php"><b>| PC |</b></p></a></td>
                <td width="134"><a href="../mona/phukien.php"><b>| Phụ kiện |</b></a></td>
                <td width="207"><a href="Maycugiare.html"><b>| Máy cũ giá rẻ |</b></a></td>
                <td width="156"><a href="Simthecao.html"><b>| Sim, Thẻ cào |</b></a></td>
              </tr>
            </table>
        </nav>

        <?php
            include('../include/connect.php');

            $sql       =   "select * from list_product where id_product=".$_GET['id'];
            $mq     =   mysqli_query($conn,$sql);

            while($row=mysqli_fetch_array($mq)){

        ?>

        <div  id="container-iphone">
            <div class="name-iphone">
            	<span><?=$row['name_product']?></span>
                <hr></hr>
            </div>
            
            <div class="space1"></div>
            
            <div class="info-iphone">
            	<div>
                	<div class="img-iphone">
                		<img src="../upload/<?=$row['image_product']?>">
                    </div>
                    
                    <div class="specifications">
                    	<div class="price-iphone">
                        	<strong><?=$row['price_product']?>₫</strong>
                        </div>
                        
                        <hr></hr>
                    	<h2>Thông số kỹ thuật</h2>
                        
                        <ul>
                        	<hr></hr>
                        	<li>
                            	<span>Màn hình:</span>
                                <div>
                                	<p>AMOLED, 6.5", Super Retina XDR</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>Hệ điều hành:</span>
                                <div>
                                	<p>iOS 13</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>Camera sau:</span>
                                <div>
                                	<p>3 camera 12 MP</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>Camera trước:</span>
                                <div>
                                	<p>12 MP</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>CPU:</span>
                                <div>
                                	<p>Apple A13 Bionic 6 nhân</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>RAM:</span>
                                <div>
                                	<p>4 GB</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>Bộ nhớ trong:</span>
                                <div>
                                	<p>512 GB</p>
                                <div>
                            </li>
                            
                             <li>
                            	<span>Thẻ SIM:</span>
                                <div>
                                	<p>1 eSIM & 1 Nano SIM, Hỗ trợ 4G</p>
                                <div>
                            </li>
                            
                            <li>
                            	<span>Dung lượng pin:</span>
                                <div>
                                	<p>3969 mAh, có sạc nhanh</p>
                                <div>
                            </li>
                            <hr></hr>
                        </ul>
                        <button type="button">Xem thêm cấu hình chi tiết</button> 
                        
                        <div class="buy-now">
                            <?php 
                            echo'
                                <a id="sp" href="../shoppingcart/addcart.php?id='.$_GET['id'].'" >
                            	<b>MUA NGAY</b><br>
                                <span>Giao tận nơi hoặc nhận tại siêu thị</span>
                                </a>';
                            ?>
                        	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php } ?>

        <div class="space2"></div>
        
        <footer>
            <div class="footer-two">
            	<article class="footer-two-article">
                	<aside class="footer-two-left">
                    	<p><b><font size="5">HOTLINE HỖ TRỢ</font></b></p>
                        <p>Hỗ trợ mua hàng: <a href="tel:+01299220162">0129 922 0162</a></p>
                        <p>Hỗ trợ kỹ thuật: <a href="tel:+01269220162">0129 922 0162</a></p>
                        <p>Hỗ trợ bảo hành: <a href="tel:+01269220162">0129 922 0162</a></p>
                    </aside>
                    
                    <section class="footer-two-mid">
                    	<p><b><font size="5">MONA MEDIA</font></b></p>
                        <p>Địa chỉ: 151 Hồ Bá Kiện, P15, Q10, TP.HCM</p>
                       	<p>Điện thoại: <a href="tel:+01299220162">0129 922 0162</a></p>
                        <p>Email:<a href="mailto:monashop@mgail.com">monashop@gmail.com></a></p>
                        <p>Skype:<a href="skype:monashop">monashop</a></p>
                    </section>
                    
                    <aside class="footer-two-right">
                    	<p>Hỗ trợ thanh toán: &nbsp;<img src="../Image/Hotrothanhtoan.jpg"></p>
                        <p>Tư vấn miễn phí (24/7)&emsp;Góp ý, phản hồi (8h00 - 22h00)<br>
							<a href="tel:+01299220162">0129 922 0162</a><a href="tel:+01299220162">0129 922 0162</a>
                        </p>

                    </aside>
                </article>
            </div>
            
            <div class="footer-three">
            	© All rights reserved. Thiết kế website <a href="#">Mona Media</a>
            </div>
        </footer>
        <script>
        document.getElementById('sp').addEventListener("click", addcart);;
        function addcart(){
            alert('Da them sp vao gio hang');
        }
    </script>
</body>
</html>