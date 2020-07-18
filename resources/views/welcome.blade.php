<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://translate.google.com/translate/releases/twsfe_w_20200622_RC00/r/css/webapp_ltr.css" rel="stylesheet">
    <link href="/translate.css" rel="stylesheet">

    <!-- Styles -->
    <style>
       

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>


    

            <div class="container">

                <div class="frame">
                    <div class="page tlid-homepage homepage translate-text">
                        <div class="input-button-container">
                            <div class="tlid-input-button-container focus-wrapper" role="tablist" tabindex="0">
                                <div class="tlid-input-button input-button header-button tlid-input-button-text text-icon" role="tab" tabindex="-1">
                                    <div class="text">Texte</div>
                                </div>
                                <div class="tlid-input-button input-button header-button tlid-input-button-docs documents-icon" role="tab" tabindex="-1">
                                    <div class="text">Documents</div>
                                </div>
                            </div>
                        </div>
                        <div class="homepage-content-wrap">
                            <div class="tlid-source-target main-header">
                                <div class="source-target-row">
                                    <div class="tlid-input input">
                                        <div class="tlid-language-bar ls-wrap">
                                            <div class="sl-wrap">
                                                <div class="sl-sugg">
                                                    <div class="ls-left-arrow"></div>
                                                    <div class="sl-sugg-button-container">
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-right" tabindex="0" aria-pressed="false" value="auto" style="user-select: none;">Détecter la langue</div>
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-left jfk-button-collapse-right jfk-button-checked" tabindex="0" aria-pressed="true" value="fr" id="sugg-item-fr" style="user-select: none;">Français</div>
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-left jfk-button-collapse-right" tabindex="0" aria-pressed="false" value="en" id="sugg-item-en" style="user-select: none;">Anglais</div>
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-left jfk-button-collapse-right" tabindex="0" aria-pressed="false" value="ar" id="sugg-item-ar" style="user-select: none;">Arabe</div>
                                                    </div>
                                                    <div class="ls-right-arrow"></div>
                                                </div>
                                                <div class="sugg-fade"></div>
                                                <div class="sl-more tlid-open-source-language-list" aria-label="Plus" role="button" tabindex="0"></div>
                                            </div>
                                            <div class="sl-selector lang_list">
                                                <div class="lang-btn"><a class="ls-select new-ls-select sl-button tlid-open-small-source-language-list" aria-label="Français" tabindex="0">Français</a></div>
                                            </div>
                                            <div class="swap-wrap">
                                                <div class="swap jfk-button-narrow jfk-button-standard jfk-button jfk-button-disabled" aria-label="Intervertir les langues (Cmd+Maj+S)" role="button" data-tooltip="Intervertir les langues (Cmd+Maj+S)" data-tooltip-align="b,c" aria-disabled="true" style="user-select: none;">
                                                    <div class="jfk-button-img"></div>
                                                </div>
                                            </div>
                                            <div class="tl-wrap">
                                                <div class="tl-sugg">
                                                    <div class="ls-left-arrow"></div>
                                                    <div class="sl-sugg-button-container">
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-right jfk-button-checked" tabindex="0" aria-pressed="true" value="fr" id="sugg-item-fr" style="user-select: none;">Français</div>
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-left jfk-button-collapse-right" tabindex="0" aria-pressed="false" value="sw" id="sugg-item-sw" style="user-select: none;">Swahili</div>
                                                        <div role="button" class="goog-inline-block jfk-button jfk-button-standard jfk-button-collapse-left jfk-button-collapse-right" tabindex="0" aria-pressed="false" value="en" id="sugg-item-en" style="user-select: none;">Anglais</div>
                                                    </div>
                                                    <div class="ls-right-arrow"></div>
                                                </div>
                                                <div class="sugg-fade"></div>
                                                <div class="tl-more tlid-open-target-language-list" aria-label="Plus" role="button" tabindex="0"></div>
                                            </div>
                                            <div class="tl-selector lang_list">
                                                <div class="lang-btn"><a class="ls-select new-ls-select tl-button tlid-open-small-target-language-list" aria-label="Français" tabindex="0">Français</a></div>
                                            </div>
                                        </div>
                                        <div class="source-wrap">
                                            <div class="input-full-height-wrapper tlid-input-full-height-wrapper">
                                                <div class="source-input">
                                                    <div id="input-wrap" class="tlid-input-area input-area less-padding">
                                                        <div class="gt-hl-layer" dir="" style="box-sizing: content-box; left: 0px; top: 0px; direction: ltr;"></div>
                                                        <textarea id="source" class="orig tlid-source-text-input goog-textarea" rows="1" spellcheck="false" autocapitalize="off" autocomplete="off" autocorrect="off" style="overflow: auto hidden; box-sizing: border-box; height: 70px; direction: ltr; padding-bottom: 18px;"></textarea>
                                                        <div class="text-dummy"></div>
                                                        <div id="gt-src-is" style="display: none; user-select: none; direction: ltr; text-align: left;" class="gt-is-mobile gt-is" role="menu">
                                                            <div id="gt-src-is-list" class="gt-is-ctr" style="user-select: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="source-header">
                                                        <div class="clear-wrap">
                                                            <div class="clear jfk-button-flat tlid-clear-source-text jfk-button" aria-label="Supprimer le texte" data-tooltip="Supprimer le texte" role="button" aria-hidden="true" data-tooltip-align="t,c" style="user-select: none; display: none;">
                                                                <div class="jfk-button-img"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tlid-source-transliteration-container source-transliteration-container transliteration-container">
                                                        <div class="tlid-transliteration-content transliteration-content full"></div>
                                                        <div class="tlid-show-more-link truncate-link" style="display:none">Afficher plus</div>
                                                        <div class="tlid-show-less-link truncate-link" style="display:none">Afficher moins</div>
                                                    </div>
                                                    <div id="spelling-correction" class="tlid-spelling-correction spelling-correction" style="display: none;"></div>
                                                    <div class="source-footer-wrap source-or-target-footer">
                                                        <div class="source-input-tools" id="gt-input-tool">
                                                            <div id="itamenu"><span class="ita-kd-inputtools-div">
                                                                    <div class="goog-container goog-container-vertical" tabindex="-1" style="user-select: none;"><a class="ita-kd-icon-button ita-kd-inputtool-icon ita-kd-small ita-kd-left" role="button" tabindex="0" data-tooltip="Activer le clavier virtuel" aria-label="Activer le clavier virtuel" data-tooltip-align="t,c" style="user-select: none;"><span class="ita-kd-img ita-icon-0 ita-kd-icon ita-kd-icon-span" style="user-select: none;"></span></a><a class="ita-kd-icon-button ita-kd-dropdown ita-kd-right" role="button" tabindex="0" aria-haspopup="true" data-tooltip="Sélectionner un outil de saisie" aria-label="Sélectionner un outil de saisie" data-tooltip-align="t,c" style="user-select: none;"><span class="ita-kd-img ita-kd-arrow ita-kd-icon-span" style="user-select: none;"></span></a></div>
                                                                </span></div>
                                                        </div>
                                                        <div class="character-count tlid-character-count">
                                                            <div class="cc-ctr normal">0/5000</div>
                                                            <div class="cc-msg" style="display: none;"></div>
                                                        </div>
                                                        <div class="source-footer">
                                                            <div class="speech-wrap source-or-target-footer-button left-positioned"><span class="speech-border"></span><span class="speech-border speech-background"></span>
                                                                <div id="gt-speech" class="speech-button goog-toolbar-button" aria-label="Activer la saisie vocale" data-tooltip-align="t,c" aria-pressed="false" role="button" aria-disabled="false" tabindex="0" data-tooltip="Activer la saisie vocale" style="user-select: none;"><span class="jfk-button-img"></span>
                                                                    <div class="jfk-bubble" role="alertdialog" aria-describedby="bubble-3" style="display: none;">
                                                                        <div class="jfk-bubble-content-id" id="bubble-3">
                                                                            <div>
                                                                                <div class="speech-mic">
                                                                                    <div class="gt-speech-l1"></div>
                                                                                    <div class="gt-speech-l2"></div>
                                                                                    <div class="gt-speech-l3"></div>
                                                                                    <div class="gt-speech-l4"></div>
                                                                                </div>
                                                                                <div class="speech-mic-label">Parlez maintenant</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="jfk-bubble-arrow-id jfk-bubble-arrow">
                                                                            <div class="jfk-bubble-arrowimplbefore"></div>
                                                                            <div class="jfk-bubble-arrowimplafter"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="src-tts left-positioned ttsbutton jfk-button-flat source-or-target-footer-button jfk-button jfk-button-disabled" aria-label="Écouter" data-tooltip="La synthèse vocale n'est pas disponible en " aria-pressed="false" role="button" data-tooltip-align="t,c" aria-hidden="true" aria-disabled="true" style="user-select: none; display: none;">
                                                                <div class="jfk-button-img"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="gt-ovfl" style="display: none;" class="snck ovfl">
                                            <div id="gt-ovfl-ctr" class="ovfl-ctr"><span id="gt-ovfl-msg" class="snck-msg" role="alert" aria-live="alert"></span><span id="gt-ovfl-xlt" class="ovfl-xlt goog-button" role="button" tabindex="0" style="user-select: none;">TRADUIRE DAVANTAGE</span></div>
                                        </div>
                                        <div id="gt-ntfcn" style="display: none;" class="snck ntfcn">
                                            <div id="gt-ntfcn-ctr" class="ntfcn-ctr"><span id="gt-ntfcn-msg" class="snck-msg" role="alert" aria-live="alert"></span></div>
                                        </div>
                                        <div id="gt-cmty" style="display: none;" class="snck cmty">
                                            <div id="gt-cmty-ctr" class="cmty-ctr"><span id="gt-cmty-msg" class="snck-msg" role="alert" aria-live="alert">Traduction validée par la communauté Google&nbsp;Traduction</span><span id="gt-cmty-btn" class="cmty-btn goog-button" role="button" tabindex="0" style="user-select: none;">Rejoindre</span></div>
                                        </div>
                                    </div>
                                    <div class="tlid-results-container results-container empty">
                                        <div class="error-placeholder placeholder"><span class="tlid-result-error"></span><span class="tlid-result-container-error-button translation-error-button">Réessayer</span></div><span class="empty-placeholder placeholder">Traduction</span><span class="translating-placeholder placeholder">Traduction en cours...</span>
                                        <div class="gendered-translations-header">Les traductions tiennent compte du genre grammatical. <a class="gendered-translations-learn-more" href="https://support.google.com/translate?p=gendered_translations&amp;hl=fr" target="_blank">En savoir plus</a></div>
                                    </div>
                                </div>
                                <div class="tlid-select-file-page-container"></div>
                            </div>
                            <div class="tlid-result-view cllist empty">
                                <div class="tlid-translation-error translation-error-box" style="display: none"><span class="tlid-translation-error-message translation-error"></span><span class="tlid-result-view-error-button translation-error-button">Réessayer</span></div>
                                <div class="cp-promo-wrapper"></div>
                                <div class="gt-lc gt-lc-mobile show-as-one-card" style="display: none">
                                    <div class="gt-cc-t" style=""><span class="gt-cc-tc" style=""><span class="gt-ct-text"></span><span class="gt-ct-translit" style="display:none"></span>
                                            <div class="gt-ct-tts goog-inline-block trans-listen-button goog-toolbar-button goog-toolbar-button-disabled" data-tooltip-align="t,c" aria-pressed="false" role="button" aria-hidden="true" aria-disabled="true" style="user-select: none; display: none;"><span class="jfk-button-img"></span></div>
                                        </span><span class="gt-cc-bc">
                                            <div class="goog-toolbar-button goog-inline-block prev-button" role="button" tabindex="0" style="user-select: none;"><span class="jfk-button-img"></span></div>
                                            <div class="goog-toolbar-button goog-inline-block next-button" role="button" tabindex="0" style="user-select: none;"><span class="jfk-button-img"></span></div>
                                            <div class="goog-toolbar-button goog-inline-block big-clear-button" role="button" tabindex="0" style="user-select: none;"><span class="jfk-button-img"></span></div>
                                        </span></div>
                                    <div class="gt-cc-top">
                                        <div class="gt-cd gt-cd-sos" tabindex="0" style="display: none;">
                                            <div class="gt-cd-t">
                                                <div class="gt-cd-tl"></div>
                                                <div class="gt-cd-tr"></div>
                                            </div>
                                            <div class="gt-cd-c"></div>
                                            <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                        </div>
                                    </div>
                                    <div class="gt-cc">
                                        <div class="gt-cc-l">
                                            <div class="gt-cc-l-i">
                                                <div class="gt-cd gt-cd-mbd gt-cd-baf" tabindex="0" style="display: none;">
                                                    <div class="gt-cd-t">
                                                        <div class="gt-cd-tl">
                                                            <div>Traductions de <span class="gt-card-ttl-txt" style="direction: ltr;"></span></div>
                                                        </div>
                                                        <div class="gt-cd-tr"></div>
                                                    </div>
                                                    <div class="gt-cd-c"></div>
                                                    <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                </div>
                                            </div>
                                            <div class="gt-cc-exp" style="display:none">
                                                <div class="cd-exp-ar"></div>
                                            </div>
                                        </div>
                                        <div class="gt-cc-r">
                                            <div class="gt-cc-r-i"><a target="_blank" style="display: none;">
                                                    <div class="gt-cd gt-cd-covid-19" tabindex="0">
                                                        <div class="gt-cd-t">
                                                            <div class="gt-cd-tl"></div>
                                                            <div class="gt-cd-tr"></div>
                                                        </div>
                                                        <div class="gt-cd-c"></div>
                                                        <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                    </div>
                                                </a>
                                                <div class="gt-cd gt-cd-mmd" tabindex="0" style="display: none;">
                                                    <div class="gt-cd-t">
                                                        <div class="gt-cd-tl">
                                                            <div>Définitions de <span class="gt-card-ttl-txt" style="direction: ltr;"></span></div>
                                                        </div>
                                                        <div class="gt-cd-tr"></div>
                                                    </div>
                                                    <div class="gt-cd-c"></div>
                                                    <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                </div>
                                                <div class="gt-cd gt-cd-mex" tabindex="0" style="display: none;">
                                                    <div class="gt-cd-t">
                                                        <div class="gt-cd-tl">
                                                            <div>Exemples de <span class="gt-card-ttl-txt" style="direction: ltr;"></span></div>
                                                        </div>
                                                        <div class="gt-cd-tr"></div>
                                                    </div>
                                                    <div class="gt-cd-c"></div>
                                                    <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                </div>
                                                <div class="gt-cd gt-cd-mss" tabindex="0" style="display: none;">
                                                    <div class="gt-cd-t">
                                                        <div class="gt-cd-tl">
                                                            <div>Synonymes de <span class="gt-card-ttl-txt" style="direction: ltr;"></span></div>
                                                        </div>
                                                        <div class="gt-cd-tr"></div>
                                                    </div>
                                                    <div class="gt-cd-c"></div>
                                                    <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                </div>
                                                <div class="gt-cd gt-cd-mrw" tabindex="0" role="listbox" style="display: none;">
                                                    <div class="gt-cd-t">
                                                        <div class="gt-cd-tl">Voir aussi</div>
                                                        <div class="gt-cd-tr"></div>
                                                    </div>
                                                    <div class="gt-cd-c"></div>
                                                    <div class="cd-expand-button" role="button" tabindex="0" style="display: none;"><span class="jfk-button-img"></span><span class="cd-expand-label"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-link"><a href="javascript:void(0);" class="tlid-send-feedback-link">Envoyer des commentaires</a></div>
                        </div>
                        <div class="gp-footer">
                            <div class="ft-icon-row">
                                <div class="ft-icon-ctr"><a class="ft-link" href="javascript:void(0);" onclick="_e(event, 'showhistory+2')">
                                        <div class="footer-icon-container ft-icon-img-hst">
                                            <div class="ft-icon-img-ctr">
                                                <div class="ft-icon-oval" id="ft-icon-img-hst"></div>
                                                <div class="ft-icon-notification"></div>
                                            </div>
                                            <div class="ft-icon-txt">Historique</div>
                                        </div>
                                    </a></div>
                                <div class="ft-icon-ctr"><a class="ft-link" href="javascript:void(0);" onclick="_e(event, 'showsaved+4')">
                                        <div class="footer-icon-container ft-icon-img-svd">
                                            <div class="ft-icon-img-ctr">
                                                <div class="ft-icon-oval" id="ft-icon-img-svd"></div>
                                                <div class="ft-icon-notification"></div>
                                            </div>
                                            <div class="ft-icon-txt">Enregistré</div>
                                        </div>
                                    </a></div>
                                <div class="ft-icon-ctr tlid-community-button"><a class="ft-link" href="javascript:void(0);" onclick="_e(event, 'showinstant+3')">
                                        <div class="footer-icon-container ft-icon-img-cmn">
                                            <div class="ft-icon-img-ctr">
                                                <div class="ft-icon-oval" id="ft-icon-img-cmn"></div>
                                                <div class="ft-icon-notification"></div>
                                            </div>
                                            <div class="ft-icon-txt">Communauté</div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>


                    <div class="page tlid-language-picker-page language-picker-page">
                        <div class="language-picker-wrapper">
                            <div class="tlid-language-list-toolbar language-list-toolbar">
                                <div class="tlid-language-list-back-button language-list-back-button jfk-button" aria-label="Fermer" role="button" tabindex="0" style="user-select: none;">
                                    <div class="backbutton-image language-picker-toolbar-image"></div>
                                    <div class="clear-image-black language-picker-toolbar-image"></div>
                                </div>
                                <div class="tlid-language-list-search-button language-list-search-button jfk-button" role="button" tabindex="0" title="Rechercher une langue" style="user-select: none;">
                                    <div class="tlid-language-list-label language-list-label"></div>
                                    <div class="searchbutton-image language-picker-toolbar-image"></div>
                                </div>
                            </div>
                            <div class="outer-wrap">
                                <div class="language-list">
                                    <div class="language-list-search-box" style="display: none;">
                                        <div class="back-image-black language-picker-toolbar-image jfk-button" role="button" tabindex="0" title="Fermer la recherche" aria-label="Fermer la recherche" style="user-select: none;"></div>
                                        <div class="clear-image-black language-picker-toolbar-image jfk-button" role="button" tabindex="0" title="Supprimer le texte" aria-label="Supprimer le texte" style="user-select: none; display: none;"></div>
                                        <div class="language_list_search_box_container"><input id="sl_list-search-box" type="text" oninput="_e(event, 'searchEdited+1', 'sl_list')" placeholder="Rechercher une langue"></div>
                                    </div>
                                    <div class="language_list_languages language_list_sl_list tw-ll-top">
                                        <div class="language-list-unfiltered-langs-sl_list">
                                            <div class="language_list_item_wrapper language_list_item_wrapper-auto  detect_language " onclick="_e(event, 'changeLanguage+0', 'sl_list_auto')" role="button" tabindex="0">
                                                <div class="language_list_item_icon sl_list_auto_checkmark"></div>
                                                <div class="language_list_item">Détecter la langue</div>
                                                <div class="detect_language_row_icon"></div>
                                            </div>
                                            <div class="language_list_section" style="">
                                                <div class="language_list_section_header">Langues récemment sélectionnées</div>
                                                <div class="language_list_item_wrapper language_list_item_wrapper-fr " onclick="_e(event, 'changeLanguage+0', 'sl_list_fr_r')" role="button" tabindex="0">
                                                    <div class="language_list_item_icon sl_list_fr_r_checkmark"></div>
                                                    <div class="language_list_item language_list_item_language_name">Français</div>
                                                </div>
                                                <div class="language_list_item_wrapper language_list_item_wrapper-en " onclick="_e(event, 'changeLanguage+0', 'sl_list_en_r')" role="button" tabindex="0">
                                                    <div class="language_list_item_icon sl_list_en_r_checkmark"></div>
                                                    <div class="language_list_item language_list_item_language_name">Anglais</div>
                                                </div>
                                            </div>
                                            <div class="language_list_section">
                                                <div class="language_list_section_header">Toutes les langues</div>


                                                <div class="language_list_item_wrapper language_list_item_wrapper-en " onclick="_e(event, 'changeLanguage+0', 'sl_list_en')" role="button" tabindex="0">
                                                    <div class="language_list_item_icon sl_list_en_checkmark"></div>
                                                    <div class="language_list_item language_list_item_language_name">Anglais</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="language_list_languages language_list_sl_list tw-ll-top" style="display: none;">

                                        <div class="language_list_item_wrapper language_list_item_wrapper-en " onclick="_e(event, 'changeLanguage+0', 'sl_list_en_s')" role="button" tabindex="0">
                                            <div class="language_list_item_icon sl_list_en_s_checkmark"></div>
                                            <div class="language_list_item language_list_item_language_name">Anglais</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="language-list">
                                    <div class="language-list-search-box" style="display: none;">
                                        <div class="back-image-black language-picker-toolbar-image jfk-button" role="button" tabindex="0" title="Fermer la recherche" aria-label="Fermer la recherche" style="user-select: none;"></div>
                                        <div class="clear-image-black language-picker-toolbar-image jfk-button" role="button" tabindex="0" title="Supprimer le texte" aria-label="Supprimer le texte" style="user-select: none; display: none;"></div>
                                        <div class="language_list_search_box_container"><input id="tl_list-search-box" type="text" oninput="_e(event, 'searchEdited+1', 'tl_list')" placeholder="Rechercher une langue"></div>
                                    </div>
                                    <div class="language_list_languages language_list_tl_list tw-ll-top">
                                        <div class="language-list-unfiltered-langs-tl_list">
                                            <div class="language_list_section" style="">
                                                <div class="language_list_section_header">Langues récemment sélectionnées</div>
                                                <div class="language_list_item_wrapper language_list_item_wrapper-fr " onclick="_e(event, 'changeLanguage+0', 'tl_list_fr_r')" role="button" tabindex="0">
                                                    <div class="language_list_item_icon tl_list_fr_r_checkmark"></div>
                                                    <div class="language_list_item language_list_item_language_name">Français</div>
                                                </div>

                                            </div>
                                            <div class="language_list_section">
                                                <div class="language_list_section_header">Toutes les langues</div>


                                                <div class="language_list_item_wrapper language_list_item_wrapper-en " onclick="_e(event, 'changeLanguage+0', 'tl_list_en')" role="button" tabindex="0">
                                                    <div class="language_list_item_icon tl_list_en_checkmark"></div>
                                                    <div class="language_list_item language_list_item_language_name">Anglais</div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="language_list_languages language_list_tl_list tw-ll-top" style="display: none;">


                                    <div class="language_list_item_wrapper language_list_item_wrapper-fr " onclick="_e(event, 'changeLanguage+0', 'tl_list_fr_s')" role="button" tabindex="0">
                                        <div class="language_list_item_icon tl_list_fr_s_checkmark"></div>
                                        <div class="language_list_item language_list_item_language_name">Français</div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         
        </div>

  
    </div>
</body>

</html>