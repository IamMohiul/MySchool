<?php

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
        Schema::table('managingcoms', function (Blueprint $table) {
            $table->string('mobile')->nullable()->after('position');
            $table->string('email')->nullable()->after('mobile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('managingcoms', function (Blueprint $table) {
            //
        });
    }
};
