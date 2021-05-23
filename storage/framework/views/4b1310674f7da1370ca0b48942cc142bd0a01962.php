<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Backend Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/static/components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/css/AdminLTE.css">
    <link rel="stylesheet" href="/static/css/custom.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="topnav-user" id="menu">
        <a  class="<?php echo e(Request::path() ==  'dien-thoai' ? 'active' : ''); ?>" href="/dien-thoai"><i class="fa fa-mobile"></i>Điện thoại</a>
        <a class="<?php echo e(Request::path() ==  'computer' ? 'active' : ''); ?>"  href="/computer"><i class="fa fa-laptop"></i>Laptop</a>
        <a href="#"><i class="fa fa-tablet"></i>Tablet</a>
        <a href="#"><i class="fa fa-clock-o"></i>Đồng hồ thông minh </a>
        <a href="#"><i class="fa fa-clock-o"></i>Đồng hồ thời trang</a>
        <a href="#"><i class="fa fa-desktop"></i>PC, Máy in</a>
        <a href="#">Máy cũ giá rẻ</a>
        <a href="#">Sim, Thẻ cào</a>
        <a href="#">Trả góp, điện nước</a>
        
            
            
        
        <div class="form-search pull-right">
            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
</body>

<?php echo $__env->yieldContent('content'); ?>

<footer>
    <section class="footer">
        <div class="footer">
            <div class="footer-left col-md-4">
                <p class="about">
                    <span><strong>About Us</strong></span><br><br>
                    Website bán hàng .
                </p>
                <br>
                <div class="icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-center col-md-4">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span> Tân Bình, TPHCM</span></p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>(+84) 123456789</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">tthpspkt@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right col-md-4">
                <h2>PhuongTTH</h2>
                <p class="menu">
                    <a href="#"> Home</a> |
                    <a href="#"> About</a> |
                    <a href="#"> Services</a> |
                    <a href="#"> News</a> |
                    <a href="#"> Contact</a>
                </p>
                <div class="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.121508400527!2d106.63919171515322!3d10.80200469230417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294fe7593643%3A0x75fc2555a7f3e79!2zRXRvd24sIEPhu5luZyBIw7JhLCBQaMaw4budbmcgMTMsIFTDom4gQsOsbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1621738511487!5m2!1svi!2s" width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/layouts/maser.blade.php ENDPATH**/ ?>