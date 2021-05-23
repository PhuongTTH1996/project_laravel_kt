<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="box box-primary">
            <?php if(!empty($sub_users) && $sub_users->total() > 0): ?>
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
                    <?php $__currentLoopData = $sub_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="todo_<?php echo e($sub_user->id); ?>">
                            <td align="center" style="width: 5%"><?php echo e($sub_user->id); ?></td>
                            <td align="center" style="width: 15%"><?php echo e($sub_user->str_ten); ?></td>
                            <td align="center" style="width: 10%">
                            </td>
                            <td align="center" style="width: 15%"></td>
                            <td align="center" style="width: 15%"></td>
                            <td align="center" style="width: 15%"><?php echo e($sub_user->type_code); ?></td>
                            <td align="center" style="width: 10%"><?php echo e($sub_user->type_amount); ?></td>
                            <td align="center" style="width: 10%"></td>
                            <td align="left" style="width: 5%">
                                <div class="btn-group" style="width:100%">
                                    <div>
                                        <div>
                                        <?php echo Form::open([
                                        'route' => ['get-edit', $product->id],
                                        'method' => 'GET'
                                        ]); ?>

                                        <?php echo Form::submit('View', ['class' => 'btn btn-primary']); ?>

                                        <?php echo Form::close(); ?>

                                        </div>
                                        <?php echo Form::open([
                                            'route' => ['get-edit', $sub_user->id],
                                            'method' => 'GET'
                                        ]); ?>

                                        <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

                                        <?php echo Form::close(); ?>

                                    </div>
                                    <div>
                                        <?php echo Form::open([
                                            'route' => ['product-delete', $sub_user->id],
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
                <div class="alert">Chưa có user</div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/home.blade.php ENDPATH**/ ?>