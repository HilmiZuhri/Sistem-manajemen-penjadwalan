<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid py-3 px-4">
            <p class="h4">Pengguna</p>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10%">No</th>
                                <th style="width: 70%">Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            ?>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->role == 'student'): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo e($user->nama); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin_parDetail', ['id' => $user->id])); ?>"
                                                class="btn btn-success mb-3">Selengkapnya</a>
                                            <form action="<?php echo e(route('admin_deletePar', ['id' => $user->id])); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/admin/admin_participant.blade.php ENDPATH**/ ?>