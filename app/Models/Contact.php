<?php

namespace App\Models\miraihuman;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'zm_lienhes';
  
    public $timestamps = false;
    public function rules()
    {
        return [
            'hovaten'    => 'required',
            'email'   => 'required|email',
            'tieude'     => 'required',
            'sodienthoai'     => 'required',
            'noidung'     => 'required'
        ];
    }
}
