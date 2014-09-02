<?php
require_once 'config.php';
?>
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<table class="table table-bordered table-hover table-striped tablesorter">
    <tr><!--Linha 1-->
        <?php
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=1");
        if($query->num_rows>0)
        {
            ?>
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">01</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="1" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="01">
                </form>
            </td>
            <?php 
        } 
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=2");
        if($query->num_rows>0)
        {
            ?><!--FIM-->
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">01</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="2" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="02">
                </form>
            </td>
            <?php 
        } 
        ?>
        <td align="center">CORREDOR</td>
        <?php
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=4");
        if($query->num_rows>0)
        {
            ?>
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">04</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="4" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="04">
                </form>
            </td>
            <?php 
        } 
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=3");
        if($query->num_rows>0)
        {
            ?><!--FIM-->
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">03</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="3" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="03">
                </form>
            </td>
            <?php 
        } 
        ?>
    </tr>
    <tr><!--Linha 2-->
        <?php
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=5");
        if($query->num_rows>0)
        {
            ?>
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">05</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="5" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="05">
                </form>
            </td>
            <?php 
        } 
        $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=6");
        if($query->num_rows>0)
        {
            ?><!--FIM-->
            <td class="danger">
                <button class="btn btn-danger btn-xs pull-right">06</button>
            </td>
            <?php 
        }else{ 
            ?>
            <td class="success">
                <form method="post" action="reserva.php">
                    <input type="hidden" name="nr_poltrona" value="6" />
                    <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                    <input type="submit" class="btn btn-success btn-xs pull-right" value="06">
                </form>
            </td>
            <?php 
        } 
        ?>
        <td rowspan="10">
            <td colspan="2">ESCADA</td>
        </tr>
        <tr><!--Linha 3-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=9");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">09</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="9" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="09">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=10");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">10</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="10" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="10">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=8");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">08</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="8" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="08">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=7");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">07</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="7" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="07">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 4-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=13");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">13</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="13" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="13">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=14");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">14</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="14" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="14">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=12");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">12</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="12" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="12">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=11");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">11</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="11" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="11">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 5-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=17");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">17</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="17" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="17">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=18");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">18</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="18" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="18">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=16");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">16</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="16" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="16">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=15");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">15</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="15" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="15">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 6-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=21");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">21</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="21" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="21">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=22");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">22</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="22" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="22">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=20");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">20</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="20" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="20">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=19");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">19</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="19" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="19">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 7-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=25");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">25</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="25" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="25">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=26");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">26</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="26" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="26">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=24");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">24</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="24" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="24">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=23");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">23</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="23" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="23">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 8-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=29");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">29</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="29" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="29">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=30");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">30</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="30" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="30">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=28");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">28</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="28" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="28">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=27");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">27</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="27" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="27">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 9-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=33");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">33</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="33" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="33">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=34");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">34</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="34" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="34">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=32");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">32</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="32" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="32">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=31");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">31</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="31" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="31">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 10-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=37");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">37</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="37" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="37">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=38");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">38</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="38" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="38">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=36");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">36</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="36" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="36">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=35");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">35</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="35" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="35">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 11-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=41");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">41</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="41" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="41">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=42");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">42</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="42" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="42">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=40");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">40</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="40" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="40">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=39");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">39</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="39" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="39">
                    </form>
                </td>
                <?php 
            } 
            ?>
        </tr>
        <tr><!--Linha 12-->
            <?php
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=43");
            if($query->num_rows>0)
            {
                ?>
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">43</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="43" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="43">
                    </form>
                </td>
                <?php 
            } 
            $query=$db->query("SELECT * FROM tb_reservs WHERE id_tour=".$_POST['id_tour']." AND nr_poltrona=44");
            if($query->num_rows>0)
            {
                ?><!--FIM-->
                <td class="danger">
                    <button class="btn btn-danger btn-xs pull-right">44</button>
                </td>
                <?php 
            }else{ 
                ?>
                <td class="success">
                    <form method="post" action="reserva.php">
                        <input type="hidden" name="nr_poltrona" value="44" />
                        <input type="hidden" name="id_tour" value="<?=$_POST['id_tour'] ?>" />
                        <input type="submit" class="btn btn-success btn-xs pull-right" value="44">
                    </form>
                </td>
                <?php 
            } 
            ?>
            <td colspan="2">BANHEIRO</td>
        </tr>
    </table>