@extends('layouts.template')

@section('content')
    <div class="p-10 text-justify">
        <div>
            <h1 class="text-rojo text-3xl font-bold mb-4">TicketAssist</h1>
            <p class="mb-6">
                Estás protegido en caso de alguna eventualidad que te impida asistir a tu evento.
            </p>

            <h2 class="text-xl font-bold mb-3">Tus boletos serán reembolsables en casos como:</h2>
            <ul class="list-decimal list-inside mb-6 space-y-1">
                <li>Accidente del comprador o de un familiar en primer grado que impida la asistencia al evento.</li>
                <li>Enfermedad del comprador o de un familiar en primer grado que, bajo recomendación médica, impida la
                    asistencia al evento.</li>
                <li>Defunción del comprador o de un familiar en primer grado.</li>
                <li>Afectaciones severas a la vivienda del comprador por causa de incendio, inundación, derrumbe o robo.
                </li>
                <li>Retraso o cancelación de transporte foráneo, en caso de no residir en la ciudad del evento.</li>
            </ul>

            <p class="mb-6">
                <span class="font-semibold">•</span> El monto máximo reembolsable será de <strong>$10,000</strong> por
                concepto de precio de boleto y cargo por servicio. <br>
                <span class="font-semibold">•</span> El monto pagado por concepto de AseguraTicket <span
                    class="font-semibold">no es reembolsable</span>.
            </p>

            <h2 class="text-xl font-bold mb-3">Es necesario presentar, según sea el caso:</h2>
            <ul class="list-decimal list-inside mb-6 space-y-1">
                <li>Constancia médica de alguna institución de salud pública o privada que indique un plazo no mayor a 48
                    hrs del incidente previo al evento.</li>
                <li>Constancia médica de alguna institución de salud pública o privada que indique un plazo no mayor a 24
                    hrs de sintomatología previo al evento.</li>
                <li>Acta de defunción que indique un plazo no mayor a 48 hrs de la defunción previo al evento.</li>
                <li>Peritaje de autoridad competente que indique un plazo no mayor a 24 hrs del siniestro previo al evento.
                </li>
                <li>Registro de evidencia donde el prestador de servicio de transporte incumple con fechas u horarios del
                    servicio contratado.</li>
            </ul>

            <h2 class="text-xl font-bold mb-3">El reembolso no será aplicable en los siguientes casos:</h2>
            <ul class="list-decimal list-inside mb-6 space-y-1">
                <li>Lesiones auto infringidas.</li>
                <li>Sintomatología relacionada directamente con el abuso de sustancias tóxicas.</li>
                <li>Suicidio.</li>
                <li>Afectaciones a la vivienda atribuibles al comprador.</li>
                <li>Imposibilidad de viajar por razones atribuibles al comprador.</li>
            </ul>
        </div>
    </div>
@endsection
