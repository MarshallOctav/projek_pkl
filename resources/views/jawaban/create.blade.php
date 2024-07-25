@extends('layouts.backend')

@section('content')
    <form action="{{ route('jawaban.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Form Jawaban</h5>
                <div class="row mb-3">
                    <label for="input42" class="col-sm-3 col-form-label">Jawaban</label>
                    <div class="col-sm-9">
                        <div>
                            <select class="form-select @error('jawaban') is-invalid @enderror" name="jawaban" id="input42">
                                <option value="">Pilih Jawaban</option>
                                <option value="iya" {{ old('jawaban') == 'iya' ? 'selected' : '' }}>Iya</option>
                                <option value="tidak" {{ old('jawaban') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        @error('jawaban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="input43" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                   name="tanggal" value="{{ old('tanggal') }}" id="input43"
                                   placeholder="Masukkan tanggal">
                            <span class="position-absolute top-50 translate-middle-y">
                                <i class="material-icons-outlined fs-5">person_outline</i>
                            </span>
                        </div>
                        @error('tanggal')
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
