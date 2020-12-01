<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('contract_type'); //Тип сделки
            $table->string('realty_type'); //Тип недвижимости
            $table->string('region'); //Область
            $table->unsignedInteger('price'); //Общая цена
            $table->string('currency'); //Общая цена
            $table->string('phones'); //Контактные телефоны
            $table->string('url'); //адрес страницы с объявлением на вашем сайте
            $table->dateTimeTz('update_time'); //адрес страницы с объявлением на вашем сайте
            //-----------------------------
            $table->dateTimeTz('add_time')->nullable(); //Время добавления объявления
            $table->string('rajon')->nullable(); //район области
            $table->string('city')->nullable(); //населенный пункт
            $table->string('district')->nullable(); //административный район города
            $table->string('microdistrict')->nullable(); //микрорайон
            $table->string('street')->nullable(); //улица
            $table->string('house')->nullable(); //номер дома
            $table->unsignedInteger('room_count')->nullable(); //количество комнат
            $table->string('room_type')->nullable(); //тип комнат
            $table->unsignedInteger('floor')->nullable(); //этаж
            $table->unsignedInteger('floor_count')->nullable(); //этажность дома
            $table->float('total_area', 8, 2)->nullable(); //общая площадь, кв. м.
            $table->float('living_area', 8, 2)->nullable(); //жилая площадь, кв. м
            $table->float('kitchen_area', 8, 2)->nullable(); //площадь кухни, кв. м.
            $table->float('land_area', 8, 2)->nullable(); //площадь участка, сотка
            $table->unsignedInteger('price_m2')->nullable(); //цена за метр квадратный
            $table->string('title')->nullable(); //заголовок объявления
            $table->text('text')->nullable(); //текст объявления
            $table->string('email')->nullable(); //контактный email
            $table->string('contact_name')->nullable(); //Имя физ./юр. лица, которому принадлежат контактные данные
            $table->string('agency_code')->nullable(); //внутренние код объекта агентства недвижимости
            $table->string('wc_type')->nullable(); //внутренние код объекта агентства недвижимости
            $table->string('house_type')->nullable(); //тип дома
            $table->string('wall_type')->nullable(); //тип стен
            $table->string('building')->nullable(); //название ЖК
            $table->float('ceiling_height')->nullable(); //высота потолков, м
            $table->unsignedInteger('built_year')->nullable(); //год постройки
            $table->string('heating_system')->nullable(); //тип отопления
            $table->string('url_uk')->nullable(); //адрес украинской версии страницы с объявлением (если есть)
            $table->string('url_amp')->nullable(); //адрес AMP версии страницы с объявлением (если есть)
            $table->text('images')->nullable(); //блок-контейнер для ссылок на изображения
            $table->string('image')->nullable(); //ссылка на изображение, связанное с этим объектом недвижимости
            //---------------------------------------
            $table->boolean('without_fee')->default(false); //“Без комиссии”? Претендует ли автор объявления на комиссию за услуги
            $table->boolean('is_owner')->default(false); //является ли автор владельцем данного объекта недвижимости
            $table->boolean('pets_allowed')->default(false); //“Можно ли с животными”? Для аренды. Признак того, что владелец квартиры не против наличия домашних животных у арендатора
            $table->boolean('has_furniture')->default(false); //наличие мебели
            $table->boolean('has_balcony')->default(false); //наличие балкона
            $table->boolean('has_parking')->default(false); //наличие паркинга
            $table->boolean('is_new_house')->default(false); //расположен ли данный объект недвижимости в "новостройке"
            $table->boolean('is_premium')->default(false); //признак премиум объявления (платного объявления)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
