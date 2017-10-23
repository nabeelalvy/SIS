<!DOCTYPE html>

<html>

<head>
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--framework/css/main.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
    <title>Search School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-nav-fixed ">
                <div class="well">
                    <div class="sidebar-fixed" id="sideNavParent">
                        <ul class="sidebar-list">
                            <li>
                                <b><a style="color: #24A2AF"> Filter Bar </a></b>
                            </li>
                            &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</br>
                            <li>
                                <b><a style="color: #24A2AF">Fee Range</a></b></br>
                                <b><a style="color: #24A2AF">(in PKR)</a></b>
                                <input type="range" id="slider1" min="0" max="10000" step="1" onchange="OnSliderChanged (this)">
                                <br style="line-height:5px;" />
                                <span id="slider1Value" class="sliderValue"></span></br>
                            </li>
                            &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
                            <li>
                                <div class="form-group">
                                    <label style="color: #24A2AF">Area</label>
                                    <select class="form-control" id="areaset">
                                        <option>Johar Town</option>
                                        <option>Model Town</option>
                                        <option>Faisal Town</option>
                                    </select>
                                </div>
                            </li>
                            &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
                        </ul>
                    </div>

                </div>
            </div>
            <!--/.well -->
        </div>
        <!--/sidebar-nav-fixed -->

        <div class="col-md-9 col-lg-9">
            <div class="row">
                <div class="col-md-4 col-lg-12">
                    <form action="<?php echo base_url();?>index.php/search_name" method="post">
                        <label for="usr">Enter School Name:</label>
                        <div class="input-group">
                            <input type="text" name="school_name" class="form-control getinput">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div id="input-table">
                <table id="example" class="display table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="color">Sr No.</th>
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
                        <th class="color">Sr No.</th>
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
                    <?php
                    $id = 1;
                    if($school_name != null) {
                        foreach($school_name as $row){ ?>
                            <tr>

                                <td><?php echo $id ?></td>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->branchName ?></td>
                                <td><?php echo $row->location ?></td>
                                <td><?php echo $row->address ?></td>
                                <td><?php echo $row->city_name ?></td>
                            </tr>
                            <?php $id++; } }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->-->
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



<script>
    //    $(document).ready(function() {
    //        $('#example').DataTable();
    //    } );


    //AREA SELECTTION
    $(document).ready(function() {
//        console.log(jQuery("#areaset option:selected").val()); //get pre-selected drop down value
        $('#areaset').change(function () {
            var item = $(this);
            $.ajax({
                type: 'POST',
                url: 'area_select',
                dataType: 'json',
                data: {area:item.val()},
                success: function(data){
                    console.log(data);
                    append_json(data);
                }
            });
        });

        //SCHOOL SEARCHING
        $("input").on("keyup", function(e) {
//            var a = String.fromCharCode(e.type, e.keyCode);
            var item = $(this).val();
            console.log(item);
            $.ajax({
                type: 'POST',
                url: 'search_name',
                dataType: 'json',
                data: {key:item},
                success: function(data){
                    console.log(data);
                    append_json(data);
                }
            });
        });

    } );

    function append_json(data){
        if(data){
            var len = Object.keys(data).length;
            var txt = "";
            if(len > 0){
                for(var i=0;i<len;i++){
                    txt += "<tr><td>"+(i+1)+"</td><td>"+data[i].name+"</td><td>"+data[i].branchName+"</td><td>"+data[i].location+"</td><td>"+data[i].address+"</td><td>"+data[i].phoneNo+"</td><td>"+data[i].city_name+"</td><td>"+'<a href="'+ data[i].map + '" target="_blank">Map</a>'+"</td></tr>";
                }
                if(txt != ""){
                    $("tbody").empty().append(txt);
                }
            }
        }
    }

    function OnSliderChanged (slider) {
        var sliderValue = document.getElementById (slider.id + "Value");
        sliderValue.innerHTML = slider.value;
    }
    function Init () {
        var slider = document.getElementById ("slider1");
        OnSliderChanged (slider);
    }
</script>
</body>
</html>