@extends('layouts.backend')

@section('content')
    <form action="{{ route('jenis_kepribadian.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Form Jenis Kepribadian</h5>
                <div class="row mb-3">
                    <label for="input42" class="col-sm-3 col-form-label">Jenis Kepribadian</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('jenis_kepribadian') is-invalid @enderror"
                                   name="jenis_kepribadian" value="{{ old('jenis_kepribadian') }}" id="input42"
                                   placeholder="Masukkan jenis kepribadian">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('jenis_kepribadian')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                        @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input43" class="col-sm-3 col-form-label">Pengertian</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('pengertian') is-invalid @enderror"
                                   name="pengertian" value="{{ old('pengertian') }}" id="input43"
                                   placeholder="Masukkan pengertian">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('pengertian')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input44" class="col-sm-3 col-form-label">Kekurangan</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('kekurangan') is-invalid @enderror"
                                   name="kekurangan" value="{{ old('kekurangan') }}" id="input44"
                                   placeholder="Masukkan kekurangan">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('kekurangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input45" class="col-sm-3 col-form-label">Kelebihan</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('kelebihan') is-invalid @enderror"
                                   name="kelebihan" value="{{ old('kelebihan') }}" id="input45"
                                   placeholder="Masukkan kelebihan">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('kelebihan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input45" class="col-sm-3 col-form-label">karir</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('karir') is-invalid @enderror"
                                   name="karir" value="{{ old('karir') }}" id="input45"
                                   placeholder="Masukkan karir">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('karir')
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
                            <a href="{{ url('biodata') }}" class="btn btn-grd-royal px-4">Kembali</a>
                            <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
