<?php
namespace App\repository;

use App\models\users;
use \PDO;

class UserRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(users::class);
    }

    public function addUser(users $user): users
    {
        $query = $this->pdo->prepare('INSERT INTO user VALUE(null, ?, ?, ?, ?, ?, ?, ?, ?,?)');
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getPassword());
        $query->bindValue(9, $user->getRole());
        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }

    public function deleteOneById(int $id): void
    {
        $query = $this->pdo->prepare('DELETE FROM `user` WHERE `user`.`id` = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function findRolesList(): array
    {
        $query = $this->pdo->query('SELECT user.role FROM `user` WHERE user.role != "" GROUP BY user.role');
        $data = $query->fetchAll();
        return $data;
    }

    public function findIfExist(string $email): bool
    {
        $query = $this->pdo->prepare('SELECT email FROM `user` WHERE email = :email');
        $query->bindParam(':email', $email);
        $data = $query->fetch();
        return (bool)$data ;
    }

    public function updateOneById(users $user): users
    {
        $query = $this->pdo->prepare('UPDATE `user` SET  
                  `email` = ?, 
                  `role` = ?
                   WHERE `user`.`id` = ?');
    
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(8, $user->getRole());
        $query->bindValue(9, $user->getId());
        $query->execute();
        return $user;
    }
}
