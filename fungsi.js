function getTheme(){
	var Theme = document.getElementById("Theme").value;
	if (Theme == "putih") {
		document.body.style.backgroundColor = "white";
		document.body.style.color = "black";
		}
		else if (Theme == "hitam"){
			document.body.style.backgroundColor = "black";
			document.body.style.color = "white";
		}
	}

function getParfume(){
	var Parfume = document.getElementById("Parfume").value;
	if (Parfume == "1"){
		Variant_Parfume.innerText = "Special Formulation Of The Rich Creaminess Of Vanilla Extract Bleended With The Softness Of Organic Coconut Milk";

	}
	else if (Parfume == "2"){
		Variant_Parfume.innerText = "Extracted From The Finess Arabian Jasmine Petals";
	}
	else if (Parfume == "3"){
		Variant_Parfume.innerText = "Iluminated By The Clean Sensuality Of Orchidachiae and Amberwood With Low Notes Of Jasmine and Pachouli";
	}
	else if (Parfume == "4"){
		Variant_Parfume.innerText = "A Natural Grove Of Wild Roses";
	}
	else if (Parfume == "5"){
		Variant_Parfume.innerText = "The Irresistible Freshness Of a Freshly Baked Rasberry Souflle";
	}
}

function faktorial(){
    var x = document.getElementById("faktorial").value;
    var y = x;
    var hasil = document.getElementById("hasil");
    for(i = y-1; i>1 ;i--){
        y=y*i;
    }
    hasil.innerText = "Faktorial dari "+x+" adalah "+y;
} 