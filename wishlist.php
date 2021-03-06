<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0">
  <!-- styles -->
  <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
  <link rel="stylesheet" href="css/vendor/simple-line-icons.css">
  <link rel="stylesheet" href="css/vendor/magnific-popup.css">
  <link rel="stylesheet" href="css/style.min.css">
  <!-- favicon -->
  <link rel="icon" href="favicon.ico">
    <?php
    echo '<title>PC WORLDZ | Wishlist</title>';
    echo '';
    ?>
</head>
<body>

  <!-- FORM POPUP -->
  <div id="login-popup" class="form-popup medium mfp-hide">
    <?php
    echo '<!-- CLOSE BTN -->';
    echo '<svg class="svg-cross medium close-btn">';
    echo '<use xlink:href="#svg-cross"></use>';
    echo '</svg>';
    echo '<!-- /CLOSE BTN -->';
    ?>

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <?php
      echo '<h2 class="subsection-title medium">Register now!</h2>';
      echo '<hr class="line-separator">';
      echo '<p class="small">Fill all the requirements on the space provided.</p>';
      echo '<!-- FORM -->';
      echo '<form>';
      ?>
        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="email" class="rl-label">Email</label>';
          echo '<input type="text" id="email" name="email" placeholder="Enter your email...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="password" class="rl-label">Password</label>';
          echo '<input type="password" id="password" name="password" placeholder="Enter your password...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row separated">
          <?php
          echo '<button class="button dark full">Register to PC WORLDZ!</button>';
          ?>
        </div>
        <!-- /FORM ROW -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /FORM POPUP COLUMN -->

    <!-- FORM POPUP COLUMN SEPARATOR -->
    <div class="form-popup-column-separator"></div>
    <!-- /FORM POPUP COLUMN SEPARATOR -->

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <?php
      echo '<h2 class="subsection-title medium">Login to PC WORLDZ</h2>';
      echo '<hr class="line-separator">';
      ?>
      <!-- FORM -->
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="username" class="rl-label">Username</label>';
          echo '<input type="text" id="username" name="username" placeholder="Enter your username...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="password2" class="rl-label">Password</label>';
          echo '<input type="password" id="password2" name="password2" placeholder="Enter your password...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<!-- CHECKBOX -->';
          echo '<input type="checkbox" id="keep_logged" name="keep_logged" checked>';
          echo '<label class="checkbox" for="keep_logged">';
          echo '<span class="box">';
          echo '<!-- SVG CHECK -->';
          echo '<svg class="svg-check">';
          echo '<use xlink:href="#svg-check"></use>';
          echo '</svg>';
          echo '<!-- /SVG CHECK -->';
          echo '</span>';
          echo 'Keep me logged in';
          echo '</label>';
          echo '<!-- /CHECKBOX -->';
          echo '';
          echo '<a href="#" class="link">Forgot password?</a>';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row short-space separated">
          <?php
          echo '<button class="button full">Login to your Account</button>';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <div class="half">
            <?php
            echo '<a href="#" class="button blue full">Facebook Login</a>';
            ?>
          </div>
          <div class="half">           
            <?php
            echo '<a href="#" class="button blue full">Facebook Login</a>';
            ?>
          </div>
        </div>
        <!-- /FORM ROW -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /FORM POPUP COLUMN -->
  </div>
  <!-- /FORM POPUP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap widget-line-1">
    <!-- WIDGET LINE -->
    <div class="widget-line">
      <?php
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list left">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<!-- SOCIAL LINK -->';
      ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-facebook"></i>';
            echo '</a>';
            ?>
          </div>
          <!-- /SOCIAL LINK -->
            <?php
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            ?>
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-twitter"></i>';
            echo '</a>';
            ?>
          </div>
          <!-- /SOCIAL LINK -->
            <?php
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            ?>
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-google-plus"></i>';
            echo '</a>';
            ?>
          </div>
          <!-- /SOCIAL LINK -->
            <?php
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            ?>
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-rss"></i>';
            echo '</a>';
            ?>
          </div>
          <!-- /SOCIAL LINK -->
            <?php
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            ?>
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-vimeo"></i>';
            echo '</a>';
            ?>
          </div>
          <!-- /SOCIAL LINK -->
            <?php
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '</ul>';
            echo '<!-- ACTIONS LIST -->';
            echo '';
            echo '<!-- ACTIONS LIST -->';
            echo '<ul class="actions-list right">';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<a class="action-button options-dropdown dropdown-control click-closable" href="#">';
            echo '<span class="language-selected-option">eng</span>';
            echo '<!-- SVG ARROW -->';
            echo '<svg class="svg-arrow small face-down">';
            echo '<use xlink:href="#svg-arrow"></use>';
            echo '</svg>';
            echo '<!-- /SVG ARROW -->';
            echo '</a>';
            echo '';
            echo '<!-- DROPDOWN LIST -->';
            echo '<ul class="dropdown-list dropdown">';
            echo '<li data-language="eng" class="dropdown-list-item language-option selected">';
            echo '<a href="#">eng</a>';
            echo '</li>';
            echo '<li data-language="spa" class="dropdown-list-item language-option">';
            echo '<a href="#">spa</a>';
            echo '</li>';
            echo '<li data-language="ger" class="dropdown-list-item language-option">';
            echo '<a href="#">ger</a>';
            echo '</li>';
            echo '</ul>';
            echo '<!-- /DROPDOWN LIST -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<a class="action-button options-dropdown dropdown-control click-closable" href="#">';
            echo '<span class="currency-selected-option">usd</span>';
            echo '<!-- SVG ARROW -->';
            echo '<svg class="svg-arrow small face-down">';
            echo '<use xlink:href="#svg-arrow"></use>';
            echo '</svg>';
            echo '<!-- /SVG ARROW -->';
            echo '</a>';
            echo '';
            echo '<!-- DROPDOWN LIST -->';
            echo '<ul class="dropdown-list dropdown">';
            echo '<li data-currency="usd" class="dropdown-list-item currency-option selected">';
            echo '<a href="#">usd</a>';
            echo '</li>';
            echo '<li data-currency="euro" class="dropdown-list-item currency-option">';
            echo '<a href="#">euro</a>';
            echo '</li>';
            echo '</ul>';
            echo '<!-- /DROPDOWN LIST -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<a class="action-button" href="profile.php">My Account</a>';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<a class="action-button" href="wishlist.php">Wishlist<span class="bold">4</span></a>';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<a class="action-button" href="index.php">Logout</a>';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SEARCH FORM -->';
            echo '<form class="search-form">';
            echo '<input type="text" name="search" autocomplete="off" placeholder="Search products here...">';
            ?>
            <!-- SEARCH SUBMIT -->
            <div class="search-submit">
              <?php
              echo '<!-- SVG MAG GLASS -->';
              echo '<svg class="svg-mag-glass">';
              echo '<use xlink:href="#svg-mag-glass"></use>';
              echo '</svg>';
              echo '<!-- /SVG MAG GLASS -->';
              ?>
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
              <?php
              echo '<!-- /SEARCH CANCEL -->';
              echo '</form>';
              echo '<!-- /SEARCH FORM -->';
              echo '</li>';
              echo '<!-- ACTIONS LIST ITEM -->';
              echo '</ul>';
              echo '<!-- ACTIONS LIST -->';
              ?>
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap widget-line-2">
    <!-- WIDGET LINE -->
    <div class="widget-line">
      <?php
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item full void">';
      echo '<!-- SEARCH FORM -->';
      echo '<form class="search-form">';
      echo '<input type="text" name="search" autocomplete="off" placeholder="Search products here...">';
      echo '<!-- SEARCH SUBMIT -->';
      ?>
            <div class="search-submit">
              <?php
              echo '<!-- SVG MAG GLASS -->';
              echo '<svg class="svg-mag-glass">';
              echo '<use xlink:href="#svg-mag-glass"></use>';
              echo '</svg>';
              echo '<!-- /SVG MAG GLASS -->';
              ?>
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
              <?php
              echo '<!-- /SEARCH CANCEL -->';
              echo '</form>';
              echo '<!-- /SEARCH FORM -->';
              echo '</li>';
              echo '<!-- ACTIONS LIST ITEM -->';
              echo '</ul>';
              echo '<!-- ACTIONS LIST -->';
              ?>
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- NAVIGATION WRAP -->
  <div class="navigation-wrap">
    <?php
    echo '<!-- NAVIGATION -->';
    echo '<nav class="navigation">';
    echo '<!-- LOGO -->';
    echo '<figure class="logo">';
    echo '<img src="img/logo.png" alt="logo">';
    echo '<figcaption>PC WORLDZ</figcaption>';
    echo '</figure>';
    echo '<!-- /LOGO -->';
    ?>

      <!-- CART DROPDOWN WRAP -->
      <div class="cart-dropdown-wrap">
        <!-- CART DROPDOWN CONTROL -->
        <div class="cart-dropdown-control">
          <?php
          echo '<!-- SVG CART -->';
          echo '<svg class="svg-cart">';
          echo '<use xlink:href="#svg-cart"></use>';
          echo '</svg>';
          echo '<!-- /SVG CART -->';
          echo '';
          echo '<!-- SVG CROSS -->';
          echo '<svg class="svg-cross medium hidden">';
          echo '<use xlink:href="#svg-cross"></use>';
          echo '</svg>';
          echo '<!-- /SVG CROSS -->';
          ?>

          <!-- CART ITEM QUANTITY -->
          <div class="cart-item-quantity">
            <?php
            echo '<p>3</p>';
            echo '';
            ?>          
          </div>
          <!-- /CART ITEM QUANTITY -->
        </div>
        <!-- /CART DROPDOWN CONTROL -->

        <!-- CART DROPDOWN -->
        <div class="cart-dropdown">
          <!-- CART DROPDOWN ITEMS -->
          <div class="cart-dropdown-items">
            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <!-- PRODUCT IMG -->
              <?php
              echo '<a href="#">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/01.png" alt="02">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?>

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?>
              </h6></a>
                <?php
                echo '<p class="product-description small">Gaming</p>';
                echo '<!-- RATING -->';
                echo '<ul class="rating small">';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '</ul>';
                echo '<!-- /RATING -->';
                echo '<p class="product-quantity">x4</p>';
                echo '<p class="product-price"><br><br>';
                echo '???233,848';
                echo '</p>';
                ?>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <?php
              echo '<!-- PRODUCT IMG -->';
              echo '<a href="#">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/02.png" alt="06">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?>

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->name;
              ?>
              </h6></a>
                <?php
                echo '<p class="product-description small">Gaming</p>';
                echo '<!-- RATING -->';
                echo '<ul class="rating small">';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '</ul>';
                echo '<!-- /RATING -->';
                echo '<p class="product-quantity">x2</p>';
                echo '<p class="product-price"><br><br>';
                echo '???57,032';
                echo '</p>';
                ?>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <?php
              echo '<!-- PRODUCT IMG -->';
              echo '<a href="#">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/03.png" alt="05">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?>

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->name;
              ?>
                </h6></a>
                  <?php
                  echo '<p class="product-description small">Gaming</p>';
                  echo '<!-- RATING -->';
                  echo '<ul class="rating small">';
                  echo '<!-- RATING ITEM -->';
                  echo '<li class="rating-item filled">';
                  echo '<!-- SVG STAR -->';
                  echo '<svg class="svg-star">';
                  echo '<use xlink:href="#svg-star"></use>';
                  echo '</svg>';
                  echo '<!-- /SVG STAR -->';
                  echo '</li>';
                  echo '<!-- /RATING ITEM -->';
                  echo '';
                  echo '<!-- RATING ITEM -->';
                  echo '<li class="rating-item filled">';
                  echo '<!-- SVG STAR -->';
                  echo '<svg class="svg-star">';
                  echo '<use xlink:href="#svg-star"></use>';
                  echo '</svg>';
                  echo '<!-- /SVG STAR -->';
                  echo '</li>';
                  echo '<!-- /RATING ITEM -->';
                  echo '';
                  echo '<!-- RATING ITEM -->';
                  echo '<li class="rating-item filled">';
                  echo '<!-- SVG STAR -->';
                  echo '<svg class="svg-star">';
                  echo '<use xlink:href="#svg-star"></use>';
                  echo '</svg>';
                  echo '<!-- /SVG STAR -->';
                  echo '</li>';
                  echo '<!-- /RATING ITEM -->';
                  echo '';
                  echo '<!-- RATING ITEM -->';
                  echo '<li class="rating-item filled">';
                  echo '<!-- SVG STAR -->';
                  echo '<svg class="svg-star">';
                  echo '<use xlink:href="#svg-star"></use>';
                  echo '</svg>';
                  echo '<!-- /SVG STAR -->';
                  echo '</li>';
                  echo '<!-- /RATING ITEM -->';
                  echo '';
                  echo '<!-- RATING ITEM -->';
                  echo '<li class="rating-item">';
                  echo '<!-- SVG STAR -->';
                  echo '<svg class="svg-star">';
                  echo '<use xlink:href="#svg-star"></use>';
                  echo '</svg>';
                  echo '<!-- /SVG STAR -->';
                  echo '</li>';
                  echo '<!-- /RATING ITEM -->';
                  echo '</ul>';
                  echo '<!-- /RATING -->';
                  echo '<p class="product-quantity">x1</p>';
                  ?>
                <p class="product-price"> <br><br>             
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?>
                </p>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->
          </div>
          <!-- CART DROPDOWN ITEMS -->

          <!-- CART DROPDOWN SUBTOTAL -->
          <div class="cart-dropdown-subtotal">
            <?php
            echo '<p class="title small">Cart Subtotal</p>';
            echo '<p class="product-price">???303,827</p>';
            ?>
          </div>
          <!-- /CART DROPDOWN SUBTOTAL -->

          <!-- CART DROPDOWN ACTIONS -->
          <div class="cart-dropdown-actions">
            <?php
            echo '<a href="cart.php" class="button dark large">Go to the Cart</a>';
            echo '<a href="identification.php" class="button large">Go to Checkout</a>';
            ?>
          </div>
          <!-- /CART DROPDOWN ACTIONS -->
        </div>
        <!-- /CART DROPDOWN -->
      </div>
      <!-- /CART DROPDOWN WRAP -->

        <?php
        echo '<!-- MAIN MENU -->';
        echo '<ul class="main-menu">';
        echo '<!-- MAIN MENU ITEM -->';
        echo '<li class="main-menu-item">';
        echo '<a href="home.php">Home</a>';
        echo '</li>';
        echo '<!-- /MAIN MENU ITEM -->';
        echo '';
        echo '<!-- MAIN MENU ITEM -->';
        echo '<li class="main-menu-item">';
        echo '<a href="aboutus.php">About</a>';
        echo '</li>';
        echo '<!-- /MAIN MENU ITEM -->';
        echo '';
        echo '<!-- MAIN MENU ITEM -->';
        echo '<li class="main-menu-item">';
        echo '<a href="#">';
        echo 'Shop';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow face-down">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '<!-- MENU DROPDOWN -->';
        echo '<ul class="menu-dropdown">';
        echo '<!-- MENU DROPDOWN ITEM -->';
        echo '<li class="menu-dropdown-item">';
        echo '<a href="shop-list.php">Motherboards</a>';
        echo '</li>';
        echo '<li class="menu-dropdown-item">';
        echo '<a href="shop-list2.php">Processors</a>';
        echo '</li>';
        echo '<li class="menu-dropdown-item">';
        echo '<a href="shop-list3.php">Graphic Cards</a>';
        echo '</li>';
        echo '';
        echo '</li>';
        echo '';
        echo '</ul>';
        echo '<!-- /MENU DROPDOWN -->';
        echo '</li>';
        echo '<!-- /MAIN MENU ITEM -->';
        echo '';
        echo '<!-- MAIN MENU ITEM -->';
        echo '<li class="main-menu-item">';
        echo '<a href="blog.php">Our Blog</a>';
        echo '</li>';
        echo '<!-- /MAIN MENU ITEM -->';
        echo '';
        echo '<!-- MAIN MENU ITEM -->';
        echo '<li class="main-menu-item sub">';
        echo '<a href="#">';
        echo 'Features';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow face-down">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        ?>

          <!-- CONTENT DROPDOWN -->
          <div class="content-dropdown with-bg">
            <!-- CONTENT DROPDOWN COLUMN -->
            <div class="content-dropdown-column">
              <?php
              echo '<h6 class="title tiny secondary">Account</h6>';
              echo '<hr class="line-separator">';
              echo '<!-- LINK LIST -->';
              echo '<ul class="link-list simple">';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="home.php">Identification</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="billing-shipping.php">Billing and Shipping</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="confirmation.php">Confirmation</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="cart.php">Shopping Cart</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="wishlist.php">Wishlist</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '';
              echo '<!-- LINK LIST ITEM -->';
              echo '<li class="link-list-item">';
              echo '<a href="profile.php">Your Account</a>';
              echo '</li>';
              echo '<!-- /LINK LIST ITEM -->';
              echo '</ul>';
              echo '<!-- /LINK LIST -->';
              ?>
            </div>
            <!-- /CONTENT DROPDOWN COLUMN -->
          </div>
          <!-- /CONTENT DROPDOWN -->
            <?php
            echo '</li>';
            echo '<!-- /MAIN MENU ITEM -->';
            echo '';
            echo '<!-- MAIN MENU ITEM -->';
            echo '<li class="main-menu-item">';
            echo '<a href="contactus.php">Contact</a>';
            echo '</li>';
            echo '<!-- /MAIN MENU ITEM -->';
            echo '</ul>';
            echo '<!-- /MAIN MENU -->';
            echo '</nav>';
            echo '<!-- /NAVIGATION -->';
            ?>
  </div>
  <!-- /NAVIGATION WRAP -->

  <!-- MOBILE MENU WRAP -->
  <div class="mobile-menu-wrap">
    <!-- MOBILE MENU CONTROL -->
    <div class="mobile-menu-control dropdown-control">
      <?php
      echo '<!-- SVG BURGER -->';
      echo '<svg class="svg-burger">';
      echo '<use xlink:href="#svg-burger"></use>';
      echo '</svg>';
      echo '<!-- /SVG BURGER -->';
      ?>
    </div>
    <!-- /MOBILE MENU CONTROL -->

      <?php
      echo '<!-- MOBILE MENU -->';
      echo '<ul class="mobile-menu dropdown">';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="index.php">Home</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="aboutus.php">About</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Shop';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Motherboards</a>';
      echo '</li>';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Processors</a>';
      echo '</li>';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Graphic Cards</a>';
      echo '</li>';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="blog.php">Our Blog</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Features';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="identification.php">Identification</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="billing-shipping.php">Billing and Shipping</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="confirmation.php">Confirmation</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="cart.php">Shopping Cart</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="wishlist.php">Wishlist</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="profile.php">Your Account</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="contactus.php">Contact</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="profile.php">My Account</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="wishlist.php">';
      echo 'Wishlist';
      echo '<span class="bold">4</span>';
      echo '</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Language:';
      echo '<span class="selected-option language-selected-option">eng</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="eng" class="mobile-menu-dropdown-item language-option selected">';
      echo '<a href="#">eng</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="spa" class="mobile-menu-dropdown-item language-option">';
      echo '<a href="#">spa</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="ger" class="mobile-menu-dropdown-item language-option">';
      echo '<a href="#">ger</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Currency:';
      echo '<span class="selected-option currency-selected-option">usd</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-currency="usd" class="mobile-menu-dropdown-item currency-option selected">';
      echo '<a href="#">usd</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-currency="euro" class="mobile-menu-dropdown-item currency-option">';
      echo '<a href="#">euro</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item void">';
      echo '<a href="#">Logout</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU -->';
      ?>
  </div>
  <!-- /MOBILE MENU WRAP -->

  <!-- SECTION NAVIGATION WRAP -->
  <div class="section-navigation-wrap">
    <!-- SECTION NAVIGATION -->
    <div class="section-navigation">
      <?php
      echo '<!-- SECTION NAVIGATION PATH -->';
      echo '<p class="section-navigation-path">';
      echo '<span class="path">Home</span>';
      echo '<span class="path">';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow tiny">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</span>';
      echo '<span class="path">Shop</span>';
      echo '<span class="path bold">';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow tiny">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</span>';
      echo '<span class="path current">Wishlist</span>';
      echo '</p>';
      ?>
      <!-- SECTION NAVIGATION PATH -->
    </div>
    <!-- /SECTION NAVIGATION -->
  </div>
  <!-- /SECTION NAVIGATION WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <div class="section no-title">
      <?php
      echo '<h2 class="subsection-title">Your Wishlist</h2>';
      echo '<hr class="line-separator">';
      ?>

      <!-- PRODUCT TABLE -->
      <div class="product-table">
        <!-- PRODUCT TABLE HEADER -->
        <div class="product-table-header">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <?php
            echo '<h6 class="title">Product Photo</h6>';
            echo '';
            ?>          
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
           <?php
            echo '<h6 class="title">Product Name</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <?php
            echo '<h6 class="title">Description</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <?php
            echo '<h6 class="title">Price</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE QUANTITY -->
          <div class="product-table-availability">
            <?php
            echo '<h6 class="title">Availability</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE QUANTITY -->

          <!-- PRODUCT TABLE TOTAL -->
          <div class="product-table-actions">
            <?php
            echo '<h6 class="title">Add to Cart</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE TOTAL -->
        </div>
        <!-- /PRODUCT TABLE HEADER -->

        <!-- PRODUCT TABLE ROW -->
        <div class="product-table-row">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <?php
            echo '<!-- PRODUCT IMG -->';
            echo '<a href="#">';
            echo '<figure class="product-img small">';
            echo '<img src="img/products/01.png" alt="product11">';
            echo '</figure>';
            echo '</a>';
            echo '<!-- /PRODUCT IMG -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="#">
              <h6 class="title small"> <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"> <?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE AVAILABILITY -->
          <div class="product-table-availability">
           <?php
            echo '<h6 class="title small">In Stock</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE AVAILABILITY -->

          <!-- PRODUCT TABLE ACTIONS -->
          <div class="product-table-actions">
            <?php
            echo '<!-- BUTTON -->';
            echo '<a href="#" class="button square">';
            echo '<!-- SVG CART -->';
            echo '<svg class="svg-cart-small">';
            echo '<use xlink:href="#svg-cart-small"></use>';
            echo '</svg>';
            echo '<!-- /SVG CART -->';
            echo '</a>';
            echo '<!-- /BUTTON -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE ACTIONS -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <?php
            echo '<!-- SVG CROSS -->';
            echo '<svg class="svg-cross medium">';
            echo '<use xlink:href="#svg-cross"></use>';
            echo '</svg>';
            echo '<!-- /SVG CROSS -->';
            ?>
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->

        <!-- PRODUCT TABLE ROW -->
        <div class="product-table-row">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <?php
            echo '<!-- PRODUCT IMG -->';
            echo '<a href="#">';
            echo '<figure class="product-img small">';
            echo '<img src="img/products/02.png" alt="product06">';
            echo '</figure>';
            echo '</a>';
            echo '<!-- /PRODUCT IMG -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="#">
              <h6 class="title small"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE AVAILABILITY -->
          <div class="product-table-availability">
            <?php
            echo '<h6 class="title small void">Out Of Stock</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE AVAILABILITY -->

          <!-- PRODUCT TABLE ACTIONS -->
          <div class="product-table-actions">
            <?php
            echo '<!-- BUTTON -->';
            echo '<a href="#" class="button square">';
            echo '<!-- SVG CART -->';
            echo '<svg class="svg-cart-small">';
            echo '<use xlink:href="#svg-cart-small"></use>';
            echo '</svg>';
            echo '<!-- /SVG CART -->';
            echo '</a>';
            echo '<!-- /BUTTON -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE ACTIONS -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <?php
            echo '<!-- SVG CROSS -->';
            echo '<svg class="svg-cross medium">';
            echo '<use xlink:href="#svg-cross"></use>';
            echo '</svg>';
            echo '<!-- /SVG CROSS -->';
            ?>
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->

        <!-- PRODUCT TABLE ROW -->
        <div class="product-table-row">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <?php
            echo '<!-- PRODUCT IMG -->';
            echo '<a href="#">';
            echo '<figure class="product-img small">';
            echo '<img src="img/products/03.png" alt="product01">';
            echo '</figure>';
            echo '</a>';
            echo '<!-- /PRODUCT IMG -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="#">
              <h6 class="title small"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE AVAILABILITY -->
          <div class="product-table-availability">
           <?php
            echo '<h6 class="title small">In Stock</h6>';
            ?>
          </div>
          <!-- /PRODUCT TABLE AVAILABILITY -->

          <!-- PRODUCT TABLE ACTIONS -->
          <div class="product-table-actions">
            <?php
            echo '<!-- BUTTON -->';
            echo '<a href="#" class="button square">';
            echo '<!-- SVG CART -->';
            echo '<svg class="svg-cart-small">';
            echo '<use xlink:href="#svg-cart-small"></use>';
            echo '</svg>';
            echo '<!-- /SVG CART -->';
            echo '</a>';
            echo '<!-- /BUTTON -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE ACTIONS -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <?php
            echo '<!-- SVG CROSS -->';
            echo '<svg class="svg-cross medium">';
            echo '<use xlink:href="#svg-cross"></use>';
            echo '</svg>';
            echo '<!-- /SVG CROSS -->';
            ?>
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->

        <!-- PRODUCT TABLE ROW -->
        <div class="product-table-row">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <?php
            echo '<!-- PRODUCT IMG -->';
            echo '<a href="#">';
            echo '<figure class="product-img small">';
            echo '<img src="img/products/04.png" alt="product12">';
            echo '</figure>';
            echo '</a>';
            echo '<!-- /PRODUCT IMG -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="#">
              <h6 class="title small"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[3]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[3]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
             $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[3]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE AVAILABILITY -->
          <div class="product-table-availability">
          <?php
          echo '<h6 class="title small">In Stock</h6>';
          ?>
          </div>
          <!-- /PRODUCT TABLE AVAILABILITY -->

          <!-- PRODUCT TABLE ACTIONS -->
          <div class="product-table-actions">
            <?php
            echo '<!-- BUTTON -->';
            echo '<a href="#" class="button square">';
            echo '<!-- SVG CART -->';
            echo '<svg class="svg-cart-small">';
            echo '<use xlink:href="#svg-cart-small"></use>';
            echo '</svg>';
            echo '<!-- /SVG CART -->';
            echo '</a>';
            echo '<!-- /BUTTON -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE ACTIONS -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <?php
            echo '<!-- SVG CROSS -->';
            echo '<svg class="svg-cross medium">';
            echo '<use xlink:href="#svg-cross"></use>';
            echo '</svg>';
            echo '<!-- /SVG CROSS -->';
            ?>
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->
      </div>
      <!-- /PRODUCT TABLE -->
    </div>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

      <?php
      echo '<!-- FOOTER WRAP -->';
      echo '<footer class="footer-wrap">';
      echo '<!-- FOOTER TOP -->';
      ?>
    <div class="footer-top">
      <!-- ABOUTUS PREVIEW -->
      <div class="aboutus-preview">
        <?php
        echo '<!-- LOGO -->';
        echo '<figure class="logo">';
        echo '<img src="img/logo-footer.png" alt="logo">';
        echo '<figcaption>PC WORLDZ</figcaption>';
        echo '</figure>';
        echo '<!-- /LOGO -->';
        echo '<p class="description">Were dedicated to give you the very best of Computer Products, with a focus on quality, price and uniqueness. Founded in 2022 by Saludo, Peralta and Aquino, PC WORLDZ serves customer worldwide, and are thrilled to be a part of the fair trade wing of the IT industry.</p>';
        echo '';
        echo '<!-- CONTACTUS LIST -->';
        echo '<ul class="contactus-list">';
        echo '<!-- CONTACTUS LIST ITEM -->';
        echo '<li class="contactus-list-item">';
        echo '<i class="s-icon icon-location-pin"></i>';
        echo '<p>Marinduque, PH</p>';
        echo '</li>';
        echo '<!-- /CONTACTUS LIST ITEM -->';
        echo '';
        echo '<!-- CONTACTUS LIST ITEM -->';
        echo '<li class="contactus-list-item">';
        echo '<i class="s-icon icon-envelope"></i>';
        echo '<a href="mailto:info@tricksterhelmets.com" class="link">info@pcworldz.com</a>';
        echo '</li>';
        echo '<!-- /CONTACTUS LIST ITEM -->';
        echo '';
        echo '<!-- CONTACTUS LIST ITEM -->';
        echo '<li class="contactus-list-item">';
        echo '<i class="s-icon icon-phone"></i>';
        echo '<p>044 - 555 - 123 - 1234</p>';
        echo '</li>';
        echo '<!-- /CONTACTUS LIST ITEM -->';
        echo '</ul>';
        echo '<!-- /CONTACTUS LIST -->';
        ?>
      </div>
      <!-- /ABOUTUS PREVIEW -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column">
        <?php
        echo '<h6 class="title small secondary">Sitemap</h6>';
        echo '<hr class="line-separator">';
        echo '<!-- LINK LIST -->';
        echo '<ul class="link-list decorated">';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="home.php">';
        echo 'Home';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="aboutus.php">';
        echo 'About Us';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="shop-grid.php">';
        echo 'Shop';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="blog.php">';
        echo 'Our Blog';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="contactus.php">';
        echo 'Contact';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="profile.php">';
        echo 'Your Account';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'FAQs';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Our Guarantee';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '</ul>';
        echo '<!-- /LINK LIST -->';
        ?>
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column">
        <?php
        echo '<h6 class="title small secondary">Company</h6>';
        echo '<hr class="line-separator">';
        echo '<!-- LINK LIST -->';
        echo '<ul class="link-list decorated">';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Shipping Policy';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'International Shipping';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Affiliates';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Our Sponsors';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Privacy Policy';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Terms and Conditions';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '';
        echo '<!-- LINK LIST ITEM -->';
        echo '<li class="link-list-item">';
        echo '<a href="#">';
        echo 'Pay on Arrival';
        echo '<!-- SVG ARROW -->';
        echo '<svg class="svg-arrow tiny">';
        echo '<use xlink:href="#svg-arrow"></use>';
        echo '</svg>';
        echo '<!-- /SVG ARROW -->';
        echo '</a>';
        echo '</li>';
        echo '<!-- /LINK LIST ITEM -->';
        echo '</ul>';
        echo '<!-- /LINK LIST -->';
        ?>
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column full">
        <?php
        echo '<h6 class="title small secondary">Quick Contact</h6>';
        echo '<hr class="line-separator">';
        echo '<p class="description">You can contact by using our contact number or email us below by using our email info@pcworldz.com</p>';
        echo '<form class="quick-contact-form">';
        echo '<input type="text" class="dark" name="qc_email" placeholder="Email">';
        echo '<textarea name="qc_message" class="dark" placeholder="Message"></textarea>';
        echo '<button class="button small">Send Message</button>';
        echo '</form>';
        ?>
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->
    </div>
    <!-- /FOOTER TOP -->

      <?php
      echo '<!-- FOOTER BOTTOM -->';
      echo '<div class="footer-bottom">';
      echo '<h6 class="title tiny secondary">Payment Methods:</h6>';
      echo '<!-- PAYMENT LIST -->';
      echo '<ul class="payment-list">';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_01.png" alt="card01">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_02.png" alt="card02">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_03.png" alt="card03">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_04.png" alt="card04">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_05.png" alt="card05">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '<li class="payment-list-item">';
      echo '<a href="#">';
      echo '<img src="img/home/card_06.png" alt="card06">';
      echo '</a>';
      echo '</li>';
      echo '<!-- PAYMENT LIST ITEM -->';
      echo '</ul>';
      echo '<!-- /PAYMENT LIST -->';
      ?>
    </div>
    <!-- /FOOTER BOTTOM -->
      <?php
      echo '</footer>';
      echo '<!-- /FOOTER WRAP -->';
      ?>

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap dark widget-line-copy">
    <!-- WIDGET LINE -->
    <div class="widget-line big">
      <?php
      echo '<p class="copyright"><span class="bold">PC WORLDZ</span> | All Rights Reserved 2022</p>';
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list right">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<!-- SOCIAL LINK -->';
      ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-facebook"></i>';
            echo '</a>';
            echo '</div>';
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-twitter"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-google-plus"></i>';
            echo '</a>';
            ?>        
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-rss"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-vimeo"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '</ul>';
            echo '<!-- ACTIONS LIST -->';
            ?>
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

