<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alfatours</title>
        <link rel="icon" href="./images/favicon.png" sizes="32x32" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://fullcalendar.io/releases/daygrid/4.1.0/main.min.css">
        <link rel="stylesheet" href="https://fullcalendar.io/releases/core/4.1.0/main.min.css">
        <link rel="stylesheet" href="https://fullcalendar.io/releases/timegrid/4.1.0/main.min.css">
        <link href="css/animate.css" rel="stylesheet"/>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://fullcalendar.io/releases/core/4.1.0/main.min.js"></script>
        <script src="https://fullcalendar.io/releases/daygrid/4.1.0/main.min.js"></script>
        <script src="https://fullcalendar.io/releases/interaction/4.1.0/main.min.js"></script>
        <script src="https://fullcalendar.io/releases/timegrid/4.1.0/main.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <script src="../js/owl.carousel.js"></script>
        
    </head>
    <body>
        <div style="position: relative;height: 100vh;">

            <img class="background" src="../images/background.jpg">
            
            
                
               
                <div class="container-fluid" id="nav-default">
                    <div class="row top">
                    </div>
                </div> 
                <div class="container-fluid navbar" id="nav">
                    <div class="row top">
                        <div class="left col-md-4">
                            <div class="logo">
                                <img src="../images/logo.png">
                            </div>
                            
                        </div>
                        <div class="center col-md-4 text-center">
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                                <div id="arrow" class="menu-down">
                                    <p>Utazásaink</p>
                                    <img src="../images/arrow.gif">
                                </div>
                            </a>
                        </div>
                        <div class="right col-md-4 text-right">
                            <ul>
                                <li class="sub-menu-parent search text-right" tab-index="0">
                                    <form action="../keres">
                                        <button type="submit" style="background-color: white;border:none"><i class="fas fa-search"></i></i></button>
                                        <ul class="sub-menu">
                                            <input required type="text" class="sub-input" placeholder="Search.." name="search">
                                        </ul>
                                    </form>
                                </li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-user"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row bottom content collapse" id="collapseExample">
                        <ul>
                            <li>
                                <div>
                                    <i class="far fa-calendar-alt"></i>
                                    <p>Eseménynaptár</p>
                                </div>
                                
                            </li>
                            <li>
                                <div>
                                    <i class="fas fa-city"></i>
                                    <p>Városlátogatás</p>
                                </div>
                                
                            </li>
                            <li>
                                <div>
                                    <i class="fas fa-umbrella-beach"></i>
                                <p>Tengerpart</p>
                                </div>
                                
                            </li>
                            
                            <li>
                                <div>
                                    <i class="fas fa-hiking"></i>
                                    <p>Bakancsos Túrák</p>
                                </div>
                                
                            </li>
                            <li>
                                <div>
                                    <i class="fas fa-bus"></i>
                                    <p>Kirándulások</p>
                                </div>
                                
                            </li>
                            <li>
                                <div>
                                    <i class="fas fa-gifts"></i>
                                    <p>Ajándékutalvány</p>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                    
                </div>

                <div  class="container-fluid" >
                    <div class=" row content" style="background-color: transparent;">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="../images/Bled.jpg">
                                <h4>2 csodás nap Szlovéniában: Bled és Postojna cseppkőbarlang</h4>
                                <div class="icon">
                                    
                                    <i class="fas fa-suitcase"></i>
                                    <i class="fas fa-city"></i>
                                </div>
                                <div class="hidden">
                                        <p>Bled varázslatos világ. A hegyek között megbúvó kis város egyszerre őrzi a Monarchia h...</p>
                                    <h1>2019. máj. 18 - 2019. máj. 19 , 2 nap</h1>
                                     <button>Utazás Megtekintése</button>
                                </div> 
                            </div>
                            <div class="item">
                                <img src="../images/levendula.jpg">
                                <h4>Schloss Hof és a Kálnoki Levendulás</h4>
                                <div class="icon">
                                    <i class="fas fa-city"></i>
                                </div>
                                <div class="hidden">
                                    <p>Hamisítatlan osztrák kastély és illatozó színpompás levendula, ameddig a szem ellát. Tarts velünk júniusban a levendu...</p>
                                    <h1>2019. jún. 16 , 1 nap</h1>
                                    <button>Utazás Megtekintése</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../images/kocs.jpg">
                                <h4>Kócs-hegység egynapos bakancsos túra</h4>
                                <div class="icon">
                                    <i class="fas fa-hiking"></i>
                                    
                                </div>
                                <div class="hidden">
                                    <p>Kirándulásunk során a Prosiecka Dolina szurdokvölgyet járjuk be, felejthetetlen élmény...</p>
                                    <h1>2019. ápr. 27 , 1 nap</h1>
                                    <button>Utazás Megtekintése</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../images/selmec.jpg">
                                <h4>Selmeci-hegység bakancsos túra</h4> 
                                <div class="icon">
                                    <i class="fas fa-hiking"></i>
                                    
                                    <i class="fab fa-pied-piper-alt"></i>
                                </div>
                                <div class="hidden">
                                    <p>Túra és kulTúra egy napon! Tarts velünk és ismerjük meg együtt a Világörökség részét k...</p>
                                    <h1>2019. máj. 1 , 1 nap</h1>
                                    <button>Utazás Megtekintése</button>
                                </div>
                            </div>
                         </div>   
                    </div>
                </div>   
           
             
           <div class="container-fluid tervezo" style="height: 50%;">
                
                <div class="row content">
                    <div class="col-md-3" >
                        <div class="left">
                            
                                <div class="row">
                                    <h1>Utazástervezo</h1>
                                    <i class="fas fa-location-arrow"></i>
                                </div> 
                                <div class="row">
                                    <p>Magyarországi és küldöldi utak tervezése</p>
                                </div>  
                           
                              
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="right">
                            <div style="background-color: white; height: 100%">
                                <form  action=/" method="POST" class="mail"  name="footerform" id="footerform" onsubmit="return(tourvalidate());">  
                               <div class="form-group">
                                    <input  class="form-control" type="text" name="fstart" placeholder="Indulás helye"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="farrive" placeholder="Uticél"/>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" type="date" name="fdate" placeholder="Indulás ideje"/>
                                </div>                                          
                                
                                <div class="button">
                                    <div style="filter: grayscale(100%);" id="recaptcha" class="g-recaptcha" data-sitekey="..." ></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn" name="fsubmit">Küldés</button>
                                    </div>
                                </div>
                                
                                <div class="bg-danger text-center">
                                    <p id="message"></p>
                                </div>
                             </form>    
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="circle">
                            <a class="weatherwidget-io" href="https://forecast7.com/en/47d1619d50/hungary/" data-label_1="HUNGARY" data-label_2="WEATHER" data-theme="pure" >HUNGARY WEATHER</a>

                        </div>
                    </div>
                </div>
            </div>
                
        </div>
        <div class="container-fluid text-center" style="margin-top: 3rem; margin-bottom: 5rem;">
            
                <div class="row content" style= margin:auto;>
                    <div class="col-12">
                        <div class="hover">
                             <img class="butterfly" id="first" src="../images/butterfly.jpg" style="height: 88px;position: absolute;left: 36%;filter: grayscale();">
                            <div class="circleBase type1" id="fm1" onclick="choose('fm1');">
                                <h1>Megfizethető</h1>
                                
                                <i class="fas fa-coins"></i>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="row content" style="height: 25rem;" >
                    <div class="col-md-4 " style="margin: auto;">
                        <div class="hover">
                            <img class="butterfly" id="second" src="../images/butterfly.jpg" style="height: 88px;position: absolute;left: 6%;filter: grayscale();">
                            <div class="circleBase type1" id="fm2" onclick="choose('fm2');">
                                <h1>Környezettudatos</h1>
                                <i class="fab fa-pagelines"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"style="margin: auto;">
                        <div id="elerhetosegek">
                             <img src="../images/butterfly.jpg" style="height: 269px;position: absolute;left: 24%;opacity: 0.15;top: -129px;">
                            <h1 class="animated zoomIn" style="margin: auto; color: #779ecb">Miért az <img src="../images/about.jpg" style="height: 40px">?</h1>
                        </div>
                        
                    </div>
                    <div class="col-md-4"style="margin: auto;">
                        <div class="hover">
                            <img class="butterfly"  src="../images/butterfly.jpg" id="third" style="height: 88px;position: absolute;left: 6%;filter: grayscale();">
                            <div class="circleBase type1" id="fm3" onclick="choose('fm3');">
                                <h1>Megbizható</h1>
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row content">
                    
                    <div class="col-12" style="margin: auto;">
                        <div class="hover">
                            <img class="butterfly"  id="fourth" src="../images/butterfly.jpg" style="height: 88px;position: absolute;left: 36%;filter: grayscale();">
                            <div class="circleBase type1" id="fm4" onclick="choose('fm4');">
                                <h1>Vidám</h1>
                                
                                <i class="fas fa-smile-wink"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
            
        </div>
            
        <div class="container-fluid main" style=" background-image: url('../images/event.jpg');background-size: cover;">
                    <div class="row content" style="height: 100%;">
                        
                        <div class="col-12" style="margin: auto;margin-top: 6rem;margin-bottom: 1rem;">
                            <div class="left" style="border: 2px solid white;padding: 4px;background-color: transparent;">
                                <div style="padding: 7px;background: white;">
                                    <h1 style="position: absolute;left: auto;background-color: #81dafc;top: -75px;padding: 13px;z-index: 0;color: white;font-size: 41px;">Eseménynaptár</h1>
                                    <div id='calendar'></div>
                                </div>
                                
                            </div>     
                        </div>
                        
                    </div>
                </div>
            

             <div class="container-fluid aji">
                <div class="row content">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="butterfly-card" src="../images/butterfly.jpg">
                            <div class="flip-card">
                              <div class="flip-card-inner">
                                <div class="flip-card-front">
                                  <img class="card-image" src="../images/aji.png">
                                </div>
                                <div class="flip-card-back">
                                  <img class="card-image" src="../images/aji2.png">
                                </div>
                              </div>
                            </div>


                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <h4>Ajándékozz élményt!</h4>
                        <p>Legyél idén kreatív, és lepd meg szeretteidet valami különlegessel! A tárgyak elveszhetnek, tönkremehetnek és egyébként sem okoznak olyan örömöt, mint az az élmény, amit egy utazás okozhat. Az alfatours ajándékutalványok esetében te határozhatod meg milyen összeget szeretnél az illetőnek venni.  Előny más utalványokkal szemben, hogy személyes, mivel lehetőséged van nem csupán érték jellegű, bármire beváltható utalványokat venni, vehetsz egy konkrét utat is szeretteidnek.</p>
                        <ul>
                            <li><i class="fas fa-plane-departure"></i>Utalvány egy általunk kínált programra</li>
                            <li><i class="fas fa-plane-departure"></i>Érték szerinti ajándékutalvány (5.000 Ft, 10.000 Ft, 20.000 Ft vagy 50.000 Ft vagy más értékben)</li>
                        </ul>
                        <p>Az ajándékutalvány beváltható az Alfatours Kft. által szervezett bármely kirándulásra, lefoglalt szállásra. Az ajándékutalvány átruházható, egy utazásra több is felhasználható, akció esetén is érvényesíthető, készpénzre azonban nem váltható.</p>
                        <h5 class="text-center">Az ajándékutalványok a kiállítástól számított egy éven belül használhatók fel.</h5>
                    </div>
                </div>
                
             </div>
             <div class="container-fluid">
                 <div class="row content">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
             </div>

            <div class="container-fluid news">
                <div class="row content">
                    <h1>Hírek</h1>
                </div>
                <div class="row content">
                    <div class="col-md-3 ">
                        <a href="#">
                            <div class="news-body">
                                <div class="cover">
                                    <div class="title">
                                        <h3>A zöld alfatours</h3>
                                    </div>
                                    <div class="content">
                                        <p>Irodánk működése során mindig is fontos volt környezetünk védelme és szeretete. Többek között ez abban is megmutatkozik, hogy papírhasználat </p>
                                    </div>
                                    <div>
                                        <img class="news-img" src="images/news1.png" alt="News image cap">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>   
                    <div class="col-md-3">
                        <a href="#">
                            <div class="news-body">
                                <div class="cover">
                                    <div class="title">
                                        <h3>Köszönjük, hogy ismét hozzájárultatok környezetünk szebbé tételéhez</h3>
                                    </div>
                                    <div class="content">
                                        <p>
                                        2019. márciusában ismét faültetésre került sor a Pilisi Parkerdő Zrt. és az Alfatours jóvoltából. Még 2017-ben, tűz következtében pusztult el
                                        </p>
                                    </div>
                                    <div>
                                        <img class="news-img" src="images/news2.jpg" alt="News image cap">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>   
                    <div class=" col-md-3">
                        <a href="#">
                            <div class="news-body">
                                <div class="cover">
                                    <div class="title">
                                        <h3>Kirándulás receptre: A skót orvosok felírhatják betegeiknek a természetjárást</h3>
                                    </div>
                                    <div class="content">
                                        <p>2017-ben Skóciát a világ legszebb vidékének választották meg, azonban már nem csak emiatt irigyelhetjük a skótokat: tavaly október óta az</p>
                                    </div>
                                    <div>
                                        <img class="news-img" src="images/news3.jpeg" alt="News image cap">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-md-3">
                        <a href="#">
                            <div class="news-body">
                                <div class="cover">
                                    <div class="title">
                                        <h3>Függőhíd és panoráma alagút épül Horvátországban</h3>
                                    </div>
                                    <div class="content">
                                        <p>Függőhíd fog épülni a Krka kanyon felett, valamint egy panoráma alagutat is kialakítanak Primosten városában. A 462,5 m hosszú függő</p>
                                    </div>
                                    <div>
                                        <img class="news-img" src="images/news4.jpg" alt="News image cap">
                                    </div>
                                </div>
                                
                            </div>        
                        </a>
                    </div>  
                </div>

                
            </div>

            <div class="container-fluid hirlevel">
                <div class="background1"></div>
                <div class="row content">
                    
                <div class="col-md-6 left">
                    
                        <h1>Íratkozzon fel hírlevelünkre</h1>
                    
                    
                        <div>
                            <p>Adja meg email-címét, és értesítjük a friss híreiről, újdonságainkról,<br>valamint akciós ajánlatainkról!</p>
                        </div> 
                   
                    <div class="form right">
                        <form action="#" method="POST">
                            <div class="hirlevel-form">
                                <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputname" placeholder="NÉV">
                            </div>
                            <div class="form-group" style="margin-right: 0;margin-left: auto;">
                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="EMAIL">
                            </div>
                            </div>
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="btn">Ide kérem a hírlevelet!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    
                        <h1>Bejelentkezés</h1>
                    
                   
                        <div>Jelentkezzen be, hogy igénybe vehesse foglalási rendszerünket, valamint szolgáltatásinkat!</p>
                        </div> 
                    
                    <div class=" form">
                        <form action="#" method="POST">
                            <div class="hirlevel-form">
                                <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputname" placeholder="FELHASZNÁLÓNÉVS">
                            </div>
                            <div class="form-group" style="margin-right: 0;margin-left: auto;">
                                <input type="password" class="form-control" id="exampleInputEmail" placeholder="JELSZÓ">
                            </div>
                            </div>
                            <div class="form-group" align="center" style="display: inline-flex;">
                                <button type="submit" class="btn">Belentkezés</button> 
                                <a href="#" style="color: white; margin: auto;">Regisztrálok</a> 
                           
                        </form>
                    </div>
                </div>
                </div>
            </div>
                
            </div>

            <footer>
                <div class="container-fluid footer">
                    <div class="row content">
                        <div class="col-md-6">
                            <div class="row">
                                <div>
                                    <h1>Tedd fel kérdésed</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bg-danger text-center">
                                    <p id="message"></p>
                                </div>
                                <form  action="" method="POST" class="mail"  name="footerform" id="footerform" onsubmit="return(footervalidate());">  
                                   <div class="form-group" style="display: inline-flex; width: 100%">
                                        <input type="email" name="fname" placeholder="Teljes név" class="form-control col-6" style="max-width: 49%; margin: 0 auto 0 0;" />
                                        <input type="email" name="femail" placeholder="email cím" class="form-control col-6" style="max-width: 49%;"/>
                                    </div>                                           
                                    
                                    <div class="form-group fluid" style="display: inline-flex;width: 100%">
                                        <input type="text" name="ftel" placeholder="telefonszám" class="form-control col-6" pattern="\d{2}[\/]\d{3}[\-]\d{4}" title="Mobil telefonszám formátum: XX/XXX-XXXX, ahol az X helyén csak szám szerepelhet és az első két szám a körzetszám" style="max-width: 49%; margin: 0 auto 0 0;"/>
                                        <input type="subject" name="ftargy"  id="targy" placeholder="tárgy" class="form-control col-6" style="max-width: 49%; "/>
                                    
                                    </div>

                                    <div class="form-group">
                                        <textarea name="fuzenet" maxlength="5000" placeholder="Üzenet " class="form-control mail-message"></textarea>
                                    </div>
                                    <div class="button">
                                        <div id="recaptcha" class="g-recaptcha left" data-sitekey="..." ></div>
                                        <div class="form-group">
                                            <button type="submit" class="btn" name="fsubmit">Küldés</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>   
                        </div>
                        <div class="col-md-3 text-right">
                            
                                <img style="filter: grayscale(100%);" src="../images/pay.png">
                              
                        </div>
                        <div class="col-md-3">
                            
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/alfatourshetvege" data-width="250" data-height="250" data-hide-cover="true" data-show-facepile="true" data-show-posts="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1094688917220140&amp;container_width=263&amp;height=250&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Falfatourshetvege&amp;locale=hu_HU&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;width=250"><span><iframe name="f1215381743fa24" width="250px" height="250px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/page.php?app_id=1094688917220140&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df2f8775e87e022c%26domain%3Dwww.alfatours.hu%26origin%3Dhttp%253A%252F%252Fwww.alfatours.hu%252Ff1967888cd8726c%26relation%3Dparent.parent&amp;container_width=263&amp;height=250&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Falfatourshetvege&amp;locale=hu_HU&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 250px;" class=""></iframe></span></div>
                            
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col-12 text-left" style="margin-bottom: -40px;margin-top: 1rem;">
                            <p>ÁSZF – Utazási szerződés  |  
                                Jogi és adatvédelmi nyilatkozat  | 
                                Tájékoztatás  |
                                Jelentkezés menete</p>
                        </div>   
                    </div>
                    <div class="row content">
                        <div class="col-md-4 text-left">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-instagram"></i>
                            
                        </div>
                        <div class="col-md-4 text-center">
                            Minden jog fenn tartva, ©  Alfatours Kft. 2019
                        </div>
                        <div class="col-md-4 text-right">
                            <img src="../images/footer-logo.jpg">
                        </div>

                        
                    </div>
                </div>
            </footer>
            <div class="cookie container-fluid text-center fixed-bottom" id="cookie">
                <div class="row">
                    <div class="text-center">
                        <p>Ez a weboldal sütiket használ annak érdekében, hogy személyre szabott és interaktív módon tudjuk megjeleníteni Önnek a tartalmakat. A jelen Weboldal használatával Ön elfogadja, hogy az oldal sütiket használ. Kérjük, olvassa el <a href="files/sutiszabalyzat.pdf">Süti Szabályzatunkat</a>, amelyben további információkat olvashat a sütikről és azt is megtudhatja, hogyan tudja blokkolni vagy törölni őket.  <a  class="btn">Elfogadom</a></p>   
                    </div>
                </div>
            </div>
            <div class="contact" >
                  <ul style="list-style: none;">
                    <li class="contact-menu-parent" tab-index="0">
                       <a class="nav-link" href="#"><i class="fas fa-signature"></i></a>
                          <ul class="contact-menu">
                            <div class="border">
                                <p>
                                  Alfatours Kft.
                                </p>
                            </div>
                          </ul>
                    </li>
                    <li class="contact-menu-parent" tab-index="0">
                       <a class="nav-link" href="#"><i class="fas fa-map-marked"></i></a>
                          <ul class="contact-menu">
                            <div class="border">
                                <p>
                                  Budakeszi, Fő u. 211, 2092
                                </p>
                            </div>
                          </ul>
                    </li>
                    <li class="contact-menu-parent" tab-index="0">
                       <a class="nav-link" href="#"><i class="fas fa-phone"></i></a>
                          <ul class="contact-menu">
                            <div class="border">
                                <p>
                                    +36 (23) 656 300
                                </p>
                            </div>
                            
                          </ul>
                    </li>
                    <li class="contact-menu-parent" tab-index="0">
                       <a class="nav-link" href="#"><i class="fas fa-door-open"></i></a>
                          <ul class="contact-menu">
                            <div class="border">
                                <p>
                                  Minden hétköznap 10:00-16:00
                                </p>
                            </div>
                            
                          </ul>
                    </li>
                  </ul>
                </div>
            


    </body>
