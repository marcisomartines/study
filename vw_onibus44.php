<?php
require_once 'config.php';
?>
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<table class="table table-bordered table-hover table-striped tablesorter">
    <tr><!--Linha 1-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="1" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="01">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="2" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="02">
            </form>
        </td>
        <td class="success" align="center">CORREDOR</td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="4" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="04">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="3" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="03">
            </form>
        </td>
    </tr>
    <tr><!--Linha 2-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="5" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="05">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="6" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="06">
            </form>
        </td>
        <td rowspan="11">
        <td colspan="2">ESCADA</td>
    </tr>
    <tr><!--Linha 3-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="9" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="09">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="10" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="10">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="8" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="08">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="7" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="07">
            </form>
        </td>
    </tr>
    <tr><!--Linha 4-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="13" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="13">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="14" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="14">
            </form>
        </td>
        <td class="success"><form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="12" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="12">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="11" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="11">
            </form>
        </td>
    </tr>
    <tr><!--Linha 5-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="17" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="17">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="18" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="18">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="16" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="16">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="15" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="15">
            </form>
        </td>
    </tr>
    <tr><!--Linha 6-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="21" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="21">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="22" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="22">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="20" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="20">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="19" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="19">
            </form>
        </td>
    </tr>
    <tr><!--Linha 7-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="25" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="25">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="26" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="26">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="24" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="24">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="23" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="23">
            </form>
        </td>
    </tr>
    <tr><!--Linha 8-->
        <td class="success"><form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="29" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="29">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="30" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="30">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="28" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="28">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="27" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="27">
            </form>
        </td>
    </tr>
    <tr><!--Linha 9-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="33" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="33">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="34" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="34">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="32" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="32">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="31" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="31">
            </form>
        </td>
    </tr>
    <tr><!--Linha 10-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="37" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="37">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="38" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="38">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="36" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="36">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="35" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="35">
            </form>
        </td>
    </tr>
    <tr><!--Linha 11-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="41" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="41">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="42" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="42">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="40" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="40">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="39" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="39">
            </form>
        </td>
    </tr>
    <tr><!--Linha 12-->
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="43" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="43">
            </form>
        </td>
        <td class="success">
            <form method="post" action="reserva.php">
                <input type="hidden" name="nr_poltrona" value="44" />
                <input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
                <input type="submit" class="btn btn-success btn-xs pull-right" value="44">
            </form>
        </td>
        <td colspan="2">BANHEIRO</td>
    </tr>
</table>