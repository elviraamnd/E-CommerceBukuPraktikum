@extends('adminHome')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('kurir.create') }}" class="btn btn-md btn-gradient-success mb-3">TAMBAH KURIR</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA KURIR</th>
                                <th scope="col">NO TELP</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($kurirs as $kurir)
                                <tr>
                                    <td>{{ $kurir->nama }}</td>
                                    <td>{{ $kurir->telepon }}</td>
                                    <td>{{ $kurir->alamat }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kurir.destroy', $kurir->id) }}" method="POST">
                                            <a href="{{ route('kurir.edit', $kurir->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Kurir belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $kurirs->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection