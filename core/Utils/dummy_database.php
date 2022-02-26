<?php

function tablePosts($db)
{
    $querydrop = "DROP TABLE IF EXISTS posts";

    $db->alter($querydrop);

    $queryUp = "CREATE TABLE posts (
        id INT(11) NOT NULL AUTO_INCREMENT,
        title VARCHAR(200) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        slug VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        body TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
        author VARCHAR(255) NOT NULL DEFAULT '',
        PRIMARY KEY (id) USING BTREE
    )";
    $db->alter($queryUp);
}

function tableStudents($db)
{
    $querydrop = "DROP TABLE IF EXISTS students";

    $db->alter($querydrop);

    $queryUp = "CREATE TABLE students (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
        npm VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
        gender VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
        birth DATE NULL DEFAULT NULL,
        PRIMARY KEY (id) USING BTREE
    )";
    $db->alter($queryUp);
}

function tablePerson($db)
{
    $querydrop = "DROP TABLE IF EXISTS persons";

    $db->alter($querydrop);

    $queryUp = "CREATE TABLE persons (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
        profession VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
        address VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
        email VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
        PRIMARY KEY (id) USING BTREE
    )";
    $db->alter($queryUp);
}

function posts($db, $n=20)
{
    $faker = Faker\Factory::create('id_ID');

    $data = [];
    
    $query = "INSERT INTO posts(title, slug, body, author) VALUES ";
    $partQuery = '';

    for($i = 0; $i <= $n; $i++)
    {
        $title = $faker->sentence(mt_rand(5, 10));
        $slug = str_replace(' ', '-', strtolower($title));
        $body = $faker->paragraph(mt_rand(10, 20));
        $author = $faker->name();

        $data['title'] = $title;
        $data['slug'] = $slug;
        $data['body'] = $body;
        $data['author'] = $author;

        $partQuery = "('$title', '$slug', '$body', '$author')";
        if ($i != $n)
        {
            $partQuery .= ', ';
        }
        $query .= $partQuery;
    }

    $db->query($query)->execute();
}

function students($db, $n=20)
{
    $faker = Faker\Factory::create('id_ID');

    $data = [];
    
    $query = "INSERT INTO students(name, npm, gender, birth) VALUES ";
    $partQuery = '';

    for($i = 0; $i <= $n; $i++)
    {
        $gender = array_rand(['Male', 'Female']);
        $name = $faker->name(strtolower($gender));
        $npm = '0' . mt_rand(1, 9) . '.' . mt_rand(2018, 2022) . '.1.' . '0' . $faker->randomNumber(4, true);
        $birth = $faker->date('Y-m-d');

        $data['name'] = $name;
        $data['npm'] = $npm;
        $data['gender'] = $gender;
        $data['birth'] = $birth;

        $partQuery = "('$name', '$npm', '$gender', '$birth')";
        if ($i != $n)
        {
            $partQuery .= ', ';
        }
        $query .= $partQuery;
    }

    $db->query($query)->execute();
}

function persons($db, $n=20)
{
    $faker = Faker\Factory::create('id_ID');

    $data = [];
    
    $query = "INSERT INTO persons(name, profession, address, email) VALUES ";
    $partQuery = '';

    for($i = 0; $i <= $n; $i++)
    {
        $name = $faker->name();
        $profession = $faker->jobTitle();
        $address = $faker->address();
        $email = $faker->email();

        $data['name'] = $name;
        $data['profession'] = $profession;
        $data['address'] = $address;
        $data['email'] = $email;

        $partQuery = "('$name', '$profession', '$address', '$email')";
        if ($i != $n)
        {
            $partQuery .= ', ';
        }
        $query .= $partQuery;
    }

    $db->query($query)->execute();

}


function dummy()
{
    $db = new Database();
    tablePosts($db);
    tableStudents($db);
    tablePerson($db);


    posts($db, 10);
    students($db, 20);
    persons($db, 10);

}
