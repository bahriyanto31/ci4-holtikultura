<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo" style="width: 25%; overflow:unset;">
                <img src="app/img/holtikultur_logo.png" width="100%" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bold mt-3" style="font-family: 'Righteous', cursive;"><?= $_ENV['APP_Name']; ?></span>
        </a>
        <a id="click-disini" href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item">
            <a href="<?= base_url('web/dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?= base_url('admin/wilayah') ?>" class="menu-link">
                <i class="menu-icon tf-icons ti  ti-map"></i>
                <div data-i18n="Wilayah">Wilayah</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?= base_url('admin/users') ?>" class="menu-link">
                <i class="menu-icon tf-icons ti ti-app-window"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file-description"></i>
                <div data-i18n="Dokumentasi">Dokumentasi</div>
                <div class="badge bg-label-warning rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= base_url('sample/datatable') ?>" class="menu-link">
                        <div data-i18n="Datatables">Datatables</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->