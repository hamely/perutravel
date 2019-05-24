<li class="{{ Request::is('tipoAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('tipoAlojamientos.index') !!}"><i class="fa fa-institution"></i><span>Tipo Alojamientos</span></a>
</li>

<li class="{{ Request::is('categoriaAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('categoriaAlojamientos.index') !!}"><i class="fa fa-star"></i><span>Categoria Alojamientos</span></a>
</li>

