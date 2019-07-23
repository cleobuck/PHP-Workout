<!-- 

Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. En fonction des choix, afficher un calendrier comme celui-ci :
 -->


<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendrier</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    table, th, td,caption  {
    border: 1px solid black;
    }

    table {
        background: turquoise;
        text-align: center;
        margin: 0 auto;
    
    }

    caption {
        padding: 5px;
        background-color: turquoise;
        font-weight: bolder;
        font-size: 1.5em;

    }
    .title {
        width: 100%;
        display: flex;
        justify-content: center;
    }


    td {
        height: 50px;
        padding: 5px;
    }

    tr:first-child td {
        font-weight: bold;
        height: 30px;
    }

    th {
        height: 30px;
        border: none;
     
    }
  
 
    form {
        margin: 50px 30px;
        text-align: center;
        padding: 20px;
        background: turquoise;
    }

    </style>
</head>

<body>
    <form action="#" method="post">
        <select name="mois">
            <?php 
            (isset($_POST['mois']))?$select = $_POST["mois"] : $select = "01";
            ?>

            <option <?php if($select== "01") echo 'selected' ?> value="01">Janvier</option>
            <option <?php if($select== "02") echo 'selected' ?> value="02">Fevrier</option>
            <option <?php if($select== "03") echo 'selected' ?> value="03">Mars</option>
            <option <?php if($select== "04") echo 'selected' ?> value="04">Avril</A></option>
            <option <?php if($select== "05") echo 'selected' ?> value="05">Mai</option>
            <option <?php if($select== "06") echo 'selected' ?> value="06">Juin</option>
            <option <?php if($select== "07") echo 'selected' ?> value="07">Juillet</option>
            <option <?php if($select== "08") echo 'selected' ?> value="08">Août</option>
            <option <?php if($select== "09") echo 'selected' ?> value="09">Septembre</option>
            <option <?php if($select== "10") echo 'selected' ?> value="10">Octobre</option>
            <option <?php if($select== "11") echo 'selected' ?> value="11">Novembre</option><
            <option  <?php if($select== "12") echo 'selected' ?> value="12">Decembre</option>

        </select>

        <select name="annee">
            <?php
            (isset($_POST['annee']))?$select2 = $_POST["annee"] : $select = "2019";
            ?>

            <option  <?php if($select2== "2019") echo 'selected' ?> value="2019">2019</option>
            <option <?php if($select2== "2018") echo 'selected' ?>  value="2018">2018</option>
            <option <?php if($select2== "2017") echo 'selected' ?>  value="2017">2017</option>
            <option <?php if($select2== "2016") echo 'selected' ?>  value="2016">2016</A></option>
            <option <?php if($select2== "2015") echo 'selected' ?>  value="2015">2015</option>
            <option <?php if($select2== "2014") echo 'selected' ?>  value="2014">2014</option>
            <option <?php if($select2== "2013") echo 'selected' ?>  value="2013">2013</option>
            <option <?php if($select2== "2012") echo 'selected' ?>  value="2012">2012</option>
            <option <?php if($select2== "2011") echo 'selected' ?>  value="2011">2011</option>
            <option <?php if($select2== "2010") echo 'selected' ?>  value="2010">2010</option>
            <option <?php if($select2== "2009") echo 'selected' ?>  value="2009">2009</option>
            <option <?php if($select2== "2008") echo 'selected' ?>  value="2008">2008</option>

        </select>

        <input type="submit" name="submit">
    </form>

    <table>

        <caption>
            <?php
            if(isset($_POST['mois']) && $_POST['annee']) {

            $mois = $_POST['mois']; 
            $annee= $_POST['annee'];
            $wmois = date("F", mktime(0,0,0, $mois));

            echo $wmois."-".$annee;

            $timestamp = mktime(0, 0, 0, $mois, 01, $annee);
            $firstDayArr = getdate($timestamp);
            $firstDay = $firstDayArr['wday'];
            } else {
            echo "January-2019";
            }
            ?>
        </caption>

        <tr>
            <td >Monday</td>
            <td>Tuesday</td>
            <td>Wednesday</td>
            <td>Thursday</td>
            <td>Friday</td>
            <td>Saturday</td>
            <td>Sunday</td>
        </tr>

        <tr>
            <?php
            $start = false;
            for ($td = 1; $td<=7; $td++) {
                echo "<td>";
                if ($start == true) {
                    $firstNum++;
                    echo $firstNum;
                };
                if ($td == $firstDay) {
                $firstNum = 1;
                echo $firstNum;
                $start = true;
                };
                echo "</td>";
            }
            ?>
        </tr>

        <tr>
            <?php
            $start = false;
            for ($td = $firstNum+1; $td<=$firstNum+7; $td++) {
                echo "<td>";
                echo $td;
                echo "</td>";
            }
            $third = $td;
            ?>
        </tr>

        <tr>
        <?php
        for ($td = $third; $td<=$third+6; $td++) {
            echo "<td>";
                echo $td;
            echo "</td>";
        }
        $fourth = $td;
        ?>
        </tr>

        <tr>
        <?php
            for ($td = $fourth; $td<=$fourth+6; $td++) {
                echo "<td>";
                    echo $td;
                echo "</td>";
            }
            $fifth = $td  
        ?>
        </tr>

        <tr>
        <?php
                $d=cal_days_in_month(CAL_GREGORIAN,$mois,$annee);
                for ($td = $fifth; $td<=$fifth+6;  $td++) {
                    if ($td<=$d) {
                        echo "<td>";
                            echo $td;
                        echo "</td>";
                    }  
            }
            ?>
        </tr>
    </table> 
</body>
</html>