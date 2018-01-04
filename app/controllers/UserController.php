<?php 

    class UserController extends Controller {



        public function __construct() {
            parent::__construct();
        }

        public function index() {

        }

        public function register() {
            // Check for POST
            
            if($this->request_method == 'post') {
                
                // Validate the form and grab data with errros
                $response = $this->validate($_POST);

                if($response->validated) {
                    die('SUCESS');
                } else {
                    $this->view('users/register', $response->data);
                }
            } else {
                // Init Data
                $data = [
                    'name'=>'',
                    'email'=>'',
                    'password'=>'',
                    'confirm_password'=>'',
                    'name_err'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                    'confirm_password_err'=>'',
                ];

                // Load view
                $this->view('users/register', $data);
            }
        }

        public function login() {
            // Check for POST
            if($this->request_method == '') {
                // Process form
            } else {
                // Init Data
                $data = [
                    'email'=>'',
                    'password'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                ];

                // Load view
                $this->view('users/login', $data);
            }
        }
    }