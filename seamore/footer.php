    <div class="art-footer">
                <div class="art-footer-body">
                <?php get_sidebar('footer'); ?>
                    <a href="<?php bloginfo('rss2_url'); ?>" class='art-rss-tag-icon' title="<?php printf(__('%s RSS Feed', THEME_NS), get_bloginfo('name')); ?>"></a>
					<?php if( function_exists( 'qtsndtps_get_random_tip_quote' ) ) qtsndtps_get_random_tip_quote();?>
					        <div class="art-footer-text">																
                                <?php  echo do_shortcode(theme_get_option('theme_footer_content')); ?>								
                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
	<p class="art-page-footer">Автори проекту: <a
    rel="nofollow" href="https://www.facebook.com/h.yaroslav"
    target=_blank>Ярослав Грабар</a> та <a rel="nofollow"  href="http://york.rv.ua" target=_blank>Малафей Віктор</a><br />Хочете розмістити рекламу? Поїхати разом на рибалку? Просто надіслати фотки гарних дівчат? Наша електропошта: <a href="mailto:info@rivnefish.com">info@rivnefish.com</a></p>
    <div class="cleared"></div>
</div>
</div>
    <div id="wp-footer">
	        <?php wp_footer(); ?>
	        <!-- <?php printf(__('%d queries. %s seconds.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
    </div>

</body>
</html>

