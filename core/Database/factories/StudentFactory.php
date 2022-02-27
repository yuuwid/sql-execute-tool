<?php

class StudentFactory
{
    private $db;
    private $table = 'students';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
            npm VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            gender VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            birth DATE NULL DEFAULT NULL,
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

        $query = "INSERT INTO $this->table (name, npm, gender, birth) VALUES ";
        $partQuery = '';

        for ($i = 0; $i < $n; $i++) {
            $genders = ['Male', 'Female'];
            $rand_gen = array_rand($genders);
            $gender = $genders[$rand_gen];
            $name = $faker->name(strtolower($gender));
            $npm = '0' . mt_rand(1, 9) . '.' . mt_rand(2018, 2022) . '.1.' . '0' . $faker->randomNumber(4, true);
            $birth = $faker->date('Y-m-d');

            $partQuery = "('$name', '$npm', '$gender', '$birth')";

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
