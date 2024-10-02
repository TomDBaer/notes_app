<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    use HasFactory;
    protected $table = "job_listings"; // Ändert den Tabellennamen von Jobs in 'job_listings'

    protected $fillable = ['employer_id', 'title', 'salary']; // Alles was an die DB gesendet werden darf

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }

}