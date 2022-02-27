<?php

class UserFactory
{
    private $db;
    private $table = 'users';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
            username VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
            PRIMARY KEY (id) USING BTREE,
            UNIQUE INDEX username (username) USING BTREE
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

        $query = "INSERT INTO $this->table (name, username) VALUES ";
        $partQuery = '';

        for ($i = 0; $i < $n; $i++) {
            $name = $faker->name();
            $username = $faker->unique()->userName();
            
            $partQuery = "('$name', '$username')";
            if ($i != $n-1) {
                $partQuery .= ', ';
            }
            $query .= $partQuery;
        }

        $this->db->query($query)->execute();

        return $this;
    }

    public function create($n = 5, $reference = 5)
    {
        $this->down()->up()->insert($n, $reference);
    }
}
