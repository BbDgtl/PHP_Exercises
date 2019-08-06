<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Default name of the table : articles
class Article extends Model
{
    // If different from the default name
    // protected $table = 'art';

    // By default, Laravel thinks that the primary key is a field named 'ID'.
    // If you need to change:
    // protected $primaryKey = 'article_id';
}
