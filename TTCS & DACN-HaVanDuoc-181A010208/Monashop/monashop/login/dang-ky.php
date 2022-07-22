<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký | Monashop.com</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/css/style.css">
    <link rel="stylesheet" href="/monashop/login/dang_nhap.css">

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
        <div class="box_dangnhap">
            <img src="/monashop/image/i1.png" alt="">
            <p class="lead_text">Đăng ký thông tin</p>

            <form action="" method="POST" id="frmLogin" class="frmDangnhap">
                <div>
                    <i class="fas fa-mobile-alt"></i>
                    <input type="text" id="username" name="username" placeholder="Nhập tài khoản mua hàng">
                    
                    <div><p id="username_error" class="notify_error"></p></div>
                </div>

                <div>
                    <i class="fas fa-unlock-alt"></i>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                    
                    <div><p id="password_error" class="notify_error"></p></div>
                </div>

                <div>
                    <i class="far fa-user"></i>
                    <input type="text" name="uname" id="uname" placeholder="Họ và tên">
                </div>

                <div>
                    <i class="fas fa-phone-volume"></i>
                    <input type="text" name="sdt" id="sdt" placeholder="Số điện thoại">
                </div>

                <button type="submit" onclick="return chkDangNhap();" id="btnDangnhap" name="btnDangnhap" class="btnDangnhap" ><span>Đăng ký</span></button>
            </form>

            <div class="support">
                <a href="#">Gặp khó khăn?</a> &nbsp;&nbsp;
                <a href="/monashop/page/dang-nhap.php">Đăng nhập</a>
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