   <!-- <?php //include( 'login.php'); // Includes Login Script 
    //if(isset($_SESSION[ 'login_user'])){ header( "location: profile.php"); } ?>-->

    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "userlist";

    mysqli_connect($host, $user, $pass);
    mysqli_select_db($db);

    if (isset($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username ='".$user."'AND password ='".$pass."' LIMIT 1";
    $res = mysqli_query($sql);
    if(mysqli_num_rows($res) == 1){
        echo "you have successfully logged in";
        exit();
    }else{
        echo "Invalid login information. PLease return to the previous page.";
        exit();
    }
}

   
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Social Hotel</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="main">
            <h1>Enter Login Details</h1>
            <div id="login">
                <h2>Login Form</h2>
                <form action="" method="post">
                    <label>UserName :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Password :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <input name="submit" type="submit" value=" Login >
                </form>
            </div>
        </div>
    </body>

    </html>