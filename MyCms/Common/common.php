<?php 
/**
 * 获取请求ip
 *
 * @return ip地址
 */
function getIp() {
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
		$ip = getenv('HTTP_CLIENT_IP');
	} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
		$ip = getenv('REMOTE_ADDR');
	} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
}
/**
* 转换字节数为其他单位
*
*
* @param	string	$filesize	字节大小
* @return	string	返回大小
*/
function sizecount($filesize) {
	if ($filesize >= 1073741824) {
		$filesize = round($filesize / 1073741824 * 100) / 100 .' GB';
	} elseif ($filesize >= 1048576) {
		$filesize = round($filesize / 1048576 * 100) / 100 .' MB';
	} elseif($filesize >= 1024) {
		$filesize = round($filesize / 1024 * 100) / 100 . ' KB';
	} else {
		$filesize = $filesize.' Bytes';
	}
	return $filesize;
}
//是否显示
function ismenu($type = 0)
{
	 $map = array(
	 		1 => '<span class="label label-success">显示</span>', 
	 		0 => '<span class="label label-important">不显示</span>',
	 		);
	 return $map[$type];
}
//是否显示
function getStatus($type = 0)
{
	 $map = array(
	 		1 => '<span class="label label-success">正常</span>', 
	 		0 => '<span class="label label-important">禁用</span>',
	 		);
	 return $map[$type];
}
?>