<?php


class UserBusinessService
{
    public function findUserByUsername($u){
        $service = new UserDataService();
        return $service->findUserByUsername($u);
    }

    public function createUser($f, $l, $u, $p){
        $service = new UserDataService();
       return $service->createUser($f, $l, $u, $p);
    }

}