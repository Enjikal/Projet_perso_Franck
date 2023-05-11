<?php

class Products

{
   private int $id;

   private ?string $name;

   private ?string $description;

   private ?string $price;

   private ?string $image;

   public function getId(): int
   {
       return $this->id;
   }

   public function setId(int $id): Products
   {
       $this->id = $id;
       return $this;
   }

   public function getName(): string
   {
       return $this->name;
   }

   public function setName(string $name): Products
   {
       $this->name = $name;
       return $this;
   }

   public function getDescription(): string
   {
       return $this->description;
   }

   public function setDescription(string $description): Products
   {
       $this->description = $description;
       return $this;
   }

   public function getPrice(): string
   {
       return $this->price;
   }

   public function setPrice(string $price): Products
   {
       $this->price = $price;
       return $this;
   }
   
   public function getImage(): string
   {
    return $this->image;
   }

   public function setImage(string $image): Products
   {
       $this->image = $image;
       return $this;
    }

}