<?php

use App\Models\Subuser;
use App\Models\Permission;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->unsignedInteger('subuser_id')->after('id');
        });

        DB::transaction(function () {
            foreach (Subuser::all() as &$subuser) {
                Permission::where('user_id', $subuser->user_id)->where('server_id', $subuser->server_id)->update([
                    'subuser_id' => $subuser->id,
                ]);
            }
        });

        Schema::table('permissions', function (Blueprint $table) {

            $table->dropForeign(['server_id']);
            $table->dropForeign(['user_id']);

            if (Schema::getConnection()->getDriverName() !== 'sqlite') {
                $table->dropIndex('permissions_server_id_foreign');
                $table->dropIndex('permissions_user_id_foreign');
            } else {
                $table->dropForeign(['server_id']);
                $table->dropForeign(['user_id']);
            }

            $table->dropColumn('server_id');
            $table->dropColumn('user_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->foreign('subuser_id')->references('id')->on('subusers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->unsignedInteger('server_id')->after('subuser_id');
            $table->unsignedInteger('user_id')->after('server_id');
            $table->timestamps();
        });

        DB::transaction(function () {
            foreach (Subuser::all() as &$subuser) {
                Permission::where('subuser_id', $subuser->id)->update([
                    'user_id' => $subuser->user_id,
                    'server_id' => $subuser->server_id,
                ]);
            }
        });

        Schema::table('permissions', function (Blueprint $table) {
            if (Schema::getConnection()->getDriverName() !== 'sqlite') {
                $table->dropForeign('permissions_subuser_id_foreign');
                $table->dropIndex('permissions_subuser_id_foreign');
            }
            $table->dropColumn('subuser_id');

            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
