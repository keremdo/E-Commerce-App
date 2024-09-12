<?php
ob_start();
session_start();
require_once('../netting/conn_.php');
include('fonction.php');



if (isset($_POST['userLoginControl'])) {
    $userMail = $_POST['user_mail'];
    $userPwd = md5($_POST['user_password']);

    $userInfo = $db->prepare('select * from users where user_mail=:mail and user_password =:pwd and user_role =:role');
    $userInfo->execute(array(
        'mail' => $userMail,
        'pwd' => $userPwd,
        'role' => "admin"
    ));
    $getUser = $userInfo->fetch(PDO::FETCH_ASSOC);
    $user = $userInfo->rowCount();
    if ($user == 1) {
        $_SESSION['user_mail'] = $userMail;
        $_SESSION['user_password'] = $userPwd;
        $_SESSION['userId'] = $getUser['userId'];
        header("location:../production/mainpage.php");
        exit;
    } else {
        header("location:../loginpage/index.php?current=negative");
        exit;
    }
}


if (isset($_POST['updateSettings'])) {
    $setUpdate = $db->prepare("UPDATE settings SET
    settingTitle=:settingTitle,
    settingDescription=:settingDescription,
    settingAuthor=:settingAuthor
    WHERE settingId=1");

    $update = $setUpdate->execute([
        'settingTitle' => $_POST['settingTitle'],
        'settingDescription' => $_POST['settingDescription'],
        'settingAuthor' => $_POST['settingAuthor']
    ]);


    if ($update) {
        header('location:../production/general-settings.php?current=ok');
    } else {
        header('location:../production/general-settings.php?current=no');
    }

}

if (isset($_POST['updateSmtpSettings'])) {
    $update = $db->prepare('UPDATE settings set
    settingSmtpHost=:settingSmtpHost,
    settingSmtpPassword=:settingSmtpPassword,
    settingSmtpPort=:settingSmtpPort,
    settingSmtpUser=:settingSmtpUser
    where settingId=1');

    $update->execute([
        'settingSmtpHost' => $_POST['settingSmtpHost'],
        'settingSmtpPassword' => $_POST['settingSmtpPassword'],
        'settingSmtpPort' => $_POST['settingSmtpPort'],
        'settingSmtpUser' => $_POST['settingSmtpUser']
    ]);
    if ($update) {
        header('location:../production/smtpSettings.php?current=ok');
    } else {
        header('location:../production/smtpSettings.php?current=ok');
    }

}

if (isset($_POST['updateSocialMediaSettings'])) {
    $update = $db->prepare('UPDATE settings set
    settingFacebook=:settingFacebook,
    settingInstagram=:settingInstagram,
    settingTwitter=:settingTwitter,
    settingGoogle=:settingGoogle,
    settingYoutube=:settingYoutube
    WHERE settingId=1');

    $update->execute([
        'settingFacebook' => $_POST['settingFacebook'],
        'settingInstagram' => $_POST['settingInstagram'],
        'settingTwitter' => $_POST['settingTwitter'],
        'settingGoogle' => $_POST['settingGoogle'],
        'settingYoutube' => $_POST['settingYoutube'],
    ]);

    if ($update) {
        header('location:../production/socialMediaSettings.php?current=ok');
    } else {
        header('location:../production/socialMediaSettings.php?current=ok');
    }

}

if (isset($_POST['updateContactSettings'])) {
    $setUpdate = $db->prepare("UPDATE settings SET
    settingPhone=:settingPhone,
    settingGsm=:settingGsm,
    settingFaks=:settingFaks,
    settingMail=:settingMail,
    settingCityPart=:settingCityPart,
    settingCity=:settingCity,
    settingAddress=:settingAddress,
    settingEkstraWork=:settingEkstraWork 
    WHERE settingId=1");

    $update = $setUpdate->execute(
        [
            'settingPhone' => $_POST['settingPhone'],
            'settingGsm' => $_POST['settingGsm'],
            'settingFaks' => $_POST['settingFaks'],
            'settingMail' => $_POST['settingMail'],
            'settingCityPart' => $_POST['settingCityPart'],
            'settingCity' => $_POST['settingCity'],
            'settingAddress' => $_POST['settingAddress'],
            'settingEkstraWork' => $_POST['settingEkstraWork'],
        ]
    );
    if ($update) {
        header('location:../production/contact.php?current=ok');
    } else {
        header('location:../production/contact.php?current=no');
    }



}


if (isset($_POST['updateApiSettings'])) {
    $setUpdate = $db->prepare("UPDATE settings SET
    settingMaps=:settingMaps,
    settingAnalystic=:settingAnalystic,
    settingZopim=:settingZopim
    WHERE settingId=1");

    $update = $setUpdate->execute([
        'settingMaps' => $_POST['settingMaps'],
        'settingAnalystic' => $_POST['settingAnalystic'],
        'settingZopim' => $_POST['settingZopim']
    ]);


    if ($update) {
        header('location:../production/apiSettings.php?current=ok');
    } else {
        header('location:../production/apiSettings.php?current=no');
    }

}

if (isset($_POST['updateAboutSettings'])) {
    $setUpdate = $db->prepare("UPDATE abouts SET
    aboutTitle=:aboutTitle,
    aboutDexcription=:aboutDexcription,
    aboutVideoCode=:aboutVideoCode,
    aboutVision=:aboutVision,
    aboutMision=:aboutMision
    WHERE aboutId=1");

    $update = $setUpdate->execute(
        [
            'aboutTitle' => $_POST['aboutTitle'],
            'aboutDexcription' => $_POST['aboutDexcription'],
            'aboutVideoCode' => $_POST['aboutVideoCode'],
            'aboutVision' => $_POST['aboutVision'],
            'aboutMision' => $_POST['aboutMision'],
        ]
    );
    if ($update) {
        header('location:../production/aboutUs.php?current=ok');
    } else {
        header('location:../production/contact.php?current=no');
    }



}

if (isset($_POST['updateUser'])) {
    $setUpdate = $db->prepare('UPDATE users set 
    user_tc=:user_tc,
    user_name=:user_name,
    user_surname=:user_surname,
    user_mail=:user_mail,
    user_address=:user_address,
    user_role=:user_role
    where userId =:userId
    ');
    $update = $setUpdate->execute([
        'user_tc' => $_POST['user_tc'],
        'user_name' => $_POST['user_name'],
        'user_surname' => $_POST['user_surname'],
        'user_mail' => $_POST['user_mail'],
        'user_address' => $_POST['user_address'],
        'user_role' => $_POST['user_role'],
        'userId' => $_POST['userId'],
    ]);

    if ($update) {

        $_SESSION['user_tc'] = $_POST['user_tc'];
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['user_surname'] = $_POST['user_surname'];
        $_SESSION['user_mail'] = $_POST['user_mail'];
        $_SESSION['user_address'] = $_POST['user_address'];
        $_SESSION['user_role'] = $_POST['user_role'];
        header('location:../production/users.php?userId=userId');
        exit;
    } else {
        header('location:../production/users.php?userId=userId');
        exit;
    }
}

if (isset($_POST['deleteUser'])) {

    $getUser = $db->prepare('select * from users where userId=:id');
    $getUser->execute([
        'id' => $_POST['userId'],
    ]);
    $user = $getUser->fetch(PDO::FETCH_ASSOC);
    if ($_SESSION['userId'] == $_POST['userId']) {
        header('location:../production/users.php?current=no');
        exit;
    } else {
        $delete = $db->prepare('delete from users where userId=:id');
        $delete->execute([
            'id' => $_POST['userId'],
        ]);
        if ($delete) {
            header('location:../production/users.php?current=ok');
            exit;
        } else {
            header('location:../production/users.php?current=no');
            exit;
        }
    }

}

if (isset($_POST['addMenu'])) {
    $menu_top = $_POST['menu_top'];
    $menu_name = $_POST['menu_name'];
    $menu_detail = $_POST['menu_detail'];
    $menu_url = $_POST['menu_url'];
    $menu_order = $_POST['menu_order'];
    $menu_seourl = $_POST['menu_seourl'];

    $sql = "insert into menus (menu_top,menu_name,menu_detail,menu_url,menu_order,menu_seourl) values( :menu_top, :menu_name, :menu_detail, :menu_url, :menu_order, :menu_seourl)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':menu_top', $menu_top);
    $statement->bindParam(':menu_name', $menu_name);
    $statement->bindParam(':menu_detail', $menu_detail);
    $statement->bindParam(':menu_url', $menu_url);
    $statement->bindParam(':menu_order', $menu_order);
    $statement->bindParam(':menu_seourl', $menu_seourl);

    $result = $statement->execute();
    if ($result) {
        header('location:../production/menus.php?Current=ok');
        exit;
    } else {
        header('location:../production/menus.php?Current=no');
        exit;
    }
}

if (isset($_GET['menuId'])) {
    $getMenu = $db->prepare('delete from menus where menuId=:id');
    $menu = $getMenu->execute([
        'id' => $_GET['menuId'],
    ]);
    $menu = $getMenu->fetch(PDO::FETCH_ASSOC);
    if ($menu) {
        header('location:../production/menus.php?current=negative');
        exit;
    } else {
        header('location:../production/menus.php?current=positive');
        exit;
    }

}

if (isset($_POST['updateMenu'])) {
    $seourl = seo($_POST['menu_top']);
    $getMenu = $db->prepare("UPDATE menus SET
    menu_top =:menu_top,
    menu_name =:menu_name,
    menu_detail =:menu_detail,
    menu_url =:menu_url,
    menu_order =:menu_order,
    menu_seourl =:menu_seourl
    WHERE menuId =:menuId");


    $update = $getMenu->execute([
        'menu_top' => $_POST['menu_top'],
        'menu_name' => $_POST['menu_name'],
        'menu_detail' => $_POST['menu_detail'],
        'menu_url' => $_POST['menu_url'],
        'menu_order' => $_POST['menu_order'],
        'menu_seourl' => $seourl,
        'menuId' => $_POST['menuId']
    ]);

    if ($update) {
        header('location:../production/menus.php?current=positive');
        exit;
    } else {
        header('location:../production/menus.php?current=negative');
        exit;
    }
}


?>