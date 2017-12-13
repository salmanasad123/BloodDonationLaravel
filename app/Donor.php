<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Donor extends Model
{
    protected $fillable = [
      'first_name','last_name','phone_number','age','email'
    ];
    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class);
    }
/*
    public function getDonorByBloodGroup()
    {
        return Donor::all()->where(blood_group,'A+');
    }*/
}
