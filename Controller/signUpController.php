<?php
function validationName(){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    if($firstName ==="" || $lastName===""){
        echo"Firstname/Lastname is requard";
    }

}

function validationEmail(){
    $email=$_POST['email'];

    if($email ===""){
        echo"Email is requard";
    }
    
}
function validationPassword(){
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    if($password ===""||$confirmPassword===""){
        header('location: ../View/signUp.html');
    }
    else if($password == $confirmPassword){
        header('location: ../View/emailVarifation 1.html');
    }
    else{
        echo "invalid user..!";
    }
    
}

if(isset($_POST["submit"])){
 validationName();
 validationEmail();
 validationPassword();
}

?>