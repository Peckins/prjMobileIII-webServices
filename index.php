<div class="container-fluid">
    <h3 class="text-center">Cadastro final</h3>

    <div class="row">

      <div class="col-xs-1"></div>

      <div class="col-xs-10">
        <div class="jumbotron">

          <form action="cadastra.php" method="POST" class="form-group">
            <label>Nome:</label>
            <input type="text" name="" id="nome" class="form-control" placeholder="digite seu nome">

            <br>

            <label>Idade:</label>
            <input type="text" name="idade" id="idade" class="form-control" placeholder="digite sua idade">

            <br>

            <label>Sexo:</label>
            <input type="text" name="sexo" id="sexo" class="form-control" placeholder="digite seu sexo">

            <br>

            <label>Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="digite seu endereço">

            <br>

            <label>CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="digite seu cpf">

            <br>

            <label>Foto:</label>
            <input type="file" name="foto" id="foto" class="form-control" placeholder="escolha uma foto">

            <br>

            <center>
              <button id="enviar" class="btn btn-success">Enviar</button>
              <button onclick="limparCampos()" class="btn btn-danger">Limpar</button>
            </center>
          </div>

        </form>

      </div>

      <div class="col-xs-1"></div>
    </div>
</div>