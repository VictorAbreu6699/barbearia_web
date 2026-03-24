<?php

use App\Models\City;
use App\Models\BarberShop;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(BarberShop::class)
                  ->constrained()
                  ->cascadeOnDelete();

            $table->text('address');

            $table->foreignIdFor(City::class)
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('postal_code');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};