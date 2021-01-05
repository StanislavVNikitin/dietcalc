<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            "1"=> [
                "id"=> "1",
                "foodProduct"=> "Абрикосы",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.5",
                "foodCalories"=> "46.0"
            ],
            "2"=> [
                "id"=> "2",
                "foodProduct"=> "Абрикосы сушёные - курага",
                "foodProteins"=> "5.2",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "55.0",
                "foodCalories"=> "234.0"
            ],
            "3"=> [
                "id"=> "3",
                "foodProduct"=> "Айва",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.9",
                "foodCalories"=> "38.0"
            ],
            "4"=> [
                "id"=> "4",
                "foodProduct"=> "Алыча",
                "foodProteins"=> "0.2",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "7.4",
                "foodCalories"=> "34.0"
            ],
            "5"=> [
                "id"=> "5",
                "foodProduct"=> "Ананас",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.8",
                "foodCalories"=> "48.0"
            ],
            "6"=> [
                "id"=> "6",
                "foodProduct"=> "Ананасовый сок",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.8",
                "foodCalories"=> "51.0"
            ],
            "7"=> [
                "id"=> "7",
                "foodProduct"=> "Апельсин",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.4",
                "foodCalories"=> "38.0"
            ],
            "8"=> [
                "id"=> "8",
                "foodProduct"=> "Апельсиновый сок",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.0",
                "foodCalories"=> "43.0"
            ],
            "9"=> [
                "id"=> "9",
                "foodProduct"=> "Арбуз",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.2",
                "foodCalories"=> "38.0"
            ],
            "10"=> [
                "id"=> "10",
                "foodProduct"=> "Арихис жареный солёный",
                "foodProteins"=> "27.6",
                "foodFats"=> "42.5",
                "foodCarbohydrates"=> "15.0",
                "foodCalories"=> "600.0"
            ],
            "11"=> [
                "id"=> "11",
                "foodProduct"=> "Баклажаны",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "5.5",
                "foodCalories"=> "24.0"
            ],
            "12"=> [
                "id"=> "12",
                "foodProduct"=> "Банан",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "22.4",
                "foodCalories"=> "91.0"
            ],
            "13"=> [
                "id"=> "13",
                "foodProduct"=> "Белые свежие",
                "foodProteins"=> "3.2",
                "foodFats"=> "0.7",
                "foodCarbohydrates"=> "1.6",
                "foodCalories"=> "25.0"
            ],
            "14"=> [
                "id"=> "14",
                "foodProduct"=> "Белые сушёные",
                "foodProteins"=> "27.6",
                "foodFats"=> "6.8",
                "foodCarbohydrates"=> "10.0",
                "foodCalories"=> "209.0"
            ],
            "15"=> [
                "id"=> "15",
                "foodProduct"=> "Бобы",
                "foodProteins"=> "6.0",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "8.3",
                "foodCalories"=> "58.0"
            ],
            "16"=> [
                "id"=> "16",
                "foodProduct"=> "Бразильский",
                "foodProteins"=> "14.3",
                "foodFats"=> "66.9",
                "foodCarbohydrates"=> "7.8",
                "foodCalories"=> "703.0"
            ],
            "17"=> [
                "id"=> "17",
                "foodProduct"=> "Брусника",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.6",
                "foodCalories"=> "40.0"
            ],
            "18"=> [
                "id"=> "18",
                "foodProduct"=> "Брюква",
                "foodProteins"=> "1.2",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "8.1",
                "foodCalories"=> "37.0"
            ],
            "19"=> [
                "id"=> "19",
                "foodProduct"=> "Вафли бисквитные мягкие квадратные",
                "foodProteins"=> "6.8",
                "foodFats"=> "25.8",
                "foodCarbohydrates"=> "55.8",
                "foodCalories"=> "482.0"
            ],
            "20"=> [
                "id"=> "20",
                "foodProduct"=> "Вафли бисквитные мягкие толстые круглые",
                "foodProteins"=> "4.6",
                "foodFats"=> "18.8",
                "foodCarbohydrates"=> "52.6",
                "foodCalories"=> "399.0"
            ],
            "21"=> [
                "id"=> "21",
                "foodProduct"=> "Вафли бисквитные мягкие тонкие",
                "foodProteins"=> "8.8",
                "foodFats"=> "20.3",
                "foodCarbohydrates"=> "52.0",
                "foodCalories"=> "426.0"
            ],
            "22"=> [
                "id"=> "22",
                "foodProduct"=> "Ветчина",
                "foodProteins"=> "10.0",
                "foodFats"=> "35.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "355.0"
            ],
            "23"=> [
                "id"=> "23",
                "foodProduct"=> "Вино белое ",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "108.0"
            ],
            "24"=> [
                "id"=> "24",
                "foodProduct"=> "Виноград",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "17.5",
                "foodCalories"=> "69.0"
            ],
            "25"=> [
                "id"=> "25",
                "foodProduct"=> "Виноградный сок",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "15.0",
                "foodCalories"=> "60.0"
            ],
            "26"=> [
                "id"=> "26",
                "foodProduct"=> "Вишнёвый нектар \"Я\"",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.0",
                "foodCalories"=> "44.0"
            ],
            "27"=> [
                "id"=> "27",
                "foodProduct"=> "Вишня",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.3",
                "foodCalories"=> "49.0"
            ],
            "28"=> [
                "id"=> "28",
                "foodProduct"=> "Вишня мороженная",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.4",
                "foodCarbohydrates"=> "10.9",
                "foodCalories"=> "47.0"
            ],
            "29"=> [
                "id"=> "29",
                "foodProduct"=> "Вобла - икра",
                "foodProteins"=> "63.75",
                "foodFats"=> "3.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "286.5"
            ],
            "30"=> [
                "id"=> "30",
                "foodProduct"=> "Говядина - тушёнка консервы",
                "foodProteins"=> "20.5",
                "foodFats"=> "10.4",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "206.0"
            ],
            "31"=> [
                "id"=> "31",
                "foodProduct"=> "Говядина копчёно-варёная",
                "foodProteins"=> "17.0",
                "foodFats"=> "5.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "113.0"
            ],
            "32"=> [
                "id"=> "32",
                "foodProduct"=> "Голубика",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "7.7",
                "foodCalories"=> "37.0"
            ],
            "33"=> [
                "id"=> "33",
                "foodProduct"=> "Горбуша натуральная консервы",
                "foodProteins"=> "21.00",
                "foodFats"=> "6.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "138.0"
            ],
            "34"=> [
                "id"=> "34",
                "foodProduct"=> "Горох",
                "foodProteins"=> "23.0",
                "foodFats"=> "1.2",
                "foodCarbohydrates"=> "56.3",
                "foodCalories"=> "303.0"
            ],
            "35"=> [
                "id"=> "35",
                "foodProduct"=> "Горошек зелёный",
                "foodProteins"=> "5.0",
                "foodFats"=> "0.2",
                "foodCarbohydrates"=> "13.3",
                "foodCalories"=> "72.0"
            ],
            "36"=> [
                "id"=> "36",
                "foodProduct"=> "Горошек зелёный консервированный",
                "foodProteins"=> "5.5",
                "foodFats"=> "0.6",
                "foodCarbohydrates"=> "11.5",
                "foodCalories"=> "73.0"
            ],
            "37"=> [
                "id"=> "37",
                "foodProduct"=> "Горчица русская",
                "foodProteins"=> "9.3",
                "foodFats"=> "8.0",
                "foodCarbohydrates"=> "11.0",
                "foodCalories"=> "175.0"
            ],
            "38"=> [
                "id"=> "38",
                "foodProduct"=> "Горчичное",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.8",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "898.0"
            ],
            "39"=> [
                "id"=> "39",
                "foodProduct"=> "Гранат",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.8",
                "foodCalories"=> "52.0"
            ],
            "40"=> [
                "id"=> "40",
                "foodProduct"=> "Гранатовый сок",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.0",
                "foodCalories"=> "48.0"
            ],
            "41"=> [
                "id"=> "41",
                "foodProduct"=> "Грейпфрукт",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "7.3",
                "foodCalories"=> "35.0"
            ],
            "42"=> [
                "id"=> "42",
                "foodProduct"=> "Грейпфруктовый сок",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.0",
                "foodCalories"=> "40.0"
            ],
            "43"=> [
                "id"=> "43",
                "foodProduct"=> "Грецкий",
                "foodProteins"=> "14.8",
                "foodFats"=> "64.0",
                "foodCarbohydrates"=> "13.7",
                "foodCalories"=> "698.0"
            ],
            "44"=> [
                "id"=> "44",
                "foodProduct"=> "Гречиха",
                "foodProteins"=> "11.6",
                "foodFats"=> "2.3",
                "foodCarbohydrates"=> "59.5",
                "foodCalories"=> "290.0"
            ],
            "45"=> [
                "id"=> "45",
                "foodProduct"=> "Гречка - крупа ядрица",
                "foodProteins"=> "12.5",
                "foodFats"=> "2.1",
                "foodCarbohydrates"=> "62.0",
                "foodCalories"=> "351.0"
            ],
            "46"=> [
                "id"=> "46",
                "foodProduct"=> "Грузди свежие",
                "foodProteins"=> "1.8",
                "foodFats"=> "0.8",
                "foodCarbohydrates"=> "1.1",
                "foodCalories"=> "19.0"
            ],
            "47"=> [
                "id"=> "47",
                "foodProduct"=> "Груша",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.7",
                "foodCalories"=> "42.0"
            ],
            "48"=> [
                "id"=> "48",
                "foodProduct"=> "Дрожжи",
                "foodProteins"=> "43.0",
                "foodFats"=> "5.7",
                "foodCarbohydrates"=> "38.0",
                "foodCalories"=> "361.0"
            ],
            "49"=> [
                "id"=> "49",
                "foodProduct"=> "Дыня",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.6",
                "foodCalories"=> "39.0"
            ],
            "50"=> [
                "id"=> "50",
                "foodProduct"=> "Ежевика",
                "foodProteins"=> "2.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.3",
                "foodCalories"=> "33.0"
            ],
            "51"=> [
                "id"=> "51",
                "foodProduct"=> "Земляника",
                "foodProteins"=> "1.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.1",
                "foodCalories"=> "41.0"
            ],
            "52"=> [
                "id"=> "52",
                "foodProduct"=> "Зефир в шоколаде",
                "foodProteins"=> "2.44",
                "foodFats"=> "12.71",
                "foodCarbohydrates"=> "73.44",
                "foodCalories"=> "326.0"
            ],
            "53"=> [
                "id"=> "53",
                "foodProduct"=> "Изюм",
                "foodProteins"=> "2.5",
                "foodFats"=> "0.2",
                "foodCarbohydrates"=> "76.5",
                "foodCalories"=> "321.0"
            ],
            "54"=> [
                "id"=> "54",
                "foodProduct"=> "Икра лососевая солёная (красная)",
                "foodProteins"=> "32.0",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "245.0"
            ],
            "55"=> [
                "id"=> "55",
                "foodProduct"=> "Индейка - рулет копчёно-варёный",
                "foodProteins"=> "5.0",
                "foodFats"=> "17.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "190.0"
            ],
            "56"=> [
                "id"=> "56",
                "foodProduct"=> "Инжир",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "13.9",
                "foodCalories"=> "56.0"
            ],
            "57"=> [
                "id"=> "57",
                "foodProduct"=> "Инжир",
                "foodProteins"=> "3.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "50.0",
                "foodCalories"=> "210.0"
            ],
            "58"=> [
                "id"=> "58",
                "foodProduct"=> "Йогурт Активия без добавок",
                "foodProteins"=> "4.5",
                "foodFats"=> "3.5",
                "foodCarbohydrates"=> "6.3",
                "foodCalories"=> "75.0"
            ],
            "59"=> [
                "id"=> "59",
                "foodProduct"=> "Йогурт Активия медовый",
                "foodProteins"=> "3.7",
                "foodFats"=> "3.0",
                "foodCarbohydrates"=> "13.7",
                "foodCalories"=> "105.0"
            ],
            "60"=> [
                "id"=> "60",
                "foodProduct"=> "Йогурт Активия с мюсли и персиком",
                "foodProteins"=> "4.0",
                "foodFats"=> "3.0",
                "foodCarbohydrates"=> "16.2",
                "foodCalories"=> "110.0"
            ],
            "61"=> [
                "id"=> "61",
                "foodProduct"=> "Йогурт Активия с черносливом",
                "foodProteins"=> "3.7",
                "foodFats"=> "3.0",
                "foodCarbohydrates"=> "15.9",
                "foodCalories"=> "105.0"
            ],
            "62"=> [
                "id"=> "62",
                "foodProduct"=> "Йогурт молочный полужирный",
                "foodProteins"=> "3.4",
                "foodFats"=> "1.5",
                "foodCarbohydrates"=> "12.3",
                "foodCalories"=> "74.0"
            ],
            "63"=> [
                "id"=> "63",
                "foodProduct"=> "Кабачки",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.3",
                "foodCarbohydrates"=> "5.7",
                "foodCalories"=> "27.0"
            ],
            "64"=> [
                "id"=> "64",
                "foodProduct"=> "Какао порошок",
                "foodProteins"=> "24.7",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "28.5",
                "foodCalories"=> "364.0"
            ],
            "65"=> [
                "id"=> "65",
                "foodProduct"=> "Какао сухой растворимый с сахаром",
                "foodProteins"=> "5.0",
                "foodFats"=> "3.0",
                "foodCarbohydrates"=> "83.5",
                "foodCalories"=> "380.0"
            ],
            "66"=> [
                "id"=> "66",
                "foodProduct"=> "Кальмар ",
                "foodProteins"=> "18.0",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "98.0"
            ],
            "67"=> [
                "id"=> "67",
                "foodProduct"=> "Кальмар натуральный консервы",
                "foodProteins"=> "20.0",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "1.8",
                "foodCalories"=> "106.0"
            ],
            "68"=> [
                "id"=> "68",
                "foodProduct"=> "Кальмар сушёный",
                "foodProteins"=> "70.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "3.0",
                "foodCalories"=> "293.0"
            ],
            "69"=> [
                "id"=> "69",
                "foodProduct"=> "Кальмары в масле консервированные",
                "foodProteins"=> "19.0",
                "foodFats"=> "5.8",
                "foodCarbohydrates"=> "2.2",
                "foodCalories"=> "137.0"
            ],
            "70"=> [
                "id"=> "70",
                "foodProduct"=> "Капуста белокочанная ",
                "foodProteins"=> "1.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.4",
                "foodCalories"=> "28.0"
            ],
            "71"=> [
                "id"=> "71",
                "foodProduct"=> "Капуста брокколи",
                "foodProteins"=> "2.6",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "4.5",
                "foodCalories"=> "28.0"
            ],
            "72"=> [
                "id"=> "72",
                "foodProduct"=> "Капуста брюссельская",
                "foodProteins"=> "4.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.7",
                "foodCalories"=> "46.0"
            ],
            "73"=> [
                "id"=> "73",
                "foodProduct"=> "Капуста кольраби",
                "foodProteins"=> "2.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.3",
                "foodCalories"=> "43.0"
            ],
            "74"=> [
                "id"=> "74",
                "foodProduct"=> "Капуста краснокочанная",
                "foodProteins"=> "1.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.1",
                "foodCalories"=> "31.0"
            ],
            "75"=> [
                "id"=> "75",
                "foodProduct"=> "Капуста морская",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.2",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "5.0"
            ],
            "76"=> [
                "id"=> "76",
                "foodProduct"=> "Капуста цветная",
                "foodProteins"=> "2.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.9",
                "foodCalories"=> "29.0"
            ],
            "77"=> [
                "id"=> "77",
                "foodProduct"=> "Карп",
                "foodProteins"=> "16.0",
                "foodFats"=> "3.6",
                "foodCarbohydrates"=> "1.3",
                "foodCalories"=> "96.0"
            ],
            "78"=> [
                "id"=> "78",
                "foodProduct"=> "Картофель",
                "foodProteins"=> "2.0",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "19.7",
                "foodCalories"=> "83.0"
            ],
            "79"=> [
                "id"=> "79",
                "foodProduct"=> "Картофель сладкий (батат)",
                "foodProteins"=> "2.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "13.8",
                "foodCalories"=> "60.0"
            ],
            "80"=> [
                "id"=> "80",
                "foodProduct"=> "Картофель хрустящий \"Московский\"",
                "foodProteins"=> "4.6",
                "foodFats"=> "35.6",
                "foodCarbohydrates"=> "47.2",
                "foodCalories"=> "532.0"
            ],
            "81"=> [
                "id"=> "81",
                "foodProduct"=> "Кекс без дрожжей с ягодами и орехами",
                "foodProteins"=> "7.00",
                "foodFats"=> "4.00",
                "foodCarbohydrates"=> "52.00",
                "foodCalories"=> "274.0"
            ],
            "82"=> [
                "id"=> "82",
                "foodProduct"=> "Кета слабосолёная",
                "foodProteins"=> "24.0",
                "foodFats"=> "9.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "177.0"
            ],
            "83"=> [
                "id"=> "83",
                "foodProduct"=> "Кефир 1%",
                "foodProteins"=> "3.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "3.8",
                "foodCalories"=> "39.0"
            ],
            "84"=> [
                "id"=> "84",
                "foodProduct"=> "Кефир 3,2%",
                "foodProteins"=> "3.2",
                "foodFats"=> "3.2",
                "foodCarbohydrates"=> "5.4",
                "foodCalories"=> "64.0"
            ],
            "85"=> [
                "id"=> "85",
                "foodProduct"=> "Кефир-Био Biomax 1%",
                "foodProteins"=> "3.6",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "5.6",
                "foodCalories"=> "47.3"
            ],
            "86"=> [
                "id"=> "86",
                "foodProduct"=> "Кешью",
                "foodProteins"=> "17.5",
                "foodFats"=> "42.2",
                "foodCarbohydrates"=> "30.5",
                "foodCalories"=> "572.0"
            ],
            "87"=> [
                "id"=> "87",
                "foodProduct"=> "Кизил",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.7",
                "foodCalories"=> "45.0"
            ],
            "88"=> [
                "id"=> "88",
                "foodProduct"=> "Клубника мороженная",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.4",
                "foodCarbohydrates"=> "7.7",
                "foodCalories"=> "41.3"
            ],
            "89"=> [
                "id"=> "89",
                "foodProduct"=> "Клюква",
                "foodProteins"=> "0.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.8",
                "foodCalories"=> "28.0"
            ],
            "90"=> [
                "id"=> "90",
                "foodProduct"=> "Клюква в сахарной пудре",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "96.0",
                "foodCalories"=> "384.0"
            ],
            "91"=> [
                "id"=> "91",
                "foodProduct"=> "Клюква дроблёная с сахаром",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "45.0",
                "foodCalories"=> "180.0"
            ],
            "92"=> [
                "id"=> "92",
                "foodProduct"=> "Клюква мороженная",
                "foodProteins"=> "0.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "3.8",
                "foodCalories"=> "17.0"
            ],
            "93"=> [
                "id"=> "93",
                "foodProduct"=> "Кобаса полукопчёная",
                "foodProteins"=> "13.0",
                "foodFats"=> "25.5",
                "foodCarbohydrates"=> "4.0",
                "foodCalories"=> "321.0"
            ],
            "94"=> [
                "id"=> "94",
                "foodProduct"=> "Колбаса варёная",
                "foodProteins"=> "12.0",
                "foodFats"=> "19.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "226.0"
            ],
            "95"=> [
                "id"=> "95",
                "foodProduct"=> "Колбаса варёно-копчёная сервелат",
                "foodProteins"=> "16.1",
                "foodFats"=> "40.1",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "425.0"
            ],
            "96"=> [
                "id"=> "96",
                "foodProduct"=> "Колбаса сырокопчённая сервелат",
                "foodProteins"=> "23.9",
                "foodFats"=> "47.8",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "526.0"
            ],
            "97"=> [
                "id"=> "97",
                "foodProduct"=> "Колбаса сырокопчённая сервелат",
                "foodProteins"=> "24.0",
                "foodFats"=> "40.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "461.0"
            ],
            "98"=> [
                "id"=> "98",
                "foodProduct"=> "Колбаски для гриля (говядина и свинина)",
                "foodProteins"=> "12.2",
                "foodFats"=> "23.2",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "257.6"
            ],
            "99"=> [
                "id"=> "99",
                "foodProduct"=> "Конопляное",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.85",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "899.0"
            ],
            "100"=> [
                "id"=> "100",
                "foodProduct"=> "Конфеты \"Алёнка\"",
                "foodProteins"=> "6.7",
                "foodFats"=> "32.2",
                "foodCarbohydrates"=> "58.9",
                "foodCalories"=> "527.0"
            ],
            "101"=> [
                "id"=> "101",
                "foodProduct"=> "Конфеты \"Мишка косолапый\"",
                "foodProteins"=> "5.7",
                "foodFats"=> "32.1",
                "foodCarbohydrates"=> "60.5",
                "foodCalories"=> "526.0"
            ],
            "102"=> [
                "id"=> "102",
                "foodProduct"=> "Конфеты \"Суфле в шоколаде\"",
                "foodProteins"=> "2.5",
                "foodFats"=> "14.4",
                "foodCarbohydrates"=> "69.3",
                "foodCalories"=> "392.0"
            ],
            "103"=> [
                "id"=> "103",
                "foodProduct"=> "Конфеты батончик \"рот фронт\"",
                "foodProteins"=> "10.6",
                "foodFats"=> "30.4",
                "foodCarbohydrates"=> "52.4",
                "foodCalories"=> "519.0"
            ],
            "104"=> [
                "id"=> "104",
                "foodProduct"=> "Конфеты Грильяж в шоколаде",
                "foodProteins"=> "5.1",
                "foodFats"=> "26.9",
                "foodCarbohydrates"=> "64.6",
                "foodCalories"=> "512.0"
            ],
            "105"=> [
                "id"=> "105",
                "foodProduct"=> "Конфеты карамель в шоколаде ",
                "foodProteins"=> "2.8",
                "foodFats"=> "10.9",
                "foodCarbohydrates"=> "77.0",
                "foodCalories"=> "406.0"
            ],
            "106"=> [
                "id"=> "106",
                "foodProduct"=> "Конфеты шоколадные ассорти с начинкой",
                "foodProteins"=> "2.7",
                "foodFats"=> "26.6",
                "foodCarbohydrates"=> "58.90",
                "foodCalories"=> "486.0"
            ],
            "107"=> [
                "id"=> "107",
                "foodProduct"=> "Конфеты шоколадные с вафлями и начинкой \"Золотистые орешки\"",
                "foodProteins"=> "6.7",
                "foodFats"=> "28.9",
                "foodCarbohydrates"=> "51.8",
                "foodCalories"=> "470.0"
            ],
            "108"=> [
                "id"=> "108",
                "foodProduct"=> "Конфеты шоколадные с орехово-сливочной начинкой",
                "foodProteins"=> "7.2",
                "foodFats"=> "35.0",
                "foodCarbohydrates"=> "55.20",
                "foodCalories"=> "564.0"
            ],
            "109"=> [
                "id"=> "109",
                "foodProduct"=> "Кофе в зёрных",
                "foodProteins"=> "13.9",
                "foodFats"=> "14.4",
                "foodCarbohydrates"=> "4.1",
                "foodCalories"=> "223.0"
            ],
            "110"=> [
                "id"=> "110",
                "foodProduct"=> "Кофе растворимый ",
                "foodProteins"=> "14.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.3",
                "foodCalories"=> "100.0"
            ],
            "111"=> [
                "id"=> "111",
                "foodProduct"=> "Краб",
                "foodProteins"=> "16.0",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "69.0"
            ],
            "112"=> [
                "id"=> "112",
                "foodProduct"=> "Крабовые палочки имитация",
                "foodProteins"=> "7.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "10.0",
                "foodCalories"=> "377.0"
            ],
            "113"=> [
                "id"=> "113",
                "foodProduct"=> "Крабы натуральные в собственном соку консервированные",
                "foodProteins"=> "18.0",
                "foodFats"=> "1.2",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "85.0"
            ],
            "114"=> [
                "id"=> "114",
                "foodProduct"=> "Креветки",
                "foodProteins"=> "18.9",
                "foodFats"=> "0.8",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "83.0"
            ],
            "115"=> [
                "id"=> "115",
                "foodProduct"=> "Крыжовник",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.9",
                "foodCalories"=> "44.0"
            ],
            "116"=> [
                "id"=> "116",
                "foodProduct"=> "Кукуруза",
                "foodProteins"=> "10.3",
                "foodFats"=> "4.9",
                "foodCarbohydrates"=> "67.5",
                "foodCalories"=> "338.0"
            ],
            "117"=> [
                "id"=> "117",
                "foodProduct"=> "Кукуруза сладкая консервированная",
                "foodProteins"=> "4.7",
                "foodFats"=> "1.6",
                "foodCarbohydrates"=> "23.6",
                "foodCalories"=> "128.0"
            ],
            "118"=> [
                "id"=> "118",
                "foodProduct"=> "Кукурузное",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "899.0"
            ],
            "119"=> [
                "id"=> "119",
                "foodProduct"=> "Курага",
                "foodProteins"=> "5.5",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "63.5",
                "foodCalories"=> "291.0"
            ],
            "120"=> [
                "id"=> "120",
                "foodProduct"=> "Лангуст",
                "foodProteins"=> "18.4",
                "foodFats"=> "0.4",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "77.0"
            ],
            "121"=> [
                "id"=> "121",
                "foodProduct"=> "Лапша яичная",
                "foodProteins"=> "10.4",
                "foodFats"=> "1.6",
                "foodCarbohydrates"=> "70.3",
                "foodCalories"=> "337.0"
            ],
            "122"=> [
                "id"=> "122",
                "foodProduct"=> "Ледяная рыба",
                "foodProteins"=> "15.9",
                "foodFats"=> "0.9",
                "foodCarbohydrates"=> "1.3",
                "foodCalories"=> "104.0"
            ],
            "123"=> [
                "id"=> "123",
                "foodProduct"=> "Ликёр маленькая рюмка",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "70.0"
            ],
            "124"=> [
                "id"=> "124",
                "foodProduct"=> "Лимон",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "3.6",
                "foodCalories"=> "31.0"
            ],
            "125"=> [
                "id"=> "125",
                "foodProduct"=> "Лисички свежие",
                "foodProteins"=> "1.6",
                "foodFats"=> "0.9",
                "foodCarbohydrates"=> "2.1",
                "foodCalories"=> "22.0"
            ],
            "126"=> [
                "id"=> "126",
                "foodProduct"=> "Лосось консервированный натуральный ",
                "foodProteins"=> "21.0",
                "foodFats"=> "6.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "138.0"
            ],
            "127"=> [
                "id"=> "127",
                "foodProduct"=> "Лук зелёный",
                "foodProteins"=> "1.3",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.3",
                "foodCalories"=> "22.0"
            ],
            "128"=> [
                "id"=> "128",
                "foodProduct"=> "Лук репчатый",
                "foodProteins"=> "1.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.5",
                "foodCalories"=> "43.0"
            ],
            "129"=> [
                "id"=> "129",
                "foodProduct"=> "Лукум болгарский",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.85",
                "foodCarbohydrates"=> "89.65",
                "foodCalories"=> "382.0"
            ],
            "130"=> [
                "id"=> "130",
                "foodProduct"=> "Майонез любительский",
                "foodProteins"=> "3.1",
                "foodFats"=> "47.0",
                "foodCarbohydrates"=> "3.0",
                "foodCalories"=> "449.0"
            ],
            "131"=> [
                "id"=> "131",
                "foodProduct"=> "Майонез салатный ",
                "foodProteins"=> "2.3",
                "foodFats"=> "55.0",
                "foodCarbohydrates"=> "4.2",
                "foodCalories"=> "537.4"
            ],
            "132"=> [
                "id"=> "132",
                "foodProduct"=> "Макаронные изделия",
                "foodProteins"=> "10.7",
                "foodFats"=> "1.3",
                "foodCarbohydrates"=> "74.2",
                "foodCalories"=> "333.0"
            ],
            "133"=> [
                "id"=> "133",
                "foodProduct"=> "Макаронные изделия для Лазаньи Италия",
                "foodProteins"=> "12.5",
                "foodFats"=> "1.5",
                "foodCarbohydrates"=> "73.0",
                "foodCalories"=> "355.0"
            ],
            "134"=> [
                "id"=> "134",
                "foodProduct"=> "Макаронные изделия из свежего теста Pasta",
                "foodProteins"=> "12.0",
                "foodFats"=> "3.0",
                "foodCarbohydrates"=> "53.0",
                "foodCalories"=> "290.0"
            ],
            "135"=> [
                "id"=> "135",
                "foodProduct"=> "Макаронные изделия Италия с содержанием яиц ",
                "foodProteins"=> "14.0",
                "foodFats"=> "4.0",
                "foodCarbohydrates"=> "65.0",
                "foodCalories"=> "352.0"
            ],
            "136"=> [
                "id"=> "136",
                "foodProduct"=> "Макаронные изделия лапша с содержанием яиц на отварные 100 гр",
                "foodProteins"=> "6.0",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "26.0",
                "foodCalories"=> "146.0"
            ],
            "137"=> [
                "id"=> "137",
                "foodProduct"=> "Макаронные изделия с добавками моркови",
                "foodProteins"=> "11.3",
                "foodFats"=> "0.9",
                "foodCarbohydrates"=> "77.1",
                "foodCalories"=> "362.0"
            ],
            "138"=> [
                "id"=> "138",
                "foodProduct"=> "Макароны Италия твёрдых сортов пшеницы Pasta Zara",
                "foodProteins"=> "12.0",
                "foodFats"=> "1.1",
                "foodCarbohydrates"=> "75.0",
                "foodCalories"=> "358.0"
            ],
            "139"=> [
                "id"=> "139",
                "foodProduct"=> "Макароны Италия твёрдых сортов пшеницы с добавками томатов и шпината Maltagliati",
                "foodProteins"=> "12.0",
                "foodFats"=> "1.6",
                "foodCarbohydrates"=> "71.0",
                "foodCalories"=> "346.0"
            ],
            "140"=> [
                "id"=> "140",
                "foodProduct"=> "Макароны Италия твёрдых сортов пшеницы с добавками шпината Federici",
                "foodProteins"=> "13.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "74.0",
                "foodCalories"=> "357.0"
            ],
            "141"=> [
                "id"=> "141",
                "foodProduct"=> "Малина",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.0",
                "foodCalories"=> "41.0"
            ],
            "142"=> [
                "id"=> "142",
                "foodProduct"=> "Малина мороженная",
                "foodProteins"=> "1.2",
                "foodFats"=> "0.3",
                "foodCarbohydrates"=> "6.1",
                "foodCalories"=> "38.2"
            ],
            "143"=> [
                "id"=> "143",
                "foodProduct"=> "Мандарин",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.6",
                "foodCalories"=> "38.0"
            ],
            "144"=> [
                "id"=> "144",
                "foodProduct"=> "Мармелад (в сахаре)",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.00",
                "foodCarbohydrates"=> "80.60",
                "foodCalories"=> "311.0"
            ],
            "145"=> [
                "id"=> "145",
                "foodProduct"=> "Маслины солёные",
                "foodProteins"=> "1.23",
                "foodFats"=> "16.43",
                "foodCarbohydrates"=> "4.78",
                "foodCalories"=> "172.91"
            ],
            "146"=> [
                "id"=> "146",
                "foodProduct"=> "Масло сливочное Вологодское",
                "foodProteins"=> "0.5",
                "foodFats"=> "82.5",
                "foodCarbohydrates"=> "0.8",
                "foodCalories"=> "748.0"
            ],
            "147"=> [
                "id"=> "147",
                "foodProduct"=> "Масло сливочное крестьянское ",
                "foodProteins"=> "0.8",
                "foodFats"=> "72.5",
                "foodCarbohydrates"=> "1.3",
                "foodCalories"=> "661.0"
            ],
            "148"=> [
                "id"=> "148",
                "foodProduct"=> "Маслята свежие",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.4",
                "foodCarbohydrates"=> "3.2",
                "foodCalories"=> "19.0"
            ],
            "149"=> [
                "id"=> "149",
                "foodProduct"=> "Мёд",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "71.0",
                "foodCalories"=> "284.0"
            ],
            "150"=> [
                "id"=> "150",
                "foodProduct"=> "Миндаль жареный",
                "foodProteins"=> "25.6",
                "foodFats"=> "32.2",
                "foodCarbohydrates"=> "14.8",
                "foodCalories"=> "635.0"
            ],
            "151"=> [
                "id"=> "151",
                "foodProduct"=> "Мирабель",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.6",
                "foodCalories"=> "40.0"
            ],
            "152"=> [
                "id"=> "152",
                "foodProduct"=> "Молоко 1,5%",
                "foodProteins"=> "2.9",
                "foodFats"=> "1.5",
                "foodCarbohydrates"=> "4.7",
                "foodCalories"=> "44.0"
            ],
            "153"=> [
                "id"=> "153",
                "foodProduct"=> "Молоко 3,2% жирности",
                "foodProteins"=> "2.8",
                "foodFats"=> "3.2",
                "foodCarbohydrates"=> "4.7",
                "foodCalories"=> "58.0"
            ],
            "154"=> [
                "id"=> "154",
                "foodProduct"=> "Молоко 3,5% жирности",
                "foodProteins"=> "2.8",
                "foodFats"=> "3.5",
                "foodCarbohydrates"=> "4.7",
                "foodCalories"=> "62.0"
            ],
            "155"=> [
                "id"=> "155",
                "foodProduct"=> "Молоко сгущённое \"Сгущёнка Молочная страна\"",
                "foodProteins"=> "4.2",
                "foodFats"=> "8.5",
                "foodCarbohydrates"=> "55.7",
                "foodCalories"=> "307.6"
            ],
            "156"=> [
                "id"=> "156",
                "foodProduct"=> "Молоко сгущённое \"Сгущёнка Смоленская\"",
                "foodProteins"=> "7.4",
                "foodFats"=> "8.5",
                "foodCarbohydrates"=> "55.8",
                "foodCalories"=> "325.0"
            ],
            "157"=> [
                "id"=> "157",
                "foodProduct"=> "Морковь жёлтая",
                "foodProteins"=> "1.3",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "6.0",
                "foodCalories"=> "33.0"
            ],
            "158"=> [
                "id"=> "158",
                "foodProduct"=> "Морковь красная",
                "foodProteins"=> "1.3",
                "foodFats"=> "0.1",
                "foodCarbohydrates"=> "7.0",
                "foodCalories"=> "33.0"
            ],
            "159"=> [
                "id"=> "159",
                "foodProduct"=> "Мороженое сливочное в шоколадной глазури \"Лакомка\"",
                "foodProteins"=> "3.2",
                "foodFats"=> "20.2",
                "foodCarbohydrates"=> "19.4",
                "foodCalories"=> "280.0"
            ],
            "160"=> [
                "id"=> "160",
                "foodProduct"=> "Мороженое сливочное в шоколадной глазури с орехами \"Боярское\"",
                "foodProteins"=> "3.9",
                "foodFats"=> "18.9",
                "foodCarbohydrates"=> "23.0",
                "foodCalories"=> "277.0"
            ],
            "161"=> [
                "id"=> "161",
                "foodProduct"=> "Морошка",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.8",
                "foodCalories"=> "31.0"
            ],
            "162"=> [
                "id"=> "162",
                "foodProduct"=> "Мюсли \"фруктовый сад\"",
                "foodProteins"=> "14.0",
                "foodFats"=> "4.0",
                "foodCarbohydrates"=> "70.0",
                "foodCalories"=> "370.0"
            ],
            "163"=> [
                "id"=> "163",
                "foodProduct"=> "Напиток Горячий шоколад сухой растворимый с сахаром",
                "foodProteins"=> "10.0",
                "foodFats"=> "12.8",
                "foodCarbohydrates"=> "72.8",
                "foodCalories"=> "452.0"
            ],
            "164"=> [
                "id"=> "164",
                "foodProduct"=> "Нут",
                "foodProteins"=> "20.1",
                "foodFats"=> "5.0",
                "foodCarbohydrates"=> "54.2",
                "foodCalories"=> "329.0"
            ],
            "165"=> [
                "id"=> "165",
                "foodProduct"=> "Облепиха",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.5",
                "foodCalories"=> "30.0"
            ],
            "166"=> [
                "id"=> "166",
                "foodProduct"=> "Овёс",
                "foodProteins"=> "10.1",
                "foodFats"=> "4.7",
                "foodCarbohydrates"=> "57.8",
                "foodCalories"=> "300.0"
            ],
            "167"=> [
                "id"=> "167",
                "foodProduct"=> "Овсянные хлопья ",
                "foodProteins"=> "11.0",
                "foodFats"=> "6.2",
                "foodCarbohydrates"=> "51.0",
                "foodCalories"=> "305.0"
            ],
            "168"=> [
                "id"=> "168",
                "foodProduct"=> "Огурцы",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "3.0",
                "foodCalories"=> "15.0"
            ],
            "169"=> [
                "id"=> "169",
                "foodProduct"=> "Огурцы маринованные",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.0",
                "foodCalories"=> "18.0"
            ],
            "170"=> [
                "id"=> "170",
                "foodProduct"=> "Огурцы солёные",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.0",
                "foodCalories"=> "15.0"
            ],
            "171"=> [
                "id"=> "171",
                "foodProduct"=> "Оливки фаршированные анчоусами",
                "foodProteins"=> "2.1",
                "foodFats"=> "15.7",
                "foodCarbohydrates"=> "5.2",
                "foodCalories"=> "171.0"
            ],
            "172"=> [
                "id"=> "172",
                "foodProduct"=> "Оливки фаршированные красным перцем",
                "foodProteins"=> "1.39",
                "foodFats"=> "14.1",
                "foodCarbohydrates"=> "1.96",
                "foodCalories"=> "154.3"
            ],
            "173"=> [
                "id"=> "173",
                "foodProduct"=> "Оливки фаршированные лимоном",
                "foodProteins"=> "1.6",
                "foodFats"=> "15.1",
                "foodCarbohydrates"=> "2.7",
                "foodCalories"=> "148.2"
            ],
            "174"=> [
                "id"=> "174",
                "foodProduct"=> "Оливковое",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "898.0"
            ],
            "175"=> [
                "id"=> "175",
                "foodProduct"=> "Опята свежие",
                "foodProteins"=> "2.2",
                "foodFats"=> "0.7",
                "foodCarbohydrates"=> "1.3",
                "foodCalories"=> "20.0"
            ],
            "176"=> [
                "id"=> "176",
                "foodProduct"=> "Осетрина горячего копчения",
                "foodProteins"=> "22.0",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "13.0",
                "foodCalories"=> "223.0"
            ],
            "177"=> [
                "id"=> "177",
                "foodProduct"=> "Пастернак корень",
                "foodProteins"=> "1.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.0",
                "foodCalories"=> "47.0"
            ],
            "178"=> [
                "id"=> "178",
                "foodProduct"=> "Патиссоны",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.3",
                "foodCalories"=> "19.0"
            ],
            "179"=> [
                "id"=> "179",
                "foodProduct"=> "Пекан (китайский орех)",
                "foodProteins"=> "9.2",
                "foodFats"=> "71.2",
                "foodCarbohydrates"=> "12.3",
                "foodCalories"=> "736.0"
            ],
            "180"=> [
                "id"=> "180",
                "foodProduct"=> "Перец",
                "foodProteins"=> "1.3",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.7",
                "foodCalories"=> "27.0"
            ],
            "181"=> [
                "id"=> "181",
                "foodProduct"=> "Персики",
                "foodProteins"=> "0.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.4",
                "foodCalories"=> "44.0"
            ],
            "182"=> [
                "id"=> "182",
                "foodProduct"=> "Петрушка зелень",
                "foodProteins"=> "3.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.1",
                "foodCalories"=> "45.0"
            ],
            "183"=> [
                "id"=> "183",
                "foodProduct"=> "Петрушка корень",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.0",
                "foodCalories"=> "47.0"
            ],
            "184"=> [
                "id"=> "184",
                "foodProduct"=> "Печенье \"курабье\"",
                "foodProteins"=> "6.60",
                "foodFats"=> "28.80",
                "foodCarbohydrates"=> "19.30",
                "foodCalories"=> "506.0"
            ],
            "185"=> [
                "id"=> "185",
                "foodProduct"=> "Печенье сухое",
                "foodProteins"=> "8.63",
                "foodFats"=> "12.60",
                "foodCarbohydrates"=> "72.25",
                "foodCalories"=> "438.0"
            ],
            "186"=> [
                "id"=> "186",
                "foodProduct"=> "Печенье типа \"Юбилейное\"",
                "foodProteins"=> "7.4",
                "foodFats"=> "19.7",
                "foodCarbohydrates"=> "63.2",
                "foodCalories"=> "461.0"
            ],
            "187"=> [
                "id"=> "187",
                "foodProduct"=> "Повидло вишнёвое с яблоком",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "50.0",
                "foodCalories"=> "184.0"
            ],
            "188"=> [
                "id"=> "188",
                "foodProduct"=> "Подберёзовики свежие",
                "foodProteins"=> "2.3",
                "foodFats"=> "0.9",
                "foodCarbohydrates"=> "3.7",
                "foodCalories"=> "31.0"
            ],
            "189"=> [
                "id"=> "189",
                "foodProduct"=> "Подберёзовики сушёные",
                "foodProteins"=> "24.0",
                "foodFats"=> "9.3",
                "foodCarbohydrates"=> "37.2",
                "foodCalories"=> "319.0"
            ],
            "190"=> [
                "id"=> "190",
                "foodProduct"=> "Подосиновики свежие",
                "foodProteins"=> "3.3",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "3.4",
                "foodCalories"=> "31.0"
            ],
            "191"=> [
                "id"=> "191",
                "foodProduct"=> "Подосиновики сушёные",
                "foodProteins"=> "32.5",
                "foodFats"=> "4.9",
                "foodCarbohydrates"=> "33.2",
                "foodCalories"=> "299.0"
            ],
            "192"=> [
                "id"=> "192",
                "foodProduct"=> "Подсолнечное",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "899.0"
            ],
            "193"=> [
                "id"=> "193",
                "foodProduct"=> "Полено кондитерское \"арахисовое\"",
                "foodProteins"=> "5.5",
                "foodFats"=> "18.2",
                "foodCarbohydrates"=> "68.0",
                "foodCalories"=> "433.0"
            ],
            "194"=> [
                "id"=> "194",
                "foodProduct"=> "Просо",
                "foodProteins"=> "11.2",
                "foodFats"=> "3.8",
                "foodCarbohydrates"=> "60.7",
                "foodCalories"=> "307.0"
            ],
            "195"=> [
                "id"=> "195",
                "foodProduct"=> "Простокваша 3,2%",
                "foodProteins"=> "3.3",
                "foodFats"=> "3.2",
                "foodCarbohydrates"=> "5.5",
                "foodCalories"=> "64.5"
            ],
            "196"=> [
                "id"=> "196",
                "foodProduct"=> "Пшеница",
                "foodProteins"=> "11.6",
                "foodFats"=> "1.6",
                "foodCarbohydrates"=> "68.7",
                "foodCalories"=> "318.0"
            ],
            "197"=> [
                "id"=> "197",
                "foodProduct"=> "Пшеничная мука",
                "foodProteins"=> "11.0",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "72.0",
                "foodCalories"=> "350.0"
            ],
            "198"=> [
                "id"=> "198",
                "foodProduct"=> "Пшено - крупа шлифованная",
                "foodProteins"=> "11.5",
                "foodFats"=> "3.3",
                "foodCarbohydrates"=> "64.8",
                "foodCalories"=> "348.0"
            ],
            "199"=> [
                "id"=> "199",
                "foodProduct"=> "Раковые шейки в рассоле",
                "foodProteins"=> "20.6",
                "foodFats"=> "1.7",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "98.0"
            ],
            "200"=> [
                "id"=> "200",
                "foodProduct"=> "Рапсовое",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.85",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "899.0"
            ],
            "201"=> [
                "id"=> "201",
                "foodProduct"=> "Ревень черешковый",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "2.9",
                "foodCalories"=> "16.0"
            ],
            "202"=> [
                "id"=> "202",
                "foodProduct"=> "Редис",
                "foodProteins"=> "1.2",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.1",
                "foodCalories"=> "20.0"
            ],
            "203"=> [
                "id"=> "203",
                "foodProduct"=> "Редька",
                "foodProteins"=> "1.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "7.0",
                "foodCalories"=> "34.0"
            ],
            "204"=> [
                "id"=> "204",
                "foodProduct"=> "Репа",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.9",
                "foodCalories"=> "28.0"
            ],
            "205"=> [
                "id"=> "205",
                "foodProduct"=> "Рис ",
                "foodProteins"=> "7.3",
                "foodFats"=> "2.6",
                "foodCarbohydrates"=> "63.1",
                "foodCalories"=> "284.0"
            ],
            "206"=> [
                "id"=> "206",
                "foodProduct"=> "Рис Fitness - смесь дикого и бурого риса",
                "foodProteins"=> "8.1",
                "foodFats"=> "4.1",
                "foodCarbohydrates"=> "63.4",
                "foodCalories"=> "322.9"
            ],
            "207"=> [
                "id"=> "207",
                "foodProduct"=> "Рис длиннозерновой шлифованный",
                "foodProteins"=> "7.0",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "78.5",
                "foodCalories"=> "347.0"
            ],
            "208"=> [
                "id"=> "208",
                "foodProduct"=> "Рис коричневый слабошлифованный",
                "foodProteins"=> "7.4",
                "foodFats"=> "2.2",
                "foodCarbohydrates"=> "72.0",
                "foodCalories"=> "337.0"
            ],
            "209"=> [
                "id"=> "209",
                "foodProduct"=> "Рожь",
                "foodProteins"=> "9.9",
                "foodFats"=> "1.6",
                "foodCarbohydrates"=> "70.9",
                "foodCalories"=> "320.0"
            ],
            "210"=> [
                "id"=> "210",
                "foodProduct"=> "Рыжики свежие",
                "foodProteins"=> "1.9",
                "foodFats"=> "0.8",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "22.0"
            ],
            "211"=> [
                "id"=> "211",
                "foodProduct"=> "Рябина садовая",
                "foodProteins"=> "1.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.5",
                "foodCalories"=> "58.0"
            ],
            "212"=> [
                "id"=> "212",
                "foodProduct"=> "Рябина черноплодная",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.0",
                "foodCalories"=> "54.0"
            ],
            "213"=> [
                "id"=> "213",
                "foodProduct"=> "Ряженка 3,2%",
                "foodProteins"=> "3.2",
                "foodFats"=> "3.2",
                "foodCarbohydrates"=> "5.4",
                "foodCalories"=> "64.0"
            ],
            "214"=> [
                "id"=> "214",
                "foodProduct"=> "Салака копчёная в масле консервированная",
                "foodProteins"=> "17.0",
                "foodFats"=> "32.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "356.0"
            ],
            "215"=> [
                "id"=> "215",
                "foodProduct"=> "Салат",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "2.2",
                "foodCalories"=> "14.0"
            ],
            "216"=> [
                "id"=> "216",
                "foodProduct"=> "Сардины в масле консервированные",
                "foodProteins"=> "23.0",
                "foodFats"=> "14.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "218.0"
            ],
            "217"=> [
                "id"=> "217",
                "foodProduct"=> "Сахар",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "99.8",
                "foodCalories"=> "374.0"
            ],
            "218"=> [
                "id"=> "218",
                "foodProduct"=> "Сахар рафинад быстрорастворимый ",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "99.95",
                "foodCalories"=> "400.0"
            ],
            "219"=> [
                "id"=> "219",
                "foodProduct"=> "Свекла",
                "foodProteins"=> "1.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "10.8",
                "foodCalories"=> "4.8"
            ],
            "220"=> [
                "id"=> "220",
                "foodProduct"=> "Свинина - балык особый",
                "foodProteins"=> "10.0",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "175.0"
            ],
            "221"=> [
                "id"=> "221",
                "foodProduct"=> "Свинина - буженина",
                "foodProteins"=> "15.0",
                "foodFats"=> "23.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "267.0"
            ],
            "222"=> [
                "id"=> "222",
                "foodProduct"=> "Свинина - карбонад варёно-копчёный",
                "foodProteins"=> "15.0",
                "foodFats"=> "20.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "240.0"
            ],
            "223"=> [
                "id"=> "223",
                "foodProduct"=> "Свинина - корейка сырокопчёная",
                "foodProteins"=> "12.3",
                "foodFats"=> "40.6",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "415.0"
            ],
            "224"=> [
                "id"=> "224",
                "foodProduct"=> "Свиной язык консервированный",
                "foodProteins"=> "12.0",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "185.0"
            ],
            "225"=> [
                "id"=> "225",
                "foodProduct"=> "Сельдерей зелень",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "8.0"
            ],
            "226"=> [
                "id"=> "226",
                "foodProduct"=> "Сельдерей корень",
                "foodProteins"=> "1.3",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.7",
                "foodCalories"=> "31.0"
            ],
            "227"=> [
                "id"=> "227",
                "foodProduct"=> "Сельдь слабосолёная",
                "foodProteins"=> "17.0",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "204.0"
            ],
            "228"=> [
                "id"=> "228",
                "foodProduct"=> "Сельдь слабосолёная филе без кожи",
                "foodProteins"=> "22.0",
                "foodFats"=> "13.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "205.0"
            ],
            "229"=> [
                "id"=> "229",
                "foodProduct"=> "Сёмга",
                "foodProteins"=> "23.0",
                "foodFats"=> "13.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "202.0"
            ],
            "230"=> [
                "id"=> "230",
                "foodProduct"=> "Семечки подсолнечника",
                "foodProteins"=> "24.0",
                "foodFats"=> "47.3",
                "foodCarbohydrates"=> "16.1",
                "foodCalories"=> "601.0"
            ],
            "231"=> [
                "id"=> "231",
                "foodProduct"=> "Семечки тыквы",
                "foodProteins"=> "29.0",
                "foodFats"=> "46.7",
                "foodCarbohydrates"=> "13.1",
                "foodCalories"=> "596.0"
            ],
            "232"=> [
                "id"=> "232",
                "foodProduct"=> "Слива",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.9",
                "foodCalories"=> "43.0"
            ],
            "233"=> [
                "id"=> "233",
                "foodProduct"=> "Сливки 11%",
                "foodProteins"=> "3.0",
                "foodFats"=> "11.0",
                "foodCarbohydrates"=> "4.0",
                "foodCalories"=> "130.0"
            ],
            "234"=> [
                "id"=> "234",
                "foodProduct"=> "Сливки 22%",
                "foodProteins"=> "2.8",
                "foodFats"=> "22.0",
                "foodCarbohydrates"=> "3.7",
                "foodCalories"=> "220.0"
            ],
            "235"=> [
                "id"=> "235",
                "foodProduct"=> "Сливки взбитые с заменителем сахара",
                "foodProteins"=> "2.3",
                "foodFats"=> "26.5",
                "foodCarbohydrates"=> "4.60",
                "foodCalories"=> "266.0"
            ],
            "236"=> [
                "id"=> "236",
                "foodProduct"=> "Сметана 10%",
                "foodProteins"=> "3.0",
                "foodFats"=> "10.0",
                "foodCarbohydrates"=> "2.9",
                "foodCalories"=> "116.0"
            ],
            "237"=> [
                "id"=> "237",
                "foodProduct"=> "Сметана 15%",
                "foodProteins"=> "2.9",
                "foodFats"=> "15.0",
                "foodCarbohydrates"=> "3.0",
                "foodCalories"=> "142.0"
            ],
            "238"=> [
                "id"=> "238",
                "foodProduct"=> "Сметана 20%",
                "foodProteins"=> "2.8",
                "foodFats"=> "20.0",
                "foodCarbohydrates"=> "3.2",
                "foodCalories"=> "210.0"
            ],
            "239"=> [
                "id"=> "239",
                "foodProduct"=> "Сметана 25%",
                "foodProteins"=> "2.6",
                "foodFats"=> "25.0",
                "foodCarbohydrates"=> "2.7",
                "foodCalories"=> "294.0"
            ],
            "240"=> [
                "id"=> "240",
                "foodProduct"=> "Сметана 30%",
                "foodProteins"=> "2.4",
                "foodFats"=> "30.0",
                "foodCarbohydrates"=> "3.1",
                "foodCalories"=> "346.0"
            ],
            "241"=> [
                "id"=> "241",
                "foodProduct"=> "Смородина белая",
                "foodProteins"=> "0.3",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.7",
                "foodCalories"=> "39.0"
            ],
            "242"=> [
                "id"=> "242",
                "foodProduct"=> "Смородина красная",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.0",
                "foodCalories"=> "38.0"
            ],
            "243"=> [
                "id"=> "243",
                "foodProduct"=> "Смородина чёрная",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.0",
                "foodCalories"=> "40.0"
            ],
            "244"=> [
                "id"=> "244",
                "foodProduct"=> "Смородина чёрная мороженная",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.1",
                "foodCalories"=> "28.0"
            ],
            "245"=> [
                "id"=> "245",
                "foodProduct"=> "Сморчки свежие",
                "foodProteins"=> "2.9",
                "foodFats"=> "0.4",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "22.0"
            ],
            "246"=> [
                "id"=> "246",
                "foodProduct"=> "Соевое",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "899.0"
            ],
            "247"=> [
                "id"=> "247",
                "foodProduct"=> "Соевый соус",
                "foodProteins"=> "4.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.0",
                "foodCalories"=> "39.4"
            ],
            "248"=> [
                "id"=> "248",
                "foodProduct"=> "Соломка сладкая",
                "foodProteins"=> "9.2",
                "foodFats"=> "6.1",
                "foodCarbohydrates"=> "69.0",
                "foodCalories"=> "371.0"
            ],
            "249"=> [
                "id"=> "249",
                "foodProduct"=> "Сом",
                "foodProteins"=> "17.0",
                "foodFats"=> "5.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "113.0"
            ],
            "250"=> [
                "id"=> "250",
                "foodProduct"=> "Сорго",
                "foodProteins"=> "11.1",
                "foodFats"=> "3.3",
                "foodCarbohydrates"=> "66.4",
                "foodCalories"=> "323.0"
            ],
            "251"=> [
                "id"=> "251",
                "foodProduct"=> "Соя",
                "foodProteins"=> "34.9",
                "foodFats"=> "17.3",
                "foodCarbohydrates"=> "26.5",
                "foodCalories"=> "395.0"
            ],
            "252"=> [
                "id"=> "252",
                "foodProduct"=> "Спаржа",
                "foodProteins"=> "1.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "3.6",
                "foodCalories"=> "21.0"
            ],
            "253"=> [
                "id"=> "253",
                "foodProduct"=> "Судак",
                "foodProteins"=> "18.4",
                "foodFats"=> "1.1",
                "foodCarbohydrates"=> "1.3",
                "foodCalories"=> "126.0"
            ],
            "254"=> [
                "id"=> "254",
                "foodProduct"=> "Сыр голландский",
                "foodProteins"=> "23.5",
                "foodFats"=> "30.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "360.0"
            ],
            "255"=> [
                "id"=> "255",
                "foodProduct"=> "Сыр мягкий \"Адыгейский\"",
                "foodProteins"=> "16.0",
                "foodFats"=> "18.0",
                "foodCarbohydrates"=> "2.7",
                "foodCalories"=> "238.0"
            ],
            "256"=> [
                "id"=> "256",
                "foodProduct"=> "Сыр мягкий домашний",
                "foodProteins"=> "17.0",
                "foodFats"=> "4.0",
                "foodCarbohydrates"=> "1.8",
                "foodCalories"=> "114.3"
            ],
            "257"=> [
                "id"=> "257",
                "foodProduct"=> "Сыр плавленный President",
                "foodProteins"=> "10.0",
                "foodFats"=> "22.2",
                "foodCarbohydrates"=> "6.5",
                "foodCalories"=> "266.0"
            ],
            "258"=> [
                "id"=> "258",
                "foodProduct"=> "Сыр плавленный сливочный Hochland",
                "foodProteins"=> "9.0",
                "foodFats"=> "25.0",
                "foodCarbohydrates"=> "6.0",
                "foodCalories"=> "285.0"
            ],
            "259"=> [
                "id"=> "259",
                "foodProduct"=> "Сыр полутвёрдый сливочный",
                "foodProteins"=> "24.0",
                "foodFats"=> "33.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "390.0"
            ],
            "260"=> [
                "id"=> "260",
                "foodProduct"=> "Сыр с плесенью Blue",
                "foodProteins"=> "21.5",
                "foodFats"=> "50.0",
                "foodCarbohydrates"=> "20.0",
                "foodCalories"=> "347.0"
            ],
            "261"=> [
                "id"=> "261",
                "foodProduct"=> "Сыр твёрдый \"Радамер\"",
                "foodProteins"=> "25.0",
                "foodFats"=> "26.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "339.0"
            ],
            "262"=> [
                "id"=> "262",
                "foodProduct"=> "Сыроежки свежие",
                "foodProteins"=> "1.7",
                "foodFats"=> "0.3",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "17.0"
            ],
            "263"=> [
                "id"=> "263",
                "foodProduct"=> "Сырок сладкий глазированный в шоколаде",
                "foodProteins"=> "7.5",
                "foodFats"=> "25.5",
                "foodCarbohydrates"=> "33.0",
                "foodCalories"=> "391.0"
            ],
            "264"=> [
                "id"=> "264",
                "foodProduct"=> "Творог жирный",
                "foodProteins"=> "14.0",
                "foodFats"=> "18.0",
                "foodCarbohydrates"=> "2.85",
                "foodCalories"=> "232.0"
            ],
            "265"=> [
                "id"=> "265",
                "foodProduct"=> "Творог нежирный сухой",
                "foodProteins"=> "18.0",
                "foodFats"=> "0.6",
                "foodCarbohydrates"=> "1.85",
                "foodCalories"=> "88.0"
            ],
            "266"=> [
                "id"=> "266",
                "foodProduct"=> "Творог обезжиренный жидкий",
                "foodProteins"=> "17.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "1.80",
                "foodCalories"=> "79.0"
            ],
            "267"=> [
                "id"=> "267",
                "foodProduct"=> "Творог полужирный",
                "foodProteins"=> "16.7",
                "foodFats"=> "9.0",
                "foodCarbohydrates"=> "2.0",
                "foodCalories"=> "159.0"
            ],
            "268"=> [
                "id"=> "268",
                "foodProduct"=> "Тёрн",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "9.3",
                "foodCalories"=> "47.0"
            ],
            "269"=> [
                "id"=> "269",
                "foodProduct"=> "Тесто слоёное не дрожжевое",
                "foodProteins"=> "6.1",
                "foodFats"=> "20.8",
                "foodCarbohydrates"=> "41.0",
                "foodCalories"=> "380.0"
            ],
            "270"=> [
                "id"=> "270",
                "foodProduct"=> "Томатная паста",
                "foodProteins"=> "3.5",
                "foodFats"=> "0.6",
                "foodCarbohydrates"=> "13.9",
                "foodCalories"=> "87.0"
            ],
            "271"=> [
                "id"=> "271",
                "foodProduct"=> "Томатный сок J-7 с солью",
                "foodProteins"=> "0.8",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.3",
                "foodCalories"=> "21.0"
            ],
            "272"=> [
                "id"=> "272",
                "foodProduct"=> "Томаты",
                "foodProteins"=> "0.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "4.2",
                "foodCalories"=> "19.0"
            ],
            "273"=> [
                "id"=> "273",
                "foodProduct"=> "Томаты - кетчуп",
                "foodProteins"=> "0.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "18.0",
                "foodCalories"=> "75.0"
            ],
            "274"=> [
                "id"=> "274",
                "foodProduct"=> "Торт безе с кремом \"Графские развалины\"",
                "foodProteins"=> "4.2",
                "foodFats"=> "8.8",
                "foodCarbohydrates"=> "65.4",
                "foodCalories"=> "358.0"
            ],
            "275"=> [
                "id"=> "275",
                "foodProduct"=> "Торт бисквитный с кремом \"Вацлавский\"",
                "foodProteins"=> "10.0",
                "foodFats"=> "28.0",
                "foodCarbohydrates"=> "47.10",
                "foodCalories"=> "460.0"
            ],
            "276"=> [
                "id"=> "276",
                "foodProduct"=> "Торт бисквитный шоколадный с кремом \"Марика\"",
                "foodProteins"=> "6.8",
                "foodFats"=> "25.1",
                "foodCarbohydrates"=> "42.50",
                "foodCalories"=> "425.2"
            ],
            "277"=> [
                "id"=> "277",
                "foodProduct"=> "Треска",
                "foodProteins"=> "16.0",
                "foodFats"=> "0.6",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "69.0"
            ],
            "278"=> [
                "id"=> "278",
                "foodProduct"=> "Тунец в собственном соку консервы",
                "foodProteins"=> "23.5",
                "foodFats"=> "0.6",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "99.0"
            ],
            "279"=> [
                "id"=> "279",
                "foodProduct"=> "Тыква",
                "foodProteins"=> "1.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.5",
                "foodCalories"=> "29.0"
            ],
            "280"=> [
                "id"=> "280",
                "foodProduct"=> "Укроп",
                "foodProteins"=> "2.5",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "4.5",
                "foodCalories"=> "32.0"
            ],
            "281"=> [
                "id"=> "281",
                "foodProduct"=> "Утка для жарки",
                "foodProteins"=> "25.2",
                "foodFats"=> "11.9",
                "foodCarbohydrates"=> "0.68",
                "foodCalories"=> "284.0"
            ],
            "282"=> [
                "id"=> "282",
                "foodProduct"=> "Фасоль",
                "foodProteins"=> "22.3",
                "foodFats"=> "1.7",
                "foodCarbohydrates"=> "54.5",
                "foodCalories"=> "309.0"
            ],
            "283"=> [
                "id"=> "283",
                "foodProduct"=> "Фасоль в томатном соусе (консервированная)",
                "foodProteins"=> "4.6",
                "foodFats"=> "0.2",
                "foodCarbohydrates"=> "13.1",
                "foodCalories"=> "73.0"
            ],
            "284"=> [
                "id"=> "284",
                "foodProduct"=> "Фасоль красная",
                "foodProteins"=> "22.3",
                "foodFats"=> "1.7",
                "foodCarbohydrates"=> "54.7",
                "foodCalories"=> "309.0"
            ],
            "285"=> [
                "id"=> "285",
                "foodProduct"=> "Финики",
                "foodProteins"=> "2.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "72.1",
                "foodCalories"=> "281.0"
            ],
            "286"=> [
                "id"=> "286",
                "foodProduct"=> "Финики",
                "foodProteins"=> "2.2",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "66.3",
                "foodCalories"=> "305.0"
            ],
            "287"=> [
                "id"=> "287",
                "foodProduct"=> "Фисташки жареные солёные",
                "foodProteins"=> "21.2",
                "foodFats"=> "38.8",
                "foodCarbohydrates"=> "14.3",
                "foodCalories"=> "655.0"
            ],
            "288"=> [
                "id"=> "288",
                "foodProduct"=> "Форель",
                "foodProteins"=> "19.5",
                "foodFats"=> "5.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "130.0"
            ],
            "289"=> [
                "id"=> "289",
                "foodProduct"=> "Форель слабосолёная",
                "foodProteins"=> "23.5",
                "foodFats"=> "11.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "203.0"
            ],
            "290"=> [
                "id"=> "290",
                "foodProduct"=> "Фундук жареный",
                "foodProteins"=> "16.1",
                "foodFats"=> "66.9",
                "foodCarbohydrates"=> "9.9",
                "foodCalories"=> "704.0"
            ],
            "291"=> [
                "id"=> "291",
                "foodProduct"=> "Халва миндальная",
                "foodProteins"=> "10.0",
                "foodFats"=> "28.0",
                "foodCarbohydrates"=> "53.50",
                "foodCalories"=> "123.3"
            ],
            "292"=> [
                "id"=> "292",
                "foodProduct"=> "Хлеб пшеничный",
                "foodProteins"=> "8.1",
                "foodFats"=> "1.2",
                "foodCarbohydrates"=> "42.0",
                "foodCalories"=> "203.0"
            ],
            "293"=> [
                "id"=> "293",
                "foodProduct"=> "Хлеб пшеничный \"нарезной\" батон",
                "foodProteins"=> "8.2",
                "foodFats"=> "0.95",
                "foodCarbohydrates"=> "54.06",
                "foodCalories"=> "263.0"
            ],
            "294"=> [
                "id"=> "294",
                "foodProduct"=> "Хлеб пшеничный \"особый\" батон",
                "foodProteins"=> "7.4",
                "foodFats"=> "0.8",
                "foodCarbohydrates"=> "50.0",
                "foodCalories"=> "240.0"
            ],
            "295"=> [
                "id"=> "295",
                "foodProduct"=> "Хлеб пшеничный лепёшка домашняя",
                "foodProteins"=> "8.98",
                "foodFats"=> "6.51",
                "foodCarbohydrates"=> "57.77",
                "foodCalories"=> "331.3"
            ],
            "296"=> [
                "id"=> "296",
                "foodProduct"=> "Хлеб ржано-пшеничный",
                "foodProteins"=> "7.0",
                "foodFats"=> "1.1",
                "foodCarbohydrates"=> "40.3",
                "foodCalories"=> "193.0"
            ],
            "297"=> [
                "id"=> "297",
                "foodProduct"=> "Хлебные палочки кунжутные",
                "foodProteins"=> "9.6",
                "foodFats"=> "11.5",
                "foodCarbohydrates"=> "59.4",
                "foodCalories"=> "380.4"
            ],
            "298"=> [
                "id"=> "298",
                "foodProduct"=> "Хлебцы ржаные из муки грубого помола с полбой",
                "foodProteins"=> "11.4",
                "foodFats"=> "1.7",
                "foodCarbohydrates"=> "64.9",
                "foodCalories"=> "321.0"
            ],
            "299"=> [
                "id"=> "299",
                "foodProduct"=> "Хлопковое",
                "foodProteins"=> "0.0",
                "foodFats"=> "99.9",
                "foodCarbohydrates"=> "9.0",
                "foodCalories"=> "899.0"
            ],
            "300"=> [
                "id"=> "300",
                "foodProduct"=> "Хлопья кукурузные Gold с мёдом и орешками",
                "foodProteins"=> "7.0",
                "foodFats"=> "4.0",
                "foodCarbohydrates"=> "81.2",
                "foodCalories"=> "389.0"
            ],
            "301"=> [
                "id"=> "301",
                "foodProduct"=> "Хрен",
                "foodProteins"=> "2.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "16.3",
                "foodCalories"=> "71.0"
            ],
            "302"=> [
                "id"=> "302",
                "foodProduct"=> "Хрен с майонезом",
                "foodProteins"=> "2.5",
                "foodFats"=> "11.7",
                "foodCarbohydrates"=> "16.3",
                "foodCalories"=> "178.0"
            ],
            "303"=> [
                "id"=> "303",
                "foodProduct"=> "Хурьма японская",
                "foodProteins"=> "0.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "15.9",
                "foodCalories"=> "62.0"
            ],
            "304"=> [
                "id"=> "304",
                "foodProduct"=> "Цыплёнок грудки филе",
                "foodProteins"=> "21.3",
                "foodFats"=> "2.5",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "107.7"
            ],
            "305"=> [
                "id"=> "305",
                "foodProduct"=> "Цыплёнок для жарки белое мясо",
                "foodProteins"=> "25.0",
                "foodFats"=> "4.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "141.0"
            ],
            "306"=> [
                "id"=> "306",
                "foodProduct"=> "Цыплёнок для жарки тёмное мясо",
                "foodProteins"=> "23.0",
                "foodFats"=> "6.9",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "156.0"
            ],
            "307"=> [
                "id"=> "307",
                "foodProduct"=> "Чай",
                "foodProteins"=> "20.0",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.9",
                "foodCalories"=> "109.0"
            ],
            "308"=> [
                "id"=> "308",
                "foodProduct"=> "Черемша",
                "foodProteins"=> "2.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "6.5",
                "foodCalories"=> "34.0"
            ],
            "309"=> [
                "id"=> "309",
                "foodProduct"=> "Черешня",
                "foodProteins"=> "1.1",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.3",
                "foodCalories"=> "52.0"
            ],
            "310"=> [
                "id"=> "310",
                "foodProduct"=> "Черника",
                "foodProteins"=> "1.1",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "8.6",
                "foodCalories"=> "40.0"
            ],
            "311"=> [
                "id"=> "311",
                "foodProduct"=> "Чернослив",
                "foodProteins"=> "1.9",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "59.5",
                "foodCalories"=> "256.0"
            ],
            "312"=> [
                "id"=> "312",
                "foodProduct"=> "Чернослив в шоколаде",
                "foodProteins"=> "3.9",
                "foodFats"=> "14.2",
                "foodCarbohydrates"=> "58.40",
                "foodCalories"=> "358.0"
            ],
            "313"=> [
                "id"=> "313",
                "foodProduct"=> "Чеснок",
                "foodProteins"=> "6.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "21.2",
                "foodCalories"=> "106.0"
            ],
            "314"=> [
                "id"=> "314",
                "foodProduct"=> "Чечевица",
                "foodProteins"=> "24.8",
                "foodFats"=> "1.1",
                "foodCarbohydrates"=> "53.7",
                "foodCalories"=> "310.0"
            ],
            "315"=> [
                "id"=> "315",
                "foodProduct"=> "Чечевица красная",
                "foodProteins"=> "21.0",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "49.0",
                "foodCalories"=> "298.0"
            ],
            "316"=> [
                "id"=> "316",
                "foodProduct"=> "Чина",
                "foodProteins"=> "25.1",
                "foodFats"=> "0.9",
                "foodCarbohydrates"=> "52.1",
                "foodCalories"=> "304.0"
            ],
            "317"=> [
                "id"=> "317",
                "foodProduct"=> "Шампиньоны консервированные",
                "foodProteins"=> "2.3",
                "foodFats"=> "0.5",
                "foodCarbohydrates"=> "0.5",
                "foodCalories"=> "16.0"
            ],
            "318"=> [
                "id"=> "318",
                "foodProduct"=> "Шампиньоны мороженные",
                "foodProteins"=> "4.2",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "0.1",
                "foodCalories"=> "26.0"
            ],
            "319"=> [
                "id"=> "319",
                "foodProduct"=> "Шелковица",
                "foodProteins"=> "0.7",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "12.7",
                "foodCalories"=> "53.0"
            ],
            "320"=> [
                "id"=> "320",
                "foodProduct"=> "Шиповник свежий",
                "foodProteins"=> "1.6",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "24.0",
                "foodCalories"=> "101.0"
            ],
            "321"=> [
                "id"=> "321",
                "foodProduct"=> "Шиповник сушёный",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "60.0",
                "foodCalories"=> "253.0"
            ],
            "322"=> [
                "id"=> "322",
                "foodProduct"=> "Шоколад ",
                "foodProteins"=> "5.4",
                "foodFats"=> "35.4",
                "foodCarbohydrates"=> "52.60",
                "foodCalories"=> "544.0"
            ],
            "323"=> [
                "id"=> "323",
                "foodProduct"=> "Шоколад с изюмом",
                "foodProteins"=> "4.5",
                "foodFats"=> "25.9",
                "foodCarbohydrates"=> "56.90",
                "foodCalories"=> "471.0"
            ],
            "324"=> [
                "id"=> "324",
                "foodProduct"=> "Шоколад с фундуком",
                "foodProteins"=> "8.8",
                "foodFats"=> "42.3",
                "foodCarbohydrates"=> "43.7",
                "foodCalories"=> "585.0"
            ],
            "325"=> [
                "id"=> "325",
                "foodProduct"=> "Шпинат",
                "foodProteins"=> "2.9",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "2.3",
                "foodCalories"=> "21.0"
            ],
            "326"=> [
                "id"=> "326",
                "foodProduct"=> "Шпроты в масле",
                "foodProteins"=> "17.0",
                "foodFats"=> "32.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "356.0"
            ],
            "327"=> [
                "id"=> "327",
                "foodProduct"=> "Щавель",
                "foodProteins"=> "1.5",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "5.3",
                "foodCalories"=> "28.0"
            ],
            "328"=> [
                "id"=> "328",
                "foodProduct"=> "Щука",
                "foodProteins"=> "18.0",
                "foodFats"=> "1.0",
                "foodCarbohydrates"=> "0.0",
                "foodCalories"=> "81.0"
            ],
            "329"=> [
                "id"=> "329",
                "foodProduct"=> "Яблоки",
                "foodProteins"=> "0.4",
                "foodFats"=> "0.0",
                "foodCarbohydrates"=> "11.3",
                "foodCalories"=> "46.0"
            ],
            "330"=> [
                "id"=> "330",
                "foodProduct"=> "Яйца куриные",
                "foodProteins"=> "12.7",
                "foodFats"=> "11.5",
                "foodCarbohydrates"=> "0.7",
                "foodCalories"=> "157.0"
            ],
            "331"=> [
                "id"=> "331",
                "foodProduct"=> "Ячмень",
                "foodProteins"=> "11.5",
                "foodFats"=> "2.0",
                "foodCarbohydrates"=> "65.8",
                "foodCalories"=> "311.0"
            ]
        ];
        foreach ($foods as $food) {
                    \App\Foods::create($food);
                }
    }
}
