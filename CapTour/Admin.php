<?php
    require_once ("./php/Conexao.php");

$nome = "";
$email = "";
$status = "";
$sucesso = "";
$error = "";
$op = isset($_GET['op']) ? $_GET['op'] : '';

if($op == 'delete'){
    $id  = $_GET['id'];
    $sql1 = "delete from cadastro where IDCADASTRO = '$id'";
    $q1 = mysqli_query($cn,$sql1);
    if($q1){
        $sucesso = "Dados excluidos com sucesso";
    }else{
        $error = "falha ao excluir os dados";
    }
}

if ($op == 'edit') {
    $id = $_GET['id'];
    $error = '';
    $sql1 = "SELECT * from cadastro where IDCADASTRO = '$id'";
    $q1 = mysqli_query($cn, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $usuario = $r1;
    $nome  = $usuario['NOME'];
    $email = $usuario['EMAIL'];
    $status = $usuario['STATUS'];

    if (!isset($error)) {
        $error = "Dados não encontrados";
    }
}

if (isset($_POST['salvar'])) { //creat
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    if ($nome && $email && isset($status)) {
        if ($op == 'edit') { //update
            $sql1 = "update cadastro set NOME='$nome',EMAIL = '$email',STATUS='$status' where IDCADASTRO = '$id'";
            $q1  = mysqli_query($cn, $sql1);
            if ($q1) {
                $sucesso = "Dados atualizados com sucesso";
            } else {
                $error = "Falha ao atualizar os dados";
            }
        } else { //insert
            $sql1 = "insert into cadastro(NOME,EMAIL,STATUS) values ('$nome','$email','$status')";
            $q1 = mysqli_query($cn, $sql1);
            if ($q1) {
                $sucesso = "Novos dados inseridos com sucesso";
            } else {
                $error = "Falha ao inserir dados";
            }
        }
    } else {
        $error = "Por favor, insira todos os dados";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- inserir dados -->
        <div class="card">
            <div class="card-header">
                Create - Edit
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=Admin.php");
                }
                ?>
                <?php
                if ($sucesso) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sucesso ?>
                    </div>
                <?php
                    header("refresh:5;url=Admin.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">ADM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="<?php echo $status ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="salvar" value="Salvar Dados" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- saída de dados -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                DADOS
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">ADM</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    
                        <?php
                        $sql2 = "select * from cadastro order by IDCADASTRO desc";
                        $q2 = mysqli_query($cn, $sql2);
                        $urut = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id = $r2['IDCADASTRO'];
                            $nome = $r2['NOME'];
                            $email = $r2['EMAIL'];
                            $status  = $r2['STATUS'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nome ?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $status ?></td>
                                <td scope="row">
                                    <a href="Admin.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Editar</button></a>
                                    <a href="Admin.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Tem certeza que deseja excluir os dados?')"><button type="button" class="btn btn-danger">Deletar</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>