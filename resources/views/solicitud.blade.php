@extends( 'app' )

@section( 'title', 'Solicitud' )

@section( 'section-class', 'solicitud' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                <article class="clearfix bit-1">
                    <h1 class="bit-1">Solicitud</h1>
                    <p class="bit-2"><a href="/contrato" target="_self" title="Ver Contrato">Ver Contrato</a></p>
                    <p class="bit-2"><a href="/aviso-de-privacidad" target="_self" title="Ver Aviso de Privacidad">Ver Aviso de Privacidad</a></p>
                    {!! Form::open( [ 'action' => 'SolicitudController@store', 'class' => 'bit-1 clearfix' ] ) !!}
                        <fieldset class="bit-1 clearfix">
                            <legend class="bit-1">Formato de solicitud</legend>
                            <p class="bit-1">Llena correctamente como se te indica</p>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'nombre_doctor', 'Nombre del médico', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'nombre_doctor', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'email', 'Email', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::email( 'email', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'cedula_1', 'Cédula profesional', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'cedula_1', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'cedula_2', 'Cedula 2', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'cedula_2', '', [ 'class' => 'bit-1' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'cedula_3', 'Cedula 3', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'cedula_3', '', [ 'class' => 'bit-1' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'especialidad', 'Elige tu especialidad', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::select( 'especialidad', [
                                    '' => 'Selecciona una opción',
                                    'Otra' => 'Otra',
                                    'Alergologia' => 'Alergologia',
                                    'Cardiología' => 'Cardiología',
                                    'Cirugía Cardiaca' => 'Cirugía Cardiaca',
                                    'Cirugía Estética' => 'Cirugía Estética',
                                    'Cirugía General' => 'Cirugía General',
                                    'Cirugía Plastica' => 'Cirugía Plastica',
                                    'Cirugía de Mama' => 'Cirugía de Mama',
                                    'Cirugía Maxilofacial' => 'Cirugía Maxilofacial',
                                    'Cirugía Vascular' => 'Cirugía Vascular',
                                    'Dermatología' => 'Dermatología',
                                    'Endocrinología y Nutrición' => 'Endocrinología y Nutrición',
                                    'Gastroenterología-Digestivo' => 'Gastroenterología-Digestivo',
                                    'Genética' => 'Genética',
                                    'Geriatría' => 'Geriatría',
                                    'Ginecología' => 'Ginecología',
                                    'Hematología' => 'Hematología',
                                    'Enfermedades del Hígado (Hepatología)' => 'Enfermedades del Hígado (Hepatología)',
                                    'Enfermedades Infecciosas' => 'Enfermedades Infecciosas',
                                    'Medicina Interna' => 'Medicina Interna',
                                    'Nefrología' => 'Nefrología',
                                    'Neumologia' => 'Neumologia',
                                    'Neurología' => 'Neurología',
                                    'Neurocirugía' => 'Neurocirugía',
                                    'Oftalmología' => 'Oftalmología',
                                    'Otorrinolaringologia' => 'Otorrinolaringologia',
                                    'Oncología' => 'Oncología',
                                    'Pediatría' => 'Pediatría',
                                    'Proctología' => 'Proctología',
                                    'Psiquiatría' => 'Psiquiatría',
                                    'Rehabilitación y M. Deportiva' => 'Rehabilitación y M. Deportiva',
                                    'Reumatología' => 'Reumatología',
                                    'Traumatología' => 'Traumatología',
                                    'Urología' => 'Urología', ], null, [ 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'telefono_contacto', 'Teléfono de contacto', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'telefono_contacto', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'telefono_celular', 'Teléfono celular', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'telefono_celular', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'parte_republica', '¿En qué parte de la República te encuentras?', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::select( 'parte_republica', [
                                    '' => 'Selecciona una opción',
                                    'Distrito Federal' => 'Distrito Federal',
                                    'Aguascalientes' => 'Aguascalientes',
                                    'Baja California' => 'Baja California',
                                    'Baja California Sur' => 'Baja California Sur',
                                    'Campeche' => 'Campeche',
                                    'Coahuila' => 'Coahuila',
                                    'Colima' => 'Colima',
                                    'Chiapas' => 'Chiapas',
                                    'Chihuahua' => 'Chihuahua',
                                    'Durango' => 'Durango',
                                    'Estado de México' => 'Estado de México',
                                    'Guanajuato' => 'Guanajuato',
                                    'Guerrero' => 'Guerrero',
                                    'Hidalgo' => 'Hidalgo',
                                    'Jalisco' => 'Jalisco',
                                    'Michoacán' => 'Michoacán',
                                    'Morelos' => 'Morelos',
                                    'Nayarit' => 'Nayarit',
                                    'Nuevo León' => 'Nuevo León',
                                    'Oaxaca' => 'Oaxaca',
                                    'Puebla' => 'Puebla',
                                    'Querétaro' => 'Querétaro',
                                    'Quintana Roo' => 'Quintana Roo',
                                    'San Luis Potosí' => 'San Luis Potosí',
                                    'Sinaloa' => 'Sinaloa',
                                    'Sonora' => 'Sonora',
                                    'Tabasco' => 'Tabasco',
                                    'Tamaulipas' => 'Tamaulipas',
                                    'Tlaxcala' => 'Tlaxcala',
                                    'Veracruz' => 'Veracruz',
                                    'Yucatán' => 'Yucatán',
                                    'Zacateca' => 'Zacatecas',
                                ], null, [ 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                <p class="bit-1">Dirección</p>
                                {!! Form::label( 'direccion_calle_1', 'Calle', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'direccion_calle_1', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'direccion_calle_2', 'Calle 2', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'direccion_calle_2', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'direccion_ciudad', 'Ciudad', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'direccion_ciudad', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'direccion_estado', 'Estado', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'direccion_estado', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'direccion_pais', 'País', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::select( 'direccion_pais', [
                                    '' => 'Selecciona una opción',
                                    'Norteamérica' => [
                                        'Antigua and Barbuda' => 'Antigua and Barbuda',
                                        'Aruba' => 'Aruba',
                                        'Bahamas' => 'Bahamas',
                                        'Barbados' => 'Barbados',
                                        'Belize' => 'Belize',
                                        'Canada' => 'Canada',
                                        'Cayman Islands' => 'Cayman Islands',
                                        'Cook Islands' => 'Cook Islands',
                                        'Costa Rica' => 'Costa Rica',
                                        'Cuba' => 'Cuba',
                                        'Dominica' => 'Dominica',
                                        'Dominican Republic' => 'Dominican Republic',
                                        'El Salvador' => 'El Salvador',
                                        'Grenada' => 'Grenada',
                                        'Guatemala' => 'Guatemala',
                                        'Haiti' => 'Haiti',
                                        'Honduras' => 'Honduras',
                                        'Jamaica' => 'Jamaica',
                                        'Mexico' => 'Mexico',
                                        'Netherlands Antilles' => 'Netherlands Antilles',
                                        'Nicaragua' => 'Nicaragua',
                                        'Panama ' => 'Panama ',
                                        'Puerto Rico ' => 'Puerto Rico ',
                                        'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                                        'Saint Lucia' => 'Saint Lucia',
                                        'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
                                        'Trinidad and Tobago' => 'Trinidad and Tobago',
                                        'United States' => 'United States',
                                    ],
                                    'Sudamérica' => [
                                        'Argentina' => 'Argentina',
                                        'Bolivia' => 'Bolivia',
                                        'Brazil' => 'Brazil',
                                        'Chile' => 'Chile',
                                        'Colombia' => 'Colombia',
                                        'Ecuador' => 'Ecuador',
                                        'Guyana' => 'Guyana',
                                        'Paraguay' => 'Paraguay',
                                        'Peru' => 'Peru',
                                        'Suriname' => 'Suriname',
                                        'Uruguay' => 'Uruguay',
                                        'Venezuela' => 'Venezuela',
                                    ],
                                    'Europa' => [
                                        'Albania' => 'Albania',
                                        'Andorra' => 'Andorra',
                                        'Armenia' => 'Armenia',
                                        'Austria' => 'Austria',
                                        'Azerbaijan' => 'Azerbaijan',
                                        'Belarus' => 'Belarus',
                                        'Belgium' => 'Belgium',
                                        'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                                        'Bulgaria' => 'Bulgaria',
                                        'Croatia' => 'Croatia',
                                        'Cyprus' => 'Cyprus',
                                        'Czech Republic' => 'Czech Republic',
                                        'Denmark' => 'Denmark',
                                        'Estonia' => 'Estonia',
                                        'Faroe Islands' => 'Faroe Islands',
                                        'Finland' => 'Finland',
                                        'France' => 'France',
                                        'Georgia' => 'Georgia',
                                        'Germany' => 'Germany',
                                        'Greece' => 'Greece',
                                        'Hungary' => 'Hungary',
                                        'Iceland' => 'Iceland',
                                        'Ireland' => 'Ireland',
                                        'Italy' => 'Italy',
                                        'Kosovo' => 'Kosovo',
                                        'Latvia' => 'Latvia',
                                        'Liechtenstein' => 'Liechtenstein',
                                        'Lithuania' => 'Lithuania',
                                        'Luxembourg' => 'Luxembourg',
                                        'Macedonia' => 'Macedonia',
                                        'Malta' => 'Malta',
                                        'Moldova' => 'Moldova',
                                        'Monaco' => 'Monaco',
                                        'Montenegro' => 'Montenegro',
                                        'Netherlands' => 'Netherlands',
                                        'Norway' => 'Norway',
                                        'Poland' => 'Poland',
                                        'Portugal' => 'Portugal',
                                        'Romania' => 'Romania',
                                        'San Marino' => 'San Marino',
                                        'Serbia' => 'Serbia',
                                        'Slovakia' => 'Slovakia',
                                        'Slovenia' => 'Slovenia',
                                        'Spain' => 'Spain',
                                        'Sweden' => 'Sweden',
                                        'Switzerland' => 'Switzerland',
                                        'Ukraine' => 'Ukraine',
                                        'United Kingdom' => 'United Kingdom',
                                        'Vatican City' => 'Vatican City'
                                    ],
                                    'Asia' => [
                                        '﻿Afghanistan' => '﻿Afghanistan',
                                        'Bahrain' => 'Bahrain',
                                        'Bangladesh' => 'Bangladesh',
                                        'Bhutan' => 'Bhutan',
                                        'Brunei Darussalam' => 'Brunei Darussalam',
                                        'Myanmar' => 'Myanmar',
                                        'Cambodia' => 'Cambodia',
                                        'China' => 'China',
                                        'East Timor' => 'East Timor',
                                        'Hong Kong' => 'Hong Kong',
                                        'India' => 'India',
                                        'Indonesia' => 'Indonesia',
                                        'Iran' => 'Iran',
                                        'Iraq' => 'Iraq',
                                        'Israel' => 'Israel',
                                        'Japan' => 'Japan',
                                        'Jordan' => 'Jordan',
                                        'Kazakhstan' => 'Kazakhstan',
                                        'North Korea' => 'North Korea',
                                        'South Korea' => 'South Korea',
                                        'Kuwait' => 'Kuwait',
                                        'Kyrgyzstan' => 'Kyrgyzstan',
                                        'Laos' => 'Laos',
                                        'Lebanon' => 'Lebanon',
                                        'Malaysia' => 'Malaysia',
                                        'Maldives' => 'Maldives',
                                        'Mongolia' => 'Mongolia',
                                        'Nepal' => 'Nepal',
                                        'Oman' => 'Oman',
                                        'Pakistan' => 'Pakistan',
                                        'Palestine' => 'Palestine',
                                        'Philippines' => 'Philippines',
                                        'Qatar' => 'Qatar',
                                        'Russia' => 'Russia',
                                        'Saudi Arabia' => 'Saudi Arabia',
                                        'Singapore' => 'Singapore',
                                        'Sri Lanka' => 'Sri Lanka',
                                        'Syria' => 'Syria',
                                        'Taiwan' => 'Taiwan',
                                        'Tajikistan' => 'Tajikistan',
                                        'Thailand' => 'Thailand',
                                        'Turkey' => 'Turkey',
                                        'Turkmenistan' => 'Turkmenistan',
                                        'United Arab Emirates' => 'United Arab Emirates',
                                        'Uzbekistan' => 'Uzbekistan',
                                        'Vietnam' => 'Vietnam',
                                        'Yemen' => 'Yemen'
                                    ],
                                    'Oceania' => [
                                        'Australia' => 'Australia',
                                        'Fiji' => 'Fiji',
                                        'Kiribati' => 'Kiribati',
                                        'Marshall Islands' => 'Marshall Islands',
                                        'Micronesia' => 'Micronesia',
                                        'Nauru' => 'Nauru',
                                        'New Zealand' => 'New Zealand',
                                        'Palau' => 'Palau',
                                        'Papua New Guinea' => 'Papua New Guinea',
                                        'Samoa' => 'Samoa',
                                        'Solomon Islands' => 'Solomon Islands',
                                        'Tonga' => 'Tonga',
                                        'Tuvalu' => 'Tuvalu',
                                        'Vanuatu' => 'Vanuatu'
                                    ],
                                    'África' => [
                                        'Algeria' => 'Algeria',
                                        'Angola' => 'Angola',
                                        'Benin' => 'Benin',
                                        'Botswana' => 'Botswana',
                                        'Burkina Faso' => 'Burkina Faso',
                                        'Burundi' => 'Burundi',
                                        'Cameroon' => 'Cameroon',
                                        'Cape Verde' => 'Cape Verde',
                                        'Central African Republic' => 'Central African Republic',
                                        'Chad' => 'Chad',
                                        'Comoros' => 'Comoros',
                                        'Democratic Republic of the Congo' => 'Democratic Republic of the Congo',
                                        'Republic of the Congo' => 'Republic of the Congo',
                                        'Djibouti' => 'Djibouti',
                                        'Egypt' => 'Egypt',
                                        'Equatorial Guinea' => 'Equatorial Guinea',
                                        'Eritrea' => 'Eritrea',
                                        'Ethiopia' => 'Ethiopia',
                                        'Gabon' => 'Gabon',
                                        'Gambia' => 'Gambia',
                                        'Ghana' => 'Ghana',
                                        'Gibraltar' => 'Gibraltar',
                                        'Guinea' => 'Guinea',
                                        'Guinea-Bissau' => 'Guinea-Bissau',
                                        "Cote d'Ivoire" => "Cote d'Ivoire",
                                        'Kenya' => 'Kenya',
                                        'Lesotho' => 'Lesotho',
                                        'Liberia' => 'Liberia',
                                        'Libya' => 'Libya',
                                        'Madagascar' => 'Madagascar',
                                        'Malawi' => 'Malawi',
                                        'Mali' => 'Mali',
                                        'Mauritania' => 'Mauritania',
                                        'Mauritius' => 'Mauritius',
                                        'Morocco' => 'Morocco',
                                        'Mozambique' => 'Mozambique',
                                        'Namibia' => 'Namibia',
                                        'Niger' => 'Niger',
                                        'Nigeria' => 'Nigeria',
                                        'Rwanda' => 'Rwanda',
                                        'Sao Tome and Principe' => 'Sao Tome and Principe',
                                        'Senegal' => 'Senegal',
                                        'Seychelles' => 'Seychelles',
                                        'Sierra Leone' => 'Sierra Leone',
                                        'Somalia' => 'Somalia',
                                        'South Africa' => 'South Africa',
                                        'Sudan' => 'Sudan',
                                        'Swaziland' => 'Swaziland',
                                        'United Republic of Tanzania' => 'United Republic of Tanzania',
                                        'Togo' => 'Togo',
                                        'Tunisia' => 'Tunisia',
                                        'Uganda' => 'Uganda',
                                        'Zambia' => 'Zambia',
                                        'Zimbabwe' => 'Zimbabwe'
                                    ]
                                ], null, [ 'required' => 'required '] ) !!}
                            </div>
                            <div class="input bit-2 clearfix">
                                {!! Form::label( 'direccion_postal', 'Código Postal', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'direccion_postal', '', [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'confirmed_contract', 'Acepto los términos y condiciones del contrato', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::checkbox( 'confirmed_contract', 1, null, [ 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::label( 'confirmed_policy', 'He leído el aviso de privacidad', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::checkbox( 'confirmed_policy', 1, null, [ 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1 clearfix">
                                {!! Form::submit('Enviar') !!}
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </article>
            </section>
@stop