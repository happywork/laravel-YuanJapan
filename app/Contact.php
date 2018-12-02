<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public $timestamps = true;    
    protected $table = 'contacts';

    protected $fillable = ['contact_name', 'contact_email', 'contact_comments']; 
    protected $guarded = ['created_at', 'updated_at'];
}
