<?php
namespace repository;

include_once 'Model\User.php';
include_once 'Repository\AbstractRepository.php';
use model\User;

class UserRepository extends AbstractRepository 
{
    protected string $table;

    function __construct(){
        parent::__construct();
        $this->table = User::$table;
    }

    public function findUser($username, $password)
    {
        $connectionDB = $this->connection;
        $table = User::$table;
        $query = $connectionDB->prepare("SELECT * FROM $table WHERE email = ? AND password = ?");
        $query->execute([$username, $password]);
        
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
    
}?>