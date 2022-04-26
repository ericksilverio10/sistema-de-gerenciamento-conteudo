<?php
    include_once('templates/header-pdf.php');
?>
<head>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
</head>
    
    <div style="max-width: 1200px;" class="container">
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><lord-icon
    src="https://cdn.lordicon.com/hjeefwhm.json"
    trigger="loop"
    colors="primary:#0fa873"
    style="width:50px;height:50px;margin-right:10px;">
</lord-icon><?=$printMsg?></p>
        <?php endif; ?>
        <h1 id="main-title">Relatório Fellype</h1>
            <table class="table" id="trabalhos-table">
                <thead>
                    <tr>
                        <th style="padding: 0 10px;" scope="col">Nome</th>
                        <th style="padding: 0 10px;" scope="col">Data</th>
                        <th style="padding: 0 10px;" scope="col">Material</th>
                        <th style="padding: 0 10px;" scope="col">Título</th>
                        <th style="padding: 0 10px;" scope="col">Cliente</th>
                        <th style="padding: 0 10px;" scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($trabalhosFellype as $trabalhoFellype):?>
                        <tr>
                            <td style="padding: 0 10px;" scope="row" class="nome"><?=$trabalhoFellype['nome']?></td>
                            <td style="padding: 0 10px;" scope="row"><?=$trabalhoFellype['data']?></td>
                            <td style="padding: 0 10px;" scope="row"><?=$trabalhoFellype['material']?></td>
                            <td style="padding: 0 10px;" scope="row"><?=$trabalhoFellype['titulo']?></td>
                            <td style="padding: 0 10px;" scope="row"><?=$trabalhoFellype['cliente']?></td>
                            <td style="padding: 0 10px;" scope="row">R$ <?=$trabalhoFellype['valor']?></td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
            <div class="total">
                <h1 id="main-title"><i style="margin-right: 5px;" class="fas fa-sack-dollar"></i> Total: R$ <?=$totalFellype['total']?></h1>
            </div>
    </div>


<?php
    include_once('templates/footer.php');
?>

<style>
    #msg{
    color: #0fa873;
    font-weight: bold;
    background-color: #ecfbf6;
    border: 1px solid #13ce8b;
    padding: 10px;
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
    margin-top: 30px;
}
thead{
        background-color: #920097;
        color: white;
    }
</style>