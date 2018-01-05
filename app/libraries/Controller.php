<?php 
    /*
     * Base Controller
     * Loads the model and views
     */
    class Controller {

        protected $request_method;

        public function __construct() {
            $this->request_method = strtolower($_SERVER['REQUEST_METHOD']);
        }

        // Load model
        public function model($model) {
            // Require model file
            require_once "../app/models/{$model}.php";

            // Instantiate model
            return new $model();
        }

        // Load view
        public function view($view, $data = []) {
            // Check for the view file
            if(file_exists("../app/views/{$view}.view.php")) {
                require_once "../app/views/{$view}.view.php";
                
            } else {
                // View does not exist
                die('View does not exist');
            }
        }

        // Validate POST request
        public function validate($request) {
            // Sanitize POST data
            $request = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [];
            $errs = [];

            // Init data && Validate empty input
            foreach($request as $key=>$value) {
                $data[$key] = trim($value);
                $errs["{$key}_err"] = empty($data[$key]) ? "{$key} field is required!" : '';
            }

            $validated = true;
            foreach($errs as $err) {
                if(!empty($err)) {
                    $validated = false;
                    break;
                }
            }

            $data = array_merge($data, $errs);

            $response = new stdClass;
            $response->data = $data;
            $response->validated = $validated;

            return $response;
        }
    }