<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
        public function submit($data) {
            $this->db->query('INSERT INTO registration (firstname, lastname, country, age,gender,email,phone,address,postalcode) VALUES(:firstname, :lastname, :country, :age,:gender,:email,phone,:address,:postalcode)');
                $this->db->bind(':firstname', $data['firstname']);
                $this->db->bind(':lastname', $data['lastname']);
                $this->db->bind(':country', $data['countr']);
                $this->db->bind(':age', $data['age']);
                $this->db->bind(':gender', $data['gender']);
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':phone', $data['phone']);
                $this->db->bind(':address', $data['address']);
                $this->db->bind(':postalcode', $data['postalcode']);

                if ($this->db->execute()) {
                         return true;
                         } else {
                        return false;

        }
    }
}
