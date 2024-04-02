<!DOCTYPE html>
<html lang="en-US" class="cmsmasters_html">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <link rel="pingback" href="https://eco-press.cmsmasters.net/xmlrpc.php" />
    <title>GenZdopeplanet</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Eco Press &raquo; Feed"
        href="https://eco-press.cmsmasters.net/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Eco Press &raquo; Comments Feed"
        href="https://eco-press.cmsmasters.net/comments/feed/" />
    <link rel="alternate" type="text/calendar" title="Eco Press &raquo; iCal Feed"
        href="https://eco-press.cmsmasters.net/events/?ical=1" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/eco-press.cmsmasters.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='layerslider-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/LayerSlider/assets/static/layerslider/css/layerslider.css?ver=7.9.10'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ls-user-css'
        href='https://eco-press.cmsmasters.net/wp-content/uploads/layerslider.custom.css?ver=1466407437' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ls-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Lato:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CIndie+Flower:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COswald:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'
        type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-events-pro-mini-calendar-block-styles-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-mini-calendar-block.min.css?ver=6.3.1'
        type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://eco-press.cmsmasters.net/wp-includes/css/dist/block-library/style.min.css?ver=6.4.3'
        type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--color-1: #000000;
            --wp--preset--color--color-2: #ffffff;
            --wp--preset--color--color-3: #717171;
            --wp--preset--color--color-4: #53d572;
            --wp--preset--color--color-5: #46c965;
            --wp--preset--color--color-6: #343434;
            --wp--preset--color--color-7: #f8f8f8;
            --wp--preset--color--color-8: #dfdfdf;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public.css?ver=3.2.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr.css?ver=3.2.0'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='theme-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/style.css?ver=1.0.0' type='text/css'
        media='screen, print' />
    <link rel='stylesheet' id='theme-design-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/style.css?ver=1.0.0' type='text/css'
        media='screen, print' />
    <link rel='stylesheet' id='theme-adapt-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/adaptive.css?ver=1.0.0' type='text/css'
        media='screen, print' />
    <link rel='stylesheet' id='theme-retina-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/retina.css?ver=1.0.0' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='theme-icons-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/fontello.css?ver=1.0.0' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='theme-icons-custom-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/fontello-custom.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='animate-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/animate.css?ver=1.0.0' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='theme-cmsmasters-donations-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/cmsmasters-donations/css/cmsmasters-donations-style.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='theme-cmsmasters-donations-adaptive-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/cmsmasters-donations/css/cmsmasters-donations-adaptive.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='theme-cmsmasters-woo-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/cmsmasters-woo-style.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='theme-cmsmasters-woo-adaptive-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/cmsmasters-woo-adaptive.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='theme-cmsmasters-events-v2-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/cmsmasters-events-v2-style.css?ver=1.0.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='ilightbox-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/ilightbox.css?ver=2.2.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='ilightbox-skin-dark-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/ilightbox-skins/dark-skin.css?ver=2.2.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='theme-fonts-schemes-css'
        href='https://eco-press.cmsmasters.net/wp-content/uploads/cmsmasters_styles/eco-press.css?ver=1.0.0'
        type='text/css' media='screen' />
    <!--[if lte IE 9]>
<link rel='stylesheet' id='theme-fonts-css' href='https://eco-press.cmsmasters.net/wp-content/uploads/cmsmasters_styles/eco-press_fonts.css?ver=1.0.0' type='text/css' media='screen' />
<![endif]-->
    <!--[if lte IE 9]>
<link rel='stylesheet' id='theme-schemes-primary-css' href='https://eco-press.cmsmasters.net/wp-content/uploads/cmsmasters_styles/eco-press_colors_primary.css?ver=1.0.0' type='text/css' media='screen' />
<![endif]-->
    <!--[if lte IE 9]>
<link rel='stylesheet' id='theme-schemes-secondary-css' href='https://eco-press.cmsmasters.net/wp-content/uploads/cmsmasters_styles/eco-press_colors_secondary.css?ver=1.0.0' type='text/css' media='screen' />
<![endif]-->
    <!--[if lt IE 9]>
