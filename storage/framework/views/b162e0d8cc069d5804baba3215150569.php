<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid">
            <?php if($jadwal->isEmpty()): ?>
                <p class="h6 mt-3">Belum ada Tugas</p>
            <?php else: ?>
                <div class="container-fluid">
                    <div class="form-control bg-white mt-3" style="border: 0;">
                        <strong class="h4">List Tugas</strong>
                    </div>
                </div>
                <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card my-3 mx-3" style="width: 75%">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($jadwal->judul); ?></h5>
                            <textarea name="deskripsi" class="form-control bg-white" id="" style="width: 75%" cols="30" rows="3"
                                disabled><?php echo e($jadwal->deskripsi); ?></textarea>
                            <input type="text" name="" style="border: 0ch" id=""
                                value="Tempat Pengumpulan tugas : <?php echo e($jadwal->lokasi); ?>" class="form-control bg-white my-3"
                                disabled>
                            <div class="container ml-3 mb-3">
                                <p class="card-text">Mulai pengerjaan:
                                    <?php echo e(\Carbon\Carbon::parse($jadwal->waktu_mulai)->translatedFormat('l, d F Y H:i')); ?></p>
                            </div>
                            <div class="container ml-3">
                                <p class="card-text">Deadline pengerjaan:
                                    <?php echo e(\Carbon\Carbon::parse($jadwal->waktu_selesai)->translatedFormat('l, d F Y H:i')); ?></p>
                            </div>
                            <a href="<?php echo e(route('admin_editCourse', ['id' => $jadwal->id])); ?>"
                                class="btn btn-primary my-3">Edit </a>
                            <form action="<?php echo e(route('admin_deleteCourse', ['id' => $jadwal->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_course.blade.php ENDPATH**/ ?>