<?php
/**
 * The header template file
 *
 * @package AccessibleMinimalism
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="data:;base64,iVBORw0KGgo=" />
  <title><?php echo wp_title(''); ?></title>
  <style type="text/css">
  /*<![CDATA[*/
  html {
    padding: 0 2%;
  }
  body {
    background: linear-gradient(180deg, rgba(251,251,251,1) 0%, rgba(246,253,255,1) 35%, rgba(246,246,255,1) 100%); 
    font-size: 150%;
    font-family: muli,avenir,helvetica neue,helvetica,ubuntu,roboto,noto,segoe ui,arial,sans-serif;
    max-width: 960px;
    margin: 0 auto;
  }
  button {
    background-color:#6772E5;
    color:#FFF;
    padding:8px 12px;
    border:0;
    border-radius:4px;
    font-size:1em;
    cursor: pointer;
  }
  fieldset {
    border:none;
  }
  /*]]>*/
  </style>
	<?php wp_head(); ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ788S467D"></script>
    <script>
      /*<![CDATA[*/
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-BJ788S467D');
      /*]]>*/
    </script>
</head>
<body>
<p><a href="#nav-menu">Menu</a></p>
<h1><?php echo get_bloginfo( 'name' ); ?></h1>
<?php wp_body_open(); ?>

