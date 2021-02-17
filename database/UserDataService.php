<?php


class UserDataService
{

    public function findUserByUsername($u)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Select * from users where USERNAME = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $u);
        $stmt->execute();
        $results = $stmt->get_result();

        if($results->num_rows == 0){
            return null;
        }else{
            $users = array();
            while ($user = $results->fetch_assoc()){
                array_push($users, $user);
            }
            $u = new User($users[0]["ID"], $users[0]["FIRST_NAME"], $users[0]["LAST_NAME"], $users[0]["USERNAME"],$users[0]["PASSWORD"]);
            return $u;
        }

    }

    public function createUser($f, $l, $u, $p){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Insert into users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUE (?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $f, $l, $u, $p);
        if($stmt->execute()){
            $conn->close();
            return true;
        }else{
            $conn->close();
            echo "Error".$query."<br>".mysqli_error($conn);
            return false;
        }
    }


}