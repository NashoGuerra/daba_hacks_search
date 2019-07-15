<?php
$xml = new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteOutput=false;
$xml->load("data.xml");
if(!$xml) {
	$hacks=$xml->createElement("hacks");
	$xml->appendChild($hacks);
} else {
	$hacks=$xml->firstChild;
}
if (isset($_POST['submit'])) {
	
	$fname=$_POST['name'];
	$fdescription=$_POST['description'];
	$fcode=$_POST['code'];
	
	$hack=$xml->createElement("hack");
	$hacks->appendChild($hack);
	$name=$xml->createElement('name',$fname);
	$hacks->appendChild($name);
	$name=$xml->createElement('description',$fdescription);
	$hacks->appendChild($description);
	$name=$xml->createElement('code',$fcode);
	$hacks->appendChild($code);
	echo"<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("data.xml");
	
}
?>