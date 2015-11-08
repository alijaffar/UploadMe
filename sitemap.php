<?php
// Site pages for search engines
header("Content-type: text/xml");
//include_once ('c0nf.php');
echo '<?xml version="1.0" encoding="UTF-8"?>';

$site_url = 'http://website.com/';
include __DIR__.'/res/json.php';
?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php
	$component=defined("DEBUG")?PATHINFO_BASENAME:PATHINFO_FILENAME;
	$urlpath=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$current=pathinfo($urlpath, $component);
	
	$navs=array(""=>  lang("home"), "contact.php"=>lang("contact"), "remove.php"=>lang("remove"), "privacy.php"=>lang("privacy"), "terms.php"=>lang("terms"));
	foreach($navs as $file => $label) {
		$page=pathinfo($file, $component);
		if ($page == $current) {
			echo '
			<url>
			  <loc>'.$site_url.htmlspecialchars($page).'</loc>
			  <changefreq>daily</changefreq>
			  <priority>1.00</priority>
			</url>				
			'.PHP_EOL; //<a href="">'.htmlspecialchars($label).'</a>
		} else {
			echo '
			<url>
			  <loc>'.$site_url.htmlspecialchars($page).'</loc>
			  <changefreq>daily</changefreq>
			  <priority>1.00</priority>
			</url>	
			'.PHP_EOL;
		}
	} 
?>
        </urlset>	
