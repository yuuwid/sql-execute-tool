<?php

class PersonFactory
{
    private $db;
    private $table = 'persons';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	        company_id INT(11) NULL DEFAULT NULL,
            profession VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
            address VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
            email VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
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
        $faker_US = Faker\Factory::create('en_US');

        $query = "INSERT INTO $this->table (name, company_id, profession, address, email) VALUES ";
        $partQuery = '';

        for ($i = 0; $i < $n; $i++) {
            $name = $faker->name();
            $profession = $faker_US->jobTitle();
            $company_id = mt_rand(1, $reference);
            $address = $faker->address();
            $email = $faker->email();

            $partQuery = "('$name', '$company_id', '$profession', '$address', '$email')";
            if ($i != $n - 1) {
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
