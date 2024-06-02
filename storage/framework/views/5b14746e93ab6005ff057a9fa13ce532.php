<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid py-3 px-5">
            <p class="h6 mb-5">Selamat Datang, <?php echo e(session('user.nama')); ?></p>
            <p class="h3 mb-5">Jadwal</p>
            <?php if($jadwal->isEmpty()): ?>
                <p class="h6 -mt-3">Tidak ada jadwal sekarang</p>
            <?php else: ?>
                <div class="row row-cols-2">
                    <div class="col mb-3">
                        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p><?php echo e($jadwal->judul); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col">
                        <img src="<?php echo e(asset('assets/img/OIG5.jpeg')); ?>" alt=""
                            style="width: 100%; height: 75%; object-fit: cover; border-radius: 10px">
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_dashboard.blade.php ENDPATH**/ ?>