@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="style/pembayaran.css">

<div class="atas">
    <h3 class="satu">Menyelesaikan Pembayaran</h3>
    <small><h6 class="dua">Alamat</h6></small>
    <hr class="tiga">
    <small><h6 class="empat">Pengiriman</h6></small>
    <hr class="lima">
    <small><h6 class="enam">Pembayaran</h6></small>

    <h5 class="mt-4 mb-3">Alamat Tujuan</h5>
</div>



    <main class="form-registration">

      <div class="container">



        <form action="">

          <div class="row float-end">
            <div class="card mb-3 float-end" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/card3.jpeg" class="img-fluid rounded-start" alt="...">
                </div>

                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Buket Uang</h5>
                    <div class="mb-3 row">
                        <label for="harga" class="col-4 col-form-label">Harga </label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="harga">
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah </label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="jumlah">
                        </div>
                      </div>
                    <div class="row mb-3">
                        <label for="total" class="col-4 col-form-label ">Rp </label>
                        <div class="col-sm-1">.</div>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="total">
                        </div>
                      </div>
                  </div>

              </div>
            </div>


            </div>
          </div>



          <div class="row col-6 mb-3">
            <div class="form-floating ">
              <input type="namadepan" class="form-control" id="namadepan" placeholder="Nama depan penerima" aria-label="First name">
              <label for="namadepan" class="ms-2">Nama penerima</label>
            </div>

          </div>

          <div class="row col-6 mb-3">

            <div class="form-floating">
              <input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="alamat" >
              <label for="alamat" class="ms-2">Alamat</label>
            </div>

          </div>

          <div class="row">
            <div class="form-floating col-5 me-5 mb-3">
              <input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan" placeholder="kecamatan" >
               <label for="kecamatan" class="ms-2">Kecamatan</label>
             </div>
              <div class="form-floating col-5 ms-3 mb-3">
                  <input type="kotakab" name="kotakab" class="form-control" id="kotakab" placeholder="kotakab" >
                  <label for="kotakab" class="ms-2">Kota/Kabupaten</label>
                </div>
          </div>

          <div class="row">
            <div class="form-floating col-5 me-5 mb-3">
                <input type="provinsi" name="provinsi" class="form-control" id="provinsi" placeholder="provinsi" >
                <label for="provinsi" class="ms-2">Provinsi</label>
            </div>
                <div class="form-floating col-5 ms-3 mb-3">
                    <input type="kodepos" name="kodepos" class="form-control" id="kodepos" placeholder="kodepos" >
                    <label for="kodepos" class="ms-2">Kode Pos</label>
                  </div>
          </div>

          <div class="row col-6 float-end">
            <label for="total" class="col-4 col-form-label ">Subtotal </label>
            <div class="col-1 mt-1">Rp</div>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="total">
            </div>
          </div>


              <div class="row col-6">
                <div class="form-floating " id="tambahan">
                    <input type="tambahan" name="tambahan" class="form-control me-2" id="tambahan" placeholder="tambahan" >
                    <label for="tambahan" class="ms-2">Tambahan</label>
                  </div>
              </div>

              <div class="row float-end">
                <hr class="garis">
              </div>




              <div class="row col-6">
                <div class="checkbox mb-3 mt-2">
                    <label>
                      <input type="checkbox" value="remember-me"> Ingat saya
                    </label>
                  </div>
              </div>

              <div class="row col-6 float-end">
                <label for="total" class="col-4 col-form-label ">Total </label>
                <div class="col-1">Rp</div>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="total">
                </div>
              </div>



              <div class="row col-5 ms-2">
                <button class="w-100 btn btn-lg btn-primary" type="submit" id="jasa">Pilih Jasa Pengiriman</button>
              </div>






          </div>

        </form>

      </div>

    </main>




    <p class="kaki"> 2022</p>

@endsection
