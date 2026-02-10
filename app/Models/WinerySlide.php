<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single slide in the Winery Experience carousel.
 *
 * Fields:
 * - title: string, headline for the slide.
 * - description: text, optional detailed copy for the slide.
 * - image_path: string, relative path to the stored image on the public disk.
 * - sort_order: integer, lower values are shown first.
 */
class WinerySlide extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'sort_order',
    ];
}

