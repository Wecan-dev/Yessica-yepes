<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php
        $edge_blog_single_type = adorn_edge_get_meta_field_intersect('blog_single_type');
        adorn_edge_include_blog_helper_functions('singles', $edge_blog_single_type);
		//Action added for applying module specific filters that couldn't be applied on init
		do_action('adorn_edge_blog_single_loaded');
        $edge_holder_params = adorn_edge_get_holder_params_blog();

        $module_title = isset($edge_holder_params['module_title']) ? $edge_holder_params['module_title'] : false;
        $module_title_layout = isset($edge_holder_params['module_title_layout']) ? $edge_holder_params['module_title_layout'] : "";
        ?>

        <?php adorn_edge_get_title($module_title, 'blog', $module_title_layout); ?>
            <?php get_template_part('slider'); ?>
            <div class="<?php echo esc_attr($edge_holder_params['holder']); ?>">
                <?php do_action('adorn_edge_after_container_open'); ?>
                <div class="<?php echo esc_attr($edge_holder_params['inner']); ?>">
                    <?php adorn_edge_get_blog_single($edge_blog_single_type); ?>
                </div>
            <?php do_action('adorn_edge_before_container_close'); ?>
            </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>