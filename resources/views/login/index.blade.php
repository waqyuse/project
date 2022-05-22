@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="style/registrasi.css">

<div class="row m-sm-5">
    <div class="col-md-6">

<main class="form-signin w-100 m-auto">

    <form>
        <div class="">

            <h1 class="h3 mt-5 mb-2 fw-normal">Selamat Datang!</h1>
            <h6>Login dengan Username</h6>
        </div>



      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3 mt-2">
        <label>
          <input type="checkbox" value="remember-me"> Ingat saya
        </label>
      </div>

      <div class="col-6">
        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Log in</button>
      </div>


      <small class="text-center">Pengguna baru? Buat akun terlebih dahulu <a href="/register">disini</a> </small>
      <p class="lagi"> 2022</p>
    </form>


  </main>
    </div>
</div>

@endsection
