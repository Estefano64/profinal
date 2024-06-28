<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta - Polleria Miguelon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #333;
            max-width: 21cm;
            margin: 0 auto;
            padding: 1cm;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 15px;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
        }
        .header h1 {
            color: #e67e22;
            margin: 0 0 5px;
            font-size: 20px;
        }
        .header p {
            margin: 2px 0;
            color: #7f8c8d;
        }
        h2, h3 {
            color: #2c3e50;
            border-bottom: 1px solid #e67e22;
            padding-bottom: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .cliente-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #2c3e50;
        }
        .text-right {
            text-align: right;
        }
        .summary {
            margin-top: 5px;
        }
        .summary p {
            margin: 3px 0;
            text-align: right;
        }
        .footer {
            margin-top: 15px;
            text-align: center;
            font-style: italic;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Polleria Miguelon</h1>
            <p>Cayma-Buenos aires 115</p>
            <p>Teléfono: (01) 234-5678</p>
        </div>

        <h2>Boleta de Venta</h2>
        <div class="cliente-info">
            <p><strong>Número:</strong> {{ $cuenta->idCuenta }}</p>
            <p><strong>Fecha:</strong> {{ date('d/m/Y H:i') }}</p>
            <p><strong>Cliente:</strong> {{ $cuenta->cliente->nombre }}</p>
            <p><strong>DNI:</strong> {{ $cuenta->cliente->dni }}</p>
            <p><strong>Método de Pago:</strong> {{ $cuenta->metodoPago->nombreMetodo }}</p>
            <p><strong>Estado:</strong> {{ $cuenta->estado }}</p>
        </div>

        <h3>Detalles de la Cuenta</h3>
        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Platillo</th>
                    <th>Cant.</th>
                    <th class="text-right">Precio</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->tipo ?? 'N/A' }}</td>
                    <td>{{ $pedido->pedidoplatillo->platillo->nombre ?? 'N/A' }}</td>
                    <td>{{ $pedido->pedidoplatillo->cantidad ?? 'N/A' }}</td>
                    <td class="text-right">S/. {{ number_format($pedido->pedidoplatillo->platillo->precio ?? 0, 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="summary">
            <p><strong>Subtotal:</strong> S/. {{ number_format($cuenta->subtotal, 2) }}</p>
            <p><strong>IGV (18%):</strong> S/. {{ number_format($cuenta->impuesto, 2) }}</p>
            <p><strong>Total:</strong> <strong>S/. {{ number_format($cuenta->total, 2) }}</strong></p>
        </div>

        <div class="footer">
            <p>¡Gracias por su preferencia!</p>
        </div>
    </div>
</body>
</html>