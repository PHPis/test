<!doctype html>
<html lang="en">
<head>
    {include file="../header.tpl"}
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                {*<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />*}
            </div>

            <!-- Login Form -->
            <form method="post">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            {*<div id="formFooter">*}
                {*<a class="underlineHover" href="#">Forgot Password?</a>*}
            {*</div>*}

        </div>
    </div>
    <div class="error-msg"></div>
</body>
</html>