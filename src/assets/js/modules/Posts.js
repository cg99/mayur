import $ from 'jquery';

class Posts {
	// 1. describe and create/initiate objects
	constructor() {
		// this.getPosts();
		this.events();
	}

	// 2. events
	events(){
	}

	// 3. methods/functions/actions
	getPosts(){
		$.ajax({
			// beforeSend: (xhr) => {
			// 	xhr.setRequestHeader("X-WP-Nonce", mayur.nonce);
			// },
	        url: mayur.root_url + '/wp-json/mayur/v1/posts',
	        type: 'GET',
	        dataType: 'json', // added data type
	        success: function(res) {
				
	            this.posts = res;

	            //loop through json data
	            this.posts.forEach( (post)=> {
	            	//Now create element add class name, innerhtml and data then append it
		            var postContainer = document.querySelector('#postHome');
					var newPost = document.createElement('article');
					newPost.className = "post";
					var postContent = `
						<figure class='featured_figure'>
							<img class="featured_img" src="${post.featured_img}" alt="Featured">
						</figure>

						<h3 class="post-title">
							<a href="#">${post.title}</a>
						</h3>

						<div class="post-date">
				        	<span>
				        		<timeago datetime="${post.date}">
				        			${post.date}
			    				</timeago>
			    			</span>
						</div> 

						<div class="post-category">
					`;
					var categories = post.category;
					// loop through categories
					categories.forEach((category)=> {
						var cat = category.name;
						postContent += `${cat != 'Uncategorized' ? `<span>${cat}</span>` : ''}`;
					});
					postContent += '</div>';
					newPost.innerHTML = postContent; //add the content in the post	
		           	postContainer.appendChild(newPost); //add post inside the container
				});
	        },
			error: (err) => {
				console.log("Sorry");
				console.log(err);
			}
	    });		
	}
}

export default Posts;