@extends('layouts.dashboard')
@section('title', 'Persetujuan Supir')
@section('content')


<div class="page-heading">
    <h3>Persetujuan Supir</h3>
</div>

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('operator.create') }}">Add</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Mobil</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @forelse($datas as $i => $data)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $data->pesanan->user->name }}</td>
                <td>{{ $data->pesanan->cars->nama_mobil }}</td>
                <td>{{ $data->pesanan->tgl_sewa }}</td>
                <td>{{ $data->pesanan->tgl_selesai }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="{{ route('persetujuan.edit', $data->id) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td>Data Kosong</td>
            </tr>
            @endforelse
        </table>
    </div>
    <div class="mt-3"></div>
    <div class="dataTable-bottom">
        <div class="dataTable-info">Showing 1 to 1 of 1 entries</div>
        <ul class="pagination pagination-primary float-end dataTable-pagination"></ul>
    </div>
</div>
@endsection