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
		</code>
		<pre>
		</pre>
		
		<h2>Read a new config</h2>
		<code>
			&lt;?php
				echo slashConfig::get('conf/datas/foo');
		</code>
		<pre>
			<?php
				var_dump( slashConfig::get('conf/datas/foo') );
			?>
		</pre>
	</div>
	<p id="credit"><a href="http://laurent.tild.com">Laurent</a> / <a href="http://tild.com">Tild Online Software (@gency)</a></p>
</body>
</html>
