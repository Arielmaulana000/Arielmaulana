document.getElementById("buku tamu").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var comment = document.getElementById("comment").value;
    var comment = document.getElementById("tanggal").value;
    var confirmation = document.getElementById("confirmation");

    confirmation.innerHTML = "<p>Terima kasih, " + name + " atas pendapat Anda!</p>";
    confirmation.innerHTML += "<p>Komentar Anda: " + comment + "</p>";

    // Kirim data ke server atau lakukan operasi lain sesuai kebutuhan
});
// Ambil elemen foto profil berdasarkan ID
var profilePic = document.getElementById('profile-pic');

// Tambahkan event listener untuk aksi klik
profilePic.addEventListener('click', function() {
    var nama = "Ariel"; // Ganti dengan nama Anda atau ambil dari data lain jika tersedia
    alert("Hallo, nama saya " + nama + ". Senang belajar membuat web!");
});
