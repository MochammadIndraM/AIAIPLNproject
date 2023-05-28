<?php $__env->startSection('title'); ?>
    Proses Klaim Garansi Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Proses Klaim Garansi
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
                                <th>No Berita Acara</th>
                                <th>Disetujui MULP</th>
                                <th>Diterima Digudang</th>
                                <th>Disetujui MUP3</th>
                                <th>Verfikasi Pihak Pabrik</th>
                                <th>Surat Balasan</th>
                                <th>Proses Packing</th>
                                <th>Proses Kirim</th>
                                <th>Action Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($item->no_berita_acara); ?></td>
                                    <td> <?php echo e($item->verifikasi_mulp); ?></td>
                                    <td> <?php echo e($item->diterima_digudang); ?></td>
                                    <td> <?php echo e($item->verifikasi_mup3); ?></td>
                                    <td> <?php echo e($item->verifikasi_pabrik); ?></td>
                                    <td> <?php echo e($item->surat_balasan); ?></td>
                                    <td> <?php echo e($item->proses_packing); ?></td>
                                    <td> <?php echo e($item->proses_kirim); ?></td>
                                    <td>
                                        <div class="btn-group sm-1">
                                            <div class="dropdown">
                                                <button onclick="showData(<?php echo e($item); ?>)"
                                                    class="btn btn-primary dropdown-toggle me-1" type="button"
                                                    id="dropdownMenuButton<?php echo e($item->no_berita_acara); ?>"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Packing
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton<?php echo e($item->no_berita_acara); ?>"
                                                    style="">
                                                    <a class="dropdown-item"
                                                        id="btn_packing_proses<?php echo e($item->no_berita_acara); ?>"
                                                        href="/proses-klaim-garansi/packingproses/<?php echo e($item->no_berita_acara); ?>">Diproses</a>
                                                    <a class="dropdown-item"
                                                        id="btn_packing_selesai<?php echo e($item->no_berita_acara); ?>"
                                                        href="/proses-klaim-garansi/packingselesai/<?php echo e($item->no_berita_acara); ?>">Selesai</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group sm-1">
                                            <div class="dropdown">
                                                <button onclick="showData(<?php echo e($item); ?>)"
                                                    class="btn btn-primary dropdown-toggle me-1" type="button"
                                                    id="dropdownMenuButton2<?php echo e($item->no_berita_acara); ?>"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Kirim
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton2<?php echo e($item->no_berita_acara); ?>"
                                                    style="">
                                                    <a class="dropdown-item"
                                                        id="btn_kirim_proses<?php echo e($item->no_berita_acara); ?>"
                                                        href="/proses-klaim-garansi/kirimproses/<?php echo e($item->no_berita_acara); ?>">Diproses</a>
                                                    <a class="dropdown-item"
                                                        id="btn_kirim_dikirim<?php echo e($item->no_berita_acara); ?>"
                                                        href="/proses-klaim-garansi/kirimdikirim/<?php echo e($item->no_berita_acara); ?>">Dikirim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<script>
    const showData = (item) => {

        $("#btn_packing_proses").attr('href', '/proses-klaim-garansi/packingproses/' + item.no_berita_acara);
        $("#btn_packing_selesai").attr('href', '/proses-klaim-garansi/packingselesai/' + item.no_berita_acara);
        $("#btn_kirim_proses").attr('href', '/proses-klaim-garansi/kirimproses/' + item.no_berita_acara);
        $("#btn_kirim_dikirim").attr('href', '/proses-klaim-garansi/kirimdikirim/' + item.no_berita_acara);

    }
</script>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/proses_klaimgaransi.blade.php ENDPATH**/ ?>