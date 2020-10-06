<h2 class="mt-2">Latest Data</h2>
    <form action="?page=latest_result" method="POST">
        <div class="row h-100 mt-3">
            <div class="col-3">
                <label for="currencySelect">Currency</label>
                <select class="form-control-sm rounded" id="currencySelect" name="selectedCurrency">
                <?php foreach($nameData as $currencyCode => $currencyName):  ?>
                    <option value=<?php echo $currencyCode ?> > <?php echo $currencyName ?></option>
                 <?php endforeach ?>   
                </select>
            </div>
        </div>
        <div class="row h-100 mt-3">
            <div class="col-3">
                <input id="searchButton"type="submit" class="btn btn-sm btn-primary rounded" value="Request"></input>
            </div>
        </div>
    </form>