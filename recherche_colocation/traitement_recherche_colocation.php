<?php
include('../lienversbdd.php');

if(isset($_POST['ville'],$_POST['prix'],$_POST['log'],$_POST['type'],$_POST['meuble'])){
  if(empty($_POST['ville']) || empty($_POST['log']) || empty($_POST['type']) || empty($_POST['meuble'])){
    echo "non";

  }
  else{

    $enter="ville=:ville";
    $array[":ville"]=$_POST['ville'];

    if(empty($_POST['prix'])){
      echo "pas de prix ";
      $prix=false;
    }
    else{
      $enter.=" AND prix=:prix";
      $array[":prix"]=$_POST['prix'];
    }

    if($_POST['log']=="no"){

    }
    else{
      $enter.=" AND loge=:loge";
      $array[":loge"]=$_POST['log'];    }

      if($_POST['type']=="no"){

      }
      else{
        $enter.=" AND type=:type";
        $array[":type"]=$_POST['type'];    }

        if($_POST['meuble']=="no"){

        }
        else{
          $enter.=" AND meuble=:meuble";
          $array[":meuble"]=$_POST['meuble'];
        }

        // var_dump($enter);
        // var_dump($array);
        var_dump($req=$connexion->prepare("SELECT * FROM appartement WHERE $enter"));

        $req-> execute($array);

        $recherche=$req-> fetchAll();
        var_dump($recherche);

      }
    }
    else{
      echo "no";
    }



    ?> -->
