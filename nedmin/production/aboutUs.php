<?php include('header.php');
require_once('../netting/conn_.php');
$aboutInfo = $db->prepare("select * from abouts where aboutId = 1");
$aboutInfo->execute();
$about = $aboutInfo->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">


<script src="https://cdn.ckeditor.com/ckeditor5/ckeditor.js"></script>
<body class="nav-md">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Hakkımzda Ayarları <small>
                                    <?php
                                    if (isset($_GET['current'])) {
                                        if ($_GET['current'] == "ok") {
                                            echo "Güncelleme Yapıldı";
                                        } else {
                                            echo "Güncelleme Yapılamadı";
                                        }
                                    } else {
                                        echo "Hoşgeldiniz";
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda
                                        Basligi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="aboutTitle"
                                            value="<?php echo $about['aboutTitle'] ?>" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">İçerik <span class="required">*</span></label>
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="menu_detail" name="aboutDexcription" required="required"
                                            class="form-control col-md-7 col-xs-12"><?php echo $about['aboutDexcription'] ?></textarea>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Kodu

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"
                                            value=" <?php echo $about['aboutVideoCode'] ?>" name="aboutVideoCode"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyonumuz

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"
                                            value=" <?php echo $about['aboutVision'] ?>" name="aboutVision"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyonumuz

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"
                                            value=" <?php echo $about['aboutMision'] ?>" name="aboutMision"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div align="right" class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="updateAboutSettings"
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