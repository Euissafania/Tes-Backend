<?php

namespace App\Models;

use App\Models\Borrowing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
