<?php 
function wpb_customize_register($wp_customize){
	//jum bg 
	$wp_customize ->add_section('jumbutron',array(
	'title' => __('jumbutron','Minto'),
	'description' => sprintf(__('options for jumbutron','wpbootstrap')),
	'priority' => 130
	));
	
	$wp_customize ->add_setting('jumbutron_image',array(
	'default' => get_bloginfo('template_directory').'/img/bg-home.jpg',
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control (new WP_Customize_Image_Control($wp_customize,'jumbutron_image',array(
	'label' =>__('jumbutron image','wpbootstrap'),
	'section' => 'jumbutron',
	'setting' => 'jumbutron_image',
	'priority' => 1
	)));

	$wp_customize ->add_setting('mockup_image',array(
	'default' => get_bloginfo('template_directory').'/assets/img/screen-content-macbook.jpg',
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control (new WP_Customize_Image_Control($wp_customize,'mockup_image',array(
	'label' =>__('Mac mockup image','wpbootstrap'),
	'section' => 'jumbutron',
	'setting' => 'mockup_image',
	'priority' => 2
	)));
		

	
	$wp_customize ->add_setting('jumbutron_text',array(
	'default' => _x('Text is default','wpbootstrap'),
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control ('jumbutron_text',array(
	'label' =>__('text','wpbootstrap'),
	'section' => 'jumbutron',
	'priority' => 3
	));
	
	$wp_customize ->add_setting('btn_url',array(
	'default' => _x('http://greenwebdesigners.com/aboutus','wpbootstrap'),
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control ('btn_url',array(
	'label' =>__('Button url','wpbootstrap'),
	'section' => 'jumbutron',
	'priority' => 4
	));
	$wp_customize ->add_setting('btn_text',array(
	'default' => _x('About us','wpbootstrap'),
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control ('btn_text',array(
	'label' =>__('Button text','wpbootstrap'),
	'section' => 'jumbutron',
	'priority' => 5
	));
	
	$wp_customize ->add_setting('in_image',array(
	'default' => get_bloginfo('template_directory').'/assets/img/table.jpg',
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control (new WP_Customize_Image_Control($wp_customize,'in_image',array(
	'label' =>__('the in image','wpbootstrap'),
	'section' => 'jumbutron',
	'setting' => 'in_image',
	'priority' => 6
	)));
	
	$wp_customize ->add_setting('about_image',array(
	'default' => get_bloginfo('template_directory').'/assets/img/about.jpg',
	'type' => 'theme_mod'
	));
	
	$wp_customize ->add_control (new WP_Customize_Image_Control($wp_customize,'about_image',array(
	'label' =>__('about page image','wpbootstrap'),
	'section' => 'jumbutron',
	'setting' => 'about_image',
	'priority' => 7
	)));
}
add_action('customize_register','wpb_customize_register'); 
