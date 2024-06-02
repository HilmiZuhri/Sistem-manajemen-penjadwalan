<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid">
            <div class="container-fluid mt-4 mb-3 px-5">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label for="" class="form-label h3">Jadwal Kuliah <?php echo e($user->nama); ?></label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <?php if($jadwal->isEmpty()): ?>
                        <div class="container mx-4 my-4 h5"><?php echo e($user->nama); ?> has no Course</div>
                        <div class="container mx-4 my-4 h6">Go create a Course for them</div>
                    <?php else: ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 8%">No</th>
                                <th>Course</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?php echo e($jadwal->judul); ?></td>
                                    <?php if($jadwal->status_id == '1'): ?>
                                        <td>Undone</td>
                                    <?php else: ?>
                                        <td>Done</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </thead>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_parDetail.blade.php ENDPATH**/ ?>