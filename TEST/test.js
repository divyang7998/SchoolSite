	$("#button5").click(function(){

				$.ajax({
				type:"POST",
				url:"teacherdb.php",
				datatype:'json',
				async:TRUE,
				success: function(data){
					$("#content").html(data);
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});