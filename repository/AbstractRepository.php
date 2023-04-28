<?php

use \PDO;

abstract class AbstractRepository
{
    protected Pdo $pdo;

    private string $url;
    private string $user;
    private string $pwd;
    private string $role;
    
    public function __construct()
    {
        $this->url = 'mysql:host=127.0.0.1:3306;dbname=site-de-recettes';
        $this->user = 'root';
        $this->pwd = '';
        $this->role = '';
        $this->pdo = new PDO($this->url, $this->user, $this->pwd, $this->role);
    }
}