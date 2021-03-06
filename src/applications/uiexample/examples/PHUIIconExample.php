<?php

final class PHUIIconExample extends PhabricatorUIExample {

  public function getName() {
    return 'Icons and Images';
  }

  public function getDescription() {
    return 'Easily render icons or images with links and sprites.';
  }

  private function listHalflings() {
    return array (
      'gh-glass',
      'gh-music',
      'gh-search',
      'gh-envelope',
      'gh-heart',
      'gh-star',
      'gh-star-empty',
      'gh-user',
      'gh-film',
      'gh-th-large',
      'gh-th',
      'gh-th-list',
      'gh-ok',
      'gh-remove',
      'gh-zoom-in',
      'gh-zoom-out',
      'gh-off',
      'gh-signal',
      'gh-cog',
      'gh-trash',
      'gh-home',
      'gh-file',
      'gh-time',
      'gh-road',
      'gh-download-alt',
      'gh-download',
      'gh-upload',
      'gh-inbox',
      'gh-play-circle',
      'gh-repeat',
      'gh-refresh',
      'gh-list-alt',
      'gh-lock',
      'gh-flag',
      'gh-headphones',
      'gh-volume-off',
      'gh-volume-down',
      'gh-volume-up',
      'gh-qrcode',
      'gh-barcode',
      'gh-tag',
      'gh-tags',
      'gh-book',
      'gh-bookmark',
      'gh-print',
      'gh-camera',
      'gh-font',
      'gh-bold',
      'gh-italic',
      'gh-text-height',
      'gh-text-width',
      'gh-align-left',
      'gh-align-center',
      'gh-align-right',
      'gh-align-justify',
      'gh-list',
      'gh-indent-left',
      'gh-indent-right',
      'gh-facetime-video',
      'gh-picture',
      'gh-pencil',
      'gh-map-marker',
      'gh-adjust',
      'gh-tint',
      'gh-edit',
      'gh-share',
      'gh-check',
      'gh-move',
      'gh-step-backward',
      'gh-fast-backward',
      'gh-backward',
      'gh-play',
      'gh-pause',
      'gh-stop',
      'gh-forward',
      'gh-fast-forward',
      'gh-step-forward',
      'gh-eject',
      'gh-chevron-left',
      'gh-chevron-right',
      'gh-plus-sign',
      'gh-minus-sign',
      'gh-remove-sign',
      'gh-ok-sign',
      'gh-question-sign',
      'gh-info-sign',
      'gh-screenshot',
      'gh-remove-circle',
      'gh-ok-circle',
      'gh-ban-circle',
      'gh-arrow-left',
      'gh-arrow-right',
      'gh-arrow-up',
      'gh-arrow-down',
      'gh-share-alt',
      'gh-resize-full',
      'gh-resize-small',
      'gh-plus',
      'gh-minus',
      'gh-asterisk',
      'gh-exclamation-sign',
      'gh-gift',
      'gh-leaf',
      'gh-fire',
      'gh-eye-open',
      'gh-eye-close',
      'gh-warning-sign',
      'gh-plane',
      'gh-calendar',
      'gh-random',
      'gh-comments',
      'gh-magnet',
      'gh-chevron-up',
      'gh-chevron-down',
      'gh-retweet',
      'gh-shopping-cart',
      'gh-folder-close',
      'gh-folder-open',
      'gh-resize-vertical',
      'gh-resize-horizontal',
      'gh-hdd',
      'gh-bullhorn',
      'gh-bell',
      'gh-certificate',
      'gh-thumbs-up',
      'gh-thumbs-down',
      'gh-hand-right',
      'gh-hand-left',
      'gh-hand-top',
      'gh-hand-down',
      'gh-circle-arrow-right',
      'gh-circle-arrow-left',
      'gh-circle-arrow-top',
      'gh-circle-arrow-down',
      'gh-globe',
      'gh-wrench',
      'gh-tasks',
      'gh-filter',
      'gh-briefcase',
      'gh-fullscreen',
      'gh-dashboard',
      'gh-paperclip',
      'gh-heart-empty',
      'gh-link',
      'gh-phone',
      'gh-pushpin',
      'gh-euro',
      'gh-usd',
      'gh-gbp',
      'gh-sort',
      'gh-sort-by-alphabet',
      'gh-sort-by-alphabet-alt',
      'gh-sort-by-order',
      'gh-sort-by-order-alt',
      'gh-sort-by-attributes',
      'gh-sort-by-attributes-alt',
      'gh-unchecked',
      'gh-expand',
      'gh-collapse',
      'gh-collapse-top',
      'gh-log_in',
      'gh-flash',
      'gh-log_out',
      'gh-new_window',
      'gh-record',
      'gh-save',
      'gh-open',
      'gh-saved',
      'gh-import',
      'gh-export',
      'gh-send',
      'gh-floppy_disk',
      'gh-floppy_saved',
      'gh-floppy_remove',
      'gh-floppy_save',
      'gh-floppy_open',
      'gh-credit_card',
      'gh-transfer',
      'gh-cutlery',
      'gh-header',
      'gh-compressed',
      'gh-earphone',
      'gh-phone_alt',
      'gh-tower',
      'gh-stats',
      'gh-sd_video',
      'gh-hd_video',
      'gh-subtitles',
      'gh-sound_stereo',
      'gh-sound_dolby',
      'gh-sound_5_1',
      'gh-sound_6_1',
      'gh-sound_7_1',
      'gh-copyright_mark',
      'gh-registration_mark',
      'gh-cloud',
      'gh-cloud_download',
      'gh-cloud_upload',
      'gh-tree_conifer',
      'gh-tree_deciduous',
    );
  }

