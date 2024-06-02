<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid ">
            <p class="h3">JADWAL TUGAS MANAGER </p>
            <div class="row">
                <div class="col" style="">
                    <div class="card border-0">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <img src="<?php echo e(asset('assets/img/OIG3.jpeg')); ?>"
                                        class="rounded" width="100%">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <div class="card justify-content-center align-items-center">
                            <div class="card-body">
                                <p class="card-text">Masukkan Username dan Password</p>
                            </div>
                            <form action="<?php echo e(route('userLogin')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="container-fluid">
                                    <div class="col">
                                        <div class="container">
                                            <div class="col mb-3">
                                                <div class="row mb-3">
                                                    <label for="">Username</label>
                                                    <input type="text" name="username" class="form-control"
                                                        style="width: 100%">
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        style="width: 100%">
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <div class="container">
                                                <button type="submit" class="btn btn-primary mb-3">Login</button>
                                            </div>

                                            <div class="container">
                                                <p>Belum punya akun?<a href="<?php echo e(route('user_register')); ?>">Daftar</a></p>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/index.blade.php ENDPATH**/ ?>