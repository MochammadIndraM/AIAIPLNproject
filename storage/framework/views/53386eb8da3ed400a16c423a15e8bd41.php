<?php $__env->startSection('title'); ?>
    Master Data
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Master Data
<?php $__env->stopSection(); ?>
<?php $__env->startSection('masterdata'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn icon btn-success" data-bs-toggle="modal"
                            data-bs-target="#tambahModal"><i class="bi bi-plus-lg"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>NOMER METER</th>
                                <th>KRITERIA GARANSI</th>
                                <th>GANGGUAN</th>
                                <th>TAHUN BUAT</th>
                                <th>TAHUN GANTI</th>
                                <th>Action</th>
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
                                <td>
                                    <button class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editData(<?php echo e($item); ?>)">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                    <button class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" >
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalTitle">Tambah User</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" action="/masterdata/store" method="POST"
                            enctype="multipart/form-data" data-parsley-validate>
                            <?php echo csrf_field(); ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label for="no_meter" class="col-lg-3 col-3 col-form-label">
                                                <h6>No meter</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="no_meter" class="form-control" placeholder=""
                                                    name="no_meter" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Kriteria Garansi</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="kriteria_garansi" id="kriteria_garansi">
                                                      <option value="Garansi">Garansi</option>
                                                      <option value="Tidak Garansi">Tidak Garansi</option>
                                                    </select>
                                                  </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Gangguan</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <textarea class="form-control" id="gangguan" rows="3" name="gangguan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Tahun Buat</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="number" class="form-control" id="tahun_buat" placeholder=""
                                                     name="tahun_buat" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Tahun Ganti</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="number" class="form-control" id="tahun_ganti" placeholder=""
                                                     name="tahun_ganti" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" id="btn_upload">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTitle">Edit Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" action="/masterdata/update" method="POST"
                            enctype="multipart/form-data" data-parsley-validate>
                            <?php echo csrf_field(); ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label for="no_meter" class="col-lg-3 col-3 col-form-label">
                                                <h6>No meter</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="no_meter_edit" class="form-control" placeholder=""
                                                    name="no_meter" value="<?php echo e(old('no_meter')); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Kriteria Garansi</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="kriteria_garansi" id="kriteria_garansi_edit">
                                                        <option value="Garansi">Garansi</option>
                                                        <option value="Tidak Garansi">Tidak Garansi</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Gangguan</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <textarea class="form-control" id="gangguan_edit" rows="3" name="gangguan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Tahun Buat</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="number" class="form-control" id="tahun_buat_edit" placeholder=""
                                                     name="tahun_buat" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Tahun Ganti</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="number" class="form-control" id="tahun_ganti_edit" placeholder=""
                                                     name="tahun_ganti" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" id="btn_upload">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Edit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalTitle">
                            Hapus Data
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Apakah anda yakin akan menghapus data ini??
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <a href="/masterdata/destroy/<?php echo e(count($crudmasterdata)==0 ? '' : $item->no_meter); ?>">
                            <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">hapus</span>
                            </button>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<?php $__env->stopSection(); ?>

<script>
    function editData(item) {
    console.log(item);
    $("#no_meter_edit").val(item.no_meter);
    $("#kriteria_garansi_edit").val(item.kriteria_garansi).change();
    $("#gangguan_edit").val(item.gangguan);
    $("#tahun_buat_edit").val(item.tahun_buat);
    $("#tahun_ganti_edit").val(item.tahun_ganti);

    // Open the edit modal
    $("#editModal").modal("show");

    console.log(item);
}

// const hapusData = (url) => {
//     Swal.fire({
//         title: "Hapus Data",
//         text: "Apakah anda yakin ingin menghapus data?",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonText: "Tidak",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Ya",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             location.href = window.location.origin + url;
//         }
//     });
// };

</script>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/masterdata.blade.php ENDPATH**/ ?>