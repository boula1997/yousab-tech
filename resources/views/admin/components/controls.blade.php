@if (isset($route, $role, $module))
    <form action="{{ route($route . '.destroy', $module) }}" method="POST">
        @can($role . '-list')
            <a href="{{ route($route . '.show', $module) }}" title="show">
                <i class="fas fa-eye text-secondary fa-lg"></i>
            </a>
        @endcan

        @can($role . '-edit')
            <a href="{{ route($route . '.edit', $module) }}" title="edit">
                <i class="fas fa-edit  text-secondary  fa-lg"></i>
            </a>
        @endcan

        @csrf
        @method('DELETE')

        @can($role . '-delete')
            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-secondary"></i>
            </button>
        @endcan

        @can($role . '-reply')
            <a href="{{ route($route . '.reply', $module->id) }}" title="reply">
                <i class="fas fa-reply text-secondary  fa-lg"></i>
            </a>
        @endcan
    </form>
@endif
