<?php
session_start();  
include_once "_includes/db.php";
 try  
 {  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $error_message = '<label>Please enter your username and password</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE username = :username AND password = :password AND status = 1";  
                $statement = $dbh->prepare($query);
                $statement->bindParam(':username',$_POST["username"]);    
                $statement->bindParam(':password',$_POST["password"]);    
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);
//                $statement->execute(  
//                     array(  
//                          'username'     =>     $_POST["username"],  
//                          'password'     =>     $_POST["password"]  
//                     )  
//                );  
                $count = $statement->rowCount();
//               $username= $_POST["username"];
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];
                     $_SESSION["role"] = $data[0]["role"];
                     $_SESSION["user"] = $data[0]["user"];
                    header("location:user_dashboard.php");    
}  
else  
{ 
header("location:index.html");        
}  
}  
}  
}  
 catch(PDOException $error)  
 {  
     $error_message = $error->getMessage(); 
 }
?>
                    