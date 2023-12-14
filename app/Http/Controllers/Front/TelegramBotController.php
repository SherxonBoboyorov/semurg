<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\AccidentInsuranceMail;
use App\Mail\AccidentInsuranceSportsMail;
use App\Mail\ApartmentInsuranceMail;
use App\Mail\KackoMail;
use Illuminate\Support\Facades\Config;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TelegramBotController extends Controller
{
    public function storeKaskoMessage(Request $request)
    {
        // $text = "<b>Новый заказ для Каско</b>\n\n"
        //     . "<b>Сумма ответственности:</b> {$request->input('amountLiability')}\n"
        //     . "<b>Страховая премия:</b> {$request->input('insurancePremium')}\n"
        //     . "<b>Марка автомобиля:</b> {$request->input('brand_name')}\n"
        //     . "<b>Модель автомобиля:</b> {$request->input('model_name')}\n"
        //     . "<b>Комплектация:</b> {$request->input('equipment')}\n"
        //     . "<b>Год выпуска авто:</b> {$request->input('kasko_year')}\n\n"
        //     . "<b>Ф.И.О:</b> {$request->input('customer')}\n"
        //     . "<b>Телефон:</b> {$request->input('phone')}\n";

        // Telegram::sendMessage([
        //     'chat_id' => Config::get('telegram.telegram_channel_id'),
        //     'parse_mode' => 'HTML',
        //     'text' => $text
        // ]);

        // $sendToEmail = strtolower('sherxonbabayar@gmail.com');
        // if(isset($sendToEmail) && !empty($sendToEmail) && filter_var($sendToEmail, FILTER_VALIDATE_EMAIL)){
        //     Mail::to($sendToEmail)->send(new KackoMail($text));
        // }

        // return redirect('/');
    }

    public static function storeApartmentMessage($request)
    {
        $text = "<b>Новый заказ для Страхование имущества</b>\n\n"
            . "<b>Жилое помещение:</b> {$request['form_apartment']}\n"
            . "<b>Регион:</b> {$request['form_region']}\n"
            . "<b>Внутренняя отделка и инженерное оборудование:</b> {$request['form_interior']}\n"
            . "<b>Срок действия полиса:</b> {$request['form_period']}\n"
            . "<b>Стоимость полиса:</b> {$request['form_amount']}\n\n"
            . "<b>Ф.И.О:</b> {$request['name']}\n"
            . "<b>Телефон:</b> {$request['phone']}\n";

        Telegram::sendMessage([
            'chat_id' => Config::get('telegram.telegram_channel_id'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        $sendToEmail = strtolower('online@semurgins.uz');
        if(isset($sendToEmail) && !empty($sendToEmail) && filter_var($sendToEmail, FILTER_VALIDATE_EMAIL)){
            Mail::to($sendToEmail)->send(new ApartmentInsuranceMail($request));
        }
    }

    public static function storeAccidentSportsMessage($request)
    {
        $text = "<b>Новый заказ для Страхование от несчастныx случаев Спорт</b>\n\n"
            . "<b>Число персон:</b> {$request['form_person']}\n"
            . "<b>Возраст:</b> {$request['form_age']}\n{$request['form_secondage']}\n"
            . "<b>Вид спорта:</b> {$request['form_sport']}\n"
            . "<b>Сумма покрытия:</b> {$request['form_interior']}\n"
            . "<b>Срок действия полиса:</b> {$request['form_period']}\n\n"
            . "<b>Стоимость полиса:</b> {$request['form_amount']}\n\n"
            . "<b>Ф.И.О:</b> {$request['name']}\n"
            . "<b>Телефон:</b> {$request['phone']}\n";

        Telegram::sendMessage([
            'chat_id' => Config::get('telegram.telegram_channel_id'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        $sendToEmail = strtolower('online@semurgins.uz');
        if(isset($sendToEmail) && !empty($sendToEmail) && filter_var($sendToEmail, FILTER_VALIDATE_EMAIL)){
            Mail::to($sendToEmail)->send(new AccidentInsuranceSportsMail($request));
        }
    }



    public static function storeAccidentMessage($request)
    {
        $text = "<b>Новый заказ для Страхование от несчастныx случаев</b>\n\n"
            . "<b>Число персон:</b> {$request['form_person']}\n"
            . "<b>Возраст:</b> {$request['form_age']}\n{$request['form_secondage']}\n"
            . "<b>Дата начала:</b> {$request['form_start']}\n"
            . "<b>Дата окончания:</b> {$request['form_expiration']}\n"
            . "<b>Сумма покрытия:</b> {$request['form_interior']}\n"
            . "<b>Срок действия полиса:</b> {$request['form_period']}\n\n"
            . "<b>Стоимость полиса:</b> {$request['form_amount']}\n\n"
            . "<b>Ф.И.О:</b> {$request['name']}\n"
            . "<b>Телефон:</b> {$request['phone']}\n";


        dd($text);

        Telegram::sendMessage([
            'chat_id' => Config::get('telegram.telegram_channel_id'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        $sendToEmail = strtolower('online@semurgins.uz');
        if(isset($sendToEmail) && !empty($sendToEmail) && filter_var($sendToEmail, FILTER_VALIDATE_EMAIL)){
            Mail::to($sendToEmail)->send(new AccidentInsuranceMail($request));
        }
    }


}
