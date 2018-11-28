
	<!-- Hasil Cari Mobile  -->
	<br>
   	<div class="ui two mobile only cards grid">
	    <div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry1.jpg">
		    </div>
		    <div class="content">
		      <div class="header">Mbah laundry</div>
		      
		      <div class="description"> kalibeber mojotengan<p> jl.wahid hasim no.87</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry2.jpg">
		    </div>
		    <div class="content">
		      <div class="header">smart Laundry</div>
		      
		      <div class="description"> munggang mojotengah<p> Jl.wahid hasim no.76</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry3.png">
		    </div>
		    <div class="content">
		      <div class="header">Laundry Kilat</div>
		      
		      <div class="description"> sidojoyo kretek<p>Jl.abdurrahman no.7865</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry4.jpg">
		    </div>
		    <div class="content">
		      <div class="header">Jaya Laundry</div>
		      
		      <div class="description">wonosobo<p>Jl.merpati Putih</p></div>
		    </div>
		    
	  	</div>
	</div>


	<!-- Hasil Cari PC  -->

   	<div class="ui four computer tablet only cards grid">
	    <div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry1.jpg">
		    </div>
		    <div class="content">
		      <div class="header">Mbah laundry</div>
		      
		      <div class="description"> kalibeber mojotengan<p> jl.wahid hasim no.87</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry2.jpg">
		    </div>
		    <div class="content">
		      <div class="header">smart Laundry</div>
		      
		      <div class="description"> munggang mojotengah<p> Jl.wahid hasim no.76</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry3.png">
		    </div>
		    <div class="content">
		      <div class="header">Laundry Kilat</div>
		      
		      <div class="description"> sidojoyo kretek<p>Jl.abdurrahman no.7865</p> </div>
		    </div>
		    
	  	</div>
	  	<div class="ui card">
		    <div class="image">
		      <img src="examples/assets/images/wireframe/laundry4.jpg">
		    </div>
		    <div class="content">
		      <div class="header">Jaya Laundry</div>
		      
		      <div class="description">wonosobo<p>Jl.merpati Putih</p></div>
		    </div>
		    
	  	</div>
	</div>
<?php 
if (isset($_GET['user'])) {
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".card").click(function(){
			window.location.href = "?p=checkout_klien&user";
		});
	});
</script>
<?php
}else{
 ?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".card").click(function(){
			window.location.href = "?p=checkout_klien";
		});
	});
</script>
 <?php 
 	}
  ?>
