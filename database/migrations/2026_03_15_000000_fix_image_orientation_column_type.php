<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * TINYINT UNSIGNED (0-255) cannot store 270; use SMALLINT UNSIGNED.
     */
    public function up(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE gallery_items MODIFY image_orientation SMALLINT UNSIGNED NOT NULL DEFAULT 0');
            DB::statement('ALTER TABLE winery_slides MODIFY image_orientation SMALLINT UNSIGNED NOT NULL DEFAULT 0');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE gallery_items MODIFY image_orientation TINYINT UNSIGNED NOT NULL DEFAULT 0');
            DB::statement('ALTER TABLE winery_slides MODIFY image_orientation TINYINT UNSIGNED NOT NULL DEFAULT 0');
        }
    }
};
