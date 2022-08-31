@extends('layouts.anggota')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pinjam Buku</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="text" name="users_id" class="form-control" value="{{Auth::user()->id}}" hidden>
                                        <input type="text" name="buku_id" class="form-control" value="{{$buku->id}}" hidden>
                                        <input type="text" name="buku_pengurus" class="form-control" value="{{$buku->users_id}}" hidden>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <input type="date" name="tgl_pinjam" class="form-control" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('addon-stack')
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    @endpush
