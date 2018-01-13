<?php
$curl = curl_init();
$timeout = 30;
$proxies = file("proxy.txt");
$r="https://www.youtube.com/watch?v=1aIKJ_wv8-o";
	for($x=0;$x<25; $x++){
		set_time_limit(10);
		echo $proxies[$x];
		curl_setopt($curl, CURLOPT_URL,$r);
		curl_setopt($curl , CURLOPT_PROXY , $proxies[$x]);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($curl, CURLOPT_REFERER, "http://google.com/");
		$text = curl_exec($curl);
		echo "Hit Generated:";
		echo $x;
	}
