<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Chỉnh sửa sản phẩm
        </h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <?php echo Form::model($products, ['url' => $editUrl . '/' . $products->id, 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']); ?>
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
                        <div style="padding: 5px 0px; display: block"> <img id="profile_image" src='<?php echo e(asset('/static/img/'.$products->image)); ?>' style="width:70px; height:70px "></div>
                        <input id="profile_image" type="file" class="form-control" name="profile_image" accept="image/*"  />
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
                <button class="btn btn-success">Submit</button>
                <a href="<?php echo $listUrl ?>"  class="btn btn-primary " role="button"  >
                    <?php echo "Trở về" ?>
                </a>
                
            </div>

            <?php echo Form::close(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/product/edit.blade.php ENDPATH**/ ?>