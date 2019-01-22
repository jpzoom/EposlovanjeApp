<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['adresa','grad','zemlja','zupanija','zip','phone'];
}
