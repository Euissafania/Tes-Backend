<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('UUID()')); 
            $table->foreignUuid('book_id')->references('id')->on('books');
            $table->foreignUuid('member_id')->references('id')->on('members');
            $table->date('borrow_date');
            $table->date('return_date')->nullable();
            $table->enum('status',['borrowed','returned'])->default('borrowed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
