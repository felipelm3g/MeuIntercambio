<?php
header("Content-type: text/xml");

$xml = new XMLWriter();
$xml->openURI("php://output");
$xml->startDocument("1.0", "UTF-8");
$xml->setIndent(4);
$xml->startElement("xml");
$xml->writeAttribute('version', '1.0');  

$xml->writeElement("total", 0);

$xml->endElement();
$xml->endElement();

$xml->endDocument();
$xml->flush();
?>