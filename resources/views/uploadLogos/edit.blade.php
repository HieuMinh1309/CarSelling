<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')
    @vite('resources/js/Admincontact.js')
 
    <style>
        .note-editor {
            background-color: #ffffff;
            width: 70%;
        }
        .text-wrap {
            position: relative;
            display: inline-block;
        }
        label{
            width:70px;
            height:20px;
        }
        .custom-file {
        position: relative;
        display: inline-block;
        }

        .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        opacity: 0;
        }

        .text {
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 10px;
        font-size: 13px;
        background-color: #584ee1;
        cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
    <div id="mySidenav" class="sidenav">
		<p class="logo"><span>AutoWorld</span></p>
        <a href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
		<a href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
		<a href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
		<a id="point"  href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Logos</a>
        <a href="/admin/blog"class="icon-a"><i class="fa fa-book-open"></i> &nbsp;&nbsp;Add Blogs</a>
		
	</div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Edit Logo</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Edit Logo</span>
            </div>
            <div class="clearfix"></div>
        </div>
        <br/>
        <h1 id="text">Create New Logo</h1>
        <form action="{{ route('uploadLogos.update', $uploadLogo->id) }}" method="POST" enctype="multipart/form-data">          
            @csrf
            @method('PUT') 
            <div class="form-group">
                    <div>
                        <div class="custom-file">
                            <input style="height: 40px;" type="file" name="imageUP" id="imageUP" class="custom-file-input" required>
                            <label id="text" class="text" for="imageUP">Upload File</label>
                        </div>
                        
                    </div>
                    <label id="text" for="brand">Brand:</label>
                    <br>
                    <select style="width:20.5%; height:40px" name="brand" id="brand" required>
                        <option value="Toyota">Toyota</option>
                        <option value="Ford">Ford</option>
                        <option value="Honda">Honda</option>
                        <option value="Bwm">Bwm</option>
                        <option value="Audi">Audi</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Mazda">Mazda</option>
                    </select>
                </div>            
          
        
            <input type="text" name="image" id="image" class="form-control" style="display: none;" required>
        
            <br>
        
            <button type="submit" class="btn btn-primary">Save Logo</button>
        </form>
        <style>
             .custom-file-label {
            display: none;
        }
        </style>
       
        <script>
            document.getElementById('imageUP').addEventListener('change', function(e) {
                var filename = e.target.files[0].name;
                document.getElementById('image').value = filename;
        
                // Update label text with selected file name
                var label = document.querySelector('.custom-file-label');
                label.textContent = filename;
            });
        </script>
        
    </div>

</body>
</html>
