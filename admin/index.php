<?php 
    require('views/essentials.php');
    require('views/db_config.php');

    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        redirect('dashboard.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php require('views/links.php') ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="nama" required type="text" class="form-control shadow-none text-center" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <input name="password" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>
    
    <?php

        if(isset($_POST['login']))
        {
            $frm_data = filteration($_POST);
            
            $query = "SELECT * FROM `admin` WHERE `nama`=? AND `password`=?";
            $values = [$frm_data['nama'],$frm_data['password']];

            $res = select($query,$values,"ss");
            if ($res->num_rows==1) {
                $row = mysqli_fetch_assoc($res);
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['no'];
                redirect('dashboard.php');
            }
            else{
                alert('error','Login gagal - nama/password Salah!');
            }
        }
    ?>

    <?php require('views/scripts.php') ?>
</body>
</html>