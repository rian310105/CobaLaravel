@extends('layout/main')

@section('title', 'Daftar Karyawan')

@section('container')
      <div class="container">
          <div class="row">
              <div class="col-10">
                  <h1 class="mt-3">Daftar Karyawan</h1>

                  <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Keahlian</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $karyawan as $kyn )
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $kyn->Nama }}</td>
                            <td>{{ $kyn->Email }}</td>
                            <td>{{ $kyn->Keahlian }}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
@endsection