<?php
namespace App\Backend\Model;

use PDO;

class Reclamation extends BaseModel
{
    protected string $table = 'reclamation';
    protected string|array $primaryKey = 'id_reclamation'; // Clé primaire de type string

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }
    // Hérite des méthodes CRUD de BaseModel. Pas de méthodes spécifiques à ajouter ici.
}