<?php $__env->startSection('content'); ?>
        <div class="products">
            <ul>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="main-product">
                    <div class="img-product">
                        <img src='<?php echo e(asset('/static/img/'.$product->image)); ?>' class="img-prd">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3"><?php echo e($product->str_ten); ?></h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money"><?php echo e($product->type_amount); ?> <strong>VNG</strong></span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.maser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_laravel_kt\resources\views/pageuser.blade.php ENDPATH**/ ?>