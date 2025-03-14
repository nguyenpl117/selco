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
class Recruitment extends Model
{

    protected $fillable = [
        "id",
        "title",
        "description",
        "position",
        "salary",
        "deadline",
        "languageId",
    ];

    protected $casts = [
        "deadline" => 'datetime',
    ];

    public function url(): Attribute
    {
        return Attribute::get(function () {
            return autoRoute('recruitments.show', [Str::slug($this->title), $this->id]);
        });
    }
}