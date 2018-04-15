<?php

session_start();


add_theme_support( 'post-thumbnails' );
add_image_size( 'learning_thumbs', 288, 192, true );
add_image_size( 'header_carusel', 100, 100, true );
add_image_size( 'universitet_catolog', 85, 85, true );
add_image_size( 'universitet_photo', 148, 148, true );
add_image_size( 'review_photo', 162, 162, true );
add_image_size( 'review_thumbnail', 107, 107, true );


register_nav_menus(array(
	'top'    => 'Верхнее меню'
));


function new_excerpt_more($more) {
	global $post;
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function load_university_template($template) {
    if( isset(get_the_category( )[0]->term_id) && get_the_category( )[0]->term_id==9 ){
    	return locate_template('category-9.php');
    }elseif( isset(get_the_category( )[0]->parent) && get_the_category( )[0]->parent==4 ){
    	return locate_template('category-4.php');
    }
}
add_action('category_template', 'load_university_template');


function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('cat','4');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');


function prefix_send_email_to_admin() {
    $message = 'Имя: '.$_POST['name']."\n\r";
    $message .= 'E-mail: '.$_POST['email']."\n\r";
    $message .= 'Телефон: '.$_POST['tel']."\n\r";
    $message .= 'Город: '.$_POST['town']."\n\r\n\r";
    $message .= 'Сообщение: '.$_POST['mass']."\n\r";
    $headers = 'From: Go2Study <'.get_theme_mod('email', '').'>' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    wp_mail( get_option('admin_email'), 'С сайта Go2Study', $message, $headers);
    $_SESSION['popup'] = true;
    wp_redirect( "/");
    exit;
}
add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );


