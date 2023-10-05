<?php
if (isset($_GET["register"])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            // JavaScript validation
            $(document).ready(function () {
                $("#signup_form").on("submit", function () {
                    var valid = true;

                    // First Name and Last Name should contain only letters
                    var namePattern = /^[A-Za-z]+$/;
                    var firstName = $("#f_name").val();
                    var lastName = $("#l_name").val();

                    if (!firstName.match(namePattern) || !lastName.match(namePattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>First Name and Last Name should contain only letters.</div>");
                    }

                    // Validate email address using a regular expression
                    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    var email = $("#email").val();

                    if (!email.match(emailPattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Invalid email address.</div>");
                    }

                    // Strong password validation (at least 8 characters, one uppercase, one lowercase, one digit, and one special character)
                    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                    var password = $("#password").val();
                    var confirmPassword = $("#repassword").val();

                    if (!password.match(passwordPattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Password must be at least 8 characters long and include one uppercase letter, one lowercase letter, one digit, and one special character.</div>");
                    } else if (password !== confirmPassword) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Passwords do not match.</div>");
                    }

                    // Validate mobile number (assuming 10-digit numeric)
                    var mobilePattern = /^\d{10}$/;
                    var mobile = $("#mobile").val();

                    if (!mobile.match(mobilePattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Invalid mobile number. Please enter a 10-digit numeric value.</div>");
                    }

                    // Check if address fields are not empty
                    var address1 = $("#address1").val();
                    var address2 = $("#address2").val();

                    if (address1.trim() === "" || address2.trim() === "") {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Address fields are required.</div>");
                    }

                    return valid;
                });
            });
        </script>
    </head>
    <body>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Ecommerce Site</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
            </ul>
        </div>
    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
                <!--Alert from signup form-->
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Customer Registration Form</div>
                    <div class="panel-body">

                        <form id="signup_form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">First Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="l_name">Last Name</label>
                                    <input type="text" id="l_name" name="l_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="repassword">Confirm Password</label>
                                    <input type="password" id="repassword" name="repassword" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Contact Number</label>
                                    <input type="tel" id="mobile" name="mobile" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address 1</label>
                                    <input type="text" id="address1" name="address1" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address 2</label>
                                    <input type="text" id="address2" name="address2" class="form-control" required>
                                </div>
                            </div>
                            <p><br/></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <input style="width:100%;" value="Sign Up" type="submit" name="signup_button"
                                           class="btn btn-success btn-lg">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </body>
    </html>
    <?php
}
?>
