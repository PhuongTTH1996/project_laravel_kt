<?php $__env->startSection('content'); ?>

<div class="container">
<section class="content-header">
    <h1>
        Quản lý danh mục sản phẩm
    </h1>
</section>

<section class="content">
    <a href="/home">Home</a> > Quản lý danh mục sản phẩm<span></span>
	<div class="box box-primary">
        <div class="box-header"> 
            <div class="col-sm-12">
                 <a class="btn btn-success" href="<?php echo e($addUrl); ?>">
                        <i class="fa fa-plus"></i> Thêm mới
                 </a>
            </div>
        </div>

         <div class="box-body">
             <form method="GET" action="<?php echo e($listUrl); ?>">

                 <div class="col-md-12">
                     <div class="form-group col-md-4 ">
                         <label>Tên:</label>
                         <?php echo Form::text('name', \Request::query('name')); ?>

                     </div>
                     <div class="form-group  col-md-4 ">
                         <label>Nhóm:</label>
                         <?php echo Form::select('type_group', $isGroupOptions, \Request::query('type_group')); ?>
                     </div>
                     <div class="form-group  col-md-4 ">
                         <label>Trạng thái:</label>
                         <?php echo Form::select('status', $statusOptions, \Request::query('status')); ?>
                     </div>
                 </div>

             </form>
         </div>
        <?php if(!empty($products) && $products->total() > 0): ?>
        <div class="box-body table-responsive-custom">
            <table id="table">
                <tr>
                    <td align="center" style="width: 5%"><strong>STT</strong></td>
                    <td align="center" style="width: 15%"><strong>Tên</strong></td>
                    <td align="center" style="width: 10%"><strong>Ảnh</strong></td>
                    <td align="center" style="width: 15%"><strong>Nhóm</strong></td>
                    <td align="center" style="width: 15%"><strong>Nhà cung cấp</strong></td>
                    <td align="center" style="width: 15%"><strong>Mã</strong></td>
                    <td align="center" style="width: 10%"><strong>Số tiền</strong></td>
                    <td align="center" style="width: 10%"><strong>Trạng thái</strong></td>
                    <td align="left" style="width: 5%"></td>
                </tr>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="todo_<?php echo e($product->id); ?>">
                        <td align="center" style="width: 5%"><?php echo e($product->id); ?></td>
                        <td align="center" style="width: 15%"><?php echo e($product->str_ten); ?></td>
                        <td align="center" style="width: 10%">
                            <img src='<?php echo e(asset('/static/img/'.$product->image)); ?>' style="width:70px; height:70px ">
                        </td>
                        <td align="center" style="width: 15%"><?php echo e($isGroupOptions[$product->type_group]); ?>

                        <td align="center" style="width: 15%"><?php echo e($customerOptions[$product->type_customer]); ?>

                        <td align="center" style="width: 15%"><?php echo e($product->type_code); ?></td>
                        <td align="center" style="width: 10%"><?php echo e($product->type_amount); ?></td>
                        <td align="center" style="width: 10%"><?php echo e($statusOptions[$product->status]); ?></td>
                        <td align="left" style="width: 5%">
                            <div class="btn-group" style="width:100%">
                                <div>
                                    
                                        
                                            
                                            
                                        
                                        
                                        
                                    
                                    <?php echo Form::open([
                                        'route' => ['get-edit', $product->id],
                                        'method' => 'GET'
                                    ]); ?>

                                    <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                                <div>
                                    <?php echo Form::open([
                                        'route' => ['product-delete', $product->id],
                                        'method' => 'DELETE'
                                    ]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>

        <div class="box-footer clearfix" style="text-align: center">
            <?php echo $products->links(); ?>

        </div>
        <?php else: ?>
            <div class="alert">Chưa có product</div>
        <?php endif; ?>

    </div>
</section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<script type="text/javascript">
</script>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/product/list.blade.php ENDPATH**/ ?>