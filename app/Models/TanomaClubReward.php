<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Singleton content for the Tanoma Club rewards/description section on the Tanoma Club page.
 *
 * Fields:
 * - title: section heading
 * - description: body copy (supports multiple paragraphs)
 */
class TanomaClubReward extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Default content when no record exists.
     */
    public static function defaultTitle(): string
    {
        return 'Tanoma Club';
    }

    /**
     * Default description when no record exists.
     */
    public static function defaultDescription(): string
    {
        return 'Deals, Subscriptions, Rewards and much more! Join the Tanoma Club to get exclusive access to member-only '
            . 'offers, early updates on new releases, and rewards that make every sip more rewarding. Be the first to '
            . 'know about events, tastings, and special drops from Talisva.';
    }

    /**
     * Get the single rewards record, creating it with defaults if missing.
     */
    public static function getSingleton(): self
    {
        return self::firstOrCreate(
            [],
            [
                'title' => self::defaultTitle(),
                'description' => self::defaultDescription(),
            ]
        );
    }
}
