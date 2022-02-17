<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Tour Package Details</h4>
                    <div class="nk-block-des">
                        <p>You can alow display form in column as example below.</p>
                    </div>
                </div>
            </div>
            <form action="<?= route_to('tour_packages_details') ?>" method="post" enctype="multipart/form-data">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Tour Package Basic Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="vender_id" value="1">
                                    <label class="form-label" for="full-name-1">Package Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="package_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email-address-1">Location</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount-1">Nights</label>
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                        <input type="number" class="form-control number-spinner" value="0" name="nights">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount-1">Price</label>
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                        <input type="number" class="form-control number-spinner" value="0" name="price">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">Overview</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control" rows="5" placeholder="Overview" name="overview"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Amenities</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Cards" name="amenities[amenities_accept_credit_card]">
                                                <label class="custom-control-label" for="Cards">Accepts Credit Cards</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Parking" name="amenities[amenities_car_parking]">
                                                <label class="custom-control-label" for="Parking">Car Parking</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Coupons" name="amenities[amenities_coupons]">
                                                <label class="custom-control-label" for="Coupons">Free Coupons</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Restaurant" name="amenities[amenities_resturent]">
                                                <label class="custom-control-label" for="Restaurant">Restaurant</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Smoking" name="amenities[amenities_smoking]">
                                                <label class="custom-control-label" for="Smoking">Smoking Allowed</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Internet" name="amenities[amenities_wireless_internet]">
                                                <label class="custom-control-label" for="Internet">Wireless Internet</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Included / Exclude</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="pick_drop" name="include_pick_and_drop">
                                                <label class="custom-control-label" for="pick_drop">Pick and Drop Services</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="meal_per_day" name="include_meal_per_day">
                                                <label class="custom-control-label" for="meal_per_day">1 Meal Per Day</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="dinner_music_event" name="include_dinner_music_event">
                                                <label class="custom-control-label" for="dinner_music_event">Cruise Dinner & Music Event</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="visit_best_place" name="include_visit_best_place">
                                                <label class="custom-control-label" for="visit_best_place">Visit 7 Best Places in the City With Group</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="additional_services" name="include_additional_services">
                                                <label class="custom-control-label" for="additional_services">Additional Services</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="insurance" name="include_insurance">
                                                <label class="custom-control-label" for="insurance">Insurance</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="food_drinks" name="include_food_drinks">
                                                <label class="custom-control-label" for="food_drinks">Food & Drinks</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="tickets" name="include_tickets">
                                                <label class="custom-control-label" for="tickets">Tickets</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">Payment Policy</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control" rows="5" placeholder="Payment Policy" name="payment_policy"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">Cancellation Policies</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control" rows="5" placeholder="Cancellation Policies" name="cancellation_policies"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">Terms And conditions</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control" rows="5" placeholder="Terms And conditions" name="terms_and_conditions"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">About Destination</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control" rows="5" placeholder="About Destination" name="about_destination"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name-1">Day wise Itinerary</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="day_wise_itinerary" id="itinerary" onchange="myFunction()">
                                    </div>
                                        <div id="fn" hidden>First Name :
                                            <input type="text" name="sdsd">
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Departure Dates</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control date-picker" name="departure_dates">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <div class="form-control-wrap">

                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Choose file</label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Gallery Image</label>
                                    <div class="form-control-wrap">

                                        <input type="file" class="custom-file-input" multiple name="gallery_image[]">
                                        <label class="custom-file-label">Choose file</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- .nk-block -->
    </div>
    <div class="col-lg-2"></div>
</div>


<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("success")) { ?>
        swal({
            title: "Details Saved",
            text: "New Data Saved",
            icon: "success",
        });
    <?php } ?>

    function myFunction() {
        var x = document.getElementById("itinerary");
        var y = $('#itinerary').val();
        $("#fn").show();
        console.log(y);
       
    }
</script>
<?= $this->endSection() ?>