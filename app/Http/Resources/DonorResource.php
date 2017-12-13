<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DonorResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'First Name'=>$this->first_name,
            'Last Name'=>$this->last_name,
            'Phone Number'=>$this->phone_number,
            'Age'=>$this->age,
            'Email'=>$this->email,
            'BloodGroup' => $this->blood_group_id,
            'BloodGroup' => $this->blood_group

        ];
    }
}
