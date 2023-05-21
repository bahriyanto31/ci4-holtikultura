<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-starter">

<head>
    <base href="<?= base_url(); ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title><?= $_ENV['APP_Name']; ?><?= (isset($title)) ? " - " . $title : "" ?></title>
    <meta name="description" content="<?= $_ENV['APP_Dekripsi']; ?>" />
    <?= $this->include('layout/head'); ?>
    <?= $this->renderSection('costum_css'); ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?= $this->include('layout/menu'); ?>
            <!-- Layout container -->
            <div class="layout-page">
                <?= $this->include('layout/navigasi'); ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <?= $this->renderSection('content'); ?>
                    <!-- / Content -->
                    <?= $this->include('layout/footer'); ?>
                    <div class="content-backdrop fade"></div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>

        <!-- / Layout wrapper -->
        <?= $this->include('layout/script'); ?>
        <?= $this->renderSection('costum_script'); ?>
</body>

</html>