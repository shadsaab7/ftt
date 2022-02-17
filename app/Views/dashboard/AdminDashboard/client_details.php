<?= $this->extend('dashboard/AdminDashboard/admin_layout') ?>

<?= $this->section('content') ?>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Clients List</h4>
                                <div class="nk-block-des">
                                    <p>Here is clients list. total<code class="code-class"> 1231 </code> clients available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">User Name</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Mobile</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">State</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Agency Name</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Agency State</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Agency Mobile</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($clientData as $clients) : ?>
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                            <span><?= strtoupper(substr($clients['user_name'], 0, 2)) ?></span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead"><?= $clients['user_name'] ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                            <span><?= $clients['email'] ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                    <span><?= $clients['mobile'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?= $clients['state'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span><?= $clients['agency_name'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span><?= $clients['agency_state'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span><?= $clients['agency_phone'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="tb-status text-success">Active</span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="<?= route_to('client_d',$clients['id'] ) ?>"><em class="icon ni ni-eye"></em><span>View Client</span></a></li>
                                                                        <li><a href="<?= route_to('client_edit',$clients['id'] ) ?>"><em class="icon ni ni-pen"></em><span>Edit Client</span></a></li>
                                                                        <li><a href="javascript:void(0);" onclick="deleteData('<?php echo $clients['id']; ?>')"><em class="icon ni ni-trash text-danger"></em><span class="text-danger">Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>

                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("client_success")) { ?>
        swal({
            title: "Created",
            text: "Your Client Created",
            icon: "success",
        });
    <?php } ?>
    <?php if (session()->getFlashdata("update_success")) { ?>
        swal({
            title: "Updated",
            text: "Your Client Updated",
            icon: "success",
        });
    <?php } ?>
    function deleteData(id) {
        console.log(id);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url(route_to('add_client')); ?>',
                        data: {
                            delete: 'del',
                            id: id
                        },
                        success: function(result) {
                            console.log(result)
                            location.reload();
                        },
                    });
                } else {
                    swal("Your file is safe!");
                }
            });
    }
</script>
<?= $this->endSection() ?>