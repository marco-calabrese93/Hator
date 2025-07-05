<?php
function show($stuff) {
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
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

    function generate_user_url($length) {
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


    //funzione per generare un messaggio di errore nel login e nella registrazione

    function check_message(){
        
        if(!empty($_SESSION['error']) && isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger' role='alert' style='text-align: center'>";
            echo $_SESSION['error'];
            echo "</div>";
            unset($_SESSION['error']);
        }
    }

    //funzione per validare le due password inserite in fase di registrazione
function validate_password_strength($password) {
    return preg_match('/[A-Z]/', $password) && preg_match('/[\W]/', $password);
}

function validate_password_match($p1, $p2) {
    return $p1 === $p2;
}