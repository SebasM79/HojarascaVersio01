seccion para alta de cespeds    
<form action="{{ route('cesped.store') }}" method="POST">
    {{@csrf_field()}}

<label for="nombre_cesped">{{'Nombre Cesped'}}</label>
    <input type="text" name="nombre_cesped" id="nombre_cesped" required>
</br>

<label for="fecha_ingreso">{{'Fecha Ingreso'}}</label>
    <input type="date" name="fecha_ingreso" id="fecha_ingreso" required>
</br>

<label for="importe">{{'Importe'}}</label>
    <input type="number" name="importe" id="importe" required>
</br>

<label for="cesped_activo">{{'Cesped Activo'}}</label>    
    <input type="number" name="cesped_activo" id="cesped_activo" required>
</br>

<label for="descripcion">{{'Descripcion'}}</label>
    <input type="text" name="descripcion" id="descripcion" required>
</br>
<label for="mail_origen">{{'Mail Origen'}}</label>
    <input type="email" name="mail_origen" id="mail_origen" required>
</br>
    <button type="submit">Guardar</button>
</form>