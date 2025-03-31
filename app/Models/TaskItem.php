<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'task_id',
        'is_marked',
    ];

    const IS_MARKED = 1;
    const IS_NOT_MARKED = 2;

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
