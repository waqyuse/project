@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="style/registrasi.css">


<div class="row m-sm-5">
    <div class="col-lg-6">



<main class="form-registration w-100">

    <form action="" method="">


        <div class="text">
            <h1 class="h3 mt-5 mb-1 fw-normal">Selamat Datang!</h1>
            <h6 class="mb-3">Daftar akun terlebih dahulu untuk memulai belanja</h6>
        </div>

        <div class="form-floating mb-3">
            <input type="username" name="username" class="form-control" id="username" placeholder="username" >
            <label for="username">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input type="name" name="name" class="form-control" id="name" placeholder="name">
            <label for="name">Nama lengkap</label>
          </div>

          <div class="form-floating mb-3">
            <input type="telpon" name="telpon" class="form-control" id="telpon" placeholder="telpon" >
            <label for="telpon">No. Telepon</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
            <label for="email">Email</label>
          </div>

          <div class="form-floating mb-3">
            <input type="pasword" name="pasword" class="form-control" id="pasword" placeholder="pasword" >
            <label for="pasword">Password</label>
          </div>

      <div class="checkbox mb-3 mt-2">

      </div>
      <div class="col-6">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
      </div>

      <small class="text-center">Sudah punya akun? Silahkan <a href="/login">Log in</a> </small>
      <p class="lagi" > 2022</p>
    </form>


  </main>
    </div>
</div>


@endsection
