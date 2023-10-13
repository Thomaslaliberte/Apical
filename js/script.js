window.addEventListener('DOMContentLoaded', () => {
	var boutonrecherche = document.getElementById("boutonrecherche");
	var boutonfermerrecherche = document.getElementById("boutonfermerrecherche");
	var boutonlogin = document.getElementById("boutonlogin");
	var boutonfermerlogin = document.getElementById("boutonfermerlogin");
	var commentaires = document.getElementsByClassName("commentaires");
	var boutontoutdevelopper = document.getElementById("boutondeveloppement");
	var formation = document.getElementsByClassName("formation");

	boutonrecherche.addEventListener("click", ouvrirrecherche);
	boutonfermerrecherche.addEventListener("click", fermerrecherche);
	boutonlogin.addEventListener("click", ouvrirlogin);
	boutonfermerlogin.addEventListener("click", fermerlogin);
	boutontoutdevelopper.addEventListener("click", toutcacher);
	formation = Array.from(formation);
	formation.forEach(element => {
		element.addEventListener("click", cacher);
	});

	function ouvrirrecherche(){
		this.classList.toggle("active");
		var content = document.getElementById("fenetrerecherche");
		content.style.display = "flex";
	};

	function fermerrecherche(){
		this.classList.toggle("active");
		var content = document.getElementById("fenetrerecherche");
		content.style.display = "none";
	}

	function ouvrirlogin(){
		this.classList.toggle("active");
		var content = document.getElementById("fenetrelogin");
		content.style.display = "flex";
	}

	function fermerlogin(){
		this.classList.toggle("active");
		var content = document.getElementById("fenetrelogin");
		content.style.display = "none";
	}



	function toutcacher(){
		commentaires = Array.from(commentaires)
		commentaires.forEach((element) =>{ 
			if(element.style.display == "block"){
				element.style.display = "none"}	
			else{
				 element.style.display = "block"}
		});
	}

	function cacher(){
		toutcacher();
	}
});