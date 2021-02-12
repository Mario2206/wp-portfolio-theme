window.addEventListener( 'load', () => {
	class CircleSlider extends HTMLUListElement {
		constructor() {
			super();
			this.items = [];
			this.step = 3;
			this.range = { min: 0, max: 2 };
			this.classHidden = { name: 'circle-slider--items-hidden', duration: 0 };
			this.classRollIn = { name: 'circle-slider--items-start', duration: 1000 };
			this.classRollOut = { name: 'circle-slider--items-out', duration: 1000 };

			this._switchSlide = this._switchSlide.bind( this );
		}

		connectedCallback() {
			this.items = Array.from( this.children );
			this._changeCLass( { min: 0, max: this.items.length - 1 }, this.classHidden.name );
			this._changeCLass( this.range, this.classRollIn.name );
			this._createBtn();
		}

		_changeCLass( range, className ) {
			this.items.forEach( ( item, index ) => {
				if ( index >= range.min && index <= range.max ) {
					item.className = className;
				}
			} );
		}

		_createBtn() {
			this.btn = document.createElement( 'button' );
			this.btn.innerText = 'OK';
			this.btn.classList.add( 'circle-slider--btn' );
			this.btn.addEventListener( 'click', this._switchSlide );
			this.parentNode.appendChild( this.btn );
		}

		_switchRange() {
			if ( this.range.max + this.step > this.items.length - 1 ) {
				this.range = { min: 0, max: 2 };
			} else {
				this.range.min += this.step;
				this.range.max += this.step;
			}
		}

		_switchSlide() {
			this._changeCLass( this.range, this.classRollOut.name );
			setTimeout( () => {
				this._changeCLass( this.range, this.classHidden.name );
				this._switchRange();
				this._changeCLass( this.range, this.classRollIn.name );
			}, this.classRollOut.duration );
		}
	}

	customElements.define( 'circle-slider', CircleSlider, { extends: 'ul' } );
} );

