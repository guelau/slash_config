<?php require('slash.class.php'); ?>
<!DOCTYPE html>
<!--[if IE 6]> <html id="ie6" class="no-js" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if IE 7]> <html id="ie7" class="no-js" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if IE 8]> <html id="ie8" class="no-js" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" dir="ltr" lang="fr-FR">
<!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Slash config</title>
</head>

<body>
	<div id="head-wrapper">
		<nav id="nav-menu" role="navigation">
			<h3><a href="https://github.com/tendencies/slash_config">Project Page</a></h3>
			<h3><a href="https://twitter.com/_tendencies">Twitter</a></h3>
		</nav>
		<header>
			<h1>Slash config: a PHP class for easily read, write and delete the settings of your projects, package or applications.</h1>
		</header>
	</div>
	<div class="content">
		<h2>Set a new config</h2>
		<code>
			&lt;?php
				slashConfig::add('conf/datas/foo', 'bar');
			?&gt
		</code>
		<pre><?php slashConfig::add('conf/datas/foo', 'bar'); ?></pre>
		
		<h2>Reading the configation object</h2>
		<code>
			&lt;?php
				$slash = slashConfig::get();
				var_dump( $slash ); 
				echo "foo = ", $slash->conf->datas->foo;
			?&gt
		</code>
		<pre><?php $slash = slashConfig::get(); var_dump( $slash ); 
		echo "foo = ", $slash->conf->datas->foo; ?></pre>
		
		<h2>Reading a key</h2>
		<code>
			&lt;?php
				echo "conf/datas/foo = ", slashConfig::get('conf/datas/foo');
			?&gt
		</code>
		<pre><?php echo "conf/datas/foo = ", slashConfig::get('conf/datas/foo'); ?></pre>
	</div>
	<p id="credit"><a href="http://laurent.tild.com">Laurent</a> / <a href="http://tild.com">Tild Online Software (@gency)</a></p>
</body>
</html>
