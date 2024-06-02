<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-5 py-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="<?php echo e(route('user_submit', ['id' => $jadwal->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="hidden" name="id" id="" value="<?php echo e($jadwal->id); ?>">
                                <input type="hidden" name="status_id" id="" value="<?php echo e($jadwal->status_id); ?>">
                                <div class="mb-3">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" style="background-color: white"
                                        class="form-control" id="" value="<?php echo e($jadwal->judul); ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="">Waktu pengerjaan</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text"
                                                style="width: 100%; border: none;"class="form-control bg-white"
                                                value="<?php echo e(\Carbon\Carbon::parse($jadwal->waktu_mulai)->format('l')); ?>"
                                                disabled>
                                            <input type="datetime-local"
                                                style="width: 100%;border: none;"class="form-control bg-white"
                                                value="<?php echo e($jadwal->waktu_mulai); ?>" disabled>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control bg-white" value="sampai"
                                                style="border: white" disabled>
                                        </div>
                                        <div class="col">
                                            <input type="text" style="width: 100%; border:none;"
                                                class="form-control bg-white"
                                                value="<?php echo e(\Carbon\Carbon::parse($jadwal->waktu_selesai)->format('l')); ?>"
                                                disabled>
                                            <input type="datetime-local" style="width: 100%; border:none;"
                                                class="form-control bg-white" value="<?php echo e($jadwal->waktu_selesai); ?>"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Tempat Pengumpulan</label>
                                    <input type="text" class="form-control bg-white" value="<?php echo e($jadwal->lokasi); ?>"
                                        disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Tugas</label>
                                    <textarea class="form-control bg-white" name="deskripsi" id="deskripsi" cols="30" style="width: 100%"
                                        rows="5" disabled><?php echo e($jadwal->deskripsi); ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Tandai telah dikerjakan</button>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo e(asset('assets/img/OIG4.jpeg')); ?>" alt="" style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/client/client_courseDetail.blade.php ENDPATH**/ ?>