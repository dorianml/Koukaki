<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

<footer id="colophon" class="site-footer">
    <ul>
        <li><a href="#">Mentions Légales</a></li>
        <li><a href="#">STUDIO KOUKAKI</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- AOS SECTION SCROLLING EFFECT -->
<!-- <script type="text/javascript" src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->
<!-- <script>
    AOS.init({
        // disable: 'mobile'
    });
</script> -->


<!-- PARALLAX BANNER TITLE CSS -->


<!-- HAMBURGER MENU  -->
<script>
    $('#toggle').click(function() {
        console.log('hamburger')
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });
    $("nav ul li a").click(function() {
        $("#toggle").removeClass("active");
        $("#overlay").removeClass("open");
    });
</script>

PARALLAX NUAGES
<script type='text/javascript'>
    let nuage1 = document.getElementById("nuage1");
    let nuage2 = document.getElementById('nuage2');

    function updateScroll() {
        let value = window.scrollY;
        nuage1.style.transform = 'translateX(' + -value * 0.3 + 'px)';
        nuage2.style.transform = 'translateX(' + -value * 0.2 + 'px)';
        requestAnimationFrame(updateScroll);
    }

    // Initial call to set the initial styles
    updateScroll();

    // If you also want to handle the resize event for responsiveness
    window.addEventListener('resize', updateScroll);
</script>

<script type='text/javascript'>
    let bannerTitle = document.getElementById("bannerTitle");
    window.addEventListener('scroll', function() {
        var value = window.pageYOffset;
        bannerTitle.style.marginLeft = value * 0.4 + 'px';
        // bannerTitle.style.marginTop = value * 0.1 + 'px'; // Adjusted to maintain vertical spacing
    });
</script>

<!-- PARALLAX BANNER TITLE with IntersectionObserver -->

<!-- /////////////////////// -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/scroll-animation.js'; ?> "> </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>


</body>

</html>