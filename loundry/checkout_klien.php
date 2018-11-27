<div class="ui grid">
	<div class="six wide column">
		<img class="ui centered small image" src="examples/assets/images/wireframe/laundry1.jpg">		
	</div>
		    
	<div class="ten wide column">
		<h3 class="ui header">Nama Jasa Laundry</h3>
		<br>
		Alamat Jasa Laundry
	</div>
	<div class="ui centered row">
		<select class="ui dropdown">
		  <option value="0">Waktu Ambil</option>
		  <option value="1">07.00-08.00</option>
		  <option value="2">08.00-09.00</option>
		  <option value="3">09.00-10.00</option>
		  <option value="4">10.00-11.00</option>
		  <option value="5">11.00-12.00</option>
		  <option value="6">12.00-13.00</option>
		  <option value="7">13.00-14.00</option>
		  <option value="8">14.00-15.00</option>
		</select>
		<div class="ui input">
			<input type="date" name="" value="" placeholder="Tanggal">
		</div>
	</div>
	<div class="ui centered row">
		<div class="ui form">
			<div class="inline fields">
			<label>Pilih metode : </label>
			 <div class="field">
			  <div class="ui radio checkbox">
		        <input type="radio" name="jenis" tabindex="0" id="radio_kg" >
		        <label>Per KG</label>
		      </div>
			 </div>
			 <div class="field">
			  <div class="ui radio checkbox">
		        <input type="radio" name="jenis" tabindex="0" id="radio_satuan">
		        <label>Satuan</label>
		      </div>
			 </div>
			</div>
		</div>
	</div>
		<br>
		<br>
	<form class="ui grid row" method="get">
	<input type="hidden" name="p" value="telah_diproses_klien" placeholder="">
	<!-- start KG -->
	 <div class="ui centered four column row" id="kg">
	  <div class="ten wide column">
		<div class="ui"><strong>Kilo Gram @Rp. 8.000,-</strong></div>  
	  </div>
	  <div class="three wide column">
	  	<div class="ui transparent fluid input">
			<input type="text" name="kg" id="input_kg" placeholder="0">
		</div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="plus_kg"><i class="plus icon inverted blue circular button"></i></div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="minus_kg"><i class="minus icon inverted blue circular button"></i></div>
	  </div>
	 </div>
	 <!-- end KG -->


	<!-- start Satuan -->
	<!-- start loop -->
	<div class="ui grid row" id="satuan">
	 <div class="ui centered fluid four column row">
	  <div class="ten wide column">
		<div class="ui"><strong>Kemeja @Rp. 10.000,-</strong></div>  
	  </div>
	  <div class="three wide column">
	  	<div class="ui transparent fluid input">
			<input type="text" id="input_kemeja" name="" placeholder="0">
		</div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="plus_kemeja"><i class="plus icon inverted blue circular button"></i></div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="minus_kemeja"><i class="minus icon inverted blue circular button"></i></div>
	  </div>
	 </div>

	 <div class="ui centered fluid four column row">
	  <div class="ten wide column">
		<div class="ui"><strong>Celana @Rp. 9.000,-</strong></div>  
	  </div>
	  <div class="three wide column">
	  	<div class="ui transparent fluid input">
			<input type="text" id="input_celana" name="" placeholder="0">
		</div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="plus_celana"><i class="plus icon inverted blue circular button"></i></div>
	  </div>
	  <div class="one wide column">
		  	<div class="" id="minus_celana"><i class="minus icon inverted blue circular button"></i></div>
	  </div>
	 </div>
	 </div>
	 <!-- end loop -->
	 <!-- end satuan -->
	  <div class="ui centered column row">
	  <div class="ui right action input focus">
	  	  <input type="text" id="total" value="">
		  <button class="ui blue labeled icon button">
		    <i class="cart icon"></i>
		    Order
		  </button>
		  </div>
	  </div>
	  </form>
</div>

<script type="text/javascript">
	$(document).ready(function(){

	$("select.dropdown")
  	.dropdown()
	;

	$("#satuan").hide();
	$("#kg").hide();

	// start radio
    $("#radio_kg").click(function(){
        $("#satuan").hide(100);
        $("#kg").show(100);
        $("input:text").val("");
    });
    $("#radio_satuan").click(function(){
        $("#kg").hide(100);
        $("#satuan").show(100);
        $("input:text").val("");
    });
    // end radio

    // start input
    $("#plus_kg").click(function(){
    	$("#input_kg").val(+$("#input_kg").val()+1);
    	$("#total").val(+$("#input_kg").val()*8000);
    });

    $("#minus_kg").click(function(){
    	if ($("#input_kg").val() > 0) {
    	$("#input_kg").val(+$("#input_kg").val()-1);
    	$("#total").val(+$("#input_kg").val()*8000);
    	}
    });

    $("#plus_kemeja").click(function(){
    	$("#input_kemeja").val(+$("#input_kemeja").val()+1);
    	var kemeja=$("#input_kemeja").val()*10000;
    	var celana=$("#input_celana").val()*9000;
    	$("#total").val(kemeja+celana);
    });

    $("#minus_kemeja").click(function(){
    	if ($("#input_kemeja").val() > 0) {
    	$("#input_kemeja").val(+$("#input_kemeja").val()-1);
    	var kemeja=$("#input_kemeja").val()*10000;
    	var celana=$("#input_celana").val()*9000;
    	$("#total").val(kemeja+celana);
    	}
    });

    $("#plus_celana").click(function(){
    	$("#input_celana").val(+$("#input_celana").val()+1);
    	var kemeja=$("#input_kemeja").val()*10000;
    	var celana=$("#input_celana").val()*9000;
    	$("#total").val(kemeja+celana);
    });

    $("#minus_celana").click(function(){
    	if ($("#input_celana").val() > 0) {
    	$("#input_celana").val(+$("#input_celana").val()-1);
    	var kemeja=$("#input_kemeja").val()*10000;
    	var celana=$("#input_celana").val()*9000;
    	$("#total").val(kemeja+celana);
    	}
    });
    // end input
});
</script>