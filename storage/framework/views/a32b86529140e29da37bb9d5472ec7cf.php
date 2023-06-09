<?php $__env->startSection('title'); ?>
    Pengiriman Surat
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Pengiriman Surat
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pengirimansurat'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <p>
                  Tata Cara Upload Data
                </p>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        #1 Pastikan Data Dalam File Sesuai
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Data dalam file harus Sesuai dengan mengikuti kolom dan barisnya.
                        Klik<a href="https://docs.google.com/spreadsheets/d/1wGy_DvyA_DAOCxt-ZDSVXiiMTCYabbLHs4rxBRSlrqk/edit#gid=1624081113" class="card-link">Disini</a> untuk melihat contoh format data yang benar.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        #2 Pastikan Format File Benar
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            Pastikan format file yang akan diUpload adalah '.csv'
                            Jika format masih '.xlxs' ubah terlebih dahulu <a href="https://convertio.co/id/xlsx-csv/" class="card-link">Disini</a>
                            dengan cara import pada spreadsheet, lalu klik Menu File dan pilih download dengan format '.csv'
                          </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        #3 Pastikan Mengisi Semua field
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Ketika User Klik button Upload maka akan muncul modal untuk mengirim suratnya. Pastikan untuk mengisi semua field yang ada agar tidak tidak terjadi gagal upload
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="card-body">
                <div class="d-flex justify-content-start">
                    <div class="buttons">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalupload">Upload</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modalupload" tabindex="-1" aria-labelledby="tambahModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <form class="form form-horizontal" action="/uploadexcel" method="POST" enctype="multipart/form-data"
                        data-parsley-validate>
                        <?php echo csrf_field(); ?>
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahModalTitle">Upload Data KWH</h5>
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
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Unit Induk</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" value="Kalimantan Barat" name="unitinduk" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>UP3</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="up3" placeholder=""
                                                    value="Pontianak" name="up3" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>ULP</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="ulp" placeholder=""
                                                    value="Menpawah" name="ulp" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Nama Pengirim</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="namapengirim"
                                                    placeholder="" name="namapengirim" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Catatan</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <textarea class="form-control" id="catatan" rows="3" name="catatan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Upload</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <!-- Basic file uploader -->
                                                        <div class="filepond--root basic-filepond filepond--hopper"
                                                            data-style-button-remove-item-position="left"
                                                            data-style-button-process-item-position="right"
                                                            data-style-load-indicator-position="right"
                                                            data-style-progress-indicator-position="right"
                                                            data-style-button-remove-item-align="false"
                                                            style="height: 76px;">
                                                            <input class="filepond--browser" type="file"
                                                                id="upload" name="filepond"
                                                                aria-controls="filepond--assistant-abmu7mpxy"
                                                                aria-labelledby="filepond--drop-label-abmu7mpxy"
                                                                accept="">
                                                            <div class="filepond--drop-label"
                                                                style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                                <label for="filepond--browser-abmu7mpxy"
                                                                    id="filepond--drop-label-abmu7mpxy"
                                                                    aria-hidden="true">Drag &amp; Drop your
                                                                    files or <span class="filepond--label-action"
                                                                        tabindex="0">Browse</span>
                                                                </label>
                                                            </div>
                                                            <div class="filepond--list-scroller"
                                                                style="transform: translate3d(0px, 0px, 0px);">
                                                                <ul class="filepond--list" role="list"></ul>
                                                            </div>
                                                            <div class="filepond--panel filepond--panel-root"
                                                                data-scalable="true">
                                                                <div class="filepond--panel-top filepond--panel-root">
                                                                </div>
                                                                <div class="filepond--panel-center filepond--panel-root"
                                                                    style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                                </div>
                                                                <div class="filepond--panel-bottom filepond--panel-root"
                                                                    style="transform: translate3d(0px, 68px, 0px);"></div>
                                                            </div>
                                                            <span class="filepond--assistant"
                                                                id="filepond--assistant-abmu7mpxy" role="status"
                                                                aria-live="polite" aria-relevant="additions"></span>
                                                            <fieldset class="filepond--data"></fieldset>
                                                            <div class="filepond--drip"></div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal"
                                    id="btn_upload">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Upload</span>
                                </button>
                            </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/pengiriman_surat.blade.php ENDPATH**/ ?>