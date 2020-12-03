<?php include ('dbcon.php');
include ('session.php');?>
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            DuarArtat Pannel 
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">DuarArtat APP</span>
        </div>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="index.php" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="logout.php" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="change.php" href="profile.html">Change Password</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>


                                <td>
                                    <a href="change.php">
                                        <i class="pe pe-7s-lock text-success"></i>
                                        <h5>Password</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <a href="search_produkt.php">
                                        <i class="pe pe-7s-search text-success"></i>
                                        <h5>Kerko Produkt</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="logout.php">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>