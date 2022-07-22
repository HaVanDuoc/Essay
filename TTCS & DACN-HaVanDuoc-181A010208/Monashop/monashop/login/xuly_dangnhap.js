function chkLogin() {
    if (document.frmLogin.txtusername.value  ==  "") {
        alert("Vui lòng nhập tên đăng nhập");
        document.frmLogin.txtusername.focus();
        return;
    }
}