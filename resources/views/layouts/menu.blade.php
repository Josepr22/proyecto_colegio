<a class="nav-link" href="/home">
    <i class="bi bi-building-dash"></i></i><span>Dashboard</span>
</a>
@can('ver-usuario')
<a class="nav-link" href="/usuarios">
    <i class="bi bi-people-fill"></i><span>Usuarios</span>
</a>
@endcan
@can('ver-rol')
<a class="nav-link" href="/roles">
    <i class="bi bi-person-fill-lock"></i><span>Roles</span>
</a>
@endcan
<a class="nav-link" href="/materiales">
    <i class="bi bi-file-earmark-richtext"></i><span>Materiales</span>
</a>
@can('ver-tipos')
<a class="nav-link" href="/tipos">
    <i class="bi bi-file-code"></i><span>Tipos</span>
</a>´
@endcan
@can('ver-categoria')
<a class="nav-link" href="/categorias">
    <i class="bi bi-bookmarks"></i><span>Categorias</span>
</a>
@endcan
