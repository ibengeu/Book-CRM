<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
</head>

<body>
    <!-- <?php

            if ($_REQUEST === $_POST) {

                $Username = $_POST[username];
                $Pasword = $_POST[password];

                echo "$password";
            }



            ?> -->

    <div class="LoginContainer">
        <div class="md-6 emptyRegion"></div>
        <div class="md-6 LoginRegion">
            <div class="formContainer">
                <h3>Login to BMS</h3>

                <form action="login.php" method="POST"> 
                    <label for="username">Username</label>
                    <br />

                    <input type="text" name="username" />
                    <br />

                    <label for="Password">Password</label>
                    <br />
                    <input type="password" name="password" />
                    <br />

                    <input type="submit" placeholder="Submit" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>