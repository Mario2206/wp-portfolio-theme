( function() {
	window.scroll( {
		top: 0,
		left: 0,
		behavior: 'smooth',
	} );
	document.body.style.overflow = 'hidden';
	const landingBanner = document.querySelector( '.landing-banner' );

	landingBanner.addEventListener( 'click', function() {
		landingBanner.classList.add( 'landing-banner-out' );
		setTimeout( () => document.body.style.overflow = 'auto', 1000 );
	} );
}() );

