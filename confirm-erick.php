<?php
    include_once('templates/header-erick.php');
?>
<script src="https://cdn.lordicon.com/lusqsztk.js"></script>

<div class="container-reset">{
    <h1 id="warning">Tem certeza que gostaria de resetar o relatório?</h1>
    <h1 id="warning"><strong>Todos os itens serão apagados.</strong></h1>
    <div class="lixeira">
        <lord-icon
        src="https://cdn.lordicon.com/dovoajyj.json"
        trigger="loop"
        style="width:250px;height:250px">
    </lord-icon>
    </div>
    <div class="button-reset">
        <form style="display: inline-block;" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="delete-all-erick">
            <button class="btn btn-dark" type="submit"><i class="fas fa-trash-can"></i>Sim, quero resetar</button>       
        </form>
    </div>
    <div class="back-btn">
       <?php include_once('templates/backbtn-erick.html'); ?> 
    </div>
</div>

<style>
#warning{
    text-align: center;
    margin: 30px 0 30px;
    transition: 0.5s all ease-in-out;
}
.container-reset{
    justify-content: center;
    margin-top: 20px;
}
.lixeira{
    text-align: center;
    margin-bottom: 20px;
}
.button-reset{
    text-align: center;
}
.btn.btn-dark{
        font-size: 30px;
        background-color: #920097;
        border: none;
        font-weight: 700;
        padding: 10px 60px;
        border-radius: 35px;
        transition: 0.5s all;
    }
    .btn.btn-dark:hover{
        background-color: #820086;
        letter-spacing: 4px;
    }
    .fas.fa-trash-can{
        margin-right: 15px;
    }
    .back-btn{
        font-size: 30px;
        margin-top: 20px;
        text-align: center;
    }
</style>