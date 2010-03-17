<?php
  
  $file = "data/manifest-exhibition.xml";
  $dom = new DOMDocument();
  $dom->load($file, LIBXML_NOBLANKS|LIBXML_DTDLOAD|LIBXML_DTDATTR);
  $dom->formatOutput = true;
  $post = $dom->createElement("post");
  
  if($dom->documentElement->hasChildNodes())
  {
    $dom->documentElement->insertBefore($post, $dom->documentElement->firstChild);
  }
  else
  {
    $dom->documentElement->appendChild($post);
  }

  $postID = uniqid();
  
  $post->setAttribute("id", $postID);

  $myName = $_POST['name'];
  $myMessage = $_POST['message'];
  $myColor = $_POST["color"];
  $myTime = date('c');

  $text = $dom->createCDATASection($myMessage);

  //Create DOM Elements
  $postName = $dom->createElement("name", $myName);
  $postTime = $dom->createElement("time", $myTime);
  $postMessage = $dom->createElement("message");
  $postColor = $dom->createElement("color", $myColor);

  //Append DOM Elements to XML
  $post->appendChild($postName);
  $post->appendChild($postTime);
  $post->appendChild($postMessage);
  $postMessage->appendChild($text);
  $post->appendChild($postColor);
  
    
  //Save XML File
  $dom->save('data/manifest-exhibition.xml');
  
?>
