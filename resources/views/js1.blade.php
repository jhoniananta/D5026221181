<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function showAlert() {
        alert("Selamat Anda mendapatkan 100 jt");
      }
      function changeText() {
        var span = document.getElementById("output"); // mendapatkan objek tulisan
        var textbox = document.getElementById("textbox"); // menapatkan objek textBox
        textbox.style.color = "white";
        textbox.style.backgroundColor = "grey";

        span.innerHTML = textbox.value; // mengubah DOM, value span diubah
      }
    </script>

    <title>Belajar JavaScript</title>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary" onclick="showAlert();">
        Klik Disini!
      </button>
      <br />
      <button onclick="changeText();" class="btn btn-warning">Click me!</button>
      <br>
      <span id="output">replace me</span>
      <input id="textbox" type="text" class="form-control" />
    </div>
  </body>
</html>