add_action('customize_register', function($customizer){

	// contacts
	$customizer->add_section(
		'contacts',
		array(
			'title' => 'Контакты',
	   		'description' => 'Контакты на сайте',
	   		'priority' => 1,
	   		)
  	);

	$customizer->add_setting(
		'phone1',
  		array('default' => '(321)01234567')
  	);
 	$customizer->add_control(
  		'phone1',
  		array(
   			'label' => 'Телефон #1',
   			'section' => 'contacts',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'phone2',
  		array('default' => '(321)01234567')
  	);
 	$customizer->add_control(
  		'phone2',
  		array(
   			'label' => 'Телефон #2',
   			'section' => 'contacts',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'skype',
  		array('default' => 'skype')
  	);
 	$customizer->add_control(
  		'skype',
  		array(
   			'label' => 'Скайп',
   			'section' => 'contacts',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'email',
  		array('default' => 'mail@mail.com')
  	);
 	$customizer->add_control(
  		'email',
  		array(
   			'label' => 'E-mail',
   			'section' => 'contacts',
   			'type' => 'text',
   		)
  	);


	// main page
	$customizer->add_section(
		'mainpage',
		array(
			'title' => 'Настройки Главной',
	   		'description' => 'Настройка информации на главной странице сайта',
	   		'priority' => 2,
	   		)
  	);

	$customizer->add_setting(
		'headertext1',
  		array('default' => 'ПОЛУЧИТЕ<br>ВЫСШЕЕ')
  	);
 	$customizer->add_control(
  		'headertext1',
  		array(
   			'label' => 'Текст шапки 1',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'headertext2',
  		array('default' => 'ОБРАЗОВАНИЕ<br>В ПОЛЬШЕ')
  	);
 	$customizer->add_control(
  		'headertext2',
  		array(
   			'label' => 'Текст шапки 2',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step1h',
  		array('default' => 'Свяжитесь с нами')
  	);
 	$customizer->add_control(
  		'step1h',
  		array(
   			'label' => 'Шаг 1',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step1t',
  		array('default' => 'Заполните анкету или позвоните нам')
  	);
 	$customizer->add_control(
  		'step1t',
  		array(
   			'label' => '',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step2h',
  		array('default' => 'Получите консультацию')
  	);
 	$customizer->add_control(
  		'step2h',
  		array(
   			'label' => 'Шаг 2',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step2t',
  		array('default' => 'У нас в офисе или по телефону')
  	);
 	$customizer->add_control(
  		'step2t',
  		array(
   			'label' => '',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step3h',
  		array('default' => 'Выберите университет')
  	);
 	$customizer->add_control(
  		'step3h',
  		array(
   			'label' => 'Шаг 3',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step3t',
  		array('default' => 'Мы вам поможем')
  	);
 	$customizer->add_control(
  		'step3t',
  		array(
   			'label' => '',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step4h',
  		array('default' => 'Предоставьте документы')
  	);
 	$customizer->add_control(
  		'step4h',
  		array(
   			'label' => 'Шаг 4',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step4t',
  		array('default' => 'Необходимые для поступления')
  	);
 	$customizer->add_control(
  		'step4t',
  		array(
   			'label' => '',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step5h',
  		array('default' => 'Готовьтесь к поездке')
  	);
 	$customizer->add_control(
  		'step5h',
  		array(
   			'label' => 'Шаг 5',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'step5t',
  		array('default' => 'Вы студент выбранного вуза')
  	);
 	$customizer->add_control(
  		'step5t',
  		array(
   			'label' => '',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'advantage1',
  		array('default' => 'Наша компания "Go2Study" входит в <span>ТОП 3 лучших<br>компаний</span> на рынке Украины')
  	);
 	$customizer->add_control(
  		'advantage1',
  		array(
   			'label' => 'Преимущество 1',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'advantage2',
  		array('default' => 'Мы дарим 2х дневную <span>поездку в Будапешт</span> с<br>экскурсоводом.')
  	);
 	$customizer->add_control(
  		'advantage2',
  		array(
   			'label' => 'Преимущество 2',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'advantage3',
  		array('default' => 'У нас <span>лучшая цена</span> за пакет "Все включено" среди<br>образовательных компаний')
  	);
 	$customizer->add_control(
  		'advantage3',
  		array(
   			'label' => 'Преимущество 3',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'advantage4',
  		array('default' => 'Это какой-то пункт, например, про то, что У нас<br> самые приятные и <span>грамотная техподдержка</span>')
  	);
 	$customizer->add_control(
  		'advantage4',
  		array(
   			'label' => 'Преимущество 4',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'advantage5',
  		array('default' => 'Это пример пункта меню, например, Мы <span>гарантируем<br>поступление</span> в выбранный вуз')
  	);
 	$customizer->add_control(
  		'advantage5',
  		array(
   			'label' => 'Преимущество 5',
   			'section' => 'mainpage',
   			'type' => 'text',
   		)
  	);

	$customizer->add_setting(
		'mtext1',
  		array('default' => 'Польша занимает территорию 312 679 км², по этому показателю страна находится на 69-м месте в мире и десятом месте в Европе. Численность населения — 38 млн человек (33-я в мире). Страна разделена на 16 воеводств, которые в свою очередь делятся на повяты (уезды) и гмины (волости).')
  	);
 	$customizer->add_control(
  		'mtext1',
  		array(
   			'label' => 'Текст 1',
   			'section' => 'mainpage',
   			'type' => 'textarea',
   		)
  	);

	$customizer->add_setting(
		'mtext2',
  		array('default' => 'Датой создания первого польского государства считается 966 год, когда Мешко I принял христианство. Польша стала королевством в 1025 году, а в 1569 году объединилась с Великим княжеством Литовским (I Речь Посполитая). В 1795 году в результате трёх разделов, когда территория была разделена между Пруссией, Австрией и Россией, Польское государство перестало существовать. Во время наполеоновских войн в период 1807—1813 гг. существовало Герцогство Варшавское, бо́льшая часть которого в 1815 году вошла в состав России в качестве так называемого Царства Польского.')
  	);
 	$customizer->add_control(
  		'mtext2',
  		array(
   			'label' => 'Текст 2',
   			'section' => 'mainpage',
   			'type' => 'textarea',
   		)
  	);

	$customizer->add_setting(
		'mtext3',
  		array('default' => 'Польша вновь обрела независимость в 1918 году после Первой мировой войны (II Речь Посполитая), но в 1939 году была разделена между Германией и СССР. После войны Польша в новых границах (без Западной Белоруссии и Западной Украины, но с значительными территориальными приобретениями за счёт Германии) стала «страной народной демократии», зависимой от СССР (Польская Народная Республика). В 1989 году произошли изменения в политической системе, переход к рыночной экономике (III Речь Посполитая).')
  	);
 	$customizer->add_control(
  		'mtext3',
  		array(
   			'label' => 'Текст 3',
   			'section' => 'mainpage',
   			'type' => 'textarea',
   		)
  	);

	$customizer->add_setting(
		'mtext4',
  		array('default' => 'С 12 марта 1999 года является членом НАТО, с 1 мая 2004 года — член Европейского союза. 21 декабря 2007 года вошла в Шенгенскую зону. Варшавское, бо́льшая часть которого в 1815 году вошла в состав России в качестве так называемого Царства Польского.')
  	);
 	$customizer->add_control(
  		'mtext4',
  		array(
   			'label' => 'Текст 4',
   			'section' => 'mainpage',
   			'type' => 'textarea',
   		)
  	);

});