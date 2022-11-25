<?php

namespace App\Controllers;
use stdClass;

class Home extends BaseController
{
    public function index()
    {
        return view('conectare/login');
    }

    public function login() {
        //preluam datele din front
        $username = $_POST['username'];
        $password = $_POST['password'];

        //conectare la baza de date
        $db = db_connect();

        //query pentru preluarea user-ului dupa username
        $query = "SELECT * FROM users WHERE name = '{$username}'";
        $result = $db->query($query)->getResult();

        // verifica daca user-u exista
        if (count($result) <= 0) {

            //daca nu exista, intorc eroare
            return view('conectare/login_error');
        } else {

            //daca exista, incep verificarea parolei
            $user = $result[0];
            if ($user->password != md5($password)) {
                //intorc eroare ca parola e gresita.
                return view('conectare/login_error');
            }
                return view('home');

        }

    }

    public function register() {
        return view('conectare/register');
    }

    public function saveUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //conectare la baza de date
        $db = db_connect();

        //query pentru preluarea user-ului dupa username
        $query = "SELECT * FROM users WHERE name = '{$username}'";
        $result = $db->query($query)->getResult();

        if (count($result) > 0) {
            return view('conectare/register_error');
        } else {
            $password = md5($password);
            $query = "INSERT INTO users (name, password) VALUES ('$username', '$password')";
            $db->query($query);
            return view('conectare/login_succes');
        }
    }

    public function recuperare() {
        return view('conectare/recuperare');
    }

    public function recuperareUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];
         //conectare la baza de date
         $db = db_connect();

         //query pentru preluarea user-ului dupa username
         $query = "SELECT * FROM users WHERE name = '{$username}'";
         $result = $db->query($query)->getResult();

         if (count($result) < 0) {
            return view('conectare/recupeare_error');
         } else {
            $Id = $result[0]->id;
            $password = md5($password);
            $query_update = "UPDATE users SET password = '{$password}' WHERE id = {$Id}";
            $db->query($query_update);
            return view('conectare/login_recuperare');
         }
    }


}
