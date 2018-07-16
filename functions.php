<?php 
add_action ( 'wp_enqueue_scripts', 'add_theme_style' );
function add_theme_style(){

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assest/css/bootstrap.css',all);
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css',all );
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/assest/css/custom.css',all );

}

/**
 * Registering a nav menu 
 */

 register_nav_menus( array(
     'primary'=>__('Primary Menu') ,
     'middle' =>__('Secondary Menu') ,
     'footer'=>__('Footer Menu')
 ) );


 /**
  * @ customiztion API code
  */

  /* -----footer widget one----- */

  function custom_footer_init_one($wp_customize){
      #section 
      $wp_customize->add_section('footer_section_callout' , array(
          'title'=>'footer widget 1 '   
      )) ;

      #setting 
      $wp_customize->add_setting('footer_setting_headline1',array(
          'default'=>'enter you text here'
      ));

      #control
      $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_heading',array(
          'label'=>'headline 1',
          'section'=>'footer_section_callout',
          'settings'=>'footer_setting_headline1'
      )) );

     /* setting and control for heading 1 text*/

    #setting 
     $wp_customize->add_setting('footer_setting_txt1',array(
        'default'=>'enter about your restorent'
    ));

    #control
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_txt',array(
        'label'=>'about your restorent',
        'section'=>'footer_section_callout',
        'settings'=>'footer_setting_txt1',
        'type'=>'textarea'
    )) );
  }
  
  #hook 
  add_action('customize_register','custom_footer_init_one') ;

  /* -----footer widget two----- */

  function custom_footer_init_two($wp_customize){
    #section 
    $wp_customize->add_section('footer_section_callout_two' , array(
        'title'=>'footer widget 2 '   
    )) ;

    #setting 
    $wp_customize->add_setting('footer_setting_headline2',array(
        'default'=>'enter you text here'
    ));

    #control
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_heading2',array(
        'label'=>'headline 2',
        'section'=>'footer_section_callout_two',
        'settings'=>'footer_setting_headline2'
    )) );

   # setting and control for heading 2 text

  #setting 
   $wp_customize->add_setting('footer_setting_txt2',array(
      'default'=>'headline 2'
  ));

  #control
  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_txt',array(
      'label'=>'Enter your address here ',
      'section'=>'footer_section_callout_two',
      'settings'=>'footer_setting_txt2',
      'type'=>'textarea'
  )) );
}

#hook 
add_action('customize_register','custom_footer_init_two') ;

/* -----footer widget 3----- */

function custom_footer_init_three($wp_customize){
    #section 
    $wp_customize->add_section('footer_section_callout_three' , array(
        'title'=>'footer widget 3 '   
    )) ;

    #setting 
    $wp_customize->add_setting('footer_setting_headline3',array(
        'default'=>'enter you text here'
    ));

    #contro
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_heading3',array(
        'label'=>'headline 3',
        'section'=>'footer_section_callout_three',
        'settings'=>'footer_setting_headline3',
    )) );

   # setting and control for heading 2 text

  #setting 
   $wp_customize->add_setting('footer_setting_txt3',array(
      'default'=>'Enter your address'
  ));

  #control
  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_control_txt3',array(
      'label'=>'Enter your address here ',
      'section'=>'footer_section_callout_three',
      'settings'=>'footer_setting_txt3',
      'type'=>'textarea'
  )) );
}

#hook 
add_action('customize_register','custom_footer_init_three') ;

