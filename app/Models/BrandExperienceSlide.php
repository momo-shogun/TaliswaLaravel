<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single slide in the Brand Experience carousel.
 *
 * Fields:
 * - title: string, headline for the slide.
 * - description: text, optional detailed copy for the slide (can contain multiple paragraphs).
 * - image_path: string, relative path to the stored image on the public disk.
 * - decoration_image_path: string|null, optional right-panel decoration image path.
 * - decoration_size: int|null, optional box size in px (60-300) for the decoration on frontend.
 * - sort_order: integer, lower values are shown first.
 */
class BrandExperienceSlide extends Model
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
        'decoration_image_path',
        'decoration_size',
        'sort_order',
    ];
}
