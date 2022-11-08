<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/formStyle.css">
    <title>Login</title>
</head>

<body>
    <div class="center">
        <input type="checkbox" id="show">
        <label for="show" class="show-btn">Login</label>
        <div class="container" style="height:300px;">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
                Login
            </div>
                <form action="Adminloginprocess.php" method="POST">
                <div class="data">
                    <!-- email -->
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                </div>

                <div class="data">
                    <!-- password  -->
                    <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" required><br>
                    </div>

                    <!-- Register -->
                    <div class="btn">
                        <div class="inner"></div>
                        <button type="submit" name="login">Login</button>
                        <!-- <input type="submit" value="Register", name="addReg"> -->
                    </div>

                    <div class="signup-link">
                     Don't have an account? <a href="./register.php">Register</a>
                    </div>
                </form>
        </div>
    </div>
</body>

    
</body>

</html>