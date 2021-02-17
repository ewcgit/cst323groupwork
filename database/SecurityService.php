<?php


class SecurityService
{

    public function authUser($u, $p){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Select * from users where USERNAME = ? and PASSWORD = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $u, $p);
        $stmt->execute();
        $results = $stmt->get_result();

        if($results->num_rows == 1){
            $conn->close();
            return true;
        }else{
            return false;
        }

    }
}