</html>

<script>
      

        
        var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
        function tourvalidate() {
    
    if (( document.footerform.farrive.value === "" ) && ( document.footerform.fstart.value === "") ){
        document.getElementById('message').innerHTML = "Nem töltötte ki  sem az indulás mezőt, sem az érkezés mezőt. <br/>A kereséshez kérem adja meg az adatokat!";
        document.footerform.farrive.focus() ;
        return false;
    }
    
    if( document.footerform.farrive.value === "" ){     
        document.getElementById('message').innerHTML = "Kérem töltse ki az uticél mezőt!";
        document.footerform.farrive.focus() ;
        return false;
    }
    
    if( document.footerform.fstart.value === "" ){
        document.getElementById('message').innerHTML = "Üresen hagyta az indulás helyét. Kérem írja le a pontos kereséshez!";
        document.footerform.fstart.focus() ;
        return false;
    }
    
};
$( "#arrow" ).click(function() {
  if ($(".center > a").hasClass("collapsed")) {
    $(this).removeClass('menu-down').addClass('menu-up');
  }else{
    $(this).removeClass('menu-up').addClass('menu-down');
}
  
    });

$(document).ready(function() {
        $(window).scroll(function() {
            if($(document).scrollTop() >= 1){
                $('#nav').addClass('shrink');
                $('#nav-default').addClass('nav-default');
               
                
            }else {
                $('#nav').removeClass('shrink');
                $('#nav-default').removeClass('nav-default');
            }
        });
    });

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
    timeZone: 'UTC',
    defaultView: 'dayGridMonth',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    editable: true,

    // JSON FEED INSTRUCTIONS
    //
    // 1. Open a new browser tab. Go to codepen.io
    //
    // 2. Create a new pen (Create > New Pen)
    //
    // 3. Paste your JSON into the JS pane
    //
    // 4. Hit the "Save" button
    //
    // 5. The page's URL will change. It will look like this:
    //    https://codepen.io/anon/pen/eWPBOx
    //
    // 6. Append ".js" to it. Will become like this:
    //    https://codepen.io/anon/pen/eWPBOx.js
    //
    // 7. Paste this URL below.
    //
    events: 'https://fullcalendar.io/demo-events.json'

    // 8. Then, enter a date for defaultDate that best displays your events.
    //
    // defaultDate: 'XXXX-XX-XX'
  });

  calendar.render();
});

