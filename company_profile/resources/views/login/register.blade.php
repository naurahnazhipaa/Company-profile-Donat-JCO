<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width: 100%;
        height: 667px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: orange;
    }

    .box{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: white;
        border-radius: 8px;
        padding: 20px 50px;
         
    }

    .contentForm{
        margin: 8%;
    }

    .form-control{
        border-color: orange;
        border-style: solid;
        border-width: 0 0 1px 0;
    }

    .form-control:focus{
        border-width: 0 0 3px 0;
        color: gainsboro;
        box-shadow: all 0.1s ease-out;
    }

    .btn{
        border-radius: 20px;
    }

</style>
<body>
    <div class="panel panel-primary">
        @if (session('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session ('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <form class="mt-3" action="/register" method="POST">
        @csrf
    <div class="container">
        <div class="box">
            <div class="row contentForm">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="asset/slide-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h2 class="text-center">REGISTER</h2>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control @error('username') is-invalid @enderror" id="username"
                                placeholder="Masukkan Username Anda" name="username">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Masukkan Email Anda" name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="email"
                                placeholder="Masukkan Nama Anda" name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-warning w-100">REGISTER</button>
                        <small class="text-center mt-3 d-block">Sudah mempunyai akun. <a href="/login">login sekarang</a></small>

                    </div>
                </div>
            </div>
        </div>
    </form>

</body>
</html>