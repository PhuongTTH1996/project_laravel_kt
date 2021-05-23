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

     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
</head>

<body class="hold-transition login-page">
    <?php if(!empty(\Auth::user()->id)): ?>
        <?php echo $__env->make('element.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- jQuery 3 -->
    <script src="/static/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/static/components/bootstrap/dist/js/bootstrap.min.js"></script>

    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/layouts/auth.blade.php ENDPATH**/ ?>