
<script>

$(document).on('keyup', '#search_name', function() {
	var plna1 = document.getElementById('search_name').value;
	if(plna1 != ''){
		$.ajax({url: "add_player_ajax_search_name/"+plna1, type: "POST" , success: function(result){
        $("#player_list").html(result);
    }});
	}	
	
});


</script> 
<script>

$(document).on('keyup', '#search_city', function() {
    //alert('key up');

	var plna2 = document.getElementById('search_city').value;
  if(plna2 != ''){
	$.ajax({url: "add_player_ajax_search_city/"+plna2, success: function(result){
	$("#player_list").html(result);

	}});
	}
	
});

$(document).on('keyup', '#search_mobile', function() {
	var plna3 = document.getElementById('search_mobile').value;
    if(plna3 != ''){

	$.ajax({url: "add_player_ajax_search_mobile/"+plna3, success: function(result){
	$("#player_list").html(result);

	}});
	}
});

</script>