<?php
function get_id($urlorid) {
	if (strlen ( $urlorid ) == 11) {
		return $urlorid;
	}
	$pos = strpos ( $urlorid, "v=" ) + 2;
	$id = substr ( $urlorid, $pos, 11 );
	return $id;
}
function get_url($id) {
	return "https://www.youtube.com/watch?v=" . $id;
}
function get_title($id) {
	return exec("youtube-dl --get-title " . $id);
}
function get_duration($id) {
	return exec("youtube-dl --get-duration " . $id);
}
?>