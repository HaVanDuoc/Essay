<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');

    $id =   $_GET['id'];

    $sql    =   "SELECT * FROM product WHERE id_product = '$id'";
    $query  =   mysqli_query($connect, $sql);
    $row    =   mysqli_fetch_assoc($query); 

    $id_product     =   $row['id_product'];
    $name_product   =   $row['name_product'];
    $type_product   =   $row['type_product'];
    $trademark_product   =   $row['trademark_product'];
    $image_product   =   $row['image_product'];
    $price_product   =   $row['price_product'];
    $count_product   =   $row['count_product'];
    $percent_discount_product   =   $row['percent_discount_product'];
    $gift_product   =   $row['gift_product'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name_product?></title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/css/style.css">
    <link rel="stylesheet" href="/monashop/css/info_product.css">
</head>
<body>
    <header>
        <div class="banner-media">
            <img src="/monashop/image/1200-44-1200x44-1.png" alt="">
        </div>
        <div class="header-wrap clearfix">
            <div class="header-content">
                <a href="/monashop/" class="logo"><strong>Monashop.com</strong></a>
                <div class="bordercol"></div>
                <a href="" class="diachi-khuyenmai">
                    <p>Xem giá trị khuyến mãi tại</p>
                    <span>Hồ Chí Minh</span>
                </a>
                <form action="" class="header-search">
                    <input type="text" name="" id="" placeholder="Bạn tìm gì...">
                    <i class="fas fa-search icon__search"></i>
                </form>
                <a href="/monashop/gio-hang.php" class="giohang">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                </a>
                <a href="/monashop/lich-su-mua-hang.php" class="lichsudonhang">Lịch sử <br> đơn hàng</a>
                <div class="bordercol"></div>   
                <a href="" class="header__hot">
                    <p class="dotnew">
                        <span class="animation"></span>
                    </p>
                    <span>Sinh Nhật 17 Bẻ Gãy Sừng Trâu <br> giảm tới 47%</span>
                    
                </a>
                <div class="bordercol"></div>   
                <a href="" style="text-align: center;">24h <br> Công nghệ</a>
                <div class="bordercol"></div>   
                <a href="">Hỏi đáp</a>
                <div class="bordercol"></div>   
                <a href="">GameApp</a>
            </div>
        </div>

    </header>

    <nav>
        <div>
            <ul class="main-menu">
                <li>
                    <a href="/monashop/dien-thoai.php">
                        <i class="fas fa-mobile-alt"></i>
                        Điện thoại
                    </a>
                </li>
                <li>
                    <a href="/monashop/laptop.php">
                        <i class="fas fa-laptop"></i>
                        Laptop
                    </a>
                </li>
                <li>
                    <a href="/monashop/tablet.php">
                        <i class="fas fa-tablet-alt"></i>
                        Tablet
                    </a>
                </li>
                <li>
                    <a href="/monashop/phu-kien.php">
                        <i class="fas fa-headphones-alt"></i>
                        Phụ kiện
                    </a>
                </li>
                <li>
                    <a href="/monashop/dong-ho-thong-minh.php">
                        Đồng hồ thông minh
                    </a>
                </li>
                <li>
                    <a href="/monashop/dong-ho-thoi-trang.php">
                        Đồng hồ thời trang
                    </a>
                </li>
                <li>
                    <a href="/monashop/pc-may-in.php">
                        <i class="fas fa-desktop"></i>
                        PC, Máy in
                    </a>
                </li>
                <li>
                    <a href="/monashop/may-cu-gia-re.php">
                        Máy cũ giá rẻ
                    </a>
                </li>
                <li>
                    <a href="/monashop/sim-the-cao.php">
                        Sim, Thẻ cào
                    </a>
                </li>
                <li>
                    <a href="/monashop/tra-gop-dien-nuoc.php">
                        Trả góp, điện nước
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <!--  -->
        <ul class="breadcrumb clearfix">
            <li><a href="/monashop/dien-thoai.php/"><?=$type_product?></a></li>
            <li><span>›</span></li>
            <li><a href=""><?=change_text($type_product)?> <?=$trademark_product?></a></li>
        </ul>

        <h3 class="h3-name_product"><?=change_text($type_product)?> <?=$name_product?></h3>

        <!--  -->
        <div class="box_sanpham clearfix">
            <!--  -->

            <div class="box_left">
                <!-- <div class="img_sp"><img src="/monashop/image/upload/product/<?=$image_product?>" alt=""></div> -->
                <div class="img_sp"><img src="image/info_product/realme-c21y-tongquan-780x433-1.jpg" alt=""></div>

                <div class="box_left_1">
                    <ul class="policy__list">
                        <li><i class="fas fa-shield-alt"></i>Bảo hành chính hãng điện thoại 1 năm <span class="xem_chi_tiet">Xem chi tiết</span></li>
                        <li><i class="fas fa-box-open"></i>Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp microUSB, Củ sạc rời đầu Type A <span class="xem_chi_tiet">Xem chi tiết</span></li>
                        <li><i class="fas fa-history"></i>1 đổi 1 trong 30 ngày đối với sản phẩm lỗi</li>
                    </ul>
                </div>

                <div class="box_left_2"><img src="/monashop/image/info_product/realme-c21y-note.jpg" alt=""></div>
            </div>

            <!--  -->
            <div class="box_right">
                <div class="box_right_1">
                    <p>Giá tại <span class="xem_chi_tiet">Hồ Chí Minh</span></p>
                    <div class="box_gia">
                        <span class="gia_niem_yet"><?=format_money(listed_price($price_product, $percent_discount_product))?></span>
                        <span class="gia_cu"><?=format_money($price_product)?></span>
                        <span class="giam_gia"><?="-" . $percent_discount_product . "%"?></span>
                    </div>
                </div>

                <div class="box_right_2">
                    <img src="/monashop/image/info_product/920x320-920x230-4-920x230.gif" alt="">
                </div>

                <div class="box_right_3">
                    <div class="box_right_3_top">
                        <p style="font-weight: bold;">Khuyến mãi trị giá <?=format_money($gift_product)?></p>
                        <p>Giá và khuyến mãi dự kiến áp dụng đến 23:00 29/07</p>
                    </div>

                    <div class="box_right_3_bottom">
                        <ul>
                            <li><span style="color: #d0021b;">Mua online thêm quà:</span> Tặng Phiếu mua hàng Gia dụng trị giá 300,000đ cho Khách hàng tại các tỉnh thành áp dụng chỉ thị 16 <span class="xem_chi_tiet">Xem chi tiết</span></li>
                            <li>Giảm giá 400,000đ khi tham gia thu cũ đổi mới <span class="xem_chi_tiet">Xem chi tiết</span></li>
                            <li>Ưu đãi phòng chờ thương gia <span class="xem_chi_tiet">Xem chi tiết</span></li>
                            <li>Trả góp 0% thẻ tín dụng <span class="xem_chi_tiet">Xem chi tiết</span></li>
                            <li>Nhập mã HPBD17 giảm 3% tối đa 100.000đ khi thanh toán quét QRcode qua App của ngân hàng <span class="xem_chi_tiet">(click xem chi tiết)</span></li>
                        </ul>
                    </div>
                </div>

                <div class="box_right_4">
                    <!-- Kiểm hàng số lượng khác 0 thì còn hàng -->
                    <?=con_hay_het($count_product)?>
                </div>

                <div class="box_dat_hang">
                    <a href="gio-hang/add-cart.php?id=<?=$id_product?>" class="box_mua_ngay">MUA NGAY</a>
                    <a href="" class="box_tra_gop">TRẢ GÓP QUA THẺ <br> Visa, Mattercard, JCB</a>
                    <!-- <p>Gọi đặt mua <a href="tel:18001060">1800.1060</a> (7:30 -22:00)</p> -->
                </div>

                <!-- <div class="box_cau_hinh">
                    <p class="text_lead_cauhinh">Cấu hình <?=change_text($type_product)?> <?=$name_product?></p>
                    <div>
                        <ul>
                            <li><p>Màn hình:</p><span>IPS LCD6.5"HD+</span></li>
                            <li><p>Hệ điều hành:</p></li>
                            <li><p>Camera sau:</p></li>
                            <li><p>Camera trước:</p></li>
                            <li><p>Chip:</p></li>
                            <li><p>RAM:</p></li>
                            <li><p>Bộ nhớ trong:</p></li>
                            <li><p>SIM:</p></li>
                            <li><p>Pin, Sạc:</p></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <footer>
        <div class="footer__wrap clearfix">
            <ul>
                <li><a href="">Lịch sử mua hàng</a></li>
                <li><a href="">Cộng tác bán hàng cùng TGDĐ</a></li>
                <li><a href="">Tìm hiểu về mua trả góp</a></li>
                <li><a href="">Chính sách bảo hành</a></li>
                <li><a class="arrow" onclick="<script>toggleList()</script>">Xem thêm</a></li>
                <div id="hidden" style="display: none;">
                    <li><a href="">Chính sách đổi trả</a></li>
                    <li><a href="">Giao hàng & Thanh toán</a></li>
                    <li><a href="">Hướng dẫn mua online</a></li>
                    <li><a href="">Bán hàng doanh nghiệp</a></li>
                    <li><a href="">Phiếu mua hàng</a></li>
                    <li><a href="">In hóa đơn điện tử</a></li>
                    <li><a href="">Quy chế hoạt động</a></li>
                    <li><a href="">Nội quy cửa hàng</a></li>
                    <li><a href="">Chất lượng phục vụ</a></li>
                    <li><a href="">Cảnh báo giả mạo</a></li>
                    <li><a href="">Chính sách khui hộp sản phẩm Apple</a></li>
                </div>
            </ul>

            <ul>
                <li><a href="">Giới thiệu công ty (MWG.vn)</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Gửi góp ý, khiếu nại</a></li>
                <li><a href="">Tìm siêu thị (2.626 shop)</a></li>
                <li><a href="">Xem bản mobile</a></li>
            </ul>

            <ul>
                <li><strong>Tổng đài hỗ trợ (Miễn phí gọi)</strong></li>
                <li>Gọi mua: <a href="" style="font-weight: bold; color: #288ad6;">1800.1060</a> (7:30 - 22:00)</li>
                <li>Kỹ thuật: <a href="" style="font-weight: bold; color: #288ad6;">1800.1763</a> (7:30 - 22:00)</li>
                <li>Khiếu nại: <a href="" style="font-weight: bold; color: #288ad6;">1800.1062</a> (8:00 - 21:30)</li>
                <li>Bảo hành: <a href="" style="font-weight: bold; color: #288ad6;">1800.1064</a> (8:00 - 21:00)</li>
            </ul>

            <ul>
                <li>
                    <i class="fab fa-facebook fb"></i>
                    <a href=""  style="color: #288ad6;">3664k Fan</a>
                    <i class="fab fa-youtube yt"></i>
                    <a href=""  style="color: #288ad6;">802k Đăng ký</a>
                </li>
                <li>
                    <p>Website cùng tập đoàn</p>
                    <p class="cungtapdoan">
                        <img src="/monashop/image/logo-dienmayxanh.png" alt="">
                        <span style="font-weight: bold; color: #288ad6;">Điện máy Xanh</span>
                        <img src="/monashop/image/logo-bachhoaxanh.jpg" alt="">
                        <span style="font-weight: bold; color: green;">Bách hóa Xanh</span>
                    </p>

                </li>
            </ul>
        </div>

        <div class="footer__bottom clearfix">
            <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.</p>
            <p>Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. </p>
        </div>
    </footer>
</body>
</html>