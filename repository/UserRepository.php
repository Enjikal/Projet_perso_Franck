<?php
require_once ('AbstractRepository.php');


class UserRepository extends AbstractRepository {

    // Récupère tous les utilisateurs enregistrés
    public function findAll(): array
    {
        return $this->pdo
            ->query('SELECT * FROM users')
            ->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    // Récupère un utilisateur par son adresse e-mail
    public function findByEmail(string $email): ?User
    {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();
        var_dump($data);
        if ($data === false) {
            return null;
        }

        // Crée un nouvel objet utilisateur et renvoie ses données
        $user = new User();
        $user->setId($data['id']);
        $password = $data['password'];
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPasswords(password_hash($password, PASSWORD_DEFAULT));
        $user->setRole($data['role']);

        return $user;
    }

   // Crée un nouvel utilisateur dans la base de données
   public function createUser(string $firstName, string $lastName, string $email, string $password, string $role): int
   {
       $hashed_password = password_hash($password, PASSWORD_ARGON2I);

       $query = "INSERT INTO users (firstName, lastName, email, password, role) VALUES (:userName, :firstName, :lastName, :email, :password, :role)";
       $statement = $this->pdo->prepare($query);
       $statement->bindParam(':userName', $userName, PDO::PARAM_STR);
       $statement->bindParam(':firstName', $firstName, PDO::PARAM_STR);
       $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
       $statement->bindParam(':email', $email, PDO::PARAM_STR);
       $statement->bindParam(':password', $hashed_password, PDO::PARAM_STR);
       $statement->bindParam(':role', $role,PDO::PARAM_STR);
       $statement->execute();

       return $this->pdo->lastInsertId();
}
}