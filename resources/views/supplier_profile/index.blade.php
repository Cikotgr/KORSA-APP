@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
    <div class="container">
        @if ($supplierprofiles == null)
            <form action="{{ route('supplier_profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="OwnerName" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" name="OwnerName" placeholder="Masukan nama">
                </div>
                <div class="mb-3">
                    <label for="OwnerTelephone" class="form-label">No telepon pemilik</label>
                    <input type="text" class="form-control" name="OwnerTelephone"
                        placeholder="Isikan No telepon pemilik">
                </div>
                <div class="mb-3">
                    <label for="BussinesName" class="form-label">Nama Toko</label>
                    <input type="text" class="form-control" name="BussinesName" placeholder="Isikan Nama toko">
                </div>
                <div class="mb-3">
                    <label for="BussinesEmail" class="form-label">email toko</label>
                    <input type="email" class="form-control" name="BussinesEmail" placeholder="Isikan email toko">
                </div>
                <div class="mb-3">
                    <label for="BussinesTelephone" class="form-label">No telepon toko</label>
                    <input type="text" class="form-control" name="BussinesTelephone"
                        placeholder="Isikan No telepon pemilik">
                </div>
                <div class="mb-3">
                    <label for="BussinesType" class="form-label">Type bisnis</label>
                    <input type="text" class="form-control" name="BussinesType" placeholder="Isikan type bisnis">
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Masukan descripsi toko</label>
                    <textarea class="form-control" name="Description" rows="3"></textarea>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-3">Simpan</button>
                    {{-- <a href="{{ route('supplier_profile.index') }}" type="button" class="btn btn-danger">Batal</a> --}}
                </div>
            </form>
        @else
            @foreach ($supplierprofiles as $item)
                <div class="mb-3">
                    <label for="OwnerName" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="OwnerName" value="{{ $item->owner_name }}" disabled
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="OwnerTelephone" class="form-label">No telepon pemilik</label>
                    <input type="text" class="form-control" id="OwnerTelephone"
                        value="{{ $item->owner_telephone }}"disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="BussinesName" class="form-label">Nama Toko</label>
                    <input type="text" class="form-control" id="BussinesName" value="{{ $item->bussines_name }}"disabled
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="BussinesEmail" class="form-label">email toko</label>
                    <input type="email" class="form-control" id="BussinesEmail"
                        value="{{ $item->bussines_email }}"disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="BussinesTelephone" class="form-label">No telepon toko</label>
                    <input type="email" class="form-control" id="BussinesTelephone"
                        value="{{ $item->bussines_telephone }}"disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="BussinesTelephone" class="form-label">Deskripsi</label>
                    <div class="card">
                        <p>
                            {{ $item->description }}
                        </p>
                    </div>

                </div>
            @endforeach

            {{-- <div class="d-flex">
                <button type="submit" class="btn btn-primary me-3">Simpan</button>
                <a href="{{ route('pos.index') }}" type="button" class="btn btn-danger">Batal</a>
            </div> --}}
        @endif

    </div>
@endsection