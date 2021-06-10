<!DOCTYPE html>
<html>
    <title>File Streamer v1.0</title>
    <head>
        <script src="myFunctions.js"></script>
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body onresize="checkResizedWindow();">
		<!--img class="bg" src="Icons/wall.jpg" alt="Avatar"-->
        <!--<button onclick="location.href='Contents/com.skype.raider_7.02.0.410-117571994_minAPI15(armeabi-v7a)(nodpi)_apkmirror.com.apk';">Download</button>-->
        <div id="modalBG">
            <table id="contentTable" border="1" width="100%">
                <tr>
                    <td class="closeBtn"><button onclick="showHide('modalBG',false);closeVideo('videoHold');">Close</button></td>
                </tr>
                <tr>
                    <td class="videoHold">
                            <video id="videoHolder" class="videoHold" controls>
                                <source id="videoSource" src="" type="video/mp4">
                            </video>
                    </td>
                </tr>
            </table>
        </div>
        <div id="mahGrid" class="grid-container">
            <!--
            <div class="card">
                <img class="imgIcons" src="Icons/video.png" alt="Avatar">
                <div class="container">
                    <h4><b>John Doe</b></h4>
                    <p>Architect & Engineer</p>
					<button class="playBtns" onclick="loadVideo(\'videoHolder\',\''.$scanner[$n].'\');showHide(\'modalBG\',true);">Play</button><br>
					<button class="downloadBtns" onclick="location.href=\'Contents/'.$scanner[$n].'\'">
					Download MP4 
					File <img src="Icons/download.png" alt="Avatar" style="height: 13px;"></button>
                </div>
            </div>-->
        <?php
            $dir = "Contents/";
            $scanner = scandir($dir,1);
			$fileName = "";
			$maxLength = 25;
            for($n=0;$n<sizeof($scanner)-2;$n++){
                if(strpos($scanner[$n],".mp4")){
					if(strlen($scanner[$n])-5 > $maxLength){
						$fileName = substr($scanner[$n],0,$maxLength).'.mp4';
					}else{
						$fileName = $scanner[$n];
					}
                    echo '<div class="card">
							<table>
								<tr>
									<td>
										<img class="imgIcons" src="Icons/video.png" alt="Avatar" style="">
									</td>
									<td>
										<div class="container">
											<b>'.($n+1).'. '.$fileName.'</b>
											<p class="resizableText">'.$scanner[$n].'</p>
											<button class="downloadBtns" onclick="location.href=\'Contents/'.$scanner[$n].'\'">
											Download MP4 
											File <img src="Icons/download.png" alt="Avatar" style="height: 13px;"></button>
										</div>
									</td>
								<tr>
							</table>
							
						</div>';
                    //echo $scanner[$n].' <button class="playBtns" onclick="loadVideo(\'videoHolder\',\''.$scanner[$n].'\');showHide(\'modalBG\',true);">Play</button><br>';
                }else{
                    $names = explode('.',$scanner[$n]);
                    $size = sizeof($names);
                    $fileType = strtoupper($names[$size-1]);
                    $icon = "";

                    switch ($fileType) {
                        case 'APK':
                            $icon = "apk";
                            break;
                        case 'ZIP':
                            $icon = "archive";
                            break;
                        case 'RAR':
                            $icon = "archive";
                            break;
                        case 'EXE':
                            $icon = "executable";
                            break;
						case 'MP3':
                            $icon = "music";
                            break;
                        default:
                            $icon = "avatar";
                            break;
                    }
					
					if(strlen($scanner[$n])-5 > $maxLength){
						$fileName = substr($scanner[$n],0,$maxLength).'.mp4';
					}else{
						$fileName = $scanner[$n];
					}
                    echo '
                    <div class="card">
                        <table>
								<tr>
									<td>
										<img class="imgIcons" src="Icons/'.$icon.'.png" alt="Avatar" style="">
									</td>
									<td>
										<div class="container">
											<b>'.($n+1).'. '.$fileName.'</b>
											<p class="resizableText">'.$scanner[$n].'</p>
											<button class="downloadBtns" onclick="location.href=\'Contents/'.$scanner[$n].'\'">
											Download MP4 
											File <img src="Icons/download.png" alt="Avatar" style="height: 13px;"></button>
										</div>
									</td>
								<tr>
							</table>
                    </div>
                    ';
                    //echo $scanner[$n].'<a class="downloadBtns" href="Contents/'.$scanner[$n].'">Download '.strtoupper($names[$size-1]).' file</a><br>';
                }
                
            }
        ?>
        </div>
    </body>
</html>