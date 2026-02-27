<?php
    $oyunlar=[
        ["oyun_adi"=>"MEDEA MATERIAL","resmin_adi"=>"oyun1.png","aciklama"=>"oyun 1","yazanin_adi"=>"Heiner Müller","cevirenin_adi"=>" Hilal Ceylan"],
        ["oyun_adi"=>"MUALLAK","resmin_adi"=>"oyun2.png","aciklama"=>"oyun 2","yazanin_adi"=>"Murat Taşkent","cevirenin_adi"=>"Çeviren Yok"],
        ["oyun_adi"=>"KÜÇÜK BİR İŞ İÇİN YAŞLI BİR PALYAÇO ARANIYOR","resmin_adi"=>"oyun3.png","aciklama"=>"oyun 3","yazanin_adi"=>"Matei Visniec ","cevirenin_adi"=>"Ahmet Güngören "],
        ["oyun_adi"=>"LYSISTRATA","resmin_adi"=>"oyun4.png","aciklama"=>"oyun 4","yazanin_adi"=>"Aristophanes","cevirenin_adi"=>"Azra Erhat & Sabahattin Eyüboğlu"]
    ];

    shuffle($oyunlar);
    $oyun_ad=$oyunlar[0]["oyun_adi"];
    $resim_ad=$oyunlar[0]["resmin_adi"];
    $aciklama_yazi=$oyunlar[0]["aciklama"];
    $yazanin_ad=$oyunlar[0]["yazanin_adi"];
    $ceviren_ad=$oyunlar[0]["cevirenin_adi"];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ödev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(135deg, #ba0f0f, #000000, #141dc8);
        }
        .card{
                background:#000000;
                color:#ffffff;
                box-shadow: 
                    -20px -20px 50px #141dc8,
                    20px 20px 50px #ba0f0f;
            }
    </style>
    
</head>
  <body>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card text-center">
                    <img src="res/<?=$resim_ad?>" class="card-img-top" width="100" alt="<?=$aciklama_yazi?>">
                    <div class="card-body">
                        <h2><?=$oyun_ad?></h2>
                        <p class="m-0"><b>Yazan: </b><?=$yazanin_ad?></p>
                        <p><b>Çeviren: </b><?=$ceviren_ad?></p>              
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>