<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'太郎',
            'gender'=>'1',
            'email'=>'one.one@com.jp',
            'postcode'=>'290-0050',
            'address'=>'千葉県市原市更級',
            'building_name'=>'Aビル',
            'opition'=> 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '次郎',
            'gender' => '1',
            'email' => 'two.two@com.jp',
            'postcode' => '290-0056',
            'address' => '千葉県市原市五井',
            'building_name' => 'Bビル',
            'opition' => 'いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '三郎',
            'gender' => '1',
            'email' => 'three.three@com.jp',
            'postcode' => '290-0051',
            'address' => '千葉県市原市君塚',
            'building_name' => 'Cビル',
            'opition' => 'うううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '四郎',
            'gender' => '1',
            'email' => 'four.four@com.jp',
            'postcode' => '290-0055',
            'address' => '千葉県市原市五井東',
            'building_name' => 'Dビル',
            'opition' => 'えええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '五郎',
            'gender' => '1',
            'email' => 'five.five@com.jp',
            'postcode' => '290-0052',
            'address' => '千葉県市原市岩野見',
            'building_name' => 'Eビル',
            'opition' => 'おおおおおおおおおおおおおおおおおおおおおおおおおおお'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '六郎',
            'gender' => '1',
            'email' => 'six.six@com.jp',
            'postcode' => '290-0053',
            'address' => '千葉県市原市平田',
            'building_name' => 'Fビル',
            'opition' => 'かかかかかかかかかかかかかあかか'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '七郎',
            'gender' => '1',
            'email' => 'seven.seven@com.jp',
            'postcode' => '290-0054',
            'address' => '千葉県市原市五井中央東',
            'building_name' => 'Gビル',
            'opition' => 'きききききききききっききききききき'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '八郎',
            'gender' => '1',
            'email' => 'eight.eight@com.jp',
            'postcode' => '290-0057',
            'address' => '千葉県市原市五井金杉',
            'building_name' => 'Hビル',
            'opition' => 'くくくくくくくくくくくくくくくくく'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '九郎',
            'gender' => '1',
            'email' => 'nine.nine@com.jp',
            'postcode' => '290-0058',
            'address' => '千葉県市原市五井海岸',
            'building_name' => 'Iビル',
            'opition' => 'けけけけけけけけけけけけけけけけけけｋ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '十郎',
            'gender' => '1',
            'email' => 'ten.ten@com.jp',
            'postcode' => '290-0059',
            'address' => '千葉県市原市白金町',
            'building_name' => 'Jビル',
            'opition' => 'ここここっここここここここここここ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '花子',
            'gender' => '2',
            'email' => 'eleven@com.jp',
            'postcode' => '290-0061',
            'address' => '千葉県市原市八幡石塚',
            'building_name' => 'Kビル',
            'opition' => 'さささささささっさささささささささささささささっさささささささささささささささっさささささささささささささささっさささささささささささささささっささささささささ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '順子',
            'gender' => '2',
            'email' => 'twelve@com.jp',
            'postcode' => '290-0062',
            'address' => '千葉県市原市八幡',
            'building_name' => 'Lビル',
            'opition' => 'ししししししししししいしししししししししししししししししいしししししししししししししししししいしししししししししししししししししいしししししししししししししししししいししししししし'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'name' => '良子',
            'gender' => '2',
            'email' => 'thirteen@com.jp',
            'postcode' => '290-0063',
            'address' => '千葉県市原市旭五所',
            'building_name' => 'Mビル',
            'opition' => 'すすすすすすすすすすすすすっすすうすすｓ'
        ];
        DB::table('contacts')->insert($param);
    }
}
