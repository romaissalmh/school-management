<?php
    require_once(ROOT.'/config/config.php');
    /*
    * PDO Database Class
    * Connect to Database
    */
    class Database
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $charset = DB_CHARSET;
        private $dbname = DB_NAME;
        private $dbh;
        private $stmt;
        private $error;

        public function __construct()
        {
            $dsn='mysql:host=' . $this->host . ';charset=' . $this->charset . ';dbname=' . $this->dbname;
            //Create PDO Instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass);
            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        // Prepare statement query
        public function query($sql)
        {
            $this->stmt = $this->dbh->prepare($sql);
        }

        // Bind values
        public function bind($param, $value, $type = null)
        {
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
       }

       // Execute the prepared statement
       public function execute()
       {
           return $this->stmt->execute();
       }

       // Get result set as array of objects
       public function resultSet(){
           $this->execute();
           return $this->stmt->fetchAll();
       }

       // Get single record as object
       public function single(){
           $this->execute();
           return $this->stmt->fetchObject();
       }

       public function rowCount(){
           return $this->stmt->rowCount();
       }

    }