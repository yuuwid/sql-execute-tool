<?php 

class CompanyFactory 
{
    private $db;
    private $table = 'companies';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
            address VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            phone VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            PRIMARY KEY (id) USING BTREE
        )";

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

        $query = "INSERT INTO $this->table (name, address, phone) VALUES ";
        $partQuery = '';
        
        for ($i = 0; $i < $n; $i++) {
            $name = $faker->unique()->company();
            $address = $faker->address();
            $phone = $faker->phoneNumber();

            $partQuery = "('$name', '$address', '$phone')";
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

