<?php
header("Content-type: text/xml");

$xml = new XMLWriter();
$xml->openURI("php://output");
$xml->startDocument("1.0", "UTF-8");
$xml->setIndent(4);
$xml->startElement("xml");
$xml->writeAttribute('version', '1.0');  

$xml->startElement("item");
$xml->writeElement("nome", " Nome do produto ");
$xml->writeElement("valor"," Valor do produto ");
$xml->endElement();

$xml->endElement();
$xml->endElement();

$xml->endDocument();
$xml->flush();
?>