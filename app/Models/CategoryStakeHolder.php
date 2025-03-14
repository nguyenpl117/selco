<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property  string $id
 * @property  string $categoryName
 * @property  string $categoryNameEN
 * @property  string $categoryCode
 */
class CategoryStakeHolder extends Model
{
    protected $fillable = [
        "id",
        "categoryName",
        "categoryNameEN",
        "categoryCode"
    ];

    public function url(): Attribute
    {
        return Attribute::get(function () {
            return autoRoute('docs.cat', [Str::slug($this->categoryCode)]);
        });
    }
}