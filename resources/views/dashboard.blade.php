@extends('layout.app')

@section('content')
<div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Peminjam</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                    <colgroup>
                        <col span="1" style="width: 10%;">
                        <col span="1" style="width: 25%;">
                        <col span="1" style="width: 25%;">
                        <col span="1" style="width: 25%;">
                        <col span="1" style="width: 10%;">
                    </colgroup>
                    <thead class=" text-primary">
                        <th>
                            No
                        </th>
                        <th>
                            Nama Peminjam
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Nama Pegawai
                        </th>
                        <th>
                            Nama Buku
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        {{-- @foreach ($buku as $buku)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $buku->nama_buku }}
                            </td>
                            <td>
                                {{ $buku->jenis_buku->nama_jenis }}
                            </td>
                            <td>
                                {{ $buku->stok }}
                            </td>
                            <td> --}}
                                <!-- Edit -->
                                {{-- <button class="btn" data-toggle="modal" href="#edit{{ $buku->id }}">Edit</button>
                                <div class="modal fade" id="edit{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                        <form method="POST" action="/buku/{{ $buku->id }}">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="edit">Edit Buku</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                        <label for="nama_buku" class="bmd-label-floating">Nama Buku</label>
                                                                        <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                        <select name="jenis_id" class="dropdown-item2 form-control ">
                                                                                <option value={{ $buku->jenis_buku->id }}>{{ $buku->jenis_buku->nama_jenis }}</option>
                                                                                @foreach ($jenis as $editjenis)
                                                                                    <option value="{{ $editjenis->id }}">{{ $editjenis->nama_jenis }}</option>
                                                                                @endforeach
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                        <label for="stok" class="bmd-label-floating">Stok</label>
                                                                        <input type="text" class="form-control" name="stok" value="{{ $buku->stok }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div> --}}
                                <!-- Delete -->
                                {{-- <button class="btn" data-toggle="modal" href="#delete{{ $buku->id }}">Hapus</button>
                                <div class="modal fade" id="delete{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <form method="POST" action="/buku/{{ $buku->id }}">
                                        @method('delete')
                                        @csrf
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="delete">Delete Buku</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah yakin mau menghapus "{{ $buku->nama_buku }}"?</p>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Iya</button>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                </div> --}}
                            {{-- </td>
                        </tr>
                        @endforeach
                    </tbody> --}}
            </table>
            </div>
        </div>
    </div>
</div>
@endsection