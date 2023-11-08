<?php
namespace App;
use App\ComparableInterface;
class User implements ComparableInterface{
    private int $id;
    private string $name;
    public function __construct(int $id, string $name){
        $this->id = $id;
        $this->name = $name;
    }
    public function compareTo(User $user2):bool{
        return $this->id === $user2->id;
    }
}