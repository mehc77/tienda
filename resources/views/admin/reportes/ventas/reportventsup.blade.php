<!DOCTYPE html>

<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <title>Reporte de Ventas</title>
  <link href="cssInventario/Inventario.css" rel="stylesheet"/>
  
</head>

<body>
  <header class="clearfix">
    <div class="left">
      @foreach($dt_empress as $entidad)
      <strong class="negrita">{{ $entidad->nom }}</strong>
      @endforeach 
    </div>
    <div class="center" id="der">
      <strong class="negrita"></strong>
    </div>
    <div class="right" id="der">
      <strong class="negrita">{{ $date }}</strong>
    </div> 
  </header>
  <center>

    <fieldset id="datafac" class="radius">
      <div class="left">       
        @foreach($clients as $cliente)
        <strong class="negrita">Emitido por : {{ $cliente->name }} {{ $cliente->apellidos }}</strong><br/>
        <strong class="negrita">C.I. : {{ $cliente->cedula }}</strong><br/>
        @endforeach 
      </div>
    </fieldset>
    <h1> {{ $filtro }} </h1>
    <table class="detall" width="100%" border="1" cellspacing="0">

      <thead>
        <tr>
          <th>#</th>
          <th>Venta</th>
          <th>Cliente</th>
          <th>Contacto</th>
          <th>Email</th>
          <th>factura</th>
          <th>Subtotal</th>
          <th>Iva</th>
          <th>Total</th>
        </tr>
      </thead>

      <tbody>
        <?php $i=1; ?>
        @foreach($sales as $sale)
        <tr>
         <td><?php echo $i; ?></td>
         <td><center>{{ $sale->cantidad }}</center></td>
         <td>      {{ $sale->name }} {{ $sale->apellidos }}      </td>
         <td>      {{ $sale->telefono }} {{ $sale->celular }}      </td>
         <td>{{ $sale->email }}</td>
         <td>{{ $sale->factura }}</td>
         <td>${{ number_format($sale->subtotal,2) }}</td>
         <td>${{ number_format($sale->iva,2) }}</td>
         <td>${{ number_format($sale->total,2) }}</td>
       </tr>
       <?Php $i++; ?>
       @endforeach
    </tbody>
  </table>
</center>

<div class="alert">
  <strong class="inportant">
    ESTE DOCUMENTO NO TENDRÁ FUERZA O EFECTO HASTA QUE SEA REVISADO Y FIRMADO POR UN FUNCIONARIO DE LA EMPRESA 
  </strong>
</div>
<div class="alert">
  <center>
    <strong class="inportant">
      _____________________________________ <br/>
    </strong>
    Firma<br/>
    C.I.: ________________________<br/>
  </center>
</div>


<footer class="footer">
  <center>
    @foreach($dt_empress as $entidad)
    {{ $entidad->nom }} {{ $entidad->observ }} Contáctos ( {{ $entidad->tlfun }} - {{ $entidad->tlfds }} ) Celulár {{ $entidad->cel }} fáx {{ $entidad->fax }} dir {{ $entidad->dir }} nuestra página web {{ $entidad->pagweb }}.
    {{ $entidad->prop }} correo {{ $entidad->email }}.
    @endforeach
  </center>
</footer>
</body>

</html>