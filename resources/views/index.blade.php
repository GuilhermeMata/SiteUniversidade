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

  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <img src="{{ asset('fotosfaculdade/aluna.jpg') }}" width="600px" height="350px" alt="logo">     
      </div>
    </div>
  </div>

  <br>

<div class="container">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Acesse Nossos Cursos Abaixo:</p>
    </blockquote>
  </div>
</div>
</div>


  <br><br>
  
  <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/vetores-gratis/fundo-de-tecnologia-gradiente-geometrico-azul_52683-78527.jpg?size=626&ext=jpg&ga=GA1.1.1141335507.1718496000&semt=ais_user" class="card-img-top" alt="tec">
      <div class="card-body">
        <h5 class="card-title">Engenharia de Software e Desenvolvimento de Aplicativos</h5>
        <p class="card-text">Desde a concepção até a implementação, nossos cursos ensinam habilidades essenciais para criar soluções de software inovadoras e escaláveis.</p>
        <a href="{{ ('engenharia') }}" class="btn btn-primary">Matrícula</a>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Graduação 8 Semestres</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/vetores-gratis/plano-de-fundo-realista-em-estilo-futurista_23-2149129125.jpg" class="card-img-top" alt="tec2">
      <div class="card-body">
        <h5 class="card-title">Inteligência Artificial e Machine Learning</h5>
        <p class="card-text">Explore as técnicas avançadas que estão transformando indústrias como automação, análise preditiva e reconhecimento de padrões.</p>
        <a href="{{ ('inteligencia') }}" class="btn btn-primary">Matrícula</a>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Graduação 8 Semestres</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/vetores-gratis/fundo-de-particulas-abstratas-tecnologia-realista_23-2148433468.jpg?size=626&ext=jpg&ga=GA1.1.1141335507.1718668800&semt=ais_user" class="card-img-top" alt="tec3">
      <div class="card-body">
        <h5 class="card-title">Tecnologia da Informação e Infraestrutura de Redes</h5>
        <p class="card-text">Aprenda a projetar, implementar e gerenciar redes de TI complexas para garantir conectividade e desempenho confiáveis.</p>
        <a href="{{ ('tecnologia') }}" class="btn btn-primary">Matrícula</a>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Graduação 8 Semestres</small>
      </div>
    </div>
  </div>
</div>
</div>

<br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
