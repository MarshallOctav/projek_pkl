@extends('layouts.backend')
{{-- @extends('layouts.app') --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="float-start">
                        {{ __('jawaban') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('jawaban.create') }}" class="btn btn-sm btn-outline-dark">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>jawaban</th>
                                    <th>tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($jawaban as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->jawaban }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>
                                        <form action="{{ route('jawaban.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jawaban.edit', $data->id) }}"
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
                        {{-- {!! $jawaban->withQueryString()->links('pagination::bootstrap-4') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
