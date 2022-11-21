<style type="text/css">
	


	.title{
		font-size: 20px;
		margin-top: 5px;
		font-weight: bold;
		text-transform: capitalize;
		color: #636e72;

	}
	.mainCard{
		margin-left: 20px;
		margin-bottom: 30px;
	}

	.card{
		width: 200px;
		display: inline-block;
		margin-left: 10px;
	}
	.card:hover{
		box-shadow: 4px 4px 20px #DADADA;
		border:none;
	}
	.nav-link:active{
		color: red;
	}
	.card-title{
		width: 175px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
	}
	.card-text{
		width: 175px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
	}

	.link{
		margin-left: 10px;
		margin-top: 10px;
	}
	.col-lg-4 a{
		color: black;
		text-decoration: none;
	}
	.dec{
		height: 100px;
		text-overflow: ellipsis;
		overflow: hidden;
		color: #b2bec3;" 
	}
	.main-content {
		padding: 30px 0;
	}

	.profile-card {
		padding-bottom:40px !important;
	}
	
	.profile-card .profile-card_image img {
		width: 100px;
		height: 100px;
		border-radius: 100%;
		object-fit: cover;
		border: 4px solid #fff;
		box-shadow: 0px 0px 0px;

	}
	.profile-card .profile-card_social {
		position: absolute;
		left: 0;
		bottom: 0;
		width: 100%;
	}
	.profile-card .profile-card_social img {
		width: 33px;
		margin: 5px 10px;
	}
	.stars .fa{
		margin-left: 10px;
		font-size: 20px;
		margin-bottom: 10px
	}
	.nameAuthor{
		font-size: 28px;
	}
	.textabout{

	}
	.author-title{
		margin-top: 20px;
	}
	/*********************/
	.searchView{
		width: 60%;
		margin: 0 auto;
		margin-top: 20px;
	}
	#myInput {
		background-image: url('/css/searchicon.png'); /* Add a search icon to input */
		background-position: 10px 12px; /* Position the search icon */
		background-repeat: no-repeat; /* Do not repeat the icon image */
		width: 100%; /* Full-width */
		font-size: 16px; /* Increase font-size */
		padding: 12px 20px 12px 40px; /* Add some padding */
		border: 1px solid #ddd; /* Add a grey border */
		margin-bottom: 12px; /* Add some space below the input */
	}

	#myUL {
		/* Remove default list styling */
		list-style-type: none;
		padding: 0;
		margin: 0;
	}

	#myUL li a {
		border: 1px solid #ddd; /* Add a border to all links */
		margin-top: -1px; /* Prevent double borders */
		background-color: #f6f6f6; /* Grey background color */
		padding: 12px; /* Add some padding */
		text-decoration: none; /* Remove default text underline */
		font-size: 18px; /* Increase the font-size */
		color: black; /* Add a black text color */
		display: block; /* Make it into a block element to fill the whole list */
	}

	#myUL li a:hover:not(.header) {
		background-color: #eee; /* Add a hover effect to all links, except for headers */
	}
	/*****************globals*************/

	.preview {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column; }
		@media screen and (max-width: 996px) {
			.preview {
				margin-bottom: 20px; } }

				.preview-pic {
					-webkit-box-flex: 1;
					-webkit-flex-grow: 1;
					-ms-flex-positive: 1;
					flex-grow: 1; }
					a{
						color: black;
						text-decoration: none;

					}
					.preview-thumbnail.nav-tabs {
						border: none;
						margin-top: 15px; 
					}
					.preview-thumbnail.nav-tabs li {
						width: 18%;
						margin-right: 2.5%; 
					}
					.preview-thumbnail.nav-tabs li img {
						max-width: 100%;
						display: block;
					}
					.preview-thumbnail.nav-tabs li a {
						padding: 0;
						margin: 0; }
						.preview-thumbnail.nav-tabs li:last-of-type {
							margin-right: 0; }

							.tab-content {
								overflow: hidden; }
								.tab-content img {
									width: 350px;
									height: 550px;
									object-fit: cover;

									-webkit-animation-name: opacity;
									animation-name: opacity;
									-webkit-animation-duration: .3s;
									animation-duration: .3s; }

									.cards {
										margin-top: 50px;
										background: #eee;
										padding: 3em;
										line-height: 1.5em; 
										margin-bottom: 50px}
										.cards2{
											margin-top: 20px;
											background: #eee;
											padding: 1em;
											line-height: 1.5em; 
											margin-bottom: 20px
										}
										@media screen and (min-width: 997px) {
											.wrapper {
												display: -webkit-box;
												display: -webkit-flex;
												display: -ms-flexbox;
												display: flex; } }

												.details {
												}

												.colors {
													-webkit-box-flex: 1;
													-webkit-flex-grow: 1;
													-ms-flex-positive: 1;
													flex-grow: 1; }

													.product-title {
														font-weight: bold;
														margin-top: 0;
														text-transform: capitalize;	
													}

													.checked, .price span {
														color: #ff9f1a;
													}

													.product-title, .rating, .product-description {
														margin-bottom: 15px; 
													}




													.btnAddtocard {
														background: #0984e3;
														padding: 1em 1.3em;
														border: none;
														border-radius: 4px;  
														color: #fff;
														text-transform: capitalize;
														margin-left: 360px;
													}
													.btnAddtocard:hover {
														background: #0774e8;
														color: #fff; }

														.not-available {
															text-align: center;
															line-height: 2em; }
															.not-available:before {
																font-family: fontawesome;
																content: "\f00d";
																color: #fff; }

																.orange {
																	background: #ff9f1a; }

																	.green {
																		background: #85ad00; }

																		.blue {
																			background: #0076ad; }

																			.tooltip-inner {
																				padding: 1.3em; }

																				@-webkit-keyframes opacity {
																					0% {
																						opacity: 0;
																						-webkit-transform: scale(3);
																						transform: scale(3); }
																						100% {
																							opacity: 1;
																							-webkit-transform: scale(1);
																							transform: scale(1); } }

																							@keyframes opacity {
																								0% {
																									opacity: 0;
																									-webkit-transform: scale(3);
																									transform: scale(3); }
																									100% {
																										opacity: 1;
																										-webkit-transform: scale(1);
																										transform: scale(1); } }


																										/*# sourceMappingURL=style.css.map */

																									</style>