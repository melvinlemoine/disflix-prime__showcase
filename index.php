<!DOCTYPE html>
<html lang="en">

<head>
    <title>DisFlix+prime</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/images/favicon.png" />

    <!-- OPEN GRAPH CONTENT -->

    <meta name="title" content="DisFlix+prime | WordPress theme creation exercise" />
    <meta property="og:site_name" content="DisFlix+prime" />
    <meta property="og:url" content="https://formation.melvin.studio/disflix+prime/" />

    <meta property="og:type" content="website" />

    <meta name="description" content="DisFlix+prime est un thème WordPress entièrement construit et intégré statique. L'objectif de cet exercice est de rendre le contenu dynamique." />
    <meta name="keywords" content="WordPress exercise theme creation development netflix disney plus prime video streaming" />
    <meta name="author" content="Melvin Lemoine" />

    <meta property="og:image" content="https://formation.melvin.studio/disflix+prime/assets/images/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="DisFlix+prime Open Graph image cover" />

    <!-- END OF OPEN GRAPH CONTENT -->

    <link rel="stylesheet" href="assets/css/amethyst.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/locale/fr.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://stats.melvin-lemoine.me/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '22']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript>
        <p><img src="https://stats.melvin-lemoine.me/matomo.php?idsite=22&amp;rec=1" style="border:0;" alt="" /></p>
    </noscript>
    <!-- End Matomo Code -->
</head>

<body class="home">

    <?php
    date_default_timezone_set('Europe/Paris');
    ?>

    <div class="box flex-c-xs v-space-between-xs wrap-xs flex-r-l nowrap-l space-between-l v-centered h-full">

        <div class="content w-full-xs w-half-l h-full-l flex-c h-start v-centered pl-10-l">

            <!-- <p class="content__ontitle uppercase light fs-2-xs">Support pratique de formation à la création de thème WordPress</p> -->

            <h1 class="content__title fs-10-xs fs-15-s"><span class="disney">Dis</span><span class="netflix">flix</span><span class="prime">+prime</span></h1>

            <p class="content__description text-justify fs-3-xs fs-4-s mb-10">
                Toutes les templates sont crées et remplies.
                <br />
                L'intégration est entièrement faite.
                <br />
                Créez les Custom Post Types, taxonomies, champs ACF, remplissez le site de contenu (fourni) puis rendez les templates dynamiques.
                <br />
                <br />
                <i>Pour apprendre à créer un thème WordPress, vous pouvez consulter <a href="https://wordpress.melvin-lemoine.me" target="_blank">ce support&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>.</i>
            </p>

            <div class="content__tags">
                <p class="content__tags_tag content__tags_tag--type br-normal">
                    <span class="content__tags_tag_icon">
                        <i class="fa-solid fa-file-zipper"></i>
                    </span>
                    ZIP
                </p>
                <p class="content__tags_tag content__tags_tag--update br-normal">
                    <span class="content__tags_tag_icon">
                        <i class="fa-solid fa-rotate"></i>

                    </span>
                    <span class="fw-medium" id="moment"></span>
                </p>

                <script>
                    document.getElementById('moment').innerHTML = moment("<?php echo date("d.m.Y H:i", filemtime('support.zip')); ?>",
                            "DD.MM.YYYY hh:mm")
                        .fromNow();
                </script>
            </div>

            <a class="content__button button br-normal has-icon mt-5-xs mt-3-l w-full-xs w-fit-s" href="support.zip" target="_blank" onclick="_paq.push(['trackEvent', 'Home', 'Support', 'Download']);">
                <span class="icon">
                    <i class="fa-solid fa-download"></i>
                </span>
                Télécharger&nbsp;le&nbsp;thème <span class="content__button_size bold fs-1 pv-1 ph-2 br-normal ml-2"><?php if (file_exists("./support.zip")) {
                                                                                                                            clearstatcache();
                                                                                                                            $filesize = filesize("./support.zip");
                                                                                                                            echo round($filesize / 1024 / 1024, 2) . "MO";
                                                                                                                        }; ?></span>
            </a>

        </div>

    </div>

</body>

</html>