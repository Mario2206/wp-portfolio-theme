function projectObserver() {
	const target = document.querySelector( '.project-card--wrapper' );
	if ( ! target ) {
		return;
	}

	const callback = ( entries ) => {
	    const className = 'project-card--wrapper-anim-active';
		if ( ! target.classList.contains( className ) && entries[ 0 ].isIntersecting ) {
			target.classList.add( className );
		}
	};

	const options = {
		threshold: .2,
		// root: document.querySelector( '.project-card--wrapper' ),
		rootMargin: '0px',
	};

	const observer = new IntersectionObserver( callback, options );
	observer.observe( target );
}

projectObserver();
