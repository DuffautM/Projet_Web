@extends('template/template')
@section('titre')
    <div class="container">
    <div class="row">
        <h3 class="title">Profil</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="row">
        <div class="col-xs-12">
            <div class="row">
            <h7 class="col-xs-offset-2 col-xs-1">{{$user->nom_user}} </h7>
            <h7 class="col-xs-1">{{$user->nom_user}}</h7>
            <h7 class="col-xs-1">{{$user->prenom_user}}</h7>
                </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Age : <?
                    date_default_timezone_set('UTC');
                    $now=date("Y");
                    $nowM=date("m");
                    $nowD=date("d");
                    $end_date=$user->naissance_user;
                    
                    $annee = substr($end_date, 0, 4);
                    $mois = substr($end_date, 5, 2);
                    $jour = substr($end_date, 8, 10);
                    if($mois>$nowM){
                        $age=$now-$annee;
                    }elseif($mois==$nowM && $jour>=$nowD){
                        $age=$now-$annee;
                    }
                    else{
                        $age=$now-$annee-1;
                    }
                    
                    echo $age;
                ?>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Promotion : {{$user->annee_user}} {{$user->promo_user}}</p>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Centre : {{$user->centre_user}}</p>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">{{$user->phrase_user}}</p>
            </div>
            <?php 
            echo'<img src="'?>{{ $user->avatar_user}}<?php echo'" class="col-xs-offset-1 col-xs-4 profil">' ?>
            
        </div>
        </div>
    
        
    </div>


@endsection