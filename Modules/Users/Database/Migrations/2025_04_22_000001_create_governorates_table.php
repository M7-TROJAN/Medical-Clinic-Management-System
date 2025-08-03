<?php

namespace Modules\Users\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('governorates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique(); // مثل EG-C للقاهرة
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('governorates');
    }
};
