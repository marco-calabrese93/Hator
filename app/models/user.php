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
        //debug shit
        echo "<pre>";
        print_r($POST);
        echo "</pre>";

        // Registration logic here
        $DB = new Database();

        $_SESSION['error'] = "";

        $user_url = $this->generate_user_url();

        if (isset($POST['email']) && isset($POST['password'])) {
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
            $_SESSION['error'] = "Please enter a valid email and password";
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

    //genera un url univoco per l'utente
    //se l'url è già presente nel db, ne genera un altro
    //il parametro $length è la lunghezza dell'url, di default è 12
    //il parametro $characters è la stringa di caratteri da usare per generare l'url
    //il parametro $charactersLength è la lunghezza della stringa di caratteri
    //il parametro $randomString è la stringa casuale generata
    //il parametro $user_url è l'url generato
    //il parametro $query è la query per verificare se l'url è già presente
    //il parametro $result è il risultato della query
    //il ciclo do-while continua a generare un url finché non trova uno che non è già presente nel database
    //una volta trovato un url univoco, lo restituisce

    private function generate_user_url($length = 12) {
        $DB = new Database();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        
        do {
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $user_url = strtolower($randomString);

            $query = "SELECT * FROM users WHERE user_url = :user_url LIMIT 1";
            $result = $DB->read($query, ['user_url' => $user_url]);

        } while (is_array($result) && count($result) > 0);

        return $user_url;
    }
}