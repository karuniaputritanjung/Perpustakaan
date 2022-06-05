@extends("layouts.app")
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="cold-md-10">
                <div class="card">
                    <div class="card-header">
                        Input Data Pegawai
                    </div>
                    <div class="card-body">
                        <form action="{{route('pegawai.store')}}" method="POST">
                            {{ csrf_field()}}
                            <div class="mb-3">
                                <label for="id_pegawai" class="form-label">ID Pegawai</label>
                                <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" placeholder="Id Pegawai">
                            </div>
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama Pegawai">
                            </div>

                            <div class="mb-3">
                                <label for="Jenis" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Kontak Pegawai">
                            </div>

                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Alamat Pegawai">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection