<?php

use App\Models\BarberShopAppointmentStatus;
use App\Models\BarberShopService;
use App\Models\User;
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
        Schema::create('barber_shop_appointments', function (Blueprint $table) {            
            $table->id();
            $table->foreignIdFor(User::class, 'professional_id')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'client_id')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(BarberShopService::class, 'service_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(BarberShopAppointmentStatus::class, 'status_id')->constrained('barber_shop_appointment_status')->cascadeOnDelete();
            $table->timestamp('scheduled_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barber_shop_appointments');
    }
};
