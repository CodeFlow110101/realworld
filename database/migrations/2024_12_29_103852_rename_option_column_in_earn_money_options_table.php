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
        Schema::table('earn_money_options', function (Blueprint $table) {
            $table->renameColumn('option', 'text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('earn_money_options', function (Blueprint $table) {
            $table->renameColumn('text', 'option');
        });
    }
};
