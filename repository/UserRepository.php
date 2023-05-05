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
        if ($data === false) {
            return null;
        }

        //ici creer requete pour ajouter utilisateur


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
}