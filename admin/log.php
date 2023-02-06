<?php session_start();
include_once "link.php";
 try  
 {  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["Email"]) || empty($_POST["Password"]))  
           {  
                $error_message = '<label>Please enter your username and password</label>';  
           }  
           else  
           {  
               var_dump($_POST["Email"]);
               var_dump($_POST["Password"]);
                $query = "SELECT * FROM admins WHERE email = :email AND password = :password AND status = 1";  
                $statement = $dbh->prepare($query);
                $statement->bindParam(':email',$_POST["Email"]);    
                $statement->bindParam(':password',$_POST["Password"]);    
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC); 
                $count = $statement->rowCount();
                $id= $data[0]["id"];
               var_dump($id);
                var_dump($count);
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["Email"];
                     $_SESSION["role"] = $data[0]["role"];
                     $_SESSION["id"] = $data[0]["id"];
                    header("location:home.php?id=$id");    
}  
else  
{ 
//header("location:index.php?error");        
}  
}  
}  
}  
 catch(PDOException $error)  
 {  
     $error_message = $error->getMessage(); 
 }
?>