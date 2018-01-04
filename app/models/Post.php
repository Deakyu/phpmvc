<?php 

    class Post {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getPosts() {
            $this->db->query("SELECT * FROM posts");
            $results = $this->db->resultSet();

            return $results;
        }

        // Example for binding
        public function getPostById($id) {
            $this->db->query("SELECT * FROM posts WHERE id=?");
            $this->db->bind("i", [1]);
            $result = $this->db->single();

            return $result;
        }
    }