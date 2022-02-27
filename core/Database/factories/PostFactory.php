<?php

class PostFactory
{
    private $db;
    private $table = 'posts';

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function up()
    {
        $queryUp = "CREATE TABLE $this->table (
            id INT(11) NOT NULL AUTO_INCREMENT,
	        user_id INT(11) NOT NULL DEFAULT '1',
            title VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
            slug VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
            body TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            PRIMARY KEY (id) USING BTREE,
            UNIQUE INDEX slug (slug) USING BTREE,
            INDEX user_id (user_id) USING BTREE
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

        $query = "INSERT INTO $this->table (user_id, title, slug, body) VALUES ";
        $partQuery = '';

        for ($i = 0; $i < $n; $i++) {
            $user_id = mt_rand(1, $reference);
            $title = escape_string($faker->realText(mt_rand(30, 50)));
            $slug = slugify($title);
            $body = escape_string($faker->realText(mt_rand(255, 510)));

            $partQuery = "('$user_id', '$title', '$slug', '$body')";
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
