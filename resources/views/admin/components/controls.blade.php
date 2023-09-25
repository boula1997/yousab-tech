@if (isset($route))
<form action="{{ route('{{ $route }}.destroy', $page) }}" method="POST">
    <a href="{{ route('{{ $route }}.show', $page) }}" title="show">
        <i class="fas fa-eye text-secondary fa-lg"></i>
    </a>

    <a href="{{ route('{{ $route }}.edit', $page) }}" title="edit">
        <i class="fas fa-edit  text-secondary  fa-lg"></i>
    </a>

    @csrf
    @method('DELETE')

    <button type="submit" title="delete"
        style="border: none; background-color:transparent;">
        <i class="fas fa-trash fa-lg text-secondary"></i>
    </button>
</form>
@endif