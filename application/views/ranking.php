<!DOCTYPE html>

<html>

<head>

          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></link>
    <title>Ranking of School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>
    .centered
    {
        position: relative;
        top: 10%;
        left: 35%;
        color: black;
    }
    body
    {
        overflow-x: hidden;
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
                <h1 style="font-family: courier;"><b>Ranking of Schools</b></h1>
            </div>
            <br><br><br>

<div style="margin-top: 50px;margin-left: 30px;">
        <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="color">Rank</th>
                        <th class="color">School Name</th>
                        <th class="color">Branch Name</th>
                        <th class="color">Location</th>
                        <th class="color">Address</th>
                        <th class="color">Contact</th>
                        <th class="color">City</th>
                        <th class="color">Map</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="color">Rank</th>
                        <th class="color">School Name</th>
                        <th class="color">Branch Name</th>
                        <th class="color">Location</th>
                        <th class="color">Address</th>
                        <th class="color">Contact</th>
                        <th class="color">City</th>
                        <th class="color">Map</th>
                    </tr>
                    </tfoot>
                    <tbody>
                            <tr>

                                <td>1</td>
                                <td>The City School</td>
                                <td>Ravi Campus</td>
                                <td>Johar Town</td>
                                <td>H3, Johar Town</td>
                                <td>042-38484848</td>
                                <td>Lahore</td>
                                <td>MAP</td>                                
                            </tr>
                            <tr>

                                <td>1</td>
                                <td>The City School</td>
                                <td>Ravi Campus</td>
                                <td>Johar Town</td>
                                <td>H3, Johar Town</td>
                                <td>042-38484848</td>
                                <td>Lahore</td>
                                <td>MAP</td>                                
                            </tr>
                            <tr>

                                <td>1</td>
                                <td>The City School</td>
                                <td>Ravi Campus</td>
                                <td>Johar Town</td>
                                <td>H3, Johar Town</td>
                                <td>042-38484848</td>
                                <td>Lahore</td>
                                <td>MAP</td>                                
                            </tr>
                            <tr>

                                <td>1</td>
                                <td>The City School</td>
                                <td>Ravi Campus</td>
                                <td>Johar Town</td>
                                <td>H3, Johar Town</td>
                                <td>042-38484848</td>
                                <td>Lahore</td>
                                <td>MAP</td>                                
                            </tr>                                                                                    
                    </tbody>
                </table>
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

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</body>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        "columns": [
            { "data": "rank" },
            { "data": "name" },
            { "data": "branch" },
            { "data": "loc" },
            { "data": "address" },
            { "data": "number" },     
            { "data": "city" },            
            { "data": "map" }
        ]
    });
} );

</script>
</html>