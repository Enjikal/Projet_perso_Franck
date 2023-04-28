<?php

class User
{
    private int $id;

    private ?string $first_name = null;

    private ?string $last_name = null;

    private ?string $email = null;

    private ?string $passwords = null;

    private ?string $role = null;
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): User
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): User
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getPasswords(): string
    {
        return $this->passwords;
    }

    public function setPasswords(string $passwords): User
    {
        $this->passwords = $passwords;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): User
    {
        $this->role = $role;
        return $this;
    }
}

