var locacion=[1,1]; 


google.maps.event.addDomListener(window, "load", function(){

	const ubicacion = new localizacion(()=>{
		
		const pst={lat: ubicacion.latitude, lng: ubicacion.longitude};

		locacion[0]= ubicacion.latitude;
		locacion[1]= ubicacion.longitude;
		

		const options = {
			center: pst, 

			zoom: 17 
		} 

		var map= document.getElementById('map'); 
		const mapa=new google.maps.Map(map, options);

		const marcador = new google.maps.Marker({
			position: pst,
			map: mapa,
			//title: "Aqui estas tu"
		});


		

		var info = new google.maps.InfoWindow();

		mapa.addListener('click', function(event){
			//console.log(event);
			//console.log("Hola");
			agregarMarcador(event.latLng, mapa, marcador);
		}); 


		marcador.addListener('click', function(){
			info.open(mapa,marcador);
		});

		var autocomplete = document.getElementById('autocomplete'); 

		const search = new google.maps.places.Autocomplete(autocomplete);
		search.bindTo("bounds",mapa);

		search.addListener('place_changed', function(){
			info.close();
			marcador.setVisible(false);

			var place = search.getPlace();

			if(!place.geometry.viewport){
				window.alert("Error al mostar el lugar");
				return;

			}

			if(place.geometry.viewport){

				mapa.fitBounds(place.geometry.viewport);
			}else{

				mapa.setCenter(place.geometry.location);
				mapa.setZoom(17);	
			} 
			
			locacion[0]=  place.geometry.location.lat();
			locacion[1]=place.geometry.location.lng();
	
			marcador.setPosition(place.geometry.location);
			marcador.setVisible(true);

			var addres = "";

			if(place.addres_components){
				addres = [
					(place.addres_components[0] && place.addres_components[0].short_name || ''),
					(place.addres_components[1] && place.addres_components[1].short_name || ''),	
					(place.addres_components[2] && place.addres_components[2].short_name || ''),
				];
			}

			info.setContent('<div><strong>'+place.name+'</strong><br>'+addres);
			info.open(map, marcador);



		});
	}); 
});


//agrega pin
function agregarMarcador( location, mapan, marcador ){

	marcador.setPosition(location);
	//console.log("LATIRUD: ", location.lat());
	//console.log("LONGITUD: ", location.lng());
	


	locacion[0]= location.lat();
	locacion[1]= location.lng();

	console.log(locacion[0]);
	console.log(locacion[1]);
}



function getLocacion(){
	//console.log(locacion);

	latitud=document.getElementById("latitud");
	longitud=document.getElementById("longitud");

	latitud.innerHTML=locacion[0];
	longitud.innerHTML=locacion[1];
	return locacion;
}
function getLocacion2(){
	console.log("entreal get");
	return locacion;
}



