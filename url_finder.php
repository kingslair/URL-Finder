/*
 * Given any finitely long paragraph's with Uniform Resource 
 * Locators within it, this script highlights those URL's and 
 * converts them into hyperlinks.
 */
 
<?php

function url_finder($text) {
		$regex = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
    
    // Break down the complete text into words
		$words = explode(" ", $text);
    
		foreach ($words as $word) {
		// Check if there is a url in the text
		if(preg_match($regex, $word, $url)) 
			{
    	    	// convert the URL's to hyperlinks
				    echo " ";
       			echo preg_replace($regex, "<a href={$url[0]}>{$url[0]}</a> ", $word);
			} 
		else 
			{
	     	    // echo back if it is a simple text
			      echo " ";
    		    echo $word;
 			}
      
		}
}

$text = "The brown dog in the profile picture of my friend's http://facebook.com account, which he 
		     previously shared on his http://google.com account, is actually the dog which featured in 
		     the http://forbes.com magazine for fifty most important dogs of all times.";

// Call the function URL Finder
url_finder($text);

?>
