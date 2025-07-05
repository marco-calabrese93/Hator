<?php

class User {
//NON USIAMO LA VAR GLOBALE POST, CREIAMO LA NOSTRA
    public function login($POST) {
        // Login logic here
        $DB = new Database();

        $_SESSION['error'] = "";
        if (isset($POST['email']) && isset($POST['password'])) {
            $arr = ['email' => $POST['email']];
            $arr['password'] = $POST['password'];
        
            $query = "SELECT * FROM users WHERE email = :email && password = :password limit 1";
        
            $data = $DB->read($query, $arr);
            if (is_array($data)) {
                // Login successful
                $_SESSION['user_id'] = $data[0]->ID;
                $_SESSION['user_first_name'] = $data[0]->first_name;
                $_SESSION['user_last_name'] = $data[0]->last_name;
                $_SESSION['user_url'] = $data[0]->user_url;
                $_SESSION['titolo'] = $data[0]->titolo;
                header("Location: " . ROOT . "home");
                die;

            }else {
                // Login failed
                $_SESSION['error'] = "Invalid email or password";
            }
        }else {
            $_SESSION['error'] = "Please enter a valid email and password";
        }
    }

    public function register($POST) {

        // Registration logic here
        $DB = new Database();

        $_SESSION['error'] = "";

        $user_url = generate_user_url(60);

        if (isset($POST['email']) && isset($POST['password']) 
            && isset($POST['user_first_name']) && isset($POST['user_last_name'])
            && isset($POST['user_title'])) {
            $arr = [
                'email' => $POST['email'],
                'password' => $POST['password'],
                'first_name' => $POST['user_first_name'],
                'last_name' => $POST['user_last_name'],
                'titolo' => isset($POST['user_title']) ? $POST['user_title'] : null,
                'user_url' => $user_url
            ];

            $query = "INSERT INTO users (email, password, first_name, last_name, titolo, user_url) 
                      VALUES (:email, :password, :first_name, :last_name, :titolo, :user_url)";

            $data = $DB->write($query, $arr);
            //se si è registrato, ridirotta al login
            if ($data) {
                header("Location: " . ROOT . "login");
                die;
            }

        } else {
            $_SESSION['error'] = "Please enter all information needed to register";
        }
    }

    public function check_logged_in($POST) {
        $DB = new Database();

        // Check login logic here
        if (isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];

            $query = "SELECT * FROM users WHERE url_address = :user_url limit 1";

            $data = $DB->read($query, $arr);
            if (is_array($data)) {
                // Login successful
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_first_name'] = $data[0]->user_first_name;
                $_SESSION['user_last_name'] = $data[0]->user_last_name;
                $_SESSION['user_url'] = $data[0]->user_url;

                return true;

            }
        }
       return false;
    }

}