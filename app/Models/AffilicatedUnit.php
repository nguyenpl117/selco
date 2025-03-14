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
 * @property  string note
 * @property  string createDate
 * @property  string companyName
 * @property  string address
 * @property  string languageId
 * @property  string categoryId
 * @property  string imageFile
 * @property  string imageUrl
 */
class AffilicatedUnit extends Model
{
    protected $fillable = [
        "id",
        "cellPhone",
        "phone",
        "email",
        "website",
        "note",
        "createDate",
        "companyName",
        "address",
        "languageId",
        "categoryId",
        "imageFile",
        "imageUrl",
    ];

//    public function url(): Attribute
//    {
//        return Attribute::get(function () {
//            return autoRoute('docs.cat', [Str::slug($this->categoryCode)]);
//        });
//    }
    public function imageLink(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->imageFile);
        });
    }
}