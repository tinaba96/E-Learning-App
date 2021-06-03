<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class Result extends Model
{
    protected $fillable = [
        'lesson_id', 'quiz_id', 'ur_answer', 'status',
    ];

    /**
     * Get the user that owns the Result
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
