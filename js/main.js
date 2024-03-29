$(function(){

    //$('.div ocultar').hide();
    // document.addEventListener('DOMContentLoaded', function (
		if (document.getElementById('calcular')) {
			var regalo = document.getElementById('regalo');
			// Campos Datos usuario
			var nombre = document.getElementById('nombre');
			var apellido = document.getElementById('apellido');
			var email = document.getElementById('email');

			// Campos pases
			var pase_dia = document.getElementById('pase_dia');
			var pase_dosdias = document.getElementById('pase_dosdias');
			var pase_completo = document.getElementById('pase_completo');

			/* mostrar en editar
			var formulario_editar = document.getElementsByClassName('editar-registrado');
			if (formulario_editar.length > 0) {
				if (pase_dia.value || pase_dosdias.value || pase_completo) {
					mostrarDias();
				}
			} */

			//Botones y divs
			var calcular = document.getElementById('calcular');
			var errorDiv = document.getElementById('error');
			var botonRegistro = document.getElementById('btnRegistro');

			var lista_productos = document.getElementById('lista-productos');
			var suma = document.getElementById('suma-total');

			// Extras
			var camisas = document.getElementById('camisa_evento');
			var etiquetas = document.getElementById('etiquetas');

			botonRegistro.disabled = true;
			calcular.addEventListener('click', calcularMontos);

			pase_dia.addEventListener('input', mostrarDias);
			pase_dosdias.addEventListener('input', mostrarDias);
			pase_completo.addEventListener('input', mostrarDias);

			nombre.addEventListener('blur', validarCampos);
			apellido.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarMail);

			function validarCampos() {
				if (this.value == '') {
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'este campo es obligatorio';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				} else {
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				}
			}

			function validarMail() {
				if (this.value.indexOf('@') > -1) {
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				} else {
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'debe tener al menos una @';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				}
			}

			function calcularMontos(event) {
				event.preventDefault();
				if (regalo.value === '') {
					alert('Debes elegir un regalo');
					regalo.focus();
				} else {
					var boletosDia = parseInt(pase_dia.value, 10) || 0,
						boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
						boletoCompleto = parseInt(pase_completo.value, 10) || 0,
						cantCamisas = parseInt(camisas.value, 10) || 0,
						cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

					var totalPagar =
						boletosDia * 30 +
						boletos2Dias * 45 +
						boletoCompleto * 50 +
						cantCamisas * 10 * 0.93 +
						cantEtiquetas * 2;

					var listadoProductos = [];

					if (boletosDia >= 1) {
						listadoProductos.push(boletosDia + ' Pases por día');
					}
					if (boletos2Dias >= 1) {
						listadoProductos.push(boletos2Dias + ' Pases por 2 días');
					}
					if (boletoCompleto >= 1) {
						listadoProductos.push(boletoCompleto + ' Pases Completos');
					}
					if (cantCamisas >= 1) {
						listadoProductos.push(cantCamisas + ' Camisas');
					}
					if (cantEtiquetas >= 1) {
						listadoProductos.push(cantEtiquetas + ' Etiquetas');
					}
					lista_productos.style.display = 'block';
					lista_productos.innerHTML = '';
					for (var i = 0; i < listadoProductos.length; i++) {
						lista_productos.innerHTML += listadoProductos[i] + '<br/>';
					}
					suma.innerHTML = '$ ' + totalPagar.toFixed(2);
					botonRegistro.disabled = false;
					console.log(totalPagar);
					document.addEventListener('DOMContentLoaded', function() {
						document.getElementById('total_pedido').value = totalPagar; });
				}
			}

			function mostrarDias() {
				var boletosDia = parseInt(pase_dia.value, 10) || 0,
					boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
					boletoCompleto = parseInt(pase_completo.value, 10) || 0;

				console.log(boletoCompleto);

				var diasElegidos = [];

				if (boletosDia > 0) {
					diasElegidos.push('viernes');
					console.log(diasElegidos);
				}
				if (boletos2Dias > 0) {
					diasElegidos.push('viernes', 'sabado');
					console.log(diasElegidos);
				}
				if (boletoCompleto > 0) {
					diasElegidos.push('viernes', 'sabado', 'domingo');
					console.log(diasElegidos);
				}
				console.log(diasElegidos.length);

				// muestra los seleccionados
				for (var i = 0; i < diasElegidos.length; i++) {
					document.getElementById(diasElegidos[i]).style.display = 'block';
				}

				// los oculta si vuelven a 0
				if (diasElegidos.length == 0) {
					var todosDias = document.getElementsByClassName('contenido-dia');
					for (var i = 0; i < todosDias.length; i++) {
						todosDias[i].style.display = 'none';
					}
				}
			}
		}
	
		

		// Mapa
		if (document.getElementById('mapa')) {
			var mymap = L.map('mapa').setView([51.505, -0.09], 13);
			
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				maxZoom: 18,
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1,
				accessToken: 'your.mapbox.access.token'
			}).addTo(mymap);
		
		}	
		//Lettering
		$('.nombre-sitio').lettering();
		// Agregar clase a menú
		$('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
		$('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
		$('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
		
		//Menu fijo

		var windowHeight = $(window).height();
		var barraAltura = $('.barra').innerHeight();

		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll > windowHeight) {
				$('.barra').addClass('fixed');
				$('body').css({'margin-top' : barraAltura+'px'});
			}
			else {
				$('.barra').removeClass('fixed');
				$('body').css({'margin-top' : '0px'});
			}
		});

		// Menu Responsive
		$('.menu-movil').on('click', function() {
			$('.navegacion-principal').slideToggle();
		});

		// Programa de conferencias
		$('.programa-evento .info-curso').hide();
		$('.programa-evento .info-curso:first').show();
		$('.menu-programa a:first').addClass('activo');

		$('.menu-programa a').on('click', function() {
			$('.menu-programa a').removeClass('activo');
			$(this).addClass('activo');
			$('.ocultar').hide();
			var enlace = $(this).attr('href');
			$(enlace).fadeIn(1000);
			return false;
		});

	

		// Animaciones para los números
		var resumenLista = jQuery('.resumen-evento');
		//console.log(resumenLista);
		if (resumenLista.length > 0) {
			$('.resumen-evento').waypoint ( function(){
			$('.resumen-evento li:nth-child(1) p').animateNumber({number:6}, 1200);
			$('.resumen-evento li:nth-child(2) p').animateNumber({number:15}, 1200);
			$('.resumen-evento li:nth-child(3) p').animateNumber({number:9}, 2000);
			$('.resumen-evento li:nth-child(4) p').animateNumber({number:3}, 1500);
			}, {
				offset: '60%'
			});
		}

		// Cuenta regresiva

		$('.cuenta-regresiva').countdown('2021/12/10 09:00:00', function(event){
			$('#dias').html(event.strftime('%D'));
			$('#horas').html(event.strftime('%H'));
			$('#minutos').html(event.strftime('%M'));
			$('#segundos').html(event.strftime('%S'));
		});
		
		// Colorbox
		$('.invitado-info').colorbox({inline:true, width:"50%"});
		
		$('.boton-newsletter').colorbox({inline:true, width:"50%"});
	//});

		
});