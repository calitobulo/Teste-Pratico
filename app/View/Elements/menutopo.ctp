<ul class="actions"> 
<!-- Menu de topo -->
	<?php 
/*
Chamar no layout, abaixo da div <div id="header">
		<?php echo $this->element('menutopo');//Aqui?>
*/
	$grupo = $current_user['group_id'];
	$user=$current_user['username'];
	if(!$user) $user='Não logado!';

	if($user=='Não logado!'){
		echo $this->Html->link(__('Login'), '/login'); 
	}else{
		if($grupo ==1){
		}else{

		}
	}
		echo '&nbsp;&nbsp;&nbsp;Logado como: '. $user; 
	?>
</ul> 
