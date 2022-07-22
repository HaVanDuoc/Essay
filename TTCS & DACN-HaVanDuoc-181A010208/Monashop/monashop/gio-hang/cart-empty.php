<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Empty</title>
</head>

<style>
    .empty_cart{
        width: 600px;
        margin: 0 auto;
        text-align: center;
        margin-top: 50px;
    }

    .empty_cart i{
        font-size: 50px;
        color: red;
        margin-bottom: 20px;
    }

    .empty_cart p{
        margin-bottom: 20px;
    }

    .back_home{
    margin-bottom: 20px;
    border: 1px solid #288ad6;
    width: 100%;
    display: block;
    line-height: 40px;
    border-radius: 5px;
    text-transform: uppercase;
    color: #288ad6;
    font-weight: bold;
    }

    .tel{
        color: #288ad6;
    }
</style>    <!-- CSS -->

<body>
    <!-- Giỏ hàng trống -->
    <div class="empty_cart">
        <i class="fas fa-cart-arrow-down"></i>
        <p>Không có sản phẩm nào trong giỏ hàng</p>
        <a href="/monashop/" class="back_home">Về trang chủ</a>
        <p>Khi cần trợ giúp vui lòng gọi <a href="tel:18001060" class="tel">1800.1060</a> hoặc <a href="tel:02836221060" class="tel">028.3622.1060</a> (7h30 - 22h)</p>
    </div>
</body>
</html>