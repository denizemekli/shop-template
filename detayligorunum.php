<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Market</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    
    <div class="container" style="margin-top: 8px;">
        <h1 style="font-weight: bold;font-size: 28px;">Photo Puzzle - Android Source Code<br></h1>
        <div class="row">
            <div class="col-auto col-sm-12 col-lg-8">
                <div class="card" style="background-color: #f4f4f4;"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/preview-xl.jpg">
                    <div class="row" style="margin-bottom: 8px;padding: 8px;">
                        <div class="col-12 col-sm-auto text-center" style="margin-top: 5px;"><button class="btn btn-primary" type="button" style="width: 171px;"><i class="fa fa-image"></i>&nbsp;Ekran Görüntüleri</button></div>
                        <div class="col text-center" style="margin-top: 5px;"><button class="btn btn-primary" type="button" style="width: 171px;"><i class="fa fa-star justify-content-center align-content-center align-self-center m-auto justify-content-xl-center align-items-xl-center"></i>&nbsp;Favorilere Ekle</button></div>
                    </div>
                </div>
                <div class="card d-block d-print-none d-lg-none d-xl-none align-items-center" style="background-color: #f4f4f4;padding: 10px;"><small class="text-center d-block" style="font-weight: bold;font-size: 30px;">50₺<br></small>
                    <div><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Ücretsiz destek</span><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Gelecekteki güncellemeler dahil</span>
                        <span
                            class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Kod kalite kontrolu yapıldı</span><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Ücretsiz destek</span></div>
                    <div>
                        <div class="modal" role="dialog" tabindex="-1" id="myModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col text-right"><a href="#" data-dismiss="modal"><i class="far fa-times-circle" data-dismiss="#myModal"></i></a></div>
                                        </div>
                                        <div class="row">
                                            <div class="col"><small class="form-text text-muted" style="font-size: 18px;">Lütfen tercih ettiğiniz ödeme yöntemini seçin</small>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <form method="post" action="odemegit.php">
                                                    <div class="form-group">
                                                        <div class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Kredi Kartı &nbsp; &nbsp;<img src="assets/img/mastercard.png"><img src="assets/img/visa.png"></label></div>
                                                        <div
                                                            class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Banka Hesabı &nbsp; &nbsp;<img src="assets/img/banka.png"></label></div>
                                                    <div
                                                        class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Papara &nbsp; &nbsp;<img src="assets/img/papara.png" height="30px"></label></div>
                                            <div
                                                class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Site Bakiyesi &nbsp; &nbsp;<img src="assets/img/cuzdan.png"></label></div>
                                    </div><button class="btn btn-success btn-block shadow" type="submit" style="width: 90%;margin: auto;height: 45px;">DEVAM</button></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="btn btn-success btn-block pulse animated" role="button" id="mybutton" style="margin-top: 10px;" href="#myModal" data-toggle="modal">Hemen AL</a></div>
    <div class="card d-block d-print-none d-lg-none d-xl-none" style="background-color: #f4f4f4;">
        <div class="row">
            <div class="col d-flex justify-content-center"><img class="align-self-center" src="assets/img/papara.png" style="height: 16px;margin-right: 10px;"><img src="assets/img/visa.png" style="height: 43px;margin-right: 10px;"><img src="assets/img/mastercard.png" style="height: 41px;"></div>
        </div>
    </div>
    <div class="card" style="background-color: #f4f4f4;">
        <div style="margin: 8px;"><strong style="font-size: 20px;color: #212529;">Açıklamalar</strong>
            <hr>
            <div><span><br><strong>Hooray! Finally, a cool party game has been created for your friendly company</strong>Want to take a party or evening with friends to a new level?Thanks to the game "Never Have I Ever!" it will become much more interesting and more fun.This is a classic game for the company should be included in the mandatory program of parties and other fun events!We divided the game into 4 different categories and selected over 170 of the best and funniest questions for the game "Never Have I Ever" So that your evening will become unforgettable.The game contains categories:<br>- "First meeting" in order to get to know each other better<br>- "Party with friends" will decorate your evening with friends<br>- "Romantic evening" prepared specifically to have fun with your soulmate<br>- "Fire party" for those who are not shy about revealing their secrets and storiesWhat are you waiting for? Uncover the secrets of your friends!<strong>LIVE&nbsp;DEMO:</strong><a href="https://play.google.com/store/apps/details?id=com.game.neverever">https://play.google.com/store/...</a><br><strong>IOS&nbsp;VERSION:</strong><a href="https://www.codester.com/items/12817/never-have-i-ever-ios-game-source-code">https://www.codester.com/items...</a><br><br></span></div>
        </div>
    </div>
    <div class="card" style="background-color: #f4f4f4;">
        <div style="margin: 8px;"><strong style="font-size: 20px;color: rgba(33,37,41,0.91);">Özellikler</strong>
            <hr>
            <div>
                <ul>
                    <li>Temiz kodlama</li>
                    <li>Kolay reskin</li>
                    <li>Ayrıntılı dokumanlar mevcut</li>
                    <li>Yüksek kaliteli dosyalar</li>
                    <li>Kotlin dili ile yazıldı</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card" style="background-color: #f4f4f4;">
        <div style="margin: 8px;"><strong style="font-size: 20px;color: rgba(33,37,41,0.91);">Gerekenler</strong>
            <hr>
            <div>
                <ul>
                    <li>MacOS veya Windows</li>
                    <li>Android cihaz veya Emulator</li>
                    <li>Android Studio</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card" style="background-color: #f4f4f4;">
        <div style="margin: 8px;"><strong style="font-size: 20px;color: rgba(33,37,41,0.91);">Talimatlar</strong>
            <hr>
            <div>
                <ul>
                    <li>Markete üklemeden önce reskin yapınız.</li>
                    <li>Admob kullanmadan önce paket adını değiştirin.</li>
                    <li>Dokümanları okuyun :)</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card d-none d-print-block d-lg-block d-xl-block align-items-center" style="background-color: #f4f4f4;padding: 10px;"><small class="text-center d-block" style="font-weight: bold;font-size: 30px;">50₺<br></small>
            <div><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Ücretsiz destek</span><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Gelecekteki güncellemeler dahil</span>
                <span
                    class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Kod kalite kontrolu yapıldı</span><span class="d-block"><i class="fas fa-check-circle" style="color: rgb(85,203,66);"></i>&nbsp; Ücretsiz destek</span></div>
            <div>
                <div class="modal" role="dialog" tabindex="-1" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col text-right"><a href="#" data-dismiss="modal"><i class="far fa-times-circle" data-dismiss="#myModal"></i></a></div>
                                </div>
                                <div class="row">
                                    <div class="col"><small class="form-text text-muted" style="font-size: 18px;">Lütfen tercih ettiğiniz ödeme yöntemini seçin</small>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <form method="post" action="odemegit.php">
                                            <div class="form-group">
                                                <div class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Kredi Kartı &nbsp; &nbsp;<img src="assets/img/mastercard.png"><img src="assets/img/visa.png"></label></div>
                                                <div
                                                    class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Banka Hesabı &nbsp; &nbsp;<img src="assets/img/banka.png"></label></div>
                                            <div
                                                class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Papara &nbsp; &nbsp;<img src="assets/img/papara.png" height="30px"></label></div>
                                    <div
                                        class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="formCheck-1" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="formCheck-1">Site Bakiyesi &nbsp; &nbsp;<img src="assets/img/cuzdan.png"></label></div>
                            </div><button class="btn btn-success btn-block shadow" type="submit" style="width: 90%;margin: auto;height: 45px;">DEVAM</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><a class="btn btn-success btn-block pulse animated" role="button" id="mybutton" style="margin-top: 10px;" href="#odememodal" data-toggle="modal">Hemen AL</a></div>
    <div class="card d-none d-print-block d-lg-block d-xl-block" style="background-color: #f4f4f4;">
        <div class="row">
            <div class="col d-flex justify-content-center"><img class="align-self-center" src="assets/img/papara.png" style="height: 16px;margin-right: 10px;"><img src="assets/img/visa.png" style="height: 43px;margin-right: 10px;"><img src="assets/img/mastercard.png" style="height: 41px;"></div>
        </div>
    </div>
    <div class="card align-items-center" style="background-color: #f4f4f4;">
        <div><img src="assets/img/iade.png" style="height: 214px;"></div>
    </div>
    <div class="card align-items-center" style="background-color: #f4f4f4;">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Kategori</td>
                        <td>Android / Mobil</td>
                    </tr>
                    <tr>
                        <td>Yayınlanma Tarihi</td>
                        <td>1 Aralık 2019</td>
                    </tr>
                    <tr>
                        <td>Son Güncelleme</td>
                        <td>2 Aralık 2019</td>
                    </tr>
                    <tr>
                        <td>Dosya Tipleri</td>
                        <td>.xml , .kt</td>
                    </tr>
                    <tr>
                        <td>Etiketler</td>
                        <td style="max-width: 132px;">Android,game</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card" style="background-color: #f4f4f4;">
        <div class="row" style="padding: 10px;">
            <div class="col-3"><img src="assets/img/kullanicilogo.png" style="width: 80px;height: 80px;"></div>
            <div class="col-8 d-xl-flex justify-content-xl-center align-items-xl-center"><strong class="d-inline" style="font-size: 22px;">Hangodai</strong></div>
            <div class="col"><button class="btn btn-primary btn-block" type="button" style="margin-top: 10px;">Tüm Ürünleri İncele</button></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="odememodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col text-right"><a data-dismiss="modal"><i class="far fa-times-circle"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col"><small class="form-text text-muted" style="font-size: 18px;">Lütfen tercih ettiğiniz ödeme yöntemini seçin</small>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form method="post" action="odemegit.php">
                                <div class="form-group">
                                    <div class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="kredikarti" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="kredikarti">Kredi Kartı &nbsp; &nbsp;<img src="assets/img/mastercard.png"><img src="assets/img/visa.png"></label></div>
                                    <div
                                        class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="banka" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="banka">Banka Hesabı &nbsp; &nbsp;<img src="assets/img/banka.png"></label></div>
                                <div
                                    class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="papara" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="papara">Papara &nbsp; &nbsp;<img src="assets/img/papara.png" height="30px"></label></div>
                        <div
                            class="form-check d-flex align-items-center" id="odemesecimsatir"><input class="form-check-input" type="radio" id="bakiye" style="margin: 0px;margin-right: 0px;margin-left: -20px;" name="kredikarti"><label class="form-check-label" id="odemesecimlabel" for="bakiye">Site Bakiyesi &nbsp; &nbsp;<img src="assets/img/cuzdan.png"></label></div>
                </div><button class="btn btn-success btn-block shadow" type="submit" style="width: 90%;margin: auto;height: 45px;">DEVAM</button></form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>