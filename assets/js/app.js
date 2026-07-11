/**
 * Theme-wide JavaScript entry point.
 */

( function () {
	'use strict';

	document.documentElement.classList.add( 'js' );

	var toggle = document.querySelector( '.site-navigation-toggle' );
	var navigation = document.querySelector( '.site-navigation' );

	if ( ! toggle || ! navigation ) {
		return;
	}

	function closeNavigation() {
		toggle.setAttribute( 'aria-expanded', 'false' );
		navigation.classList.remove( 'is-open' );
	}

	toggle.addEventListener( 'click', function () {
		var isOpen = toggle.getAttribute( 'aria-expanded' ) === 'true';

		toggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
		navigation.classList.toggle( 'is-open', ! isOpen );
	} );

	document.addEventListener( 'keyup', function ( event ) {
		if ( event.key === 'Escape' && toggle.getAttribute( 'aria-expanded' ) === 'true' ) {
			closeNavigation();
			toggle.focus();
		}
	} );
}() );
