<?php 
use App\Profile;


function showInfoWeb() {
	$data = Profile::first();
	return $data;
}

function getImageYoutube($link) {
	$video_id = explode("?v=", $link);
	if (empty($video_id[1]))
	    $video_id = explode("/v/", $link);

	try{
		$video_id = explode("&", $video_id[1]);
    }catch (\Exception $exception){
        return 2;
    }
	$video_id = $video_id[0];
	$link_img = 'https://img.youtube.com/vi/' . $video_id . '/mqdefault.jpg';
	return $link_img;
}

function checkImgOrVideo($link) {
	// $link="http://miyabibar.vn/miyabi/images/about.png";
 	 $mimes  = array(
        IMAGETYPE_GIF => "image/gif",
        IMAGETYPE_JPEG => "image/jpg",
        IMAGETYPE_PNG => "image/png",
        IMAGETYPE_SWF => "image/swf",
        IMAGETYPE_PSD => "image/psd",
        IMAGETYPE_BMP => "image/bmp",
        IMAGETYPE_TIFF_II => "image/tiff",
        IMAGETYPE_TIFF_MM => "image/tiff",
        IMAGETYPE_JPC => "image/jpc",
        IMAGETYPE_JP2 => "image/jp2",
        IMAGETYPE_JPX => "image/jpx",
        IMAGETYPE_JB2 => "image/jb2",
        IMAGETYPE_SWC => "image/swc",
        IMAGETYPE_IFF => "image/iff",
        IMAGETYPE_WBMP => "image/wbmp",
        IMAGETYPE_XBM => "image/xbm",
        IMAGETYPE_ICO => "image/ico");

    //  $ext = strtolower(array_pop(explode('.',$link)));
    // if (array_key_exists($ext, $mimes)) {
    //     return true;
    // } else {
    	return true;
    // }
}