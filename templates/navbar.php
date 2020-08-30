 


 <div  class="navbar-container">
      <div class="navbar-logo">
        <a href="./index.php">
          <img src="assets/loginlogo.svg" class="App-logo" alt="logo" /> 
        </a>
        <a class="menu-toggle-button">
          <img src="assets/menu.svg" alt="Menu_Icon"  />
        </a>
      </div>
      <div class="navbar-lnks hide-navbar-links">
        <ul class="navbar-item">
          <li class="navbar-item-list">
            <a href="./">Home</a>
          </li>
          <li class="navbar-item-list">
            <a href="./veg.php">Veg</a>
          </li>
          <li class="navbar-item-list">
            <a href="./nonveg.php">Non-Veg</a>
          </li>

          

          <?php
            if(!isset($_SESSION['userId'])) {
              echo '<li class="navbar-item-list">
                      <a href="./login.php">Login</a>
                    </li>
                    <li class="navbar-item-list">
                      <a href="./signup.php">Sign up</a>
                    </li>';
            }



          ?>

          <?php
            if( isset($_SESSION['role'])==1) {
              echo '<li class="navbar-item-list">
                      <a href="./admin.php">Admin</a>
                    </li>
                    ';
            }

            if(isset($_SESSION['userId']) ) {
              echo '<li class="navbar-item-list">
                      <a href="./signout.php">Logout</a>
                    </li>
                    ';
            }


          ?>
          
        </ul>
      </div>
    </div>

   