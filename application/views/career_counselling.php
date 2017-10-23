<!DOCTYPE html>

<html>

<head>
    <!--    <link rel="stylesheet" type="text/css" href="framework/css/main.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
    <title>Career Counselling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>
    input,select
    {
        border-radius: 4px;

    }
    input[type=submit]
    {
        width: 90px;
        background-color: #0D8A8A;
        color: white;
        padding: 14px 20px;
        margin-top: 20px;
        margin-left: 190px;
        font-size: 1em;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    label{
        display: inline-block;
        width:100px;
        margin-left: 50px;
    }

    .centered
    {
        position: relative;
        top: 1%;
        left: 35%;
        color: black;
    }
    #mainForm
    {
        margin-left:130px;

    }
    body
    {
        overflow-x: hidden;
    }
    #center
    {
        margin-left: 300px;
    }
    #input-table{
        margin-top:30px;
    }

</style>
<body>

<nav id="mainNav" class="navbar navbar-default  navbar-toggleable-md navbar-light" style="background-color: #2980B9;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" style="color: white" href="home">S.I.S</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="" style="color: white" href="home">Home</a>
                </li>
                <li>
                    <a class="" style="color: white" href="logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="centered">
    <h1 style="font-family: courier;"><b>Career Counselling</b></h1>
</div>
<br>

<div align="center">
    <p style="width: 500px;">Your Career is predicted using different types of algorithms. A decision tree is a decision support tool that uses a tree-like graph or model of decisions and their possible consequences, including chance event outcomes, resource costs, and utility. It is one way to display an algorithm that only contains conditional control statemens.</p>
</div>

<br><br>
<div id="center">

    <div id="mainForm">

        <h3 style="font-family: courier; margin-left: 130px;">Enter Matric Marks</h3><br>
        <form method="post" action="getfield">
            <label style="width: 60px;">Gender:</label>
            <select required name="gender">
                <option>Select</option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>

            <label style="width: 60px;">Hobbies:</label>
            <select required name="hobby">
                <option>Select</option>
                <option value="Music">Music</option>
                <option value="Reading">Reading</option>
                <option value="Writing">Writing</option>
                <option value="Travelling">Travelling</option>
            </select>

            <label style="width: 60px;">Skills:</label>
            <select required name="skill">
                <option>Select</option>
                <option value="Technical">Technical</option>
                <option value="Persuasive">Persuasive</option>
                <option value="Entrepreneurial">Entrepreneurial</option>
            </select>
            <br><br><br>
            <label>Mathematics:</label><input type="text" name="maths" placeholder=" /150" required></br></br><br>
            <label>Biology:</label><input type="text" name="bio" placeholder=" /150" required></br></br><br>
            <label>Chemistry:</label><input  type="text" name="chem" placeholder=" /150" required></br></br><br>
            <label>Physics:</label><input type="text" name="phy" placeholder=" /150" required></br></br><br>
            <input type="submit" name="Submit" required></br></br><br>

<!--            <button class="btn" data-toggle="modal" data-target="#myModal">Submit</button>-->
       </form>


</div>

<br><br>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" align="center">Career</h4>
            </div>
            <div class="modal-body">
                <h3 align="center">Suggested Career for you is</h3>
                <br><br>
                <h4 align="center" style="color: blue;">Medical</h4>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->


</body>

</html>