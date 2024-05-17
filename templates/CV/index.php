<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.CV
 *
 * @copyright   (C) YEAR Your Name
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * This is a heavily stripped down/modified version of the default Cassiopeia template, designed to build new templates off of.
 */

defined('_JEXEC') or die;  //required for basically ALL php files in Joomla, for security. Prevents direct access to this file by url.

//Imports ("use" statements) - objects from Joomla that we want to use in this file
use Joomla\CMS\Factory; // Factory class: Contains static methods to get global objects from the Joomla framework. Very important!
use Joomla\CMS\HTML\HTMLHelper; // HTMLHelper class: Contains static methods to generate HTML tags.
use Joomla\CMS\Language\Text; // Text class: Contains static methods to get text from language files
use Joomla\CMS\Uri\Uri; // Uri class: Contains static methods to manipulate URIs.

/** @var Joomla\CMS\Document\HtmlDocument $this */

$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();  // Get the Web Asset Manager - used to load our CSS and JS files

// Add Favicon from images folder
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'icon', 'rel', ['type' => 'image/x-icon']);


// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu     = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';

//Get params from template styling
//If you want to add your own parameters you may do so in templateDetails.xml
$testparam =  $this->params->get('testparam');

//uncomment to see how this works on site... it just shows 1 or 0 depending on option selected in style config.
//You can use this style to get/set any param according to instructions at https://kevinsguides.com/guides/webdev/joomla4/joomla-4-templates/adding-config
//echo('the value of testparam is: '.$testparam);

// Get this template's path
$templatePath = 'templates/' . $this->template;


//load bootstrap collapse js (required for mobile menu to work)
//this loads collapse.min.js from media/vendor/bootstrap/js - you can check out that folder to see what other bootstrap js files are available if you need them
HTMLHelper::_('bootstrap.collapse');
//dropdown needed for 2nd level menu items
HTMLHelper::_('bootstrap.dropdown');
//You could also load all of bootstrap js with this line, but it's not recommended because it's a lot of extra code that you probably don't need
//HTMLHelper::_('bootstrap.framework');


//Register our web assets (Css/JS) with the Web Asset Manager
//The files are defined in joomla.asset.json!!! If you don't want to use the included CSS or JS, just remove these lines or replace the CSS/JS files with your own code!
$wa->useStyle('template.CV.mainstyles');
$wa->useStyle('template.CV.user');
$wa->useScript('template.CV.scripts');

//Set viewport meta tag for mobile responsiveness -- very important for scaling on mobile devices
$this->setMetaData('viewport', 'width=device-width, initial-scale=1');

?>

<?php // Everything below here is the actual "template" part of the template. Where we put our HTML code for the layout and such. ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

    <?php // Loads important metadata like the page title and viewport scaling ?>
	<jdoc:include type="metas" />

    <?php // Loads the site's CSS and JS files from web asset manager ?>
	<jdoc:include type="styles" />
	<jdoc:include type="scripts" />

    <?php /** You can put links to CSS/JS just like any regular HTML page here too, and remove the jdoc:include script/style lines above if you want.
     * Do not delete the metas line though
     * 
     * For example, if you want to manually link to a custom stylesheet or script, you can do it like this:
     * <link rel="stylesheet" href="https://mysite.com/templates/mytemplate/mycss.css" type="text/css" />
     * <script src="https://mysite.com/templates/mytemplate/myscript.js"></script>
     * */ 
    ?>
    
    <link rel="stylesheet" href="../../media/templates/site/CV/css/template.css" type="text/css" />
</head>

<?php // you can change data-bs-theme to dark for dark mode  // ?>
<body class="site <?php echo $pageclass; ?>" data-bs-theme="light">



    <?php // Generate the main content area of the website ?>
    <main class="siteBody">
        <div id="side">
			<jdoc:include type="modules" name="side" style="none" />
        </div>
        <div id="main">
			<jdoc:include type="modules" name="main" style="none" />
        </div>

    </main>

    <?php // Load Footer ?>
    <footer>

    </footer>

</body>
</html>
