<?php

namespace App\Models\Client;

use CodeIgniter\Model;

class ClientAuthModel extends Model
{
    protected $table            = 'client_login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title',
        'full_name',
        'user_name',
        'email',
        'password',
        'type',
        'client_image',
        'date_of_birth',
        'mobile',
        'address',
        'pin',
        'state',
        'agency_name',
        'agency_phone',
        'pan_card',
        'agency_address',
        'agency_pin',
        'agency_state',
        'country',
        'nationality',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
