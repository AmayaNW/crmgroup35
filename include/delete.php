<?php
    include 'connection.php';
    if(!$_GET['email']) {
        echo 'error';
    }else {
        $email = $GET['E-maiL'];
    }

    public function deletedata($email) {
        try {
            $sql = "delete from you where email = :E-mail";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':email',$email);
            $stmt->execute();
            return true;
        }catch {
            echo $e->getmessage();
            return false;
        }
    }
    $result = $delete->deletedata($email);
    if($result)
    {
        header("Location: more.php");
    }else {
        echo '';
    }

?>
