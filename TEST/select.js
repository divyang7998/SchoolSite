$(document).ready(function(){	
	$("#button1").click(function(){
			alert("Student Data will be displayed");
				$.ajax({
				type:"POST",
				url:"studentdb.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content").html(data);
					 $("#content").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});

	$("#button5").click(function(){
			alert("Faculty Data will be displayed");
				$.ajax({
				type:"POST",
				url:"teacherdb.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content2").html(data);
					 $("#content2").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});

    $("#hide").click(function(){
        $("#content").hide();
    });
        $("#hide1").click(function(){
        $("#content2").hide();
    });


	$("#button6").click(function(){
			alert("Enrolled Student Data will be displayed");
				$.ajax({
				type:"POST",
				url:"enrolldb.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content3").html(data);
					 $("#content3").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});

	$("#button7").click(function(){
			alert("Participated Student Data will be displayed");
				$.ajax({
				type:"POST",
				url:"participateddb.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content4").html(data);
					 $("#content4").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	}); 

    $("#hide3").click(function(){
        $("#content3").hide();
    });
        $("#hide4").click(function(){
        $("#content4").hide();
    });


    	$("#button9").click(function(){
			alert("Participated Course Data will be displayed");
				$.ajax({
				type:"POST",
				url:"participatedb.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content5").html(data);
					 $("#content5").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	}); 
	


		$("#button8").click(function(){
			alert("Enrolled Student Data will be displayed");
				$.ajax({
				type:"POST",
				url:"ec.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content6").html(data);
					 $("#content6").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});     

		$("#button11").click(function(){
			alert("Available Courses will be displayed");
				$.ajax({
				type:"POST",
				url:"availc.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content5").html(data);
					 $("#content5").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});

		$("#button10").click(function(){
			alert("Available Events will be displayed");
				$.ajax({
				type:"POST",
				url:"availe.php",
				datatype:'json',
				async:true,
				success: function(data){
					$("#content6").html(data);
					 $("#content6").show();
				}
			});
			event.preventDefault();
			event.stopPropogation();
	});
});
