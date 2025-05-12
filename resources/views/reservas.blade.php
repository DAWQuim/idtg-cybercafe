@extends('layouts.app') <!-- Usamos un layout principal (si lo tienes configurado) -->

@section('content')
    <div class="container">
        <h2>Haz tu Reserva</h2>

        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf <!-- Protección CSRF -->

            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo_servicio">Tipo de Servicio</label>
                <select id="tipo_servicio" name="tipo_servicio" class="form-control" required>
                    <option value="consultoria">Consultoría</option>
                    <option value="mantenimiento">Mantenimiento</option>
                    <option value="desarrollo">Desarrollo</option>
                    <option value="otros">Otros</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_reserva">Fecha de Reserva</label>
                <input type="date" id="fecha_reserva" name="fecha_reserva" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="duracion">Duración (horas)</label>
                <input type="number" id="duracion" name="duracion" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label for="metodo_pago">Método de Pago</label>
                <select id="metodo_pago" name="metodo_pago" class="form-control" required>
                    <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="efectivo">Efectivo</option>
                </select>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
                <label class="form-check-label" for="terminos">He leído y acepto los términos y condiciones</label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Reserva</button>
        </form>
    </div>
@endsection
