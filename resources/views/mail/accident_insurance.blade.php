<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый заказ для Страхование от несчастныx случаев</title>
</head>
<body>
    <p style="margin-left:10%;">Число персон:  - <b> {{ $data['form_person'] }}</b></p>
    <p style="margin-left:10%;">Возраст:  - <b>{{ $data['form_age'] }} {{ $data['form_secondage'] }} </b></p>
    <p style="margin-left:10%;">Дата начала:  - <b>{{ $data['form_start'] }} </b></p>
    <p style="margin-left:10%;">Дата окончания:  - <b>{{ $data['form_expiration'] }} </b></p>
    <p style="margin-left:10%;">Сумма покрытия:  - <b>{{ $data['form_interior'] }} </b></p>
    <p style="margin-left:10%;">Срок действия полиса:  - <b>{{ $data['form_period'] }} </b></p>
    <p style="margin-left:10%;">Стоимость полиса:  - <b>{{ $data['form_amount'] }} </b></p>
    <br>
    <p style="margin-left:10%;">Ф.И.О: - <b>{{ $data['name'] }}</b></p>
    <p style="margin-left:10%;">Телефон: - <b>{{ $data['phone'] }}</b></p>

</body>
</html>

