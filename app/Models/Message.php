<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'recipient_id',
        'sent_at',
        'recieved_at',
        'delete_by_author_at',
        'delete_by_recipient_at',
    ];
    
    /**
     * Message Author
     *
     * @return BelongsTo
     */
    public function author() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Message Recipient
     *
     * @return BelongsTo
     */
    public function recipient() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
