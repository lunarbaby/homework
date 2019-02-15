<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
User Name: <input type="text" name="user-input">
Password: <input type="text" name="password">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "Access Deined";
} else if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = $_POST['user-input'];
    $password = $_POST['password'];
    if(empty($userName) || empty($password)){
        echo "Please fill in all fields";
    } else if ($userName == "Max" && $password == "1234"){
        echo "Access Granted";
    } else {
        echo "Access Deined";
    }
}


?>