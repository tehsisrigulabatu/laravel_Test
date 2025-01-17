
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
{{-- <style>
  .hidden{
    display: none;
  }
  .show{
    display: block;
  }
</style> --}}
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center align-items-center text-white text-decoration-none" href="#" style="font-size: x-large;"><span class="fw-bold fs-3">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="rumah" id="rumah" class="nav-link text-white active"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a href="projek" id="project" class="nav-link text-white"><i class="bi bi-journal"></i> Master Project</a>
                </li>
                <li class="nav-item">
                    <a href="servis" id="Service" class="nav-link text-white"><i class="bi bi-box-seam"></i> Master Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-wrench"> </i>   Admin
                  </button>
                  <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
            </div>
        </div>

        
        <div class="col-md-10 text-dark overflow-auto">
            <div id="home-content" class="container-fluid">
              <div class="row p-3">
                <h2 class="">Home @yield('content-title')</h2>
              </div>
              <div class="row">
                @yield('content')
              </div>
            </div>
              
            
    </div>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function preview_image(event) 
      {
          var reader = new FileReader();
          reader.onload = function()
       {
          var output = document.getElementById('output_image');
          output.src = reader.result;
       }
          reader.readAsDataURL(event.target.files[0]);
      }
    </script>
    
</body>
</html>