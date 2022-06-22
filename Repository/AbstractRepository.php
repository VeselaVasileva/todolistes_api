<?php 
namespace repository;
require (dirname(__FILE__).'\DBConnection.php');

use model\AbstractModel;
use repository\DBConnection;



abstract class AbstractRepository 
{
    
    protected string $table;
    protected $connection;

    function __construct() {
        $this->connection = DBConnection::getDBConnection();
    }

    public function add () {

    }
    
    public function find(array $criterias, bool $all = false) : array|bool
    {
        $queryString = "SELECT * FROM $this->table WHERE 1";

        foreach($criterias as $key=>$value) {
            $queryString .= " AND $key = ?";
        }
        $query = $this->connection->prepare($queryString);
        $query->execute(array_values($criterias));
        
        return $all ? $query->fetchAll(\PDO::FETCH_ASSOC) : $query->fetch(\PDO::FETCH_ASSOC); 
    }

    public function delete() : bool
    {

    }

    public function update (string $id) : bool
    {
        
    }
}

?>