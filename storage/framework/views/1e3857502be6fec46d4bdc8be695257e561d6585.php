<div class="topnav"  id="menu">
    <a  class="<?php echo e(Request::path() ==  'home' ? 'active' : ''); ?>" href="/home">Trang chủ</a>
    <a  class="<?php echo e(Request::path() ==  'product' ? 'active' : ''); ?>" href="/product">Bán hàng</a>
    <a href="#">Khách hàng</a>
    <a href="#">Quản lý kho </a>
    <a href="#">Liên hệ</a>
    <div class="topnav-right">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <?php echo e(Auth::user()->name); ?>

        </a>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </div>

</div>

<?php $__env->startSection('script'); ?>

    <script type="text/javascript">

    $("#menu a").click(function(e) {
        // $(this).addClass('active');
        // $(this).parent().addClass('selected').siblings().removeClass('selected');
        $('a .active').removeClass('active');
        $(this).addClass('active')

    });
    </script>


<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/element/menu.blade.php ENDPATH**/ ?>