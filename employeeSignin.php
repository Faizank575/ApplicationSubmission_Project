<?php
session_start();
$pageTitle = 'Employee Sign In';
include_once('include/header.php');

if (isset($_SESSION['username'])) {
    header("Location:dashboard.php?username=" . $_SESSION['username']);
}
?>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form method="POST" action="./include/login.inc.php" class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-53">
                    Sign In
                </span>
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Username
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="email" name="username">
                    <span class="focus-input100"></span>
                </div>
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        UserType
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="UserType is required">
                    <Select class="input100" id="UserType" name="userType">
                        <option selected disabled value="">Choose UserType</option>
                        <option value="reciever">Reciever</option>
                        <option value="reviewer">Reviewer</option>
                    </Select>
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        Password
                    </span>

                    <a href="#" class="txt2 bo1 m-l-5">
                        Forgot?
                    </a>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button name="login_button" class="login100-form-btn">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

include_once('include/footer.php');
?>