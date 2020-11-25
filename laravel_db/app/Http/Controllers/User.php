<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function index(){
        // return DB::table('user')->get();

        //wyświetl z tabeli user osoby ktorych nazwisko to Sydorowicz
        // return DB::table('user')
        // ->where('surname', 'Sydorowicz')
        // ->get();

        // //albo

        // return DB::select('select * from user
        // where surname like "Pazdzioch"');

        // //albo

        // $data = DB::table('user') ->count();
        // echo $data;

        // $data = DB::table('user')->first();
        // print_r($data);

        // $data = DB::table('user')->find(2);
        // print_r($data);

        //zadanie. Usun osobe ktorej imie to Pawel
        // return DB::table('user')
        // ->where('name', 'Pawel')
        // ->delete();

        //dodaj rekord
        // return DB::table('user')
        // ->insert(
        //     ['id' => 3,
        //     'name' => 'Krystyna',
        //     'surname' => 'Nowak',
        //     'birthday' => '2001-05-21']
        // );
        // print_r($data);

        //zmodyfikuj imiona
        // $data = DB::table('user')
        // -> where('name','Anna')
        // ->update(
        // [
        //     'name' => 'Olga',
        //     'surname'=>'Dupa'
        // ]
        // );

        // print_r($data);

        // $data = DB::table('user')->max('height');
        // print_r($data);

        // wyświetlanie okreslonych wynikow z tabeli
        // $data = DB::table('user')->sum('height');
        // print_r($data);
        //zaokraglenie wyniku
        //print_r(number_format($data,2));

    //     $data = DB::table('user')
    //     ->join('city', 'city_id', 'city.id')
    //     ->get();

    //     echo '<pre>';
    //         print_r($data);
    //     echo'</pre>';


    // //wyswietl pola z tabeli user: imie, nazwisko, z tabeli miasto: nazwa, np. Poznań

    // $data = DB::table('user')
    //     ->select('user.name', 'user.surname', 'city.city')
    //     ->join('city', 'city_id', 'city.id')
    //     ->get();

    //     echo '<pre>';
    //         print_r($data);
    //     echo'</pre>';

    //     //user: imie i nazwisko, miasto: nazwa
    //     $data = DB::table('user')
    //     ->select('user.name', 'user.surname', 'city.city', 'state.state')
    //     ->join('city', 'city_id', 'city.id')
    //     ->join('state', 'state_id', 'state.id')
    //     ->get();

    //     echo '<pre>';
    //         print_r($data);
    //     echo'</pre>';

    //     //user: imie i nazwisko, miasto: nazwa
    //     $data = DB::table('user')
    //     ->select('user.name', 'user.surname', 'city.city', 'state.state')
    //     ->join('city', 'city_id', 'city.id')
    //     ->join('state', 'state_id', 'state.id')
    //     ->get();

    //     echo '<pre>';
    //         print_r($data);
    //     echo'</pre>';

    //      //wyswietl pola imie, nazwisko, miasto, wojewodztwo, w ktorych miastem jest Legnica

    //      $data = DB::table('user')
    //      ->select('user.name', 'user.surname', 'city.city', 'state.state')
    //      ->join('city', 'city_id', 'city.id')
    //      ->join('state', 'state_id', 'state.id')
    //      ->where('city.city', 'Legnica')
    //      ->get();

    //      echo '<pre>';
    //          print_r($data);
    //      echo'</pre>';

         //wyswietl wszystkich userów + miasto jesli posiada
         $data = DB::table('user')
         ->select('user.name', 'user.surname', 'city.city')
         ->leftjoin('city', 'city_id', 'city.id')
         ->get();

         echo '<pre>';
             print_r($data);
         echo'</pre>';
    }
}
