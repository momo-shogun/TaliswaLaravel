<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a team member shown on the About Us page.
 *
 * Fields:
 * - name: string, team member's name.
 * - role: string, short role/title.
 * - description: text, longer bio/description.
 * - image_path: string, relative path to the stored image on the public disk.
 * - sort_order: integer, lower values are shown first.
 */
class TeamMember extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'role',
        'description',
        'image_path',
        'sort_order',
    ];
}

