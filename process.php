<?php 

    if(isset($_POST['btn']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['Email'];
      
       $Msg = $_POST['Message'];


       console.log('miri')

       if(empty($Email) and empty($Msg))
       {
           header("location:log.php?error");
       }
       else
       {
           $to = "medmiri123@gmail.com";

           if(mail($to,$Msg,$Email,$UserName))
           {
               header("location:log.php?success");
           }
       }
    }
    else
    {
        header("location:log.php");
    }
?>