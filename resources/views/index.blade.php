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
    <a class="navbar-brand" href="#">
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

  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <img src="{{ asset('fotosfaculdade/aluna.jpg') }}" width="600px" height="350px" alt="logo">     
      </div>
    </div>
  </div>

  <br>

  <div class="card text-center">
    <div class="card-header">
      T.C.
    </div>
    <div class="card-body">
      <h5 class="card-title">TC: Transformando o Conhecimento em Tecnologia</h5>
      <p class="card-text">
        Na TC, nossa missão é impulsionar a próxima geração de inovadores digitais. Em um ambiente vibrante e colaborativo, exploramos os limites da ciência da computação e transformamos ideias em realidade. Com um corpo docente apaixonado e laboratórios de ponta, incentivamos a excelência acadêmica e a aplicação prática do conhecimento.

        Prepare-se para uma experiência educacional que vai além das salas de aula, mergulhando em projetos desafiadores e colaborativos que moldam o futuro da tecnologia. Na TC, estamos comprometidos com a formação de líderes que não apenas entendem, mas também criam o futuro digital.

        Descubra seu potencial na TC, onde cada linha de código conta uma história de inovação e descoberta. Junte-se a nós e transforme o conhecimento em tecnologia.
      </p>
      <a href="#" class="btn btn-primary">Faça Sua Inscrição Aqui!</a>
    </div>
    <div class="card-footer text-body-secondary">Sua Faculdade De Tecnologia</div>
  </div>
  <br><br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
