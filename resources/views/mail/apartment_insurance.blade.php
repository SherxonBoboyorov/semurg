<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый заказ для Страхование имущества</title>
</head>
<body>
    <p style="margin-left:10%;">Жилое помещение:  - <b> {{ $data['form_apartment'] }}</b></p>
    <p style="margin-left:10%;">Регион:  - <b>{{ $data['form_region'] }} </b></p>
    <p style="margin-left:10%;">Внутренняя отделка и инженерное оборудование:  - <b>{{ $data['form_interior'] }} </b></p>
    <p style="margin-left:10%;">Срок действия полиса:  - <b>{{ $data['form_period'] }} </b></p>
    <p style="margin-left:10%;">Стоимость полиса:  - <b>{{ $data['form_amount'] }} </b></p>
    <br>
    <p style="margin-left:10%;">Ф.И.О: - <b>{{ $data['name'] }}</b></p>
    <p style="margin-left:10%;">Телефон: - <b>{{ $data['phone'] }}</b></p>

</body>
</html>

