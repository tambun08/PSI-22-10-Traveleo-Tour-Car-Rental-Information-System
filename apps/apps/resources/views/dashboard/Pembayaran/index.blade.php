@extends('layouts.dashboard')


@section('content')

<div class="page-heading">
    <h3>Pembayaran</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4>Silahkan Melakukan pembayaran di :</h4>
                    <select class="form-control mt-1" aria-label="Default select example">
                        <option selected>Pilih Tujuan Pembayaran</option>
                        <option value="1">BNI (gabrielbaringbing) - 1234567890</option>
                        <option value="2">BRI (natanaeltambun) - 1234567890</option>
                        <option value="2">DANA (yudikapurba) - 1234567890</option>
                    </select>

                    <form class="form mt-3" action="{{ route('Pembayaran.store',['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                                    <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran" onchange="img(this)">
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Bayar</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection