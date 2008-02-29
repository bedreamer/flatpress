<?php

	$lang['admin']['widgets']['submenu']['default'] = 'Manage Widgets';
	$lang['admin']['widgets']['submenu']['raw'] 	= 'Manage Widgets (raw)';

	/* default action */
	
	$lang['admin']['widgets']['default'] = array(
		'head'		=> 'Manage Widgets (<em>experimental</em>)',
		
		'descr'		=> 'A <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="What is a Widget?">'.
						'Widget</a> is a visual element of a <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="What is a plugin?">'.
						'Plugin</a> that you can put in some special areas '.
						'(the <em>widgetsets</em>) on your blog pages '.
						'called <strong>widgetsets</strong> </p>'.
						'<p><strong>Drag</strong> a widget from the left box and <strong>drop</strong> '.
						'it to the position you prefer.</p>'.
						'<p>Some Widgets may ask you for some <strong>parameters</strong>, '.
						'refer to the widget\'s own guide',
						
		'availwdgs'	=> 'Available Widgets',
		'trashcan'	=> 'Drop here to delete',
		
		'themewdgs' => 'Widgetsets for this theme',
		'themewdgsdescr' => 'The theme you have currently selected let you have the following widgetsets',
		'oldwdgs'	=> 'Other widgetsets',
		'oldwdgsdescr' =>'The following widgetsets seems not to belong to any of the '.
						'widgetsets listed above. They might be remainders from another theme.',
		
		'submit'	=> 'Save Changes',

	);
	
	$lang['admin']['widgets']['default']['stdsets'] = array(
		'top'		=> 'Top bar',
		'bottom'	=> 'Bottom bar',
		'left'		=> 'Left bar',
		'right'		=> 'Right bar',
	);
	
	$lang['admin']['widgets']['default']['msgs'] = array(
		1	=> 'Config saved',
		-1	=> 'An error occurred while trying to save, please try again',
	);


	
	/* "raw" panel */	
	
	$lang['admin']['widgets']['raw'] = array(
		'head'		=> 'Manage Widgets (<em>raw editor</em>)',
		'descr'		=> 'A <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="What is a Widget?">'.
						'Widget</a> is a visual element of a <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="What is a plugin?">'.
						'Plugin</a> that you can put in some special areas (the <em>widgetsets</em>) on your blog pages. </p>'.
						'<p>This is the <strong>raw</strong> editor; some advanced users or people who '.
						'can\'t have JavaScript might prefer it.',
						
		'fset1'		=> 'Editor',
		'fset2'		=> 'Apply Changes',
		'submit'	=> 'Apply',

	);
	
	
	$lang['admin']['widgets']['raw']['msgs'] = array(
		1	=> 'Config saved',
		-1	=> 'An error occurred while trying to save. This may happen for several reasons: maybe your file contains syntax errors.',
	);

		

	/* system errors */
		
	$lang['admin']['widgets']['errors'] = array(
		'generic'	=> 'The widget called <strong>%s</strong> is not registered, and it might not work. '.
 				'Is the plugin enabled in the <a href="admin.php?p=plugin">plugin panel</a>?'

	);
	
?>
