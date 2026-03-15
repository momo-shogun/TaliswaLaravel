<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single image in the home page gallery carousel.
 *
 * Fields:
 * - image_path: string, relative path to the stored image on the public disk.
 * - sort_order: integer, lower values are shown first.
 */
class GalleryItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'image_path',
        'image_orientation',
        'sort_order',
    ];

    /**
     * Valid image orientation values (degrees).
     *
     * @var array<int, int>
     */
    public const IMAGE_ORIENTATIONS = [0, 90, 180, 270];
}
