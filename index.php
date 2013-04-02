	 
<?php include 'header.php'; ?>
<body>

	<div class='menu'>

		<ul id='menu-list'>
			<li class='menu-item current' name='home'><a href='#' >Home</a></li>
			<li class='menu-item' name='announcment'><a href='#' >Announcment</a></li>
			<li class='menu-item' name='rsvp'><a href='#' >RSVP</a></li>
			<li class='menu-item' name='our-story'><a href='#' >Our Story</a></li>
			<li class='menu-item' name='pictures'><a href='#' >Pictures</a></li>
			<li class='menu-item' name='information'><a href='#' >Information</a></li>
		</ul>

	</div>

	<div id='page-title'><img src='img/title.png' /> </div>

	<div class='home' id='home'>
	</div>

	<div class='announcement' id='announcment'>
		<h1>announcment</h1>
	</div>

<!--             *****************             RSVP            ****************                 -->

	<div class='rsvp' id='rsvp'>

		<div class='form-background'>
		</div>
		<h1>RSVP</h1>
		<div class='form-holder'>

			<form action="https://docs.google.com/forms/d/19UO6nnSKklytz1cHwmE7JQ-51U1GBC-gn1UgL8gAnlo/formResponse?embedded=true" method="POST" id="ss-form" target="_self" onsubmit="">

				<label class="ss-q-item-label" for="entry_998414391">
					<div class="ss-q-title">First Name
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						
					</div>

				</label>

				<input type="text" name="entry.998414391" value="" class="ss-q-short" id="entry_998414391" dir="auto" aria-required="true">

				<label class="ss-q-item-label" for="entry_1227180684">
					<div class="ss-q-title">Last Name
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						
					</div>
					<div  dir="ltr"></div>
				</label>

				<input type="text" name="entry.1227180684" value="" id="entry_1227180684" dir="auto" aria-required="true">


				<label class="ss-q-item-label" for="entry_1693554162">
					<div class="ss-q-title">Are you attending?
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						
					</div>
				</label>

				<ul class="ss-choices">
					<li class="ss-choice-item">
						<label>
							<input type="radio" name="entry.1265819128" value="Yes" id="group_1265819128_1" aria-label="Yes">
							<span >Yes</span>
						</label>
					</li> 
					<li class="ss-choice-item">
						<label>
							<input type="radio" name="entry.1265819128" value="No" id="group_1265819128_2"  aria-label="No">
							<span >No</span>
						</label>
					</li>
				</ul>


				<label class="ss-q-item-label" for="entry_1288379601">
					<div class="ss-q-title">How many are in your party?
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						
					</div>
					
				</label>

				<select name="entry.1288379601" id="entry_1288379601" aria-required="true">
					<option value=""></option>
					<option value="1">1</option> 
					<option value="2">2</option> 
					<option value="3">3</option> 
					<option value="4">4</option> 
					<option value="5">5</option> 
					<option value="6">6</option> 
					<option value="7">7</option> 
					<option value="8">8</option>
				</select>



				<input type="hidden" name="draftResponse" value="[]">
				<input type="hidden" name="pageHistory" value="0">

			</br>
				<input type="submit" name="submit" value="Submit" id="ss-submit">


			</form>

		</div>


	</div>

	<div class='our_story' id='our-story'>
		<h1>Our Story</h1>
	</div>


<!--             *****************             Pictures            ****************                 -->
	<div class='pictures' id='pictures'>
		<h1>Pictures</h1>


		<div id="myCarousel" class="carousel slide">

			<div class="carousel-inner">
				<div class=" active item">
					<img class='slide-image' src='img/table_images/1.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/2.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/3.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/4.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/5.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/6.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/7.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/8.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/9.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/10.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/11.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/12.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/13.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/14.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/15.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/16.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/17.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/18.jpg' />
				</div>
				<div class="item">
					<img class='slide-image' src='img/table_images/19.jpg' />
				</div>	

			</div>


			<a class="carousel-control left" href="#myCarousel" data-interval="6000" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-interval="6000" data-slide="next">&rsaquo;</a>
		</div>

	</div>

	<div class='information' id='information'>
		<h1>Information</h1>
	</div>

</body>