<?php
require "data/packages.php";

foreach ($packages as $package)
{
	foreach ($package["files"] as $file => $url)
	{
		if (strpos($url, "https://") !== false)
		{
			echo "URL cannot specify protocol - {$url}\n";
			exit(1);
		}
		if (strpos($url, "://") !== false)
		{
			echo "URL cannot specify protocol; HTTPS must work - {$url}\n";
			exit(1);
		}
		if (strpos($url, "%") !== false)
		{
			echo "Path cannot be encoded - {$url}\n";
			exit(1);
		}
	}
}
