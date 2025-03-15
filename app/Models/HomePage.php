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
class HomePage extends Model
{
    protected $fillable = [
        "id",
        "title",
        "content",

        "desc",
        "youtubeLink",

        "banner1",
        "banner2",
        "banner3",
        "banner4",
        "banner5",
        "contentBanner1",
        "contentBanner2",
        "contentBanner3",
        "contentBanner4",
        "contentBanner5",
        "banner1Mobile",
        "banner2Mobile",
        "banner3Mobile",
        "banner4Mobile",
        "banner5Mobile",
    ];

    public function sliders(): Attribute
    {
        return Attribute::get(function () {
            $images = array_filter([
                assetImage($this->banner1),
                assetImage($this->banner2),
                assetImage($this->banner3),
                assetImage($this->banner4),
                assetImage($this->banner5),
            ]);
            $sliders = [];

            foreach ($images as $key => $image) {
                if (!$image) {
                    continue;
                }
                $desc = 'contentBanner' . ($key + 1);
                $imageM = 'banner' . ($key + 1) . 'Mobile';
                $sliders[] = [
                    'image' => $image,
                    'desc' => $this->{$desc},
                    'imageMobile' => $this->{$imageM},
                ];
            }
            return $sliders;
        });
    }
}