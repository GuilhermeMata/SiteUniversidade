<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Universidade</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


  <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href="{{ ('index') }}">
      <img src="{{ asset('icon/tc.jpg') }}" width="100px" height="100px" alt="logo">
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="{{ ('index') }}">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" style="color: black;" href="{{ ('quemsomos') }}">Quem Somos Nós</a>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Nosso Contato</a>
        <ul class="dropdown-menu" style="color: black;">
          <li><a class="dropdown-item">11 98833-9900</a></li>
          <li><a class="dropdown-item">tc.cat@gmail.com.br</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <br>

<div class="container">
  <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-5">
    <label for="validationCustom01" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom02" class="form-label">Sobrenome:</label>
    <input type="text" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustomUsername" class="form-label">E-mail:</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Estado</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom05" class="form-label">CEP:</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Aceito Enviar esse Formulário para Finalizar a Matricula
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
</div>
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
