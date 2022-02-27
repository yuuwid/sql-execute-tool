<?php 

class Dummy {
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function dump()
    {
        $posts = new PostFactory($this->db);
        $users = new UserFactory($this->db);
        $students = new StudentFactory($this->db);
        $persons = new PersonFactory($this->db);
        $companies = new CompanyFactory($this->db);

        $posts->create(5, 10);
        $users->create(10);
        $students->create(15);
        $persons->create(10);
        $companies->create(5, 10);
        
    }


}

