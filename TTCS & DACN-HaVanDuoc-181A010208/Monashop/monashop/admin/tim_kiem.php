<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONA Shop</title>
    <link rel="stylesheet" type="text/css" href="../css/monashop.css">
    <link rel="stylesheet" href="../css/tim_kiem.css">
    <link rel="stylesheet" href="../css/type_product.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="header-logo">
                <a href="../"><img src="../Image/logo-mona-shop.jpg" width="200" height="40"></a>
            </div>
            
            <div class="header-search">
                <form action="../monashop/mona/tim_kiem.php" method="POST">
                    <input type="text" name="txtsearch" placeholder="Nhập tên điện thoại, máy tính, phụ kiện ... cần tìm"/>
                    <input type="submit" name="search" value="Tìm"/>
                </form>
            </div>
            
            <div class="header-login">
                <ul>
                    <li><a href="#"><img src="../Image/icon-newspaper.png" width="24" height="24"><br><span>Tin hay</span></a></li>
                    <li><a href="../monashop/mona/"><img src="../Image/images.png" width="24" height="24"><br><span>Đăng nhập</span></a></li>
                    <li><a href="Giohang.html"><img src="../Image/icon-cart.jpg" width="24" height="24"><br><span>Giỏ hàng<span></a></li>
                </ul>
            </div>
        </div>
    </header>	
    
    <nav>
        <table width=1300px>
            <tr>
                <td width="162"><a href='../monashop/mona/dienthoai.php'><b>| Điện thoại |</b></a></td>
                <td width="104"><a href='../monashop/mona/laptop.php'><b>| Laptop |</b></a></td>
                <td width="139"><a href="../monashop/mona/tables.php"><b>| Tablet |</b></a></td>
                <td width="247"><a href="../monashop/mona/dongho.php"><b>| Đồng hồ thời trang |</b></a></td>
                <td width="115"><a href="../monashop/mona/pc.php"><b>| PC |</b></p></a></td>
                <td width="134"><a href="../monashop/mona/phukien.php"><b>| Phụ kiện |</b></a></td>
                <td width="207"><a href="Maycugiare.html"><b>| Máy cũ giá rẻ |</b></a></td>
                <td width="156"><a href="Simthecao.html"><b>| Sim, Thẻ cào |</b></a></td>
            </tr>
        </table>
    </nav>
    
    <div class="body">
        <div class="report-result">
            <p>Tìm thấy <strong>1</strong> kết quả.</p>
        </div>
        <!-- <aside class="search-result">
            <ul>
                <li>Giá
                    <ul class="sub-menu">
                        <li><a href="">sfd</a></li>
                        <li><a href="">đfdf</a></li>
                        <li><a href="">đfdff</a></li>
                        <li><a href="">fdsfsdfsdf</a></li>
                        <li><a href="">fgfdgdg</a></li>
                        <li><a href="">fsfsf</a></li>
                    </ul>
                </li>
            </ul>
        </aside> -->
        <div>
            <?php
                include("../include/connect.php");

                $search =   $_POST['txtsearch'];

                $sql    =   "select * from list_product where name_product like '%$search%' and type_product like '%$search%'";
                $mq     =   mysqli_query($conn,$sql);

                while($row=mysqli_fetch_array($mq)){

            ?>

            <div class="frame-product">
                <a href='info_product.php?id=<?=$row['id_product']?>'><img class="image-product" src="../upload/<?=$row['image_product']?>" width="180" height="180"></a>
                <a href='info_product.php?id=<?=$row['id_product']?>'><p class="name-product"><?=$row['name_product']?></p></a>
                <p class="price-product"><?=$row['price_product']?>₫</p>
            </div>

            <?php
                }
            ?>
        </div>
    </div>
        
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
                    <p>Hỗ trợ thanh toán: &nbsp;<img src="Image/Hotrothanhtoan.jpg"></p>
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
</body>
</html>