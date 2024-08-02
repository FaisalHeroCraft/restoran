<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Latihan 5</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="page-content page-form" id="food">
      <div class="section-form">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-12">
              <h2>Pesan Menu</h2>
              <form action="proses_restoran.php" method="post" class="mt-4 card-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Makanan</label>
                    <select name="food" class="form-control">
                      <option value="">None</option>
                      <option value="Burger" required>Burger</option>
                      <option value="Nasi Goreng">Nasi Goreng</option>
                      <option value="Mie Ayam">Mie Ayam</option>
                      <option value="Pizza">Pizza</option>
                      <option value="Donat">Donat</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banyak-makan">Banyak</label>
                    <input type="number" name="banyak_makan" class="form-control" id="banyak-makan" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Minuman</label>
                    <select name="drink" class="form-control">
                      <option value="">None</option>
                      <option value="Coca-Cola">Coca-Cola</option>
                      <option value="Sprite">Sprite</option>
                      <option value="Es Teh Manis">Es Teh Manis</option>
                      <option value="Lemon Tea">Lemon Tea</option>
                      <option value="Coffee">Coffee</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banyak-minum">Banyak</label>
                    <input type="number" name="banyak_minum" class="form-control" id="banyak-minum" />
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" name="submit" value="Submit" class="btn btn-success px-5">Pesan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector("#editor")).then((editor) => {
        console.log(editor);
      }).catch((error) => {
        console.error(error);
      });
    </script>
  </body>
</html>
