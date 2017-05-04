<?php
function p($name)
{
	if (is_null($name)) {
		var_dump(null);
	} elseif (is_bool($name)) {
		var_dump($name);
	} else{
		echo "<pre style='border:1px solid #ccc; border-radius:5px; background-color:#fefefe; padding:10px;opacity:0.8;'>".print_r($name, true)."</pre>";
	}
}