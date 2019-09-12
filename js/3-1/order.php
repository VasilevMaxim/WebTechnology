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
        
       <h1>Ваш заказ принят	</h1>

        <p></p>
        <p>Заказано изделие	— <?php echo $_GET["type"] ?></p>
        <p>Материал — <?php echo $_GET["material_type"] ?></p>
        <p>Количество — <?php echo $_GET["count_order"] ?></p>

    </section>

</body>

</html>