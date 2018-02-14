<div class="container" style="margin-top:47px;">
	<div id="reqdetail" class='loaddetail' action="eyemarket" loading="off" clean="clsmarket">
	    <div id='clsmarket'>
	        <script>
	            $(document).ready(function(){
	                $(window).on('load',function(){
	                    ajaxOnLoad('loaddetail');
	                });
	            });
	        </script>
	    </div>
	    <input type='hidden' name='fn' value='market_detail' class='cinput'>
	    <input type='hidden' name='slug' value='<?= $slug; ?>' class='cinput'>
	</div>
</div>
