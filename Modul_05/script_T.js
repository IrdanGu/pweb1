$(document).ready(function () {
  // 1. Efek fade-in untuk semua gambar di galeri saat halaman dimuat
  $(".gallery img")
    .css("opacity", "0")
    .each(function (index) {
      $(this)
        .delay(200 * index)
        .animate({ opacity: 1 }, 800);
    });

  // 2. Tampilkan gambar dalam modal saat diklik
  $(".gallery img").click(function () {
    const src = $(this).attr("src");
    const alt = $(this).attr("alt");
    $("#modalImage").attr("src", src);
    $("#caption").text(alt);
    $("#modal").fadeIn();
  });

  // 3. Tutup modal saat tombol "Close" atau area di luar gambar diklik
  $(".close, #modal").click(function (event) {
    if (event.target !== this) return;
    $("#modal").fadeOut();
  });
});
