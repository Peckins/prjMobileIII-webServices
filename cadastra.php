<?
    try {
        // pegando informações para inserir no banco de dados
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        // $foto = $_POST['foto'];

        // comando de inserção
        $query = "INSERT INTO `tb_pessoas` (`cd_pessoa`, `nm_pessoa`, `idade_pessoa`, `sexo_pessoa`, `endereco_pessoa`, `cpf_pessoa`, `foto`) VALUES (null, '$nome', '$idade', '$sexo', '$endereco', '$cpf', '$foto')";

        // conectando-se ao banco de dados
        $connect = mysqli_connect("localhost", "root", "", "pessoas");

        // inserindo
        mysqli_query($connect, $query);

        // informando sobre o ocorrido
        echo "dados inseridos com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao inserir dados ".$e;
    }
