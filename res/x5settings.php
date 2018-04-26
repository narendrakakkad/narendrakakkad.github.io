<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://narendrakakkad.cf/',
	'homepage_url' => 'http://narendrakakkad.cf/index.html',
	'icon' => 'http://narendrakakkad.cf/admin/images/logo_xk0ajkig.png',
	'version' => '13.1.5.16',
	'sitename' => 'narendrakakkad',
	'public_folder' => '',
	'salt' => 'u5563e3pvzdtqx7l2p5utj0pf0q0e5wf4jnkh757l72j5j1',
);


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_xk0ajkig.png',
	'theme' => 'orange'
);
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Check word:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php