  private function listFontAwesome() {
    return array(
      'fa-glass',
      'fa-music',
      'fa-search',
      'fa-envelope-o',
      'fa-heart',
      'fa-star',
      'fa-star-o',
      'fa-user',
      'fa-film',
      'fa-th-large',
      'fa-th',
      'fa-th-list',
      'fa-check',
      'fa-times',
      'fa-search-plus',
      'fa-search-minus',
      'fa-power-off',
      'fa-signal',
      'fa-cog',
      'fa-trash-o',
      'fa-home',
      'fa-file-o',
      'fa-clock-o',
      'fa-road',
      'fa-download',
      'fa-arrow-circle-o-down',
      'fa-arrow-circle-o-up',
      'fa-inbox',
      'fa-play-circle-o',
      'fa-repeat',
      'fa-refresh',
      'fa-list-alt',
      'fa-lock',
      'fa-flag',
      'fa-headphones',
      'fa-volume-off',
      'fa-volume-down',
      'fa-volume-up',
      'fa-qrcode',
      'fa-barcode',
      'fa-tag',
      'fa-tags',
      'fa-book',
      'fa-bookmark',
      'fa-print',
      'fa-camera',
      'fa-font',
      'fa-bold',
      'fa-italic',
      'fa-text-height',
      'fa-text-width',
      'fa-align-left',
      'fa-align-center',
      'fa-align-right',
      'fa-align-justify',
      'fa-list',
      'fa-outdent',
      'fa-indent',
      'fa-video-camera',
      'fa-picture-o',
      'fa-pencil',
      'fa-map-marker',
      'fa-adjust',
      'fa-tint',
      'fa-pencil-square-o',
      'fa-share-square-o',
      'fa-check-square-o',
      'fa-arrows',
      'fa-step-backward',
      'fa-fast-backward',
      'fa-backward',
      'fa-play',
      'fa-pause',
      'fa-stop',
      'fa-forward',
      'fa-fast-forward',
      'fa-step-forward',
      'fa-eject',
      'fa-chevron-left',
      'fa-chevron-right',
      'fa-plus-circle',
      'fa-minus-circle',
      'fa-times-circle',
      'fa-check-circle',
      'fa-question-circle',
      'fa-info-circle',
      'fa-crosshairs',
      'fa-times-circle-o',
      'fa-check-circle-o',
      'fa-ban',
      'fa-arrow-left',
      'fa-arrow-right',
      'fa-arrow-up',
      'fa-arrow-down',
      'fa-share',
      'fa-expand',
      'fa-compress',
      'fa-plus',
      'fa-minus',
      'fa-asterisk',
      'fa-exclamation-circle',
      'fa-gift',
      'fa-leaf',
      'fa-fire',
      'fa-eye',
      'fa-eye-slash',
      'fa-exclamation-triangle',
      'fa-plane',
      'fa-calendar',
      'fa-random',
      'fa-comment',
      'fa-magnet',
      'fa-chevron-up',
      'fa-chevron-down',
      'fa-retweet',
      'fa-shopping-cart',
      'fa-folder',
      'fa-folder-open',
      'fa-arrows-v',
      'fa-arrows-h',
      'fa-bar-chart-o',
      'fa-twitter-square',
      'fa-facebook-square',
      'fa-camera-retro',
      'fa-key',
      'fa-cogs',
      'fa-comments',
      'fa-thumbs-o-up',
      'fa-thumbs-o-down',
      'fa-star-half',
      'fa-heart-o',
      'fa-sign-out',
      'fa-linkedin-square',
      'fa-thumb-tack',
      'fa-external-link',
      'fa-sign-in',
      'fa-trophy',
      'fa-github-square',
      'fa-upload',
      'fa-lemon-o',
      'fa-phone',
      'fa-square-o',
      'fa-bookmark-o',
      'fa-phone-square',
      'fa-twitter',
      'fa-facebook',
      'fa-github',
      'fa-unlock',
      'fa-credit-card',
      'fa-rss',
      'fa-hdd-o',
      'fa-bullhorn',
      'fa-bell',
      'fa-certificate',
      'fa-hand-o-right',
      'fa-hand-o-left',
      'fa-hand-o-up',
      'fa-hand-o-down',
      'fa-arrow-circle-left',
      'fa-arrow-circle-right',
      'fa-arrow-circle-up',
      'fa-arrow-circle-down',
      'fa-globe',
      'fa-wrench',
      'fa-tasks',
      'fa-filter',
      'fa-briefcase',
      'fa-arrows-alt',
      'fa-users',
      'fa-link',
      'fa-cloud',
      'fa-flask',
      'fa-scissors',
      'fa-files-o',
      'fa-paperclip',
      'fa-floppy-o',
      'fa-square',
      'fa-bars',
      'fa-list-ul',
      'fa-list-ol',
      'fa-strikethrough',
      'fa-underline',
      'fa-table',
      'fa-magic',
      'fa-truck',
      'fa-pinterest',
      'fa-pinterest-square',
      'fa-google-plus-square',
      'fa-google-plus',
      'fa-money',
      'fa-caret-down',
      'fa-caret-up',
      'fa-caret-left',
      'fa-caret-right',
      'fa-columns',
      'fa-sort',
      'fa-sort-asc',
      'fa-sort-desc',
      'fa-envelope',
      'fa-linkedin',
      'fa-undo',
      'fa-gavel',
      'fa-tachometer',
      'fa-comment-o',
      'fa-comments-o',
      'fa-bolt',
      'fa-sitemap',
      'fa-umbrella',
      'fa-clipboard',
      'fa-lightbulb-o',
      'fa-exchange',
      'fa-cloud-download',
      'fa-cloud-upload',
      'fa-user-md',
      'fa-stethoscope',
      'fa-suitcase',
      'fa-bell-o',
      'fa-coffee',
      'fa-cutlery',
      'fa-file-text-o',
      'fa-building-o',
      'fa-hospital-o',
      'fa-ambulance',
      'fa-medkit',
      'fa-fighter-jet',
      'fa-beer',
      'fa-h-square',
      'fa-plus-square',
      'fa-angle-double-left',
      'fa-angle-double-right',
      'fa-angle-double-up',
      'fa-angle-double-down',
      'fa-angle-left',
      'fa-angle-right',
      'fa-angle-up',
      'fa-angle-down',
      'fa-desktop',
      'fa-laptop',
      'fa-tablet',
      'fa-mobile',
      'fa-circle-o',
      'fa-quote-left',
      'fa-quote-right',
      'fa-spinner',
      'fa-circle',
      'fa-reply',
      'fa-github-alt',
      'fa-folder-o',
      'fa-folder-open-o',
      'fa-smile-o',
      'fa-frown-o',
      'fa-meh-o',
      'fa-gamepad',
      'fa-keyboard-o',
      'fa-flag-o',
      'fa-flag-checkered',
      'fa-terminal',
      'fa-code',
      'fa-reply-all',
      'fa-mail-reply-all',
      'fa-star-half-o',
      'fa-location-arrow',
      'fa-crop',
      'fa-code-fork',
      'fa-chain-broken',
      'fa-question',
      'fa-info',
      'fa-exclamation',
      'fa-superscript',
      'fa-subscript',
      'fa-eraser',
      'fa-puzzle-piece',
      'fa-microphone',
      'fa-microphone-slash',
      'fa-shield',
      'fa-calendar-o',
      'fa-fire-extinguisher',
      'fa-rocket',
      'fa-maxcdn',
      'fa-chevron-circle-left',
      'fa-chevron-circle-right',
      'fa-chevron-circle-up',
      'fa-chevron-circle-down',
      'fa-html5',
      'fa-css3',
      'fa-anchor',
      'fa-unlock-alt',
      'fa-bullseye',
      'fa-ellipsis-h',
      'fa-ellipsis-v',
      'fa-rss-square',
      'fa-play-circle',
      'fa-ticket',
      'fa-minus-square',
      'fa-minus-square-o',
      'fa-level-up',
      'fa-level-down',
      'fa-check-square',
      'fa-pencil-square',
      'fa-external-link-square',
      'fa-share-square',
      'fa-compass',
      'fa-caret-square-o-down',
      'fa-caret-square-o-up',
      'fa-caret-square-o-right',
      'fa-eur',
      'fa-gbp',
      'fa-usd',
      'fa-inr',
      'fa-jpy',
      'fa-rub',
      'fa-krw',
      'fa-btc',
      'fa-file',
      'fa-file-text',
      'fa-sort-alpha-asc',
      'fa-sort-alpha-desc',
      'fa-sort-amount-asc',
      'fa-sort-amount-desc',
      'fa-sort-numeric-asc',
      'fa-sort-numeric-desc',
      'fa-thumbs-up',
      'fa-thumbs-down',
      'fa-youtube-square',
      'fa-youtube',
      'fa-xing',
      'fa-xing-square',
      'fa-youtube-play',
      'fa-dropbox',
      'fa-stack-overflow',
      'fa-instagram',
      'fa-flickr',
      'fa-adn',
      'fa-bitbucket',
      'fa-bitbucket-square',
      'fa-tumblr',
      'fa-tumblr-square',
      'fa-long-arrow-down',
      'fa-long-arrow-up',
      'fa-long-arrow-left',
      'fa-long-arrow-right',
      'fa-apple',
      'fa-windows',
      'fa-android',
      'fa-linux',
      'fa-dribbble',
      'fa-skype',
      'fa-foursquare',
      'fa-trello',
      'fa-female',
      'fa-male',
      'fa-gittip',
      'fa-sun-o',
      'fa-moon-o',
      'fa-archive',
      'fa-bug',
      'fa-vk',
      'fa-weibo',
      'fa-renren',
      'fa-pagelines',
      'fa-stack-exchange',
      'fa-arrow-circle-o-right',
      'fa-arrow-circle-o-left',
      'fa-caret-square-o-left',
      'fa-dot-circle-o',
      'fa-wheelchair',
      'fa-vimeo-square',
      'fa-try',
      'fa-plus-square-o',
    );
  }

