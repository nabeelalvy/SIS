<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<style>

    input
    {
        border-radius: 4px;
    }
    /*.btn*/
    /*{*/
    /*width: 85px;*/
    /*background-color: #0D8A8A;*/
    /*color: white;*/
    /*padding: 14px 20px;*/
    /*margin-top: 20px;*/
    /*margin-left: 130px;*/
    /*font-size: 1em;*/
    /*border: none;*/
    /*border-radius: 4px;*/
    /*cursor: pointer;*/
    /*}*/
    label{
        display:inline-block;
        width:150px;
    }
    .centered
    {
        position: relative;
        top: 10%;
        left: 35%;
        color: black;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Add School</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/skin-blue.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></link>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="starter.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>IS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><a href="#">You have no new messages</a></li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><a href="#">You have 1 notification</a></li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><a href="#">You have 3 new Tasks</a></li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Asad Masood</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Asad Masood - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Asad Masood</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="admin"><i class="fa fa-link"></i> <span>Home</span></a></li>
                <li><a href="#"><i class="fa fa-link"></i> <span>Analytics</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>School Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="addschoolpage">Add a School</a></li>
                        <li><a href="allschool">All Schools</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>User Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="adduser">Add a User</a></li>
                        <li><a href="alluser">All Users</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content container-fluid">

            <div class="centered">
                <h1 style="font-family: courier;"><b>Edit School</b></h1>
            </div>

            <select id="school" name="id">
                <option> Select</option>
                <?php
                foreach ($all_school as $school) {
                    ?>
                    <option value="<?php echo $school->id ?>"> <?php echo $school->name ?></option>
                    <?php
                }
                ?>
            </select>
            <div style="margin-top: 50px;margin-left: 30px;">

                <table id="example"  class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Branch Name</th>
                        <th>Address</th>
                        <th>Contact Numnber</th>
                        <th>E-mail Address</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Branch Name</th>
                        <th>Address</th>
                        <th>Contact Numnber</th>
                        <th>E-mail Address</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>


                    </tbody>
                </table>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


</body>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "columns": [
                { "data": "name" },
                { "data": "type" },
                { "data": "address" },
                { "data": "number" },
                { "data": "email" },
                { "data": "fee" },
                { "data": "edit" }
            ]
        });
    } );


    //SCHOOL SEARCHING
    $('#school').change(function () {
        var item = $(this);
        $.ajax({
            type: 'POST',
            url: 'school_branch_json',
            dataType: 'json',
            data: {school_name:item.val()},
            success: function(data){
                console.log(data);
                append_json(data);
            }
        });
    });


    function append_json(data){
        if(data){
            var len = Object.keys(data['school_branch']).length;
            var txt = "";
            if(len > 0){
                for(var i=0;i<len;i++){
                    data['school_branch'][i].edit = "<a href=edit_branch/"+data['school_branch'][i].id+"><button type='button' class='btn btn-primary'>Edit</button></a>";
                    data['school_branch'][i].delete = "<a href=delete_branch/"+data['school_branch'][i].id+"><button type='button' class='btn btn-primary'>Delete</button></a>";
                    txt += "<tr><td>"+(i+1)+"</td><td>"+data['school_branch'][i].branchName+"</td><td>"+data['school_branch'][i].address+"</td><td>"+data['school_branch'][i].phoneNo+"</td><td>"+data['school_branch'][i].email+"</td><td>"+'<a href="'+ data['school_branch'][i].map + '" target="_blank">Map</a>'+"</td><td>"+data['school_branch'][i].status+"</td><td>"+data['school_branch'][i].edit+"</td><td>"+data['school_branch'][i].delete+"</td></tr>";
                }
                if(txt != ""){
                    $("tbody").empty().append(txt);
                }
            }
        }
    }

    $(document).on('click','.edit', function () {
        var id = (this).data('id');
        alert('I am here');
        window.location.href = "/admin/edit_branch?id="+id;
    });

</script>
<!--<td>"+'<button class="button edit " data-id="'+data['school_branch'][i].id+'">Edit</button>'+"</td>-->
</html>