jQuery(document).ready(function(){

            function detect_active(){
                // get active
                var get_active = $("#dp-slider .dp_item:first-child").data("class");
                $("#dp-dots li").removeClass("active");
                $("#dp-dots li[data-class="+ get_active +"]").addClass("active");
            }
            $("#dp-next").click(function(){
                var total = $(".dp_item").length;
                $("#dp-slider .dp_item:first-child").hide().appendTo("#dp-slider").fadeIn();
                $.each($('.dp_item'), function (index, dp_item) {
                    $(dp_item).attr('data-position', index + 1);
                });
                detect_active();

            });

            $("#dp-prev").click(function(){
                var total = $(".dp_item").length;
                $("#dp-slider .dp_item:last-child").hide().prependTo("#dp-slider").fadeIn();
                $.each($('.dp_item'), function (index, dp_item) {
                    $(dp_item).attr('data-position', index + 1);
                });

                detect_active();
            });

            $("#dp-dots li").click(function(){
                $("#dp-dots li").removeClass("active");
                $(this).addClass("active");
                var get_slide = $(this).attr('data-class');
                console.log(get_slide);
                $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
                $.each($('.dp_item'), function (index, dp_item) {
                    $(dp_item).attr('data-position', index + 1);
                });
            });


            $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function(){
                var get_slide = $(this).attr('data-class');
                console.log(get_slide);
                $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
                $.each($('.dp_item'), function (index, dp_item) {
                    $(dp_item).attr('data-position', index + 1);
                });

                detect_active();
            });
        });
      </script>
      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

