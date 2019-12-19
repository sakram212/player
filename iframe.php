<?php
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-CLIENT-ID, X-CLIENT-SECRET');
header('Access-Control-Allow-Credentials: true');
error_reporting(1);
include "curl_gd.php";
include "functions.php";

if(isset($_GET['dt'])){
	$data = base64url_decode($_GET['dt']);
	$data = json_decode($data,true);
	
	$url = $data['url'];
	$thumbnail = $data['thumbnail'];
	
	
	$linkdown = $url;
	if(isset($url) && strpos($url,"//drive.google.com/") !== FALSE){
		$linkdown = Drive($url);
		
		if($thumbnail == ''){
			$thumbnail = generateThumb($url);
		}
	}
	
}


$file = '[{"type": "video/mp4", "label": "HD", "file": "'.$linkdown.'"}]';

?>

<div id="player"></div>
<script type="text/javascript" src="//content.jwplatform.com/libraries/0P4vdmeO.js"></script>

<!-- <script type="text/javascript" src="//jwpsrv.com/library/AqFhtu2PEeOMGiIACyaB8g.js"></script> -->
<script type="text/javascript">
	
	var playerInstance = jwplayer("player");
		playerInstance.setup({
			sources: <?=$file?>,
			advertising: {
	    			client: "vast",
	    			tag: "ads.xml"
	  		},			
			image: "<?=$thumbnail?>",
			autostart: false,
			controls: true,
			width: "100%",
			height: "100%",
			aspectratio: "16:9",
			abouttext: "Nonton Online",
			aboutlink: "//",		
			tracks: [{ 
				file: "<?=$data['subtitle']?>", 
				label: "Indonesia",
					kind: "captions",
					"default": true 
				},{
					file: "<?=$data['subtitleen']?>", 
					label: "English",
					kind: "captions",
					"default": true
				}],					
			
			
			<?php
			if(isset($data['logo']) && !empty($data['logo'])){
				?>
				logo: {
					file: "<?=$data['logo']?>",
					position: 'top-center',
					margin: '5'
				},
				<?php
			}
			?>
			captions: {
                    		color: '#ffcc00',		    
                    		fontSize: 12,
				backgroundOpacity: 50
                    		
				
                	}
            
    
    });
	
	playerInstance.addButton("//icons.jwplayer.com/icons/white/download.svg", "Download Video", function() {
        window.open("" + playerInstance.getPlaylistItem()['file'] + '&title=');
    }, "download");
 
</script>
<style type="text/css">
body{padding: 0; margin: 0;background: #000}
.jwplayer.jw-flag-aspect-mode, .video-js {width:100% !important; height: 100% !important}
#player{text-align: center;color:#fff;}
</style>
<!--iklan taro disini-->
