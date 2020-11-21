<li class="edge-bl-item clearfix">
	<div class="edge-bli-inner">
        <?php if($post_info_image == 'yes') { ?>
        <?php adorn_edge_get_module_template_part('templates/parts/image', 'blog', '', $params); ?>
        <?php } ?>
        <div class="edge-bli-content">
            <?php if ($post_info_date == 'yes') { ?>
                <?php adorn_edge_get_module_template_part('templates/parts/post-info/date', 'blog', '', $params); ?>
            <?php } ?>
            <?php adorn_edge_get_module_template_part('templates/parts/title', 'blog', '', $params); ?>
            <?php
            if($post_info_section == 'yes') { ?>
                <div class="edge-bli-info">
	                <?php
	                    if ($post_info_category == 'yes') {
	                        adorn_edge_get_module_template_part('templates/parts/post-info/category', 'blog', '', $params);
	                    }
	                    if ($post_info_author == 'yes') {
	                        adorn_edge_get_module_template_part('templates/parts/post-info/author', 'blog', '', $params);
	                    }
	                    if ($post_info_comments == 'yes') {
	                        adorn_edge_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $params);
	                    }
	                    if ($post_info_like == 'yes') {
	                        adorn_edge_get_module_template_part('templates/parts/post-info/like', 'blog', '', $params);
	                    }
	                    if ($post_info_share == 'yes') {
	                        adorn_edge_get_module_template_part('templates/parts/post-info/share', 'blog', '', $params);
	                    }
	                ?>
                </div>
            <?php } ?>
            <div class="edge-bli-excerpt">
                <?php adorn_edge_get_module_template_part('templates/parts/excerpt', 'blog', '', $params); ?>
                <?php adorn_edge_get_module_template_part('templates/parts/post-info/read-more', 'blog', '', $params); ?>
            </div>
        </div>
	</div>
</li>