<?php
namespace EdgeCore\CPT\Shortcodes\SplitScrollingSectionContentItem;

use EdgeCore\Lib;

class SplitScrollingSectionContentItem implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'edge_split_scrolling_section_content_item';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		vc_map( array(
			'name' => esc_html__('Edge Split Scroling Section Content Item', 'edge-core'),
			'base' => $this->base,
			'icon' => 'icon-wpb-split-scrolling-section-content-item extended-custom-icon',
			'category' => esc_html__('by EDGE', 'edge-core'),
			'as_parent' => array('except' => 'vc_row'),
			'as_child' => array('only' => 'edge_split_scrolling_section_left_panel, edge_split_scrolling_section_right_panel'),
			'js_view' => 'VcColumnView',
			'params' => array(
				array(
					'type'       => 'colorpicker',
					'param_name' =>	'background_color',
					'heading'    => esc_html__('Background Color', 'edge-core')
				),
				array(
					'type'       => 'attach_image',
					'param_name' => 'background_image',
					'heading'    => esc_html__('Background Image', 'edge-core')
				),
				array(
					'type'        => 'textfield',
					'param_name'  => 'item_padding',
					'heading'     => esc_html__('Padding', 'edge-core'),
					'description' => esc_html__('Insert padding in format: Top Right Bottom Left (e.g. 0px 0px 1px 0px)', 'edge-core')
				),
				array(
					'type'       => 'dropdown',
					'param_name' =>	'alignment',
					'heading'    => esc_html__('Content Alignment', 'edge-core'),
					'value'      => array(
						esc_html__('Default','edge-core') => '',
						esc_html__('Left','edge-core') => 'left',
						esc_html__('Right','edge-core') => 'right',
						esc_html__('Center'	,'edge-core') => 'center'
					)
				),
				array(
					'type'       => 'dropdown',
					'param_name' => 'header_style',
					'heading'    => esc_html__('Header/Bullets Style', 'edge-core'),
					'value'      => array(
						esc_html__('Default', 'edge-core') => '',
						esc_html__('Light', 'edge-core')   => 'light',
						esc_html__('Dark', 'edge-core')    => 'dark'
					)
				)
			)
		));
	}

	public function render($atts, $content = null) {
		$args = array(
			'background_color'	=> '',
			'background_image'	=> '',
			'item_padding'		=> '',
			'alignment'			=> 'left',
			'header_style'      => ''
		);
		
		$params = shortcode_atts($args, $atts);
		extract($params);
		
		$params['content_data'] = $this->getContentData($params);
		$params['content_style'] = $this->getContentStyles($params);
		$params['content'] = $content;

		$html = edge_core_get_shortcode_module_template_part('templates/split-scrolling-section-content-item-template', 'split-scrolling-section', '', $params);

		return $html;
	}
	
	private function getContentData($params) {
		$data = array();
		
		if(!empty($params['header_style'])) {
			$data['data-header-style'] = $params['header_style'];
		}
		
		return $data;
	}
	
	/**
	 * Return content Style
	 *
	 * @param $params
	 * @return array
	 */
	private function getContentStyles($params) {
		$styles = array();

		if (!empty($params['background_color'])) {
			$styles[] = 'background-color: '.$params['background_color'];
		}

		if (!empty($params['background_image'])) {
			$url = wp_get_attachment_url($params['background_image']);
			$styles[] = 'background-image: url('. $url . ')';
		}

		if (!empty($params['item_padding'])) {
			$styles[] = 'padding: '.$params['item_padding'];
		}

		if (!empty($params['alignment'])) {
			$styles[] = 'text-align: '.$params['alignment'];
		}
		
		return implode(';', $styles);
	}
}
