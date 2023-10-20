<?php

    include("Classes/classcarro.php");

    //instanciando novo objeto
    $carro0 = new carro(); 

    //Atribuindo valores
    $carro0->ano = "2012";
    $carro0->modelo = "C4 VTR";
    $carro0->cor = "Preto";
    $carro0->fabricante = "Citroen";
    $carro0->status = "Disponível";

    //instanciando novo objeto
    $carro1 = new carro();

    //Atribuindo valores
    $carro1->ano = "2014/2015";
    $carro1->modelo = "Corcel 2";
    $carro1->cor = "Amarelo";
    $carro1->fabricante = "Ford";
    $carro1->status = "indisponível";


    //instanciando novo objeto
      $carro2 = new carro(); 

    //Atribuindo valores
      $carro2->ano = "2023";
      $carro2->modelo = "Mercedes-AMG A 35 4MATIC Sedan";
      $carro2->cor = "Azul";
      $carro2->fabricante = "Mercedes";
      $carro2->status = "Disponível";


    //instanciando novo objeto
    $carro3 = new carro(); 

    //Atribuindo valores
      $carro3->ano = "2019";
      $carro3->modelo = "Golf GTI";
      $carro3->cor = "Branca";
      $carro3->fabricante = "Volkswagen";
      $carro3->status = "Indisponível";

    //instanciando novo objeto
    $carro4 = new carro(); 

    //Atribuindo valores
      $carro4->ano = "2022";
      $carro4->modelo = "Aventador";
      $carro4->cor = "Amarela";
      $carro4->fabricante = "Lamborghini";
      $carro4->status = "Disponível";

    //instanciando novo objeto
    $carro5 = new carro(); 

    //Atribuindo valore
      $carro5->ano = "2023";
      $carro5->modelo = "TTRS";
      $carro5->cor = "Roxo";
      $carro5->fabricante = "Audi";
      $carro5->status = "Indisponível";

    //Imprimindo na tela do usuario os valores do objeto (carro0) acima:
    echo "Carro ". $carro0->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro0->fabricante . "<br/>
                    Modelo:". $carro0->modelo. "<br/>
                    de Cor:". $carro0->cor . "<br/>
                    Ano: ". $carro0->ano . "<br/> <hr>";

    //Imprimindo valos dos objetos (carro1) acima:
    echo "Carro ". $carro1->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro1->fabricante . "<br/>
    Modelo:". $carro1->modelo. "<br/>
    de Cor:". $carro1->cor . "<br/>
    Ano: ". $carro1->ano . "<br/> <hr>";


    //Imprimindo valos dos objetos (carro2) acima:
    echo "Carro ". $carro2->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro2->fabricante . "<br/>
    Modelo:". $carro2->modelo. "<br/>
    de Cor:". $carro2->cor . "<br/>
    Ano: ". $carro2->ano . "<br/> <hr>";

    //Imprimindo valos dos objetos (carro3) acima:
    echo "Carro ". $carro3->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro3->fabricante . "<br/>
    Modelo:". $carro3->modelo. "<br/>
    de Cor:". $carro3->cor . "<br/>
    Ano: ". $carro3->ano . "<br/> <hr>";

    //Imprimindo valos dos objetos (carro4) acima:
    echo "Carro ". $carro4->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro4->fabricante . "<br/>
    Modelo:". $carro4->modelo. "<br/>
    de Cor:". $carro4->cor . "<br/>
    Ano: ". $carro4->ano . "<br/> <hr>";

    //Imprimindo valos dos objetos (carro5) acima:
    echo "Carro ". $carro5->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro5->fabricante . "<br/>
    Modelo:". $carro5->modelo. "<br/>
    de Cor:". $carro5->cor . "<br/>
    Ano: ". $carro5->ano . "<br/> <hr>";
?>