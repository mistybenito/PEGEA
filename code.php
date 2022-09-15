<?php

include('dbcon.php');
// UPDATE CODE
if(isset($_POST['update_registrar']))
{
    $key = $_POST['key'];
    $fullname = $_POST['Name'];
    $phone = $_POST['Contact_number'];
    $address = $_POST['Address'];
    $birthdate = $_POST['Birthday'];
    $mother = $_POST['Mother'];
    $mcon = $_POST['Mother_number'];
    $father = $_POST['Father'];
    $fcon = $_POST['Father_number'];

    $updateData = [
        'Name' =>$fullname,
        'Contact_number'=> $phone,
        'Address'=> $address,
        'Birthday'=> $birthdate,
        'Mother'=> $mother,
        'Mother_number'=> $mcon,
        'Father'=> $father,
        'Father_number'=> $fcon,
    ];

    $ref_table = 'User/'.$key;
    $updateQuery_result = $database->getReference($ref_table)->update($updateData);

    if($updateQuery_result)
    {
        $_SESSION['status'] = "Contact updated successfully";
        header('Location: registrar1.php');
    }
    else
    {
        $_SESSION['status'] = "Contact not updated successfully";
        header('Location: registrar1.php');
    }
}
else
{

}

// REGISTER CODE

if(isset($_POST['register_btn']))
{
    $fullname = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+63'.$phone,
        'password' => $password,
        'displayName' => $fullname,
    ];
    $createdUser = $auth->createUser($userProperties);

    if($createdUser)
    {
        $_SESSION['status'] = "User created successfully.";
        header('Location: register.php');
        exit();
    }
}
?>