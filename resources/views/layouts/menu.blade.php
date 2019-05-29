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
</li>

