<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- METAS -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="síndicos, profissionais, condomínios, Curitiba">
    <meta name="description" content="SindGO - Uma empresa que nasceu preparada para cuidar de condominios - postagens da Empresa">
    <!-- TÍTULO -->
    <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
      } ?>
    </title>
    <!-- IMPORTAÇÃO DOS ÍCONES-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- IMPORTAÇÃO DO MATERIALIZE -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/materialize.min.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO STYLE.CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.min.css"  media="screen,projection"/>
    <!-- WP PINGBACK -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- WP HEAD -->
    <?php wp_head(); ?>
  </head>
  <body>
  <!-- HEADER --> 
  <div class="navbar-fixed">
    <!-- NAVBAR -->
    <nav class="z-depth-0 cordefundodomenu">
      <div class="container">
        <div class="nav-wrapper">
          <a href="http://bulkdesign.com.br/sindgosindicos" class="brand-logo">
            <img src="<?php bloginfo('template_url') ?>/img/logo/logo_horizontal.png" />
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="http://bulkdesign.com.br/sindgo" class="opcaomenu">Home</a></li>
            <li><a href="#contato" class="opcaomenu">Contato</a></li> 
            <li><a href="blog" class="opcaomenu">Blog</a></li>
         </ul>
          <main class="hide-on-large-only">
            <a class="toggle-overlay"><i class="small material-icons">menu</i></a>
          </main>
        </div>
      </div>
    </nav>
  </div>
  <!-- MENU MOBILE -->
  <aside>
    <div class="outer-close toggle-overlay">
      <a class="white-text right close"><i class="margin-clear small material-icons">clear</i></a>
    </div>
    <nav class="mobile-menu">
      <ul>
        <li><a href="http://bulkdesign.com.br/sindgo" class="white-text">Home</a></li>
        <li><a href="#contato" class="white-text">Contato</a></li> 
        <li><a href="blog" class="white-text">Blog</a></li>
      </ul>
    </nav>
  </aside>