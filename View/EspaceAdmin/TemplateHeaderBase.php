




            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="AdminProfile.php">Bonjour Admin   <?php if(isset($_SESSION['login'])){echo "[".$_SESSION['login']."]";}  ?></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">


                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i style="zoom:3" class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="AdminProfile.php">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Deconnexion.php">Se deconnecter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>









