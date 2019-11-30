<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable=['site_title','address','site_email','site_contact'];
}
