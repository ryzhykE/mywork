<?php

/**
 * @return string
 * upload file in dir
 */
function upload($uploadfile) {
	if(is_dir(PATH))
	{
		if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
			return SUCCESS_LOAD;
		} else {
			return ERR_LOAD;
		}
	} else {
		return NO_DIR;
	}

}

/**
 * @return array
 * name and size file
 */
function showDir($puth){
	if(is_dir(PATH))
	{
	$nameFile = scandir($puth);
	$nameFile = array_splice($nameFile, 2);
	//var_dump($namesFile);
	    $size = [];
	    foreach($nameFile as $key => $value){
		  $fileSize = filesize($puth . $nameFile[$key]);
		    if($fileSize > 1024) {
			    $fileSize = $fileSize .= 'b';
		    } else {
			    $fileSize = $fileSize .= 'kb';
		    }
		    //var_dump($fileSize);
		    array_push($size,$fileSize);
	    }
		$result = [$nameFile, $size];
	      return $result;
	} else {
		return NO_DIR;
	}
}

/**
 *@return true
 * del file
 */
function deleteFile($del){
	if(is_dir(PATH)) {
		if (file_exists(PATH . $del)) {
			if (unlink(PATH . $del)) {
				return DEL_FILE;
			}
		} else {
			return NO_FILE;
		}
	}else {
		return NO_DIR;
	}
}