  private function listColors() {
    return array(
      null,
      'bluegrey',
      'white',
      'red',
      'orange',
      'yellow',
      'green',
      'blue',
      'sky',
      'indigo',
      'violet',
      'lightgreytext',
      'lightbluetext',
    );
  }

  private function listTransforms() {
    return array(
      'ph-rotate-90',
      'ph-rotate-180',
      'ph-rotate-270',
      'ph-flip-horizontal',
      'ph-flip-vertical',
      'ph-spin',
    );
  }

  public function renderExample() {

    $colors = $this->listColors();
    $trans = $this->listTransforms();
    $glyphs = $this->listHalflings();
    $fas = $this->listFontAwesome();

    $gicons = array();
    foreach ($glyphs as $glyph) {
      $gicons[] = id(new PHUIIconView())
        ->addClass('phui-example-icon-name')
        ->setHalfling($glyph)
        ->setText($glyph);
    }
    $cicons = array();
    foreach ($colors as $color) {
      $cicons[] = id(new PHUIIconView())
        ->addClass('phui-example-icon-transform')
        ->setHalfling('gh-tag '.$color)
        ->setText(pht('gh-tag %s', $color));
    }
    $ficons = array();
    foreach ($fas as $fa) {

      $ficons[] = id(new PHUIIconView())
        ->addClass('phui-example-icon-name')
        ->setFontAwesome($fa)
        ->setText($fa);
    }

    $person1 = new PHUIIconView();
    $person1->setHeadSize(PHUIIconView::HEAD_MEDIUM);
    $person1->setHref('http://en.wikipedia.org/wiki/George_Washington');
    $person1->setImage(
      celerity_get_resource_uri('/rsrc/image/people/washington.png'));

    $person2 = new PHUIIconView();
    $person2->setHeadSize(PHUIIconView::HEAD_MEDIUM);
    $person2->setHref('http://en.wikipedia.org/wiki/Warren_G._Harding');
    $person2->setImage(
      celerity_get_resource_uri('/rsrc/image/people/harding.png'));

    $person3 = new PHUIIconView();
    $person3->setHeadSize(PHUIIconView::HEAD_MEDIUM);
    $person3->setHref('http://en.wikipedia.org/wiki/William_Howard_Taft');
    $person3->setImage(
      celerity_get_resource_uri('/rsrc/image/people/taft.png'));

    $person4 = new PHUIIconView();
    $person4->setHeadSize(PHUIIconView::HEAD_SMALL);
    $person4->setHref('http://en.wikipedia.org/wiki/George_Washington');
    $person4->setImage(
      celerity_get_resource_uri('/rsrc/image/people/washington.png'));

    $person5 = new PHUIIconView();
    $person5->setHeadSize(PHUIIconView::HEAD_SMALL);
    $person5->setHref('http://en.wikipedia.org/wiki/Warren_G._Harding');
    $person5->setImage(
      celerity_get_resource_uri('/rsrc/image/people/harding.png'));

    $person6 = new PHUIIconView();
    $person6->setHeadSize(PHUIIconView::HEAD_SMALL);
    $person6->setHref('http://en.wikipedia.org/wiki/William_Howard_Taft');
    $person6->setImage(
      celerity_get_resource_uri('/rsrc/image/people/taft.png'));

    $card1 = id(new PHUIIconView())
      ->setSpriteSheet(PHUIIconView::SPRITE_PAYMENTS)
      ->setSpriteIcon('visa')
      ->addClass(PHUI::MARGIN_SMALL_RIGHT);

    $card2 = id(new PHUIIconView())
      ->setSpriteSheet(PHUIIconView::SPRITE_PAYMENTS)
      ->setSpriteIcon('mastercard')
      ->addClass(PHUI::MARGIN_SMALL_RIGHT);

    $card3 = id(new PHUIIconView())
      ->setSpriteSheet(PHUIIconView::SPRITE_PAYMENTS)
      ->setSpriteIcon('paypal')
      ->addClass(PHUI::MARGIN_SMALL_RIGHT);

    $card4 = id(new PHUIIconView())
      ->setSpriteSheet(PHUIIconView::SPRITE_PAYMENTS)
      ->setSpriteIcon('americanexpress')
      ->addClass(PHUI::MARGIN_SMALL_RIGHT);

    $card5 = id(new PHUIIconView())
      ->setSpriteSheet(PHUIIconView::SPRITE_PAYMENTS)
      ->setSpriteIcon('googlecheckout');

    $actions = array(
      'settings-grey',
      'heart-grey',
      'tag-grey',
      'new-grey',
      'search-grey',
      'move-grey');
    $actionview = array();
    foreach ($actions as $action) {
      $actionview[] = id(new PHUIIconView())
        ->setSpriteSheet(PHUIIconView::SPRITE_ACTIONS)
        ->setSpriteIcon($action)
        ->setHref('#');
    }

    $tokens = array(
      'like-1',
      'like-2',
      'heart-1',
      'heart-2');
    $tokenview = array();
    foreach ($tokens as $token) {
      $tokenview[] =
        id(new PHUIIconView())
          ->setSpriteSheet(PHUIIconView::SPRITE_TOKENS)
          ->setSpriteIcon($token);
    }

    $logins = array(
      'Asana',
      'Dropbox',
      'Google',
      'Github');
    $loginview = array();
    foreach ($logins as $login) {
      $loginview[] =
        id(new PHUIIconView())
          ->setSpriteSheet(PHUIIconView::SPRITE_LOGIN)
          ->setSpriteIcon($login)
          ->addClass(PHUI::MARGIN_SMALL_RIGHT);
    }

    $layout_gicons = id(new PHUIBoxView())
      ->appendChild($gicons)
      ->addMargin(PHUI::MARGIN_LARGE);

    $layout_cicons = id(new PHUIBoxView())
      ->appendChild($cicons)
      ->addMargin(PHUI::MARGIN_LARGE);

    $layout_fa = id(new PHUIBoxView())
      ->appendChild($ficons)
      ->addMargin(PHUI::MARGIN_LARGE);

    $layout1 = id(new PHUIBoxView())
      ->appendChild($actionview)
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $layout2 = id(new PHUIBoxView())
      ->appendChild(array($person1, $person2, $person3))
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $layout2a = id(new PHUIBoxView())
      ->appendChild(array($person4, $person5, $person6))
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $layout3 = id(new PHUIBoxView())
      ->appendChild($tokenview)
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $layout4 = id(new PHUIBoxView())
      ->appendChild(array($card1, $card2, $card3, $card4, $card5))
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $layout5 = id(new PHUIBoxView())
      ->appendChild($loginview)
      ->addMargin(PHUI::MARGIN_MEDIUM);

    $halflings = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Glyphicon Halflings'))
      ->appendChild($layout_gicons);

    $fontawesome = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Font Awesome'))
      ->appendChild($layout_fa);

    $transforms = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Colors and Transforms'))
      ->appendChild($layout_cicons);

    $wrap1 = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Action Icons!'))
      ->appendChild($layout1);

    $wrap2 = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('People!'))
      ->appendChild(array($layout2, $layout2a));

    $wrap3 = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Tokens'))
      ->appendChild($layout3);

    $wrap4 = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Payments'))
      ->appendChild($layout4);

    $wrap5 = id(new PHUIObjectBoxView())
      ->setHeaderText(pht('Authentication'))
      ->appendChild($layout5);

    return phutil_tag(
      'div',
        array(
          'class' => 'phui-icon-example',
        ),
        array(
          $halflings,
          $fontawesome,
          $transforms,
          $wrap1,
          $wrap2,
          $wrap3,
          $wrap4,
          $wrap5
        ));
        }
}
