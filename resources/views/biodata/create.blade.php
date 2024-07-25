<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-icons/5.1.0/css/material-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .input-group-text {
            background-color: #f0f0f0;
        }

        .btn {
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <form href="http://127.0.0.1:8000/tes" method="POST">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Form Biodata</h5>

                <div class="mb-3 row">
                    <label for="input42" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama') }}" id="input42" placeholder="Masukkan Nama" required>
                        </div>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input46" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="input46" required>
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" @if(old('jenis_kelamin') == 'Laki-laki') selected @endif>Laki-Laki</option>
                            <option value="Perempuan" @if(old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input43" class="col-sm-3 col-form-label">Telepon</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                name="telepon" value="{{ old('telepon') }}" id="input43" placeholder="Masukkan No Telepon" required>
                        </div>
                        @error('telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input44" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" id="input44" placeholder="Masukkan Alamat Email" required>
                        </div>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary btn-sm px-4">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
