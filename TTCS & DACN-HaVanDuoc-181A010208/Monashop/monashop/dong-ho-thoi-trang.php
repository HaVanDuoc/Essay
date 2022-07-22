<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồng hồ thời trang, smartwatch chính hãng, giá rẻ</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/style/style.css">
    <link rel="stylesheet" href="/monashop/css/product.css">

</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <?php include_once('style/header.php')?>

    <section>

        <!-- banner -->
        <div class="banner clearfix">
            <div class="banner_left">
                <img src="/monashop/image/dhtt/800-200-800x200-207.png" alt="">
            </div>

            <div class="banner_right">
                <img src="/monashop/image/dhtt/DHTT-390x97.png" alt="">
                <img src="/monashop/image/dhtt/sticky-390-97-2-390x97.png" alt="">
            </div>
        </div>

        <!-- filter -->
        <div class="box_filter clearfix">
            <div>
                <i class="fas fa-filter"></i>
                <span>Bộ lọc</span>
            </div>
            <div><span>Hãng</span></div>
            <div><span>Giá</span></div>
            <div><span>Đối tượng sử dụng</span></div>
            <div><span>Đường mặt kính</span></div>
            <div><span>Bộ máy</span></div>
            <div><span>Nguồn năng lượng</span></div>
            <div><span>Chất liệu mặt kính</span></div>
            <div><span>Loại mặt số</span></div>
            <div><span>Hình dán mặt số</span></div>
            <div><span>Chất liệu dây</span></div>
            <div><span>Chống nước</span></div>
            <div><span>Màu mặt</span></div>
            <div><span>Màu dây</span></div>
            <div><span>Tiện ích</span></div>
            <div><span>Nhóm sản phẩm</span></div>

        </div>
        
        <!--  -->
        <div class="box_filter clearfix">
            <div>
                <i></i>
                <span style="color: red; font-weight: bold;">Giảm sốc</span>
            </div>
            <div>
                <i></i>
                <span>Nam</span>
            </div>
            <div>
                <i></i>
                <span>Nữ</span>
            </div>
            <div>
                <i></i>
                <span>Trẻ em</span>
            </div>
            <div>
                <i></i>
                <span>Cặp đôi</span>
            </div>
            <div>
                <i></i>
                <span>Dây đồng hồ</span>
            </div>
        </div>

        <!--  -->
        <div class="box-sort">
            <ul>
                <li><strong><?=count_product('đồng hồ thời trang')?> Đồng hồ thông minh</strong></li>
                <li><input type="checkbox" name="" id=""><span>Giảm giá</span></li>
                <li><input type="checkbox" name="" id=""><span>Góp 0%</span></li>
                <li><input type="checkbox" name="" id=""><span>Mới</span></li>
            </ul>
        </div>
        <div class="box-common__main">
            <div class="listproduct">

                <?php
                    $sql    =   "SELECT * FROM product WHERE type_product = N'Đồng hồ thời trang'";
                    $query  =   mysqli_query($connect, $sql);
                    $count  =   1;

                    if (isset($query)) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            if ($count <= 20) {
                                $count++;
                        // }
                            
                    //     }
                    // }
                ?>

                <div class="item">
                    <a href="">
                        <div class="item-tragop"><span>Trả góp 0%</span></div>
                        <div class="item-hinh"><img src="/monashop/image/upload/product/<?=$row['image_product']?>" <?=img_size($row['type_product'])?> alt=""></div>
                        <div><?=$row['name_product']?></div>
                        <div <?=hidden($row['percent_discount_product'])?>>
                            <span class="price-old"><?=format_money($row['price_product'])?></span>
                            <span class="percent"><?="-". $row['percent_discount_product'] . "%"?></span>                        
                        </div>
                        <div class="listed-price"><?=format_money(listed_price($row['price_product'], $row['percent_discount_product']))?></div>
                        <div class="gift" <?=hidden($row['gift_product'])?>>Quà: <?=format_money($row['gift_product'])?></div>
                        <div class="evaluate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>100</span>
                        </div>
                    </a>
                </div>

                <?php
                        }}}
                ?>

            </div>
        </div>
    </section>

    <?php include_once('style/footer.php')?>
</body>
</html>