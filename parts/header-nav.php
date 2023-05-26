
<!-- =========================================================================================== -->
<!-- =========================== Main Navigation Bar =========================================== -->
<!-- =========================================================================================== -->

<nav class="navbar navbar-default main-navigation qt-box-shadow">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="mobile-menu-text">MENU</span>
        <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
      </button>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav">

        <li class="dropdown <?php

          qt_active_if(
            'index.php'
          );

        ?>">
          <li class="<?php qt_active_if( 'index.php' ); ?>"><a href="index.php"> <i class="fa fa-home"></i> Úvod</a></li>

        </li>

          <li class="dropdown <?php

          qt_active_if(
              'aktuality.php'
          );

          ?>">
          <li class="<?php qt_active_if( 'aktuality.php' ); ?>"><a href="aktuality.php"> <i class="fa fa-newspaper-o"></i> Aktuality</a></li>
          </li>



        <li class="<?php qt_active_if( 'cennik-sluzieb.php' ); ?>"><a href="cennik-sluzieb.php"> <i class="fa fa-gear"></i> Cenník služieb</a></li>




<!--          <li class="dropdown --><?php
//
//          qt_active_if(
//            'portfolio-2-col.php',
//            'portfolio-3-col.php',
//            'portfolio-single-item-1.php',
//            'portfolio-single-item-2.php'
//          );
//
//        ?><!--">-->
<!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-folder-open"></i> Portfolio <b class="caret"></b></a>-->
<!--          <ul class="dropdown-menu">-->
<!--            <li class="--><?php //qt_active_if( 'portfolio-2-col.php' ); ?><!--"><a href="portfolio-2-col.php">2 Columns Portfolio</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'portfolio-3-col.php' ); ?><!--"><a href="portfolio-3-col.php">3 Columns Portfolio</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'portfolio-single-item-1.php' ); ?><!--"><a href="portfolio-single-item-1.php">Portfolio Single Item 1</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'portfolio-single-item-2.php' ); ?><!--"><a href="portfolio-single-item-2.php">Portfolio Single Item 2</a></li>-->
<!--          </ul>-->
<!--        </li>-->

        <li class="dropdown <?php

          qt_active_if(
            'photo-albums-2-col.php',
            'photo-albums-3-col.php',
            'zivot-v-domove.php',
            'zariadenie-v-domove.php'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-camera"></i> Galéria <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li class="<?php qt_active_if( 'zivot-v-domove.php' ); ?>"><a href="zivot-v-domove.php">Život v domove</a></li>
              <li class="<?php qt_active_if( 'zariadenie-v-domove.php' ); ?>"><a href="zariadenie-v-domove.php"> Zariadenie v domove </a></li>
<!--            <li class="--><?php //qt_active_if( 'photo-albums-3-col.php' ); ?><!--"><a href="photo-albums-3-col.php"> 3 Columns Photo Albums</a></li>-->
          </ul>
        </li>

          <li class="dropdown <?php

          qt_active_if(
              'sluzby.php'
          );

          ?>">
          <li class="<?php qt_active_if( 'sluzby.php' ); ?>"><a href="sluzby.php"> <i class="fa fa-home"></i> Služby </a></li>

          </li>


<!--          <li class="dropdown --><?php
//
//          qt_active_if(
//            'blog-listing-1.php',
//            'blog-listing-2.php',
//            'blog-single-post.php'
//          );
//
//        ?><!--">-->
<!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-calendar"></i> Blog <b class="caret"></b></a>-->
<!--          <ul class="dropdown-menu">-->
<!--            <li class="--><?php //qt_active_if( 'blog-listing-1.php' ); ?><!--"><a href="blog-listing-1.php">All Posts Listing & Archive 1</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'blog-listing-2.php' ); ?><!--"><a href="blog-listing-2.php">All Posts Listing & Archive 2</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'blog-single-post.php' ); ?><!--"><a href="blog-single-post.php">Single Post Item</a></li>-->
<!--          </ul>-->
<!--        </li>-->

        <li class="dropdown <?php

          qt_active_if(
            'contact-us.php',
            'contact-us-2.php'
          );

        ?>">
          <li class="<?php qt_active_if( 'contact-us.php' ); ?>"><a href="contact-us.php">Kontakt</a></li>
<!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i> Kontakt <b class="caret"></b></a>-->
<!--          <ul class="dropdown-menu">-->
<!--            <li class="--><?php //qt_active_if( 'contact-us.php' ); ?><!--"><a href="contact-us.php">Kontakt</a></li>-->
<!--            <li class="--><?php //qt_active_if( 'contact-us-2.php' ); ?><!--"><a href="contact-us-2.php">Contact Version 2</a></li>-->
<!--          </ul>-->
<!--        </li>-->

<!--        <li class="dropdown --><?php
//
//          qt_active_if(
//            'pricing-tables.php',
//            '404.php'
//          );
//
//        ?><!--">-->
<!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-navicon"></i> Others <b class="caret"></b></a>-->
<!--          <ul class="dropdown-menu">-->
<!--            <li class="--><?php //qt_active_if( 'pricing-tables.php' ); ?><!--"><a href="pricing-tables.php">Pricing Tables</a></li>-->
<!--            <li class="--><?php //qt_active_if( '404.php' ); ?><!--"><a href="404.php">404 Error Page</a></li>-->
<!--          </ul>-->
<!--        </li>-->
<!---->
<!---->
<!--          </li>-->

          <li class="dropdown <?php

          qt_active_if(
              'caste-otazky.php'
          );

          ?>">
          <li class="<?php qt_active_if( 'caste-otazky.php' ); ?>"><a href="caste-otazky.php"> <i class="fa fa-info-circle"></i> Časté otázky </a></li>
          </li>




      </ul>

    </div><!--/.nav-collapse -->

  </div>
</nav>