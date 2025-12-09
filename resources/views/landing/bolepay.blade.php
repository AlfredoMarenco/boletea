@extends('layouts.template')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="bg-white shadow-md rounded-lg p-6 border">

        <h2 class="text-rojo text-3xl font-bold mb-4">Modalidad de Pago Bolepay</h2>

        <p class="text-gray-700 mb-4">
            A continuación se describen las condiciones aplicables para realizar compras mediante la modalidad
            <strong>“Crédito sin Tarjeta”</strong> de BOLEPAY.
        </p>

        <h3 class="text-lg font-semibold text-rojo mb-2">Condiciones Generales</h3>

        <ol class="list-decimal ml-6 text-gray-700 space-y-2 mb-6">
            <li>Pago de un enganche y cargo por servicio, sobre el total del precio al momento de adquirir el boleto.</li>
            <li>El cliente podrá realizar abonos parciales por cualquier monto y en cualquier fecha, considerando que el total a diferir deberá estar cubierto 8 días naturales antes del evento.</li>
        </ol>

        <h3 class="text-lg font-semibold text-rojo mb-2">Declaración de Conformidad</h3>

        <p class="font-medium text-gray-700 mb-3">
            Manifiesto conformidad y aceptación con las condiciones establecidas en la compra del boleto en su modalidad
            <strong>“Crédito sin Tarjeta”</strong>, mismas que se detallan a continuación:
        </p>

        <ul class="list-disc ml-6 text-gray-700 space-y-3">
            <li>Un pago inicial del 25% más cargos por venta.</li>

            <li>El cliente recibirá una orden de compra para realizar sus abonos parciales. El boleto de acceso será entregado únicamente cuando el TOTAL A DIFERIR esté completamente pagado.</li>

            <li>
                En caso de llegar a la FECHA DE VENCIMIENTO (8 días naturales antes del evento) sin haber completado el pago total,
                <strong>Sistemas Innovadores para Espectáculos SA de CV (BOLEPAY)</strong> podrá cancelar de manera definitiva el(los) boleto(s),
                sin derecho a reactivación y sin devolución del enganche, cargo por servicio o cargos administrativos.
            </li>

            <li>
                Si al llegar a la fecha límite no se ha completado el TOTAL A DIFERIR, el cliente recibirá en su
                <strong>Monedero electrónico BOLETEA</strong> la suma de todos sus abonos parciales (no incluye enganche ni cargos adicionales).
                Dicho monedero podrá utilizarse en cualquier otro evento disponible en la plataforma de Boletea.
            </li>

            <li>
                Cualquier condición no prevista en este documento se regirá conforme a los
                <strong>Términos y Condiciones</strong> de Boletea Tickets, los cuales pueden consultarse en:
                <br>
                <a href="https://www.boletea.com/terminosycondiciones"
                   class="text-blue-600 hover:underline" target="_blank">
                    https://www.boletea.com/terminosycondiciones
                </a>
            </li>
        </ul>

    </div>

</div>

@endsection

