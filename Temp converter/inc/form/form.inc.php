<h1>Temperature Converter</h1>
<br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="row">
        <label class="form-label" for="temp">Original Temperature</label>
        <input type="text" value="<?php if (isset($_POST['originaltemp'])) {
                                        echo $_POST['originaltemp'];
                                    }
                                    ?>" name="originaltemp" size="20" maxlength="7" id="temp" style="width: 50%;">
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="originalunit">Select Temperature</label>
        <select class="form-select" name="originalunit" style="width: 50%;">
            <option value="--Select--" <?= $originalUnit == "-" ? "selected" : "" ?>>Select a unit</option>
            <option value="celsius" <?= $originalUnit == "celsius" ? "selected" : "" ?>>Celsius</option>
            <option value="fahrenheit" <?= $originalUnit == "fahrenheit" ? "selected" : "" ?>>Fahrenheit</option>
            <option value="kelvin" <?= $originalUnit == "kelvin" ? "selected" : "" ?>>Kelvin</option>
        </select>
    </div>
    <br>
    <div class="row">
        <label class="form-label" for="convertedtemp">Converted Temperature</label>
        <select class="form-select" name="conversionunit" style="width: 50%;">
            <option value="--Select--" <?= $conversionUnit == "-" ? "selected" : "" ?>>Select converted unit</option>
            <option value="celsius" <?= $conversionUnit == "celsius" ? "selected" : "" ?>>Celsius</option>
            <option value="fahrenheit" <?= $conversionUnit == "fahrenheit" ? "selected" : "" ?>>Fahrenheit</option>
            <option value="kelvin" <?= $conversionUnit == "kelvin" ? "selected" : "" ?>>Kelvin</option>
        </select>
    </div>
    <br>
    <br>
    <div class="row">
        <button type="submit" value="Go" style="width: 50%; border-radius: 5px;">Go</button>
        <label for="convertedtemp"><?= "The converted temperature is:  $convertedTemp " ?></label>
    </div>
</form>