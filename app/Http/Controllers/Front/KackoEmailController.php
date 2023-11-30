<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\KackoMail;
use Illuminate\Support\Facades\Config;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KackoEmailController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->all();

        $text = "<b>Новый заказ для Каско</b>\n\n"
            . "<b>Сумма ответственности:</b> {$request->input('amountLiability')}\n"
            . "<b>Страховая премия:</b> {$request->input('insurancePremium')}\n"
            . "<b>Марка автомобиля:</b> {$request->input('brand_name')}\n"
            . "<b>Модель автомобиля:</b> {$request->input('model_name')}\n"
            . "<b>Комплектация:</b> {$request->input('equipment')}\n"
            . "<b>Год выпуска авто:</b> {$request->input('kasko_year')}\n\n"
            . "<b>Ф.И.О:</b> {$request->input('customer')}\n"
            . "<b>Телефон:</b> {$request->input('phone')}\n";

        Telegram::sendMessage([
            'chat_id' => Config::get('telegram.telegram_channel_id'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

		Mail::to('online@semurgins.uz')->send(new KackoMail($data));

        return redirect('/');
    }
}

