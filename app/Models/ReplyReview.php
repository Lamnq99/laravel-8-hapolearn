<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReplyReview extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "reply_comment";

    protected $fillable = [
        'id',
        'feedback_id',
        'user_id',
        'content',
    ];

    public function feedbacks()
    {
        return $this->belongsTo(Feedback::class, 'feedback_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeInforReply($query)
    {
        $query->leftJoin('users', 'reply_comment.user_id', 'users.id')
            ->leftJoin('feedbacks', 'reply_comment.feedback_id', 'feedbacks.id')
            ->select('reply_comment.*', 'users.name', 'users.img_path');
    }
}
