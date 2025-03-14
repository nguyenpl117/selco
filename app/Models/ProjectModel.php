<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property  string $id
 * @property  string $investment
 * @property  string $value
 * @property  string $startTime
 * @property  string $endTime
 * @property  string $value1
 * @property  string $value2
 * @property  string $value3
 * @property  string $value4
 * @property  string $value5
 * @property  string $value6
 * @property  string $title
 * @property  string $content
 * @property  string $investor
 * @property  string $location
 * @property  string $languageId
 */
class ProjectModel extends Model
{

    protected $fillable = [
        "id",
        "investment",
        "value",
        "startTime",
        "endTime",
        "value1",
        "value2",
        "value3",
        "value4",
        "value5",
        "value6",
        "title",
        "content",
        "description",
        "investor",
        "location",
        "languageId",
        "installedCapacity",
        "numberOfUnits",
    ];

    protected $casts = [
        "startTime" => 'datetime',
        "endTime" => 'datetime',
    ];

    public function url(): Attribute
    {
        return Attribute::get(function () {
            return autoRoute('du-an', [Str::slug($this->title), $this->id]);
        });
    }

    public function image(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->value1);
        });
    }

    public function images(): Attribute
    {
        return Attribute::get(function () {
            return array_filter([
                assetImage($this->value1),
                assetImage($this->value2),
                assetImage($this->value3),
                assetImage($this->value4),
                assetImage($this->value5),
                assetImage($this->value6),
            ]);
        });
    }
}