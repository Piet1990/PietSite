<?php 

$dom = new DOMDocument('1.0', 'utf-8');
 
$root = $dom->createElement('Liste');
$dom->appendChild($root);
 
$root->appendChild($firstNode = $dom->createElement("Webseite"));
$firstNode->setAttribute("id", "1");
$firstNode->setAttribute("kategorie", "123");
$firstNode->appendChild($dom->createElement("Titel", "PHP Tutorials"));
 
$root->appendChild($secondNode = $dom->createElement("Webseite"));
$secondNode->setAttribute("id", "2");
$secondNode->setAttribute("kategorie", "456");
$secondNode->appendChild($dom->createElement("Titel", "XML dynamisch generieren"));
 
header('Content-type: text/xml; charset=utf-8');
echo $dom->saveXML();
?>

    
       
       
      