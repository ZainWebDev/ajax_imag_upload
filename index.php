<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="jquery-3.5.1.min.js"></script>
</head>
<body>

	<form id="image_upload_form">
		<input type="file" id="image" name="image">
		<input type="submit" id="btn_upload" value="Upload">
		
	</form>
	<div class="image_1">
		
	</div>

<script>
	$(document).ready(function(){
  	
  	$("#image_upload_form ").on("submit",function(e){
  		e.preventDefault();
  		var formdata= new FormData(this);
  		$.ajax({
  			url: "upload.php",
  			type:'post',
  			data:formdata,
  			contentType:false,
  			processData:false,
  			success:function(data){
            $(".image_1").html(data);
            $("#image").val("");
  			}
  		});
  	});
  	$(document).on('click','#del_btn',function(){

  		var path = $(this).data("path");
  		if(confirm("DELETE IMAGE?"))
  		{
  			$.ajax({
  				url:"delete_image.php",
  				type:"POST",
  				data:{path:path},
  				success:function(data){
  					if(data!=""){
  				$(".image_1").hide();	
  				
  				
  			
  				}
}
  			});
  		}
  	});



  });


</script>
</body>
</html>