<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
    	.box{
    		padding: 30px 40px;
    		border-radius: 5px;
    	}
    </style>
    <title>HACKATHON</title>
  </head>
  <body>
 <div class="jumbotron jumbotron-fluid bg-primary text-white">
  <div class="container text-center">
    <h1 class="display-4">COVID-19</h1>
    <p class="lead">
    	<h2>PENYEBARAN VIRUS CORONA DI INDONESIA
    		<br>
    		REAL-TIME
    		<br>

    	</h2>
    
    </p>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="bg-danger box text-white">
				<div class="row">
					<div class="col-md-6">
						<h5> Positif </h5>
						<h2 id="data-kasus"></h2>
						<h5>Orang</h5>
					</div>

					<div class="col-md-4">
						<img src="img/sad.svg" style="width: 100px;">
					</div>
				</div>
			</div>
		</div>
				<div class="col-md-4">
			<div class="bg-info box text-white">
				<div class="row">
					<div class="col-md-6">
						<h5> 	Meninggal </h5>
						<h2 id="data-mati"></h2>
						<h5>Orang</h5>
					</div>

					<div class="col-md-4">
						<img src="img/cry.svg" style="width: 100px;">
					</div>
				</div>
			</div>
		</div>
				<div class="col-md-4">
			<div class="bg-success box text-white">
				<div class="row">
					<div class="col-md-6">
						<h5> Sembuh </h5>
						<h2 id="data-sembuh"></h2>
						<h5>Orang</h5>
					</div>

					<div class="col-md-4">
						<img src="img/happy.svg" style="width: 100px;">
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<footer class="bg-primary text-center text-white mt-3 bt-2 pb-2">
	Laily Safitri
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
  </body>
</html>

<script>
	$(document).ready(function(){

//panggil fungsi menampilkan semua data global

		function dataNegara(){
			$.ajax({
				url :'https://coronavirus-19-api.herokuapp.com/countries',
				secess : function(data){
					try{
						var json = data;
						
						if (json.length > 0) {
							var i;
							for (var i =0 ; i<json.length; i++) {
								var dataNegara = json[i];
								var namaNegara = dataNegara.country;

								if(namaNegara === 'Indonesia'){
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;
									$('#data-kasus').html(kasus);
									$('#data-mati').html(mati);
									$('#data-sembuh').html(sembuh);
								}
							}
						}


					}
					catch{
						alert('Error');
					}
				}
			});
		}

	});
</script>