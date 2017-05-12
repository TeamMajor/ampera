<script>
	 $(document).ready(function () {
        $("#search").focus();
    });
</script>
<script>
	//	$(document).ready(function(){
	//		
	//		$("#search").click(function(e){
	//		$.ajax({
	//			url:"http://localhost/qa/welcome/token/",
	//			type:"GET",
	//			data:'id='+ String.fromCharCode(e.keyCode|e.charCode),
	//			success: function(data)
	//			{
	//				$('#jawab').html(data);
    //
	//			},
	//		error: function (jqXHR, textStatus, errorThrown)
	//		{
	//			alert('Error get data from ajax');
	//		}
	//		});
	//		
	//		});
	//	});
</script>
<script>
	   $(function(){
			  var $search= $('#search');
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl:"http://localhost/question-answer/cari/auto",
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
              // onSelect: function(suggestion) {
					//$('.data-cari').html(suggestion);
                //} 
            });
        });

</script>
<nav  class="navbar navbar-default navbar-fixed-top" >

<div class="container-fluid" id="nav" style="border:0px solid #000000; background:#f5f5f5; ">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12" style="font-family:'Roboto', sans-serif; Margin-top:20px; font-size:20px;  font-weight:bold;"><?php echo anchor("welcome","AMPERA ANSWER",array("style"=>"color:#b71c1c;") ); ?></div>
	
					<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12" style="margin-top:20px; margin-left:-100px;">
						
							<form name="form2" action="http://localhost/ampera/welcome/token" method="get">
							<div class="input-group" style="margin-left:30px">
							<input type="text" class=" autocomplete form-control col-xs-12" id="search" name="search"  placeholder="Apa yang ingin anda tanyakan ? "/>
							 <span class="input-group-btn" id="basic-addon2"><button class="btn btn-primary" type="submit" id="btn-jawab" type="button" ><i class="fa fa-search" style="font-size:20px;"></i></button>
							 </span>
							 </div>
							 </form>
					
					</div>
					
					<div id="user">
			<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6">
					<a href="#"> <img src="http://localhost/ampera/gambar/icon.png" height="30px" width="30px" alt="foto" > </a>
				</div>
				<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6">
				<img  src="https://2.bp.blogspot.com/-0__gZc_97PI/VkhEFpi1R6I/AAAAAAAAC0w/wNaMf2DfKH0/s1600/Foto+Profil+Light.jpg" height="30px" width="30px" alt="foto" class="img-circle">
				</div>
				
			</div>
			
					<!--<div class="col-sm-5 col-md-5 col-xs-12">
						<?php //echo anchor("cari/bantuan/","<i class='fa fa-question'></i> &nbsp; Bantuan",array("class"=>"btn btn-default col-sm-3 ","style"=>"margin-top:20px;")) ?>	
					
					</div>-->
				</div>
					
							
					
				</div>
</nav>
