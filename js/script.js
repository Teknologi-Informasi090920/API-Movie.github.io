function CariFilm() {
  $("#daftar-film").html("");
  $.ajax({
    url: "http://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "efa7f0f",
      s: $("#input-cari").val(),
    },
    success: function (hasil) {
      if (hasil.Response == "True") {
        let film = hasil.Search;

        $.each(film, function (i, data) {
          $("#daftar-film").append(
            `
          <div class="col-md-4">   
          <div class="card mb-3">
                <img src="` +
              data.Poster +
              `" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">` +
              data.Title +
              `</h5>
              <h6 class="card-subtitle mb-2 text-muted">` +
              data.Year +
              `</h6>
              <a href="#" class="card-link detail-film" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="` +
              data.imdbID +
              `">Detail Film</a>
                </div>
            </div>
            </div>
            `
          );
        });

        $("#input-cari").val("");
      } else {
        $("#daftar-film").html("<h1 class='text-center'>Film Tidak Di Temukan. . .</h1>");
      }
    },
  });
}

$("#cari").on("click", function () {
  CariFilm();
});

$("#input-cari").on("keyup", function (e) {
  if (e.keyCode === 13) {
    CariFilm();
  }
});

$("#daftar-film").on("click", ".detail-film", function () {
  $.ajax({
    url: "http://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "efa7f0f",
      i: $(this).data("id"),
    },
    success: function (film) {
      if (film.Response === "True") {
        $(".modal-body").html(
          `
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="` +
            film.Poster +
            `" class="img-fluid">
                        </div>

                        <div class="col-md-8">
                        <ul class="list-group">
                        <li class="list-group-item"><h3>` +
            film.Title +
            `</h3></li>
                        <li class="list-group-item"><b>Tahun :</b> ` +
            film.Year +
            `</h3></li>
                        <li class="list-group-item"><b>Rilis :</b> ` +
            film.Released +
            `</h3></li>
                        <li class="list-group-item"><b>Durasi :</b> ` +
            film.Runtime +
            `</h3></li>
                        <li class="list-group-item"><b>Kategori :</b> ` +
            film.Gendre +
            `</h3></li>
                        <li class="list-group-item"><b>Sutradara :</b> ` +
            film.Director +
            `</h3></li>
                        <li class="list-group-item"><b>Pemain :</b> ` +
            film.Actors +
            `</h3></li>
                        <li class="list-group-item"><b>Bahasa :</b> ` +
            film.Language +
            `</h3></li>
                        <li class="list-group-item"><b>Ringkasan :</b> ` +
            film.Plot +
            `</h3></li>
                        <li class="list-group-item"><b>Negara :</b> ` +
            film.Country +
            `</h3></li>
                      </ul>
                        </div>
                    </div>
                </div>
            `
        );
      }
    },
  });
});
