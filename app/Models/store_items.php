<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_items extends Model
{
    use HasFactory;

    protected $primaryKey = 'item_id';
    protected $table = "store_items";
    public $timestamps=false;
}
