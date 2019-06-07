<li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Mantenimiento tours</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li class="{{ Request::is('tipoAlojamientos*') ? 'active' : '' }}">
                    <a href="{!! route('tipoAlojamientos.index') !!}"><i class="fa fa-institution"></i><span>Tipo Alojamientos</span></a>
                </li>

                <li class="{{ Request::is('categoriaAlojamientos*') ? 'active' : '' }}">
                    <a href="{!! route('categoriaAlojamientos.index') !!}"><i class="fa fa-star"></i><span>Categoria Alojamientos</span></a>
                </li>

                <li class="{{ Request::is('tipoHabitacions*') ? 'active' : '' }}">
                    <a href="{!! route('tipoHabitacions.index') !!}"><i class="fa fa-circle-o"></i><span>Tipo Habitacions</span></a>
                </li>

                <li class="{{ Request::is('alojamientos*') ? 'active' : '' }}">
                    <a href="{!! route('alojamientos.index') !!}"><i class="fa fa-circle-o"></i><span>Alojamientos</span></a>



                <li class="{{ Request::is('testimonios*') ? 'active' : '' }}">
                    <a href="{!! route('testimonios.index') !!}"><i class="fa fa-circle-o"></i><span>Testimonios</span></a>
                </li>

                <li class="{{ Request::is('tipoCategoriaTours*') ? 'active' : '' }}">
                    <a href="{!! route('tipoCategoriaTours.index') !!}"><i class="fa fa-circle-o"></i><span>Tipo Categoria Tours</span></a>
                </li>
          </ul>
        </li>

 <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Mantenimiento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li class="{{ Request::is('languages*') ? 'active' : '' }}">
                    <a href="{!! route('languages.index') !!}"><i class="fa fa-circle-o"></i><span>Languages</span></a>
                </li>

                <li class="{{ Request::is('paises*') ? 'active' : '' }}">
                    <a href="{!! route('paises.index') !!}"><i class="fa fa-circle-o"></i><span>Paises</span></a>
                </li>
                <li class="{{ Request::is('ubigeos*') ? 'active' : '' }}">
                    <a href="{!! route('ubigeos.index') !!}"><i class="fa fa-circle-o"></i><span>Ubigeos</span></a>
                </li>

                <li class="{{ Request::is('multimedia*') ? 'active' : '' }}">
                    <a href="{!! route('multimedia.index') !!}"><i class="fa fa-circle-o"></i><span>Multimedia</span></a>
                </li>

          </ul>
</li><li class="{{ Request::is('tours*') ? 'active' : '' }}">
    <a href="{!! route('tours.index') !!}"><i class="fa fa-edit"></i><span>Tours</span></a>
</li>
<!-- 
<li class="{{ Request::is('itinerarios*') ? 'active' : '' }}">
    <a href="{!! route('itinerarios.index') !!}"><i class="fa fa-edit"></i><span>Itinerarios</span></a>
</li> -->

<li class="{{ Request::is('userControllers*') ? 'active' : '' }}">
    <a href="{!! route('userControllers.index') !!}"><i class="fa fa-edit"></i><span>User Controllers</span></a>
</li>

<li class="{{ Request::is('categoriaBlogs*') ? 'active' : '' }}">
    <a href="{!! route('categoriaBlogs.index') !!}"><i class="fa fa-edit"></i><span>Categoria Blogs</span></a>
</li>

<li class="{{ Request::is('blogs*') ? 'active' : '' }}">
    <a href="{!! route('blogs.index') !!}"><i class="fa fa-edit"></i><span>Blogs</span></a>
</li>

