<pre>
    <?php
    setlocale(LC_TIME, 'es_ES.UTF-8');
    $month=strftime("%B");
    $day=strftime("%d");
    $year=strftime("%G");
    ?>
    <form action="ejercicio2b.php" method="get">
        <label for="dia">DIA</label>
        <select name="dia" id="fecha">
            <?php
                for ($i=1;$i<32;$i++){
                    if ($i==$day){
                        echo "<option value=\"$i\" selected='selected'>$i</option>";
                    }else{
                        echo "<option value=\"$i\">$i</option>";
                    }
                }
            ?>
            <br>
        </select>
        <label for="mes">MES</label>
        <select name="mes" id="mes">
            <?php
                $mes=['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
                for($i=1;$i<13;$i++){
                    if ($month1[$i]==$month){
                        echo "<option value=\"$month1[$i]\" selected='selected'>$month1[$i]</option>";
                    }else{
                        echo "<option value=\"$month1[$i]\">$month1[$i]</option>";
                    }
                }
            ?>
        </select>
        <label for="year">A&NTILDE;O</label>
        <select name="year">
            <?php
            for($i=1900;$i<2101;$i++){
                if ($i==$year){
                    echo "<option value=\"$i\" selected='selected'>$i</option>";
                }else{
                    echo "<option value=\"$i\">$i</option>";
                }
            }
            ?>
        </select>
        <?php
         echo "<input type=\"hidden\" name=\"mes\" value=\"$mes\">";
        ?>
        <br>
        <label for="check">COMPLETO:</label>
        <input type="checkbox" name="check" value="1">SI
        <br>
        <input type="submit" value="Enviar">
    </form>
</pre>
