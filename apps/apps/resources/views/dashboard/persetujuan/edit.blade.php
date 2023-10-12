@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Persetujuan Supir</h2>
        </div>
        <div class="col-md-10">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('persetujuan.update', $persetujuan->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label>Terima / Tolak </label>
                    <select class="form-control" name="status" id="status">
                        <option value="">Pilih</option>
                        <option value="diterima oleh sopir" {{$persetujuan->status == 'diterima oleh sopir' ? 'selected' : ''}}>Terima</option>
                        <option value="ditolak oleh sopir" {{$persetujuan->status == 'ditolak oleh sopir' ? 'selected' : ''}}>Tolak</option>
                    </select>
                </div>
                <div class="mb-3" id="keterangan">
                    <label>Alasan</label>
                    <textarea class="form-control" name="keterangan">{{$persetujuan->keterangan}}</textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ route('persetujuan.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@push('after-script')
<script>
    $(document).ready(function() {
        @if($persetujuan -> status == 'ditolak oleh sopir')
        $('#keterangan').show();
        // $('#keterangan').show();
        @else
        $('#keterangan').hide();
        @endif
        $('#status').change(function() {
            let status = $('#status').val();
            console.log(status);
            if (status == 'ditolak oleh sopir') {
                $('#keterangan').toggle();
            } else {
                $('#keterangan').hide();
            }
        });
    });
</script>
@endpush
@endsection