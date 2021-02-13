/*
* Animation manager for landing banner
* */
( function() {
	window.scroll( {
		top: 0,
		left: 0,
		behavior: 'smooth',
	} );
	document.body.style.overflow = 'hidden';
	const landingBanner = document.querySelector( '.landing-banner' );
	const landingBg = document.querySelector( '#landingFadeOut' );

	landingBanner.addEventListener( 'click', function() {
		landingBg.classList.add( 'landing-banner--fade-out' );

		setTimeout( () => {
			landingBanner.style.display = 'none';
		}, 500 );

		setTimeout( () => {
			document.body.style.overflow = 'auto';
			landingBg.style.display = 'none';
		}, 1700 );
	} );
}() );

