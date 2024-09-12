<?php include('header.php');
require_once('nedmin/netting/conn_.php');
$aboutInfo = $db->prepare("select * from abouts where aboutId = 1");
$aboutInfo->execute();
$about = $aboutInfo->fetch(PDO::FETCH_ASSOC);
?>


<div class="container">
    <ul class="small-menu"><!--small-nav -->
        <li><a href="" class="myacc">My Account</a></li>
        <li><a href="" class="myshop">Shopping Chart</a></li>
        <li><a href="" class="mycheck">Checkout</a></li>
    </ul><!--small-nav -->
    <div class="clearfix"></div>
    <div class="lines"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title-wrap">
                <div class="page-title-inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bread"><a href="#">Home</a> &rsaquo; About</div>
                            <div class="bigtitle"><?php echo $about['aboutTitle'] ?></div>
                        </div>
                        <div class="col-md-3 col-md-offset-5">
                            <button class="btn btn-default btn-red btn-lg">Satın Alma Teması</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9"><!--Main content-->
            <div class="title-bg">
                <div class="title">Tanıtım Videosu</div>
            </div>
            <div class="page-content">
                <iframe src="https://www.youtube.com/embed/<?php $about['aboutVideoCode'] ?>" width="560" height="315"
                    frameborder="0"></iframe>

            </div>

            <div class="title-bg">
                <div class="title">Vizyon</div>
            </div>
            <div class="page-content">
                <blockquote>
                    <?php echo $about['aboutVision'] ?>
                </blockquote>

            </div>
            <div class="title-bg">
                <div class="title">Misyon</div>
            </div>
            <div class="page-content">
                <blockquote>
                    <?php echo $about['aboutMision'] ?>
                </blockquote>

            </div>
            <div class="title-bg">
                <div class="title">Alışveriş Hakkında</div>
            </div>
            <div class="page-content">
                <blockquote>
                    <?php echo $about['aboutDexcription'] ?>
                </blockquote>

            </div>
        </div>
        <div class="col-md-3"><!--sidebar-->
            <div class="title-bg">
                <div class="title">Categories</div>
            </div>

            <div class="categorybox">
                <ul>
                    <li><a href="category.htm">Women Accessories</a></li>
                    <li><a href="category.htm">Men Shoes</a></li>
                    <li><a href="category.htm">Gift Specials</a></li>
                    <li><a href="category.htm">Electronics</a>
                        <ul>
                            <li><a href="#">iPhone 4S</a></li>
                            <li><a href="#">Samsung Galaxy</a></li>
                            <li><a href="#">MacBook Pro 17"</a></li>
                        </ul>
                    </li>
                    <li><a href="category.htm">On sale</a></li>
                    <li><a href="category.htm">Summer Specials</a></li>
                    <li><a href="category.htm">Electronics</a></li>
                    <li class="lastone"><a href="category.htm">Unique Stuff</a></li>
                </ul>
            </div>

            <div class="ads">
                <a href="product.htm"><img src="images\ads.png" class="img-responsive" alt=""></a>
            </div>

            <div class="title-bg">
                <div class="title">Best Seller</div>
            </div>
            <div class="best-seller">
                <ul>
                    <li class="clearfix">
                        <a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
                        <div class="mini-meta">
                            <a href="#" class="smalltitle2">Panasonic M3</a>
                            <p class="smallprice2">Price : $122</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div><!--sidebar-->
    </div>
    <div class="spacer"></div>
</div>
<?php include('footer.php') ?>