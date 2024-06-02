<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-5">
            <p class="h4 my-3 text-end">Selamat Datang, <?php echo e(session('userNow.nama')); ?> 👋</p>
            <form class="d-flex pt-3" role="search" action="#" id="searchForm">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <p class="h3">Tugas yang Belum Dikerjakan</p>
            <div class="container-fluid" id="courseList">
                <div class="row">
                    <div class="col-sm-10">
                        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($jadwal->user_id == session('userNow.id')): ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class=""><strong>Tugas : </strong></p>
                                        <p id="judul"><?php echo e($jadwal->judul); ?></p>
                                        <p style="display: none"><?php echo e($jadwal->id); ?></p>
                                        <p> <strong>Waktu pengerjaan :</strong></p>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Dimulai</strong></p>
                                                <p><?php echo e(\Carbon\Carbon::parse($jadwal->waktu_mulai)->translatedFormat('l, d F Y H:i')); ?>

                                                </p>
                                            </div>
                                            <div class="col">
                                                <p><strong>Tenggat</strong></p>
                                                <p><?php echo e(\Carbon\Carbon::parse($jadwal->waktu_selesai)->translatedFormat('l, d F Y H:i')); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <?php
                                        $date = Carbon\Carbon::parse($jadwal->waktu_selesai);
                                        
                                        ?>
                                        <?php if($date->isToday() && $jadwal->status_id != 2): ?>
                                            <script>
                                                Swal.fire({
                                                    title: "Ada Tugas tenggat hari ini yang belum dikerjakan",
                                                    position: "top-end",
                                                    text: "Segera dikerjakan"
                                                });
                                            </script>
                                        <?php endif; ?>

                                        <div class="card-text mt-3">
                                            <?php if($jadwal->status_id == '1'): ?>
                                                <a href="<?php echo e(route('user_course', ['id' => $jadwal->id])); ?>"
                                                    class="btn btn-primary">Kerjakan</a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('user_course', ['id' => $jadwal->id])); ?>"
                                                    class="btn btn-outline-primary" style="pointer-events: none">Sudah dikerjakan
                                                    jadwal tugas</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');
        const courseList = document.getElementById('courseList');

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const searchTerm = searchInput.value.toLowerCase();
            const cards = courseList.querySelectorAll('.card');

            cards.forEach(function(card) {
                const judul = card.querySelector('#judul').textContent.toLowerCase();
                console.log("Judul:", judul);
                console.log("Search Term:", searchTerm);
                if (judul.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\penjadwalan\resources\views/client/client_course.blade.php ENDPATH**/ ?>