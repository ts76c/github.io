<?php

require_once("ini.php");

ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

//データベース情報は、環境に応じて変更をお願い致します。
$mysqli = new mysqli( _DB_HOST, _DB_USER, _DB_PASS, _DB_NAME);

if( $mysqli->connect_errno ) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}

$mysqli->set_charset('utf8');

//テーブル名は、環境に応じて変更をお願い致します。
$sql = "SELECT name,lat,lng,icon FROM geo_locations";
$res = $mysqli->query($sql);

print '
$A = "booth&man.jpg";
$B = "camera_booth.png";
$C = "camera_man.png";

// マーカーを立てる場所名・緯度・経度
markerData = [{';

$i = 0;
while( $data = $res->fetch_assoc() ) {

	$name = $data['name'];	
	$lat = $data['lat'];
	$lng = $data['lng'];
	$icon = $data['icon'];

	print 'name:"'. $name . '",';
	print 'lat:'. $lat . ',';
	print 'lng:'. $lng . ',';
	print 'icon:'. $icon;

	if (($res->num_rows) == ($i + 1)) {
		// 最後のレコードだったら
		print '}]';
	} else {
		// それ以外
		print '},{';
	}
	$i++;
}
$res->free();
$mysqli->close();

?>