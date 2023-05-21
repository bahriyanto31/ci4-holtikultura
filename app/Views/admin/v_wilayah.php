<?= $this->extend('main_layout'); ?>
<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom p-3">
            <h5 class="card-title m-0">Daftar <?= $title ?></h5>
        </div>
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="canvas_add">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Tambah <?= $title; ?></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                <form class="pt-0" action="<?= base_url('admin/wilayah/create') ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Wilayah</label>
                        <input type="text" name="nama_wilayah" placeholder="Masukkan Nama Wilayah" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-primary me-sm-1 me-1 data-submit">Simpan</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </form>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="table border-top datatables-users">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wilayah</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($datatable as $d) : ?>
                        <tr>
                            <td width="10px"><?= $no++; ?></td>
                            <td><?= $d['nama_wilayah'] ?></td>
                            <td width="100px">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:;" class="text-info edit-data" data-bs-target='#canvas_edit<?= $d['id_wilayah'] ?>' data-bs-toggle='offcanvas'><i class="ti ti-edit ti-sm me-2"></i></a>
                                    <a href="javascript:;" onclick="confirm_delete(this);" data-href="<?= base_url('admin/wilayah/delete/' . $d['id_wilayah']); ?>" class="text-danger delete-record"><i class="ti ti-trash ti-sm mx-2"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php foreach ($datatable as $d) : ?>
                <!-- Offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="canvas_edit<?= $d['id_wilayah'] ?>">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Edit <?= $title; ?></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                        <form class="pt-0" action="<?= base_url('admin/wilayah/update/' . $d['id_wilayah']) ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama Wilayah</label>
                                <input type="text" name="nama_wilayah" value="<?= $d['nama_wilayah'] ?>" placeholder="Masukkan Nama Wilayah" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-primary me-sm-1 me-1 data-submit">Simpan</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('custom_script'); ?>
<script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>
<script>
    var select2 = $('.select2');
    $('.datatables-users').DataTable({
        dom: '<"row mx-1 my-3 me-2"' +
            '<"col-md-2"<"me-3"l>>' +
            '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
            '>t' +
            '<"row my-2 mx-1 mt-3"' +
            '<"col-sm-12 col-md-10"i>' +
            '<"col-sm-12 col-md-2"p>' +
            '>',
        language: {
            sLengthMenu: '_MENU_',
            search: '',
            searchPlaceholder: 'Search..'
        },
        // Buttons with Dropdown
        buttons: [{
            text: '+ <span class="d-none d-sm-inline-block">Tambah <?= $title ?></span>',
            className: 'add-new btn btn-primary mx-2',
            attr: {
                'data-bs-toggle': 'offcanvas',
                'data-bs-target': '#canvas_add'
            }
        }],
    });
    // Filter form control to default size
    // ? setTimeout used for multilingual table initialization
    setTimeout(() => {
        $('.dataTables_filter .form-control').removeClass('form-control-sm');
        $('.dataTables_length .form-select').removeClass('form-select-sm');
    }, 300);
</script>
<?= $this->endSection(); ?>