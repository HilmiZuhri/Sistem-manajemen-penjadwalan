<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid py-5" style="width: 50%">
            <div class="card border-0">
                <div class="card justify-content-center align-items-center">
                    <div class="card-body mb-3">
                        <p class="h4 card-text">Buat Tugas Baru</p>
                    </div>
                    <form action="<?php echo e(route('makeCourse')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="container-fluid">
                            <div class="col">
                                <div class="container">
                                    <div class="col mb-3">
                                        <div class="row mb-3">
                                            <label for="">Penerima Tugas</label>
                                            <select name="user" class="form-control" id="">
                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($user->role == 'student'): ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->nama); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control" name="judul" style="width: 100%">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deskripsi Tugas</label>
                                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Tempat Pengumpulan</label>
                                            <input type="text" class="form-control" name="lokasi" style="width: 100%">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Mulai pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_mulai"
                                                style="width: 100%">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deadline pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_selesai"
                                                style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="container">
                                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_inputCourse.blade.php ENDPATH**/ ?>