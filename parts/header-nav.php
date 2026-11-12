
<!-- =========================================================================================== -->
<!-- =========================== Main Navigation Bar =========================================== -->
<!-- =========================================================================================== -->

<nav class="navbar navbar-default main-navigation qt-box-shadow">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Zobraziť menu</span>
        <span class="mobile-menu-text">MENU</span>
        <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
      </button>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav">

        <li class="<?php qt_active_if( 'index.php' ); ?>"><a href="index.php"> <i class="fa fa-home"></i> Úvod</a></li>

        <li class="<?php qt_active_if( 'aktuality.php' ); ?>"><a href="aktuality.php"> <i class="fa fa-newspaper-o"></i> Aktuality</a></li>

        <li class="<?php qt_active_if( 'cennik-sluzieb.php' ); ?>"><a href="cennik-sluzieb.php"> <i class="fa fa-gear"></i> Cenník služieb</a></li>

        <li class="dropdown <?php qt_active_if( 'photo-albums-3-col.php', 'zivot-v-domove.php', 'zariadenie-v-domove.php' ); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-camera"></i> Galéria <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'zivot-v-domove.php' ); ?>"><a href="zivot-v-domove.php">Život v domove</a></li>
            <li class="<?php qt_active_if( 'zariadenie-v-domove.php' ); ?>"><a href="zariadenie-v-domove.php"> Zariadenie v domove </a></li>
          </ul>
        </li>

        <li class="<?php qt_active_if( 'sluzby.php' ); ?>"><a href="sluzby.php"> <i class="fa fa-home"></i> Služby </a></li>

        <li class="<?php qt_active_if( 'contact-us.php' ); ?>"><a href="contact-us.php">Kontakt</a></li>

        <li class="<?php qt_active_if( 'caste-otazky.php' ); ?>"><a href="caste-otazky.php"> <i class="fa fa-info-circle"></i> Časté otázky </a></li>

      </ul>

    </div><!--/.nav-collapse -->

  </div>
</nav>
