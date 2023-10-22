<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasesa</title>
</head>

<body>
    <!--Ini kode untuk navbar-->
        <nav class="navbar navbar-expand-md border-bottom mb-4 col" style="background-color: #f5f5f5;">
            <div class="container-fluid">
          <!-- <a> ... </a> adalah kode untuk logo wasesa dan teks wasesa-->
              <a class="navbar-brand fw-bold d-flex" href="#">
                <img src="img/Wasesa Logo.png" alt="Logo" width="40px" height="40px" class="d-inline-block rounded">
                <span class="ms-2 align-self-center">WASESA</span>
                <span></span>
              </a>
              <span class="navbar-text" width="35%">
                <button class="btn btn-outline-dark" type="button">Login</button>
                <button class="btn btn-dark" type="button"><span class="fw-bold">Register</span></button>
              </span>
            </div>
        </nav>