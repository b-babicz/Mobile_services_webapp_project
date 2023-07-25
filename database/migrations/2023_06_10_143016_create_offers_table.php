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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('monthly_cost', 6, 2);
            $table->decimal('additional_cost', 6, 2);
            $table->integer('internet_package_quantity');
            $table->integer('sms_quantity');
            $table->integer('mms_quantity');
            $table->integer('calls_quantity');
            $table->integer('internet_speed');
            $table->tinyInteger('roaming_available');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
