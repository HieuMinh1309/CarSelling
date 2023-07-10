<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/Adminupload.js')

	<title></title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>



<body>
	<div id="mySidenav" class="sidenav">
		<p class="logo"><span>AutoWorld</span></p>
		<a  href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
		<a  href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
		<a  href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
		<a id="point" href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
		
	</div>
	<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Add Images</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Add Images</span>
	</div>
		<div class="col-div-6">
		<div class="profile">
		</div>
		</div>
		<div class="clearfix"></div>
		</div>
	<div class="col-div-8">
			<br/>
			<br>
<!-- resources/views/app.blade.php -->
		<form method="post" action="/admin/upload" enctype="multipart/form-data" onsubmit="return validateForm()">
			@csrf
			<div class="container">
				<div class="button-wrap">
					<label class="button" for="upload">Upload File <br></label>
					<input id="upload" name="avatar" type="file">
				</div>
			</div>
			<br>
			<button type="submit">Upload!</button>
		</form>

	<script>
	function validateForm() {
		var fileInput = document.getElementById("upload");
		if (fileInput.files.length === 0) {
			alert("Image can't be null");
			return false; // Prevent form submission
		}
		return true; // Proceed with form submission
	}
	</script>

	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>	
</html>
