@extends('layouts.dashboard')
@section('title', 'Pesan Mobil')

@section('content')

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    } 
        
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("tgl_pesan").setAttribute("min", today);
    document.getElementById("tgl_kembali").setAttribute("max", today);
</script>

<div class="page-heading">
    <h3>Pesan Mobil</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('cars.index') }}">
                        <button class="btn btn-danger rounded-pill">Kembali</button>
                    </a>
                </div>
                <div class="card-body">
                    {{-- Start --}}

                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="{{ asset('storage/gambar_mobil/'.$data->gambar_mobil.'') }}" alt="Card image cap" style="height: 35rem" />
                                <div class="card-body">

                                    <!-- Table with outer spacing -->
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold-500">No Polisi</td>
                                                            <td>{{ $data->no_polisi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Bahan Bakar</td>
                                                            <td>{{ $data->bahan_bakar }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Harga Sewa</td>
                                                            <td> Rp. {{ number_format($data->harga_sewa)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Tenaga</td>
                                                            <td>{{ $data->tenaga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Warna Mobil</td>
                                                            <td>{{ $data->warna_mobil }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Kapasitas Penumpang</td>
                                                            <td>{{ $data->kapasitas_penumpang }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Fasilitas</td>
                                                            <td>{{ $data->fasilitas }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">Keterangan</td>
                                                            <td>{{ $data->keterangan }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="pricing">
                                                <div class="row align-items-center">
                                                    <div class="card card-highlighted">
                                                        <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="cars_id" value="{{ $data->id }}">
                                                            <div class="card-header text-center">
                                                                <h4 class="card-title">{{ $data->merk_mobil }} {{ $data->nama_mobil }}</h4>
                                                                <p></p>
                                                            </div>
                                                            

                                                            <input type="date" class="form-control mt-2" placeholder="Tanggal Pesan" min="2022-06-18" id="tgl_pesan" name="tgl_pesan">

                                                            <input type="date" class="form-control mt-3" placeholder="Tanggal Dikembalikan" min="2022-06-18" id="tgl_kembali" name="tgl_kembali">

                                                    
                                                            <select name="jaminan" class="form-control mt-3" aria-label="Default select example">
                                                                <option selected>Pilih Jaminan</option>
                                                                <option value="1">Foto KTP</option>
                                                                <option value="2">Foto KK</option>
                                                            </select>

                                                            <select name="sewa_supir" class="form-control mt-3" aria-label="Default select example">
                                                                <option selected>Pilih Supir</option>
                                                                <option value="1">Tanpa Supir</option>
                                                                <option value="2">Sewa Supir</option>
                                                            </select>

                                                            <input type="file" class="form-control mt-3" placeholder="Foto Jaminan" id="foto_jaminan" name="foto_jaminan">

                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-outline-white btn-block">Pesan</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- End --}}
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection