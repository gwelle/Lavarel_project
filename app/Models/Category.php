<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Category
 *
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */

class Category extends Model
{

    // On utilise le trait HasFactory pour générer des usines de modèles
    use hasFactory ;

    /** 
     * The name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    // on détermine ici les valeurs par défaut des attributs de la table concernée
    protected $attributes = [
        'name' => '',
        'description' => '',
    ];

    // On détermine les attributs de la table concernée
    protected $fillable = [
        'name',
        'description',
    ];
}
