<?php

namespace App\Models\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    // 
    	protected $table = 'bma_locations';
		protected $primaryKey = 'id';
		protected $fillable = ['location_name'];
}
