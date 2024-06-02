<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-5">
            
            <div class="card my-3">
                <div class="card-body">
                    <p class="h4 mb-3 text-end">Selamat Datang, <?php echo e(session('userNow.nama')); ?> 👋</p>
                    <p class="h3">Jangan sering menunda tugas</p>
                    <img src="<?php echo e(asset('assets/img/OIG3.jpeg')); ?>" alt="" style="width: 100%">
                </div>
            </div>
            
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/client/client_dashboard.blade.php ENDPATH**/ ?>