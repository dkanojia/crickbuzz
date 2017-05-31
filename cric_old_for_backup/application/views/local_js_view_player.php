
<script>

$(document).on('keyup', '#plByName', function() {
	var plna1 = document.getElementById('plByName').value;
		//alert(plna1)
	if(plna1 != ''){
		$.ajax({url: "player_aj_name/"+plna1, type: "POST" , success: function(result){
			//alert(result);
        $("#view_player_tbl").html(result);
    }});
	}	
	
});


</script> 
<script>

$(document).on('keyup', '#plByCity', function() {
    //alert('key up');
	var plna2 = document.getElementById('plByCity').value;
    if(plna2 != ''){
	$.ajax({url: "ajax_view_player_by_city/"+plna2, success: function(result){
	$("#view_player_tbl").html(result);
	//alert(result);

	}});
	}
	
});

$(document).on('keyup', '#plByMobile', function() {
	var plna3 = document.getElementById('plByMobile').value;
    if(plna3 != ''){
	$.ajax({url: "ajax_view_player_by_mobile/"+plna3, success: function(result){
	$("#view_player_tbl").html(result);
				//alert(result);

	}});
	}
});

</script>