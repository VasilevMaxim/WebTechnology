<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваш заказ</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section>
        
        <?php if (preg_replace("/ +/", "", $_GET["count_order"]) == '' || $_GET["count_order"] == '0' || (int)($_GET["count_order"] < 0
        || !is_numeric($_GET["count_order"]))){ ?>
            <h1>Ошибка! Введено количество равное или меньше ноля</h1>
        <?php 
            }
            else
            {
        ?>

       <h1>Ваш заказ принят	</h1>

        <p></p>
        <p>Заказано изделие	— <?php echo $_GET["type"] ?></p>
        <p>Материал — <?php echo $_GET["material_type"] ?></p>
        <p>Количество — <?php echo (int)$_GET["count_order"] ?></p>

        <?php 
            }
        ?>

    </section>

</body>

</html>