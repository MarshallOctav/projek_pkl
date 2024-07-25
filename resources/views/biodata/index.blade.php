@extends('layouts.backend')
{{-- @extends('layouts.app') --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="float-start">
                        {{ __('Biodata') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('biodata.create') }}" class="btn btn-sm btn-outline-dark">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($biodata as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->telepon }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <form action="{{ route('biodata.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('biodata.show', $data->id) }}"
                                                class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{ route('biodata.edit', $data->id) }}"
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
                        {!! $biodata->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
