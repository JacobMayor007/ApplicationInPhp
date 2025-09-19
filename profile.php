<?php
session_start()

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application of PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body class="">
  <section class="w-auto px-4 py-5 vh-100 d-flex justify-content-center row align-items-center"
    style="background-color: #9de2ff; border-radius: .5rem .5rem 0 0;">
    <div class="row d-flex justify-content-center">
      <div class="col col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex">
              <div class="flex-grow-1 ">
                <img
                  src="https://media.licdn.com/dms/image/v2/D5603AQE68mOWdVveHA/profile-displayphoto-crop_800_800/B56ZlSN58VJ0AI-/0/1758021002626?e=1761177600&v=beta&t=B27Ichmg7BRz_JzoKzU4Xvq5-QhPO7k3s8WQYfLzm78"
                  alt="Profile Photo" class="rounded-circle" style="height: 96px; width: 96px;">
                <h5 class="mb-1"><?php echo htmlspecialchars($_SESSION["email"]); ?></h5>
                <p class="mb-2 pb-1">Senior Journalist</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2 bg-body-tertiary">
                  <div>
                    <p class="small text-muted mb-1">Articles</p>
                    <p class="mb-0">41</p>
                  </div>
                  <div class="px-3">
                    <p class="small text-muted mb-1">Followers</p>
                    <p class="mb-0">976</p>
                  </div>
                  <div>
                    <p class="small text-muted mb-1">Rating</p>
                    <p class="mb-0">8.5</p>
                  </div>
                </div>
                <div class="d-flex pt-1">
                  <button type="button" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                  <button type="button" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-primary flex-grow-1">Follow</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</body>

</html>