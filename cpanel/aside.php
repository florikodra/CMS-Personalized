<?php $user=mysql_query("select * from users where user_id='$session_id'")or die (mysql_error());
$us=mysql_fetch_array($user);?>
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo $us['emer']." ".$us['mbiemer'];?></span>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="dashboard.php"> <span class="nav-label">Dashboard</span> <span class="label label-success pull-right">v.1</span> </a>
            </li>
            <li>
                <a href="home.php"> <span class="nav-label">Home</span> </a>
            </li>


			<li>
                <a href="produkte.php"> <span class="nav-label">Produkte</span> </a>
            </li>
			
			   <li>
                <a href="blog.php"> <span class="nav-label">Blog</span> </a>
            </li>
			  <li>
                <a href="kontakte.php"> <span class="nav-label">Kontakte</span> </a>
            </li>
			 <li>
                <a href="porosi.php"> <span class="nav-label">Porosite</span> </a>
            </li>

        </ul>
    </div>
</aside>