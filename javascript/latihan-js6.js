$(document).ready(function() {
    // Fungsi untuk menampilkan data profil pribadi
    function tampilkanProfile() {
        // Data profil pribadi
        var dataProfile = "<br>Nama: Husein Maulana Zoelva <br>Umur: 21 tahun<br>Alamat: Tangerang";

        // URL gambar profil
        var imageUrl =  "https://images.unsplash.com/photo-1579952363873-27f3bade9f55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vdGJhbGx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60";

        // Menampilkan data profil dan gambar
        var profileHtml = " <img src= '" + imageUrl + "' alt='Foto Profil'> <br>" + dataProfile;
        $("#output").html(profileHtml);

    }

   


    // Fungsi untuk menampilkan data moto hidup dan alasan
    function tampilkanMotoHidup() {
        var dataMotoHidup = "Moto Hidup: Lakukan yang terbaik<br>Alasan: Untuk mencapai kesuksesan dan kebahagiaan.";
        $("#output").html(dataMotoHidup);
    }

    // Fungsi untuk menampilkan data keahlian dan pengalaman
    function tampilkanKeahlian() {
        var dataKeahlian = "Keahlian: Web Development <br>Pengalaman: Projek Kuliah.";
        $("#output").html(dataKeahlian);
    }

    // Event handler untuk pemilihan bidang
    $("#bidang").on("change", function() {
        var selectedBidang = $(this).val();

        if (selectedBidang === "profile") {
            tampilkanProfile();
        } else if (selectedBidang === "moto_hidup") {
            tampilkanMotoHidup();
        } else if (selectedBidang === "keahlian") {
            tampilkanKeahlian();
        } else {
            $("#output").html("Bidang lainnya dipilih.");
        }
    });
});