<!-- SVG ICONS -->
  <!-- SVG ARROW -->
  <svg style="display: none;">
  	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
  		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
  			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
  	</symbol>
  </svg>
  <!-- /SVG ARROW -->

  <!-- SVG CHECK -->
  <svg style="display: none;">
    <symbol id="svg-check" viewBox="0 0 20 16" preserveAspectRatio="xMinYMin meet">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.692,3.398L7.764,15.669c-0.412,0.424-1.08,0.424-1.491,0
    	L0.308,9.534C-0.104,9.11-0.104,8.423,0.308,8l1.491-1.534c0.412-0.424,1.08-0.424,1.491,0l3.728,3.834L16.71,0.33
    	c0.412-0.423,1.08-0.423,1.491,0l1.491,1.534C20.104,2.288,20.104,2.975,19.692,3.398z"/>
    </symbol>
  </svg>
  <!-- /SVG CHECK -->

  <!-- SVG MAG GLASS -->
  <svg style="display: none;">
    <symbol id="svg-mag-glass" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
      <path d="M3.094,6.916c-0.275-0.269-0.482-0.573-0.62-0.912C2.336,5.666,2.267,5.32,2.267,4.968
      	c0-0.351,0.069-0.699,0.207-1.041c0.138-0.344,0.345-0.65,0.62-0.92c0.275-0.269,0.587-0.468,0.934-0.599
      	c0.347-0.13,0.702-0.195,1.066-0.195s0.72,0.064,1.067,0.195c0.346,0.131,0.657,0.331,0.933,0.599c0.275,0.27,0.482,0.576,0.62,0.92
      	c0.139,0.342,0.207,0.69,0.207,1.041c0,0.353-0.068,0.698-0.207,1.036c-0.138,0.339-0.345,0.644-0.62,0.912
      	c-0.275,0.27-0.587,0.471-0.933,0.605C5.813,7.657,5.458,7.724,5.094,7.724s-0.72-0.066-1.066-0.202
      	C3.681,7.387,3.369,7.186,3.094,6.916z M1.494,1.443C0.996,1.93,0.622,2.479,0.374,3.092C0.125,3.705,0,4.328,0,4.962
      	s0.125,1.257,0.374,1.87c0.248,0.611,0.622,1.161,1.12,1.648c0.399,0.391,0.844,0.703,1.333,0.938
      	c0.488,0.234,0.995,0.391,1.52,0.469c0.525,0.078,1.052,0.074,1.58-0.013C6.456,9.786,6.961,9.621,7.44,9.379l2.294,2.241
      	c0.133,0.13,0.28,0.226,0.44,0.286c0.159,0.061,0.326,0.091,0.5,0.091c0.173,0,0.34-0.03,0.5-0.091s0.307-0.156,0.439-0.286
      	c0.134-0.13,0.231-0.274,0.293-0.431c0.063-0.156,0.094-0.318,0.094-0.488s-0.031-0.332-0.094-0.488
      	c-0.062-0.157-0.159-0.301-0.293-0.431L9.401,7.619C9.712,7.143,9.93,6.63,10.055,6.082c0.124-0.547,0.157-1.094,0.1-1.641
      	c-0.058-0.547-0.209-1.08-0.453-1.596c-0.245-0.517-0.58-0.983-1.007-1.401C8.196,0.967,7.634,0.605,7.008,0.363
      	C6.381,0.119,5.743-0.003,5.094-0.003S3.808,0.119,3.181,0.363C2.554,0.605,1.991,0.967,1.494,1.443z"/>
    </symbol>
  </svg>
  <!-- /SVG MAG GLASS -->

  <!-- SVG CROSS -->
  <svg style="display: none;">
   <symbol id="svg-cross" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<polygon fill-rule="evenodd" clip-rule="evenodd" points="9.949,1.465 8.535,0.051 5,3.586 1.465,0.051
      			0.051,1.465 3.586,5 0.051,8.535 1.465,9.949 5,6.414 8.535,9.949 9.949,8.535 6.414,5 		"/>
      	</g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG CROSS -->

  <!-- SVG CART -->
  <svg style="display: none;">
   <symbol id="svg-cart" viewBox="0 0 22 18" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M16.991,13.991c-1.106,0-2.003,0.896-2.003,2.003s0.896,2.003,2.003,2.003
      			s2.003-0.896,2.003-2.003S18.098,13.991,16.991,13.991z M8.012,13.991c-1.105,0-2.003,0.896-2.003,2.003s0.897,2.003,2.003,2.003
      			c1.106,0,2.003-0.896,2.003-2.003S9.118,13.991,8.012,13.991z M5,2V1c0-0.552-0.447-1-1-1H1C0.447,0,0,0.448,0,1v1
      			c0,0.553,0.447,1,1,1h2.182L5,13h15l2-11H5z M18.331,11H6.669L5.396,4h14.207L18.331,11z"/>
      	</g>
      </g>
      <rect x="3.734" fill-rule="evenodd" clip-rule="evenodd" width="1.266" height="3"/>
    </symbol>
  </svg>
  <!-- /SVG CART -->

  <!-- SVG CART SMALL -->
  <svg style="display: none;">
    <symbol id="svg-cart-small" viewBox="0 0 16 13" preserveAspectRatio="xMinYMin meet">
      <g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.49,10.012c-0.826,0-1.495,0.669-1.495,1.493
            c0,0.825,0.669,1.494,1.495,1.494s1.495-0.669,1.495-1.494C13.985,10.681,13.316,10.012,12.49,10.012z M5.497,10.012
            c-0.826,0-1.495,0.669-1.495,1.493c0,0.825,0.669,1.494,1.495,1.494c0.825,0,1.495-0.669,1.495-1.494
            C6.992,10.681,6.322,10.012,5.497,10.012z M4,1.001v-1H1c-0.553,0-1,0.448-1,1s0.447,1,1,1h1.25l1.75,7h10l2-8H4z M12.438,7.001
            H5.561l-1-4h8.877L12.438,7.001z"/>
        </g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG CART SMALL -->

  <!-- SVG STAR -->
  <svg style="display: none;">
    <symbol id="svg-star" viewBox="0 0 15 14" preserveAspectRatio="xMinYMin meet">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5-0.002l2.473,4.399L15,5.345l-3.5,3.667l0.636,4.985
    	L7.5,11.863l-4.635,2.134L3.5,9.012L0,5.345l5.028-0.948L7.5-0.002"/>
    </symbol>
  </svg>
  <!-- /SVG STAR -->

  <!-- SVG BURGER -->
  <svg style="display: none;">
    <symbol id="svg-burger" viewBox="0 0 22 14" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M1,2h20c0.553,0,1-0.448,1-1s-0.447-1-1-1H1C0.448,0,0,0.448,0,1
      			S0.448,2,1,2z M21,6H1C0.448,6,0,6.448,0,7c0,0.553,0.448,1,1,1h20c0.553,0,1-0.447,1-1C22,6.448,21.553,6,21,6z M21,12H1
      			c-0.552,0-1,0.447-1,1s0.448,1,1,1h20c0.553,0,1-0.447,1-1S21.553,12,21,12z"/>
      	</g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG BURGER -->
<!-- /SVG ICONS -->

<!-- jQuery -->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- magnificPopup -->
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<!-- imgLiquid -->
<script src="js/vendor/imgLiquid-min.js"></script>
<!-- liquid -->
<script src="js/liquid.js"></script>
<!-- dropdowns -->
<script src="js/dropdowns.js"></script>
<!-- popups -->
<script src="js/popups.js"></script>
</body>
</html>
