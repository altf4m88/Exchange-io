<h2 class="mt-2">Convert</h2>
    <form action="?page=converter_result" method="POST">
        <div class="row mt-3">
            <div class="col-2">
                <label for="currencySelect">From</label>
                <select class="form-control-sm rounded" id="currencySelect" name="selectedCurrency1">
                <?php foreach($nameData as $currencyCode1 => $currencyName1):  ?>
                    <option value=<?php echo $currencyCode1 ?> > <?php echo $currencyName1 ?></option>
                 <?php endforeach ?>   
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="currencySelect">To</label>
                <select class="form-control-sm rounded" id="currencySelect" name="selectedCurrency2">
                <?php foreach($nameData as $currencyCode2 => $currencyName2):  ?>
                    <option value=<?php echo $currencyCode2 ?> > <?php echo $currencyName2 ?></option>
                 <?php endforeach ?>   
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <label for="amountInput">Amount</label>
                <input type="number" name="amount" id="amountInput" class="form control form-control-sm ">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <input id="searchButton"type="submit" class="btn btn-sm btn-primary rounded" value="Search"></input>
            </div>
        </div>
    </form>
<hr>