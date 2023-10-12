@extends('layouts.dashboard')
@section('title', 'Assign Status')

@section('content')

<div class="row mb-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Assign Status</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('booking.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                @if ( auth()->user()->role == 0 )
                <div class="card-header">
                    <a href="{{ route('booking.create') }}">
                        <button class="btn btn-primary rounded-pill">Tambah Data</button>
                    </a>
                </div>
                @endif
                <div class="card-body">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Supir</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($assignSupir as $key => $item)
                                <tr>
                                    <td class="text-bold-500">{{ $key + 1 }}</td>
                                    <td class="text-bold-500">{{ $item->supir->name }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-bold-500" colspan="9">Tidak Ada Supir yang di assign</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $assignSupir->links() }}
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('after-script')


<script>
    $(document).on('click', '.btn_konfirmasi', function(e) {
        let data = $(this).data('lok')

        Swal.fire({
            title: 'Are you sure?',
            text: "Sudah dilakukan pembayaran!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Sudah Dibayar!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "{{ route('booking.konfirmasi') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: data,
                    },
                    success: function(res) {
                        Swal.fire('Berhasil', res.message, 'success')
                        location.reload()
                    }
                });

            }
        })

    })
</script>

@endpush