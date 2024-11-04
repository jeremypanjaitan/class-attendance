const nimHadir = [2381031];
// Fungsi untuk memilih opsi "Hadir" pada dropdown berdasarkan NIM
function setAbsensiAbsen(nim) {
  const dropdownName = `absensi[${nim}]`;
  const dropdown = document.querySelector(`select[name="${dropdownName}"]`);
  if (dropdown) {
    dropdown.value = "A"; // Pilih opsi dengan value "H" (Hadir)
  }
}

// Ambil semua elemen `<tr>` dalam tabel (kecuali baris terakhir yang berisi tombol simpan)
const rows = document.querySelectorAll("table tbody tr");

// Loop melalui setiap baris dan set absensi menjadi "Hadir"
rows.forEach((row) => {
  const nim = row.cells[1].textContent.trim(); // Ambil NIM dari kolom kedua (index 1) dan bersihkan whitespace
  if (!nimHadir.includes(parseInt(nim))) {
    setAbsensiAbsen(nim);
  }
});
