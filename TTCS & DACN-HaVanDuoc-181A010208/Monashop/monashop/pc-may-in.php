<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua PC, máy in, mực in giá rẻ, chính hãng, trả góp 0%</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/css/style.css">
    <link rel="stylesheet" href="/monashop/css/product.css">

</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <?php include_once('style/header.php')?>

    <section>
        
        <!--  -->
        <div class="breadcumb">

        </div>

        <!-- banner -->
        <div class="banner clearfix">
            <div class="banner_left">
                <img src="/monashop/image/pc, mayin/SN-HP-AIO-800-200-800x200.png" alt="">
            </div>

            <div class="banner_right">
                <img src="/monashop/image/pc, mayin/sticky-hp-aio-390-97-390x97.png" alt="">
                <img src="/monashop/image/pc, mayin/man-hinh-LG390-97-390x97.png" alt="">
            </div>
        </div>

        <!-- pc_filter -->
        <div class="pc_filter clearfix">
            <a href=""><img src="/monashop/image/pc, mayin/Mayin2x-80x80-9.png" alt=""><p>Máy in</p></a>
            <a href=""><img src="/monashop/image/pc, mayin/Mucin2x-80x80.png" alt=""><p>Mực in</p></a>
            <a href=""><img src="/monashop/image/pc, mayin/manhinh-80x80.png" alt=""><p>Màn hình máy tính</p></a>
            <a href=""><img src="/monashop/image/pc, mayin/maytinhbo-80x80.png" alt=""><p>Máy tính để bàn</p></a>
        </div>
        
        <!--  -->
        <div class="box_quicklink clearfix">
            <a href=""><img src="/monashop/image/pc, mayin/Canon5693-b46-220x48-220x48.jpeg" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/Brother5693-b32-220x48-220x48.jpeg" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/logo-hp-149x40-6.png" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/logo-imac-220x48.png" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/logo-asus-149x40-1.png" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/lenovo1-220x48.png" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/viewsonictgdd-220x48.png" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/Samsung5697-b_27.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/pc, mayin/LG482-b17-220x48.png" alt=""></a>
        </div>

        <!--  -->
        <div class="box-sort">
            <ul>
                <li><strong><?=count_product('PC, Máy in')?> Pc, máy in</strong></li>
                <li><input type="checkbox" name="" id=""><span>Giảm giá</span></li>
            </ul>
        </div>

        <!--  -->
        <div class="box-common__main">
            <div class="listproduct">

                <?php
                    $sql    =   "SELECT * FROM product WHERE type_product = N'PC, Máy in'";
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