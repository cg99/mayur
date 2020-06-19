class Search{
    constructor(){
        // variables
        this.postResults;
        // Elements related to search overlay
        this.btnOpenSearch = document.querySelector('.search-trigger');
        this.searchOverlay = document.querySelector('.search-overlay');
        this.btnCloseOverlay = document.querySelector('.search-overlay_close');

        // Elements related to search result
        this.btnSearch = document.querySelector(".search-btn");
        this.searchField =  document.querySelector('#searchTerm');
        this.resultsDiv = document.querySelector("#searchResults");

        this.events()

        this.isOverlayOpen = false;
        this.isSpinning = false;
        this.previousValue;
        this.typingTimer;
    }

    events(){
        this.btnOpenSearch.addEventListener('click', this.openOverlay.bind(this));
        this.btnCloseOverlay.addEventListener('click', this.closeOverlay.bind(this));
        
        // this.btnSearch.addEventListener('click', this.getResults.bind(this));

        this.searchField.addEventListener('keyup', this.typingLogic.bind(this));

        document.addEventListener('keydown', this.keyPressDispatcher.bind(this));

    }
    
    openOverlay(){
        this.searchOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden'
        this.searchField.value = '';
        this.resultsDiv.innerHTML = '';
		setTimeout(()=>this.searchField.focus(), 300);
        // console.log('opened');
        this.isOverlayOpen = true;
    }

    closeOverlay(){
        this.searchOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto'
        // console.log('closed');
        this.isOverlayOpen = false;
    }

    // for search key s and esc
	keyPressDispatcher(e) {
        const inputEl = document.querySelector("input");
        const textareaEl = document.querySelector("textarea");
        const isFocused = (document.activeElement === inputEl || document.activeElement === textareaEl);
        //avoid opening on typing in input field and textarea
		if (e.keyCode == 83 && !this.isOverlayOpen && !isFocused) {
            this.openOverlay();
		} 

		if (e.keyCode == 27 && this.isOverlayOpen) {
			this.closeOverlay();
		} 
    }
    
    // make searching more friendly
	typingLogic() {
		if (this.previousValue != this.searchField.value) {
			clearTimeout(this.typingTimer);

			if (this.searchField.value) {
				if (!this.isSpinning) {
					this.resultsDiv.innerHTML = '<div>Loading...</div>';
					this.isSpinning = true;
				}
				this.typingTimer = setTimeout(this.getResults.bind(this), 250);
			} else {
				this.resultsDiv.innerHTML = '';
				this.isSpinning = false;
			}
		}
		this.previousValue = this.searchField.value;
	}


    getResults() { 
        const url = mayur.root_url + '/wp-json/mayur/v1/posts?term=' + this.searchField.value;
        fetch(url)
            .then(response => response.json()) 
            .then(data => {
                console.log(data);
                this.resultsDiv.innerHTML = `
					<div>
						${data.length ? '<ul>' : '<p>No matches found</p>'}
                            ${data.map(item => `<li>
                                <img src="${item.featured_img}">
                                <a href="${item.link}">${item.title}
                                    <p>${item.category.map(cat => 
                                    `<span>${cat.name}</span>`
                                    ).join('')}</p>
                                </a>
							</li>`).join('')}
						${data.length ? '</ul>' : ''}
					</div>
                `;
                this.isSpinning = false;
            })
            .catch(err=>console.log(err));
	}

}

export default Search;