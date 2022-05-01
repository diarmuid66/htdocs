<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat)  {


    $result;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
    {
        //If no mistake then return this
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
/*
function invalidUid($username)  {
    $result =false;
     if (!preg_match("/^[a-zA-Z0-9]*$/"), $username) {

        $result = true;
    }

 else {
        $result = false;
    }
    return $result;
}

*/

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //makes the password secure
    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

}