<h1>Página de categorias</h1>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome da Categoria</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "select * from categoria";
                    $consulta = $pdo ->prepare($sql);
                    $consulta->execute();
                    $dados = $consulta->fetchAll(PDO::FETCH_OBJ);
                    foreach($dados as $dado){
                ?>
                    <!-- Aqui vamos criar uma nova TR -->
                    <tr>
                        <td><?=$dado->id?></td>
                        <td><?=$dado->nome?></td>
                        <td></td>
                    </tr>
                <?php 
                    };
                ?>
            </tbody>
        </table>
    </div>
</div>