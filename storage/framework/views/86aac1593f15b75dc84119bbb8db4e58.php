<!-- resources/views/transactions/index.blade.php -->



<?php $__env->startSection('title', 'Daftar Transaksi Penjualan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo e(route('transactions.create')); ?>" class="btn btn-success">Tambah Transaksi</a>
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
                <th>User</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($transactions->count() > 0): ?>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($transaction->user ? $transaction->user->name : 'User tidak ditemukan'); ?></td>
                        <td class="align-middle"><?php echo e($transaction->product ? $transaction->product->name : 'Produk tidak ditemukan'); ?></td>
                        <td class="align-middle"><?php echo e($transaction->quantity); ?></td>
                        <td class="align-middle"><?php echo e($transaction->total_price); ?></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('transactions.show', $transaction->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('transactions.edit', $transaction->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('transactions.destroy', $transaction->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus transaksi?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="6">Transaksi tidak ditemukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozart\Desktop\UAS Pemograman WEB\toko-lancar\resources\views/transactions/index.blade.php ENDPATH**/ ?>