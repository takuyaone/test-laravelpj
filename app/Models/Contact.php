<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
    );

    public function getData()
    {
        return $this->id . ':' .$this->name.':'. $this->gender.':'.$this->email.':'.$this->postcode.':'.$this->address.':'.$this->building_name.':'.$this->opition;
    }

    public static function getDate($from,$until)
    {
        $date=Contact::whereBetween('created_at',[$from,$until])->get();

        return $date;
    }
}
