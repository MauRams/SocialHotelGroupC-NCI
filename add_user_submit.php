<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<html>
<head>
    <title>Social Hotel Login</title>
</head>

<body>
    <h2>Add user</h2>
    <form action="add_user.php" method="post">
        <fieldset>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="" maxlength="20" />
            </p>
            <p>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="" maxlength="20" />
            </p>
            <p>
                <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                <input type="submit" value="&rarr; Login" />
            </p>
        </fieldset>
    </form>
</body>
</html>