 
$(".deletebutton").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
        title: "Apa Anda Yakin ?",
        text: "Data yang telah dihapus tidak dapat dikembalikan lagi!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya"
    }).then(result => {
        if (result.value) {
            document.location.href = href;
        }
    });
});
