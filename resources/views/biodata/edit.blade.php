@extends('layouts.backend')

@section('content')
<form action="{{ route('biodata.update', $biodata->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit Biodata</h5>
            <div class="row mb-3">
                <label for="input42" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ $biodata->nama }}" id="input42" placeholder="Masukan Nama">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                    </div>
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="input46" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="input46">
                        <option selected="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" @if($biodata->jenis_kelamin == 'Laki-laki') selected @endif>Laki-Laki</option>
                        <option value="Perempuan" @if($biodata->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="input43" class="col-sm-3 col-form-label">Telepon</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                            name="telepon" value="{{ $biodata->telepon }}" id="input43" placeholder="No Telepon">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">phone</i></span>
                    </div>
                    @error('telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="input44" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $biodata->email }}" id="input44" placeholder="Alamat Email">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">send</i></span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Update</button>
                        <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
