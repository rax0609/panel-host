<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('service_options', function (Blueprint $table) {
            $table->text('executable')->after('docker_image')->nullable()->default(null);
            $table->text('startup')->after('executable')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_options', function (Blueprint $table) {
            $table->dropColumn('executable');
            $table->dropColumn('startup');
        });
    }
};
