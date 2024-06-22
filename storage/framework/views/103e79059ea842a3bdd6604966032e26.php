  
<?php $__env->startSection('title', 'Daftar Supplier'); ?>
  
<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <form action="<?php echo e(route('suppliers')); ?>" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input name="search" type="text" placeholder="Cari supplier..." value="<?php echo e(request('search')); ?>" class="form-control bg-light border-0 small">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <a href="<?php echo e(route('suppliers.create')); ?>" class="btn btn-success">Tambah Supplier</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($suppliers->count() > 0): ?>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($supplier->name); ?></td>
                        <td class="align-middle"><?php echo e($supplier->email); ?></td>
                        <td class="align-middle"><?php echo e($supplier->phone); ?></td>
                        <td class="align-middle"><?php echo e($supplier->address); ?></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('suppliers.show', $supplier->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('suppliers.edit', $supplier->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('suppliers.destroy', $supplier->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus supplier?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="6">Supplier tidak ditemukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozart\Desktop\UAS Pemograman WEB\toko-lancar\resources\views/suppliers/index.blade.php ENDPATH**/ ?>