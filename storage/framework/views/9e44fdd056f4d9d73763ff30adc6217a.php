  
<?php $__env->startSection('title', 'Profil Akun'); ?>
  
<?php $__env->startSection('contents'); ?>
    <hr />
    <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e(auth()->user()->name); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e(auth()->user()->email); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Level</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e(auth()->user()->level); ?></p>
              </div>
            </div>
            <hr>
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozart\Desktop\UAS Pemograman WEB\toko-lancar\resources\views/profile.blade.php ENDPATH**/ ?>