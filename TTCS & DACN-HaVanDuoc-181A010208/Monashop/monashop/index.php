<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONAshop.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/home.css">

    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <script type="text/javascript" src="javascript/javascript.js"></script>
    <!-- <link rel="stylesheet" href="/monashop/css/slide.css"> -->
    <link rel="stylesheet" href="slide/slide.css">
    <script type="text/javascript" src="slide/slide.js"></script>
</head>

<?php
    include(__DIR__.'/connect.php');
    include(__DIR__.'/function/function.php');
?>

<body>
    <!-- Header -->
    <?php include_once(__DIR__.'/style/header.php');?>

    <section>
        <div class="banner">
            <div class="banner-left">
                <!-- <div class="slide_wrapper">
                    <div class="slide"><img src="/monashop/image/home/sn-chung-800-33002-830x300.gif" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/renocb-830-300-830x300.png" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/830-300-830x300-9.png" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/sn-dh-830-300-830x300.png" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/830-300-830x300-13 (1).png" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/830-300copy-830x300.png" alt=""></div>
                    <div class="slide"><img src="/monashop/image/home/830-300-830x300-1.png" alt=""></div>
                    
                </div> -->

                <!-- Container for the image gallery -->
                <div class="container">
                    <!-- Full-width images with number text -->
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="/monashop/image/home/830-300-830x300-1.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="/monashop/image/home/830-300-830x300-10.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="/monashop/image/home/830-300copy-830x300.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="/monashop/image/home/830-300-830x300-13 (1).png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <img src="/monashop/image/home/sn-dh-830-300-830x300.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <img src="/monashop/image/home/830-300-830x300-9.png" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Image text -->
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <!-- Thumbnail images -->
                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/830-300-830x300-1.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/830-300-830x300-10.png" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/830-300copy-830x300.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/830-300-830x300-13 (1).png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/sn-dh-830-300-830x300.png" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="/monashop/image/home/830-300-830x300-9.png" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-right">
                <img src="/monashop/image/home/Group3913-340x340.jpg" alt="">
                <img src="/monashop/image/home/laptopdesk-1-340x340-1.jpg" alt="">
                <img src="/monashop/image/home/laptopdesk-340x340.jpg" alt="">
                <img src="/monashop/image/home/4-340x340-340x340.jpg" alt="">
            </div>
        </div><!-- Ads banner -->

        <div class="sub-banner">
            <img src="/monashop/image/home/Desktopbanner-1200x60.png" alt="">
        </div><!-- Sub Ads banner -->

        <div class="box-common">
            <div class="box-common__top clearfix">
                <h2>Điện thoại nổi bậc nhất</h2>
                <div class="link">
                    <a href="">Samsung Galaxy A72</a>
                    <a href="">iPhone 12 Pro Max 128GB</a>
                    <a href="">OPPO Reno5</a>
                    <a href="/monashop/dien-thoai.php">Xem tất cả <strong><?=count_product('Điện thoại')?></strong> Điện thoại</a>
                </div>
            </div>

            <div class="box-common__main">
                <div class="listproduct">

                    <?php
                        $sql    =   "SELECT * FROM product WHERE type_product = N'Điện thoại'";
                        $query  =   mysqli_query($connect, $sql);
                        $count  =   1;
                        $path   =   "image/upload/product/";

                        if (isset($query)) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                if ($count <= 10) {
                                    $count++;
                            // }
                                
                        //     }
                        // }
                    ?>

                    <div class="item">
                        <a href="info_product.php?id=<?=$row['id_product']?>">
                            <div class="item-tragop"><span>Trả góp 0%</span></div>
                            <div class="item-hinh"><img src="<?=$path.$row['image_product']?>" <?=img_size($row['type_product'])?> alt=""></div>
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
        </div><!-- Điện thoại -->

        <div class="box-common clearfix">
            <div class="box-common__top clearfix">
                <h2>Laptop, tablet nổi bậc nhất</h2>
                <div class="link">
                    <a href="">Laptop Asus</a>
                    <a href="">Laptop HP</a>
                    <a href="">iPad Air 4 Wifi 64GB</a>
                    <a href="/monashop/laptop.php">Xem tất cả <strong><?=count_product('laptop')?></strong> Laptop</a>
                    <a href="/monashop/tablet.php">Xem tất cả <strong><?=count_product('tablet')?></strong> Tablet</a>

                </div>
            </div>

            <div class="box-common__main">
                <div class="listproduct">
                    <!-- <div class="chevron">
                        <button class="chevron_prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="chevron_next"><i class="fas fa-chevron-right"></i></button>
                    </div> -->

                    <?php
                        $sql    =   "SELECT * FROM product WHERE type_product = N'laptop' OR type_product = N'tablet'";
                        $query  =   mysqli_query($connect, $sql);
                        $count  =   1;

                        if (isset($query)) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                if ($count <= 5) {
                                    $count++;
                            // }
                                
                        //     }
                        // }
                    ?>

                    <div class="item">
                        <a href="info_product.php?id=<?=$row['id_product']?>">
                            <div class="item-tragop"><span>Trả góp 0%</span></div>
                            <div class="item-hinh"><img src="/monashop/image/upload/product/<?=$row['image_product']?>" <?=img_size($row['type_product'])?> alt=""></div>
                            <p><?=$row['name_product']?></p>
                            <div <?=hidden($row['percent_discount_product'])?>>
                                <span class="price-old"><?=format_money($row['price_product'])?></span>
                                <span class="percent"><?="-". $row['percent_discount_product'] . "%"?></span>                        
                            </div>
                            <p class="listed-price"><?=format_money(listed_price($row['price_product'], $row['percent_discount_product']))?></p>
                            <p class="gift" <?=hidden($row['gift_product'])?>>Quà: <?=format_money($row['gift_product'])?></p>
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
        </div><!-- Laptop || Tablet -->

        <div class="box-common clearfix">
            <div class="box-common__top clearfix">
                <h2>phụ kiện nổi bậc nhất</h2>
                <div class="link">
                    <a href="">Sạc dự phòng</a>
                    <a href="">Cáp sạc</a>
                    <a href="">Tai nghe</a>
                    <a href="">Loa</a>
                    <a href="">Ốp lưng</a>
                    <a href="/monashop/phu-kien.php">Xem tất cả <strong><?=count_product('Phụ kiện')?></strong> Phụ kiện</a>

                </div>
            </div>

            <div class="box-common__main">

                <div class="listproduct">
                    <?php
                        $sql    =   "SELECT * FROM product WHERE type_product = N'Phụ kiện'";
                        $query  =   mysqli_query($connect, $sql);
                        $count  =   1;

                        if (isset($query)) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                if ($count <= 5) {
                                    $count++;
                            // }
                                
                        //     }
                        // }
                    ?>

                    <div class="item">
                        <a href="info_product.php?id=<?=$row['id_product']?>&type=<?=$row['type_product']?>">
                            <div class="item-tragop"><span>Trả góp 0%</span></div>
                            <div class="item-hinh"><img src="/monashop/image/upload/product/<?=$row['image_product']?>" <?=img_size($row['type_product'])?> alt=""></div>
                            <p><?=$row['name_product']?></p>
                            <div <?=hidden($row['percent_discount_product'])?>>
                                <span class="price-old"><?=format_money($row['price_product'])?></span>
                                <span class="percent"><?="-". $row['percent_discount_product'] . "%"?></span>                        
                            </div>
                            <p class="listed-price"><?=format_money(listed_price($row['price_product'], $row['percent_discount_product']))?></p>
                            <p class="gift" <?=hidden($row['gift_product'])?>>Quà: <?=format_money($row['gift_product'])?></p>
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
        </div><!-- Phụ kiện -->
    </section>

    <!-- Footer -->
    <?php include_once(__DIR__.'/style/footer.php'); ?>
</body>
</html>