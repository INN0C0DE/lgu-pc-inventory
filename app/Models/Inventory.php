<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'pc_type',
        'pc_name',
        'pc_ip',
        'userName',
        'ownerName',
        'department',
        'processor',
        'motherboard',
        'storageType1',
        'storage1',
        'storageType2',
        'storage2',
        'ram',
        'ramSpeed',
        'videocard',
        'psu',
        'peripherals',
        'monitor_brand',
        'monitor_size',
        'os_version',
        'os_license',
        'office_version',
        'office_license',
        'antivirus',
        'antivirus_license',
    ];
}
