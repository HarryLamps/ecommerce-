<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/formStyle.css"> -->
    <script type="text/javascript" src="../js/register_Regex.js"></script>
</head>


<body>
    <div class="center">
        <input type="checkbox" id="show">
        <label for="show" class="show-btn">Registeration Form</label>
        <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
                Registration Form
            </div>
            <form action="Registerprocess.php" method="POST"  name="myForm" onsubmit="return(validate());">
                <div class="data">
                    <!-- fullname -->
                    <label for="fullname">Full name:</label><br>
                    <input type="text" id="fullname" name="fullname"><br>
                </div>


                <div class="data">
                    <!-- email -->
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br>
                </div>

                <div class="data">

                    <!-- password  -->
                    <label for="password">Password:</label><br>
                    <input type="password" id="urpassword" name="password"><br>
                </div>



                <div class="data">
                    <!-- country -->
                    <label for="country">Country:</label><br>
                    <input type="text" id="country" name="country"><br>
                </div>

                <div class="data">
                    <!-- city  -->
                    <label for="city">City:</label><br>
                    <input type="text" id="city" name="city"><br>
                </div>

                <div class="data">
                    <!-- contact number -->
                    <label for="contact">Contact Number:</label><br>
                    <input type="text" id="contact" name="contact"><br>
                </div>
                <!-- <div>
                    <label for="picture"> Picture upload:</label> <br>
                    <input type="image" id="picture" name="picture"> <br>


                </div> -->
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit" name="addReg">Register</button>
                    <!-- <input type="submit" value="Register", name="addReg"> -->
                </div>
                <div class="signup-link">
                    Already have an account? <a href="./login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>