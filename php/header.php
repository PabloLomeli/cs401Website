<?php
	
?>

<a href="php/login.php" class="linkStyle">Login</a> | <a href="php/logout.php" class="linkStyle">Logout</a>
<span><p class="loginUser">Welcome, 
<?php
	if (isset($_SESSION['currentUser'])) {
      echo $_SESSION['currentUser'];
    }
?>
</p></span>

<header class="fluid hero heroHeader"> 
	
    <!--Add you logo here-->
    <img id="" src="images/logo.png" alt=""/>
	
    <!-- The navigation links-->
    <nav class="fluid topNav">
      <ul class="fluid fluidList topNavUl" name="topNavListBox">
        <li class="fluid topNavLI"><strong><a href="index.php" class="linkStyle" title="Nav Link">Home</a></strong></li>
        
        <li class="fluid topNavLI"><strong><a href="update.php" class="linkStyle" title="Nav Link">Update</a></strong></li>
        
        <li class="fluid topNavLI"><strong><a href="maps.php" class="linkStyle" title="Nav Link">Maps</a></strong></li>
        
        <li class="fluid topNavLI"><strong><a href="tips.php" class="linkStyle" title="Nav Link">Tips</a></strong></li>
        
        <li class="fluid topNavLI"><strong><a href="builds.php" class="linkStyle" title="Nav Link">Builds</a></strong></li>
      </ul>

    </nav>
    
    <h1 class="fluid mainHeading headingStyle">NEW TO EFT?</h1>
    <h6 class="fluid mainTagline textStyle">Welcome to NewToEFT, where all your noob needs are met!</h6>
	
  </header>