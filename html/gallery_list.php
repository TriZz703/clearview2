<?
	$set = $_REQUEST['s'] ? $_REQUEST['s'] : '';
?><select id="cd-dropdown2" class="cd-select"><option value="-1" selected>Choose a set first</option><?php
	if (!empty($set)) {
		if ($topdir = opendir('../images/gallery/'.$set.'/')) {
			while (false !== ($folder = readdir($topdir))) {
				if ($folder != "." && $folder != "..") {
			?><option value="<?=$folder;?>" class="coicon-camera"><?=$folder;?></option><?
				}
			}
			closedir($topdir);
		}
	}
	?></select>
