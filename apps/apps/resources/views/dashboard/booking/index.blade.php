@extends('layouts.dashboard')
@section('title', 'Booking')

@section('content')

<div class="page-heading">
    <h3>Booking</h3>
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
                                    <th>Merk Mobil</th>
                                    <th>Nama Mobil</th>
                                    <th>No Pesanan</th>
                                    <th>Tanggal Sewa</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Foto Jaminan</th>
                                    <th>Jaminan</th>
                                    <th>Status Pembayaran</th>
                                    <th>Bukti Transfer</th>
                                    <th>Supir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key => $item)
                                <tr>
                                    <td class="text-bold-500">{{ $key + 1 }}</td>
                                    <td>{{ $item->cars->merk_mobil }}</td>
                                    <td class="text-bold-500">{{ $item->cars->nama_mobil }}</td>
                                    <td>{{ $item->no_pesanan }}</td>
                                    <td>{{ $item->tgl_sewa }}</td>
                                    <td>{{ $item->tgl_selesai }}</td>
                                    <td>
                                        <div class="col-md-3">
                                            <img src="{{asset('storage/foto_jaminan/'.$item->foto_jaminan) }}" alt="Gambar {{ $item->nama_mobil }}" width="250">
                                        </div>
                                    </td>
                                    <td>{{ $item->jaminan }}</td>
                                    <td>{{ $item->status_pembayaran == 0 ? 'Belum Dibayar' : 'Lunas' }}</td>
                                    <td>
                                        <div class="col-md-3">
                                            <img src="{{asset('storage/gambar_mobil/'.$item->bukti_pembayaran) }}" alt="Gambar {{ $item->nama_mobil }}" width="250">
                                        </div>
                                    </td>
                                    <td>{{ $item->sewa_supir == '1' ? 'Tanpa Supir' : 'Dengan Supir' }}</td>
                                    @if($item->sewa_supir == '1')
                                        <td>
                                            <button class="btn btn-success rounded-pill btn_konfirmasi" data-lok="{{ $item->id }}">Konfirmasi Pemesanan</button>
                                        </td>
                                    @elseif($item->sewa_supir == '2' && $item->supir_id == null)
                                        <td>
                                            <a class="btn btn-success rounded-pill" href="{{route('create_assign', $item->id)}}">Assign Supir</a>
                                            <a class="btn btn-primary rounded-pill px-2" href="{{route('detail_assign', $item->id)}}">Lihat Status Supir</a>
                                        </td>
                                     @endif
                                    <td>
                                        <button class="btn btn-success rounded-pill btn_konfirmasi" data-lok="{{ $item->id }}">Konfirmasi Pemesanan</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-bold-500" colspan="9">Tidak Ada Mobil yang Dipesan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $data->links() }}
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