<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Patient extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'dob'
    ];

    public function setDateAttribute( $value ) {
        $this->attributes['dob'] = (new Carbon($value))->format('d/m/y');
      }

}
