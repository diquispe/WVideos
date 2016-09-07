@extends('layout')
@section('content')


<div class="container box_chica">
	<div class="row ">
		<div class="col-xs-8 ">


			<ul class="bxslider">
					@if ($chica->image)
				<li><img class="foto_principal" title="	"  src="{{ url('/uploads/') }}/{{ $chica->image}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo1)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo1}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo2)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo2}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo3)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo3}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo4)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo4}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo5)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo5}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo6)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo6}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo7)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo7}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo8)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo8}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo9)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo9}}" alt=""></li>
					@else
					@endif
					@if ($chica->photo10)
				<li><img class="foto_principal" src="{{ url('/uploads/') }}/{{ $chica->photo10}}" alt=""></li>
					@else
					@endif

			</ul>

			<div id="bx-pager" class="imagenes_galeria">
				@if ($chica->image)
				<a data-slide-index="0" href=""><img src="{{ url('/uploads/') }}/{{ $chica->image}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo1)
				<a data-slide-index="1" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo1}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo2)
				<a data-slide-index="2" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo2}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo3)
				<a data-slide-index="3" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo3}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo4)
				<a data-slide-index="4" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo4}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo5)
				<a data-slide-index="5" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo5}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo6)
				<a data-slide-index="6" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo6}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo7)
				<a data-slide-index="7" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo7}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo8)
				<a data-slide-index="8" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo8}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo9)
				<a data-slide-index="9" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo9}}" alt=""></a>
				@else
				@endif
				@if ($chica->photo10)
				<a data-slide-index="10" href=""><img src="{{ url('/uploads/') }}/{{ $chica->photo10}}" alt=""></a>
				@else
				@endif
			</div>




		</div>
		<div class="col-xs-4">
			<h1 class="title_chica">{{$chica->name}}</h1>
			<h3 class="phone_chica">{{$chica->phone }}</h3>
			<hr>
			<div class="">
				{{$chica->resumen }}
			</div>
			<table style="margin-top: 12px; font-size: 14px;">
				<tbody><tr>
					<td><i class="fa fa-female"></i> <b>Medidas</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->medidas }} </td>
				</tr>
				<tr>
					<td><i class="fa fa-calendar"></i> <b>Atencion</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->atencion }}</td>
				</tr>
				<tr>
					<td><i class="fa fa-clock-o"></i> <b>Horario</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->horario }}</td>
				</tr>
				<tr>
					<td><i class="fa fa-birthday-cake"></i> <b>Edad</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->edad }}</td>
				</tr>
				</tbody>
			</table>
			<hr>
			<h4>Estoy actualmente aqui: </h4>
			<?php
			$pais = $chica->pais;
			switch ($pais) {
				case "AL":
					$pais = "Albania";
					break;
				case "GR":
					$pais = "Greece";
					break;
				case "MK":
					$pais = "Macedonia";
					break;
				case "YU":
					$pais = "Serbia and Montenegro";
					break;
				case "AND":
					$pais = "Andorra";
					break;
				case "F":
					$pais = "France";
					break;
				case "E":
					$pais = "Spain";
					break;
				case "A":
					$pais = "Austria";
					break;
				case "CZ":
					$pais = "Czech Republic";
					break;
				case "D":
					$pais = "Germany";
					break;
				case "H":
					$pais = "Hungary";
					break;
				case "I":
					$pais = "Italy";
					break;
				case "FL":
					$pais = "Liechtenstein";
					break;
				case "SK":
					$pais = "Slovakia";
					break;
				case "SLO":
					$pais = "Slovenia";
					break;
				case "CH":
					$pais = "Switzerland";
					break;
				case "BY":
					$pais = "Belarus";
					break;
				case "LV":
					$pais = "Latvia";
					break;
				case "LT":
					$pais = "Lithuania";
					break;
				case "PL":
					$pais = "Poland";
					break;
				case "UA":
					$pais = "Ukraine";
					break;
				case "R":
					$pais = "Russia";
					break;
				case "B":
					$pais = "Belgium";
					break;
				case "L":
					$pais = "Luxembourg";
					break;
				case "NL":
					$pais = "Netherlands";
					break;
				case "BIH":
					$pais = "Bosnia and Herzegovina";
					break;
				case "HR":
					$pais = "Croatia";
					break;
				case "BG":
					$pais = "Bulgaria";
					break;
				case "RO":
					$pais = "Romania";
					break;
				case "TR":
					$pais = "Turkey";
					break;
				case "DK":
					$pais = "Denmark";
					break;
				case "EW":
					$pais = "Estonia";
					break;
				case "SF":
					$pais = "Finland";
					break;
				case "N":
					$pais = "Norway";
					break;
				case "S":
					$pais = "Sweden";
					break;
				case "MC":
					$pais = "Monaco";
					break;
				case "V":
					$pais = "Holy See";
					break;
				case "IS":
					$pais = "Iceland";
					break;
				case "IRL":
					$pais = "Ireland";
					break;
				case "RSM":
					$pais = "San Marino";
					break;
				case "M":
					$pais = "Malta";
					break;
				case "MD":
					$pais = "Moldova";
					break;
				case "P":
					$pais = "Portugal";
					break;
				case "GB":
					$pais = "United Kingdom";
					break;
				case "AFG":
					$pais = "Afghanistan";
					break;
				case "TJ":
					$pais = "China";
					break;
				case "IR":
					$pais = "Iran";
					break;
				case "PK":
					$pais = "Pakistan";
					break;
				case "TAD":
					$pais = "Tajikistan";
					break;
				case "TM":
					$pais = "Turkmenistan";
					break;
				case "UZB":
					$pais = "Uzbekistan";
					break;
				case "ARM":
					$pais = "Armenia";
					break;
				case "GE":
					$pais = "Georgia";
					break;
				case "AZ":
					$pais = "Azerbaijan";
					break;
				case "BRN":
					$pais = "Bahrain";
					break;
				case "BD":
					$pais = "Bangladesh";
					break;
				case "MYA":
					$pais = "Burma";
					break;
				case "IND":
					$pais = "India";
					break;
				case "BHT":
					$pais = "Bhutan";
					break;
				case "BRU":
					$pais = "Brunei";
					break;
				case "MAL":
					$pais = "Malaysia";
					break;
				case "LAO":
					$pais = "Laos";
					break;
				case "THA":
					$pais = "Thailand";
					break;
				case "K":
					$pais = "Cambodia";
					break;
				case "VN":
					$pais = "Vietnam";
					break;
				case "KAZ":
					$pais = "Kazakstan";
					break;
				case "NOK":
					$pais = "North Korea";
					break;
				case "KGZ":
					$pais = "Kyrgyzstan";
					break;
				case "MNG":
					$pais = "Mongolia";
					break;
				case "NEP":
					$pais = "Nepal";
					break;
				case "CY":
					$pais = "Cyprus";
					break;
				case "IL":
					$pais = "Israel";
					break;
				case "ET":
					$pais = "Egypt";
					break;
				case "RI":
					$pais = "Indonesia";
					break;
				case "PNG":
					$pais = "Papua New Guinea";
					break;
				case "IRQ":
					$pais = "Iraq";
					break;
				case "JOR":
					$pais = "Jordan";
					break;
				case "KWT":
					$pais = "Kuwait";
					break;
				case "SA":
					$pais = "Saudi Arabia";
					break;
				case "SYR":
					$pais = "Syria";
					break;
				case "RL":
					$pais = "Lebanon";
					break;
				case "J":
					$pais = "Japan";
					break;
				case "ROK":
					$pais = "South Korea";
					break;
				case "MV":
					$pais = "Maldives";
					break;
				case "OM":
					$pais = "Oman";
					break;
				case "UAE":
					$pais = "United Arab Emirates";
					break;
				case "YE":
					$pais = "Yemen";
					break;
				case "RP":
					$pais = "Philippines";
					break;
				case "Q":
					$pais = "Qatar";
					break;
				case "SGP":
					$pais = "Singapore";
					break;
				case "CL":
					$pais = "Sri Lanka";
					break;
				case "RC":
					$pais = "Taiwan";
					break;
				case "AG":
					$pais = "Antigua and Barbuda";
					break;
				case "BS":
					$pais = "Bahamas";
					break;
				case "BDS":
					$pais = "Barbados";
					break;
				case "BZ":
					$pais = "Belize";
					break;
				case "GCA":
					$pais = "Guatemala";
					break;
				case "MEX":
					$pais = "Mexico";
					break;
				case "CDN":
					$pais = "Canada";
					break;
				case "USA":
					$pais = "United States";
					break;
				case "CR":
					$pais = "Costa Rica";
					break;
				case "NIC":
					$pais = "Nicaragua";
					break;
				case "PA":
					$pais = "Panama";
					break;
				case "C":
					$pais = "Cuba";
					break;
				case "WD":
					$pais = "Dominica";
					break;
				case "DOM":
					$pais = "Dominican Republic";
					break;
				case "RH":
					$pais = "Haiti";
					break;
				case "ES":
					$pais = "El Salvador";
					break;
				case "HCA":
					$pais = "Honduras";
					break;
				case "WG":
					$pais = "Grenada";
					break;
				case "JA":
					$pais = "Jamaica";
					break;
				case "CO":
					$pais = "Colombia";
					break;
				case "KN":
					$pais = "Saint Kitts and Nevis";
					break;
				case "WL":
					$pais = "Saint Lucia";
					break;
				case "WV":
					$pais = "Saint Vincent and the Grenadines";
					break;
				case "TT":
					$pais = "Trinidad and Tobago";
					break;
				case "AUS":
					$pais = "Australia";
					break;
				case "FJI":
					$pais = "Fiji";
					break;
				case "KIR":
					$pais = "Kiribati";
					break;
				case "MH":
					$pais = "Marshall Islands";
					break;
				case "FSM":
					$pais = "Micronesia";
					break;
				case "NAU":
					$pais = "Nauru";
					break;
				case "NCA":
					$pais = "New Caledonia";
					break;
				case "NZ":
					$pais = "New Zealand";
					break;
				case "PAL":
					$pais = "Palau";
					break;
				case "SLB":
					$pais = "Solomon Islands";
					break;
				case "TO":
					$pais = "Tonga";
					break;
				case "TUV":
					$pais = "Tuvalu";
					break;
				case "VU":
					$pais = "Vanuatu";
					break;
				case "WS":
					$pais = "Western Samoa";
					break;
				case "RA":
					$pais = "Argentina";
					break;
				case "BOL":
					$pais = "Bolivia";
					break;
				case "BR":
					$pais = "Brazil";
					break;
				case "RCH":
					$pais = "Chile";
					break;
				case "PY":
					$pais = "Paraguay";
					break;
				case "ROU":
					$pais = "Uruguay";
					break;
				case "PE":
					$pais = "Peru";
					break;
				case "FGU":
					$pais = "French Guiana";
					break;
				case "GUY":
					$pais = "Guyana";
					break;
				case "SME":
					$pais = "Suriname";
					break;
				case "YV":
					$pais = "Venezuela";
					break;
				case "EC":
					$pais = "Ecuador";
					break;
				case "DZ":
					$pais = "Algeria";
					break;
				case "LAR":
					$pais = "Libya";
					break;
				case "RMM":
					$pais = "Mali";
					break;
				case "RIM":
					$pais = "Mauritania";
					break;
				case "MA":
					$pais = "Morocco";
					break;
				case "RN":
					$pais = "Niger";
					break;
				case "TN":
					$pais = "Tunisia";
					break;
				case "WSA":
					$pais = "Western Sahara";
					break;
				case "ANG":
					$pais = "Angola";
					break;
				case "RCB":
					$pais = "Congo";
					break;
				case "NAM":
					$pais = "Namibia";
					break;
				case "ZRE":
					$pais = "Zaire";
					break;
				case "Z":
					$pais = "Zambia";
					break;
				case "BEN":
					$pais = "Benin";
					break;
				case "BF":
					$pais = "Burkina Faso";
					break;
				case "WAN":
					$pais = "Nigeria";
					break;
				case "RT":
					$pais = "Togo";
					break;
				case "RB":
					$pais = "Botswana";
					break;
				case "RSA":
					$pais = "South Africa";
					break;
				case "ZW":
					$pais = "Zimbabwe";
					break;
				case "CI":
					$pais = "Cote dIvoire";
					break;
				case "GH":
					$pais = "Ghana";
					break;
				case "BI":
					$pais = "Burundi";
					break;
				case "RWA":
					$pais = "Rwanda";
					break;
				case "EAT":
					$pais = "Tanzania";
					break;
				case "CAM":
					$pais = "Cameroon";
					break;
				case "RCA":
					$pais = "Central African Republic";
					break;
				case "TCH":
					$pais = "Chad";
					break;
				case "GQ":
					$pais = "Equatorial Guinea";
					break;
				case "G":
					$pais = "Gabon";
					break;
				case "CV":
					$pais = "Cape Verde";
					break;
				case "SUD":
					$pais = "Sudan";
					break;
				case "COM":
					$pais = "Comoros";
					break;
				case "RG":
					$pais = "Guinea";
					break;
				case "LB":
					$pais = "Liberia";
					break;
				case "DJI":
					$pais = "Djibouti";
					break;
				case "ER":
					$pais = "Eritrea";
					break;
				case "ETH":
					$pais = "Ethiopia";
					break;
				case "SP":
					$pais = "Somalia";
					break;
				case "EAK":
					$pais = "Kenya";
					break;
				case "WAG":
					$pais = "Gambia";
					break;
				case "SN":
					$pais = "Senegal";
					break;
				case "GNB":
					$pais = "Guinea-Bissau";
					break;
				case "WAL":
					$pais = "Sierra Leone";
					break;
				case "EAU":
					$pais = "Uganda";
					break;
				case "LS":
					$pais = "Lesotho";
					break;
				case "RM":
					$pais = "Madagascar";
					break;
				case "MW":
					$pais = "Malawi";
					break;
				case "MOC":
					$pais = "Mozambique";
					break;
				case "MS":
					$pais = "Mauritius";
					break;
				case "SD":
					$pais = "Swaziland";
					break;
				case "STP":
					$pais = "Sao Tome and Principe";
					break;
				case "SY":
					$pais = "Seychelles";
					break;
			}
			?>
			<table style="margin-top: 12px; font-size: 14px;">
				<tbody><tr>
					<td><i class="fa fa-female"></i> <b>Pais</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;<?php echo $pais; ?></td>
				</tr>
				<tr>
					<td><i class="fa fa-calendar"></i> <b>Departamento / Provincia</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->estado }}</td>
				</tr>
				<tr>
					<td><i class="fa fa-clock-o"></i> <b>Ciudad</b></td>
					<td>:</td>
					<td>&nbsp;&nbsp;{{$chica->ciudad }}</td>
				</tr>
				</tbody>
			</table>
			<hr>
			<div class="col-md-12">
				<a href="#" class="list-group-item default" target="_blank">
                    <span class="glyph-icon icon-separator-vertical">
                        <i class="fa fa-user"></i> <i class="fa fa-comments"></i>
                    </span>
					Ver comentarios en el Foro:
				</a>
			</div>
			<hr>
			<?php

			function getRealUserIpChica(){
				switch(true){
					case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
					case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
					case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
					default : return $_SERVER['REMOTE_ADDR'];
				}
			}

			$user_ip = getRealUserIpChica();

			if($user_ip == '::1' || $user_ip == '127.0.0.1') {
				$PPais = 'PERU';
			} else {
				echo $user_ip = getRealUserIpChica();
				$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
				$PPais = strtoupper($geo["geoplugin_countryName"]);
				$PPais = str_replace(" ", "-", $PPais);
			}


			$anuncios = DB::table('anuncios')->get();?>
			@foreach($anuncios as $anuncio)
				@if($anuncio->pais==$PPais  && $anuncio->posicion=='anuncio_chica' && $anuncio->status=='publicado' && $anuncio->idioma=='espanol')
					<a href="{{$anuncio->url}}" title="{{$anuncio->title}} - {{$anuncio->id}}" target="_blank"><img src="/uploads/anuncios/{{$anuncio->imagen}}" alt=""></a>
				@endif
			@endforeach
		</div>

	</div>

</div>

@endsection