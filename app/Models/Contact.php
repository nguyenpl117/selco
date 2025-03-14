<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property  string $id
 * @property  string cellPhone
 * @property  string phone
 * @property  string email
 * @property  string website
 * @property  string companyName
 * @property  string address
 */
class Contact extends Model
{
    protected $fillable = [
        "id",
        "cellPhone",
        "phone",
        "email",
        "website",
        "companyName",
        'address'
    ];
}