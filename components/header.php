<?php

?>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - Hospital Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css"/>
</head>

<body class="theme-cyan">

<!-- Morphing Search  -->
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Explore Swift..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Search</button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>People</h2>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar1.jpg" alt=""/><h3>Sara Soueidan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar2.jpg" alt=""/><h3>Rachel Smith</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar3.jpg" alt=""/><h3>Peter Finlan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar4.jpg" alt=""/><h3>Patrick Cox</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar5.jpg" alt=""/><h3>Tim Holman</h3></a>
        </div>
        <div class="dummy-column">
            <h2>Popular</h2>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar5.jpg" alt=""/><h3>Sara Soueidan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar4.jpg" alt=""/><h3>Rachel Smith</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar1.jpg" alt=""/><h3>Peter Finlan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar2.jpg" alt=""/><h3>Patrick Cox</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar3.jpg" alt=""/><h3>Tim Holman</h3></a>
        </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar1.jpg" alt=""/><h3>Sara Soueidan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar5.jpg" alt=""/><h3>Rachel Smith</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar1.jpg" alt=""/><h3>Peter Finlan</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar4.jpg" alt=""/><h3>Patrick Cox</h3></a>
            <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar2.jpg" alt=""/><h3>Tim Holman</h3></a>
        </div>
    </div>    
    <span class="morphsearch-close"></span>
</div>

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Swift Hospital</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">7</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p><i class="material-icons">access_time</i> 14 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-cyan"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p><i class="material-icons">access_time</i> 22 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                        <p><i class="material-icons">access_time</i> 3 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-orange"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> changed name</h4>
                                        <p><i class="material-icons">access_time</i> 2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue-grey"><i class="zmdi zmdi-comment-alt-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> commented your post</h4>
                                        <p><i class="material-icons">access_time</i> 4 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-green"><i class="zmdi zmdi-refresh-alt"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> updated status</h4>
                                        <p><i class="material-icons">access_time</i> 3 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>Settings updated</h4>
                                        <p><i class="material-icons">access_time</i> Yesterday</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <!-- #END# Notifications --> 
            <!-- Tasks -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">9</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Task 1 <small>32%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4>Task 2 <small>45%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4>Task 3 <small>54%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Task 4 <small>65%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                </ul>
            </li>
            <!-- #END# Tasks -->
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<div class="color-bg"></div>
</body>


</html>

<?php
require('components/sidebar.php');
?>