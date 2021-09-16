<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'email'=>'required|email',
        'postcode'=>'integer',
        'address'=>'required',
        'building_name'=>'nullable',
        'opition'=>'required'
    );
    public function getData()
    {
        return $this->id . ':' .$this->name.':'. $this->gender.':'.$this->email.':'.$this->postcode.':'.$this->address.':'.$this->building_name.':'.$this->option;
    }
}
