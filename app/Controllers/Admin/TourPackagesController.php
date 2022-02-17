<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\TourPackagesModel;

class TourPackagesController extends BaseController
{

    protected $tourPackageModel;
    protected $data;
    protected $session;

    public function __construct()
    {
        $this->data = array();
        $this->session = session();
        helper(['form', 'url']);

        $this->tourPackageModel = new TourPackagesModel();
    }
    public function index()
    {

        if ($this->request->getMethod() == 'post') {

            if ($this->request->getVar('delete')) {

                $getId = $this->request->getVar('id');
                return $this->tourPackageModel->delete($getId);
            }

            $location = $this->request->getVar('location');
            $vender_id = $this->request->getVar('vender_id');
            $package_name = $this->request->getVar('package_name');
            $nights = $this->request->getVar('nights');
            $price = $this->request->getVar('price');
            $overview = $this->request->getVar('overview');

            $amenities_accept_credit_card = $this->request->getVar('amenities_accept_credit_card') ? 1 : 0;
            $amenities_car_parking = $this->request->getVar('amenities_car_parking') ? 1 : 0;
            $amenities_coupons = $this->request->getVar('amenities_coupons') ? 1 : 0;
            $amenities_resturent = $this->request->getVar('amenities_resturent') ? 1 : 0;
            $amenities_smoking = $this->request->getVar('amenities_smoking') ? 1 : 0;
            $amenities_wireless_internet = $this->request->getVar('amenities_wireless_internet') ? 1 : 0;

            // $totalAmenities = [
            //     'amenities_accept_credit_card' => 0,
            //     'amenities_car_parking' => 0,
            //     'amenities_coupons' => 0,
            //     'amenities_resturent' => 0,
            //     'amenities_smoking' => 0,
            //     'amenities_wireless_internet' => 0
            // ];

            // $amenities = $this->request->getVar('amenities');

            // if ($amenities) {
            //     foreach ($totalAmenities as $key => $value) {
            //         if (isset($amenities[$key]) && $value == 'on') {
            //             $amenities[$key] = 1;
            //         } else {
            //             $amenities[$key] = 0;
            //         }
            //     }
            // }

            // return print_r($amenities);

            $include_pick_and_drop = $this->request->getVar('include_pick_and_drop') ? 1 : 0;
            $include_meal_per_day = $this->request->getVar('include_meal_per_day') ? 1 : 0;
            $include_dinner_music_event = $this->request->getVar('include_dinner_music_event') ? 1 : 0;
            $include_visit_best_place = $this->request->getVar('include_visit_best_place') ? 1 : 0;
            $include_additional_services = $this->request->getVar('include_additional_services') ? 1 : 0;
            $include_insurance = $this->request->getVar('include_insurance') ? 1 : 0;
            $include_food_drinks = $this->request->getVar('include_food_drinks') ? 1 : 0;
            $include_tickets = $this->request->getVar('include_tickets') ? 1 : 0;

            $payment_policy = $this->request->getVar('payment_policy');
            $cancellation_policies = $this->request->getVar('cancellation_policies');
            $terms_and_conditions = $this->request->getVar('terms_and_conditions');
            $about_destination = $this->request->getVar('about_destination');

            $day_wise_itinerary = $this->request->getVar('day_wise_itinerary');
            $departure_dates = $this->request->getVar('departure_dates');

            $tourPackagesData = [
                'package_name' => $package_name,
                'location' => $location,
                'vender_id' => $vender_id,
                'nights' => $nights,
                'price' => $price,
                'overview' => $overview,

                'amenities_accept_credit_card' => $amenities_accept_credit_card,
                'amenities_car_parking' => $amenities_car_parking,
                'amenities_coupons' => $amenities_coupons,
                'amenities_resturent' => $amenities_resturent,
                'amenities_smoking' => $amenities_smoking,
                'amenities_wireless_internet' => $amenities_wireless_internet,

                'include_pick_and_drop' => $include_pick_and_drop,
                'include_meal_per_day' => $include_meal_per_day,
                'include_dinner_music_event' => $include_dinner_music_event,
                'include_visit_best_place' => $include_visit_best_place,
                'include_additional_services' => $include_additional_services,
                'include_insurance' => $include_insurance,
                'include_insurance' => $include_insurance,
                'include_food_drinks' => $include_food_drinks,
                'include_tickets' => $include_tickets,

                'payment_policy' => $payment_policy,
                'cancellation_policies' => $cancellation_policies,
                'terms_and_conditions' => $terms_and_conditions,
                'about_destination' => $about_destination,

                'day_wise_itinerary' => $day_wise_itinerary,
                'departure_dates' => $departure_dates,

                // 'image' => $newName,
                // 'gallery_image' => $newGalleryName,
            ];;
            // $newName = NULL;
            // if ($image) {
            //     $newName = $image->getRandomName(); //This is if you want to change the file name to encrypted name
            //     $image->move('./public/TourPackagesImages', $newName);
            // }
            // $newGalleryName = NULL;
            // if ($gallery_image) {
            //     $newGalleryName = $gallery_image->getRandomName(); //This is if you want to change the file name to encrypted name
            //     $gallery_image->move('./public/TourPackagesImages', $newGalleryName);
            // }
            $imageSavePath = 'public/TourPackagesImages/' . time() . '/';
            if ($image = $this->request->getFile('image')) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    // $image->move(WRITEPATH . 'uploads', $newName);
                    $image->move($imageSavePath, $newName);
                    $tourPackagesData['image'] = $imageSavePath . $newName;
                }
            }
            if ($imagefile = $this->request->getFiles()) {
                $galleryFiles = array();
                foreach ($imagefile['gallery_image'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $newGalleryName = $img->getRandomName(); //This is if you want to change the file name to encrypted name
                        $img->move($imageSavePath, $newGalleryName);
                        array_push($galleryFiles, $imageSavePath . $newGalleryName);
                        // $galleryFiles = './public/TourPackagesImages/'.$newGalleryName;
                    }
                }
            }

            if (count($galleryFiles)) {
                $tourPackagesData['gallery_image'] = json_encode($galleryFiles);
            }

            // return print_r($tourPackagesData);

            $saveTourPackages = $this->tourPackageModel->save($tourPackagesData);

            if ($saveTourPackages) {
                $this->session->setFlashdata("success", "Data Saved");
                return redirect()->route('tour_packages_details');
            } else {
                $response['message'] = 'User not found';
            }
        }
        return view('dashboard/tour_packages_details', $this->data);
    }
    public function tour_packages_list()
    {

        $this->data['tourPackageData'] = $this->tourPackageModel->findAll();

        return view('dashboard/tour_packages_list', $this->data);
    }

}
