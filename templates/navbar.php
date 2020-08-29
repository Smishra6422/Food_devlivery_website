 


 <div  class="navbar-container">
      <div class="navbar-logo">
        <a>
          <img src="" class="App-logo" alt="logo" />
        </a>
        <a>
          <img src="" alt="Menu_Icon" onClick="" />
        </a>
      </div>
      <div class="navbar-lnks hide-navbar-links">
        <ul class="navbar-item">
          <li class="navbar-item-list">
            <a href="./">Home</a>
          </li>
          <li class="navbar-item-list">
            <a >Veg</a>
          </li>
          <li class="navbar-item-list">
            <a>Non-Veg</a>
          </li>

          <?php
            print_r($_SESSION['userId']);

           ?>

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
            if(isset($_SESSION['userId']) && isset($_SESSION['role'])) {
              echo '<li class="navbar-item-list">
                      <a href="./admin.php">Admin</a>
                    </li>
                    ';
            }

            if(isset($_SESSION['userId']) ) {
              echo '<li class="navbar-item-list">
                      <a href="./logout.php">Logout</a>
                    </li>
                    ';
            }


          ?>
          
        </ul>
      </div>
    </div>