<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid py-5" style="width: 50%">
            <div class="card border-0">
                <div class="card justify-content-center align-items-center">
                    <div class="card-body mb-3">
                        <p class="h4 card-text">Edit</p>
                    </div>
                    <form action="<?php echo e(route('admin_updateCourse', ['id' => $jadwal->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="container-fluid">
                            <div class="col">
                                <div class="container">
                                    <div class="col mb-3">
                                        <div class="row mb-3">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control" name="judul" style="width: 100%"
                                                value="<?php echo e($jadwal->judul); ?>">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deskripsi Tugas</label>
                                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"><?php echo e($jadwal->deskripsi); ?></textarea>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Tempat Pengumpulan</label>
                                            <input type="text" class="form-control" name="lokasi" style="width: 100%"
                                                value="<?php echo e($jadwal->lokasi); ?>">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Mulai pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_mulai" style="width: 100%"
                                                value="<?php echo e($jadwal->waktu_mulai); ?>">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deadline pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_selesai"
                                                style="width: 100%" value="<?php echo e($jadwal->waktu_selesai); ?>">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Status</label>
                                            <?php if($jadwal->status_id == 1): ?>
                                                <input type="text" class="form-control bg-white"
                                                    value="Tugas Belum Selesai" disabled>
                                            <?php elseif($jadwal->status_id == 2): ?>
                                                <input type="text" class="form-control bg-white"
                                                    value="Sudah Diselesaikan" disabled>
                                            <?php else: ?>
                                                <input type="text" class="form-control bg-white"
                                                    value="Sudah melebihi batas deadline" disabled>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="container">
                                        <button onclick="window.location.href='<?php echo e(url()->previous()); ?>'"
                                            class="btn btn-danger">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Edit</button>

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_editCourse.blade.php ENDPATH**/ ?>