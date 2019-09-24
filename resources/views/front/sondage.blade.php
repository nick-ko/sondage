<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Sondage</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--=== Gijgo CSS ===-->
    <link href="{{asset('front/assets/css/plugins/gijgo.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('front/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{asset('front/assets/css/reset.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset('front/assets/css/responsive.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">

</head>

<body class="loader-active">


<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">
                    <i class="fa fa-mobile"></i> +1 800 345 678
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">

                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
                <div class="col-lg-3 text-right">
                    <div class="header-social-icons">
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->
</header>
<!--== Header Area End ==-->

<!--== Fun Fact Area Start ==-->
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Fun Fact Area End ==-->

<!--== Choose Car Area Start ==-->
<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Questionnnaire de satisfaction</h2>
                    <span class="title-line"><i class="fa fa-question"></i></span>
                    <p>Pour repondre aux questions il vous suffit de cocher la bonne reponse.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <form action="{{url('/do-sondage')}}" method="post">
            @csrf
            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 age">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Votre age:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Moins de 18 ans:&nbsp;&nbsp;<input type="radio" value="Moins de 18 ans"  name="age" checked></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Entre 18 et 20 ans:&nbsp;&nbsp;<input type="radio" value="Entre 18 et 20 ans" name="age"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Entre 18 et 25 ans:&nbsp;&nbsp;<input type="radio" value="Entre 18 et 25 ans"  name="age"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Plus de 25 ans:&nbsp;&nbsp;<input type="radio" value="Plus de 25 ans" name="age"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 statut">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Votre statut:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Etudiante:&nbsp;&nbsp;<input type="radio" value="Etudiante"  name="status" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Mere au foyer:&nbsp;&nbsp;<input type="radio" value="Mere au foyer" name="status"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Cadre:&nbsp;&nbsp;<input type="radio" value="Cadre" name="status"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Gerante d'une entreprise:&nbsp;&nbsp;<input type="radio" value="Gerante d'une entreprise" name="status"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Autre:&nbsp;&nbsp;<input type="radio" name="status" value="autre"></span>
                                                </div>
                                                <label for="autre"> Precisez: </label>
                                                <input id="autre"  type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 enfant">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Avez-vous des enfants:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui" name="enfant" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="enfant"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                                <label for="">Si oui,Precisez le nombre:</label>
                                                <input type="number" class="form-control" name="enfant">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 telephone">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Votre numero de telephone:</h3>
                                                <br>
                                                <input type="number" class="form-control" name="telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 dure">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Combien de temps dure vos régles ?:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>3 jours:&nbsp;&nbsp;<input type="radio" value="3 jours"  name="dure" checked></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>4 jours:&nbsp;&nbsp;<input type="radio" value="4 jours" name="dure"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>5 jous ou plus:&nbsp;&nbsp;<input type="radio" value="5 jous ou plus"  name="dure"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 flux">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Quel est votre flux ?:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>leger:&nbsp;&nbsp;<input type="radio" value="leger"  name="flux" checked></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>important :&nbsp;&nbsp;<input type="radio" value="important" name="flux"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>tres important:&nbsp;&nbsp;<input type="radio" value="tres important"  name="flux"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 protection">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Quel type de protection utilisez-vous habituellement pendant vos regle ?:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Serviette:&nbsp;&nbsp;<input type="radio" value="Serviette"  name="protection" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Tampons:&nbsp;&nbsp;<input type="radio" value="Tampons" name="protection"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Pagne:&nbsp;&nbsp;<input type="radio" value="Pagne" name="protection"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Couche:&nbsp;&nbsp;<input type="radio" value="Couche" name="protection"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Autre:&nbsp;&nbsp;<input type="radio" value="autre" name="protection"></span>
                                                </div>
                                                <label for="">Precisez:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 change">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Combien de fois par jour changez-vous votre protection ?:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>2 fois:&nbsp;&nbsp;<input type="radio" value="2 fois"  name="change" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>3 fois :&nbsp;&nbsp;<input type="radio" value="3 fois" name="change"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span> 4 fois:&nbsp;&nbsp;<input type="radio" value="4 fois" name="change"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>5 fois ou plus:&nbsp;&nbsp;<input type="radio" value="5 fois ou plus" name="change"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 tache">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Vous tachez-vous pendant vos régles ?:</h3>
                                                <br>
                                                <h5>La journée:</h5>
                                                <div class="form-row">
                                                    <span>Parfois:&nbsp;&nbsp;<input type="radio" value="journee-parfois"  name="tache" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Souvent:&nbsp;&nbsp;<input type="radio" value="journee-souvent" name="tache"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Jamais:&nbsp;&nbsp;<input type="radio"  value="journee-jamais" name="tache"></span>
                                                </div>
                                                <h5>La nuit:</h5>
                                                <div class="form-row">
                                                    <span>Parfois:&nbsp;&nbsp;<input type="radio" value="nuit-parfois"  name="tache" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Souvent:&nbsp;&nbsp;<input type="radio" value="nuit-souvent" name="tache"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Jamais:&nbsp;&nbsp;<input type="radio" value="nuit-jamais" name="tache"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 budget">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Quel budget mettez-vous par mois dans l'achat de vos protections:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Moins de 1000 FCFA:&nbsp;&nbsp;<input type="radio" value="Moins de 1000 FCFA"  name="budget" checked></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Plus de 1000 FCFA:&nbsp;&nbsp;<input type="radio" value="Plus de 1000 FCFA" name="budget"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>2000 FCFA et plus:&nbsp;&nbsp;<input type="radio" value="2000 FCFA et plus" name="budget"></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 change-complement">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Combien de fois par jour changez-vous le complement ?:</h3>
                                                <br>
                                                <h5>La journée:</h5>
                                                <div class="form-row">
                                                    <span>1 fois:&nbsp;&nbsp;<input type="radio" value="journee - 1 fois"  name="change-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>2 fois:&nbsp;&nbsp;<input type="radio" value="journee - 2 fois" name="change-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>3 fois:&nbsp;&nbsp;<input type="radio" value="journee - 3 fois" name="change-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>4 fois et plus:&nbsp;&nbsp;<input type="radio" value="journee - 4 fois et plus" name="change-complement"></span>
                                                </div>
                                                <h5>La nuit:</h5>
                                                <div class="form-row">
                                                    <span>1 fois:&nbsp;&nbsp;<input type="radio" value="nuit- 1 fois" name="change-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>2 fois:&nbsp;&nbsp;<input type="radio" value="nuit- 2 fois" name="change-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>3 fois:&nbsp;&nbsp;<input type="radio" value="nuit- 3 fois" name="change-complement"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 serviette-complement">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Combien de fois par jour changez votre serviette avec le complement ?:</h3>
                                                <br>
                                                <h5>La journée:</h5>
                                                <div class="form-row">
                                                    <span>1 fois:&nbsp;&nbsp;<input type="radio" value="journee - 1 fois" name="serviette-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>2 fois:&nbsp;&nbsp;<input type="radio" value="journee - 2 fois" name="serviette-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>3 fois:&nbsp;&nbsp;<input type="radio" value="journee - 3 fois" name="serviette-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>4 fois et plus:&nbsp;&nbsp;<input type="radio" value="journee - 4 fois et plus" name="serviette-complement"></span>
                                                </div>
                                                <h5>La nuit:</h5>
                                                <div class="form-row">
                                                    <span>1 fois:&nbsp;&nbsp;<input type="radio"  value="nuit- 1 fois" name="serviette-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>2 fois ou plus :&nbsp;&nbsp;<input type="radio" value="nuit- 2 fois et plus" name="serviette-complement"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 tache-complement">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Vous etes-vous tachés avec le complement ?:</h3>
                                                <br>
                                                <h5>La journée:</h5>
                                                <div class="form-row">
                                                    <span>Parfois:&nbsp;&nbsp;<input type="radio" value="journee-parfois" name="tache-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Souvent:&nbsp;&nbsp;<input type="radio" value="journee-souvent" name="tache-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Jamais:&nbsp;&nbsp;<input type="radio" value="journee-jamais" name="tache-complement"></span>
                                                </div>
                                                <h5>La nuit:</h5>
                                                <div class="form-row">
                                                    <span>Parfois:&nbsp;&nbsp;<input type="radio" value="nuit-parfois" name="tache-complement" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Souvent:&nbsp;&nbsp;<input type="radio" value="nuit-souvent" name="tache-complement"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Jamais:&nbsp;&nbsp;<input type="radio" value="nuit-jamais" name="tache-complement"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 efficace">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Vous semble t-il efficace:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui"  name="efficace" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="efficace"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 simple">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Vous parait t-il simple à utiliser:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui"  name="simple" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="simple"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 confortable">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Le complement est-il confortable:</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui" name="confortable" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="confortable"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 securite">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Vous sentez-vous plus en securité qu'avant avec le complement :?</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui"  name="securite" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="securite"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 achat">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>L'acheteriez-vous :?</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio" value="oui"  name="achat" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="achat"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 recommandation">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Le recommanderiez-vous à vos amis, votre famille :?</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Oui:&nbsp;&nbsp;<input type="radio"  value="oui" name="recommandation" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Non:&nbsp;&nbsp;<input type="radio" value="non" name="recommandation"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 preference">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Preference :?</h3>
                                                <br>
                                                <div class="form-row">
                                                    <span>Epais:&nbsp;&nbsp;<input type="radio" value="epais" name="preference" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span>Mince:&nbsp;&nbsp;<input type="radio" value="mince" name="preference"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 derangement">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Est-ce que le complement vous a dérangé ? si oui, comment ?:</h3>
                                                <br>
                                                <textarea name="derangement" class="form-control" id="" cols="7" rows="7"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Single Popular Car End -->

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-12 col-md-6 modifier">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <br>
                                            </div>
                                            <div class="p-car-content">
                                                <h3>Que souhaiteriez-vous modifier pour avoir un produit qui correspond mieux a vos besoins?:</h3>
                                                <br>
                                                <textarea name="modifier" class="form-control" id="" cols="7" rows="7"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" style="cursor: pointer">Terminer</button>
                                    </div>
                                    <!-- Single Popular Car End -->

                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>

                            <div class="col-lg-3">
                                <h3>Questions:</h3>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Choose Filtering Menu Start -->
                                        <div class="home2-car-filter">
                                            <a href="#" data-filter=".age" class="active">1</a>
                                            <a href="#" data-filter=".telephone">4</a>
                                            <a href="#" data-filter=".protection">7</a>
                                            <a href="#" data-filter=".budget">10</a>
                                            <a href="#" data-filter=".tache-complement">13</a>
                                            <a href="#" data-filter=".confortable">15</a>
                                            <a href="#" data-filter=".recommandation">19</a>
                                            <a href="#" data-filter=".modifier">22</a>
                                        </div>
                                        <!-- Choose Filtering Menu End -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Choose Filtering Menu Start -->
                                        <div class="home2-car-filter">
                                            <a href="#" data-filter=".statut">2</a>
                                            <a href="#" data-filter=".dure">5</a>
                                            <a href="#" data-filter=".change">8</a>
                                            <a href="#" data-filter=".change-complement">11</a>
                                            <a href="#" data-filter=".efficace">14</a>
                                            <a href="#" data-filter=".securite">16</a>
                                            <a href="#" data-filter=".preference">20</a>
                                        </div>
                                        <!-- Choose Filtering Menu End -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Choose Filtering Menu Start -->
                                        <div class="home2-car-filter">
                                            <a href="#" data-filter=".enfant" >3</a>
                                            <a href="#" data-filter=".flux">6</a>
                                            <a href="#" data-filter=".tache">9</a>
                                            <a href="#" data-filter=".serviette-complement">12</a>
                                            <a href="#" data-filter=".simple">15</a>
                                            <a href="#" data-filter=".achat">18</a>
                                            <a href="#" data-filter=".derangement">21</a>
                                        </div>
                                        <!-- Choose Filtering Menu End -->
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </form>

    </div>
</section>
<!--== Choose Car Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="{{asset('front/assets/js/jquery-3.2.1.min.js')}}"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="{{asset('front/assets/js/jquery-migrate.min.js')}}"></script>

<!--=== Bootstrap Min Js ===-->
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<!--=== Gijgo Min Js ===-->
<script src="{{asset('front/assets/js/plugins/gijgo.js')}}"></script>

<!--=== Isotope Min Js ===-->
<script src="{{asset('front/assets/js/plugins/isotope.min.js')}}"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="{{asset('front/assets/js/plugins/owl.carousel.min.js')}}"></script>
<!--=== Waypoint Min Js ===-->
<script src="{{asset('front/assets/js/plugins/waypoints.min.js')}}"></script>
<!--=== CounTotop Min Js ===-->
<script src="{{asset('front/assets/js/plugins/counterup.min.js')}}"></script>

<!--=== Mian Js ===-->
<script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>

