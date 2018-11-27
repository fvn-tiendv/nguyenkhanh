<?php
/**
 * Tools Functions
 * @package MegaMain
 * @subpackage MegaMain
 * @since mm 1.0
 */

if ( !class_exists( 'mm_datastore' ) ) {
	class mm_datastore {
		/** 
		 * The function returns a list of available social icons.
		 * @return $social_icons - array with list of available social icons.
		 */
		public static function get_social_icons() {
			$social_icons = array(
				'Share' => 'im-icon-share-2',
				'Blogger' => 'im-icon-blogger',
				'Delicious' => 'im-icon-delicious',
				'Deviantart' => 'im-icon-deviantart-2',
				'Dribbble' => 'im-icon-dribble',
				'Facebook' => 'im-icon-facebook',
				'Flattr' => 'im-icon-flattr',
				'Flickr' => 'im-icon-flickr',
				'Forrst' => 'im-icon-forrst',
				'Foursquare' => 'im-icon-foursquare-2',
				'Github' => 'im-icon-github-3',
				'Google Drive' => 'im-icon-google-drive',
				'Google Plus' => 'im-icon-google-plus',
				'Instagram' => 'im-icon-instagram',
				'Joomla' => 'im-icon-joomla',
				'Lanyrd' => 'im-icon-lanyrd',
				'Lastfm' => 'im-icon-lastfm',
				'Linkedin' => 'im-icon-linkedin',
				'Mail' => 'im-icon-envelop',
				'Picassa' => 'im-icon-picassa',
				'Pinterest' => 'im-icon-pinterest-2',
				'Reddit' => 'im-icon-reddit',
				'RSS' => 'im-icon-feed-2',
				'Skype' => 'im-icon-skype',
				'Stackoverflow' => 'im-icon-stackoverflow',
				'Steam' => 'im-icon-steam',
				'Stumbleupon' => 'im-icon-stumbleupon',
				'Tumblr' => 'im-icon-tumblr',
				'Twitter' => 'im-icon-twitter',
				'Vimeo' => 'im-icon-vimeo',
				'Vk' => 'fa-icon-icon-vk',
				'Wordpress' => 'im-icon-wordpress',
				'Xing' => 'im-icon-xing',
				'Yahoo' => 'im-icon-yahoo',
				'Yelp' => 'im-icon-yelp',
				'Youtube' => 'im-icon-youtube',
			);
			return $social_icons;
		}

		/** 
		 * The function return a array with availables font-icons.
		 * @return $get_list_fontawesome.
		 */
		public static function get_list_fontawesome() {
			return array(
				'fa-icon-glass',
				'fa-icon-music',
				'fa-icon-search',
				'fa-icon-envelope-o',
				'fa-icon-heart',
				'fa-icon-star',
				'fa-icon-star-o',
				'fa-icon-user',
				'fa-icon-film',
				'fa-icon-th-large',
				'fa-icon-th',
				'fa-icon-th-list',
				'fa-icon-check',
				'fa-icon-times',
				'fa-icon-search-plus',
				'fa-icon-search-minus',
				'fa-icon-power-off',
				'fa-icon-signal',
				'fa-icon-gear',
				'fa-icon-cog',
				'fa-icon-trash-o',
				'fa-icon-home',
				'fa-icon-file-o',
				'fa-icon-clock-o',
				'fa-icon-road',
				'fa-icon-download',
				'fa-icon-arrow-circle-o-down',
				'fa-icon-arrow-circle-o-up',
				'fa-icon-inbox',
				'fa-icon-play-circle-o',
				'fa-icon-rotate-right',
				'fa-icon-repeat',
				'fa-icon-refresh',
				'fa-icon-list-alt',
				'fa-icon-lock',
				'fa-icon-flag',
				'fa-icon-headphones',
				'fa-icon-volume-off',
				'fa-icon-volume-down',
				'fa-icon-volume-up',
				'fa-icon-qrcode',
				'fa-icon-barcode',
				'fa-icon-tag',
				'fa-icon-tags',
				'fa-icon-book',
				'fa-icon-bookmark',
				'fa-icon-print',
				'fa-icon-camera',
				'fa-icon-font',
				'fa-icon-bold',
				'fa-icon-italic',
				'fa-icon-text-height',
				'fa-icon-text-width',
				'fa-icon-align-left',
				'fa-icon-align-center',
				'fa-icon-align-right',
				'fa-icon-align-justify',
				'fa-icon-list',
				'fa-icon-dedent',
				'fa-icon-outdent',
				'fa-icon-indent',
				'fa-icon-video-camera',
				'fa-icon-picture-o',
				'fa-icon-pencil',
				'fa-icon-map-marker',
				'fa-icon-adjust',
				'fa-icon-tint',
				'fa-icon-edit',
				'fa-icon-pencil-square-o',
				'fa-icon-share-square-o',
				'fa-icon-check-square-o',
				'fa-icon-arrows',
				'fa-icon-step-backward',
				'fa-icon-fast-backward',
				'fa-icon-backward',
				'fa-icon-play',
				'fa-icon-pause',
				'fa-icon-stop',
				'fa-icon-forward',
				'fa-icon-fast-forward',
				'fa-icon-step-forward',
				'fa-icon-eject',
				'fa-icon-chevron-left',
				'fa-icon-chevron-right',
				'fa-icon-plus-circle',
				'fa-icon-minus-circle',
				'fa-icon-times-circle',
				'fa-icon-check-circle',
				'fa-icon-question-circle',
				'fa-icon-info-circle',
				'fa-icon-crosshairs',
				'fa-icon-times-circle-o',
				'fa-icon-check-circle-o',
				'fa-icon-ban',
				'fa-icon-arrow-left',
				'fa-icon-arrow-right',
				'fa-icon-arrow-up',
				'fa-icon-arrow-down',
				'fa-icon-mail-forward',
				'fa-icon-share',
				'fa-icon-expand',
				'fa-icon-compress',
				'fa-icon-plus',
				'fa-icon-minus',
				'fa-icon-asterisk',
				'fa-icon-exclamation-circle',
				'fa-icon-gift',
				'fa-icon-leaf',
				'fa-icon-fire',
				'fa-icon-eye',
				'fa-icon-eye-slash',
				'fa-icon-warning',
				'fa-icon-exclamation-triangle',
				'fa-icon-plane',
				'fa-icon-calendar',
				'fa-icon-random',
				'fa-icon-comment',
				'fa-icon-magnet',
				'fa-icon-chevron-up',
				'fa-icon-chevron-down',
				'fa-icon-retweet',
				'fa-icon-shopping-cart',
				'fa-icon-folder',
				'fa-icon-folder-open',
				'fa-icon-arrows-v',
				'fa-icon-arrows-h',
				'fa-icon-bar-chart-o',
				'fa-icon-twitter-square',
				'fa-icon-facebook-square',
				'fa-icon-camera-retro',
				'fa-icon-key',
				'fa-icon-gears',
				'fa-icon-cogs',
				'fa-icon-comments',
				'fa-icon-thumbs-o-up',
				'fa-icon-thumbs-o-down',
				'fa-icon-star-half',
				'fa-icon-heart-o',
				'fa-icon-sign-out',
				'fa-icon-linkedin-square',
				'fa-icon-thumb-tack',
				'fa-icon-external-link',
				'fa-icon-sign-in',
				'fa-icon-trophy',
				'fa-icon-github-square',
				'fa-icon-upload',
				'fa-icon-lemon-o',
				'fa-icon-phone',
				'fa-icon-square-o',
				'fa-icon-bookmark-o',
				'fa-icon-phone-square',
				'fa-icon-twitter',
				'fa-icon-facebook',
				'fa-icon-github',
				'fa-icon-unlock',
				'fa-icon-credit-card',
				'fa-icon-rss',
				'fa-icon-hdd-o',
				'fa-icon-bullhorn',
				'fa-icon-bell',
				'fa-icon-certificate',
				'fa-icon-hand-o-right',
				'fa-icon-hand-o-left',
				'fa-icon-hand-o-up',
				'fa-icon-hand-o-down',
				'fa-icon-arrow-circle-left',
				'fa-icon-arrow-circle-right',
				'fa-icon-arrow-circle-up',
				'fa-icon-arrow-circle-down',
				'fa-icon-globe',
				'fa-icon-wrench',
				'fa-icon-tasks',
				'fa-icon-filter',
				'fa-icon-briefcase',
				'fa-icon-arrows-alt',
				'fa-icon-group',
				'fa-icon-users',
				'fa-icon-chain',
				'fa-icon-link',
				'fa-icon-cloud',
				'fa-icon-flask',
				'fa-icon-cut',
				'fa-icon-scissors',
				'fa-icon-copy',
				'fa-icon-files-o',
				'fa-icon-paperclip',
				'fa-icon-save',
				'fa-icon-floppy-o',
				'fa-icon-square',
				'fa-icon-bars',
				'fa-icon-list-ul',
				'fa-icon-list-ol',
				'fa-icon-strikethrough',
				'fa-icon-underline',
				'fa-icon-table',
				'fa-icon-magic',
				'fa-icon-truck',
				'fa-icon-pinterest',
				'fa-icon-pinterest-square',
				'fa-icon-google-plus-square',
				'fa-icon-google-plus',
				'fa-icon-money',
				'fa-icon-caret-down',
				'fa-icon-caret-up',
				'fa-icon-caret-left',
				'fa-icon-caret-right',
				'fa-icon-columns',
				'fa-icon-unsorted',
				'fa-icon-sort',
				'fa-icon-sort-down',
				'fa-icon-sort-asc',
				'fa-icon-sort-up',
				'fa-icon-sort-desc',
				'fa-icon-envelope',
				'fa-icon-linkedin',
				'fa-icon-rotate-left',
				'fa-icon-undo',
				'fa-icon-legal',
				'fa-icon-gavel',
				'fa-icon-dashboard',
				'fa-icon-tachometer',
				'fa-icon-comment-o',
				'fa-icon-comments-o',
				'fa-icon-flash',
				'fa-icon-bolt',
				'fa-icon-sitemap',
				'fa-icon-umbrella',
				'fa-icon-paste',
				'fa-icon-clipboard',
				'fa-icon-lightbulb-o',
				'fa-icon-exchange',
				'fa-icon-cloud-download',
				'fa-icon-cloud-upload',
				'fa-icon-user-md',
				'fa-icon-stethoscope',
				'fa-icon-suitcase',
				'fa-icon-bell-o',
				'fa-icon-coffee',
				'fa-icon-cutlery',
				'fa-icon-file-text-o',
				'fa-icon-building-o',
				'fa-icon-hospital-o',
				'fa-icon-ambulance',
				'fa-icon-medkit',
				'fa-icon-fighter-jet',
				'fa-icon-beer',
				'fa-icon-h-square',
				'fa-icon-plus-square',
				'fa-icon-angle-double-left',
				'fa-icon-angle-double-right',
				'fa-icon-angle-double-up',
				'fa-icon-angle-double-down',
				'fa-icon-angle-left',
				'fa-icon-angle-right',
				'fa-icon-angle-up',
				'fa-icon-angle-down',
				'fa-icon-desktop',
				'fa-icon-laptop',
				'fa-icon-tablet',
				'fa-icon-mobile-phone',
				'fa-icon-mobile',
				'fa-icon-circle-o',
				'fa-icon-quote-left',
				'fa-icon-quote-right',
				'fa-icon-spinner',
				'fa-icon-circle',
				'fa-icon-mail-reply',
				'fa-icon-reply',
				'fa-icon-github-alt',
				'fa-icon-folder-o',
				'fa-icon-folder-open-o',
				'fa-icon-smile-o',
				'fa-icon-frown-o',
				'fa-icon-meh-o',
				'fa-icon-gamepad',
				'fa-icon-keyboard-o',
				'fa-icon-flag-o',
				'fa-icon-flag-checkered',
				'fa-icon-terminal',
				'fa-icon-code',
				'fa-icon-reply-all',
				'fa-icon-mail-reply-all',
				'fa-icon-star-half-empty',
				'fa-icon-star-half-full',
				'fa-icon-star-half-o',
				'fa-icon-location-arrow',
				'fa-icon-crop',
				'fa-icon-code-fork',
				'fa-icon-unlink',
				'fa-icon-chain-broken',
				'fa-icon-question',
				'fa-icon-info',
				'fa-icon-exclamation',
				'fa-icon-superscript',
				'fa-icon-subscript',
				'fa-icon-eraser',
				'fa-icon-puzzle-piece',
				'fa-icon-microphone',
				'fa-icon-microphone-slash',
				'fa-icon-shield',
				'fa-icon-calendar-o',
				'fa-icon-fire-extinguisher',
				'fa-icon-rocket',
				'fa-icon-maxcdn',
				'fa-icon-chevron-circle-left',
				'fa-icon-chevron-circle-right',
				'fa-icon-chevron-circle-up',
				'fa-icon-chevron-circle-down',
				'fa-icon-html5',
				'fa-icon-css3',
				'fa-icon-anchor',
				'fa-icon-unlock-alt',
				'fa-icon-bullseye',
				'fa-icon-ellipsis-h',
				'fa-icon-ellipsis-v',
				'fa-icon-rss-square',
				'fa-icon-play-circle',
				'fa-icon-ticket',
				'fa-icon-minus-square',
				'fa-icon-minus-square-o',
				'fa-icon-level-up',
				'fa-icon-level-down',
				'fa-icon-check-square',
				'fa-icon-pencil-square',
				'fa-icon-external-link-square',
				'fa-icon-share-square',
				'fa-icon-compass',
				'fa-icon-toggle-down',
				'fa-icon-caret-square-o-down',
				'fa-icon-toggle-up',
				'fa-icon-caret-square-o-up',
				'fa-icon-toggle-right',
				'fa-icon-caret-square-o-right',
				'fa-icon-euro',
				'fa-icon-eur',
				'fa-icon-gbp',
				'fa-icon-dollar',
				'fa-icon-usd',
				'fa-icon-rupee',
				'fa-icon-inr',
				'fa-icon-cny',
				'fa-icon-rmb',
				'fa-icon-yen',
				'fa-icon-jpy',
				'fa-icon-ruble',
				'fa-icon-rouble',
				'fa-icon-rub',
				'fa-icon-won',
				'fa-icon-krw',
				'fa-icon-bitcoin',
				'fa-icon-btc',
				'fa-icon-file',
				'fa-icon-file-text',
				'fa-icon-sort-alpha-asc',
				'fa-icon-sort-alpha-desc',
				'fa-icon-sort-amount-asc',
				'fa-icon-sort-amount-desc',
				'fa-icon-sort-numeric-asc',
				'fa-icon-sort-numeric-desc',
				'fa-icon-thumbs-up',
				'fa-icon-thumbs-down',
				'fa-icon-youtube-square',
				'fa-icon-youtube',
				'fa-icon-xing',
				'fa-icon-xing-square',
				'fa-icon-youtube-play',
				'fa-icon-dropbox',
				'fa-icon-stack-overflow',
				'fa-icon-instagram',
				'fa-icon-flickr',
				'fa-icon-adn',
				'fa-icon-bitbucket',
				'fa-icon-bitbucket-square',
				'fa-icon-tumblr',
				'fa-icon-tumblr-square',
				'fa-icon-long-arrow-down',
				'fa-icon-long-arrow-up',
				'fa-icon-long-arrow-left',
				'fa-icon-long-arrow-right',
				'fa-icon-apple',
				'fa-icon-windows',
				'fa-icon-android',
				'fa-icon-linux',
				'fa-icon-dribbble',
				'fa-icon-skype',
				'fa-icon-foursquare',
				'fa-icon-trello',
				'fa-icon-female',
				'fa-icon-male',
				'fa-icon-gittip',
				'fa-icon-sun-o',
				'fa-icon-moon-o',
				'fa-icon-archive',
				'fa-icon-bug',
				'fa-icon-vk',
				'fa-icon-weibo',
				'fa-icon-renren',
				'fa-icon-pagelines',
				'fa-icon-stack-exchange',
				'fa-icon-arrow-circle-o-right',
				'fa-icon-arrow-circle-o-left',
				'fa-icon-toggle-left',
				'fa-icon-caret-square-o-left',
				'fa-icon-dot-circle-o',
				'fa-icon-wheelchair',
				'fa-icon-vimeo-square',
				'fa-icon-turkish-lira',
				'fa-icon-try',
				'fa-icon-plus-square-o',
			);
		}


		/** 
		 * The function return a array with availables font-icons.
		 * @return $get_list_glyphicons.
		 */
		public static function get_list_glyphicons() {
			return array(
				'glyphicon-asterisk',
				'glyphicon-plus',
				'glyphicon-euro',
				'glyphicon-eur',
				'glyphicon-minus',
				'glyphicon-cloud',
				'glyphicon-envelope',
				'glyphicon-pencil',
				'glyphicon-glass',
				'glyphicon-music',
				'glyphicon-search',
				'glyphicon-heart',
				'glyphicon-star',
				'glyphicon-star-empty',
				'glyphicon-user',
				'glyphicon-film',
				'glyphicon-th-large',
				'glyphicon-th',
				'glyphicon-th-list',
				'glyphicon-ok',
				'glyphicon-remove',
				'glyphicon-zoom-in',
				'glyphicon-zoom-out',
				'glyphicon-off',
				'glyphicon-signal',
				'glyphicon-cog',
				'glyphicon-trash',
				'glyphicon-home',
				'glyphicon-file',
				'glyphicon-time',
				'glyphicon-road',
				'glyphicon-download-alt',
				'glyphicon-download',
				'glyphicon-upload',
				'glyphicon-inbox',
				'glyphicon-play-circle',
				'glyphicon-repeat',
				'glyphicon-refresh',
				'glyphicon-list-alt',
				'glyphicon-lock',
				'glyphicon-flag',
				'glyphicon-headphones',
				'glyphicon-volume-off',
				'glyphicon-volume-down',
				'glyphicon-volume-up',
				'glyphicon-qrcode',
				'glyphicon-barcode',
				'glyphicon-tag',
				'glyphicon-tags',
				'glyphicon-book',
				'glyphicon-bookmark',
				'glyphicon-print',
				'glyphicon-camera',
				'glyphicon-font',
				'glyphicon-bold',
				'glyphicon-italic',
				'glyphicon-text-height',
				'glyphicon-text-width',
				'glyphicon-align-left',
				'glyphicon-align-center',
				'glyphicon-align-right',
				'glyphicon-align-justify',
				'glyphicon-list',
				'glyphicon-indent-left',
				'glyphicon-indent-right',
				'glyphicon-facetime-video',
				'glyphicon-picture',
				'glyphicon-map-marker',
				'glyphicon-adjust',
				'glyphicon-tint',
				'glyphicon-edit',
				'glyphicon-share',
				'glyphicon-check',
				'glyphicon-move',
				'glyphicon-step-backward',
				'glyphicon-fast-backward',
				'glyphicon-backward',
				'glyphicon-play',
				'glyphicon-pause',
				'glyphicon-stop',
				'glyphicon-forward',
				'glyphicon-fast-forward',
				'glyphicon-step-forward',
				'glyphicon-eject',
				'glyphicon-chevron-left',
				'glyphicon-chevron-right',
				'glyphicon-plus-sign',
				'glyphicon-minus-sign',
				'glyphicon-remove-sign',
				'glyphicon-ok-sign',
				'glyphicon-question-sign',
				'glyphicon-info-sign',
				'glyphicon-screenshot',
				'glyphicon-remove-circle',
				'glyphicon-ok-circle',
				'glyphicon-ban-circle',
				'glyphicon-arrow-left',
				'glyphicon-arrow-right',
				'glyphicon-arrow-up',
				'glyphicon-arrow-down',
				'glyphicon-share-alt',
				'glyphicon-resize-full',
				'glyphicon-resize-small',
				'glyphicon-exclamation-sign',
				'glyphicon-gift',
				'glyphicon-leaf',
				'glyphicon-fire',
				'glyphicon-eye-open',
				'glyphicon-eye-close',
				'glyphicon-warning-sign',
				'glyphicon-plane',
				'glyphicon-calendar',
				'glyphicon-random',
				'glyphicon-comment',
				'glyphicon-magnet',
				'glyphicon-chevron-up',
				'glyphicon-chevron-down',
				'glyphicon-retweet',
				'glyphicon-shopping-cart',
				'glyphicon-folder-close',
				'glyphicon-folder-open',
				'glyphicon-resize-vertical',
				'glyphicon-resize-horizontal',
				'glyphicon-hdd',
				'glyphicon-bullhorn',
				'glyphicon-bell',
				'glyphicon-certificate',
				'glyphicon-thumbs-up',
				'glyphicon-thumbs-down',
				'glyphicon-hand-right',
				'glyphicon-hand-left',
				'glyphicon-hand-up',
				'glyphicon-hand-down',
				'glyphicon-circle-arrow-right',
				'glyphicon-circle-arrow-left',
				'glyphicon-circle-arrow-up',
				'glyphicon-circle-arrow-down',
				'glyphicon-globe',
				'glyphicon-wrench',
				'glyphicon-tasks',
				'glyphicon-filter',
				'glyphicon-briefcase',
				'glyphicon-fullscreen',
				'glyphicon-dashboard',
				'glyphicon-paperclip',
				'glyphicon-heart-empty',
				'glyphicon-link',
				'glyphicon-phone',
				'glyphicon-pushpin',
				'glyphicon-usd',
				'glyphicon-gbp',
				'glyphicon-sort',
				'glyphicon-sort-by-alphabet',
				'glyphicon-sort-by-alphabet-alt',
				'glyphicon-sort-by-order',
				'glyphicon-sort-by-order-alt',
				'glyphicon-sort-by-attributes',
				'glyphicon-sort-by-attributes-alt',
				'glyphicon-unchecked',
				'glyphicon-expand',
				'glyphicon-collapse-down',
				'glyphicon-collapse-up',
				'glyphicon-log-in',
				'glyphicon-flash',
				'glyphicon-log-out',
				'glyphicon-new-window',
				'glyphicon-record',
				'glyphicon-save',
				'glyphicon-open',
				'glyphicon-saved',
				'glyphicon-import',
				'glyphicon-export',
				'glyphicon-send',
				'glyphicon-floppy-disk',
				'glyphicon-floppy-saved',
				'glyphicon-floppy-remove',
				'glyphicon-floppy-save',
				'glyphicon-floppy-open',
				'glyphicon-credit-card',
				'glyphicon-transfer',
				'glyphicon-cutlery',
				'glyphicon-header',
				'glyphicon-compressed',
				'glyphicon-earphone',
				'glyphicon-phone-alt',
				'glyphicon-tower',
				'glyphicon-stats',
				'glyphicon-sd-video',
				'glyphicon-hd-video',
				'glyphicon-subtitles',
				'glyphicon-sound-stereo',
				'glyphicon-sound-dolby',
				'glyphicon-sound-5-1',
				'glyphicon-sound-6-1',
				'glyphicon-sound-7-1',
				'glyphicon-copyright-mark',
				'glyphicon-registration-mark',
				'glyphicon-cloud-download',
				'glyphicon-cloud-upload',
				'glyphicon-tree-conifer',
				'glyphicon-tree-deciduous',
			);
		}


		/** 
		 * The function return a array with availables font-icons.
		 * @return $get_list_icomoon.
		 */
		public static function get_list_icomoon() {
			return array(
				'im-icon-home',
				'im-icon-home-2',
				'im-icon-home-3',
				'im-icon-home-4',
				'im-icon-home-5',
				'im-icon-home-6',
				'im-icon-home-7',
				'im-icon-home-8',
				'im-icon-home-9',
				'im-icon-home-10',
				'im-icon-home-11',
				'im-icon-office',
				'im-icon-newspaper',
				'im-icon-pencil',
				'im-icon-pencil-2',
				'im-icon-pencil-3',
				'im-icon-pencil-4',
				'im-icon-pencil-5',
				'im-icon-pencil-6',
				'im-icon-quill',
				'im-icon-quill-2',
				'im-icon-quill-3',
				'im-icon-pen',
				'im-icon-pen-2',
				'im-icon-pen-3',
				'im-icon-pen-4',
				'im-icon-pen-5',
				'im-icon-marker',
				'im-icon-home-12',
				'im-icon-marker-2',
				'im-icon-blog',
				'im-icon-blog-2',
				'im-icon-brush',
				'im-icon-palette',
				'im-icon-palette-2',
				'im-icon-eyedropper',
				'im-icon-eyedropper-2',
				'im-icon-droplet',
				'im-icon-droplet-2',
				'im-icon-droplet-3',
				'im-icon-droplet-4',
				'im-icon-paint-format',
				'im-icon-paint-format-2',
				'im-icon-image',
				'im-icon-image-2',
				'im-icon-image-3',
				'im-icon-images',
				'im-icon-image-4',
				'im-icon-image-5',
				'im-icon-image-6',
				'im-icon-images-2',
				'im-icon-image-7',
				'im-icon-camera',
				'im-icon-camera-2',
				'im-icon-camera-3',
				'im-icon-camera-4',
				'im-icon-music',
				'im-icon-music-2',
				'im-icon-music-3',
				'im-icon-music-4',
				'im-icon-music-5',
				'im-icon-music-6',
				'im-icon-piano',
				'im-icon-guitar',
				'im-icon-headphones',
				'im-icon-headphones-2',
				'im-icon-play',
				'im-icon-play-2',
				'im-icon-movie',
				'im-icon-movie-2',
				'im-icon-movie-3',
				'im-icon-film',
				'im-icon-film-2',
				'im-icon-film-3',
				'im-icon-film-4',
				'im-icon-camera-5',
				'im-icon-camera-6',
				'im-icon-camera-7',
				'im-icon-camera-8',
				'im-icon-camera-9',
				'im-icon-dice',
				'im-icon-gamepad',
				'im-icon-gamepad-2',
				'im-icon-gamepad-3',
				'im-icon-pacman',
				'im-icon-spades',
				'im-icon-clubs',
				'im-icon-diamonds',
				'im-icon-king',
				'im-icon-queen',
				'im-icon-rock',
				'im-icon-bishop',
				'im-icon-knight',
				'im-icon-pawn',
				'im-icon-chess',
				'im-icon-bullhorn',
				'im-icon-megaphone',
				'im-icon-new',
				'im-icon-connection',
				'im-icon-connection-2',
				'im-icon-podcast',
				'im-icon-radio',
				'im-icon-feed',
				'im-icon-connection-3',
				'im-icon-radio-2',
				'im-icon-podcast-2',
				'im-icon-podcast-3',
				'im-icon-mic',
				'im-icon-mic-2',
				'im-icon-mic-3',
				'im-icon-mic-4',
				'im-icon-mic-5',
				'im-icon-book',
				'im-icon-book-2',
				'im-icon-books',
				'im-icon-reading',
				'im-icon-library',
				'im-icon-library-2',
				'im-icon-graduation',
				'im-icon-file',
				'im-icon-profile',
				'im-icon-file-2',
				'im-icon-file-3',
				'im-icon-file-4',
				'im-icon-file-5',
				'im-icon-file-6',
				'im-icon-files',
				'im-icon-file-plus',
				'im-icon-file-minus',
				'im-icon-file-download',
				'im-icon-file-upload',
				'im-icon-file-check',
				'im-icon-file-remove',
				'im-icon-file-7',
				'im-icon-file-8',
				'im-icon-file-plus-2',
				'im-icon-file-minus-2',
				'im-icon-file-download-2',
				'im-icon-file-upload-2',
				'im-icon-file-check-2',
				'im-icon-file-remove-2',
				'im-icon-file-9',
				'im-icon-copy',
				'im-icon-copy-2',
				'im-icon-copy-3',
				'im-icon-copy-4',
				'im-icon-paste',
				'im-icon-paste-2',
				'im-icon-paste-3',
				'im-icon-stack',
				'im-icon-stack-2',
				'im-icon-stack-3',
				'im-icon-folder',
				'im-icon-folder-download',
				'im-icon-folder-upload',
				'im-icon-folder-plus',
				'im-icon-folder-plus-2',
				'im-icon-folder-minus',
				'im-icon-folder-minus-2',
				'im-icon-folder8',
				'im-icon-folder-remove',
				'im-icon-folder-2',
				'im-icon-folder-open',
				'im-icon-folder-3',
				'im-icon-folder-4',
				'im-icon-folder-plus-3',
				'im-icon-folder-minus-3',
				'im-icon-folder-plus-4',
				'im-icon-folder-remove-2',
				'im-icon-folder-download-2',
				'im-icon-folder-upload-2',
				'im-icon-folder-download-3',
				'im-icon-folder-upload-3',
				'im-icon-folder-5',
				'im-icon-folder-open-2',
				'im-icon-folder-6',
				'im-icon-folder-open-3',
				'im-icon-certificate',
				'im-icon-cc',
				'im-icon-tag',
				'im-icon-tag-2',
				'im-icon-tag-3',
				'im-icon-tag-4',
				'im-icon-tag-5',
				'im-icon-tag-6',
				'im-icon-tag-7',
				'im-icon-tags',
				'im-icon-tags-2',
				'im-icon-tag-8',
				'im-icon-barcode',
				'im-icon-barcode-2',
				'im-icon-qrcode',
				'im-icon-ticket',
				'im-icon-cart',
				'im-icon-cart-2',
				'im-icon-cart-3',
				'im-icon-cart-4',
				'im-icon-cart-5',
				'im-icon-cart-6',
				'im-icon-cart-7',
				'im-icon-cart-plus',
				'im-icon-cart-minus',
				'im-icon-cart-add',
				'im-icon-cart-remove',
				'im-icon-cart-checkout',
				'im-icon-cart-remove-2',
				'im-icon-basket',
				'im-icon-basket-2',
				'im-icon-bag',
				'im-icon-bag-2',
				'im-icon-bag-3',
				'im-icon-coin',
				'im-icon-coins',
				'im-icon-credit',
				'im-icon-credit-2',
				'im-icon-calculate',
				'im-icon-calculate-2',
				'im-icon-support',
				'im-icon-phone',
				'im-icon-phone-2',
				'im-icon-phone-3',
				'im-icon-phone-4',
				'im-icon-contact-add',
				'im-icon-contact-remove',
				'im-icon-contact-add-2',
				'im-icon-contact-remove-2',
				'im-icon-call-incoming',
				'im-icon-call-outgoing',
				'im-icon-phone-5',
				'im-icon-phone-6',
				'im-icon-phone-hang-up',
				'im-icon-phone-hang-up-2',
				'im-icon-address-book',
				'im-icon-address-book-2',
				'im-icon-notebook',
				'im-icon-envelop',
				'im-icon-envelop-2',
				'im-icon-mail-send',
				'im-icon-envelop-opened',
				'im-icon-envelop-3',
				'im-icon-pushpin',
				'im-icon-location',
				'im-icon-location-2',
				'im-icon-location-3',
				'im-icon-location-4',
				'im-icon-location-5',
				'im-icon-location-6',
				'im-icon-location-7',
				'im-icon-compass',
				'im-icon-compass-2',
				'im-icon-map',
				'im-icon-map-2',
				'im-icon-map-3',
				'im-icon-map-4',
				'im-icon-direction',
				'im-icon-history',
				'im-icon-history-2',
				'im-icon-clock',
				'im-icon-clock-2',
				'im-icon-clock-3',
				'im-icon-clock-4',
				'im-icon-watch',
				'im-icon-clock-5',
				'im-icon-clock-6',
				'im-icon-clock-7',
				'im-icon-alarm',
				'im-icon-alarm-2',
				'im-icon-bell',
				'im-icon-bell-2',
				'im-icon-alarm-plus',
				'im-icon-alarm-minus',
				'im-icon-alarm-check',
				'im-icon-alarm-cancel',
				'im-icon-stopwatch',
				'im-icon-calendar',
				'im-icon-calendar-2',
				'im-icon-calendar-3',
				'im-icon-calendar-4',
				'im-icon-calendar-5',
				'im-icon-print',
				'im-icon-print-2',
				'im-icon-print-3',
				'im-icon-mouse',
				'im-icon-mouse-2',
				'im-icon-mouse-3',
				'im-icon-mouse-4',
				'im-icon-keyboard',
				'im-icon-keyboard-2',
				'im-icon-screen',
				'im-icon-screen-2',
				'im-icon-screen-3',
				'im-icon-screen-4',
				'im-icon-laptop',
				'im-icon-mobile',
				'im-icon-mobile-2',
				'im-icon-tablet',
				'im-icon-mobile-3',
				'im-icon-tv',
				'im-icon-cabinet',
				'im-icon-archive',
				'im-icon-drawer',
				'im-icon-drawer-2',
				'im-icon-drawer-3',
				'im-icon-box',
				'im-icon-box-add',
				'im-icon-box-remove',
				'im-icon-download',
				'im-icon-upload',
				'im-icon-disk',
				'im-icon-cd',
				'im-icon-storage',
				'im-icon-storage-2',
				'im-icon-database',
				'im-icon-database-2',
				'im-icon-database-3',
				'im-icon-undo',
				'im-icon-redo',
				'im-icon-rotate',
				'im-icon-rotate-2',
				'im-icon-flip',
				'im-icon-flip-2',
				'im-icon-unite',
				'im-icon-subtract',
				'im-icon-interset',
				'im-icon-exclude',
				'im-icon-align-left',
				'im-icon-align-center-horizontal',
				'im-icon-align-right',
				'im-icon-align-top',
				'im-icon-align-center-vertical',
				'im-icon-align-bottom',
				'im-icon-undo-2',
				'im-icon-redo-2',
				'im-icon-forward',
				'im-icon-reply',
				'im-icon-reply-2',
				'im-icon-bubble',
				'im-icon-bubbles',
				'im-icon-bubbles-2',
				'im-icon-bubble-2',
				'im-icon-bubbles-3',
				'im-icon-bubbles-4',
				'im-icon-bubble-notification',
				'im-icon-bubbles-5',
				'im-icon-bubbles-6',
				'im-icon-bubble-3',
				'im-icon-bubble-dots',
				'im-icon-bubble-4',
				'im-icon-bubble-5',
				'im-icon-bubble-dots-2',
				'im-icon-bubble-6',
				'im-icon-bubble-7',
				'im-icon-bubble-8',
				'im-icon-bubbles-7',
				'im-icon-bubble-9',
				'im-icon-bubbles-8',
				'im-icon-bubble-10',
				'im-icon-bubble-dots-3',
				'im-icon-bubble-11',
				'im-icon-bubble-12',
				'im-icon-bubble-dots-4',
				'im-icon-bubble-13',
				'im-icon-bubbles-9',
				'im-icon-bubbles-10',
				'im-icon-bubble-blocked',
				'im-icon-bubble-quote',
				'im-icon-bubble-user',
				'im-icon-bubble-check',
				'im-icon-bubble-video-chat',
				'im-icon-bubble-link',
				'im-icon-bubble-locked',
				'im-icon-bubble-star',
				'im-icon-bubble-heart',
				'im-icon-bubble-paperclip',
				'im-icon-bubble-cancel',
				'im-icon-bubble-plus',
				'im-icon-bubble-minus',
				'im-icon-bubble-notification-2',
				'im-icon-bubble-trash',
				'im-icon-bubble-left',
				'im-icon-bubble-right',
				'im-icon-bubble-up',
				'im-icon-bubble-down',
				'im-icon-bubble-first',
				'im-icon-bubble-last',
				'im-icon-bubble-replu',
				'im-icon-bubble-forward',
				'im-icon-bubble-reply',
				'im-icon-bubble-forward-2',
				'im-icon-user',
				'im-icon-users',
				'im-icon-user-plus',
				'im-icon-user-plus-2',
				'im-icon-user-minus',
				'im-icon-user-minus-2',
				'im-icon-user-cancel',
				'im-icon-user-block',
				'im-icon-users-2',
				'im-icon-user-2',
				'im-icon-users-3',
				'im-icon-user-plus-3',
				'im-icon-user-minus-3',
				'im-icon-user-cancel-2',
				'im-icon-user-block-2',
				'im-icon-user-3',
				'im-icon-user-4',
				'im-icon-user-5',
				'im-icon-user-6',
				'im-icon-users-4',
				'im-icon-user-7',
				'im-icon-user-8',
				'im-icon-users-5',
				'im-icon-vcard',
				'im-icon-tshirt',
				'im-icon-hanger',
				'im-icon-quotes-left',
				'im-icon-quotes-right',
				'im-icon-quotes-right-2',
				'im-icon-quotes-right-3',
				'im-icon-busy',
				'im-icon-busy-2',
				'im-icon-busy-3',
				'im-icon-busy-4',
				'im-icon-spinner',
				'im-icon-spinner-2',
				'im-icon-spinner-3',
				'im-icon-spinner-4',
				'im-icon-spinner-5',
				'im-icon-spinner-6',
				'im-icon-spinner-7',
				'im-icon-spinner-8',
				'im-icon-spinner-9',
				'im-icon-spinner-10',
				'im-icon-spinner-11',
				'im-icon-spinner-12',
				'im-icon-microscope',
				'im-icon-binoculars',
				'im-icon-binoculars-2',
				'im-icon-search',
				'im-icon-search-2',
				'im-icon-zoom-in',
				'im-icon-zoom-out',
				'im-icon-search-3',
				'im-icon-search-4',
				'im-icon-zoom-in-2',
				'im-icon-zoom-out-2',
				'im-icon-search-5',
				'im-icon-expand',
				'im-icon-contract',
				'im-icon-scale-up',
				'im-icon-scale-down',
				'im-icon-expand-2',
				'im-icon-contract-2',
				'im-icon-scale-up-2',
				'im-icon-scale-down-2',
				'im-icon-fullscreen',
				'im-icon-expand-3',
				'im-icon-contract-3',
				'im-icon-key',
				'im-icon-key-2',
				'im-icon-key-3',
				'im-icon-key-4',
				'im-icon-key-5',
				'im-icon-keyhole',
				'im-icon-lock',
				'im-icon-lock-2',
				'im-icon-lock-3',
				'im-icon-lock-4',
				'im-icon-unlocked',
				'im-icon-lock-5',
				'im-icon-unlocked-2',
				'im-icon-wrench',
				'im-icon-wrench-2',
				'im-icon-wrench-3',
				'im-icon-wrench-4',
				'im-icon-settings',
				'im-icon-equalizer',
				'im-icon-equalizer-2',
				'im-icon-equalizer-3',
				'im-icon-cog',
				'im-icon-cogs',
				'im-icon-cog-2',
				'im-icon-cog-3',
				'im-icon-cog-4',
				'im-icon-cog-5',
				'im-icon-cog-6',
				'im-icon-cog-7',
				'im-icon-factory',
				'im-icon-hammer',
				'im-icon-tools',
				'im-icon-screwdriver',
				'im-icon-screwdriver-2',
				'im-icon-wand',
				'im-icon-wand-2',
				'im-icon-health',
				'im-icon-aid',
				'im-icon-patch',
				'im-icon-bug',
				'im-icon-bug-2',
				'im-icon-inject',
				'im-icon-inject-2',
				'im-icon-construction',
				'im-icon-cone',
				'im-icon-pie',
				'im-icon-pie-2',
				'im-icon-pie-3',
				'im-icon-pie-4',
				'im-icon-pie-5',
				'im-icon-pie-6',
				'im-icon-pie-7',
				'im-icon-stats',
				'im-icon-stats-2',
				'im-icon-stats-3',
				'im-icon-bars',
				'im-icon-bars-2',
				'im-icon-bars-3',
				'im-icon-bars-4',
				'im-icon-bars-5',
				'im-icon-bars-6',
				'im-icon-stats-up',
				'im-icon-stats-down',
				'im-icon-stairs-down',
				'im-icon-stairs-down-2',
				'im-icon-chart',
				'im-icon-stairs',
				'im-icon-stairs-2',
				'im-icon-ladder',
				'im-icon-cake',
				'im-icon-gift',
				'im-icon-gift-2',
				'im-icon-balloon',
				'im-icon-rating',
				'im-icon-rating-2',
				'im-icon-rating-3',
				'im-icon-podium',
				'im-icon-medal',
				'im-icon-medal-2',
				'im-icon-medal-3',
				'im-icon-medal-4',
				'im-icon-medal-5',
				'im-icon-crown',
				'im-icon-trophy',
				'im-icon-trophy-2',
				'im-icon-trophy-star',
				'im-icon-diamond',
				'im-icon-diamond-2',
				'im-icon-glass',
				'im-icon-glass-2',
				'im-icon-bottle',
				'im-icon-bottle-2',
				'im-icon-mug',
				'im-icon-food',
				'im-icon-food-2',
				'im-icon-hamburger',
				'im-icon-cup',
				'im-icon-cup-2',
				'im-icon-leaf',
				'im-icon-leaf-2',
				'im-icon-apple-fruit',
				'im-icon-tree',
				'im-icon-tree-2',
				'im-icon-paw',
				'im-icon-steps',
				'im-icon-flower',
				'im-icon-rocket',
				'im-icon-meter',
				'im-icon-meter2',
				'im-icon-meter-slow',
				'im-icon-meter-medium',
				'im-icon-meter-fast',
				'im-icon-dashboard',
				'im-icon-hammer-2',
				'im-icon-balance',
				'im-icon-bomb',
				'im-icon-fire',
				'im-icon-fire-2',
				'im-icon-lab',
				'im-icon-atom',
				'im-icon-atom-2',
				'im-icon-magnet',
				'im-icon-magnet-2',
				'im-icon-magnet-3',
				'im-icon-magnet-4',
				'im-icon-dumbbell',
				'im-icon-skull',
				'im-icon-skull-2',
				'im-icon-skull-3',
				'im-icon-lamp',
				'im-icon-lamp-2',
				'im-icon-lamp-3',
				'im-icon-lamp-4',
				'im-icon-remove',
				'im-icon-remove-2',
				'im-icon-remove-3',
				'im-icon-remove-4',
				'im-icon-remove-5',
				'im-icon-remove-6',
				'im-icon-remove-7',
				'im-icon-remove-8',
				'im-icon-briefcase',
				'im-icon-briefcase-2',
				'im-icon-briefcase-3',
				'im-icon-airplane',
				'im-icon-airplane-2',
				'im-icon-paper-plane',
				'im-icon-car',
				'im-icon-gas-pump',
				'im-icon-bus',
				'im-icon-truck',
				'im-icon-bike',
				'im-icon-road',
				'im-icon-train',
				'im-icon-ship',
				'im-icon-boat',
				'im-icon-cube',
				'im-icon-cube-2',
				'im-icon-cube-3',
				'im-icon-cube4',
				'im-icon-pyramid',
				'im-icon-pyramid-2',
				'im-icon-cylinder',
				'im-icon-package',
				'im-icon-puzzle',
				'im-icon-puzzle-2',
				'im-icon-puzzle-3',
				'im-icon-puzzle-4',
				'im-icon-glasses',
				'im-icon-glasses-2',
				'im-icon-glasses-3',
				'im-icon-sun-glasses',
				'im-icon-accessibility',
				'im-icon-accessibility-2',
				'im-icon-brain',
				'im-icon-target',
				'im-icon-target-2',
				'im-icon-target-3',
				'im-icon-gun',
				'im-icon-gun-ban',
				'im-icon-shield',
				'im-icon-shield-2',
				'im-icon-shield-3',
				'im-icon-shield-4',
				'im-icon-soccer',
				'im-icon-football',
				'im-icon-baseball',
				'im-icon-basketball',
				'im-icon-golf',
				'im-icon-hockey',
				'im-icon-racing',
				'im-icon-eight-ball',
				'im-icon-bowling-ball',
				'im-icon-bowling',
				'im-icon-bowling-2',
				'im-icon-lightning',
				'im-icon-power',
				'im-icon-power-2',
				'im-icon-switch',
				'im-icon-power-cord',
				'im-icon-cord',
				'im-icon-socket',
				'im-icon-clipboard',
				'im-icon-clipboard-2',
				'im-icon-signup',
				'im-icon-clipboard-3',
				'im-icon-clipboard-4',
				'im-icon-list',
				'im-icon-list-2',
				'im-icon-list-3',
				'im-icon-numbered-list',
				'im-icon-list-4',
				'im-icon-list-5',
				'im-icon-playlist',
				'im-icon-grid',
				'im-icon-grid-2',
				'im-icon-grid-3',
				'im-icon-grid-4',
				'im-icon-grid-5',
				'im-icon-grid-6',
				'im-icon-tree-3',
				'im-icon-tree-4',
				'im-icon-tree-5',
				'im-icon-menu',
				'im-icon-menu-2',
				'im-icon-circle-small',
				'im-icon-menu-3',
				'im-icon-menu-4',
				'im-icon-menu-5',
				'im-icon-menu-6',
				'im-icon-menu-7',
				'im-icon-menu-8',
				'im-icon-menu-9',
				'im-icon-cloud',
				'im-icon-cloud-2',
				'im-icon-cloud-3',
				'im-icon-cloud-download',
				'im-icon-cloud-upload',
				'im-icon-download-2',
				'im-icon-upload-2',
				'im-icon-download-3',
				'im-icon-upload-3',
				'im-icon-download-4',
				'im-icon-upload-4',
				'im-icon-download-5',
				'im-icon-upload-5',
				'im-icon-download-6',
				'im-icon-upload-6',
				'im-icon-download-7',
				'im-icon-upload-7',
				'im-icon-globe',
				'im-icon-globe-2',
				'im-icon-globe-3',
				'im-icon-earth',
				'im-icon-network',
				'im-icon-link',
				'im-icon-link-2',
				'im-icon-link-3',
				'im-icon-link2',
				'im-icon-link-4',
				'im-icon-link-5',
				'im-icon-link-6',
				'im-icon-anchor',
				'im-icon-flag',
				'im-icon-flag-2',
				'im-icon-flag-3',
				'im-icon-flag-4',
				'im-icon-flag-5',
				'im-icon-flag-6',
				'im-icon-attachment',
				'im-icon-attachment-2',
				'im-icon-eye',
				'im-icon-eye-blocked',
				'im-icon-eye-2',
				'im-icon-eye-3',
				'im-icon-eye-blocked-2',
				'im-icon-eye-4',
				'im-icon-eye-5',
				'im-icon-eye-6',
				'im-icon-eye-7',
				'im-icon-eye-8',
				'im-icon-bookmark',
				'im-icon-bookmark-2',
				'im-icon-bookmarks',
				'im-icon-bookmark-3',
				'im-icon-spotlight',
				'im-icon-starburst',
				'im-icon-snowflake',
				'im-icon-temperature',
				'im-icon-temperature-2',
				'im-icon-weather-lightning',
				'im-icon-weather-rain',
				'im-icon-weather-snow',
				'im-icon-windy',
				'im-icon-fan',
				'im-icon-umbrella',
				'im-icon-sun',
				'im-icon-sun-2',
				'im-icon-brightness-high',
				'im-icon-brightness-medium',
				'im-icon-brightness-low',
				'im-icon-brightness-contrast',
				'im-icon-contrast',
				'im-icon-moon',
				'im-icon-bed',
				'im-icon-bed-2',
				'im-icon-star',
				'im-icon-star-2',
				'im-icon-star-3',
				'im-icon-star-4',
				'im-icon-star-5',
				'im-icon-star-6',
				'im-icon-heart',
				'im-icon-heart-2',
				'im-icon-heart-3',
				'im-icon-heart-4',
				'im-icon-heart-broken',
				'im-icon-heart-5',
				'im-icon-heart-6',
				'im-icon-heart-broken-2',
				'im-icon-heart-7',
				'im-icon-heart-8',
				'im-icon-heart-broken-3',
				'im-icon-lips',
				'im-icon-lips-2',
				'im-icon-thumbs-up',
				'im-icon-thumbs-up-2',
				'im-icon-thumbs-down',
				'im-icon-thumbs-down-2',
				'im-icon-thumbs-up-3',
				'im-icon-thumbs-up-4',
				'im-icon-thumbs-up-5',
				'im-icon-thumbs-up-6',
				'im-icon-people',
				'im-icon-man',
				'im-icon-male',
				'im-icon-woman',
				'im-icon-female',
				'im-icon-peace',
				'im-icon-yin-yang',
				'im-icon-happy',
				'im-icon-happy-2',
				'im-icon-smiley',
				'im-icon-smiley-2',
				'im-icon-tongue',
				'im-icon-tongue-2',
				'im-icon-sad',
				'im-icon-sad-2',
				'im-icon-wink',
				'im-icon-wink-2',
				'im-icon-grin',
				'im-icon-grin-2',
				'im-icon-cool',
				'im-icon-cool-2',
				'im-icon-angry',
				'im-icon-angry-2',
				'im-icon-evil',
				'im-icon-evil-2',
				'im-icon-shocked',
				'im-icon-shocked-2',
				'im-icon-confused',
				'im-icon-confused-2',
				'im-icon-neutral',
				'im-icon-neutral-2',
				'im-icon-wondering',
				'im-icon-wondering-2',
				'im-icon-cursor',
				'im-icon-cursor-2',
				'im-icon-point-up',
				'im-icon-point-right',
				'im-icon-point-down',
				'im-icon-point-left',
				'im-icon-pointer',
				'im-icon-hand',
				'im-icon-stack-empty',
				'im-icon-stack-plus',
				'im-icon-stack-minus',
				'im-icon-stack-star',
				'im-icon-stack-picture',
				'im-icon-stack-down',
				'im-icon-stack-up',
				'im-icon-stack-cancel',
				'im-icon-stack-checkmark',
				'im-icon-stack-list',
				'im-icon-stack-clubs',
				'im-icon-stack-spades',
				'im-icon-stack-hearts',
				'im-icon-stack-diamonds',
				'im-icon-stack-user',
				'im-icon-stack-4',
				'im-icon-stack-music',
				'im-icon-stack-play',
				'im-icon-move',
				'im-icon-resize',
				'im-icon-resize-2',
				'im-icon-warning',
				'im-icon-warning-2',
				'im-icon-notification',
				'im-icon-notification-2',
				'im-icon-question',
				'im-icon-question-2',
				'im-icon-question-3',
				'im-icon-question-4',
				'im-icon-question-5',
				'im-icon-plus-circle',
				'im-icon-plus-circle-2',
				'im-icon-minus-circle',
				'im-icon-minus-circle-2',
				'im-icon-info',
				'im-icon-info-2',
				'im-icon-blocked',
				'im-icon-cancel-circle',
				'im-icon-cancel-circle-2',
				'im-icon-checkmark-circle',
				'im-icon-checkmark-circle-2',
				'im-icon-cancel',
				'im-icon-spam',
				'im-icon-close',
				'im-icon-close-2',
				'im-icon-close-3',
				'im-icon-close-4',
				'im-icon-close-5',
				'im-icon-checkmark',
				'im-icon-checkmark-2',
				'im-icon-checkmark-3',
				'im-icon-checkmark-4',
				'im-icon-spell-check',
				'im-icon-minus',
				'im-icon-plus',
				'im-icon-minus-2',
				'im-icon-plus-2',
				'im-icon-enter',
				'im-icon-exit',
				'im-icon-enter-2',
				'im-icon-exit-2',
				'im-icon-enter-3',
				'im-icon-exit-3',
				'im-icon-exit-4',
				'im-icon-play-3',
				'im-icon-pause',
				'im-icon-stop',
				'im-icon-backward',
				'im-icon-forward-2',
				'im-icon-play-4',
				'im-icon-pause-2',
				'im-icon-stop-2',
				'im-icon-backward-2',
				'im-icon-forward-3',
				'im-icon-first',
				'im-icon-last',
				'im-icon-previous',
				'im-icon-next',
				'im-icon-eject',
				'im-icon-volume-high',
				'im-icon-volume-medium',
				'im-icon-volume-low',
				'im-icon-volume-mute',
				'im-icon-volume-mute-2',
				'im-icon-volume-increase',
				'im-icon-volume-decrease',
				'im-icon-volume-high-2',
				'im-icon-volume-medium-2',
				'im-icon-volume-low-2',
				'im-icon-volume-mute-3',
				'im-icon-volume-mute-4',
				'im-icon-volume-increase-2',
				'im-icon-volume-decrease-2',
				'im-icon-volume5',
				'im-icon-volume4',
				'im-icon-volume3',
				'im-icon-volume2',
				'im-icon-volume1',
				'im-icon-volume0',
				'im-icon-volume-mute-5',
				'im-icon-volume-mute-6',
				'im-icon-loop',
				'im-icon-loop-2',
				'im-icon-loop-3',
				'im-icon-loop-4',
				'im-icon-loop-5',
				'im-icon-shuffle',
				'im-icon-shuffle-2',
				'im-icon-wave',
				'im-icon-wave-2',
				'im-icon-arrow-first',
				'im-icon-arrow-right',
				'im-icon-arrow-up',
				'im-icon-arrow-right-2',
				'im-icon-arrow-down',
				'im-icon-arrow-left',
				'im-icon-arrow-up-2',
				'im-icon-arrow-right-3',
				'im-icon-arrow-down-2',
				'im-icon-arrow-left-2',
				'im-icon-arrow-up-left',
				'im-icon-arrow-up-3',
				'im-icon-arrow-up-right',
				'im-icon-arrow-right-4',
				'im-icon-arrow-down-right',
				'im-icon-arrow-down-3',
				'im-icon-arrow-down-left',
				'im-icon-arrow-left-3',
				'im-icon-arrow-up-left-2',
				'im-icon-arrow-up-4',
				'im-icon-arrow-up-right-2',
				'im-icon-arrow-right-5',
				'im-icon-arrow-down-right-2',
				'im-icon-arrow-down-4',
				'im-icon-arrow-down-left-2',
				'im-icon-arrow-left-4',
				'im-icon-arrow-up-left-3',
				'im-icon-arrow-up-5',
				'im-icon-arrow-up-right-3',
				'im-icon-arrow-right-6',
				'im-icon-arrow-down-right-3',
				'im-icon-arrow-down-5',
				'im-icon-arrow-down-left-3',
				'im-icon-arrow-left-5',
				'im-icon-arrow-up-left-4',
				'im-icon-arrow-up-6',
				'im-icon-arrow-up-right-4',
				'im-icon-arrow-right-7',
				'im-icon-arrow-down-right-4',
				'im-icon-arrow-down-6',
				'im-icon-arrow-down-left-4',
				'im-icon-arrow-left-6',
				'im-icon-arrow',
				'im-icon-arrow-2',
				'im-icon-arrow-3',
				'im-icon-arrow-4',
				'im-icon-arrow-5',
				'im-icon-arrow-6',
				'im-icon-arrow-7',
				'im-icon-arrow-8',
				'im-icon-arrow-up-left-5',
				'im-icon-arrow-square',
				'im-icon-arrow-up-right-5',
				'im-icon-arrow-right-8',
				'im-icon-arrow-down-right-5',
				'im-icon-arrow-down-7',
				'im-icon-arrow-down-left-5',
				'im-icon-arrow-left-7',
				'im-icon-arrow-up-7',
				'im-icon-arrow-right-9',
				'im-icon-arrow-down-8',
				'im-icon-arrow-left-8',
				'im-icon-arrow-up-8',
				'im-icon-arrow-right-10',
				'im-icon-arrow-bottom',
				'im-icon-arrow-left-9',
				'im-icon-arrow-up-left-6',
				'im-icon-arrow-up-9',
				'im-icon-arrow-up-right-6',
				'im-icon-arrow-right-11',
				'im-icon-arrow-down-right-6',
				'im-icon-arrow-down-9',
				'im-icon-arrow-down-left-6',
				'im-icon-arrow-left-10',
				'im-icon-arrow-up-left-7',
				'im-icon-arrow-up-10',
				'im-icon-arrow-up-right-7',
				'im-icon-arrow-right-12',
				'im-icon-arrow-down-right-7',
				'im-icon-arrow-down-10',
				'im-icon-arrow-down-left-7',
				'im-icon-arrow-left-11',
				'im-icon-arrow-up-11',
				'im-icon-arrow-right-13',
				'im-icon-arrow-down-11',
				'im-icon-arrow-left-12',
				'im-icon-arrow-up-12',
				'im-icon-arrow-right-14',
				'im-icon-arrow-down-12',
				'im-icon-arrow-left-13',
				'im-icon-arrow-up-13',
				'im-icon-arrow-right-15',
				'im-icon-arrow-down-13',
				'im-icon-arrow-left-14',
				'im-icon-arrow-up-14',
				'im-icon-arrow-right-16',
				'im-icon-arrow-down-14',
				'im-icon-arrow-left-15',
				'im-icon-arrow-up-15',
				'im-icon-arrow-right-17',
				'im-icon-arrow-down-15',
				'im-icon-arrow-left-16',
				'im-icon-arrow-up-16',
				'im-icon-arrow-right-18',
				'im-icon-arrow-down-16',
				'im-icon-arrow-left-17',
				'im-icon-menu-10',
				'im-icon-menu-11',
				'im-icon-menu-close',
				'im-icon-menu-close-2',
				'im-icon-enter-4',
				'im-icon-enter-5',
				'im-icon-esc',
				'im-icon-backspace',
				'im-icon-backspace-2',
				'im-icon-backspace-3',
				'im-icon-tab',
				'im-icon-transmission',
				'im-icon-transmission-2',
				'im-icon-sort',
				'im-icon-sort-2',
				'im-icon-key-keyboard',
				'im-icon-key-A',
				'im-icon-key-up',
				'im-icon-key-right',
				'im-icon-key-down',
				'im-icon-key-left',
				'im-icon-command',
				'im-icon-checkbox-checked',
				'im-icon-checkbox-unchecked',
				'im-icon-square',
				'im-icon-checkbox-partial',
				'im-icon-checkbox',
				'im-icon-checkbox-unchecked-2',
				'im-icon-checkbox-partial-2',
				'im-icon-checkbox-checked-2',
				'im-icon-checkbox-unchecked-3',
				'im-icon-checkbox-partial-3',
				'im-icon-radio-checked',
				'im-icon-radio-unchecked',
				'im-icon-circle',
				'im-icon-circle-2',
				'im-icon-crop',
				'im-icon-crop-2',
				'im-icon-vector',
				'im-icon-rulers',
				'im-icon-scissors',
				'im-icon-scissors-2',
				'im-icon-scissors-3',
				'im-icon-filter',
				'im-icon-filter-2',
				'im-icon-filter-3',
				'im-icon-filter-4',
				'im-icon-font',
				'im-icon-font-size',
				'im-icon-type',
				'im-icon-text-height',
				'im-icon-text-width',
				'im-icon-height',
				'im-icon-width',
				'im-icon-bold',
				'im-icon-underline',
				'im-icon-italic',
				'im-icon-strikethrough',
				'im-icon-strikethrough-2',
				'im-icon-font-size-2',
				'im-icon-bold-2',
				'im-icon-underline-2',
				'im-icon-italic-2',
				'im-icon-strikethrough-3',
				'im-icon-omega',
				'im-icon-sigma',
				'im-icon-nbsp',
				'im-icon-page-break',
				'im-icon-page-break-2',
				'im-icon-superscript',
				'im-icon-subscript',
				'im-icon-superscript-2',
				'im-icon-subscript-2',
				'im-icon-text-color',
				'im-icon-highlight',
				'im-icon-pagebreak',
				'im-icon-clear-formatting',
				'im-icon-table',
				'im-icon-table-2',
				'im-icon-insert-template',
				'im-icon-pilcrow',
				'im-icon-left-to-right',
				'im-icon-right-to-left',
				'im-icon-paragraph-left',
				'im-icon-paragraph-center',
				'im-icon-paragraph-right',
				'im-icon-paragraph-justify',
				'im-icon-paragraph-left-2',
				'im-icon-paragraph-center-2',
				'im-icon-paragraph-right-2',
				'im-icon-paragraph-justify-2',
				'im-icon-indent-increase',
				'im-icon-indent-decrease',
				'im-icon-paragraph-left-3',
				'im-icon-paragraph-center-3',
				'im-icon-paragraph-right-3',
				'im-icon-paragraph-justify-3',
				'im-icon-indent-increase-2',
				'im-icon-indent-decrease-2',
				'im-icon-share',
				'im-icon-new-tab',
				'im-icon-new-tab-2',
				'im-icon-popout',
				'im-icon-embed',
				'im-icon-code',
				'im-icon-console',
				'im-icon-seven-segment-0',
				'im-icon-seven-segment-1',
				'im-icon-seven-segment-2',
				'im-icon-seven-segment-3',
				'im-icon-seven-segment-4',
				'im-icon-seven-segment-5',
				'im-icon-seven-segment-6',
				'im-icon-seven-segment-7',
				'im-icon-seven-segment-8',
				'im-icon-seven-segment-9',
				'im-icon-share-2',
				'im-icon-share-3',
				'im-icon-mail',
				'im-icon-mail-2',
				'im-icon-mail-3',
				'im-icon-mail-4',
				'im-icon-google',
				'im-icon-google-plus',
				'im-icon-google-plus-2',
				'im-icon-google-plus-3',
				'im-icon-google-plus-4',
				'im-icon-google-drive',
				'im-icon-facebook',
				'im-icon-facebook-2',
				'im-icon-facebook-3',
				'im-icon-facebook-4',
				'im-icon-instagram',
				'im-icon-twitter',
				'im-icon-twitter-2',
				'im-icon-twitter-3',
				'im-icon-feed-2',
				'im-icon-feed-3',
				'im-icon-feed-4',
				'im-icon-youtube',
				'im-icon-youtube-2',
				'im-icon-vimeo',
				'im-icon-vimeo2',
				'im-icon-vimeo-2',
				'im-icon-lanyrd',
				'im-icon-flickr',
				'im-icon-flickr-2',
				'im-icon-flickr-3',
				'im-icon-flickr-4',
				'im-icon-picassa',
				'im-icon-picassa-2',
				'im-icon-dribbble',
				'im-icon-dribbble-2',
				'im-icon-dribbble-3',
				'im-icon-forrst',
				'im-icon-forrst-2',
				'im-icon-deviantart',
				'im-icon-deviantart-2',
				'im-icon-steam',
				'im-icon-steam-2',
				'im-icon-github',
				'im-icon-github-2',
				'im-icon-github-3',
				'im-icon-github-4',
				'im-icon-github-5',
				'im-icon-wordpress',
				'im-icon-wordpress-2',
				'im-icon-joomla',
				'im-icon-blogger',
				'im-icon-blogger-2',
				'im-icon-tumblr',
				'im-icon-tumblr-2',
				'im-icon-yahoo',
				'im-icon-tux',
				'im-icon-apple',
				'im-icon-finder',
				'im-icon-android',
				'im-icon-windows',
				'im-icon-windows8',
				'im-icon-soundcloud',
				'im-icon-soundcloud-2',
				'im-icon-skype',
				'im-icon-reddit',
				'im-icon-linkedin',
				'im-icon-lastfm',
				'im-icon-lastfm-2',
				'im-icon-delicious',
				'im-icon-stumbleupon',
				'im-icon-stumbleupon-2',
				'im-icon-stackoverflow',
				'im-icon-pinterest',
				'im-icon-pinterest-2',
				'im-icon-xing',
				'im-icon-xing-2',
				'im-icon-flattr',
				'im-icon-safari',
				'im-icon-foursquare',
				'im-icon-foursquare-2',
				'im-icon-paypal',
				'im-icon-paypal-2',
				'im-icon-paypal-3',
				'im-icon-yelp',
				'im-icon-libreoffice',
				'im-icon-file-pdf',
				'im-icon-file-openoffice',
				'im-icon-file-word',
				'im-icon-file-excel',
				'im-icon-file-zip',
				'im-icon-file-powerpoint',
				'im-icon-file-xml',
				'im-icon-file-css',
				'im-icon-html5',
				'im-icon-html5-2',
				'im-icon-css3',
				'im-icon-chrome',
				'im-icon-firefox',
				'im-icon-IE',
				'im-icon-opera',
			);
		}


		/** 
		 * The function return a array with all availables font-icons.
		 * @return $all_icons.
		 */
		public static function get_all_icons() {
			$icomoon = self::get_list_icomoon();
			$fontawesome = self::get_list_fontawesome();
			$glyphicon = self::get_list_glyphicons();
			$all_icons = array_merge( $icomoon, $fontawesome, $glyphicon );			
			return $all_icons;
		}

		/** 
		 * The function returns array with full list of google web fonts.
		 * @return  - array with full list of google web fonts.
		 */
		public static function get_googlefonts_list() {
			return array(
				'Open Sans',
				'Roboto',
				'ABeeZee',
				'Abel',
				'Abril Fatface',
				'Aclonica',
				'Acme',
				'Actor',
				'Adamina',
				'Advent Pro',
				'Aguafina Script',
				'Akronim',
				'Aladin',
				'Aldrich',
				'Alef',
				'Alegreya',
				'Alegreya SC',
				'Alegreya Sans',
				'Alegreya Sans SC',
				'Alex Brush',
				'Alfa Slab One',
				'Alice',
				'Alike',
				'Alike Angular',
				'Allan',
				'Allerta',
				'Allerta Stencil',
				'Allura',
				'Almendra',
				'Almendra Display',
				'Almendra SC',
				'Amarante',
				'Amaranth',
				'Amatic SC',
				'Amethysta',
				'Amiri',
				'Amita',
				'Anaheim',
				'Andada',
				'Andika',
				'Angkor',
				'Annie Use Your Telescope',
				'Anonymous Pro',
				'Antic',
				'Antic Didone',
				'Antic Slab',
				'Anton',
				'Arapey',
				'Arbutus',
				'Arbutus Slab',
				'Architects Daughter',
				'Archivo Black',
				'Archivo Narrow',
				'Arimo',
				'Arizonia',
				'Armata',
				'Artifika',
				'Arvo',
				'Arya',
				'Asap',
				'Asar',
				'Asset',
				'Astloch',
				'Asul',
				'Atomic Age',
				'Aubrey',
				'Audiowide',
				'Autour One',
				'Average',
				'Average Sans',
				'Averia Gruesa Libre',
				'Averia Libre',
				'Averia Sans Libre',
				'Averia Serif Libre',
				'Bad Script',
				'Balthazar',
				'Bangers',
				'Basic',
				'Battambang',
				'Baumans',
				'Bayon',
				'Belgrano',
				'Belleza',
				'BenchNine',
				'Bentham',
				'Berkshire Swash',
				'Bevan',
				'Bigelow Rules',
				'Bigshot One',
				'Bilbo',
				'Bilbo Swash Caps',
				'Biryani',
				'Bitter',
				'Black Ops One',
				'Bokor',
				'Bonbon',
				'Boogaloo',
				'Bowlby One',
				'Bowlby One SC',
				'Brawler',
				'Bree Serif',
				'Bubblegum Sans',
				'Bubbler One',
				'Buda',
				'Buenard',
				'Butcherman',
				'Butterfly Kids',
				'Cabin',
				'Cabin Condensed',
				'Cabin Sketch',
				'Caesar Dressing',
				'Cagliostro',
				'Calligraffitti',
				'Cambay',
				'Cambo',
				'Candal',
				'Cantarell',
				'Cantata One',
				'Cantora One',
				'Capriola',
				'Cardo',
				'Carme',
				'Carrois Gothic',
				'Carrois Gothic SC',
				'Carter One',
				'Catamaran',
				'Caudex',
				'Caveat',
				'Caveat Brush',
				'Cedarville Cursive',
				'Ceviche One',
				'Changa One',
				'Chango',
				'Chau Philomene One',
				'Chela One',
				'Chelsea Market',
				'Chenla',
				'Cherry Cream Soda',
				'Cherry Swash',
				'Chewy',
				'Chicle',
				'Chivo',
				'Chonburi',
				'Cinzel',
				'Cinzel Decorative',
				'Clicker Script',
				'Coda',
				'Coda Caption',
				'Codystar',
				'Combo',
				'Comfortaa',
				'Coming Soon',
				'Concert One',
				'Condiment',
				'Content',
				'Contrail One',
				'Convergence',
				'Cookie',
				'Copse',
				'Corben',
				'Courgette',
				'Cousine',
				'Coustard',
				'Covered By Your Grace',
				'Crafty Girls',
				'Creepster',
				'Crete Round',
				'Crimson Text',
				'Croissant One',
				'Crushed',
				'Cuprum',
				'Cutive',
				'Cutive Mono',
				'Damion',
				'Dancing Script',
				'Dangrek',
				'Dawning of a New Day',
				'Days One',
				'Dekko',
				'Delius',
				'Delius Swash Caps',
				'Delius Unicase',
				'Della Respira',
				'Denk One',
				'Devonshire',
				'Dhurjati',
				'Didact Gothic',
				'Diplomata',
				'Diplomata SC',
				'Domine',
				'Donegal One',
				'Doppio One',
				'Dorsa',
				'Dosis',
				'Dr Sugiyama',
				'Droid Sans',
				'Droid Sans Mono',
				'Droid Serif',
				'Duru Sans',
				'Dynalight',
				'EB Garamond',
				'Eagle Lake',
				'Eater',
				'Economica',
				'Eczar',
				'Ek Mukta',
				'Electrolize',
				'Elsie',
				'Elsie Swash Caps',
				'Emblema One',
				'Emilys Candy',
				'Engagement',
				'Englebert',
				'Enriqueta',
				'Erica One',
				'Esteban',
				'Euphoria Script',
				'Ewert',
				'Exo',
				'Exo 2',
				'Expletus Sans',
				'Fanwood Text',
				'Fascinate',
				'Fascinate Inline',
				'Faster One',
				'Fasthand',
				'Fauna One',
				'Federant',
				'Federo',
				'Felipa',
				'Fenix',
				'Finger Paint',
				'Fira Mono',
				'Fira Sans',
				'Fjalla One',
				'Fjord One',
				'Flamenco',
				'Flavors',
				'Fondamento',
				'Fontdiner Swanky',
				'Forum',
				'Francois One',
				'Freckle Face',
				'Fredericka the Great',
				'Fredoka One',
				'Freehand',
				'Fresca',
				'Frijole',
				'Fruktur',
				'Fugaz One',
				'GFS Didot',
				'GFS Neohellenic',
				'Gabriela',
				'Gafata',
				'Galdeano',
				'Galindo',
				'Gentium Basic',
				'Gentium Book Basic',
				'Geo',
				'Geostar',
				'Geostar Fill',
				'Germania One',
				'Gidugu',
				'Gilda Display',
				'Give You Glory',
				'Glass Antiqua',
				'Glegoo',
				'Gloria Hallelujah',
				'Goblin One',
				'Gochi Hand',
				'Gorditas',
				'Goudy Bookletter 1911',
				'Graduate',
				'Grand Hotel',
				'Gravitas One',
				'Great Vibes',
				'Griffy',
				'Gruppo',
				'Gudea',
				'Gurajada',
				'Habibi',
				'Halant',
				'Hammersmith One',
				'Hanalei',
				'Hanalei Fill',
				'Handlee',
				'Hanuman',
				'Happy Monkey',
				'Headland One',
				'Henny Penny',
				'Herr Von Muellerhoff',
				'Hind',
				'Hind Siliguri',
				'Hind Vadodara',
				'Holtwood One SC',
				'Homemade Apple',
				'Homenaje',
				'IM Fell DW Pica',
				'IM Fell DW Pica SC',
				'IM Fell Double Pica',
				'IM Fell Double Pica SC',
				'IM Fell English',
				'IM Fell English SC',
				'IM Fell French Canon',
				'IM Fell French Canon SC',
				'IM Fell Great Primer',
				'IM Fell Great Primer SC',
				'Iceberg',
				'Iceland',
				'Imprima',
				'Inconsolata',
				'Inder',
				'Indie Flower',
				'Inika',
				'Inknut Antiqua',
				'Irish Grover',
				'Istok Web',
				'Italiana',
				'Italianno',
				'Itim',
				'Jacques Francois',
				'Jacques Francois Shadow',
				'Jaldi',
				'Jim Nightshade',
				'Jockey One',
				'Jolly Lodger',
				'Josefin Sans',
				'Josefin Slab',
				'Joti One',
				'Judson',
				'Julee',
				'Julius Sans One',
				'Junge',
				'Jura',
				'Just Another Hand',
				'Just Me Again Down Here',
				'Kadwa',
				'Kalam',
				'Kameron',
				'Kantumruy',
				'Karla',
				'Karma',
				'Kaushan Script',
				'Kavoon',
				'Kdam Thmor',
				'Keania One',
				'Kelly Slab',
				'Kenia',
				'Khand',
				'Khmer',
				'Khula',
				'Kite One',
				'Knewave',
				'Kotta One',
				'Koulen',
				'Kranky',
				'Kreon',
				'Kristi',
				'Krona One',
				'Kurale',
				'La Belle Aurore',
				'Laila',
				'Lakki Reddy',
				'Lancelot',
				'Lateef',
				'Lato',
				'League Script',
				'Leckerli One',
				'Ledger',
				'Lekton',
				'Lemon',
				'Libre Baskerville',
				'Life Savers',
				'Lilita One',
				'Lily Script One',
				'Limelight',
				'Linden Hill',
				'Lobster',
				'Lobster Two',
				'Londrina Outline',
				'Londrina Shadow',
				'Londrina Sketch',
				'Londrina Solid',
				'Lora',
				'Love Ya Like A Sister',
				'Loved by the King',
				'Lovers Quarrel',
				'Luckiest Guy',
				'Lusitana',
				'Lustria',
				'Macondo',
				'Macondo Swash Caps',
				'Magra',
				'Maiden Orange',
				'Mako',
				'Mallanna',
				'Mandali',
				'Marcellus',
				'Marcellus SC',
				'Marck Script',
				'Margarine',
				'Marko One',
				'Marmelad',
				'Martel',
				'Martel Sans',
				'Marvel',
				'Mate',
				'Mate SC',
				'Maven Pro',
				'McLaren',
				'Meddon',
				'MedievalSharp',
				'Medula One',
				'Megrim',
				'Meie Script',
				'Merienda',
				'Merienda One',
				'Merriweather',
				'Merriweather Sans',
				'Metal',
				'Metal Mania',
				'Metamorphous',
				'Metrophobic',
				'Michroma',
				'Milonga',
				'Miltonian',
				'Miltonian Tattoo',
				'Miniver',
				'Miss Fajardose',
				'Modak',
				'Modern Antiqua',
				'Molengo',
				'Molle',
				'Monda',
				'Monofett',
				'Monoton',
				'Monsieur La Doulaise',
				'Montaga',
				'Montez',
				'Montserrat',
				'Montserrat Alternates',
				'Montserrat Subrayada',
				'Moul',
				'Moulpali',
				'Mountains of Christmas',
				'Mouse Memoirs',
				'Mr Bedfort',
				'Mr Dafoe',
				'Mr De Haviland',
				'Mrs Saint Delafield',
				'Mrs Sheppards',
				'Muli',
				'Mystery Quest',
				'NTR',
				'Neucha',
				'Neuton',
				'New Rocker',
				'News Cycle',
				'Niconne',
				'Nixie One',
				'Nobile',
				'Nokora',
				'Norican',
				'Nosifer',
				'Nothing You Could Do',
				'Noticia Text',
				'Noto Sans',
				'Noto Serif',
				'Nova Cut',
				'Nova Flat',
				'Nova Mono',
				'Nova Oval',
				'Nova Round',
				'Nova Script',
				'Nova Slim',
				'Nova Square',
				'Numans',
				'Nunito',
				'Odor Mean Chey',
				'Offside',
				'Old Standard TT',
				'Oldenburg',
				'Oleo Script',
				'Oleo Script Swash Caps',
				'Open Sans',
				'Open Sans Condensed',
				'Oranienbaum',
				'Orbitron',
				'Oregano',
				'Orienta',
				'Original Surfer',
				'Oswald',
				'Over the Rainbow',
				'Overlock',
				'Overlock SC',
				'Ovo',
				'Oxygen',
				'Oxygen Mono',
				'PT Mono',
				'PT Sans',
				'PT Sans Caption',
				'PT Sans Narrow',
				'PT Serif',
				'PT Serif Caption',
				'Pacifico',
				'Palanquin',
				'Palanquin Dark',
				'Paprika',
				'Parisienne',
				'Passero One',
				'Passion One',
				'Pathway Gothic One',
				'Patrick Hand',
				'Patrick Hand SC',
				'Patua One',
				'Paytone One',
				'Peddana',
				'Peralta',
				'Permanent Marker',
				'Petit Formal Script',
				'Petrona',
				'Philosopher',
				'Piedra',
				'Pinyon Script',
				'Pirata One',
				'Plaster',
				'Play',
				'Playball',
				'Playfair Display',
				'Playfair Display SC',
				'Podkova',
				'Poiret One',
				'Poller One',
				'Poly',
				'Pompiere',
				'Pontano Sans',
				'Poppins',
				'Port Lligat Sans',
				'Port Lligat Slab',
				'Pragati Narrow',
				'Prata',
				'Preahvihear',
				'Press Start 2P',
				'Princess Sofia',
				'Prociono',
				'Prosto One',
				'Puritan',
				'Purple Purse',
				'Quando',
				'Quantico',
				'Quattrocento',
				'Quattrocento Sans',
				'Questrial',
				'Quicksand',
				'Quintessential',
				'Qwigley',
				'Racing Sans One',
				'Radley',
				'Rajdhani',
				'Raleway',
				'Raleway Dots',
				'Ramabhadra',
				'Ramaraja',
				'Rambla',
				'Rammetto One',
				'Ranchers',
				'Rancho',
				'Ranga',
				'Rationale',
				'Ravi Prakash',
				'Redressed',
				'Reenie Beanie',
				'Revalia',
				'Rhodium Libre',
				'Ribeye',
				'Ribeye Marrow',
				'Righteous',
				'Risque',
				'Roboto',
				'Roboto Condensed',
				'Roboto Mono',
				'Roboto Slab',
				'Rochester',
				'Rock Salt',
				'Rokkitt',
				'Romanesco',
				'Ropa Sans',
				'Rosario',
				'Rosarivo',
				'Rouge Script',
				'Rozha One',
				'Rubik',
				'Rubik Mono One',
				'Rubik One',
				'Ruda',
				'Rufina',
				'Ruge Boogie',
				'Ruluko',
				'Rum Raisin',
				'Ruslan Display',
				'Russo One',
				'Ruthie',
				'Rye',
				'Sacramento',
				'Sahitya',
				'Sail',
				'Salsa',
				'Sanchez',
				'Sancreek',
				'Sansita One',
				'Sarala',
				'Sarina',
				'Sarpanch',
				'Satisfy',
				'Scada',
				'Scheherazade',
				'Schoolbell',
				'Seaweed Script',
				'Sevillana',
				'Seymour One',
				'Shadows Into Light',
				'Shadows Into Light Two',
				'Shanti',
				'Share',
				'Share Tech',
				'Share Tech Mono',
				'Shojumaru',
				'Short Stack',
				'Siemreap',
				'Sigmar One',
				'Signika',
				'Signika Negative',
				'Simonetta',
				'Sintony',
				'Sirin Stencil',
				'Six Caps',
				'Skranji',
				'Slabo 13px',
				'Slabo 27px',
				'Slackey',
				'Smokum',
				'Smythe',
				'Sniglet',
				'Snippet',
				'Snowburst One',
				'Sofadi One',
				'Sofia',
				'Sonsie One',
				'Sorts Mill Goudy',
				'Source Code Pro',
				'Source Sans Pro',
				'Source Serif Pro',
				'Special Elite',
				'Spicy Rice',
				'Spinnaker',
				'Spirax',
				'Squada One',
				'Sree Krushnadevaraya',
				'Stalemate',
				'Stalinist One',
				'Stardos Stencil',
				'Stint Ultra Condensed',
				'Stint Ultra Expanded',
				'Stoke',
				'Strait',
				'Sue Ellen Francisco',
				'Sumana',
				'Sunshiney',
				'Supermercado One',
				'Sura',
				'Suranna',
				'Suravaram',
				'Suwannaphum',
				'Swanky and Moo Moo',
				'Syncopate',
				'Tangerine',
				'Taprom',
				'Tauri',
				'Teko',
				'Telex',
				'Tenali Ramakrishna',
				'Tenor Sans',
				'Text Me One',
				'The Girl Next Door',
				'Tienne',
				'Tillana',
				'Timmana',
				'Tinos',
				'Titan One',
				'Titillium Web',
				'Trade Winds',
				'Trocchi',
				'Trochut',
				'Trykker',
				'Tulpen One',
				'Ubuntu',
				'Ubuntu Condensed',
				'Ubuntu Mono',
				'Ultra',
				'Uncial Antiqua',
				'Underdog',
				'Unica One',
				'UnifrakturCook',
				'UnifrakturMaguntia',
				'Unkempt',
				'Unlock',
				'Unna',
				'VT323',
				'Vampiro One',
				'Varela',
				'Varela Round',
				'Vast Shadow',
				'Vesper Libre',
				'Vibur',
				'Vidaloka',
				'Viga',
				'Voces',
				'Volkhov',
				'Vollkorn',
				'Voltaire',
				'Waiting for the Sunrise',
				'Wallpoet',
				'Walter Turncoat',
				'Warnes',
				'Wellfleet',
				'Wendy One',
				'Wire One',
				'Work Sans',
				'Yanone Kaffeesatz',
				'Yantramanav',
				'Yellowtail',
				'Yeseva One',
				'Yesteryear',
				'Zeyada',
			);
		}

		/** 
		 * The function returns a list of available social icons.
		 * @return $social_icons - array with list of available social icons.
		 */
		public static function get_list_of_animations () {
			$social_icons = array(
				'None' => '',
				'Bouncing:' => 'bounceIn',
				' &nbsp; &nbsp; bounceIn' => 'bounceIn',
				' &nbsp; &nbsp; bounceInDown' => 'bounceInDown',
				' &nbsp; &nbsp; bounceInLeft' => 'bounceInLeft',
				' &nbsp; &nbsp; bounceInRight' => 'bounceInRight',
				' &nbsp; &nbsp; bounceInUp' => 'bounceInUp',
				'Fading:' => 'fadeIn',
				' &nbsp; &nbsp; fadeIn' => 'fadeIn',
				' &nbsp; &nbsp; fadeInDown' => 'fadeInDown',
				' &nbsp; &nbsp; fadeInDownBig' => 'fadeInDownBig',
				' &nbsp; &nbsp; fadeInLeft' => 'fadeInLeft',
				' &nbsp; &nbsp; fadeInLeftBig' => 'fadeInLeftBig',
				' &nbsp; &nbsp; fadeInRight' => 'fadeInRight',
				' &nbsp; &nbsp; fadeInRightBig' => 'fadeInRightBig',
				' &nbsp; &nbsp; fadeInUp' => 'fadeInUp',
				' &nbsp; &nbsp; fadeInUpBig' => 'fadeInUpBig',
				'Flippers:' => 'flip',
				' &nbsp; &nbsp; flip' => 'flip',
				' &nbsp; &nbsp; flipInX' => 'flipInX',
				' &nbsp; &nbsp; flipInY' => 'flipInY',
				'Sliders:' => 'slideInDown',
				' &nbsp; &nbsp; slideInDown' => 'slideInDown',
				' &nbsp; &nbsp; slideInLeft' => 'slideInLeft',
				' &nbsp; &nbsp; slideInRight' => 'slideInRight',
				' &nbsp; &nbsp; slideInUp' => 'slideInUp',
				'Perspective:' => 'perspectiveDownRetourn',
				' &nbsp; &nbsp; perspectiveDownRetourn' => 'perspectiveDownRetourn',
				' &nbsp; &nbsp; perspectiveLeftRetourn' => 'perspectiveLeftRetourn',
				' &nbsp; &nbsp; perspectiveRightRetourn' => 'perspectiveRightRetourn',
				' &nbsp; &nbsp; perspectiveUpRetourn' => 'perspectiveUpRetourn',
				'Rotating:' => 'rotateIn',
				' &nbsp; &nbsp; rotateIn' => 'rotateIn',
				' &nbsp; &nbsp; rotateInDownLeft' => 'rotateInDownLeft',
				' &nbsp; &nbsp; rotateInDownRight' => 'rotateInDownRight',
				' &nbsp; &nbsp; rotateInUpLeft' => 'rotateInUpLeft',
				' &nbsp; &nbsp; rotateInUpRight' => 'rotateInUpRight',
				'Space:' => 'spaceInUp',
				' &nbsp; &nbsp; spaceInDown' => 'spaceInDown',
				' &nbsp; &nbsp; spaceInLeft' => 'spaceInLeft',
				' &nbsp; &nbsp; spaceInRight' => 'spaceInRight',
				' &nbsp; &nbsp; spaceInUp' => 'spaceInUp',
				'Zoom:' => 'zoomIn',
				' &nbsp; &nbsp; zoomIn' => 'zoomIn',
				' &nbsp; &nbsp; zoomInDown' => 'zoomInDown',
				' &nbsp; &nbsp; zoomInLeft' => 'zoomInLeft',
				' &nbsp; &nbsp; zoomInRight' => 'zoomInRight',
				' &nbsp; &nbsp; zoomInUp' => 'zoomInUp',
				'Specials:' => 'vanishIn',
				' &nbsp; &nbsp; vanishIn' => 'vanishIn',
				' &nbsp; &nbsp; swap' => 'swap',
				' &nbsp; &nbsp; twisterInDown' => 'twisterInDown',
				' &nbsp; &nbsp; foolishIn' => 'foolishIn',
				' &nbsp; &nbsp; rollIn' => 'rollIn',
				' &nbsp; &nbsp; lightSpeedIn' => 'lightSpeedIn',
				'Capture the Attention (Good for infinite):' => 'bounce',
				' &nbsp; &nbsp; bounce' => 'bounce',
				' &nbsp; &nbsp; flash' => 'flash',
				' &nbsp; &nbsp; pulse' => 'pulse',
				' &nbsp; &nbsp; rubberBand' => 'rubberBand',
				' &nbsp; &nbsp; shake' => 'shake',
				' &nbsp; &nbsp; swing' => 'swing',
				' &nbsp; &nbsp; tada' => 'tada',
				' &nbsp; &nbsp; wobble' => 'wobble',
			);
			return $social_icons;
		}
	}
}
?>