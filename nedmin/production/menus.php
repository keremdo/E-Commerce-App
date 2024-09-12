<?php
include('header.php');
require_once('../netting/conn_.php');
$getMenus = $db->prepare('select * from menus');
$getMenus->execute();
$menus = $getMenus->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                            <h2>MENU LISTESI</h2>
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
                            <hr>
                            <div class="x-content">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Menu Top</th>
                                            <th scope="col">Manu Ad Soyadı</th>
                                            <th scope="col">Menu Url</th>
                                            <th scope="col">Menu Sıra</th>
                                            <th scope="col">Menu Seo Url</th>
                                            <th scope="col">İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $index = 1;
                                        foreach ($menus as $menu) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $index++; ?></th>
                                                <td><?php echo strtoupper($menu['menu_top']); ?></td>
                                                <td><?php echo strtoupper($menu['menu_name']); ?></td>
                                                <td><?php echo strtoupper($menu['menu_url']); ?></td>
                                                <td><?php if (
                                                    $menu['menu_order'] == "1"
                                                ) {
                                                    echo "Aktif";
                                                } else {
                                                    echo "Pasif";
                                                } ?></td>
                                                <td><?php echo strtoupper($menu['menu_seourl']); ?></td>
                                                <td><a href="updateMenu.php?menuId=<?php echo $menu['menuId'] ?>"
                                                        class="btn btn-success">Menu Güncelle</a></td>
                                                <td><a href="../netting/actions.php?menuId=<?php echo $menu['menuId'] ?>"
                                                        class="btn btn-danger">Menu Sil</a></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="addMenu.php" class="btn btn-primary">Menu Ekle</a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Bitiyor -->
            </div>
        </div>
    </div>
    <!-- /page content -->

    <?php include('footer.php'); ?>
    <!-- /Datatables -->
</body>

</html>