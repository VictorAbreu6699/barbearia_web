<?php

use App\Models\BarberShop;
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
        Schema::create('barber_shop_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BarberShop::class, 'barber_shop_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration_minutes');
            $table->decimal('price', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barber_shop_services', function (Blueprint $table) {        
            $table->dropForeign(['barber_shop_id']);
            $table->dropColumn('barber_shop_id');
        });

        Schema::dropIfExists('barber_shop_services');
    }
};