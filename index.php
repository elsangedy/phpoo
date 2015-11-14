<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>PHPOO</title>
</head>
<body>
    <div class="container">

    <?php
    require_once 'class/Client.php';

    $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
    $index = @$_GET['index'];

    $clients = [];
    $clients[] = new Client('Munir Ahmed', '123.456.789-00', '12.345.678-9', 'Rua das Alamedas, 762', '(12) 1234-5678');
    $clients[] = new Client('Hedy Fuller', '556.493.526-82', '4.032.894-40', 'P.O. Box 790, 9444 Lacinia Av.', '(27) 9033-0836');
    $clients[] = new Client('Tyrone Watts', '543.537.063-90', '41.875.789-6', 'Ap #634-8051 Vehicula Road', '(04) 4876-3437');
    $clients[] = new Client('Olga Bolton', '788.354.344-08', '2.977.269', '136-9660 Tellus. Rd.', '(47) 6048-1341');
    $clients[] = new Client('Carissa Strickland', '448.482.106-07', '42.943.412-1', '8523 Accumsan Avenue', '(97) 1745-5663');
    $clients[] = new Client('Jerome Solis', '521.249.877-55', '91.122.534-1', '981-6047 Donec Ave', '(43) 3639-8347');
    $clients[] = new Client('Phoebe Vargas', '717.226.233-65', '4.032.894-40', 'P.O. Box 165, 3628 Facilisis, Avenue', '(80) 4451-5819');
    $clients[] = new Client('Malcolm Mcmahon', '726.286.781-44', '2.977.269', '3284 Blandit Av.', '(87) 9337-4815');
    $clients[] = new Client('Calista Wiley', '784.824.497-02', '41.875.789-6', 'Ap #515-4262 Dictum Road', '(72) 8246-7670');
    $clients[] = new Client('Lila Hampton', '824.773.488-50', '4.032.894-40', '592-7195 Ullamcorper. Street', '(29) 6678-7209');

    if($order == 'desc') {
        $clients = array_reverse($clients, true);
    }
    ?>

    <?php if(!isset($index)) { ?>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome
                <a href="index.php?order=<?= $order == 'asc' ? 'desc' : 'asc' ?>" class="pull-right">
                    <i class="fa fa-angle-<?= $order == 'asc' ? 'down' : 'up' ?>"></i>
                </a>
            </th>
            <th>Cpf</th>
            <th>Rg</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </thead>
        <tbody>
            <?php foreach($clients as $key => $value) { ?>
            <tr>
                <td><?= $key ?></td>
                <td><a href="index.php?order=<?= $order ?>&index=<?= $key ?>"><?= $value->name ?></a></td>
                <td><?= $value->cpf ?></td>
                <td><?= $value->rg ?></td>
                <td><?= $value->address ?></td>
                <td><?= $value->phone ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } elseif($index <= count($clients)) { ?>
    <div class="jumbotron">
        <h1><?= $clients[$index]->name ?></h1>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Cpf</strong>
                <?= $clients[$index]->cpf ?>
            </li>
            <li class="list-group-item">
                <strong>Rg</strong>
                <?= $clients[$index]->rg ?>
            </li>
            <li class="list-group-item">
                <strong>Endereço</strong>
                <?= $clients[$index]->address ?>
            </li>
            <li class="list-group-item">
                <strong>Telefone</strong>
                <?= $clients[$index]->phone ?>
            </li>
        </ul>

        <p><a href="index.php?order=<?= $order ?>">Voltar</a></p>
    </div>
    <?php } else { ?>
    Cliente não encontrado.
    <?php } ?>

    </div>
</body>
</html>