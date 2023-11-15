
 
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <section class="content">
  <div class="container-fluid">
    <div class="row">
      <?php if($products->count() > 0): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header text-center">
                <img src="<?php echo e(asset('assets/img')); ?>/<?php echo e($product->image); ?>" style="height: 150px; width: 100%; object-fit: contain;">
              </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo e($product->name); ?></p>
                      <h5 class="font-weight-bolder mb-0">
                        $<?php echo e(number_format($product->price, 0, '.', '.')); ?>

                      </h5>
                      <small><?php echo e($product->description); ?></small>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <?php if($product->sold): ?>
                      <span class="btn bg-gradient-danger">Sold</span>
                    <?php else: ?>
                      <span class="btn bg-gradient-success">Active</span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
        <div class="col-12">
          <div class="card">
            <div class="card-body text-center p-3">
              <h4>You don't have a product yet</h4>
              <a href="<?php echo e(route('product.create')); ?>" class="btn bg-gradient-primary">Add Product</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hicheel\4-1\ogodol security\biy-daalt\shop\resources\views/pages/my.blade.php ENDPATH**/ ?>