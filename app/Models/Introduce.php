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
class Introduce extends Model
{
    protected $fillable = [
        "id",
        "introduceUrl",
        "historyUrl",
        "organizationalUrl",
        "achievementsUrl",
        "introduceImageFile",
        "historyImage",
        "organizationalImage",
        "achievementsImage",
        "introduceContent",
        "historyContent",
        "organizationalContent",
        "achievementsContent",
        "languageId",
        "introduceInfo",
        "strategy",
        "project",
        "introduceImage",
        "strategyImage",
        "projectImage",
    ];

    public function introduceImageUrl(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->introduceImage);
        });
    }

    public function strategyImageUrl(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->strategyImage);
        });
    }

    public function projectImageUrl(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->projectImage);
        });
    }
}