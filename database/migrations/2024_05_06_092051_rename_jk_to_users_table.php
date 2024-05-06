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
        Schema::table('users', function (Blueprint $table) {
            //rename nama kolom di db
            $table->renameColumn('jk','jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //mengembalikan nama kolom
            $table->renameColumn('jenis_kelamin', 'jk'); // Menambahkan perintah untuk rollback
        });
    }
};
