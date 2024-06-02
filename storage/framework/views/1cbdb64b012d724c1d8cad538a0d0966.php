<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid" style="width: 25%">
            <div class="card border-0 mx-3 py-5">
                <div class="card justify-content-center align-items-center">
                    <div class="card-body">
                        <p class="card-text">Admin Register</p>
                    </div>
                    <form action="<?php echo e(route('isRegister')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="container-fluid">
                            <div class="col">
                                <div class="container mb-5">
                                    <div class="col mb-3">
                                        <div class="row mb-3">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" name="username" style="width: 100%">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" style="width: 100%">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="nama" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="container">
                                        <button type="submit" class="btn btn-primary mb-3">Create account</button>
                                    </div>
                                    <div class="container">
                                        <p>Already hav an account?<br>
                                            <a href="<?php echo e(route('login')); ?>">Log in Here</a></p>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/register.blade.php ENDPATH**/ ?>