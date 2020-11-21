<?php do_action('adorn_edge_before_page_header'); ?>

<header class="edge-page-header">
    <?php if($show_fixed_wrapper) : ?>
        <div class="edge-fixed-wrapper">
    <?php endif; ?>
    <?php do_action('adorn_edge_after_header_area_html_open'); ?>
    <div class="edge-menu-area">
		<?php do_action( 'adorn_edge_after_header_menu_area_html_open' )?>
        <?php if($menu_area_in_grid) : ?>
            <div class="edge-grid">
        <?php endif; ?>
        <div class="edge-vertical-align-containers">
            <div class="edge-position-left">
                <div class="edge-position-left-inner">
                    <?php adorn_edge_get_divided_left_main_menu(); ?>
                    <div class="edge-main-menu-widget-area-left">
                        <div class="edge-main-menu-widget-area-left-inner">
                            <?php adorn_edge_get_header_widget_menu_area_left(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edge-position-center">
                <div class="edge-position-center-inner">
                    <?php if(!$hide_logo) {
                        adorn_edge_get_logo();
                    } ?>
                </div>
            </div>
            <div class="edge-position-right">
                <div class="edge-position-right-inner">
                    <?php adorn_edge_get_divided_right_main_menu(); ?>
                    <div class="edge-main-menu-widget-area">
                        <div class="edge-main-menu-widget-area-inner">
                            <?php adorn_edge_get_header_widget_menu_area(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($menu_area_in_grid) : ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if($show_fixed_wrapper) { ?>
        <?php do_action('adorn_edge_end_of_page_header_html'); ?>
        </div>
    <?php } else {
        do_action('adorn_edge_end_of_page_header_html');
    } ?>
    <?php if($show_sticky) {
        adorn_edge_get_sticky_header('divided');
    } ?>
</header>

<?php do_action('adorn_edge_after_page_header'); ?>