/* =========================================================
 * [custom.js]
 * Project:			admin-wip_1.3.2
 * Description:		javascript assets
 * Start on:		03/10/2013
 * Copyright:		2013 Wip Italia S.r.l.
 * Author URI:		http://www.wipitalia.it/
 * ========================================================= *
 * this file is minifized and imported by script.html include
 * ========================================================= */


 /* ----------- COMMON UTILITIES -----------------*/
// wipwrap definition if not already set
window.wipwrap = window.wipwrap || {};
window.wipwrap.debugging = true; // or true

window.wipwrap.debuglog = []; // or true
window.wipwrap.isIE = document.all && document.compatMode || false;

//if ($('#debug').length > 0) wipwrap.debugging = true;
if (window.wipwrap.isIE || !window.wipwrap.debugging || typeof console == "undefined") var console = { log: function(){}};
if (!window.wipwrap.isIE && typeof console == "undefined") var console = { log: function() {} };
else if (window.wipwrap.debugging && typeof console.log == "undefined") console.log = function() {};

requirejs.config({
	baseUrl: "js/"
	,paths: {
		modernizr: 'vendor/modernizr-2.6.2.min'
		,jq: 'vendor/jquery-1.11.0.min'
		,dynatable: 'vendor/jquery/jquery.dynatable/jquery.dynatable'
	}
	//,shim: {
	//	'jq': ['modernizr']
	//}
});


requirejs(['jq'],function (jq) {
	$(document).ready(function (){
		// The DOM is now loaded and can be manipulated.
		// here only the common script 4 this page
		requirejs(['dynatable'],function (jq) {
			yepnope.injectCss("js/vendor/jquery/jquery.dynatable/jquery.dynatable.css");
			$('table').dynatable({
				table: {
					//defaultColumnIdStyle: 'trimDash'
				},
				features: {
					paginate: false,
					search: false,
					recordCount: false,
					perPageSelect: false
				}
			});
		});
		// AFTER READ ALL DOCUMENT
		$('html').removeClass('no-document-ready').addClass('document-ready');
	});
});


// ------------------------------------------------
// -------------- END custom.js -------------------
// ------------------------------------------------


