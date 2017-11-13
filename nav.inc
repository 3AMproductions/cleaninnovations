<?php

function menu($p){
	// when $p comes in, a '/' is the first character. the ltrim function below removes that
	// then str_replace replaces the '.htm' extension with '' (thus removing it) so $p is now the filename with no extension
	// then the next variables check to see which page is active by checking to see if the requested page ($p) is in the 
	// list of pages
	
	$p = substr($p, strrpos($p,'/')+1, -(strlen($p) - strrpos($p, '.')));

	//$columbus = in_array($p,array('ColsRE','33N3rd','85EGay','35EGay','BLPlaza','HmltnCtr','100n5th','155n5th','ColsMaps'));
	//$cleveland = in_array($p,array('ClevOfce','SupBldg','CtyClb','ClevelMediation','ClevMap'));
	
	// now we have booleans, for each menu item, if the associated boolean is true, add the location class
	// so it is technically possible to have more than one tab 'active' by having the same page name be in
	// more than one of the arrays above
  
	// .'<li>'.$p.'</li>'
  
  //$n .= '<li><a href="33N3rd.html"'.($p=='33N3rd' ? ' class="location"' : '').'>Charles Schwab Building</a></li>';
	
  $n = '<ul id="nav">';
  $n .= '<li class="first"><a href="index.htm"'.($p=='index' ? ' class="location"' : '').'>Home</a></li>';
  $n .= '<li><a href="about_us.htm"'.($p=='about_us' ? ' class="location"' : '').'>About Us</a></li>';
  $n .= '<li><a href="news.htm"'.($p=='news' ? ' class="location"' : '').'>News</a></li>';
  $n .= '<li><a href="innovation.htm"'.($p=='innovation' ? ' class="location"' : '').'>Innovation</a></li>';
  $n .= '<li><a href="training-programs.htm"'.($p=='training-programs' ? ' class="location"' : '').'>Training and Programs</a></li>';
  $n .= '<li><a href="equipment.htm"'.($p=='equipment' ? ' class="location"' : '').'>Equipment</a></li>';
  $n .= '<li><a href="dilutions_control_systems.htm"'.($p=='dilutions_control_systems' ? ' class="location"' : '').'>Dilutions Control Systems</a></li>';
  $n .= '<li><a href="paper_towel-tissues.htm"'.($p=='paper_towel-tissues' ? ' class="location"' : '').'>Paper Towel and Tissues</a></li>';
  $n .= '<li><a href="environmental_programs.htm"'.($p=='environmental_programs' ? ' class="location"' : '').'>Environmental Programs</a></li>';
  $n .= '<li><a href="http://orders.cjs.net/webapp/oe/">Web Order System</a></li>';
  $n .= '<li><a href="credit.pdf">Credit Application</a></li>';
  $n .= '<li><a href="links.htm"'.($p=='links' ? ' class="location"' : '').'>Links</a></li>';
  $n .= '<li class="last"><a href="contact_us.htm"'.($p=='contact_us' ? ' class="location"' : '').'>Contact Us</a></li>';
  $n .= '</ul>';
	
	return $n;
}
?>
