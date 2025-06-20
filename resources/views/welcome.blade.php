<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.js"></script>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block vh-100" style="background-image: linear-gradient(to right, #8E1212, #F42020);">
            <div class="position-absolute top-0 start-0 p-4 text-white">
                <h1 class="fw-bold" style="font-size: 58px;">Sistem</h1>
                <h1 class="fw-bold" style="font-size: 58px;">Informasi</h1>
                <h1 class="fw-bold" style="font-size: 58px;">Pengarsipan Surat</h1>
            </div>
        </div>
        
    <div class="col-sm-6 text-black vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="card px-5 py-3 shadow-lg rounded-8 responsive-card mx-auto">
        <div class="card-body card-body-responsive">
            <div class="text-center mb-4">
                <img src="{{ asset('images/LOGO-PMI-png-1 2.png') }}" alt="Login Logo" class="img-fluid">
            </div>

            <form>
                <div class="mb-4"> <p class="form-label" for="form2Example18">Email</p> <input type="email" id="form2Example18" class="form-control form-control-lg" placeholder="example@gmail.com" />
                </div>

                <div class="mb-4"> <p class="form-label" for="form2Example28">Kata Sandi</p> <input type="password" id="form2Example28" class="form-control form-control-lg" placeholder="******" />
                </div>

                <div class="pt-1 mb-4 d-grid">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg" type="button" style="background-color: #ED1B24; border-color: #ED1B24; color: #FFFFFF;;">Masuk</button>
                </div>

                <p class="small mb-2 text-center"><a class="text-muted" href="#!">Forgot password?</a></p>
            </form>
        </div>
    </div>            
</body>
</html>