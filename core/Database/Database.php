<?php

class Database
{
    private static $_instance;

    private $_host = DB_HOST,
        $_port = DB_PORT,
        $_username = DB_USER,
        $_password = DB_PASS,
        $_dbname = DB_NAME;

    private $_pdo,
        $_stmt,
        $_results,
        $_error;

    public function __construct()
    {
        $dbh = 'mysql:host=' . $this->_host . ';port=' . $this->_port . ';dbname=' . $this->_dbname;

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ];

        try {
            $this->_pdo = new PDO($dbh, $this->_username, $this->_password, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    public function query($query, $params = [])
    {
        $this->_error = [false, null];
        $this->_results = [];

        $this->_stmt = $this->_pdo->prepare($query);

        foreach ($params as $param => $value) {
            $this->bind($param, $value);
        }

        return $this;
    }

    public function execute($fetchType=FETCH_SINGLE)
    {
        try {
            if (!$this->_stmt->execute()) {
                $this->_error = [true, $this->_stmt->errorInfo()];
            } else {
                if ($fetchType == FETCH_SINGLE) {
                    $this->_results = $this->_stmt->fetch(PDO::FETCH_ASSOC);
                } else if ($fetchType == FETCH_MULTI) {
                    $this->_results = $this->_stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            }
            return $this;
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
            return null;
        }
    }

    public function bind($param, $value, $option = null)
    {

        if (is_null($option)) {
            switch ($value) {
                case is_int($value):
                    $option = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $option = PDO::PARAM_BOOL;
                    break;
                case is_string($value):
                    $option = PDO::PARAM_STR;
                    break;
                default:
                    $option = PDO::PARAM_STR;
            }
        }

        $this->_stmt->bindValue($param, $value, $option);
    }


    public function rowCount()
    {
        return $this->rowCount();
    }

    public function results()
    {
        return $this->_results;
    }

    public function error()
    {
        return $this->_error;
    }

    public function list_tables()
    {
        $sql = 'SHOW TABLES';
        $query = $this->_pdo->query($sql);
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }

    
    public function alter($sql)
    {
        $query = $this->_pdo->query($sql);
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }
}
