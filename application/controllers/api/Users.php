<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Users extends REST_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function user_get()
    {
        if (!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $users = [
            1 => ['uid' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            2 => ['uid' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            3 => ['uid' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];

        $user = @$users[$this->get('id')];
        
        if ($user)
        {
            $this->response($user, 200);
        }

        else
        {
            $this->response(['error' => 'User could not be found'], 404);
        }
    }

    function user_post()
    {
        $message = [
            'id' => $this->get('id'),
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'message' => 'Added a resource'
        ];

        $this->response($message, 201);
    }

    function user_delete()
    {
        $message = [
            'id' => $this->get('id'),
            'message' => 'Deleted the resource'
        ];

        $this->response($message, 204);
    }

    function users_get()
    {
        $users = [
            ['uid' => 1, 'name' => 'Mike Bosco', 'email' => 'mike@levymgi.com', 'status' => 'inactive'],
            ['uid' => 2, 'name' => 'Greg Gusserdz', 'email' => 'greg@levymgi.com', 'status' => 'inactive'],
            ['uid' => 3, 'name' => 'Aaron Reighard', 'email' => 'A.Reighard@westpenn-wpw.com', 'status' => 'inactive'],
        ];

        if ($users)
        {
            $this->response($users, 200);
        }

        else
        {
            $this->response(['error' => 'Couldn\'t find any users!'], 404);
        }
    }
}