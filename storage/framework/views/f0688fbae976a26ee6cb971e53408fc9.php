<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageheading'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group row align-items-center">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="col-form-label">Jenis</label>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-md-8">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option></option>
                                            <option>Prabayar</option>
                                            <option>Pascabayar</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group row align-items-center">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="col-form-label">Waktu</label>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex gap-5 justify-content-space-between">
                                        <input type="date" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                        <label class="col-form-label">s/d</label>
                                        <input type="date" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zamm/Development/web/laravel/projectaiai/resources/views/layout/dashboard.blade.php ENDPATH**/ ?>