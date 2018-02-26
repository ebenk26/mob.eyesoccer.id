<!--UPLOAD PAGE--> 
<form action="eyeme"  enctype="multipart/form-data"  id="formtpl" method="post" class="form_multi ">
<div id="imgtemplate" style="display:none;margin-top:200px;background:#ccc;position:fixed">
	<input type="hidden" name="fn" value="upload" class="cinput">
	<input type="file" name="fupload" hidden="hidden" id="upload" form="formtpl" class="cinput">

	<div class="img">
		<img src="#" class="upl-img" width="100" height="100"> 
	</div>

	<textarea name="caption"></textarea>

<button type="submit">upload
</button>
</div>

<?php echo form_close();?>