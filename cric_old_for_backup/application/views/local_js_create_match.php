	
<script>



			//// get state list by ajax accrording country
	function get_state(aa) {
		var pp  = aa;
		//alert(pp);
		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/load_state/"+pp, success: function(result){
        $("#load_state").html(result);
    }});
	}	
	/////get city list by ajax regarding state 
		function get_city(bb) {
		var pp  = bb;
		//alert(pp);

		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/load_city/"+pp, success: function(result){
				$("#load_city").html(result);
				//alert(result);

			}});		
		}
	
	
	
</script>

	