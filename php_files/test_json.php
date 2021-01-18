<?php
    function get_json($path)
    {
        $file = fopen($path,"r");
        $dir = "";
	    while(! feof($file))
  	    {
  		    $dir .= fgets($file);
  		    $dir = trim(preg_replace('/\s\s+/', '', $dir));
  		    //echo $dir. "<br />";
 		
        }
        return $dir;
    }
    $password = $_POST["password"];
    if($password === "sourav")  // to be linked with file later so that can be managed and encrypted
    {
        echo json_encode(get_json("test_news.json"));
    }
?>