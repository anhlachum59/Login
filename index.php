<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="main_contend">
<h1>Dang nhap</h1>
<form class="form_login" action="./DangNhapController.php?action=dangnhap" method="post">
    <div class="user">
         <!-- user -->
        <label>userName: </label><input type="text" name="tennguoidung">
    </div>
   
    
    <div class="pass">
        <!-- pass -->
        <label>passWord: </label><input type="password" name="matkhau">
    </div>
    
   
    
    <!-- login -->
    <input type="submit" value="Dang nhap">
</form>
</div>

</body>
</html>