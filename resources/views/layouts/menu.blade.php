<li class="{{ Request::is('tipoAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('tipoAlojamientos.index') !!}"><i class="fa fa-institution"></i><span>Tipo Alojamientos</span></a>
</li>

<li class="{{ Request::is('categoriaAlojamientos*') ? 'active' : '' }}">
    <a href="{!! route('categoriaAlojamientos.index') !!}"><i class="fa fa-star"></i><span>Categoria Alojamientos</span></a>
</li>

<li class="{{ Request::is('tipoHabitacions*') ? 'active' : '' }}">
    <a href="{!! route('tipoHabitacions.index') !!}"><i class="fa fa-edit"></i><span>Tipo Habitacions</span></a>
</li>

<li class="{{ Request::is('alojamientos*') ? 'active' : '' }}">
    <a href="{!! route('alojamientos.index') !!}"><i class="fa fa-edit"></i><span>Alojamientos</span></a>
<li class="{{ Request::is('ubigeos*') ? 'active' : '' }}">
    <a href="{!! route('ubigeos.index') !!}"><i class="fa fa-edit"></i><span>Ubigeos</span></a>
</li>

<li class="{{ Request::is('multimedia*') ? 'active' : '' }}">
    <a href="{!! route('multimedia.index') !!}"><i class="fa fa-edit"></i><span>Multimedia</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{!! route('languages.index') !!}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

<li class="{{ Request::is('paises*') ? 'active' : '' }}">
    <a href="{!! route('paises.index') !!}"><i class="fa fa-edit"></i><span>Paises</span></a>
</li>

<li class="{{ Request::is('testimonios*') ? 'active' : '' }}">
    <a href="{!! route('testimonios.index') !!}"><i class="fa fa-edit"></i><span>Testimonios</span></a>
</li>

