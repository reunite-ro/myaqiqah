<!DOCTYPE html>
<html>
<head>
	<title>MyAqiqah.com</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script src="assets/js/jquery.min.js"></script>
	
	<script>

		var gender = '';
		var pakej = '';
		var input;



		$(document).ready(function(){
			
			// tutup pakej dan borang by default
			$('#pakej').hide();
			$('.borang').hide();			

			var icon = [];
			icon['lelaki'] = 'tower';
			icon['perempuan'] = 'heart';
			icon['daging'] = 'thumbs-up';
			icon['bakar'] = 'fire';
			icon['katering'] = 'cutlery';

			var price_map = {};
			
			price_map['lelaki'] = [];
			price_map['perempuan'] = [];

			price_map['lelaki']['daging'] = '1700';
			price_map['lelaki']['bakar'] = '2400';
			price_map['lelaki']['katering'] = 'xxxx';
			price_map['perempuan']['daging'] = '850';
			price_map['perempuan']['bakar'] = '1200';
			price_map['perempuan']['katering'] = 'xxxx';


			update_mesti_buat();

			$('a.gender').on('click', function(){
				// alert('Yeah!');
				gender = $(this).attr('data-chosen');
				
				//tukar semua price jadi ikut gender
				$('.price-daging').html('RM '+price_map[gender]['daging']);
				$('.price-bakar').html('RM '+price_map[gender]['bakar']);
				$('.price-katering').html('RM '+price_map[gender]['katering']);

				update_mesti_buat();
			});

			$('a.pilih-pakej').on('click', function(){
				// alert('Yeah!');
				pakej = $(this).attr('data-chosen');
				

				// masukkan dalam status
				$('input[name=gender]').val(gender);
				$('input[name=pakej]').val(pakej);
				$('input[name=rm]').val(price_map[gender][pakej]);

				// console.log(icon);
				// console.log(icon[gender]);
				// console.log(icon[pakej]);
				console.log(gender);
				console.log(pakej);

				$('.status-gender').html('anak<br/><i class="glyphicon glyphicon-'+icon[gender]+'"></i><br/><span class="badge badge-'+gender+'">'+gender+'</span>');
				$('.status-pakej').html('pakej<br/><i class="glyphicon glyphicon-'+icon[pakej]+'"></i><br/><span class="badge badge-'+pakej+'">'+pakej+'</span>');

				update_mesti_buat();
			});


			$('#borang-tempahan input[type=submit]').prop('disabled', true);

			$('#borang-tempahan input[type=text]').on('keyup', function(){
				// check gender
				// update_mesti_buat();

				var filled = true;

				$.each($('#borang-tempahan input[type=text]'), function(index, value){
					if($(value).val() == '' && filled == true){
						filled = false;
					}
				});

				if(filled && gender != '' && pakej != ''){
					$('#borang-tempahan input[type=submit]').prop('disabled', false);
				}
			});
		});

		function update_mesti_buat(){
			// check gender
			$('#borang-tempahan input[type=text]').prop('disabled', true);

			if(gender != ''){
				$('#pakej').show();
				$("html, body").animate({ scrollTop: $("#pakej").offset().top }, 500);
			}

			if(gender != '' && pakej != ''){
				$('.borang').show();
				$("html, body").animate({ scrollTop: $(".borang").offset().top }, 500);

				$('.pre-send').hide();
				$('#borang-tempahan input[type=text]').prop('disabled', false);
			}

		}

	</script>


</head>
<body>
<div class="container-fluid bg-feature">
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">myAqiqah</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">English</a></li>
	        <li><a href="#">Tentang MyAqiqah</a></li>
	        <li><a href="#">Mengapa Kami</a></li>
	        <li><a href="#">Hubungi Kami</a></li>
	        <li><a href="#">FAQ</a></li>
	        <li><a href="#">Blog</a></li>
	        <li><a href="#" class="highlight">BANTUAN</a></li>
	        <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="row"><div class="col-md-12 superhero" id="anak">
		<img src="assets/img/logo.png" class="logo">
		<h1>Pilihan IbuBapa Seantero Malaysia</h1>
		<p>Pilih salah satu:</p>
		<a href="#lelaki" class="btn btn-lg btn-primary gender" data-chosen="lelaki">Anak Lelaki</a>
		<a href="#perempuan" class="btn btn-lg btn-success gender" data-chosen="perempuan">Anak Perempuan</a>
	</div></div>
</div>

