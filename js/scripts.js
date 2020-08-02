jQuery(document).ready( $ => {

	$('.site-header .menu').slicknav({
		label : '',
		appendTo: '.site-header'
	})


	$('.listado-testimoniales').bxSlider({
		auto: true,
		mode: 'fade'
	});


//mapa de leaflet

	var map = L.map('mapa').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

})


//agregar posicion fija en el header para hacer scroll

window.onscroll = () =>{

	const scroll = window.scrollY

	const headerNav = document.querySelector('.barra-navegacion')

	const documentBody = document.querySelector('body')

	if(scroll>300){
		headerNav.classList.add('fixed-top')
		documentBody.classList.add('ft-activo')
	}else{
		headerNav.classList.remove('fixed-top')
		documentBody.classList.remove('ft-activo')
	}


}


