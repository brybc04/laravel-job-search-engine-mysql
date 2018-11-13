<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class jobPosting extends Model
{

    use Searchable;
    //Table name
    protected $table = 'job_postings';
    //Primary key
    public $primaryKey = 'id';
    //time stamps
    public $timestamps = true;

    public function searchableAs()
    {
        return 'posts_index';
    }


}

