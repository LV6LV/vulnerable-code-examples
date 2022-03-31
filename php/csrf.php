<?php

class user {
    public $name;
    private $passwordhash;

    function set_password($password){
        $this->passwordhash = password_hash($password, PASSWORD_DEFAULT);
    }

    function get_password(){
        return $this->passwordhash;
    }
}

$currentuser = new user;
$currentuser->name = "hakluke";
$currentuser->set_password("supersecure");

?>

<h1>Enter new password</h1>
<form method="POST">
    <input type="password" name="newpass">
    <input type="submit">
</form>

<?php

if (isset($_POST['newpass'])) {
    $currentuser->set_password($_POST['newpass']);
    print("Password update successful.");
}

?>
