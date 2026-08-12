/**
 * Landing "Direction over Noise" — animações.
 *
 * Sem dependências. Usa IntersectionObserver para:
 *  - revelar elementos [data-reveal] ao entrar no ecrã (com stagger);
 *  - animar contadores das métricas [data-count];
 *  - disparar o risco animado do hero (classe .in-view no .rb-lp-hero).
 *
 * Respeita prefers-reduced-motion.
 */
( function () {
	'use strict';

	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function ready( fn ) {
		if ( document.readyState !== 'loading' ) { fn(); }
		else { document.addEventListener( 'DOMContentLoaded', fn ); }
	}

	ready( function () {
		var revealEls = Array.prototype.slice.call( document.querySelectorAll( '[data-reveal]' ) );
		var counters = Array.prototype.slice.call( document.querySelectorAll( '[data-count]' ) );

		// Stagger: define --rb-i por posição entre irmãos.
		revealEls.forEach( function ( el ) {
			if ( el.parentElement ) {
				var siblings = Array.prototype.filter.call( el.parentElement.children, function ( c ) {
					return c.hasAttribute( 'data-reveal' );
				} );
				el.style.setProperty( '--rb-i', siblings.indexOf( el ) );
			}
		} );

		if ( reduce || ! ( 'IntersectionObserver' in window ) ) {
			revealEls.forEach( function ( el ) { el.classList.add( 'in-view' ); } );
			var hero = document.querySelector( '.rb-lp-hero' );
			if ( hero ) { hero.classList.add( 'in-view' ); }
			counters.forEach( function ( el ) { /* deixa o texto tal como está */ } );
			return;
		}

		var io = new IntersectionObserver( function ( entries, obs ) {
			entries.forEach( function ( entry ) {
				if ( ! entry.isIntersecting ) { return; }
				var el = entry.target;
				el.classList.add( 'in-view' );
				if ( el.hasAttribute( 'data-count' ) ) { animateCount( el ); }
				obs.unobserve( el );
			} );
		}, { threshold: 0.18, rootMargin: '0px 0px -8% 0px' } );

		revealEls.forEach( function ( el ) { io.observe( el ); } );
		counters.forEach( function ( el ) { if ( revealEls.indexOf( el ) === -1 ) { io.observe( el ); } } );

		// O hero está acima da dobra: ativa já (dispara o risco animado).
		var hero = document.querySelector( '.rb-lp-hero' );
		if ( hero ) {
			requestAnimationFrame( function () { hero.classList.add( 'in-view' ); } );
		}
	} );

	/**
	 * Anima um contador preservando prefixos/sufixos (ex.: "+312%", "3x").
	 */
	function animateCount( el ) {
		var raw = ( el.getAttribute( 'data-count' ) || el.textContent ).trim();
		var m = raw.match( /^(\D*)(\d+)(\D*)$/ );
		if ( ! m ) { return; }
		var pre = m[1], target = parseInt( m[2], 10 ), suf = m[3];
		var dur = 1200, start = null;

		function step( ts ) {
			if ( start === null ) { start = ts; }
			var p = Math.min( ( ts - start ) / dur, 1 );
			var eased = 1 - Math.pow( 1 - p, 3 ); // easeOutCubic
			el.textContent = pre + Math.round( eased * target ) + suf;
			if ( p < 1 ) { requestAnimationFrame( step ); }
		}
		requestAnimationFrame( step );
	}
} )();
