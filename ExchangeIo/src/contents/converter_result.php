<?php

if(isset($_POST['selectedCurrency1']) && isset($_POST['selectedCurrency2']) && isset($_POST['amount'])){

    $curr1 = $_POST['selectedCurrency1'];
    $curr2 = $_POST['selectedCurrency2'];
    $amount = $_POST['amount'];


    $converter->convert($curr1, $curr2, $amount);
    $data = $converter->getResult();
    $convertResult = $converter->getConvertResult();

}

?>

<h2>Convert</h2>

<div class="jumbotron mt-1">
    <h4>Conversion Result</h4>
        <hr class="my-1">
            
        <p><?php echo $data['amount']." ".$data['base'] ?> = 
        <?php foreach($convertResult as $key => $value){echo $value." ".$key;}?> </p>
</div>

<div class="row h-100 mt-2">
    <div class="col-5">
        <a href="?page=converter" class="btn btn-block btn-secondary btn-default rounded">Back</a>
    </div>
    <div class="col-5">
        <a href="?page=dashboard" class="btn btn-block btn-primary btn-default rounded">Dashboard</a>
    </div>
</div>