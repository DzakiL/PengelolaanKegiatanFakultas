<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="Menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">User</a>
                <div class="Dropdown-content">
                    <a href="/Main/user">Daftar User</a>
                    <a href="/Tambah/TambahUser">Tambah User</a>
                    <a href="/Edit/EditUser">Edit User</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatan">Daftar Kegiatan</a>
                    <a href="/Tambah/TambahKegiatan">Tambah Kegiatan</a>
                    <a href="/Edit/EditKegiatan">Edit Kegiatan</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Approval</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanApproval">Daftar Kegiatan Approval</a>
                    <a href="/Tambah/TambahKegiatanApproval">Tambah Kegiatan Approval</a>
                    <a href="/Edit/EditKegiatanApproval">Edit Kegiatan Approval</a>
                </div>
            </li>
            <li class="Dropdown"><a href="javascript:void(0)" class="DropButton">Kegiatan Done</a>
                <div class="Dropdown-content">
                    <a href="/Main/kegiatanDone">Daftar Kegiatan Done</a>
                    <a href="/Tambah/TambahKegiatanDone">Tambah Kegiatan Done</a>
                    <a href="/Edit/EditKegiatanDone">Edit Kegiatan Done</a>
                </div>
            </li>
            <li><a href="">About Us</a></li>
            <li><a href="">Log Out</a></li>
        </ul>
    </div>
    <h3>Tambah Kegiatan/h3>
        <form action="{{ route('kegiatanDone.tambahKegiatanDone') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="Id" class="form-label text-dark">Id</label>
                <input type="text" class="Textbox text-dark" name='Id' id="Id">
            </div>
            <div class="mb-3">
                <label for="KegiatanId" class="form-label text-dark">ID Kegiatan</label>
                <select name="KegiatanId" id="KegiatanId" class="Textbox text-dark">
                    @foreach ($kegiatan as $item => $i)
                        <option value="{{ $i->Id }}">{{ $i->Id }} : {{$i->NamaKegiatan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="PengevaluasiId" class="form-label text-dark">ID Pengevaluasi</label>
                <select name="PengevaluasiId" id="PengevaluasiId" class="Textbox text-dark">
                    @foreach ($user as $item => $i)
                        <option value="{{ $i->Username }}">{{ $i->Username }} : {{ $i->Username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="TglMulai" class="form-label text-dark">Tanggal Mulai</label>
                <input type="date" class="Textbox text-dark" name='TglMulai' id="TglMulai">
            </div>
            <div class="mb-3 row">
                <label for="TglSelesai" class="form-label text-dark">Tanggal Selesai</label>
                <input type="date" class="Textbox text-dark" name='TglSelesai' id="TglSelesai">
            </div>
            <div class="mb-3 row">
                <label for="bukti_terlaksana" class="form-label text-dark">Bukti Terlaksana</label>
                <input type="file" class="Textbox text-dark" name="bukti_terlaksana" id="bukti_terlaksana">
            </div>
            <button type="submit" class="ButtonS" name="submit">Simpan</button>
        </form>
</body>

</html>
