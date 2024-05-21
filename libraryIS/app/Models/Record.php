<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Record extends Model
{
    use HasFactory;

        protected $fillable = [
        'member_id',
        'book_id',
        'borrow_date',
        'return_date',
        'user_id',
    ];

    public function member():belongsTo{
        return $this->belongsTo(Member::class);
    }

    public function book():belongsTo{
        return $this->belongsTo(Book::class);
    }

    public function inCharge():belongsTo{
        return $this->belongsTo(User::class);
    }

}
