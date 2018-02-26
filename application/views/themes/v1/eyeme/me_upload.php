<!--UPLOAD PAGE--> 
<form action="eyeme" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form_basic" id="formtpl">
<div id="imgtemplate" style="display:none;margin-top:200px;background:#ccc;position:fixed">
	<input type="hidden" name="fn" value="upload">
	
	<div class="img">
		<img src="#" class="upl-img" width="100" height="100"> 
	</div>

	<textarea name="caption"></textarea>

<button type="submit">upload
</button>
</div>

<?php echo form_close();?>