<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->

</div><!-- #primary -->
</div><!-- #content -->

<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->
<style>
    /* Footer */
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    section {
        padding: 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #footer {
        background: #007b5e !important;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        margin-left: 5px;
        font-weight: 700;
    }

    #footer ul.quick-links li a i {
        margin-right: 5px;
    }

    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    .footer-navigation {
        margin-top: -40px;
    }

</style>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->
<section id="footer">
    <?php get_template_part('template-parts/footer/footer-widgets'); ?>

    <footer id="colophon" class="site-footer">

        <?php if (has_nav_menu('footer')) : ?>
            <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
                <ul class="footer-navigation-wrapper">
                    <!-- <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'items_wrap'     => '%3$s',
                            'container'      => false,
                            'depth'          => 1,
                            'link_before'    => '<span>',
                            'link_after'     => '</span>',
                            'fallback_cb'    => false,
                        )
                    );
                    ?> -->
                </ul><!-- .footer-navigation-wrapper -->
            </nav><!-- .footer-navigation -->
        <?php endif; ?>
        <!-- Footer -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/trieu.hota/"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/trieu.hota/"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/trieuhota/"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/trieu.hota/"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/trieu.hota/" target="_blank"><i class="fa fa-envelope"></i>
                            </a></li>
                    </ul>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a>
                        </u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a>
                    </p>
                </div>
                <hr>
            </div>
        </div>

    </footer>

</section>
</body>

</html>