<div class="container-fluid as-seen-on">
	<div class="container">
	<div class="row">
		<h1>As seen on</h1>
		<div class="col-md-2 col-md-offset-2"><a href="#"><img src="assets/img/kosmo-logo.gif"/></a></div>
		<!-- <div class="col-md-2"><a href="#"><img src="assets/img/fb.png"/></a></div> -->
		<div class="col-md-2"><a href="#"><img src="assets/img/alhijrah.png"/></a></div>
		<div class="col-md-2"><a href="#"><img src="assets/img/bh.png"/></a></div>
		<div class="col-md-2"><a href="#"><img src="assets/img/astro.png"/></a></div>
	</div>
	</div>
</div>

<div class="container-fluid steps">
	<div class="container">
	<div class="row">
		<h1>Langkah-langkah tempahan</h1>
		<div class="col-md-2 col-md-offset-2">
			<i class="glyphicon glyphicon-heart"></i> <br/> 
			<a href="#" class="btn btn-danger"></i>Pilih jantina</a>
			<div class="alert alert-danger">Pilih jantina anak samada lelaki atau perempuan</div>
		</div>
		<div class="col-md-2">
			<i class="glyphicon glyphicon-ok-circle"></i> <br/> 
			<a href="#" class="btn btn-warning">Pilih Pakej</a>
			<div class="alert alert-warning">Pilih pakej myaqiqah yang diingini</div>
		</div>
		<div class="col-md-2">
			<i class="glyphicon glyphicon-tasks"></i> <br/> 
			<a href="#" class="btn btn-primary">Isi Borang</a>
			<div class="alert alert-info">Isi semua maklumat yang diperlukan.</div>
		</div>
		<div class="col-md-2">
			<i class="glyphicon glyphicon-phone-alt"></i> <br/> 
			<a href="#" class="btn btn-success">Follow Up</a>
			<div class="alert alert-success">Wakil kami akan hubungi anda dalam masa 24 jam</div>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid steps pakej" id="pakej">
	<div class="container">
	<div class="row">
		<h1>Pakej</h1>
		<div class="col-md-2 col-md-offset-3 daging">
			<i class="glyphicon glyphicon-thumbs-up"></i> <br/>
			<h2>Daging</h2>
			<div class="alert"><b class="price-daging">RM XXXX</b> <br/> Pakej ini adalah daging kambing yang telah disembelih dan dilapah.</div>
			<a href="#" class="btn btn-default pilih-pakej" data-chosen="daging">Pilih Daging</a>
		</div>
		<div class="col-md-2 bakar">
			<i class="glyphicon glyphicon-fire"></i> <br/>
			<h2>Bakar</h2>
			<div class="alert"><b class="price-bakar">RM XXXX</b> <br/> Pakej ini adalah daging yang siap diperam dan dibakar enak di lokasi majlis akikah.</div>
			<a href="#" class="btn btn-default pilih-pakej" data-chosen="bakar">Pilih Bakar</a>
		</div>
		<div class="col-md-2 katering">
			<i class="glyphicon glyphicon-cutlery"></i> <br/>
			<h2>Katering</h2>
			<div class="alert"><b class="price-katering">RM XXXX</b> <br/> Pakej lengkap daripada kambing golek dan juga makanan yang lain di lokasi majlis.</div>
			<a href="#" class="btn btn-default pilih-pakej" data-chosen="katering">Pilih Katering</a>
		</div>
	</div>
	</div>
</div>


<div class="container-fluid steps borang">
	<div class="container">
	<div class="row">
		<h1>Borang Tempahan:</h1>
		<div class="col-md-4 col-md-offset-4">
			<div class="alert alert-danger pre-send">Sila pilih <a href="#anak"> jantina anak dan pakej di atas</a></div>
			<form method="post" id="borang-tempahan">

				<div class="row status">
					<div class="col-md-6 status-gender"></div>
					<div class="col-md-6 status-pakej"></div>
				</div>

				<input type="hidden" name="jantina">
				<input type="hidden" name="pakej">

							<br/>	
				<label>Nama:</label> <br/>

				<input type="text" class="form-control" name="name"/>
				
				<br/>
				<label>Telefon:</label> <br/>

				<input type="text" class="form-control" name="tel"/>
				
				<br/>
				<label>Alamat Majlis:</label> <br/>

				<textarea class="form-control" name="address"></textarea>
				
				<br/>
				<label>Poskod:</label> <br/>

				<input type="text" class="form-control" name="postcode"/>
				
				<br/>
				<label>Negeri:</label> <br/>

				<input type="text" class="form-control" name="state"/>
				
				<br/>
				<label>Tarikh Majlis (DD-MM-YYYY):</label> <br/>

				<input type="text" class="form-control" name="date"/>

				<br/>
				<input type="submit" value="Hantar Tempahan &raquo;" class="btn btn-primary btn-lg btn-block">
			</form>
		</div>
		
	</div>
	</div>
</div>
</body>
</html>