<?= $this->extend('main_layout'); ?>
<?= $this->section('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xl-12 mb-4 col-lg-12 col-12">
        <div class="card bg-primary" style="height: 12em;">
            <div class="d-flex align-items-start row">
                <div class="col-7">
                    <div class="card-body text-white">
                        <h2 class="card-title text-white mb-0">Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?> 🎉</h2>
                        <p class="mb-2">The small framework with powerful features</p>
                    </div>
                </div>
                <div class="col-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img style="position: absolute; top: -20px; transform: scaleX(-1);" src="assets/img/illustrations/card-advance-sale.png" height="200" alt="avatar" draggable="false" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>