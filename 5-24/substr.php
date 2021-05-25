<?php
	// substr()		截取字符串
	
	$str1 = "abcdefg";
	
	echo "原字符串：$str1 \n";
	echo "截取的字符串1： " . substr($str1,0,3) . "\n";
	echo "截取的字符串2： " . substr($str1,3,3) . "\n";
	echo "截取的字符串3： " . substr($str1,0) . "\n";
	echo "截取的字符串4： " . substr($str1,-1) . "\n";
	echo "截取的字符串4： " . substr($str1,-3) . "\n";
	
	
	