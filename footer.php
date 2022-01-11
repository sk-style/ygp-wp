<?php if ( !is_404() ) : ?>
<!---- footer ---->        
<footer class="footer">
    <div class="inner">
<?php if ( !is_page('contact') && !is_page('thanks')) : ?>
        <div class="footer-btn"><a href="<?php echo esc_url( home_url('contact') ) ?>"><span>CONTACT</span><small>お問い合わせはこちらから</small></a></div>
<?php endif; ?>
        <div class="footer-logo"><a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="YG PLANNING"></a></div>
        <p class="footer-copy"><small lang="en">Copyrights © YG PLANNING INC.<span class="_pc"> </span><br class="_sp">All Rights Reserved.</small></p>
    </div>
</footer><!---- /footer ---->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>