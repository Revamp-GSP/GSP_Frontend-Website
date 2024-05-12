<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;
    protected $fillable = ['labels', 'status'];
    protected $projects = 'data';

    public static function countStatus()
    {
        return project::table('data')
            ->select('status', project::raw('COUNT(*) as total'))
            ->whereIn('status', ['Postpone', 'Follow Up', 'Impelementasi', 'Pembayaran', 'Selesai'])
            ->groupBy('status')
            ->get();
    }
}