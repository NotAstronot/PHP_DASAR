<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    // jika function sudah final maka sudah tidak bisa diturunkan 
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}



// jika sudah final maka tidak bisa diturunkan lagi 
// jika  diturunkan lagi maka akan error 

// error
class FakeFacebook extends SocialMedia
{

    public function login(string $username, string $password): bool
    {
        // error 
        // jika function sudah final maka sudah tidak bisa diturunkan 
        return false;
    }
}
