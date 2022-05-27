<?php

if(isset($_POST['btn-send']))
{
   $UserName = $_POST['Fname'];
   $Email = $_POST['Email'];
   $Subject='confirmation from AURA';
   $Msg = $_POST['msg'];

   if(empty($UserName) || empty($Email) || empty($Msg))
   {
       header("location:form.php?error");
   }
   else
   {
       $to = "admin@onlineittuts.com";

       if(mail($to,$Subject,$Msg,$Email))
       {
           header("location:form.php?success");
       }
   }
}
else
{
    header("location:form.php");
}
?>