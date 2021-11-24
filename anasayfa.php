 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 </head>
 <body>
<?php 
	$db = new PDO("mysql:host=localhost;dbname=il_ilce","root","");
	$il_list = $db->query("SELECT * FROM city")->fetchAll(PDO::FETCH_ASSOC);
?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-6">
				<select class="form-control" id="il">
					<option>İl Seçiniz</option>
					<?php 
						foreach ($il_list as $il ) {
							echo '<option value="'.$il['id'].'">'.$il['name'].'</option>';
						}
					?>
				</select>		
			</div>
			<div class="col-6">
				<select id="ilce" class="form-control">
					<option>İlçe seçin</option>
				</select>
			</div>	
		</div>
		
	</div>
	
<script type="text/javascript">
	$(document).ready(function(){
		$("#ilce").hide();
		
		$("#il").change(function(){
			//alert("değişti");
			var il_id = $(this).val();
			//alert(il_id);
			$.ajax({
				type:"POST",
				url:"ajax.php",
				data : {"il_id":il_id},
				success : function(e){
					$("#ilce").show();
					$("#ilce").html(e);
				}
			});
		});
	});
</script>
 </body>
 </html>