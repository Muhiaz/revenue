<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="stylesheet" type="text/css" href="../1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title></title>
</head>
<body>
<section>
        <div class="sidebar">
            <div class="sidebartop">
                <span class="las la-utensil-spoon"></span>RCS
            </div>
            <div class="sidebar-content">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link"><span class="las la-igloo"></span> Dashboard</a></li>
                    <?php
                    if(\Auth::user()->class == 'Small business' && \Auth::user()->role == 'User'){
                        ?>
                        <li><a href="#" class="nav__link"><span class="las la-cogs"></span> Small businesses</a></li>
                        <?php
                    }
                    elseif(\Auth::user()->class == 'Boda boda' && \Auth::user()->role == 'User'){
                        ?>
                        <li><a href="bodaboda" class="nav__link"><span class="las la-pallet"></span> Boda boda</a></li>
                        <?php
                    }
                    elseif(\Auth::user()->class == 'Taxi' && \Auth::user()->role == 'User'){
                        ?>
                        <li><a href="#" class="nav__link"><span class="las la-users"></span> Taxi</a></li>
                        <?php
                    }
                    elseif(\Auth::user()->class == 'Vendors' && \Auth::user()->role == 'User'){
                        ?>
                        <li><a href="#" class="nav__link"><span class="las la-user-cog"></span> Vendors</a></li>
                        <?php
                    }
                    elseif(\Auth::user()->class == '' && \Auth::user()->role == ''){
?>
<li><a href="#" class="nav__link"><span class="las la-cogs"></span> Small businesses</a></li>
<li><a href="#" class="nav__link"><span class="las la-pallet"></span> Boda boda</a></li>
 <li><a href="#" class="nav__link"><span class="las la-users"></span> Taxi</a></li>
<li><a href="#" class="nav__link"><span class="las la-user-cog"></span> Vendors</a></li>
<?php
                    }

                     ?>
                    <li><a href="#" class="nav__link"><span class="las la-file"></span> Documentation</a></li>
                    <li><a href="#" class="nav__link"><span class="las la-industry"></span> Projects</a></li>
                    <li><a href="#" class="nav__link"><span class="las la-tasks"></span> Management</a></li>
                    <li><a href="#" class="nav__link"><span class="las la-power-off"></span> Logout</a></li>

                </ul>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <div class="bars-wrapper">
                    <span class="las la-bars"></span>
                <h4>Dashboard</h4>
            </div>
                <div class="profile-wrapper">
                    <span class="las la-user-circle"></span>
                    <h5>{{Auth::user()->name}}</h5>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3>My payments</h3> 
                        </div>
                        <div class="col-md-6">
                           <a href="addpayment"><button class="btn btn-primary">Add payment</button></a> 
                        </div>
                    </div>
                </div>
                <h3></h3>
                <div class="flex-div">
                    <?php 
                    if(\Auth::user()->role == ''){
                        ?>
                         <div class="bookings">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>
                                        #Id
                                    </td>
                                    <td>
                                        Profile
                                    </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>
                                        Contact
                                    </td>
                                    <td>
                                        Status
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td><img src="../img/4.jpg"></td>
                                    <td>David Muhia</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td><img src="../img/client-2.jpg"></td>
                                    <td>Vanessa Mdee</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td><img src="../img/team-1.jpg"></td>
                                    <td>Michael cameron</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td><img src="../img/team-2.jpg"></td>
                                    <td>Julia Michael</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td><img src="../img/team-3.jpg"></td>
                                    <td>Duncan Trevor</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <?php
                    }
                    else{
                        ?>
                         <div class="bookings">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>
                                        #Id
                                    </td>
                                    <td>
                                        Transaction ref
                                    </td>
                                    <td>
                                        Date
                                    </td>
                                    <td></td>
                                    <td>
                                        Status
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    
                                    <td>KLMN2345678</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    
                                    <td>KVCFMN2345678</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    
                                    <td>NLMN2345678</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    
                                    <td>KLMN2345678</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    
                                    <td>KLMN2345678</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <div class="contact">
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                            <span class="las la-comments"></span>
                                        </div>
                                    </td>
                                    <td><div class="status"></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <?php
                    }
                    ?>
                   
                    <?php 
                    if(\Auth::user()->role == ''){
                     ?>
                    <div class="projects">
                        <div class="single-project">
                            <h4>Vendors</h4>
                            <div class="divcont">
                                <div class="progress1"></div>
                            </div>
                        </div>
                        <div class="single-project">
                            <h4>Taxi</h4>
                            <div class="divcont">
                                <div class="progress2"></div>
                            </div>
                        </div>
                        <div class="single-project">
                            <h4>Boda boda</h4>
                            <div class="divcont">
                                <div class="progress3"></div>
                            </div>
                        </div>
                        <div class="single-project">
                            <h4>Small businesses</h4>
                            <div class="divcont">
                                <div class="progress4"></div>
                            </div>
                            <?php
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script type="../js/script.js"></script>
</body>
</html>