<?php
require "../includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta-charset="utf-8">
    <title><?php echo $config['title'];?></title>

</head>
<body>
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <?php include "../includes/header.php" ?>
    <?php include "../includes/sidebar.php" ?>
        <?php
        $roll_types = mysqli_query($connection, "SELECT * FROM `roll_types`"); //Не путать апострофы с черточками под тильдой!!!
        ?>
        <div class = "content"">
        <h1>Список валков</h1>
            <form action="../includes/action.php" method="get" name="search_type">
                <p>Типоразмер валков:
                    <select name="type" id="type">
                        <option value="0">Выберите типоразмер</option>
                        <?php
                        while($types = mysqli_fetch_assoc($roll_types)) {
                            ?>
                            <option value="<?php echo $types['roll_type']; ?>"><?php echo $types['roll_type']; ?></option>
<!--                                                    <option value="500*100">500*100</option>-->
<!--                                                    <option value="700*100">700*100</option>-->
<!--                                                    <option value="900*100">900*100</option>-->
                            <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value="ПОКАЗАТЬ">
                </p>
            </form>
        <table>
            <tr>
                <th>№ Цеховый</th>
                <th>№ Заводской</th>
                <th>Изготовитель</th>
                <th>Дата ввода в работу</th>
                <th>Начальный диаметр, мм</th>
                <th>Текущий диаметр, мм</th>
                <th>Съем, мм</th>
                <th>Количество установок</th>
                <th>Общий прокат, т</th>
                <th>Общий прокат, км</th>
                <th>Износостойкость, т/мм</th>
                <th>Износостойкость, км/мм</th>
            </tr>
            <tr>
                <td>189</td>
                <td>9703112</td>
                <td>Sheffield</td>
                <td>05.12.2011</td>
                <td>560.30</td>
                <td>526.59</td>
                <td>33.71</td>
                <td>102</td>
                <td>99228</td>
                <td>12279</td>
                <td>2944</td>
                <td>364</td>
            </tr>
            <tr>
                <td>237</td>
                <td>9703138</td>
                <td>Sheffield</td>
                <td>02.06.2013</td>
                <td>560.50</td>
                <td>538.52</td>
                <td>21.98</td>
                <td>54</td>
                <td>50330</td>
                <td>7556</td>
                <td>2290</td>
                <td>344</td>
            </tr>
            <?php
            for ($i = 0; $i<100; $i++)
              echo '<tr>
                  <td>237</td>
                  <td>9703138</td>
                  <td>Sheffield</td>
                  <td>02.06.2013</td>
                  <td>560.50</td>
                  <td>538.52</td>
                  <td>21.98</td>
                  <td>54</td>
                  <td>50330</td>
                  <td>7556</td>
                  <td>2290</td>
                  <td>344</td>
              </tr>';
             ?>
        </table>
    </div>

</body>
</html>
