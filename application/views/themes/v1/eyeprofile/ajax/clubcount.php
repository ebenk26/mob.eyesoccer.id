<?php
	if($klublist)
	{
		$klublist = json_decode($klublist);

		if ($submenu == 'klub')
		{
			foreach ($klublist->data as $value)
			{
?>
				<table class="content-tab-eprofile">
					<tr>
						<td>Jumlah Klub</td>
						<td>: <?php echo $value->cc;?></td>
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
			}
		}
		else
		{
			foreach ($klublist->data as $value)
			{
?>
				<tr>
				    <td>jumlah klub</td>
				    <td>:</td>
				    <td><?php echo $value->cc;?> klub</td>
				</tr>
<?php
			}
		}
	}
?>