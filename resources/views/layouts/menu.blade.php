<li class="{{ Request::is('tipoAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('tipoAlojamientos.index') !!}"><i class="fa fa-institution"></i><span>Tipo Alojamientos</span></a>
</li>

<li class="{{ Request::is('categoriaAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('categoriaAlojamientos.index') !!}"><i class="fa fa-star"></i><span>Categoria Alojamientos</span></a>
</li>

<li class="{{ Request::is('ubigeos*') ? 'active' : '' }}">
    <a href="{!! route('ubigeos.index') !!}"><i class="fa fa-edit"></i><span>Ubigeos</span></a>
</li>

<li class="{{ Request::is('multimedia*') ? 'active' : '' }}">
    <a href="{!! route('multimedia.index') !!}"><i class="fa fa-edit"></i><span>Multimedia</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{!! route('languages.index') !!}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

