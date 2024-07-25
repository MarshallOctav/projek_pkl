@extends('layouts.backend')
{{-- @extends('layouts.app') --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="float-start">
                        {{ __('Jenis_kepribadian') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('jenis_kepribadian.create') }}" class="btn btn-sm btn-outline-dark">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>jenis_kepribadian</th>
                                    <th>Gambar</th>
                                    <th>Pengertian</th>
                                    <th>Kekurangan</th>
                                    <th>Kelebihan</th>
                                    <th>Karir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($jenis_kepribadian as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->jenis_kepribadian }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $data->gambar) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>{{ $data->pengertian }}</td>
                                    <td>{{ $data->kekurangan }}</td>
                                    <td>{{ $data->kelebihan }}</td>
                                    <td>{{ $data->karir }}</td>
                                    <td>
                                        <form action="{{ route('jenis_kepribadian.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jenis_kepribadian.edit', $data->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a> |
                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $jenis_kepribadian->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
