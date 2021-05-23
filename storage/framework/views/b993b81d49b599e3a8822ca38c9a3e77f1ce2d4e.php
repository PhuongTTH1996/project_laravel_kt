<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Thêm mới sản phẩm
        </h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <?php echo Form::open(['url' => $addUrl, 'enctype' => 'multipart/form-data']); ?>
            <div class="box-body">
                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label"><span class="required">*</span> Tên</label>
                    <div class="col-sm-6">
                        <?php echo Form::text('str_ten',  null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('str_ten', ':message'); ?></span>
                    </div>

                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label" for=""><span class="required">*</span> Nhóm</label>
                    <div class="col-sm-6">
                        <?php echo Form::select('type_group', $isGroupOptions, null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('type_group', ':message'); ?></span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label" for=""><span class="required">*</span> Nhà cung cấp</label>
                    <div class="col-sm-6">
                        <?php echo Form::select('type_customer', $customerOptions, null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('type_customer', ':message'); ?></span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label" for=""><span class="required">*</span>Mã</label>
                    <div class="col-sm-6">
                        <?php echo Form::text('type_code',  null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('type_code', ':message'); ?></span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label" for=""><span class="required">*</span>Icon</label>
                    <div class="col-sm-3">
                        <div style="padding: 5px 0px; display: block"><img id="icon-img"  src="/static/img/no-image.png" class="mobile-logo-image" /></div>
                        <input id="profile_image" type="file" class="form-control" name="profile_image" accept="image/*"  />
                        <span id="icon-error" class="invalid-feedback"><?php echo $errors->first('icon', ':message'); ?></span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label"><span class="required">*</span> Số tiền</label>
                    <div class="col-sm-6">
                        <?php echo Form::text('type_amount',  null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('type_amount', ':message'); ?></span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-ls-12 form-group">
                    <label class="col-sm-3 control-label" for=""><span class="required">*</span> Trạng thái</label>
                    <div class="col-sm-6">
                        <?php echo Form::select('status', $statusOptions, null, ['class' => 'form-control']) ?>
                        <span class="invalid-feedback"><?php echo $errors->first('status', ':message'); ?></span>
                    </div>
                </div>
            </div>

            <div class="box-footer text" style="text-align: center">
                <button class="btn btn-success">Đăng ký </button>
                <a href="<?php echo $listUrl ?>"  class="btn btn-primary " role="button"  >
                    <?php echo "Trở về" ?>
                </a>
            </div>

            <?php echo Form::close(); ?>
        </div>
    </section>


<?php $__env->startSection('script'); ?>

    <script type="text/javascript">

        $(document).ready(function () {

            $('input[type="checkbox"]:visible').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });

            $('#remove-icon-btn').click(function (event) {
                $('#icon-img').attr('src', '/static/img/no-image.png');
                $('#delete_icon').attr('checked', 'checked');
            });

            $('#icon').change(function (event) {
                $('#icon-img').attr('src', URL.createObjectURL(event.target.files[0]));
            });

        });


        $('#amnt_amount').inputmask({'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true, 'digits': 2, 'digitsOptional': true, 'placeholder': '0'});

    </script>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/product/add.blade.php ENDPATH**/ ?>