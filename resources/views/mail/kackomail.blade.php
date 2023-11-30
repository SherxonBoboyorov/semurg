<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый заказ для Каско</title>
</head>
<body>
    <p style="margin-left:10%;">Fullname:  - <b> <?php= {$request->input('amountLiability')} ?> </b></p>
    <p style="margin-left:10%;">Сумма ответственности:  - <b> <?php= {$request->input('insurancePremium')} ?> </b></p>
    <p style="margin-left:10%;">Страховая премия:  - <b> <?php= {$request->input('brand_name')} ?> </b></p>
    <p style="margin-left:10%;">Марка автомобиля:  - <b> <?php= {$request->input('model_name')} ?> </b></p>
    <p style="margin-left:10%;">Модель автомобиля:  - <b> <?php= {$request->input('equipment')} ?> </b></p>
    <p style="margin-left:10%;">Комплектация:  - <b> <?php= {$request->input('kasko_year')} ?> </b></p>
    <br>
    <p style="margin-left:10%;">Ф.И.О: - <b> <?php= {$request->input('customer')} ?> </b></p>
    <p style="margin-left:10%;">Телефон: - <b> <?php= {$request->input('phone')} ?> </b></p>

</body>
</html>

