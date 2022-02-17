<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        <div class="slide">
            <div class="bg-img" style="background-image: url(/public/img/pay1.jpg)"></div>
            <div class="wrap">
                <div class="wrap_float js_height">
                    <div class="slide_content">
                        <div class="title_wrap">
                            <h2 class="slide_title">Change Password</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="arrows">
        <div class="arrow prev"></div>
        <div class="arrow next"></div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"><b>UAE Visa Buy Now!!</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Passport Copy</label>
                    <input type="file" class="form-control" id="passport_copy" name="passport_copy" placeholder="Passport Copy">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</div>
<?php if($verify) { ?>
<form action="" method="post">
    <div class="row mt-5 mb-5">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="password" placeholder="New Password" aria-label="New Password">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="repeate_password" placeholder="Confirm Password" aria-label="Confirm Password">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mb-3">
            <button type="submit" class="form-control bg-primary text-white">Change Password</button>
        </div>
        <div class="col-md-3">
        </div>

    </div>
</form>
<?php } ?>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
	<?php if (session()->getFlashdata("password_not_match")) { ?>
		 $(".popup").removeClass("opened"), $("#password-not-match").addClass("opened");
   
	<?php } ?>


</script>
<?= $this->endSection() ?>