<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $adminUsers = User::whereRootAdmin(true)->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->syncRoles(Role::getRootAdmin());
        }

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('root_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('root_admin')->unsigned()->default(0);
        });
    }
};
