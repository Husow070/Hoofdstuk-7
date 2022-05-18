<!--opdracht1-->
<form method="post">
    <label>bedrag exclusief BTW</label>
    <input type="text" name="bedrag" value=""/>
    <br>
    <input class="nostyle" type="radio" name="btw" value="6" /> Laag 6%,
    <br>
    <input class="nostyle" type="radio" name="btw" value="21" /> Hoog 21%,
    <br><br>

    <input type="submit" name="uitrekenen" value="uitrekenen" />
</form>

<?php

if(isset($_POST['uitrekenen'])) {
    if(!empty($_POST['bedrag']) && !empty($_POST['btw'])) {
        $btw=filter_input(INPUT_POST, 'btw', FILTER_VALIDATE_INT);
        $bedrag=filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_INT);

        if($bedrag===false){
            $melding= "vul een bedrag in met 2 cijfers achter de komma";
        } else {
            if ($btw === 6){
                $melding = "bedrag € $bedrag inclusief 6% BTW: € " .
                    round(($bedrag * 1.06), 2);
            } else{
                $melding = "bedrag € $bedrag inclusief 21% BTW: € " .
                    round(($bedrag * 1.21), 2);
            }
        }

    } else {
        $melding= "Vul een bedrag in en de btw";
    }

} else {
    $melding = "";
}
?>

<?php echo $melding; ?>

<!--opdracht2-->

<form method="post">
    <label>Getal 1</label>
    <input type="text" name="getal" value=""/>
    <br>
    <input class="nostyle" type="radio" name="Optellen" value="" /> Optellen,
    <input class="nostyle" type="radio" name="Aftrekken" value="-"/> Aftrekken
    <input class="nostyle" type="radio" name="Vermenigvuldigen" value="*"/>Vermenigvuldigen
    <input class="nostyle" type="radio" name="Delen" value="/"/> Delen
    <br>
    <label>Getal 2</label>
    <input type="text" name="getal2" value="<?php if(isset($_POST)"/>
    <br><br>

    <input type="submit" name="uitreken3n" value="uitrekenen" />
</form>

<?php

if(isset($_POST['uitreken3n'])) {
    if(!empty($_POST['bedrag']) && !empty($_POST['btw'])) {
        $optellen=filter_input(INPUT_POST, 'optellen', FILTER_VALIDATE_INT);
        $Aftrekken=filter_input(INPUT_POST, 'Aftrekken', FILTER_VALIDATE_INT);

        if($bedrag===false){
            $melding= "vul een bedrag in met 2 cijfers achter de komma";
        } else {
            if ($bedrag === " "){
                $melding = "getal  $optellen" .
                    round(($optellen * 1.06), 2);
            } else{
                $melding = "bedrag € $bedrag inclusief 21% BTW: € " .
                    round(($bedrag * 1.21), 2);
            }
        }

    } else {
        $melding= "Vul een bedrag in en de btw";
    }

} else {
    $melding = "";
}
?>

