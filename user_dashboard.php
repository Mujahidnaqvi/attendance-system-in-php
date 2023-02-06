<?php
session_start(); 
if($_SESSION["role"]==="user"){
//$username= $_REQUEST["username"];  
$username= $_SESSION["username"];  
include_once "_includes/db.php";
$query = "SELECT * FROM `user` WHERE username= :username";
$add = $dbh->prepare($query);
$add->bindParam(':username',$username);    
$add->execute();
$data = $add->fetchAll($dbh::FETCH_ASSOC);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link type='text/css' rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome CDN-->
    <link type='text/css' rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <!-- Animate.css CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- Custom Style-->
    <link rel="stylesheet" href="./css/style-dashboard.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <style>
        #background{
            height: auto;
            background-color: green;
            float: left;
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
            
        }
         #background button{
            margin-top: 20px;
             margin-bottom: 20px;
        }
        #background h1{
            margin-top: 10px;
            text-align: center;
            color: aliceblue;
        }
        #table {
            background-color: wheat;
            height: auto;
            padding-left: 3.5%;
            margin-top: 20px;
        }
          #table table{
            background-color: whitesmoke;
            height: auto;
            padding-left: 10%;
        }
        #table td{
            border: 1px solid black;
/*            border-collapse: collapse;*/
            text-align: center;
            margin: 0;
            padding: 0;
        }       
        #table th{
            border: 1px solid black;
            margin: 0;
            padding: 0;
            text-align: center;
        }
    
    </style>

</head>

<body>
    <div id="background" class="col-md-12">
    <h1>USER SERVICE TIME PAGE</h1>    
    <div id="table"  class="col-md-4 offset-md-4">
      <table>
          <tr>
              <th style="width:50px;">S.No</th>
              <th style="width:100px;">Name</th>
              <th style="width:100px;">Father Name</th>              
              <th style="width:100px;">Service Time</th>                           
          </tr>          
      </table>
<?php
    $count=1;    
//       foreach($statement as $value){
?>     
           <table>
          <tr>
           <td style="width:50px;"><?php echo $count;?></td>
           <td style="width:100px;"><?php echo $data[0]['name'];?></td>
           <td style="width:100px;"><?php echo $data[0]['father_name'];?></td>
           <td style="width:100px;"><?php echo $data[0]['service_time'];?></td>
<!--           <td style="width:100px;"><a href="edit.php?id=<?php echo $value['test_id']; ?>"><button>Edit</button></a></td>-->
          </tr>
       </table>
<?php30$count++;           
//}        
?>
        </div>
               <a href="attendance_page.php"><button type="button" class="btn btn-success" style="margin-left:40%;">Attendance Page</button></a>
       <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
    </div>
</body>

</html>
<?php
}  
else  
 {  
      header("location:index.html");  
 }    
?>