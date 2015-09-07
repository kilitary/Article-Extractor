<?php
	/*	
		PHP Web Article Extractor
		A PHP library to extract the primary article content of a web page.
		
		Code author: Luke Hines
		Licence: PHP Web Article Extractor is made available under the MIT License.
	*/
	
	require 'text_block.php';

	class TextDocument 
	{
		public $title; // The title of the article
		public $articleText; // The text of the article
		public $textBlocks; // Raw text block of article
		public $language; // The language of the article
		//public $keyWords; // The key words of the article
    }
?>  