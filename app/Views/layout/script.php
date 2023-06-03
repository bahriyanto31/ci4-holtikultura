<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/libs/node-waves/node-waves.js"></script>


<script src="assets/vendor/libs/hammer/hammer.js"></script>
<script src="assets/vendor/libs/i18n/i18n.js"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<?= $this->renderSection('vendor_js'); ?>
<script src="assets/vendor/libs/moment/moment.js"></script>
<script src="assets/vendor/libs/toastr/toastr.js"></script>

<!-- Main JS -->
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script src="app/js/app.js"></script>
<?= $this->renderSection('custom_script'); ?>
<!-- Page JS -->

<?php
$notif_toast = session()->getFlashdata('notif_toast');
if ($notif_toast) {
    notif_toast($notif_toast);
}
// notif_toast(['sts' => 1, 'msg' => 'oke', 'titl' => 'okeeeee']);
?>