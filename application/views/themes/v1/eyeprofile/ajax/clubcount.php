<?php if($klublist){
	$klublist = json_decode($klublist);
	?>
	<table class="content-tab-eprofile">
		<tr>
			<td>Jumlah Klub</td>
			<td>: <?php echo count($klublist->data)?></td>
		</tr>
		<tr>
			<td>Lorem Ipsum</td>
			<td>: Lorem Ipsum</td>
		</tr>
		<tr>
			<td>Lorem Ipsum</td>
			<td>: Lorem Ipsum</td>
		</tr>
	</table>
	<?php
}?>