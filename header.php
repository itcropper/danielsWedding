<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>


	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/flippy.js"></script>


	<script>

		$('.carousel').carousel();

		var list_items;

		$(document).ready(function(){

			list_items = $("#menu-list").children();

			var pie_peice = 360 / list_items.length;

			//console.log(pie_peice)

			$(list_items).each(function(index){
				//console.log((index * pie_peice))
				$(this).css("-webkit-transform", "rotate(" + (index * pie_peice) + "deg)").css("-webkit-transform-origin", "right");
				$(this).css("-moz-transform", "rotate(" + (index * pie_peice) + "deg)").css("bottom", (index * 22)).css("margin-right", "150px");
				$(this).css("-ms-transform", "rotate(" + (index * pie_peice) + "deg)").css("bottom", (index * 22)).css("margin-right", "150px");


			});

				$(".menu-item").bind('click',scroll);
				$(".menu-item").bind('click',rotate);


			$('.carousel-control.left').click(function(){
				
				var item = $(".active.item")

				///console.log($(item).index())
				///console.log($(item).siblings(".item").length)
				///console.log($(item).siblings(".item:last"))

				if($(item).index() == 0){

					console.log("if")
					$(item).siblings(".item:last").fadeIn('fast');
					$(item).siblings(".item:last").addClass('active');
					$(item).fadeOut('slow');
					$(item).removeClass('active');

				}else{
					console.log("else")
					$(item).prev(".item").fadeIn('fast');
					$(item).prev(".item").addClass('active');
					$(item).fadeOut('slow');
					$(item).removeClass('active');

				}


				console.log($(item))
			});

			$(".carousel-control.right").click(function(){
				
				var item = $(".active.item")

				///console.log($(item).index())
				///console.log($(item).next(".item").index())
				///console.log($(item).siblings(".item").length)

				if($(item).index() == $(item).siblings(".item").length ){

					$(item).siblings(".item:first").fadeIn('fast');
					$(item).siblings(".item:first").addClass('active');
					$(item).fadeOut('slow');
					$(item).removeClass('.active');

				}else{

					$(item).next(".item").fadeIn('fast');
					$(item).next(".item").addClass('active');
					$(item).fadeOut('slow');
					$(item).removeClass('active');

				}
				
				console.log($(item))
			});

					
		
		});

		  // This is a functions that scrolls to #{blah}link
		function goToByScroll(id){
		      // Remove "link" from the ID
		    id = id.replace("link", "");

		    //$('.menu').css("-webkit-transform", "rotate(" + ($(id).index() * 72) - 360 + "deg)").css("bottom", (index * 20));

		      // Scroll
		    $('html,body').animate({
		        scrollTop: $("#"+id).offset().top
		    },'slow');
		}




		var scroll = function(e) {
		      // Prevent a page reload when a link is pressed
		    	e.preventDefault(); 
		      // Call the scroll function
		    	goToByScroll($(this).attr("name"));  

		    	

		    };

		var rotate = function(e){

			//console.log($(this).html())

			var index = $(this).index();

			$(this).css("text-decoration", "underline");
			$(this).siblings().css("text-decoration", "none");

			var degrees = (360 - (index * (360 / list_items.length)));
			//console.log(degrees);

			$('#menu-list').animate({  borderSpacing: degrees }, {
			    step: function(now,fx) {
			    	//console.log(degrees);
			      $(this).parent().css('-webkit-transform','rotate('+now+'deg)')
			      $(this).parent().css('-moz-transform','rotate('+now+'deg)'); 
			      $(this).parent().css('transform','rotate('+now+'deg)');  
			    },
			    duration:'slow'
			},'linear');

		}

		var form_url = "https://docs.google.com/forms/d/19UO6nnSKklytz1cHwmE7JQ-51U1GBC-gn1UgL8gAnlo/formResponse?embedded=true";

		var form_first_name = "entry.998414391=";
		var form_last_name = "entry.1227180684="
		var form_attending = "entry.1265819128=";
		var form_party_number = "entry.1288379601="
		var form_other_stuff = "6&draftResponse=%5B%5D%0D%0A&pageHistory=0"

		$("#submit").click(function(){

			var one   = form_first_name + $("name=entry.998414391").text();
			var two    = form_last_name + $("name=entry.1227180684").text();
			var three   = form_attending + $("name=entry.1265819128").text();
			var four = form_party_number + $("name=entry.1288379601").text();



			$.ajax({
			  type: "POST",
			  url: form_url,
			  data: one + two + three + four,
			}).done(function( msg ) {
			  alert( "Data Saved: " + msg );
			});

		});


		function flip(id, image){

			//console.log("here")

			$(id).flippy({
				content: image,
				direction:"TOP",
				duration:"750",
				onStart:function(){
					console.log("Let's flip");
				},
				onFinish:function(){
					console.log("ok, it's flipped :)");
				}
			});
		}



	</script>

</head>
