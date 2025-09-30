<div id="main-menu" style="background: #595559;">
    <header id="header" class="inner-page">
        <div class="top-header default clearfix">
            <div class="mobile_only_text">Полотенцесушители в Калининграде</div>
            <div class="mobile_only_phone"><a href="tel:+74012520451">+7 (4012) 52-04-51</a></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-8 col-sm-3 col-md-4 col-lg-4 logo">
                        <div class="pull-left hidden-xs">
                            <a href="/" title="">
                                <?php if ( qtranxf_getLanguage() == 'ru' ):?>
                                <img src="/img/logo-ru.svg" class="adaptive-logo">
<!--                                <img src="/img/marze-ng.svg" class="adaptive-logo">-->
                                <?php elseif ( qtranxf_getLanguage() == 'en' ):?>
                                <img src="/img/logo-en.svg" class="adaptive-logo">
                                <?php elseif ( qtranxf_getLanguage() == 'pl' ):?>
                                <img src="/img/logo-pl.svg" class="adaptive-logo">
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="pull-left visible-xs">
                            <a href="/" title="">
                                <img src="/img/logo-small.png" class="adaptive-logo-small">
<!--                                <img src="/img/marze-ng.png" class="adaptive-logo-small">-->
                            </a>
                            <?php qtranxf_generateLanguageSelectCode('image', 'language'); ?>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-8 col-md-7 col-lg-7 burger">

                        <!-- NAV -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a href="tel:+74012520451" class="header_phone">+7 (4012) 52-04-51</a>
                        <nav class="navbar-collapse collapse" id="bs-example-navbar-collapse-2">
                            <div class="navbar" role="navigation">
                                <div class="inline">
                                    <?php
                                        $args = array(
                                            'theme_location'  => 'primary',
                                            'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'inline',
                                            'container_id'    => '',
                                            'menu_class'      => 'menu',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul class="nav pull-right"">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'	=>	new My_theme_menu_walker()
                                        );
                                    wp_nav_menu( $args ); ?>
                                </div>
                                <!--/.nav-collapse -->
                                <a class="close cross" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"></a>



                            </div>
                        </nav>
                        <!-- NAV -->

                    </div>

                    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 cart">
                        <div id="search-logo">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.0041 17.0041C19.744 14.2643 19.744 9.82211 17.0041 7.08225C14.2643 4.3424 9.82211 4.3424 7.08225 7.08225C4.3424 9.82211 4.3424 14.2643 7.08225 17.0041C9.82211 19.744 14.2643 19.744 17.0041 17.0041Z" stroke="white" stroke-width="3"/>
                                <path d="M17.5039 19.4782L19.4786 17.5035L24.9092 22.934C25.4545 23.4793 25.4545 24.3634 24.9092 24.9087C24.3639 25.4541 23.4798 25.4541 22.9344 24.9087L17.5039 19.4782Z" fill="white"/>
                            </svg>
<!--                            <div id="search-product-all">-->
<!--                                --><?php //echo do_shortcode('[smart_search id="1"]') ?>
<!--                            </div>-->

                            <form id="search-product-all" name="search-form" method="get" action="/search/">
                                <input id="name-product" name="title-product" type="text" placeholder="Введите навзание товара" value="<?= ($_GET['title-product'] && $_GET['title-product'] !== '')? $_GET['title-product'] :''?>">
                                <button type="submit">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.0041 17.0041C19.744 14.2643 19.744 9.82211 17.0041 7.08225C14.2643 4.3424 9.82211 4.3424 7.08225 7.08225C4.3424 9.82211 4.3424 14.2643 7.08225 17.0041C9.82211 19.744 14.2643 19.744 17.0041 17.0041Z" stroke="#ea9314" stroke-width="3"/>
                                        <path d="M17.5039 19.4782L19.4786 17.5035L24.9092 22.934C25.4545 23.4793 25.4545 24.3634 24.9092 24.9087C24.3639 25.4541 23.4798 25.4541 22.9344 24.9087L17.5039 19.4782Z" fill="#ea9314"/>
                                    </svg>
                                </button>



                            </form>
                        </div>
                        <div id="mf-mini-cart-wrapper">
                            <div id="mf-mini-cart">
                                <a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Перейти в корзину' ); ?>">
                                    <div class="mf-mini-cart-total">
                                        <div class="mf-mini-cart-ico"><?php echo (WC()->cart->cart_contents_count ); ?></div>
                                    </div>
                                </a>
                                <div class="cart-total">
                                    <div class="summ">
                                        <?php echo sprintf (_n( '%d [:ru]товар[:en]Item[:pl]towary[:]', '%d [:ru]товаров[:en]Items[:pl]towarów[:]', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?><br>
                                        На сумму: <?php echo WC()->cart->get_cart_total(); ?>
                                    </div>
                                    <div class="cart-button">
                                        <a href="<?php echo WC()->cart->get_cart_url(); ?>">
                                            <?php
                                                if ( qtranxf_getLanguage() == 'ru' ) {
                                                echo 'Корзина';
                                                } elseif ( qtranxf_getLanguage() == 'en' ) {
                                                echo 'Cart';
                                                } elseif ( qtranxf_getLanguage() == 'pl' ) {
                                                echo 'Koszyk';
                                                }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="cart-button">
                                        <a href="<?php echo WC()->cart->get_checkout_url(); ?>">
                                            <?php
                                                if ( qtranxf_getLanguage() == 'ru' ) {
                                                echo 'Оформить заказ';
                                                } elseif ( qtranxf_getLanguage() == 'en' ) {
                                                echo 'Submit your order';
                                                } elseif ( qtranxf_getLanguage() == 'pl' ) {
                                                echo 'Złóż zamówienie';
                                                }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
   </header>
</div>

