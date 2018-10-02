<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralProgramsTable extends Migration
{
    const DEFAULT_LIFETIME = 7 * 24 * 60;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->string('uri', 250);
            $table->string('title', 250);
            $table->text('description');
            $table->integer('lifetime_minutes')->default(self::DEFAULT_LIFETIME);
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
        Schema::drop('referral_programs');
    }
}
