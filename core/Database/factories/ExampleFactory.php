<?php 

class ExampleFactory 
{
    private $db;
    private $table = 'example';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table 
        
        ";

        $this->db->alter($queryUp)->alter_execute();
        

        return $this;
    }

    private function down()
    {
        $querydrop = "DROP TABLE IF EXISTS $this->table";

        $this->db->alter($querydrop)->alter_execute();
        
        return $this;
    }


    private function insert($n, $reference)
    {
        $faker = Faker\Factory::create('id_ID');

        $query = "INSERT INTO $this->table () VALUES ";
        $partQuery = '';

        
        for ($i = 0; $i < $n; $i++) {



            $partQuery = "()";
            if ($i != $n-1) {
                $partQuery .= ', ';
            }
            $query .= $partQuery;
        }
        
        $this->db->query($query)->execute();
        
        return $this;
    }

    public function create($n=5, $reference = 5)
    {
        $this->down()->up()->insert($n, $reference);
    }
}

