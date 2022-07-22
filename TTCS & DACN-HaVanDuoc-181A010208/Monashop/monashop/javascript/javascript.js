
// 
// function toggleList() {
//     var x = document.getElementById('hidden');
//     if (x.style.display === 'none') {
//         x.style.display = 'block';
//     }
//     else{
//         x.style.display = 'none';
//     }
// }

// Lấy giá trị input
function getValue(id) {
    return document.getElementById(id).value.trim();
}

// hiển thị lỗi
function showError(key, mess){
    document.getElementById(key + '_error').innerHTML = mess;
}

// check Đăng Nhập
function chkDangNhap() {
    var username = getValue("username");
    var password = getValue("password");

    // tài khoản
    if (username == "") {
        showError('username', 'Tài khoản/SĐT không được để trống');
        // document.getElementById(username).focus();
        return;
    }

    // password
    else if (password == "") {
        showError('password', 'Mật khẩu không được để trống');
        // document.getElementById(password).focus();
        return;
    }  
}