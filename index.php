<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
    <form method="get" class="col-md-4 mx-auto">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label" >Имя</label>
            <input type="text" class="form-control" id="exampleInputName" pattern="[a-zа-яё]+" placeholder="Павел">
        </div>
        <div class="mb-3">
            <label for="exampleInputTel" class="form-label">Телефон</label>
            <input type="tel" class="form-control" id="exampleInputTel" pattern="[0-9+-]+" placeholder="+37544333-33-33">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="pavel@mail.com">
        </div>
        <div class="mb-3">
            <label for="exampleInputCount" class="form-label">Количество тактов</label>
            <input type="text" name="countTact" class="form-control" id="exampleInputCount" required pattern="[0-9]+">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

<?php
if($_GET["countTact"] >=0){
    $greenBacteria = 1;
    $redBacteria = 1;
    $countTact = $_GET["countTact"];

    for ($i = 1; $i <= $countTact; $i++) {
        $countTactGreen = $greenBacteria * 3 + $redBacteria * 7;
        $countTactRed = $greenBacteria * 4 + $redBacteria * 5;
        $greenBacteria = $countTactGreen;
        $redBacteria = $countTactRed;
    }
    $sumBacteria = $redBacteria + $greenBacteria;
    ?><div class="col-md-4 mx-auto">
    <h2>Количество бактерий <?=$sumBacteria?></h2>
    </div><?
}
?>

