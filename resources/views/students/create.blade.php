@extends('layout/main')

@section('title', 'Form Tambah Data Karyawan')

@section('container')
      <div class="container">
          <div class="row">
              <div class="col-8">
                  <h1 class="mt-3">Form Tambah Data Karyawan</h1>

                  <form method="post" action="/students">
                      @csrf
                  <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                  </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keahlian">Keahlian</label>
                        <input type="text" class="form-control" id="keahlian" placeholder="Masukan Keahlian" name="keahlian" value="{{ old('keahlian') }}">
                        
                        <button type="submit" class="btn btn-primary mt-4">Tambah Data!</button>
                  </form>

              </div>
          </div>
      </div>
@endsection