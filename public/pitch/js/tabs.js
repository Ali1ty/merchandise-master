		function openDL(evt,dlName){
			var i, tabcontent,tablinks;

			tabcontent = document.getElementsByClassName("tabcontent");
			for(i = 0; i < tabcontent.length; i++){
				tabcontent[i].style.display="none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for(i = 0; i < tablinks.length; i++){
				tablinks[i].className = tablinks[i].className.replace("active","");
			}
			
			document.getElementById(dlName).style.display = "block";
		    evt.currentTarget.className += " active";
		}


		function validat() {
			var x, text;
		  
			// Get the value of the input field with id="numb"
			x = document.getElementById("numb").value;
		  
			// If x is Not a Number or less than one or greater than 10
			if (isNaN(x) || x < 1 || x > 10) {
			  text = "Input not valid";
			} else {
			  text = "Input OK";
			}
			document.getElementById("demo").innerHTML = text;
		  }


		  