<?php

// function cỡ ảnh
if (!function_exists('img_size')) {
    function img_size($size){
        if (!empty($size)) {
            include('/xampp/htdocs/monashop/connect.php');

            if ($size == 'Điện thoại') {
                echo 'style="width: 205px; height: 205px;"';
            } elseif ($size == 'Laptop') {
                echo 'style="width: 210px; height: 140px;"';
            // } elseif ($size == 'tablet') {
            //     echo 'style="width: 208px; height: 208px;"';
            // } elseif ($size == 'phukien') {
            //     echo 'style="width: 208px; height: 209px;"';
            } elseif ($size == 'Phụ kiện' || $size == 'Đồng hồ thông minh' || $size == 'Đồng hồ thời trang' || $size == 'Tablet' || $size == 'PC, Máy in') {
                echo 'style="width: 209px; height: 209px;"';
            }
        }
    }
}

// Hàm qui đổi tiền tệ
if (!function_exists('format_money')) {
    function format_money($money){
        if(!empty($money)){
            return number_format($money, 0, ',', '.') . "₫";
        }
    }
}

// Tính giá niêm yết
if (!function_exists('listed_price')) {
    function listed_price($price, $percent){
        if (!empty($price)) {
            if ($percent > 0) {
                return $listed_price = $price - ($price * ($percent/100));
            }
            else {
                return $listed_price = $price;
            }
        }
    }
}

// Đếm số lượng sản phẩm
if (!function_exists('count_product')) {
    function count_product($type){
        if (!empty($type)) {
            include('/xampp/htdocs/monashop/connect.php');
            $sql = "SELECT * FROM product WHERE type_product = '$type'";
            $query = mysqli_query($connect, $sql);
            $count = 0;

            while (mysqli_fetch_row($query)) {
                $count++;
            }
            echo $count;
        }
    }
}

// ẩn dòng
if (!function_exists('hidden')) {
    function hidden($hidden){
        if ($hidden < 1) {
            echo 'style="display: none;"';
        }
    }
}

// Xuất toàn bộ dữ liệu
if (!function_exists('output_data')) {
    function output_data($id){
        if (!empty($id)) {
            include('/xampp/htdocs/monashop/connect.php');

            $sql    =   "SELECT * FROM product WHERE id_product = '$id'";
            $query  =   mysqli_query($connect, $sql);
            $row    =   mysqli_fetch_assoc($query);

            if ($query === TRUE) {
                $id_product     =   $row['id_product'];
                $name_product   =   $row['name_product'];
                $type_product   =   $row['type_product'];
                $trademark_product   =   $row['trademark_product'];
                $image_product   =   $row['image_product'];
                $price_product   =   $row['price_product'];
                $count_product   =   $row['count_product'];
                $percent_discount_product   =   $row['percent_discount_product'];
                $gift_product   =   $row['gift_product'];
            }
        }
    }
}

// Quy đổi text
if (!function_exists('change_text')) {
    function change_text($text){
        if (!empty($text)) {

            // loại sản phẩm
            if ($text == 'dienthoai') {
                echo 'Điện thoại';
            } elseif ($text == 'laptop') {
                echo 'Laptop';
            } elseif ($text == 'tablet') {
                echo 'Tablet';
            } elseif ($text == 'phukien') {
                echo 'Phụ kiện';
            } elseif ($text == 'dhtm') {
                echo 'Đồng hồ thông minh';
            } elseif ($text == 'dhtt') {
                echo 'Đồng hồ thời trang';
            } elseif ($text == 'pc') {
                echo 'Pc, máy in';

            // hãng sản phẩm
            } elseif ($text == 'samsung') {
                echo 'Samsung';
            } elseif ($text == 'oppo') {
                echo 'Oppo';
            } elseif ($text == 'iphone') {
                echo 'Iphone';
            } elseif ($text == 'vivo') {
                echo 'Vivo';
            } elseif ($text == 'xiaomi') {
                echo 'Xiaomi';
            } elseif ($text == 'realme') {
                echo 'Realme';
            } elseif ($text == 'vsmart') {
                echo 'Vsmart';
            } elseif ($text == 'oneplus') {
                echo 'Oneplus';
            } elseif ($text == 'nokia') {
                echo 'Nokia'; 
            } elseif ($text == 'mobell') {
                echo 'Mobell';
            } elseif ($text == 'itel') {
                echo 'Itel';
            } elseif ($text == 'masstel') {
                echo 'Masstel';
            } elseif ($text == 'energizer') {
                echo 'Energizer';
            }
        }
    }
}

// Còn hàng hay Hết
if (!function_exists('con_hay_het')) {
    function con_hay_het($con_hay_het){
        if ($con_hay_het != 0) {
            echo '<p class="con_hang">còn hàng</p>';
        } else {
            echo '<p class="het_hang">hết hàng</p>';
        }
    }
}

// Check đăng nhập
// if (!function_exists('chkDangnhap')) {
//     function chkDangnhap(){
//         if (isset($_POST['dangnhap'])) {
//             if (empty($_POST['txtusername'])) {
//                 echo '<div><p class="notify_error">Tài khoản/SĐT không được để trống</p></div>';
//             } elseif (empty($_POST['txtpassword'])) {
//                 echo '<div><p class="notify_error">Mật khẩu không được để trống</p></div>';
//             }
//         }
//     }
// }

?>