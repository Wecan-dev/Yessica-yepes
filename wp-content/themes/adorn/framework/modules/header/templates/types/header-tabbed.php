<?php do_action('adorn_edge_before_page_header'); ?>

<header class="edge-page-header">
	<?php if($show_fixed_wrapper) : ?>
	<div class="edge-fixed-wrapper">
		<?php endif; ?>
		<div class="edge-menu-area">
            <?php do_action('adorn_edge_after_header_menu_area_html_open') ?>
            <div class="edge-vertical-align-containers">
                <div class="edge-position-left">
                    <div class="edge-position-left-inner">
                        <?php if(!$hide_logo) {
                            adorn_edge_get_logo();
                        } ?>
                    </div>
                </div>
                <div class="edge-position-center">
                    <div class="edge-position-center-inner">
                        <?php adorn_edge_get_main_menu(); ?>
                    </div>
                </div>
                <div class="edge-position-right">
                    <div class="edge-position-right-inner">
						<?php adorn_edge_get_header_widget_menu_area(); ?>
                    </div>
                </div>
            </div>
		</div>
        <?php do_action('adorn_edge_end_of_page_header_html'); ?>
		<?php if($show_fixed_wrapper) : ?>
	</div>
<?php endif; ?>
	<?php if($show_sticky) {
		adorn_edge_get_sticky_header();
	} ?>
</header>

<?php do_action('adorn_edge_after_page_header'); ?>

