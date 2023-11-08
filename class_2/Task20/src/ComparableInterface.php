<?php
namespace App;
use App\User;
interface ComparableInterface{
    public function compareTo(User $user):bool;      
    
}