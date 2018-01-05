<?php 
    /*
     * Databasea Class
     * Connect to database
     * Create prepared statements
     * Bind Values
     * Return rows and results
    */
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct() {
            // Set DSN
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->dbh = new mysqli(
                $this->host,
                $this->user,
                $this->pass,
                $this->dbname
            );
            if($this->dbh->connect_error) {
                die("Connection failed: {$this->dbh->connect_error}" );
                // TODO: Comeback later to check db return json with response
                // TODO: Hint - use try/catch
                // return json_encode($this->dbh->connect_error);
            }
        }

        // Prepare statement with query
        public function query($sql) {
            $this->stmt = $this->dbh->prepare($sql);
        }

        // Bind values
        public function bind($type, $params=[]) {
            $args = $params;
            array_unshift($args, $type);
            call_user_func_array([$this->stmt, 'bind_param'],refValues($args));
        }

        public function execute() {
            return $this->stmt->execute();
        }

        // Get result set as an array of objects
        public function resultSet() {
            $this->stmt->execute();
            $this->stmt = $this->stmt->get_result();
            $results = [];
            while($obj = $this->stmt->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        // Get a single result object
        public function single() {
            $this->stmt->execute();
            $this->stmt = $this->stmt->get_result();
            $results = [];
            while($obj = $this->stmt->fetch_object()) {
                $results[] = $obj;
                break;
            }
            return $results;
        }
    }
