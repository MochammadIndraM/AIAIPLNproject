<?php $__env->startSection('title'); ?>
    Master User Mobile Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Master User Mobile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('masteruser'); ?>
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
                                <th>Kode User</th>
                                <th>Nama User</th>
                                <th>Unit Induk</th>
                                <th>UP3</th>
                                <th>ULP</th>
                                <th>IMEI</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Indra</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>admin</td>
                                <td>12345678</td>
                                <td>
                                    <div class="buttons">
                                        <a href="#" class="btn icon btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="#" class="btn icon btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalTitle">
                            Tambah Master User
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
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Kode Paket</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="disabledInput"
                                                    disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Tarif</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Gudang Induk</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" disabled="disabled" id="disabledSelect">
                                                        <option>Green</option>
                                                        <option>Red</option>
                                                        <option>Blue</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Daya</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Jenis Transaksi</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Tarif Lama</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6 offset-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Daya Lama</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-success ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTitle">
                            Edit Paket Material
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
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Kode Paket</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="disabledInput"
                                                    disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Tarif</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Gudang Induk</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" disabled="disabled" id="disabledSelect">
                                                        <option>Green</option>
                                                        <option>Red</option>
                                                        <option>Blue</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Daya</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-4 col-4">
                                                <label class="col-form-label">
                                                    <h6>Jenis Transaksi</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Tarif Lama</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-6 offset-6">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-2">
                                                <label class="col-form-label">
                                                    <h6>Daya Lama</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-9 col-9">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-warning ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Edit</span>
                        </button>
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
                            Hapus Paket Material
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
                        <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Edit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/masteruser_mbl.blade.php ENDPATH**/ ?>