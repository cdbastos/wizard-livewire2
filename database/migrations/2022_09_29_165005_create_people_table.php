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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\IdentificationType::class)->constrained();
            $table->foreignIdFor(\App\Models\AffiliationScheme::class)->nullable()->constrained();
            $table->foreignIdFor(\App\Models\Town::class)->nullable()->constrained();
            $table->string('identification',150);
            $table->string('first_name',150);
            $table->string('second_name',150)->nullable();
            $table->string('first_surname',150)->nullable();
            $table->string('second_surname',150)->nullable();
            $table->string('address',245)->nullable();
            $table->string('sex',10)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('email',245)->nullable();
            $table->string('phone_1',100)->nullable();
            $table->string('phone_2',100)->nullable();
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
        Schema::dropIfExists('people');
    }
};
