<?php if(ale_get_option('instagram_feed_footer')=='enable'){ ?>
    <div class="instagram_footer cf">
        <div class="content_wrapper cf">
            <?php if(ale_get_option('instagram_login')){ echo '<div class="insta_label olins_do_fadein delay200 font_two">'.esc_html__('We’re on Instagram','olins').'</div> <div class="insta_login olins_do_fadein delay400 font-two">#'.esc_attr(ale_get_option('instagram_login')).'</div>';} ?>
            <?php echo '<div class="footer_instagram_feed olins_do_fadein delay600 font_two">'.ale_get_recent_from_instagram().'</div>'; ?>
        </div>
    </div>
<?php } ?>
<footer class="footer_fashion">
    <div class="content_wrapper font_two">
        <div class="footer_copyrights">
            <p>
                <?php
                if(ale_get_option('copyrights')){
                    echo ale_wp_kses(ale_get_option('copyrights'));
                }
                ?>
            </p>
        </div>

        <div class="footer_social">
            <?php get_template_part('partials/social_profiles'); ?>
        </div>
    </div>
</footer>