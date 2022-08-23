<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lesinvest
 */

?>

<footer>
    <div class="container">
        <div class="f_content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/image_in_footer.png)">
            <?php if(get_field('logotip_v_futere', 11)): ?>
                <div class="f_logo">
                    <a href="/">
                        <img src="<?php the_field('logotip_v_futere', 11); ?>"/>
                    </a>
                </div>
            <?php endif; ?>
            <?php wp_nav_menu([
                'menu'            => 'main_menu',
                'container'       => '',
                'menu_class'      => 'f_menu',
            ]); ?>
            <ul class="soc_menu">
                <?php if(get_field('vajber', 11)): ?>
                    <li>
                        <a class="viber" href="<?php the_field('vajber', 11); ?>">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.00361204 18L1.22041 13.5288C0.418636 12.1544 -0.00260157 10.5912 1.2089e-05 8.99999C1.2089e-05 4.0293 4.02931 0 9.00001 0C13.9707 0 18 4.0293 18 8.99999C18 13.9707 13.9707 18 9.00001 18C7.40951 18.0026 5.847 17.5816 4.47301 16.7805L0.00361204 18ZM5.75191 4.7772C5.63568 4.78441 5.52212 4.81502 5.41801 4.8672C5.32038 4.92248 5.23126 4.9916 5.15341 5.0724C5.04541 5.1741 4.98421 5.2623 4.91851 5.3478C4.58588 5.78069 4.40696 6.31207 4.41001 6.858C4.41181 7.29899 4.52701 7.72829 4.70701 8.12969C5.07511 8.94149 5.68081 9.80099 6.48091 10.5975C6.67351 10.7892 6.86161 10.9818 7.06411 11.1609C8.05716 12.0352 9.24053 12.6657 10.5201 13.0023L11.0322 13.0806C11.1987 13.0896 11.3652 13.077 11.5326 13.0689C11.7947 13.0554 12.0507 12.9844 12.2823 12.861C12.4002 12.8003 12.5152 12.7342 12.627 12.663C12.627 12.663 12.6657 12.6378 12.7395 12.582C12.861 12.492 12.9357 12.4281 13.0365 12.3228C13.1112 12.2454 13.176 12.1545 13.2255 12.051C13.2957 11.9043 13.3659 11.6244 13.3947 11.3913C13.4163 11.2131 13.41 11.1159 13.4073 11.0556C13.4037 10.9593 13.3236 10.8594 13.2363 10.8171L12.7125 10.5822C12.7125 10.5822 11.9295 10.2411 11.4516 10.0233C11.4012 10.0013 11.3472 9.98882 11.2923 9.98639C11.2307 9.98007 11.1685 9.987 11.1098 10.0067C11.0512 10.0264 10.9974 10.0585 10.9521 10.1007V10.0989C10.9476 10.0989 10.8873 10.1502 10.2366 10.9386C10.1993 10.9888 10.1478 11.0267 10.0888 11.0475C10.0298 11.0684 9.96599 11.0712 9.90541 11.0556C9.84676 11.0399 9.78932 11.0201 9.73351 10.9962C9.62191 10.9494 9.58321 10.9314 9.50671 10.8981L9.5022 10.8963C8.98732 10.6715 8.51061 10.3679 8.08921 9.99629C7.97581 9.89729 7.87051 9.78929 7.76251 9.68489C7.40843 9.34581 7.09985 8.9622 6.84451 8.54369L6.79141 8.45819C6.75327 8.40074 6.72243 8.33877 6.69961 8.27369C6.66541 8.14139 6.75451 8.03519 6.75451 8.03519C6.75451 8.03519 6.97321 7.79579 7.07491 7.66619C7.15959 7.55848 7.23859 7.44643 7.31161 7.33049C7.41781 7.1595 7.45111 6.984 7.39531 6.8481C7.14331 6.2325 6.88231 5.6196 6.61411 5.0112C6.56101 4.8906 6.40351 4.8042 6.26041 4.7871C6.21181 4.7817 6.16321 4.7763 6.11461 4.7727C5.99374 4.76669 5.87263 4.76879 5.75191 4.7772Z" fill="#007AB8"/>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(get_field('telegram', 11)): ?>
                    <li>
                        <a class="telegram" href="<?php the_field('telegram', 11); ?>">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.785 0.0920533L0.840489 5.79416C-0.247661 6.19948 -0.241365 6.76244 0.640845 7.01347L4.73445 8.19776L14.2058 2.65579C14.6537 2.40309 15.0629 2.53903 14.7265 2.81592L7.05283 9.2386H7.05103L7.05283 9.23944L6.77045 13.1526C7.18413 13.1526 7.36669 12.9766 7.59871 12.769L9.58705 10.9758L13.7229 13.809C14.4855 14.1984 15.0332 13.9983 15.2229 13.1543L17.9379 1.28802C18.2158 0.254685 17.5126 -0.213193 16.785 0.0920533Z" fill="#007AB8"/>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="copyright">
                <div class="item">@ LES-INVEST, <?php echo date('Y');?></div>
                <div class="item">
                    <?php
                    $policy = get_field('politika_konfidenczialnosti', 11);
                    if( $policy ):
                        $policy_url = $policy['url'];
                        $policy_title = $policy['title'];
                        ?>
                        <a href="<?php echo esc_url( $policy_url ); ?>"><?php echo esc_html( $policy_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="item">Сделано в студии <a href="#">Делаем</a></div>
            </div><span class="scroll_up"></span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/select2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
