<?php
require('../views/db_config.php');
require('../views/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['upd_general'])) {
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `title`=?, `about`=? WHERE `no`=?";
    $values = [$frm_data['title'], $frm_data['about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}

if (isset($_POST['upd_shutdown'])) {
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;

    $q = "UPDATE `settings` SET `shutdown`=? WHERE `no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}

if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contacts_detail` WHERE `no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['upd_contacts'])) {
    $frm_data = filteration($_POST);

    $q = "UPDATE `contacts_detail` SET `address`=?,`gmaps`=?,`telp1`=?,`telp2`=?,`email`=?,`facebook`=?,`instagram`=?,`twitter`=?,`iframe`=? WHERE `no`=?";
    $values = [$frm_data['address'], $frm_data['gmaps'], $frm_data['telp1'], $frm_data['telp2'], $frm_data['email'], $frm_data['email'], $frm_data['facebook'], $frm_data['instagram'], $frm_data['twitter'], $frm_data['iframe'], 1];
    $res = update($q, $values, 'sssssssssi');
    echo $res;
}
