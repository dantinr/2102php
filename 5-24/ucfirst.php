<?php
	$str1 = "hello world HELLO abc";

	// 首字母大写
	echo ucfirst($str1);
	echo "\n";
	//每个单词的首字母大写
	echo ucwords($str1);
	echo "\n";
	// 将字符串转为大写
	echo strtoupper($str1);
	echo "\n";
	// 将字符串转小写
	echo strtolower($str1);