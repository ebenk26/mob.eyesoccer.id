<!--UPLOAD PAGE--> 
<?php echo form_open_multipart()?>
<div id="imgtemplate" style="display:none;margin-top:200px;background:#ccc;position:fixed">
	<div class="img">
		<img src="#" class="upl-img" width="100" height="100"> 
	</div>

	<textarea name="caption"></textarea>

<button type="submit">upload
</button>
</div>

<?php echo form_close();?>