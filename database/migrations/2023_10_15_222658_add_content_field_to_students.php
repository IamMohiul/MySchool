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
        Schema::table('students', function (Blueprint $table) {
            $table->string('class_id')->nullable()->after('id');
            $table->string('section')->nullable()->after('class_id');
            $table->string('boy')->nullable()->after('section');
            $table->string('girl')->nullable()->after('boy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['class_id','section','boy','girl']);
        });
    }
};
