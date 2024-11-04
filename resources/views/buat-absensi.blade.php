<form action="{{ route('initiateAbsensi') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIM</label>
        <input type="number" class="form-control" id="nim" name="nim">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="full_name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Kelas</label>
        <input type="hidden" class="form-control" id="namaKelas" name="nama_kelas" value="Pemrograman Berorientasi Objek">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
