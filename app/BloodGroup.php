<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Donor;
class BloodGroup extends Model
{

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }
}
