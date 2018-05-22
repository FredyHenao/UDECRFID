<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style>
    #nombre {
      position: absolute;
      top: 223px;
      left: 102px;
    }

    .nombre {
      font-weight: 600;
      font-size: 1.3em;
    }

    #programa {
      position: absolute;
      top: 303px;
      left: 35px;
    }

    #imagen {
      position: absolute;
      top: 75px;
      left: 143px;
    }

    #codigo {
      position: absolute;
      top: 285px;
      left: 35px;
    }

  </style>
  <title>Mis platos favoritos</title>
</head>
<body>

  <div style="position: relative;">
    <img src=".//images/carnet.png" alt="" style="width: 241px; height: auto; position: absolute;">
    <div id="nombre">
      <span class="nombre">
        {{ $user->name }} <BR> {{ $user->lastname }}
      </span>
    </div>
    <div id="programa">
      <span class="nombre">
        {{ $user->getPrograma()['primero'] }} <br>
        {{ $user->getPrograma()['ultimo'] }}
      </span>
    </div>
    <div id="imagen">
      @if(!empty($user->image->url))
        <img src="./{{ $user->image->url }}" alt="" width="80px">
      @else
        <img src="./images/default.gif" alt="" width="80px">
      @endif
    </div>
    <div id="codigo" style="color: green;">
      # {{ $user->card_code }}
    </div>
  </div>

</body>
</html>