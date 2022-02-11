<div class="container main">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-12 content">
            <h1>Welcome!</h1>
            <p>This is a temperature converter website. You can simply input a tempature with a choice of Celsius, Kelvin, or Fahrenheit. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 formcontent">
            <?php
            require_once 'inc/functions/functions.inc.php';
            require_once 'inc/form/form.inc.php';
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-12 content">
            <h2>Math behind each formula</h2>
            <ul>
                <li>Celsius to Fahrenheit = T(°C)x9/5+32</li>
                <li>Celsius to Kelvin = T(°C)+273.15</li>
                <br>
                <li>Kelvin to Celsius = (T(°F)-32)x5/9</li>
                <li>Kelvin to Fahrenheit = (T(°F)+459.67)x5/9</li>
                <br>
                <li>Fahrenheit to Celsius = T(K)x9/5-459.67</li>
                <li>Fahrenheit to Kelvin = T(K)-273.15</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-12 content">
            <h2>Celsius</h2>
            <p>Celsius is one of the most common used units of temperatures. Named after Swedish astronomer Anders Celsius. The freezing point of water is 0°C. While 100°C is the boiling point of water.</p>
            <br>
            <h2>Kelvin</h2>
            <p>Kelvin is most often used in science because of its relations to absolute temperature. Kelvin is named after Glasgow University engineer and physicist William Thomso. Kelvin is not used like a degree but is used with Celius to refer to.</p>
            <br>
            <h2>Fahrenheit</h2>
            <p>Named after Daniel Gabriel Fahrenheit. Waters freezing point is 32 degrees in Fahrenheit. While the boiling point of water is 212 degrees. The Fahrenheit system puts the boiling and freezing points of water exactly 180 degrees apart. </p>
        </div>

    </div>
</div>