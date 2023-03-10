<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/set1.css">

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id="main-wrapper">
    <form name="login" method="post" action="../index.php">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 left-side">
                    <header>
                        <span style="color:white">Need an account?</span>
                        <h3 style="color:darkgreen">Create Account<br>SMVEC</h3>
                    </header>
                </div>
                <div class="col-md-6 right-side">
                    <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="name" name="username" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Name</span>
                    </label>
                    </span>
                    <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="email" name="emailid" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
                    </label>
                    </span>
                    <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" id="password" name="password"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span>
                    </label>
                    </span>
                    <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" id="password1" name="conformpassword"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
            <span class="input__label-content input__label-content--hoshi">Repeat Passowrd</span>
                    </label>
                    </span>
                    <div class="cta">
                    <input style="padding: 10px 20px; cursor:pointer; border:0; background-color: green; color:white" type="submit" name="register" value="Sign Up">
                        <span><a href="../index.php">I am already a member</a></span>
                    </div>
                    <ul class="social list-inline">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="d9e6c6fbba69c352c1e2f59a-text/javascript"></script>
    <script src="js/scripts.js" type="d9e6c6fbba69c352c1e2f59a-text/javascript"></script>
    <script src="js/classie.js" type="d9e6c6fbba69c352c1e2f59a-text/javascript"></script>
    <script type="d9e6c6fbba69c352c1e2f59a-text/javascript">
        (function() {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call(document.querySelectorAll('input.input__field')).forEach(function(inputEl) {
                // in case the input is already filled..
                if (inputEl.value.trim() !== '') {
                    classie.add(inputEl.parentNode, 'input--filled');
                }

                // events:
                inputEl.addEventListener('focus', onInputFocus);
                inputEl.addEventListener('blur', onInputBlur);
            });

            function onInputFocus(ev) {
                classie.add(ev.target.parentNode, 'input--filled');
            }

            function onInputBlur(ev) {
                if (ev.target.value.trim() === '') {
                    classie.remove(ev.target.parentNode, 'input--filled');
                }
            }
        })();
    </script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d9e6c6fbba69c352c1e2f59a-|49" defer=""></script>
</body>

</html>