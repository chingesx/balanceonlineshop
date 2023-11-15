

<?php $__env->startSection('content'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body p-3">
            <h5>Purchase History</h5>
            <hr>
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Seller</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = Auth::user()->purchases ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="<?php echo e(asset('assets/img')); ?>/<?php echo e($product->detail->image); ?>" style="height: 50px; width: 50px; object-fit: contain"/>
                          <div class="ms-2">
                            <h6 class="mb-0 text-sm text-primary">$<?php echo e(number_format($product->detail->price, 0, '.', '.')); ?></h6>
                            <h6 class="mb-0 text-sm"><?php echo e($product->detail->name); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($product->detail->seller->name); ?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo e($product->detail->seller->email); ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <?php echo e($product->created_at); ?>

                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hicheel\4-1\ogodol security\biy-daalt\shop\resources\views/pages/purchase.blade.php ENDPATH**/ ?>