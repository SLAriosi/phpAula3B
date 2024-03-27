<div class="card">
    <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nome da Categoria</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM `categoria`";

                        $consulta = $pdo->prepare($sql);
                        $consulta->execute();
                        $dados = $consulta->fetchAll(PDO::FETCH_OBJ);
                        
                        // Utilizado o foreach para selecionar os dados a serem exibidos
                        foreach($dados as $dado) {
                    ?>
                        <!-- Criação das TR -->
                        <tr>
                            <!-- Exibindo os objetos dos dados -->
                            <td><?= $dado->id?></td>
                            <td><?= $dado->nome?></td>
                        </tr>
                        <!-- Abrindo um php para fechar a chave foreach para conseguir criar varios td -->
                    <?php 
                        // Fechando a chave do foreach
                        }
                    ?>
                </tbody>
            </table>
    </div>
</div>