<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/creative.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.js" type="text/javascript"></script>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
    <![endif]-->

</head>

<body>

<div class="header-content">
    <div class="header-content-inner">
        <div class="login-page">
            <div class="form">
                <form name="signup" class="login-form" action="<?php echo base_url();?>index.php/signup" onsubmit=validate(); method="post">
                    <input type="text" placeholder="username" name="username" required/>
                    <input type="text" placeholder="firstname" name="firstname" required/>
                    <input type="text" placeholder="lastname" name="lastname" required/>
                    <input type="password" placeholder="password" name="password" required/>
                    <input type="email" placeholder="email address" name="email" required/>
<!--                    <input type="submit" class="btn btn-default" value="Get Me In"/>-->
                    <button class="btn btn-default"  type="submit" name="submit" value="Submit">submit</button>

                </form>
                <p class="message">Already registered? <a href="login">Log In</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>





<!--<script>-->
<!--    function validate(){-->
<!---->
<!---->
<!--        p=document.signup.username.value;-->
<!--        q=document.signup.firstname.value;-->
<!--        r=document.signup.lastname.value;-->
<!--        s=document.signup.password.value;-->
<!--        t=document.signup.email.value;-->
<!---->
<!---->
<!--        if (s==""){-->
<!--            document.getElementById("theIdOfyourTextBlocInForm").innerHTML = "Enter a unique username";-->
<!--            return false;-->
<!--        }-->
<!--        if (p!=rp){-->
<!--            document.getElementById("theIdOfyourTextBlocInForm").innerHTML = "Retype Password Incorrect";-->
<!--            return false;-->
<!--        }-->
<!--        return false;-->
<!--    }-->
<!--</script>-->



/**
 * Created by PhpStorm.
 * User: Nabeel Alvi
 * Date: 7/23/2017
 * Time: 1:53 AM
 */