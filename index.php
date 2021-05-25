<?php
	require "crap.php";
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nicht so tolle Wetter App</title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="hero is-fullheight is-dark is-bold">

            <div class="hero-body">
                <div class="container has-text-centered">


                    <div class="content is-small">
                        <span> <?=$location?>,
                        </span>
                        <time datetime="1605675993"> <?=date("d.m.Y")?>
                        </time>
                    </div>
                    <div class="rel state">
                        <img src='img/<?=$state_0?>.svg' alt="Wetterzustand" width="250" title="Wetterzustand">
                        <p>
                            <span class="min-temp"> <?=$min_temp_0?>° C
                            </span>
                            <span class="max-temp"> <?=$max_temp_0?>° C
                            </span>
                        </p>
                    </div>

                    <div class="content is-large state">
                        <p class="is-size-1 is-uppercase has-text-weight-bold">
							<?php tagline($state_0);?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Slider -->

        <section class="section">
            <div class="container is-max-desktop">
                <div id="wetter-slider" class="keen-slider">
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/<?=$state_1?>.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/<?=$state_2?>.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/lc.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/t.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/hc.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/c.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- JS -->
        <script src="js/keenslider.min.js"></script>
        <script>
        var slider = new KeenSlider("#wetter-slider", {
            spacing: 10,
            slidesPerView: 1.2,
            centered: false,
            loop: false,
            mode: "free-snap",
            dragSpeed: 1,
            breakpoints: {
                "(min-width: 768px)": {
                    slidesPerView: 2.3,
                    mode: "free-snap",
                },
                "(min-width: 1200px)": {
                    slidesPerView: 3.3,
                    mode: "free-snap",
                },
            },
        })
        </script>

        <!-- Slider Ende-->

    </body>

</html>
