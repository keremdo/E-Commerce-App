<?php include('header.php');
require_once('../netting/conn_.php');
if (isset($_GET['menuId'])) {
    $getMenu = $db->prepare('select * from menus where menuId =:id');
    $getMenu->execute(
        ['id' => $_GET['menuId']]

    );
    $menu = $getMenu->fetch(PDO::FETCH_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/ckeditor.js"></script>

</head>

<body class="nav-md">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>MENU EKLEME <small>
                                    <?php
                                    if (isset($_GET[""])) {

                                    }
                                    ?>
                                </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="../netting/actions.php" method="POST" id="demo-form2" data-parsley-validate
                                class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu
                                        Baslık
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="<?php echo $menu['menu_top'] ?>"
                                            name="menu_top" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="<?php echo $menu['menu_name'] ?>"
                                            name="menu_name" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Detay
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="menu_detail" name="menu_detail" required="required"
                                            class="form-control col-md-7 col-xs-12"><?php echo $menu['menu_detail'] ?></textarea>
                                    </div>

                                    <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="menu_detail" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div> -->
                                </div>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#menu_detail'))
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Menu url
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="<?php echo $menu['menu_url'] ?>"
                                            name="menu_url" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Menu Seo Url
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="<?php echo $menu['menu_seourl'] ?>"
                                            name="menu_seourl" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Menu Sıra
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="menu_order" class="form-control" id="" required="required">
                                            <option value="1" <?php if ($menu['menu_order'] == 0) {
                                                echo 'selected=""';
                                            } ?>>
                                                Aktif</option>
                                            <option value="0" <?php if ($menu['menu_order'] == 0) {
                                                echo 'selected=""';
                                            } ?>>
                                                Pasif</option>

                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="menuId" value="<?php echo $menu['menuId'] ?>" id="">
                                <div class="ln_solid"></div>
                                <div align="right" class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="updateMenu"
                                            class="btn btn-success">Güncelle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <hr>
            <hr>

        </div>
    </div>
    <!-- /page content -->

    </div>
    </div>
    <?php include('footer.php'); ?>