/**
 * reservation section custmization
 */

 function custom_reservation_init( $wp_customize ){
    #section  
    $wp_customize->add_section('reservation_section_callout',array(
         'title'=>'reservation'
     ));
    
    #setting-> heading 
    $wp_customize->add_setting('reservation_setting_heading',array(
        'default'=>'Make your Reservation'
    )); 
    #control->heading
    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'reservation_control_heading',array(
        'label'=> 'Change Reservation Heading',
        'section'=>'reservation_section_callout',
        'settings'=>'reservation_setting_heading'
    ) ));

     #setting-> sub heading 
     $wp_customize->add_setting('reservation_setting_subheading',array(
        'default'=>'Book you table here'
    )); 
    #control->sub heading
    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'reservation_control_subheading',array(
        'label'=> 'Change Reservation Sub Heading',
        'section'=>'reservation_section_callout',
        'settings'=>'reservation_setting_subheading'
    ) ));

     #setting-> backdrop image 
     $wp_customize->add_setting('reservation_setting_backdrop'); 
    #control->backdrop image
    $wp_customize->add_control( new WP_Customize_Cropped_Image_control( $wp_customize , 'reservation_control_backdrop',array(
        'label'=> 'Change backdrop image',
        'section'=>'reservation_section_callout',
        'settings'=>'reservation_setting_backdrop'
    ) ));
 }

 #hook 
 add_action('customize_register','custom_reservation_init');

 /**
  * Logo customization code
  */

  function custom_logo_init( $wp_customize ){
      #section
      $wp_customize->add_section('logo_section',array(
          'title'=>'Change logo'
      )) ;

      #setting
      $wp_customize->add_setting('logo_setting');

      #control 
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize ,'logo_control',array(
          'label'=>'change logo' ,
          'section'=>'logo_section',
          'settings'=>'logo_setting'
      )) );

  }
  #hook
  add_action('customize_register','custom_logo_init') ;

  /**
   * Hero image heading and sub heading 
   */

   function custom_hero_text_init($wp_customize){
       #section->hero text
       $wp_customize->add_section('hero_text_section',array(
           'title'=>'change hero text '
       )) ;

       #setting->hero txt
       $wp_customize->add_setting('hero_text_setting',array(
           'default'=>'Dine with us in luxirious surroundings'
       ));

       #control 
       $wp_customize->add_control( new WP_Customize_control($wp_customize , 'hero_text_control',array(
           'label'=>'hero text' ,
           'section'=>'hero_text_section',
           'settings'=>'hero_text_setting'
       )) );
       
       #setting->hero sub text
       $wp_customize->add_setting('hero_subtext_setting',array(
        'default'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
    ));

    #control->sub text 
    $wp_customize->add_control( new WP_Customize_control($wp_customize , 'hero_subtext_control',array(
        'label'=>'hero sub text' ,
        'section'=>'hero_text_section',
        'settings'=>'hero_subtext_setting',
        'type'=>'textarea'
    )) );

   }

   #hook 
   add_action('customize_register','custom_hero_text_init');

   /**
    * location images custome code
    */

    function custom_location_image_init($wp_customize){
        #section
        $wp_customize->add_section('location_img_section',array(
            'title'=>'Location image'
        )); 

        #settings->image 1
        $wp_customize->add_setting('location_img1_setting') ;

        #control ->image 1
        $wp_customize->add_control( new WP_Customize_Cropped_Image_control( $wp_customize ,'location_img1_control',array(
            'label'=>'Chang image 1' ,
            'section'=>'location_img_section',
            'settings'=>'location_img1_setting',
            'width'=> 550 ,
            'height'=>450
        ) ) ) ;
      #settings->image 2
      $wp_customize->add_setting('location_img2_setting') ;

      #control ->image 2
      $wp_customize->add_control( new WP_Customize_Cropped_Image_control( $wp_customize ,'location_img2_control',array(
          'label'=>'Chang image 2' ,
          'section'=>'location_img_section',
          'settings'=>'location_img2_setting',
          'width'=>550 ,
          'height'=>450
      ) ) ) ;  

      #settings->image 3
      $wp_customize->add_setting('location_img3_setting') ;

      #control ->image 1
      $wp_customize->add_control( new WP_Customize_Cropped_Image_control( $wp_customize ,'location_img3_control',array(
          'label'=>'Chang image 3' ,
          'section'=>'location_img_section',
          'settings'=>'location_img3_setting',
          'width'=>550 ,
          'height'=>450
      ) ) ) ;
    }

    #hook
    add_action('customize_register' , 'custom_location_image_init');
?>