<link rel='stylesheet' id='theme-ie-css' href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/css/ie.css?ver=1.0.0' type='text/css' media='screen' />
<![endif]-->
    <link rel='stylesheet' id='google-fonts-css'
        href='//fonts.googleapis.com/css?family=Lato%3A400%2C400italic%2C700%2C700italic&#038;ver=6.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='eco-press-gutenberg-frontend-style-css'
        href='https://eco-press.cmsmasters.net/wp-content/themes/eco-press/gutenberg/css/frontend-style.css?ver=1.1.4'
        type='text/css' media='screen' />
    <script type="text/javascript" src="https://eco-press.cmsmasters.net/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script type="text/javascript" id="layerslider-utils-js-extra">
        /* <![CDATA[ */
        var LS_Meta = {
            "v": "7.9.10",
            "fixGSAP": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utils.js?ver=7.9.10"
        id="layerslider-utils-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=7.9.10"
        id="layerslider-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitions.js?ver=7.9.10"
        id="layerslider-transitions-js"></script>
    <script type="text/javascript" id="cookie-law-info-js-extra">
        /* <![CDATA[ */
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": [],
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "strictlyEnabled": ["necessary", "obligatoire"],
            "ccpaType": "gdpr",
            "js_blocking": "",
            "custom_integration": "",
            "triggerDomRefresh": "",
            "secure_cookies": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#FFF",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#000",
            "button_1_button_hover": "#000000",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#444",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#000",
            "button_3_button_hover": "#000000",
            "button_3_link_colour": "#fff",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#000",
            "button_4_button_hover": "#000000",
            "button_4_link_colour": "#fff",
            "button_4_as_button": "1",
            "button_7_button_colour": "#61a229",
            "button_7_button_hover": "#4e8221",
            "button_7_link_colour": "#fff",
            "button_7_as_button": "1",
            "button_7_new_win": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#000",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "1",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {
            "ajax_url": "https:\/\/eco-press.cmsmasters.net\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public.js?ver=3.2.0"
        id="cookie-law-info-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.6.1"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/eco-press.cmsmasters.net\/cart-2\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.6.1"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.6.1"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.6.1"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jsLibraries.min.js?ver=1.0.0" id="libs-js">
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jquery.iLightBox.min.js?ver=2.2.0"
        id="iLightBox-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_757899444cb28dfbb1582bc198d9ffdc",
            "fragment_name": "wc_fragments_757899444cb28dfbb1582bc198d9ffdc",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.6.1"
        id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
    <meta name="generator"
        content="Powered by LayerSlider 7.9.10 - Build Heros, Sliders, and Popups. Create Animations and Beautiful, Rich Web Content as Easy as Never Before on WordPress." />
    <!-- LayerSlider updates and docs at: https://layerslider.com -->
    <link rel="https://api.w.org/" href="https://eco-press.cmsmasters.net/wp-json/" />
    <link rel="alternate" type="application/json" href="https://eco-press.cmsmasters.net/wp-json/wp/v2/pages/60" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://eco-press.cmsmasters.net/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.6.1" />
    <link rel="canonical" href="https://eco-press.cmsmasters.net/contact-us/" />
    <link rel='shortlink' href='https://eco-press.cmsmasters.net/?p=60' />
    <link rel="alternate" type="application/json+oembed"
        href="https://eco-press.cmsmasters.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feco-press.cmsmasters.net%2Fcontact-us%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://eco-press.cmsmasters.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feco-press.cmsmasters.net%2Fcontact-us%2F&#038;format=xml" />
    <meta name="tec-api-version" content="v1">
    <meta name="tec-api-origin" content="https://eco-press.cmsmasters.net">
    <link rel="alternate" href="https://eco-press.cmsmasters.net/wp-json/tribe/events/v1/" />
    <style type="text/css">
        .header_top {
            height: 34px;
        }

        .header_mid {
            height: 98px;
        }

        .header_bot {
            height: 50px;
        }

        #page.cmsmasters_heading_after_header #middle,
        #page.cmsmasters_heading_under_header #middle .headline .headline_outer {
            padding-top: 98px;
        }

        #page.cmsmasters_heading_after_header.enable_header_top #middle,
        #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer {
            padding-top: 132px;
        }

        #page.cmsmasters_heading_after_header.enable_header_bottom #middle,
        #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer {
            padding-top: 148px;
        }

        #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle,
        #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
            padding-top: 182px;
        }

        @media only screen and (max-width: 1024px) {

            .header_top,
            .header_mid,
            .header_bot {
                height: auto;
            }

            .header_mid .header_mid_inner>div {
                height: 98px;
            }

            .header_bot .header_bot_inner>div {
                height: 50px;
            }

            #page.cmsmasters_heading_after_header #middle,
            #page.cmsmasters_heading_under_header #middle .headline .headline_outer,
            #page.cmsmasters_heading_after_header.enable_header_top #middle,
            #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer,
            #page.cmsmasters_heading_after_header.enable_header_bottom #middle,
            #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer,
            #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle,
            #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
                padding-top: 0 !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .header_mid .header_mid_inner>div,
            .header_bot .header_bot_inner>div {
                height: auto;
            }
        }

        .cmsmasters_homepage_campaign .owl-buttons {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            #page .cmsmasters_homepage_become_volunteer .cmsmasters_column>div {
                display: block;
                float: none;
                width: 100%;
                text-align: center;
            }

            #page .cmsmasters_homepage_become_volunteer .cmsmasters_column>div .cmsmasters_heading {
                text-align: center;
            }

            #page .cmsmasters_homepage_become_volunteer .cmsmasters_column>div+div {
                margin-top: 40px;
            }

            #page .cmsmasters_homepage_welcome_section .featured_block_inner {
                padding: 40px 20px;
            }

            #page .cmsmasters_homepage_icons>div {
                padding-top: 0;
            }
        }

        @media only screen and (max-width: 540px) {

            #page .cmsmasters_latest_news .cmsmasters_heading_wrap,
            #page .cmsmasters_fundraising_campaigns .cmsmasters_heading_wrap {
                margin-bottom: 30px;
            }
        }

        @media only screen and (min-width: 768px) {
            #page .cmsmasters_homepage_become_volunteer .cmsmasters_heading_wrap {
                padding-right: 20px;
            }
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_1 {
            background-color: rgba(255, 255, 255, 0);
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_1:hover {
            background-color: #84d553;
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_2 {
            background-color: rgba(255, 255, 255, 0);
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_2:hover {
            background-color: #84d553;
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_3 {
            background-color: rgba(255, 255, 255, 0);
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_3:hover {
            background-color: #84d553;
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_4 {
            background-color: rgba(255, 255, 255, 0);
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_4:hover {
            background-color: #84d553;
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_5 {
            background-color: rgba(255, 255, 255, 0);
        }

        #page .cmsmasters_social_icon_color.cmsmasters_social_icon_5:hover {
            background-color: #84d553;
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="https://eco-press.cmsmasters.net/wp-content/uploads/2016/06/icon-—-коjпия-60x60.png"
        sizes="32x32" />
    <link rel="icon" href="https://eco-press.cmsmasters.net/wp-content/uploads/2016/06/icon-—-коjпия.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://eco-press.cmsmasters.net/wp-content/uploads/2016/06/icon-—-коjпия.png" />
    <meta name="msapplication-TileImage"
        content="https://eco-press.cmsmasters.net/wp-content/uploads/2016/06/icon-—-коjпия.png" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
</head>

<body data-rsssl=1 class="page-template-default page page-id-60 theme-eco-press woocommerce-no-js tribe-no-js">

    <!--  Start Page -->
    <div id="page"
        class="csstransition chrome_only cmsmasters_liquid fixed_header cmsmasters_heading_under_header cmsmasters_header_overlaps_enabled cmsmasters_tribe_events_views_v2 cmsmasters_tribe_events_style_mode_tribe hfeed site">

        <!--  Start Main -->
        <div id="main">

            <!--  Start Header -->
            <header id="header">
                <div class="header_mid" data-height="98">
                    <div class="header_mid_outer">
                        <div class="header_mid_inner">
                            <div class="logo_wrap"><a href="https://eco-press.cmsmasters.net/" title="Eco Press"
                                    class="logo">
                                    <img src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/img/logo_overlaps.png"
                                        alt="Eco Press" />
                                    <img class="logo_retina"
                                        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/img/logo_overlaps_retina.png"
                                        alt="Eco Press" width="162" height="70" />
                                    <img class="logo_overlaps_scroll"
                                        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/img/logo.png"
                                        alt="Eco Press" />
                                    <img class="logo_retina logo_retina_overlaps_scroll"
                                        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/img/logo_retina.png"
                                        alt="Eco Press" width="162" height="70" />
                                </a>

                                <style type="text/css">
                                    .header_mid .header_mid_inner .logo_wrap {
                                        width: 226px;
                                    }
                                </style>

                                <style type="text/css">
                                    .header_mid_inner .logo img.logo_retina {
                                        width: 162px;
                                        max-width: 162px;
                                    }
                                </style>
                            </div>
                            <div class="header_donation_but_wrap">
                                <div class="header_donation_but_wrap_inner">
                                    <div class="header_donation_but"><a
                                            href="https://eco-press.cmsmasters.net/donate-confirmation/"
                                            class="cmsmasters_button"><span>Join Us!</span></a></div>
                                </div>
                            </div>
                            <div class="cmsmasters_dynamic_cart_wrap">
                                <div class="cmsmasters_dynamic_cart"><a href="javascript:void(0)"
                                        class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"></a>
                                    <div class="widget_shopping_cart_content"></div>
                                </div>
                                <div class="cmsmasters_dynamic_cart cmsmasters_dynamic_cart--mobile"><a
                                        href="https://eco-press.cmsmasters.net/cart-2/"
                                        class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"></a></div>
                            </div>
                            <div class="resp_mid_nav_wrap">
                                <div class="resp_mid_nav_outer"><a
                                        class="responsive_nav resp_mid_nav cmsmasters_theme_icon_resp_nav"
                                        href="javascript:void(0);"></a></div>
                            </div>
                            <!-- Start Navigation -->
                            <div class="mid_nav_wrap">
                                <nav>
                                    <div class="menu-primary-navigation-container">
                                        <ul id="navigation" class="mid_nav navigation">
                                            <li id="menu-item-10701"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7366 current_page_item menu-item-10701 menu-item-depth-0">
                                                <a href="{{ route('home') }}"><span class="nav_item_wrap"><span
                                                            class="nav_title">Home</span></span></a>
                                            </li>
                                            <li id="menu-item-10703"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10703 menu-item-depth-0">
                                                <a href="{{ route('about') }}"><span class="nav_item_wrap"><span
                                                            class="nav_title">About Us</span></span></a>
                                            </li>
                                            <li id="menu-item-10655"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10655 menu-item-depth-0">
                                                <a href="{{ route('contact') }}"><span class="nav_item_wrap"><span
                                                            class="nav_title">Contact us</span></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Finish Navigation -->
                        </div>
                    </div>
                </div>
            </header>
            <!--  Finish Header -->


            <!--  Start Middle -->
            <div id="middle">
                <style type="text/css">
                    .headline_outer {
                        background-image: url(https://eco-press.cmsmasters.net/wp-content/uploads/2015/04/contacts.jpg);
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-size: cover;
                    }

                    .headline_color {
                        background-color: ;
                    }

                    .headline_aligner,
                    .cmsmasters_breadcrumbs_aligner {
                        min-height: 485px;
                    }
                </style>
                <div class="headline cmsmasters_color_scheme_default">
                    <div class="headline_outer">
                        <div class="headline_color"></div>
                        <div class="headline_inner align_center">
                            <div class="headline_aligner"></div>
                            <div class="headline_text">
                                <h1 class="entry-title">Contact Us</h1>
                                <div class="cmsmasters_breadcrumbs">
                                    <div class="cmsmasters_breadcrumbs_inner"><a
                                            href="https://eco-press.cmsmasters.net/" class="cms_home">Home</a>
                                        <span class="breadcrumbs_sep"> / </span>
                                        <span>Contact Us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle_inner">
                    <div class="content_wrap fullwidth">

                        <!-- Start Content -->
                        <div class="middle_content entry"></div>
                    </div>
                    <style type="text/css">
                        #cmsmasters_row_660c3a58f1ba17_57745851 .cmsmasters_row_outer_parent {
                            padding-top: 100px;
                        }

                        #cmsmasters_row_660c3a58f1ba17_57745851 .cmsmasters_row_outer_parent {
                            padding-bottom: 100px;
                        }

                        #cmsmasters_heading_660c3a58f1d3f0_84012810 {
                            text-align: left;
                            margin-top: 0px;
                            margin-bottom: 10px;
                        }

                        #cmsmasters_heading_660c3a58f1d3f0_84012810 .cmsmasters_heading {
                            text-align: left;
                        }

                        #cmsmasters_heading_660c3a58f1d3f0_84012810 .cmsmasters_heading,
                        #cmsmasters_heading_660c3a58f1d3f0_84012810 .cmsmasters_heading a {
                            font-size: 48px;
                            font-weight: 300;
                            font-style: normal;
                        }

                        #cmsmasters_heading_660c3a58f1d3f0_84012810 .cmsmasters_heading_divider {}

                        #cmsmasters_heading_660c3a58f1de87_57742842 {
                            text-align: left;
                            margin-top: 0px;
                            margin-bottom: 20px;
                        }

                        #cmsmasters_heading_660c3a58f1de87_57742842 .cmsmasters_heading {
                            text-align: left;
                        }

                        #cmsmasters_heading_660c3a58f1de87_57742842 .cmsmasters_heading,
                        #cmsmasters_heading_660c3a58f1de87_57742842 .cmsmasters_heading a {
                            font-size: 20px;
                            font-weight: 300;
                            font-style: normal;
                        }

                        #cmsmasters_heading_660c3a58f1de87_57742842 .cmsmasters_heading_divider {}

                        #cmsmasters_divider_660c3a58f1e168_55534973 {
                            border-bottom-width: 0px;
                            border-bottom-style: solid;
                            padding-top: 30px;
                            margin-bottom: 0px;
                        }

                        #cmsmasters_heading_660c3a58f27242_22028097 {
                            text-align: left;
                            margin-top: 0px;
                            margin-bottom: 20px;
                        }

                        #cmsmasters_heading_660c3a58f27242_22028097 .cmsmasters_heading {
                            text-align: left;
                        }

                        #cmsmasters_heading_660c3a58f27242_22028097 .cmsmasters_heading,
                        #cmsmasters_heading_660c3a58f27242_22028097 .cmsmasters_heading a {
                            font-family: 'Lato';
                            font-weight: bold;
                            font-style: normal;
                        }

                        #cmsmasters_heading_660c3a58f27242_22028097 .cmsmasters_heading_divider {}

                        #cmsmasters_heading_660c3a58f27ea1_97667603 {
                            text-align: left;
                            margin-top: 15px;
                            margin-bottom: 20px;
                        }

                        #cmsmasters_heading_660c3a58f27ea1_97667603 .cmsmasters_heading {
                            text-align: left;
                        }

                        #cmsmasters_heading_660c3a58f27ea1_97667603 .cmsmasters_heading,
                        #cmsmasters_heading_660c3a58f27ea1_97667603 .cmsmasters_heading a {
                            font-family: 'Lato';
                            font-weight: bold;
                            font-style: normal;
                        }

                        #cmsmasters_heading_660c3a58f27ea1_97667603 .cmsmasters_heading_divider {}

                        #cmsmasters_icon_list_items_660c3a58f281b5_25379926 {
                            padding-left: 40px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f281b5_25379926 .cmsmasters_icon_list_item:before {
                            font-size: 20px;
                            left: -40px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f281b5_25379926 .cmsmasters_icon_list_item {
                            line-height: 30px;
                            padding: 0;
                        }

                        #cmsmasters_icon_list_items_660c3a58f281b5_25379926 .cmsmasters_icon_list_item:before {
                            line-height: 30px;
                            top: 0;
                        }

                        .cmsmasters_icon_list_items #cmsmasters_icon_list_item_660c3a58f28950_41178377:before {
                            color: #84d553;
                        }

                        #cmsmasters_divider_660c3a58f28c03_37882401 {
                            border-bottom-width: 1px;
                            border-bottom-style: solid;
                            padding-top: 10px;
                            margin-bottom: 10px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f28dd9_15952112 {
                            padding-left: 40px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f28dd9_15952112 .cmsmasters_icon_list_item:before {
                            font-size: 20px;
                            left: -40px;
                        }

                        .cmsmasters_icon_list_items #cmsmasters_icon_list_item_660c3a58f290e5_99995250:before {
                            color: #84d553;
                        }

                        #cmsmasters_divider_660c3a58f29300_18215748 {
                            border-bottom-width: 1px;
                            border-bottom-style: solid;
                            padding-top: 10px;
                            margin-bottom: 10px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f294a6_35181683 {
                            padding-left: 40px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f294a6_35181683 .cmsmasters_icon_list_item:before {
                            font-size: 20px;
                            left: -40px;
                        }

                        .cmsmasters_icon_list_items #cmsmasters_icon_list_item_660c3a58f29779_35915082:before {
                            color: #84d553;
                        }

                        #cmsmasters_divider_660c3a58f29974_38552055 {
                            border-bottom-width: 1px;
                            border-bottom-style: solid;
                            padding-top: 10px;
                            margin-bottom: 10px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f29b01_85369762 {
                            padding-left: 40px;
                        }

                        #cmsmasters_icon_list_items_660c3a58f29b01_85369762 .cmsmasters_icon_list_item:before {
                            font-size: 20px;
                            left: -40px;
                        }

                        .cmsmasters_icon_list_items #cmsmasters_icon_list_item_660c3a58f29dc4_03536085:before {
                            color: #84d553;
                        }

                        #cmsmasters_divider_660c3a58f29fb9_70508665 {
                            border-bottom-width: 1px;
                            border-bottom-style: solid;
                            padding-top: 10px;
                            margin-bottom: 10px;
                        }

                        #cmsmasters_row_660c3a58f2a386_28856145 .cmsmasters_row_outer_parent {
                            padding-top: 0px;
                        }

                        #cmsmasters_row_660c3a58f2a386_28856145 .cmsmasters_row_outer_parent {
                            padding-bottom: 0px;
                        }

                        #cmsmasters_row_660c3a58f2a386_28856145 .cmsmasters_row_inner.cmsmasters_row_fullwidth {
                            padding-left: 0%;
                        }

                        #cmsmasters_row_660c3a58f2a386_28856145 .cmsmasters_row_inner.cmsmasters_row_fullwidth {
                            padding-right: 0%;
                        }

                        #google_map_660c3a58f2b834_66013130 {
                            height: 455px;
                        }

                        #cmsmasters_row_660c3a58f2bab3_93976426 .cmsmasters_row_outer_parent {
                            padding-top: 100px;
                        }

                        #cmsmasters_row_660c3a58f2bab3_93976426 .cmsmasters_row_outer_parent {
                            padding-bottom: 0px;
                        }

                        #cmsmasters_row_660c3a590023e8_37135984 .cmsmasters_row_outer_parent {
                            padding-top: 20px;
                        }

                        #cmsmasters_row_660c3a590023e8_37135984 .cmsmasters_row_outer_parent {
                            padding-bottom: 30px;
                        }

                        #cmsmasters_icon_660c3a59004308_47858503 {
                            display: block;
                            text-align: center;
                        }

                        #cmsmasters_icon_660c3a59004308_47858503 .cmsmasters_simple_icon {
                            border-width: 0px;
                            width: 120px;
                            height: 120px;
                            font-size: 60px;
                            line-height: 120px;
                            text-align: center;
                            -webkit-border-radius: 50%;
                            border-radius: 50%;
                            color: #53d572;
                        }

                        #cmsmasters_icon_660c3a59004d09_82886989 {
                            display: block;
                            text-align: center;
                        }

                        #cmsmasters_icon_660c3a59004d09_82886989 .cmsmasters_simple_icon {
                            border-width: 0px;
                            width: 120px;
                            height: 120px;
                            font-size: 60px;
                            line-height: 120px;
                            text-align: center;
                            -webkit-border-radius: 50%;
                            border-radius: 50%;
                            color: #53d572;
                        }

                        #cmsmasters_icon_660c3a590054d9_04442374 {
                            display: block;
                            text-align: center;
                        }

                        #cmsmasters_icon_660c3a590054d9_04442374 .cmsmasters_simple_icon {
                            border-width: 0px;
                            width: 120px;
                            height: 120px;
                            font-size: 60px;
                            line-height: 120px;
                            text-align: center;
                            -webkit-border-radius: 50%;
                            border-radius: 50%;
                            color: #53d572;
                        }
                    </style>
                    <div id="cmsmasters_row_660c3a58f1ba17_57745851"
                        class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                        <div class="cmsmasters_row_outer_parent">
                            <div class="cmsmasters_row_outer">
                                <div class="cmsmasters_row_inner">
                                    <div class="cmsmasters_row_margin">
                                        <div class="cmsmasters_column two_third">

                                            <div id="cmsmasters_heading_660c3a58f1d3f0_84012810"
                                                class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h1 class="cmsmasters_heading">Contact Form</h1>
                                            </div>
                                            <div id="cmsmasters_heading_660c3a58f1de87_57742842"
                                                class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h3 class="cmsmasters_heading">Please fill in the form below to contact
                                                    us online. We’ll answer within 24 hours.</h3>
                                            </div>
                                            <div id="cmsmasters_divider_660c3a58f1e168_55534973" class="cl"></div>
                                            <div class="cmsmasters_contact_form">
                                                <div class="cmsmasters-form-builder">
                                                    <div class="cmsmasters_notice cmsmasters_notice_success cmsmasters_theme_icon_check success_box"
                                                        style="display:none;">
                                                        <div class="notice_icon"></div>
                                                        <div class="notice_content">
                                                            <p>Thank You! <br />Your message has been sent successfully.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function() {
                                                            jQuery('#form_164').validationEngine('attach', {
                                                                promptPosition: 'topRight',
                                                                scroll: false,
                                                                autoPositionUpdate: true,
                                                                showArrow: false
                                                            });
                                                            jQuery('#form_164 a#cmsmasters_164_formsend').click(function() {
                                                                jQuery('#form_164 .loading').animate({
                                                                    opacity: 1
                                                                }, 250);
                                                                if (jQuery('#form_164').validationEngine('validate')) {
                                                                    jQuery.post(
                                                                        'https://eco-press.cmsmasters.net/wp-content/plugins/cmsmasters-contact-form-builder/inc/form-builder-sendmail.php', {
                                                                            cmsmasters_name_3: jQuery('#cmsmasters_name_3').val(),
                                                                            cmsmasters_email_3: jQuery('#cmsmasters_email_3').val(),
                                                                            cmsmasters_message_2: jQuery('#cmsmasters_message_2').val(),
                                                                            contactemail: 'MTY0fCN8MTY0',
                                                                            formname: '164',
                                                                            fromname: 'wordpress'
                                                                        },
                                                                        function(data) {
                                                                            jQuery('#form_164 .loading').animate({
                                                                                opacity: 0
                                                                            }, 250);
                                                                            jQuery('#form_164').fadeOut('slow');
                                                                            document.getElementById('form_164').reset();
                                                                            jQuery('#form_164').parent().find('.box').hide();
                                                                            jQuery('#form_164').parent().find('.success_box').fadeIn('fast');
                                                                            jQuery('html, body').animate({
                                                                                scrollTop: jQuery('#form_164').offset().top - 140
                                                                            }, 'slow');
                                                                            jQuery('#form_164').parent().find('.success_box').delay(5000).fadeOut(1000,
                                                                                function() {
                                                                                    jQuery('#form_164').fadeIn('slow');
                                                                                });
                                                                        });
                                                                    return false;
                                                                } else {
                                                                    jQuery('#form_164 .loading').animate({
                                                                        opacity: 0
                                                                    }, 250);
                                                                    return false;
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                    <form action="#" method="post" id="form_164">

                                                        <div class="form_info cmsmasters_input one_half">
                                                            <label for="cmsmasters_name_3">Name <span
                                                                    class="color_2">*</span></label>
                                                            <div class="form_field_wrap">
                                                                <input type="text" name="cmsmasters_name_3"
                                                                    id="cmsmasters_name_3" value=""
                                                                    size="35" class="validate[required]" />
                                                            </div>
                                                        </div>
                                                        <div class="form_info cmsmasters_input one_half">
                                                            <label for="cmsmasters_email_3">Email <span
                                                                    class="color_2">*</span></label>
                                                            <div class="form_field_wrap">
                                                                <input type="text" name="cmsmasters_email_3"
                                                                    id="cmsmasters_email_3" value=""
                                                                    size="35" class="validate[required]" />
                                                            </div>
                                                        </div>
                                                        <div class="form_info cmsmasters_textarea one_first">
                                                            <label for="cmsmasters_message_2">Message <span
                                                                    class="color_2">*</span></label>
                                                            <div class="form_field_wrap">
                                                                <textarea name="cmsmasters_message_2" id="cmsmasters_message_2" cols="60" rows="10"
                                                                    class="validate[required]"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="cl"></div>
                                                        <div class="loading"></div>
                                                        <div class="form_info submit_wrap">
                                                            <a id="cmsmasters_164_formsend" class="cmsmasters_button"
                                                                href="#"><span>Send Message</span></a>
                                                        </div>
                                                        <div class="cl"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cmsmasters_column one_third">

                                            <div id="cmsmasters_heading_660c3a58f27242_22028097"
                                                class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h4 class="cmsmasters_heading">BEFORE CONTACTING US</h4>
                                            </div>
                                            <div class="cmsmasters_text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout he point
                                                    of using. Lorem Ipsum is that it has a more-or-less normal
                                                    distribution
                                                    of letters</p>
                                            </div>

                                            <div id="cmsmasters_heading_660c3a58f27ea1_97667603"
                                                class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h4 class="cmsmasters_heading">CONTACT INFO</h4>
                                            </div>
                                            <ul id="cmsmasters_icon_list_items_660c3a58f281b5_25379926"
                                                class="cmsmasters_icon_list_items cmsmasters_icon_list_type_list cmsmasters_icon_list_pos_left cmsmasters_color_type_border">
                                                <li id="cmsmasters_icon_list_item_660c3a58f28950_41178377"
                                                    class="cmsmasters_icon_list_item cmsmasters-icon-phone-4">+1 000
                                                    123 1234</li>
                                            </ul>
                                            <div id="cmsmasters_divider_660c3a58f28c03_37882401"
                                                class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_left">
                                            </div>
                                            <ul id="cmsmasters_icon_list_items_660c3a58f28dd9_15952112"
                                                class="cmsmasters_icon_list_items cmsmasters_icon_list_type_list cmsmasters_icon_list_pos_left cmsmasters_color_type_border">
                                                <li id="cmsmasters_icon_list_item_660c3a58f290e5_99995250"
                                                    class="cmsmasters_icon_list_item cmsmasters-icon-location-3">San
                                                    Francisco, CA 94102, US 1234</li>
                                            </ul>
                                            <div id="cmsmasters_divider_660c3a58f29300_18215748"
                                                class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_left">
                                            </div>
                                            <ul id="cmsmasters_icon_list_items_660c3a58f294a6_35181683"
                                                class="cmsmasters_icon_list_items cmsmasters_icon_list_type_list cmsmasters_icon_list_pos_left cmsmasters_color_type_border">
                                                <li id="cmsmasters_icon_list_item_660c3a58f29779_35915082"
                                                    class="cmsmasters_icon_list_item cmsmasters-icon-mail-3">
                                                    green-press@example.com</li>
                                            </ul>
                                            <div id="cmsmasters_divider_660c3a58f29974_38552055"
                                                class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_left">
                                            </div>
                                            <ul id="cmsmasters_icon_list_items_660c3a58f29b01_85369762"
                                                class="cmsmasters_icon_list_items cmsmasters_icon_list_type_list cmsmasters_icon_list_pos_left cmsmasters_color_type_border">
                                                <li id="cmsmasters_icon_list_item_660c3a58f29dc4_03536085"
                                                    class="cmsmasters_icon_list_item cmsmasters-icon-time">Everyday:
                                                    8:00am - 6:00pm</li>
                                            </ul>
                                            <div id="cmsmasters_divider_660c3a58f29fb9_70508665"
                                                class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cmsmasters_row_660c3a58f2a386_28856145"
                        class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                        <div class="cmsmasters_row_outer_parent">
                            <div class="cmsmasters_row_outer">
                                <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                    <div class="cmsmasters_row_margin">
                                        <div class="cmsmasters_column one_first">

                                            <script type="text/javascript">
                                                jQuery(document).ready(function() {
                                                    jQuery("#google_map_660c3a58f2b834_66013130").gMap({
                                                        address: "London",
                                                        maptype: "ROADMAP",
                                                        zoom: 14,
                                                        doubleClickZoom: true,
                                                        controls: {
                                                            panControl: true,
                                                            zoomControl: true,
                                                            mapTypeControl: true,
                                                            scaleControl: true,
                                                            streetViewControl: true,
                                                            overviewMapControl: true,
                                                        },
                                                        markers: [{
                                                            address: "London",
                                                        }, ]
                                                    });
                                                });
                                            </script>
                                            <div id="google_map_660c3a58f2b834_66013130" class="google_map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cmsmasters_row_660c3a58f2bab3_93976426"
                        class="cmsmasters_row cmsmasters_color_scheme_first cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                        <div class="cmsmasters_row_outer_parent">
                            <div class="cmsmasters_row_outer">
                                <div class="cmsmasters_row_inner">
                                    <div class="cmsmasters_row_margin">
                                        <div class="cmsmasters_column one_first">
                                            <div class="cmsmasters_sidebar sidebar_layout_14141414">
                                                <aside id="text-2" class="widget widget_text">
                                                    <h3 class="widgettitle">About Us</h3>
                                                    <div class="textwidget"><img fetchpriority="high"
                                                            decoding="async"
                                                            src="https://eco-press.cmsmasters.net/wp-content/uploads/2015/11/Depositphotos_26348281_original.png"
                                                            alt="Depositphotos_26348281_original" width="320"
                                                            height="215"
                                                            class="aligncenter size-full wp-image-11262"
                                                            srcset="https://eco-press.cmsmasters.net/wp-content/uploads/2015/11/Depositphotos_26348281_original.png 320w, https://eco-press.cmsmasters.net/wp-content/uploads/2015/11/Depositphotos_26348281_original-300x202.png 300w"
                                                            sizes="(max-width: 320px) 100vw, 320px" /><br> It is a long
                                                        established fact that a reader will be distracted by the
                                                        readable content of a when looking at its layout of using.</div>
                                                </aside>
                                                <aside id="text-3" class="widget widget_text">
                                                    <div class="textwidget">
                                                        <div class="widget_pages">
                                                            <h3 class="widgettitle">Campaigns</h3>
                                                            <ul>
                                                                <li><a href="#">Save the Earth</a></li>
                                                                <li><a href="#">Solution against Pollution</a>
                                                                </li>
                                                                <li><a href="#">Forest Animals Rescue</a></li>
                                                                <li><a href="#">Energy Revolution</a></li>
                                                                <li><a href="#">Plant a Plant Challenge</a></li>
                                                                <li><a href="#">Recycling is The Way</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                                <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                                                    <h3 class="widgettitle">Tags Cloud</h3>
                                                    <div class="tagcloud"><a
                                                            href="https://eco-press.cmsmasters.net/tag/charity/"
                                                            class="tag-cloud-link tag-link-65 tag-link-position-1"
                                                            style="font-size: 8pt;"
                                                            aria-label="charity (1 item)">charity</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/donation/"
                                                            class="tag-cloud-link tag-link-64 tag-link-position-2"
                                                            style="font-size: 15.636363636364pt;"
                                                            aria-label="donation (3 items)">donation</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/eco/"
                                                            class="tag-cloud-link tag-link-58 tag-link-position-3"
                                                            style="font-size: 22pt;"
                                                            aria-label="eco (6 items)">eco</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/ecology/"
                                                            class="tag-cloud-link tag-link-60 tag-link-position-4"
                                                            style="font-size: 22pt;"
                                                            aria-label="ecology (6 items)">ecology</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/environment/"
                                                            class="tag-cloud-link tag-link-62 tag-link-position-5"
                                                            style="font-size: 18.181818181818pt;"
                                                            aria-label="environment (4 items)">environment</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/nature/"
                                                            class="tag-cloud-link tag-link-61 tag-link-position-6"
                                                            style="font-size: 22pt;"
                                                            aria-label="nature (6 items)">nature</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/organic/"
                                                            class="tag-cloud-link tag-link-63 tag-link-position-7"
                                                            style="font-size: 12.581818181818pt;"
                                                            aria-label="organic (2 items)">organic</a>
                                                        <a href="https://eco-press.cmsmasters.net/tag/recycle/"
                                                            class="tag-cloud-link tag-link-59 tag-link-position-8"
                                                            style="font-size: 15.636363636364pt;"
                                                            aria-label="recycle (3 items)">recycle</a>
                                                    </div>
                                                </aside>
                                                <aside id="recent-posts-2" class="widget widget_recent_entries">
                                                    <h3 class="widgettitle">Recent Posts</h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2016/06/06/recycling-materials/">Recycling
                                                                Materials</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/27/change-your-habits/">Change
                                                                Your Habits</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/23/saving-your-future/">Saving
                                                                Your Future</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/20/the-ozone-layer/">The
                                                                Ozone Layer</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/15/eco-ideas/">Eco
                                                                Ideas</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/10/new-plants-developed/">New
                                                                Plants Developed</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/11/08/protect-the-environment/">Protect
                                                                the Environment</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://eco-press.cmsmasters.net/2015/10/28/modern-home-construction-technique/">Spring
                                                                Melody</a>
                                                        </li>
                                                    </ul>

                                                </aside>
                                                <div class="cl"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cmsmasters_row_660c3a590023e8_37135984"
                        class="cmsmasters_row cmsmasters_color_scheme_first cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                        <div class="cmsmasters_row_outer_parent">
                            <div class="cmsmasters_row_outer">
                                <div class="cmsmasters_row_inner">
                                    <div class="cmsmasters_row_margin">
                                        <div class="cmsmasters_column one_first">
                                            <div class="cmsmasters_sidebar sidebar_layout_131313">
                                                <aside id="text-4" class="widget widget_text">
                                                    <div class="textwidget">
                                                        <div id="cmsmasters_icon_660c3a59004308_47858503"
                                                            class="cmsmasters_icon_wrap"><span
                                                                class="cmsmasters_simple_icon cmsmasters-icon-phone-alt"></span>
                                                        </div>

                                                        <p style="text-align: center; font-size: 18px;">1-800-123-1234
                                                        </p>
                                                    </div>
                                                </aside>
                                                <aside id="text-5" class="widget widget_text">
                                                    <div class="textwidget">
                                                        <div id="cmsmasters_icon_660c3a59004d09_82886989"
                                                            class="cmsmasters_icon_wrap"><span
                                                                class="cmsmasters_simple_icon cmsmasters-icon-location-3"></span>
                                                        </div>

                                                        <p style="text-align: center; font-size: 18px;">Brooklyn, NY
                                                            10036, United States</p>
                                                    </div>
                                                </aside>
                                                <aside id="text-6" class="widget widget_text">
                                                    <div class="textwidget">
                                                        <div id="cmsmasters_icon_660c3a590054d9_04442374"
                                                            class="cmsmasters_icon_wrap"><span
                                                                class="cmsmasters_simple_icon cmsmasters-icon-mail-3"></span>
                                                        </div>

                                                        <p style="text-align: center; font-size: 18px;">
                                                            example@green-press.com</p>
                                                    </div>
                                                </aside>
                                                <div class="cl"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cl"></div>
                    <div class="content_wrap fullwidth">

                        <div class="middle_content entry"></div>
                        <!-- Finish Content -->



                    </div>
                </div>
            </div>


            <!--  Finish Middle -->
            <a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
        </div>
        <!--  Finish Main -->

        <!--  Start Footer -->
        <footer id="footer" class="cmsmasters_color_scheme_footer cmsmasters_footer_small">
            <div class="footer_inner">
                <div class="footer_inner_wrap">
                    <div class="footer_nav_wrap">
                        <nav>
                            <div class="menu-footer-navigation-container">
                                <ul id="footer_nav" class="footer_nav">
                                    <li id="menu-item-10692"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10692">
                                        <a href="https://eco-press.cmsmasters.net/about-us/">About the company</a></li>
                                    <li id="menu-item-10691"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10691">
                                        <a href="https://eco-press.cmsmasters.net/detailed-price-list/">Detailed
                                            pricing</a></li>
                                    <li id="menu-item-10690"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-60 current_page_item menu-item-10690">
                                        <a href="https://eco-press.cmsmasters.net/contact-us/"
                                            aria-current="page">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div> <span class="footer_copyright copyright">
                        <a class="privacy-policy-link" href="https://eco-press.cmsmasters.net/privacy-policy/"
                            rel="privacy-policy">Privacy Policy</a> / This is a sample website - cmsmasters © 2024 /
                        All Rights Reserved </span>
                </div>
            </div>
        </footer>
        <!--  Finish Footer -->


    </div>
    <span class="cmsmasters_responsive_width"></span>
    <!--  Finish Page -->


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true"><span>This website uses cookies to improve your experience.
            We'll assume you're ok with this, but you can opt-out if you wish. <a role='button'
                data-cli_action="accept" id="cookie_action_close_header"
                class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button wt-cli-accept-btn">Accept</a></span>
    </div>
    <div id="cookie-law-info-again" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy &amp; Cookies
            Policy</span></div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
        aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">This website uses cookies to improve your
                                            experience while you navigate through the website. Out of these, the cookies
                                            that are categorized as necessary are stored on your browser as they are
                                            essential for the
                                            working of basic functionalities of the website. We also use third-party
                                            cookies that help us analyze and understand how you use this website. These
                                            cookies will be stored in your browser only with your
                                            consent. You also have the option to opt-out of these cookies. But opting
                                            out of some of these cookies may affect your browsing experience.</div>
                                    </div>
                                    <a class="cli-privacy-readmore" aria-label="Show more" role="button"
                                        data-readmore-text="Show more" data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary </a>
                                        <div class="wt-cli-necessary-checkbox">
                                            <input type="checkbox" class="cli-user-preference-checkbox"
                                                id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <div class="wt-cli-cookie-description">
                                                Necessary cookies are absolutely essential for the website to function
                                                properly. This category only includes cookies that ensures basic
                                                functionalities and security features of the website. These cookies do
                                                not store any personal information. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="non-necessary" data-toggle="cli-toggle-tab">
                                            Non-necessary </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-non-necessary"
                                                class="cli-user-preference-checkbox" data-id="checkbox-non-necessary"
                                                checked='checked' />
                                            <label for="wt-cli-checkbox-non-necessary" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Non-necessary</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                                            <div class="wt-cli-cookie-description">
                                                Any cookies that may not be particularly necessary for the website to
                                                function and is used specifically to collect user personal data via
                                                analytics, ads, other embedded contents are termed as non-necessary
                                                cookies. It is mandatory to procure user consent
                                                prior to running these cookies on your website. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cli-modal-footer">
                    <div class="wt-cli-element cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0"
                                        data-cli-action="accept"
                                        class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                        &amp; ACCEPT</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all-->
    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script>
        /* <![CDATA[ */
        var tribe_l10n_datatables = {
            "aria": {
                "sort_ascending": ": activate to sort column ascending",
                "sort_descending": ": activate to sort column descending"
            },
            "length_menu": "Show _MENU_ entries",
            "empty_table": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "info_empty": "Showing 0 to 0 of 0 entries",
            "info_filtered": "(filtered from _MAX_ total entries)",
            "zero_records": "No matching records found",
            "search": "Search:",
            "all_selected_text": "All items on this page were selected. ",
            "select_all_link": "Select all pages",
            "clear_selection": "Clear Selection.",
            "pagination": {
                "all": "All",
                "next": "Next",
                "previous": "Previous"
            },
            "select": {
                "rows": {
                    "0": "",
                    "_": ": Selected %d rows",
                    "1": ": Selected 1 row"
                }
            },
            "datepicker": {
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ],
                "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Prev",
                "currentText": "Today",
                "closeText": "Done",
                "today": "Today",
                "clear": "Clear"
            }
        }; /* ]]> */
    </script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='cmsmasters_contact_form_style-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/cmsmasters-contact-form-builder/css/contact-form-style.css?ver=1.4.3'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://eco-press.cmsmasters.net/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.20'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu.js?ver=1.2.7"
        id="megamenu-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.2"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/eco-press.cmsmasters.net\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.2"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.20" defer
        async id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.20" defer
        async id="revmin-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.6.1"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "ajaxurl": "https:\/\/eco-press.cmsmasters.net\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.6.1"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" id="jLibs-js-extra">
        /* <![CDATA[ */
        var cmsmasters_jlibs = {
            "button_height": "-21"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jqueryLibraries.min.js?ver=1.0.0"
        id="jLibs-js"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/scrollspy.js?ver=1.0.0"
        id="cmsmasters-scrollspy-js"></script>
    <script type="text/javascript" id="script-js-extra">
        /* <![CDATA[ */
        var cmsmasters_script = {
            "theme_url": "https:\/\/eco-press.cmsmasters.net\/wp-content\/themes\/eco-press",
            "site_url": "https:\/\/eco-press.cmsmasters.net\/",
            "ajaxurl": "https:\/\/eco-press.cmsmasters.net\/wp-admin\/admin-ajax.php",
            "nonce_ajax_like": "0e9c51b128",
            "primary_color": "#53d572",
            "ilightbox_skin": "dark",
            "ilightbox_path": "vertical",
            "ilightbox_infinite": "0",
            "ilightbox_aspect_ratio": "1",
            "ilightbox_mobile_optimizer": "1",
            "ilightbox_max_scale": "1",
            "ilightbox_min_scale": "0.2",
            "ilightbox_inner_toolbar": "0",
            "ilightbox_smart_recognition": "0",
            "ilightbox_fullscreen_one_slide": "0",
            "ilightbox_fullscreen_viewport": "center",
            "ilightbox_controls_toolbar": "1",
            "ilightbox_controls_arrows": "0",
            "ilightbox_controls_fullscreen": "1",
            "ilightbox_controls_thumbnail": "1",
            "ilightbox_controls_keyboard": "1",
            "ilightbox_controls_mousewheel": "1",
            "ilightbox_controls_swipe": "1",
            "ilightbox_controls_slideshow": "0",
            "ilightbox_close_text": "Close",
            "ilightbox_enter_fullscreen_text": "Enter Fullscreen (Shift+Enter)",
            "ilightbox_exit_fullscreen_text": "Exit Fullscreen (Shift+Enter)",
            "ilightbox_slideshow_text": "Slideshow",
            "ilightbox_next_text": "Next",
            "ilightbox_previous_text": "Previous",
            "ilightbox_load_image_error": "An error occurred when trying to load photo.",
            "ilightbox_load_contents_error": "An error occurred when trying to load contents.",
            "ilightbox_missing_plugin_error": "The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jquery.script.js?ver=1.0.0" id="script-js">
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jquery.tweet.min.js?ver=1.3.1" id="twitter-js">
    </script>
    <script type="text/javascript"
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyDGKYF0r2-jl1P0aUeqiD5kBWdJt5nwWac&amp;ver=1.0.0" id="gMapAPI-js">
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jquery.gMap.min.js?ver=3.2.0" id="gMap-js">
    </script>
    <script type="text/javascript" id="cmsmasters-woo-script-js-extra">
        /* <![CDATA[ */
        var cmsmasters_woo_script = {
            "currency_symbol": "\u00a3",
            "thumbnail_image_width": "60",
            "thumbnail_image_height": "60"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/themes/eco-press/js/jquery.cmsmasters-woo-script.js?ver=1.0.0"
        id="cmsmasters-woo-script-js"></script>
    <script type="text/javascript" src="https://eco-press.cmsmasters.net/wp-includes/js/comment-reply.min.js?ver=6.4.3"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/cmsmasters-contact-form-builder/js/jquery.validationEngine.min.js?ver=2.6.2"
        id="cmsmastersValidation-js"></script>
    <script type="text/javascript" id="cmsmastersValidationLang-js-extra">
        /* <![CDATA[ */
        var cmsmasters_ve_lang = {
            "required": "* This field is required",
            "select_option": "* Please select an option",
            "required_checkbox": "* This checkbox is required",
            "min": "* Minimum",
            "allowed": " characters allowed",
            "max": "* Maximum",
            "invalid_email": "* Invalid email address",
            "invalid_number": "* Invalid number",
            "invalid_url": "* Invalid URL",
            "numbers_spaces": "* Numbers and spaces only",
            "letters_spaces": "* Letters and spaces only"
        };
        var cmsmasters_ve_lang = {
            "required": "* This field is required",
            "select_option": "* Please select an option",
            "required_checkbox": "* This checkbox is required",
            "min": "* Minimum",
            "max": "* Maximum",
            "allowed": " characters allowed",
            "invalid_email": "* Invalid email address",
            "invalid_number": "* Invalid number",
            "invalid_url": "* Invalid URL",
            "numbers_spaces": "* Numbers and spaces only",
            "letters_spaces": "* Letters and spaces only"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://eco-press.cmsmasters.net/wp-content/plugins/cmsmasters-contact-form-builder/js/jquery.validationEngine-lang.js?ver=1.4.3"
        id="cmsmastersValidationLang-js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=validateCaptcha&amp;ver=2.0.0"
        id="reCAPTCHA2-js"></script>
</body>

</html>
