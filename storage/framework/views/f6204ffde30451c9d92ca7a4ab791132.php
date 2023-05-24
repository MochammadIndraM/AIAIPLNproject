<?php $__env->startSection('title'); ?>
    Laporan Data
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Laporan Data
<?php $__env->stopSection(); ?>
<?php $__env->startSection('monitoring'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>NOMER METER</th>
                                <th>KRITERIA GARANSI</th>
                                <th>GANGGUAN</th>
                                <th>TAHUN BUAT</th>
                                <th>TAHUN GANTI</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $crudmasterdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($item->no_meter); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->kriteria_garansi); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->gangguan); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->tahun_buat); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->tahun_ganti); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="d-flex justify-content-end">
                    <a href="<?php echo e(route('cetakexceldb.export')); ?>" class="btn icon btn-primary">
                        Cetak
                        </a>
                </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/lap_data.blade.php ENDPATH**/ ?>