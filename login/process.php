<?php
 $msg="";
    
    
$name = $_POST['uname'];
$Email = $_POST['email'];
$Pwd =$_POST['pwd'];
    
 
 $conn= new mysqli('localhost','root','','user_registraion');
if($conn -> connect_error)
    {
     die('user creation failed please try again later');
 
    }
     else
     {
         $user="SELECT *  FROM taken where email='$Email'" ;
          $result=mysqli_query($conn,$user) or die(mysqli_error($conn));
         if(mysqli_num_rows($result)>0)
           {
            $msg="*user is already register please try another one ....";
 
            }
         else{
            
         
             
             $stmt = $conn->prepare("INSERT into taken(uname,email,pwd)
                         values(?, ?, ?)");
             $stmt->bind_param("ssi",$uname,$Email,$Pwd);
             $_SESSION['email']=$Email;
              $stmt->execute();
              if($stmt)
              {
             echo"
             <script>alert('registration successfull...');
         
              </script>";
              }
              else{
                  echo"
                 <script>alert('registration unsuccessfull...');
         
                 </script>";
                  
              }
      
     
             }
     }
 
 
 
 
 
 ?>
     
