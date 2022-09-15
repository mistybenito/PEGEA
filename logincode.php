<?php
session_start();


include('dbcon.php');



if(isset($_POST['login_button']))
{
    $email = $_POST['email'];
    $clearTextPassword = $_POST['password'];

    try {
        $user = $auth->getUserByEmail("$email");

        try{
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();
            
                try {
                    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                    $uid = $verifiedIdToken->claims()->get('sub');

                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['$idTokenString'] = $idTokenString;

                    $_SESSION = "Logged in successfully";
                    header('Location: registrar1.php');
                    exit();
                    
                } 
                catch (FailedToVerifyToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
                }
        }

        catch(Exception $e){
            $_SESSION = "Wrong Password";
            header('Location: index.php');
            exit();
        }

        

    } 
    
    catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        // echo $e->getMessage();
        $_SESSION = "Invalid Email Address";
        header('Location: index.php');
        exit();
    }
}
else
{
    $_SESSION = "Not allowed";
    header('Location: login.php');
    exit();
}

?>