$(document).ready(function() {  
   $("#slider").swiperight(function() {  
      $("#slider").carousel('prev');  
    });  
   $("#myCarousel").swipeleft(function() {  
      $("#slider").carousel('next');  
   });  
});

var choose = function(param) {
    
    
    if (param=="fm1") {
        $('#fm1').css({"background-color":"#81dafc","color":"white!important"});$('#first').css("opacity","1");$('#fm1>h1').css("display","none");$('#fm1>i').css("display","block");
        $('#fm2').css({"background-color":"white","color":"blue"});$('#second').css("opacity","0");$('#fm2>h1').css("display","block");$('#fm2>i').css("display","none");
        $('#fm3').css({"background-color":"white","color":"blue"});$('#third').css("opacity","0");$('#fm3>h1').css("display","block");$('#fm3>i').css("display","none");
        $('#fm4').css({"background-color":"white","color":"blue"});$('#fourth').css("opacity","0");$('#fm4>h1').css("display","block");$('#fm4>i').css("display","none");

        $("#elerhetosegek").html('<p class="animated zoomIn">Hogyan tud az αlfatours ennyire olcsó árakat elérni? Mert 4 évszakos utazási iroda. Nekünk nem kell egy nyári szezon allatt megkeresni az egész évi működéshez szükséges anyagi forrásokat. Buszainkat töltjük, hála a több tízezer visszatérő utasunknak. Nem 20-30 fő fizeti ki a teljes busz árát. Nem adunk ki többmillió forintos költségvetésű katalógusokat. Így ennek az árát sem terheljük rá utasainkra és a természetet is védjük. Nem költünk reklámra semmilyen formában sem. A legjobb ajánlási forma a visszatérő utas.</p>');
       
    }
    
    if (param=="fm2") {
        $('#fm2').css({"background-color":"#81dafc","color":"white!important"});$('#second').css("opacity","1");$('#fm2>h1').css("display","none");$('#fm2>i').css("display","block");
        $('#fm1').css({"background-color":"white","color":"blue"});$('#first').css("opacity","0");$('#fm1>h1').css("display","block");$('#fm1>i').css("display","none");
        $('#fm3').css({"background-color":"white","color":"blue"});$('#third').css("opacity","0");$('#fm3>h1').css("display","block");$('#fm3>i').css("display","none");
        $('#fm4').css({"background-color":"white","color":"blue"});$('#fourth').css("opacity","0");$('#fm4>h1').css("display","block");$('#fm4>i').css("display","none");

        $("#elerhetosegek").html('<p class="animated zoomIn">Ha neked is fontos a természet szeretete és védelme, mindig vedd figyelembe döntéseid során! Büszkén állítjuk, hogy papírhasználat nélkül működő iroda vagyunk. Az utaslistán kívül semmit sem nyomtatunk ki. Ebben a legmodernebb ügyviteli rendszer is segítségünkre van, így számláinkat is csak elektronikus módon állítjuk ki és küldjük ki utasainknak. Bakancsos túráink során a természet ismeretét, védelmét és szeretetét közvetítjük utasainknak. Minden bakancsos túrára befizető utas után fát ültetünk, köszönhetően a Pilisi Parkerdő Zrt-vel való megállapodásunknak. Így többezer facsemete került elültetésre évről-évre az alfatours jóvoltából.</p>');
     
    }
    
    if (param=="fm3") {
        $('#fm3').css({"background-color":"#81dafc","color":"white!important"});$('#third').css("opacity","1");$('#fm3>h1').css("display","none");$('#fm3>i').css("display","block");
        $('#fm2').css({"background-color":"white","color":"blue"});$('#second').css("opacity","0");$('#fm2>h1').css("display","block");$('#fm2>i').css("display","none");
        $('#fm1').css({"background-color":"white","color":"blue"});$('#first').css("opacity","0");$('#fm1>h1').css("display","block");$('#fm1>i').css("display","none");
        $('#fm4').css({"background-color":"white","color":"blue"});$('#fourth').css("opacity","0");$('#fm4>h1').css("display","block");$('#fm4>i').css("display","none");

        $("#elerhetosegek").html('<p class="animated zoomIn">2018. novembere óta cégünk Bisnode AAA (tripla A) tanúsítvánnyal rendelkezik, mellyel a magyar cégek csupán 0,63%-a bír és azt jelzi, hogy az alfatours Kft. a pénzügyileg legstabilabb cégek egyike.</p>');
       
    }
    if (param=="fm0") {
        $('#fm1').css("background-color","white");$('#fm2').css("background-color","white");
        $('#fm3').css("background-color","white");$('#fm4').css("background-color","white");
        $("#elerhetosegek").html('<img src="../images/butterfly.jpg" style="height: 269px;position: absolute;left: 24%;opacity: 0.15;z-index:1;top: -129px;"><h1 class="animated zoomIn" style="margin: auto; color:#779ecb;">Miért az <img src="../images/about.jpg" style="height: 40px">?</h1>');
       
    }
    
    if (param=="fm4") {
        $('#fm4').css({"background-color":"#81dafc","color":"white!important"});$('#fourth').css("opacity","1");$('#fm4>h1').css("display","none");$('#fm4>i').css("display","block");
        $('#fm2').css({"background-color":"white","color":"blue"});$('#second').css("opacity","0");$('#fm2>h1').css("display","block");$('#fm2>i').css("display","none");
        $('#fm1').css({"background-color":"white","color":"blue"});$('#first').css("opacity","0");$('#fm1>h1').css("display","block");$('#fm1>i').css("display","none");
        $('#fm3').css({"background-color":"white","color":"blue"});$('#third').css("opacity","0");$('#fm3>h1').css("display","block");$('#fm3>i').css("display","none");

        $("#elerhetosegek").html('<p class="animated zoomIn">Rengeteg pozitív visszajelzést kapunk, hogy az irodánk kiszolgálása gyors, kedves és udvarias. Jól megválogatott idegenvezető-túravezető-utaskísérő csapattal dolgozunk. Fiatalos csapatunk csak nekünk dolgozik, neked is tetszeni fognak személyesen. Sokszor mi szervezők is megtalálhatóak vagyunk egy-egy buszon, hiszen a helyszínen, utasainkkal beszélgetve lehet a legjobban utakat szervezni, nem az íróasztal mögött.Facebook oldalunkon minden kirándulásról fényképalbumot töltünk fel. Bele lehet tekinteni a kirándulások hangulatába, akár a készült videóinkon keresztül is. Sokszor betekintés adunk az irodai munka hétköznapjaiba is. Láthattok minket dolgozni, szülinapot ünnepelni vagy akár éppen tököt faragni</p>');
      
    }    

             
};
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      
    </script>
