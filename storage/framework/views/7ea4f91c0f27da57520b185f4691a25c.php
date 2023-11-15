
 
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
            <div class="d-flex align-items-center justify-content-around">
            <p class="mb-0">Sort By</p>
            <select class="form-control w-75" id="sortBy">
                <option value=""  <?php echo e(request()->sort == '' ? 'selected' : ''); ?>>Latest</option>
                <option value="asc" <?php echo e(request()->sort == 'asc' ? 'selected' : ''); ?>>Ascending</option>
                <option value="desc" <?php echo e(request()->sort == 'desc' ? 'selected' : ''); ?>>Descending</option>
            </select>
            </div>
        </div>
        </div>
        <div class="row mt-4">
        <?php if($products->count() > 0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-sm- mb-4">
                <div class="card">
                <div class="card-header text-center">
                    <img src="<?php echo e(asset('assets/img')); ?>/<?php echo e($product->image); ?>" style="height: 150px; width: 100%; object-fit: contain;">
                </div>
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <small class="d-flex align-items-center text-capitalize">
                            <i class="ri-store-2-fill me-1"></i> 
                            <span><?php echo e($product->seller ? $product->seller->name : 'Seller not available'); ?></span>                        </small>
                        <p class="mb-0 text-capitalize font-weight-bold"><?php echo e($product->name); ?></p>
                        <h5 class="font-weight-bolder mb-0">
                            $<?php echo e(number_format($product->price, 0, '.', '.')); ?>

                        </h5>
                        <small><?php echo e($product->description); ?></small>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <?php if(!$product->sold): ?>
                        <a href="<?php echo e(route('product.buy', $product->id)); ?>" class="btn bg-gradient-primary">Buy</a>
                        <?php else: ?>
                        <span class="btn bg-gradient-danger">Sold</span>
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
                <h4>Product Not Available</h4>
                </div>
            </div>
            </div>
        <?php endif; ?>
        </div>
  </div>
 
  <script>
    const sortBy = document.getElementById('sortBy')
    sortBy.addEventListener('change', function() {
      const sort = 'sort=' + this.value + ''
      let url = "<?php echo e(route('product.index', ':sort')); ?>"
      url = url.replace(':sort', sort)
      window.location.href = url
    })
  </script>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hicheel\4-1\ogodol security\biy-daalt\shop\resources\views/pages/products.blade.php ENDPATH**/ ?>