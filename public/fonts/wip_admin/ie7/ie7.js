/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'wip_admin\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-folder': '&#xe600;',
		'icon-gif': '&#xe629;',
		'icon-jpg': '&#xe62a;',
		'icon-pdf': '&#xe62b;',
		'icon-png': '&#xe62c;',
		'icon-zip': '&#xe62d;',
		'icon-checkmark': '&#xe002;',
		'icon-cancel': '&#xe003;',
		'icon-pencil': '&#xe001;',
		'icon-house': '&#xe011;',
		'icon-paperclip': '&#xe000;',
		'icon-cog': '&#xe004;',
		'icon-warning': '&#xe005;',
		'icon-trashcan': '&#xe006;',
		'icon-check-alt': '&#xe008;',
		'icon-plus': '&#xe009;',
		'icon-search': '&#xe00a;',
		'icon-logo_wip': '&#xe00c;',
		'icon-zoom-out': '&#xe62e;',
		'icon-zoom-in': '&#xe62f;',
		'icon-video': '&#xe636;',
		'icon-uneye': '&#xe637;',
		'icon-eye': '&#xe630;',
		'icon-unlock': '&#xe638;',
		'icon-txt-right': '&#xe631;',
		'icon-txt-left': '&#xe632;',
		'icon-txt-justify': '&#xe633;',
		'icon-txt-center': '&#xe634;',
		'icon-fumetti': '&#xe656;',
		'icon-fumetto-testo': '&#xe659;',
		'icon-fumetto': '&#xe65a;',
		'icon-uniE65F': '&#xe65f;',
		'icon-slides': '&#xe660;',
		'icon-picture': '&#xe688;',
		'icon-write-block': '&#xe68b;',
		'icon-write-table': '&#xe68c;',
		'icon-write': '&#xe68d;',
		'icon-uniE687': '&#xe687;',
		'icon-zoom-in1': '&#xe689;',
		'icon-zoom2': '&#xe68a;',
		'icon-lock': '&#xe68f;',
		'icon-list-left': '&#xe692;',
		'icon-list': '&#xe693;',
		'icon-grid-block': '&#xe6a6;',
		'icon-grid': '&#xe6a7;',
		'icon-uniE6AC': '&#xe6ac;',
		'icon-event-ok': '&#xe6fc;',
		'icon-event-add': '&#xe6fd;',
		'icon-event-date': '&#xe6fe;',
		'icon-target': '&#xe6ff;',
		'icon-wind-no': '&#xe700;',
		'icon-wind-ok': '&#xe701;',
		'icon-wind-all': '&#xe702;',
		'icon-wind-right': '&#xe703;',
		'icon-wind-left': '&#xe704;',
		'icon-wind-ko': '&#xe705;',
		'icon-wind-plus': '&#xe706;',
		'icon-wind': '&#xe707;',
		'icon-mark': '&#xe70a;',
		'icon-book-open': '&#xe70b;',
		'icon-book-empty': '&#xe70c;',
		'icon-book': '&#xe70d;',
		'icon-notification': '&#xe711;',
		'icon-pipe-chart': '&#xe71c;',
		'icon-pipe-chartleft': '&#xe71d;',
		'icon-pipe-chartcenter': '&#xe71e;',
		'icon-pipe-chartright': '&#xe71f;',
		'icon-arrow-updown': '&#xe720;',
		'icon-arrow-upanddown': '&#xe721;',
		'icon-arrow-leftright': '&#xe722;',
		'icon-arrow-leftandright': '&#xe723;',
		'icon-arrow-move': '&#xe724;',
		'icon-uniE72F': '&#xe72f;',
		'icon-message': '&#xe732;',
		'icon-gift': '&#xe601;',
		'icon-play': '&#xe602;',
		'icon-pause': '&#xe603;',
		'icon-minus': '&#xe604;',
		'icon-clock': '&#xe605;',
		'icon-inbox': '&#xe606;',
		'icon-key': '&#xe607;',
		'icon-file': '&#xe608;',
		'icon-console': '&#xe609;',
		'icon-tag': '&#xe60a;',
		'icon-star': '&#xe60b;',
		'icon-flag': '&#xe60c;',
		'icon-switch': '&#xe60d;',
		'icon-blocked': '&#xe60e;',
		'icon-user': '&#xe60f;',
		'icon-forward2': '&#xe610;',
		'icon-reply-all': '&#xe611;',
		'icon-user-add': '&#xe612;',
		'icon-heart': '&#xe613;',
		'icon-heart2': '&#xe614;',
		'icon-star2': '&#xe615;',
		'icon-star3': '&#xe616;',
		'icon-location': '&#xe617;',
		'icon-cc': '&#xe618;',
		'icon-cc-by': '&#xe619;',
		'icon-cc-nc': '&#xe61a;',
		'icon-cc-nc-eu': '&#xe61b;',
		'icon-cc-nc-jp': '&#xe61c;',
		'icon-cc-sa': '&#xe61d;',
		'icon-cc-nd': '&#xe61e;',
		'icon-cc-pd': '&#xe61f;',
		'icon-arrow-left': '&#xe620;',
		'icon-arrow-down': '&#xe621;',
		'icon-arrow-up': '&#xe622;',
		'icon-arrow-right': '&#xe623;',
		'icon-arrow-left2': '&#xe624;',
		'icon-arrow-down2': '&#xe625;',
		'icon-arrow-up2': '&#xe626;',
		'icon-arrow-right2': '&#xe627;',
		'icon-menu': '&#xe628;',
		'icon-ellipsis': '&#xe639;',
		'icon-dots': '&#xe63a;',
		'icon-dot': '&#xe63b;',
		'icon-cc-zero': '&#xe63c;',
		'icon-cc-share': '&#xe63d;',
		'icon-cc-share2': '&#xe63e;',
		'icon-upload': '&#xe63f;',
		'icon-reply': '&#xe640;',
		'icon-code': '&#xe641;',
		'icon-magnet': '&#xe642;',
		'icon-light-down': '&#xe643;',
		'icon-light-up': '&#xe644;',
		'icon-adjust': '&#xe645;',
		'icon-signal': '&#xe646;',
		'icon-rss': '&#xe647;',
		'icon-publish': '&#xe648;',
		'icon-info': '&#xe649;',
		'icon-info-alt': '&#xe64a;',
		'icon-help-alt': '&#xe64b;',
		'icon-help': '&#xe64c;',
		'icon-cycle': '&#xe64d;',
		'icon-shuffle': '&#xe64e;',
		'icon-ccw': '&#xe64f;',
		'icon-cw': '&#xe650;',
		'icon-back-turn': '&#xe651;',
		'icon-after': '&#xe652;',
		'icon-retweet': '&#xe653;',
		'icon-loop': '&#xe654;',
		'icon-back': '&#xe655;',
		'icon-resize-shrink': '&#xe657;',
		'icon-resize-enlarge': '&#xe658;',
		'icon-arrow-down3': '&#xe661;',
		'icon-arrow-left3': '&#xe662;',
		'icon-arrow-up3': '&#xe663;',
		'icon-arrow-right3': '&#xe664;',
		'icon-flickr': '&#xe665;',
		'icon-vimeo': '&#xe666;',
		'icon-twitter': '&#xe667;',
		'icon-facebook': '&#xe668;',
		'icon-googleplus': '&#xe669;',
		'icon-pinterest': '&#xe66a;',
		'icon-tumblr': '&#xe66b;',
		'icon-linkedin': '&#xe66c;',
		'icon-dribbble': '&#xe66d;',
		'icon-stumbleupon': '&#xe66e;',
		'icon-lastfm': '&#xe66f;',
		'icon-rdio': '&#xe670;',
		'icon-dropbox': '&#xe671;',
		'icon-instagram': '&#xe672;',
		'icon-evernote': '&#xe673;',
		'icon-smashing': '&#xe674;',
		'icon-behance': '&#xe675;',
		'icon-circles': '&#xe676;',
		'icon-soundcloud': '&#xe677;',
		'icon-picasa': '&#xe678;',
		'icon-paypal': '&#xe679;',
		'icon-skype': '&#xe67a;',
		'icon-github': '&#xe67b;',
		'icon-music': '&#xe67c;',
		'icon-music2': '&#xe67d;',
		'icon-cloud': '&#xe67e;',
		'icon-disk': '&#xe67f;',
		'icon-bars': '&#xe680;',
		'icon-graph': '&#xe681;',
		'icon-pie': '&#xe682;',
		'icon-statistics': '&#xe683;',
		'icon-minus-alt': '&#xe684;',
		'icon-plus-alt': '&#xe685;',
		'icon-cross-alt': '&#xe686;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
