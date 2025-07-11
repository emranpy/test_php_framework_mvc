<?php


class User {

    use Model;
    

    protected $table = "users";
    
    protected $editable = [
        "name",
        "email",
    ];

    }