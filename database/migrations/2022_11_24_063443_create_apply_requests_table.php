<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_requests', function (Blueprint $table) {
            $table->id();
            $table->boolean('confirmation');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('school_id')->nullable()->constrained('schools')->onDelete('cascade');
            $table->string('full_name');
            $table->bigInteger('id_code');
            $table->string('bdate');
            $table->integer('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_requests');
    }
};
