<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property  string $id
 * @property string revenue
 * @property string profit
 * @property string assets
 * @property string equity
 * @property string banner
 * @property string value1
 * @property string value2
 * @property string value3
 * @property string value4
 * @property string value5
 * @property string value6
 * @property string value1Image
 * @property string value2Image
 * @property string value3Image
 * @property string value4Image
 * @property string value5Image
 * @property string value6Image
 * @property string name
 * @property string title
 * @property string content
 * @property string operationId
 * @property string languageId
 */
class Operation extends Model
{
    protected $fillable = [
        "id",
        "revenue",
        "profit",
        "assets",
        "equity",
        "banner",
        "value1",
        "value2",
        "value3",
        "value4",
        "value5",
        "value6",
        "value1Image",
        "value2Image",
        "value3Image",
        "value4Image",
        "value5Image",
        "value6Image",
        "name",
        "title",
        "content",
        "operationId",
        "languageId",
    ];

    public function url(): Attribute
    {
        return Attribute::get(function () {
            return autoRoute('operations', [Str::slug($this->title), $this->id]);
        });
    }

    public function bannerLink(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->banner);
        });
    }

    public function imageLink(): Attribute
    {
        return Attribute::get(function () {
            return assetImage($this->value1);
        });
    }

    public function images(): Attribute
    {
        return Attribute::get(function () {
            return array_filter([
//                assetImage($this->value1),
                assetImage($this->value2),
                assetImage($this->value3),
                assetImage($this->value4),
                assetImage($this->value5),
                assetImage($this->value6),
            ]);
        });
    }
}