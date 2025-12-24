document.addEventListener("DOMContentLoaded", function () {

    // 1. EFEK KLIK TOMBOL NAV //
    const navButtons = document.querySelectorAll("nav a");

    navButtons.forEach(button => {
        button.addEventListener("click", function () {
            this.style.transform = "scale(0.95)";
            setTimeout(() => {
                this.style.transform = "scale(1)";
            }, 300);
        });
    });

    // 2. KONFIRMASI HAPUS DATA //
    const deleteLinks = document.querySelectorAll('a[href*="hapus.php"]');

    deleteLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            const konfirmasi = confirm("Yakin ingin menghapus data ini?");
            if (!konfirmasi) {
                e.preventDefault(); // batalkan hapus
            }
        });
    });


    // 3. HIGHLIGHT INPUT SAAT AKTIF //
    const inputs = document.querySelectorAll("input, textarea, select");

    inputs.forEach(input => {
        input.addEventListener("focus", function () {
            this.style.outline = "2px solid #f6a5b5";
        });

        input.addEventListener("blur", function () {
            this.style.outline = "none";
        });
    });



    // 4. FEEDBACK SAAT SUBMIT FORM //
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", function () {
            const submitBtn = this.querySelector('input[type="submit"]');
            if (submitBtn) {
                submitBtn.value = "Memproses...";
            }
        });
    });

});
