<?php


namespace App\Utils;


class FileUtils
{
    public const CATEGORY_PATH = 'category';
    public const BRAND_PATH = 'brand';
    public const BLOG_PATH = 'blog';
    public const BANNER_PATH = 'banner';
    public const PRODUCT_PATH = 'product';
    public const SUPPLY_PATH = 'supply';
    public const EVENT_PATH = 'event';

    public static function uploadImage($image, $path)
    {
        $imageName = now()->timestamp . rand(1, 100000000) . '.' . $image->extension();

        $image->move(public_path('/images/' . $path), $imageName);
        return 'images/' . $path . '/' . $imageName;
    }
}
