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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('pc_type');
            $table->string('pc_name')->nullable();
            $table->string('pc_ip')->nullable();
            $table->string('userName')->nullable();
            $table->string('ownerName');
            $table->string('department');
            $table->string('processor')->nullable();
            $table->string('motherboard')->nullable();
            $table->string('storageType1')->nullable();
            $table->string('storage1')->nullable();
            $table->string('storageType2')->nullable();
            $table->string('storage2')->nullable();
            $table->string('ram')->nullable();
            $table->string('ramSpeed')->nullable();
            $table->string('videocard')->nullable();
            $table->string('psu')->nullable();
            $table->string('peripherals')->nullable();
            $table->string('monitor_brand')->nullable();
            $table->string('monitor_size')->nullable();
            $table->string('os_version')->nullable();
            $table->string('os_license')->nullable();
            $table->string('office_version')->nullable();
            $table->string('office_license')->nullable();
            $table->string('antivirus')->nullable();
            $table->string('antivirus_license')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
