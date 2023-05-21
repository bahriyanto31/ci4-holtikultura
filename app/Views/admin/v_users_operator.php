<?= $this->extend('main_layout'); ?>
<?= $this->section('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header"><?= $title; ?></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Avatar</th>
                        <th>Nama</th>
                        <th>Akun</th>
                        <th>Log Info</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td width="20px">1</td>
                        <td width="20px">
                            <div class="avatar avatar-md pull-up" title="Bahriyanto Anang" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top">
                                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </div>
                        </td>
                        <td>Bahriyanto Anang</td>
                        <td>
                            <div style="display: grid; gap: 5px;">
                                <div class="input-group">
                                    <span class="input-group-text px-2" id="basic-addon11"><i class="fa-regular fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                                </div>
                                <div class="form-password-toggle">
                                    <div class="input-group">
                                        <span class="input-group-text px-2" id="basic-addon11"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" aria-describedby="basic-default-password2">
                                        <span class="input-group-text cursor-pointer px-1"><i class="ti ti-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: grid; gap: 10px;">
                                <span class="badge bg-label-warning me-1">127.0.0.1</span>
                                <span class="badge bg-label-primary me-1">2023-05-10 03:23:51</span>
                            </div>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <button class="btn btn-info btn-sm px-2"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm px-2"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>