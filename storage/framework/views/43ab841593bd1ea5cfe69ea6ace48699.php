
 
<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card">
          <div class="card-body p-3">
            <h5>Add Product</h5> 
            <hr>
            <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="name" class="form-control-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="image" class="form-control-label">Image</label>
                <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg" required>
              </div>
              <div class="form-group">
                <label for="description" class="form-control-label">Description</label>
                <textarea rows="6" name="description" class="form-control" id="description" required></textarea>
              </div>
              <div class="form-group">
                <label for="price" class="form-control-label">Price</label>
                <input type="number" name="price" class="form-control" id="price" required>
                <small>* Minimal $. 1</small>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hicheel\4-1\ogodol security\biy-daalt\shop\resources\views/pages/create.blade.php ENDPATH**/ ?>