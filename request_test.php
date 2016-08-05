<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/web_service/test4_iuz/test4.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $exec = curl_exec($curl);
    curl_close($curl);

	//print_r(json_decode($exec));

	$data = json_decode($exec);
	foreach ($data as $key => $value)
	{
		echo 'ทีมเหย้า - '.$value->homeTeam;
		echo '<br>';
		echo 'ทีมเยือน - '.$value->awayTeam;
		echo '<br>';
		echo 'รายละเอียด - '.$value->information;
		echo '<br>';
		echo 'แข่งเวลา - '.$value->fixture;
		echo '<br>';
		echo 'จุคนในสนามได้ - '.$value->capacity;
		echo '<br>';
		//echo '<a href="request_cmtc_detail.php?id='. $value->id .'">คลิ๊กเพื่อดูข้อมูล</a>';
		echo '<hr>';
	}

    //var_dump(json_decode($exec));
?>