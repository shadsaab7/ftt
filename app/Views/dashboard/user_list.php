<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Users Details</h4>
            <div class="nk-block-des">
                <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
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
                        <th class="nk-tb-col"><span class="sub-text">Users</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Date Of Birth</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone number</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($userList as $user) :?>
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
                                    <span><img src="public/UsersImage/<?= $user['user_img'] ?>" ></span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead"><?= $user['first_name']." ".$user['last_name'] ?> <span class="dot dot-success d-md-none ml-1"></span></span>
                                    <span><?= $user['email'] ?></span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount"><?= $user['date_of_birth'] ?></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span><?= $user['phone_number'] ?></span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                        <span><?= $user['address'] ?></span>
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
                                                <li><a href="<?= route_to('user_edit',$user['id']) ?>"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                <li><a href="javascript:void(0);" onclick="deleteData(<?= $user['id'] ?>)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->

<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("success")) { ?>
        swal({
            title: "Saved",
            text: "New Client Saved",
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
                        url: '<?= base_url(route_to('create_user')); ?>',
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
    function editData(id) {
        console.log(id);
        $.ajax({
            type: 'POST',
            url: '<?= base_url(route_to('create_user')); ?>',
            data: {
                id : id,
                edit : 'editdata',
            },
            success: function(result) {
                console.log(result)
                // location.reload();
            },
        });
    }
</script>
<?= $this->endSection() ?>