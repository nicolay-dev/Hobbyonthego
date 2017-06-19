
google.maps.event.addDomListener(window, "load", function(){

	const ubicacion = new Localizacion(()=>{
		
		const pst={lat: ubicacion.latitude, lng: ubicacion.longitude};

		locacion[0]= document.getElementById('latitud'); 
		locacion[1]= document.getElementById('longitud'); 
		const options = {
			center: pst, 

			zoom: 17 
		} 

		var map= document.getElementById('map'); 
		const mapa=new google.maps.Map(map, options);

		const marcador = new google.maps.Marker({
			position: pst,
			map: mapa,
			title: "Aqui Es"
		});


		
});



