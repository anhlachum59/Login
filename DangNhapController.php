<?php
    require_once "../db_connect.php";
    $action= $_REQUEST['action'];
    if(isset($action))
    {
        switch ($action) {
            case 'dangnhap':
                DangNhap();
                break; 
     
            default:
                # code...
                break;
        }
    }
    function Them(){
        global $conn;
        $tenNguoiDung = $_POST['tennguoidung'];
        $matKhau = $_POST['matkhau'];
        $sql = "INSERT INTO nguoidung(tentaikhoan,matkhau) VALUES('$tenNguoiDung','$matKhau')";
        if($conn->query($sql)===TRUE)
        {
            echo "Them thanh cong";
        }
        else{
            echo "Fail:".$conn->error;
        }
        $conn->close();
    }
    
  
    
    function DangNhap(){
        global $conn;
        $tenNguoiDung = $_POST['username'];
        $matKhau = $_POST['password'];
        $sql = "SELECT * FROM nguoidung WHERE tentaikhoan='$tenNguoiDung' AND matkhau='$matKhau'";
        $result =$conn->query($sql);
        if($result->num_rows > 0)
        {
            echo 'Dang nhap thanh cong';
        }
        else
        {
            echo "Dang nhap that bai";
        }
        $conn->close();
    }
    
?>