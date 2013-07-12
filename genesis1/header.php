<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>"/>
<link rel="alternate" type="application/rss+xml" title="Feed <?php bloginfo('name'); ?>" href="<?php bloginfo("rss_url"); ?>"/>
</head>
<header id="header">
<div>
    <ul>
        <li id="logo">
            
        </li>
        <li class="menu">
            <a>INICIO</a>
        </li>
        <li class="menu">
            <a>QUIENES SOMOS</a>
        </li>
        <li class="menu">
            <a>ACTIVIDADES</a>
        </li>
        <li class="menu">
            <a>ARTICULOS</a>
        </li>
        <li class="menu">
            <a>ENLACES</a>
        </li>
        <li class="menu">
            <a>CONTACTO</a>
        </li>
    </ul>
<ul>
<li<?php if( is_home() ) : ?> class="current_page_item"<?php endif; ?>><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'title' ); ?>">Inicio</a></li>
<?php wp_list_pages( 'title_li=&depth=1' ); ?>
</ul>
</div>
</header>