<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>body {
  padding-top: 5rem;
}
.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}</style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Hotel Paraiso</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Todos os Produtos <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0 nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha conta</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Entrar</a>
              <a class="dropdown-item" href="#">Cadastrar</a>
              <a class="dropdown-item" href="#">Sair</a>
            </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de quartos</h2>
        <p class="lead">Área reservada para administradores</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Todos os quartos</span>
            <span class="badge badge-secondary badge-pill">4</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Quarto A</h6>
                <small class="text-muted">Suite Simples</small>
              </div>
              <span class="text-muted">R$ 150,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Quarto B</h6>
                <small class="text-muted">Suite Premium</small>
              </div>
              <span class="text-muted">R$ 300,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Quarto C</h6>
                <small class="text-muted">Suite Master</small>
              </div>
              <span class="text-muted">R$ 500,00</span>
            </li>
          </ul>
        <form></form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Quarto</h4>
          <form class="needs-validation" novalidate="" action="usuarios/quarto" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Código</label>
                <input type="text" class="form-control" id="firstName" name="codigo" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nome</label>
                <input type="text" class="form-control" id="lastName" name="nome" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9 mb-3">
                <label for="country">Quarto</label>
                <select class="custom-select d-block w-100" id="country" name="quarto" required="">
                  <option value="">Selecione...</option>
                  <option value="quarto1" name="quarto1">Quarto 1</option>
				          <option value="quarto2" name="quarto2">Quarto 2</option>
				          <option value="quarto3" name="quarto3">Quarto 3</option>				 
               </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              
              <div class="col-md-3 mb-3">
                <label for="zip">Preço</label>
                <input type="text" class="form-control" id="zip" name="preco" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <label for="zip">Nº de pessoas</label>
                <input type="text" class="form-control" id="zip" name="quantidade_pessoas" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar quarto</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Klinsmann Company</p>
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>