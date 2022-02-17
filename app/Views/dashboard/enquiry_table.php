<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Enquiry And Contact </h4>
                    <div class="nk-block-des">
                    </div>
                </div>
            </div>
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <div class=""></div>
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid">
                                        <label class="custom-control-label" for="uid"></label>
                                    </div>
                                </th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Name</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Message</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Enquiry For</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">country</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">date</span></th>
                                <th class="nk-tb-col nk-tb-col-tools text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($enquiryData as $enquiry) : ?>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                        <span><?= $enquiry['name'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span><?= $enquiry['email'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span><?= $enquiry['phone'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span><?= $enquiry['message'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span><?= $enquiry['enquiry_for'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span><?= $enquiry['country'] ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span><?= date("d M, Y", strtotime($enquiry['created_at'])) ?></span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="javascript:void(0);" onclick="deleteData(<?= $enquiry['id'] ?>)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
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
    </div>
    <div class="col-md-1">

    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
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
                        url: '<?= base_url(route_to('enquiry')); ?>',
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