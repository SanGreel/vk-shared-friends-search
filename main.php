<?php
include 'classes/classe.vkfriends.php';

$vkf = new VkFriends;

$u_id[0] = $vkf->clean_var($_POST["u1"]);
$u_id[1] = $vkf->clean_var($_POST["u2"]);

if(($u_id[0]!='')&&($u_id[1]!='')){
	
	echo '<div id="block">';
	
	$friends[0] = $vkf->get_friends($u_id[0]);
	$friends[1] = $vkf->get_friends($u_id[1]);
	
	if(($friends[0]!='')&&($friends[1]!='')){
		
		$mutual = $vkf->mutual_friends($friends);
		
		
		
		if($mutual!=''){
		
			$users_info = $vkf->get_users_info($mutual);
			$vkf->viev_users_info($users_info);
			
		}else{
		
			print("<center><h2 class='error'>Общих друзей нету</h2></center>");
			
		}

	
	}else{
	
		print("<center><h2 class='error'>Один из пользователей не доступен</h2></center>");
		
	}
	
	echo '</div>';	
}


?>