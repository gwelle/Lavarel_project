<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    // on détermine ici les valeurs par défaut des attributs de la table concernée
    protected $attributes = [
        'title' => '',
        'content' => ''
    ];

    // On détermine les attributs de la table concernée
    protected $fillable = [
        'title' => '',
        'content' => ''
    ];
}
