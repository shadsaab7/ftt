<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class TourPackagesModel extends Model
{
    protected $table            = 'tour_packages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'location',
        'vender_id',
        'package_name',
        'nights',
        'price',
        'overview',
        
        'amenities_accept_credit_card',
        'amenities_car_parking',
        'amenities_coupons',
        'amenities_resturent',
        'amenities_resturent',
        'amenities_wireless_internet',
       
        'include_pick_and_drop',
        'include_meal_per_day',
        'include_dinner_music_event',
        'include_visit_best_place',
        'include_additional_services',
        'include_insurance',
        'include_food_drinks',
        'include_tickets',

        'payment_policy',
        'cancellation_policies',
        'terms_and_conditions',
        'about_destination',

        'day_wise_itinerary',
        'departure_dates',
        'image',
        'gallery_image',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
