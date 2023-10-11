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

{{-- toodle delete --}}
{{-- @if(auth('admin')->user()->hasPermission('delete-' . $role) || auth('admin')->user()->hasPermission('delete_subscribed_users-' . $role))
<form id="delete-form-{{ $value->id }}" style="display: inline-table;"
      action="{{ route($name . '.destroy', $value->id) }}" method="post">
    @csrf
    @method('delete')

    <button type="button" class="btn btn-sm btn-clean btn-icon m-1" title="{{__('words.delete')}}"
            data-toggle="modal" data-target="#deleteModalSizeSm-{{ $value->id }}">
    <span class="svg-icon svg-icon-md svg-icon-primary">
        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
        <i class="fa fa-trash"></i>
    </span>
    </button>
    <div class="modal fade" id="deleteModalSizeSm-{{$value->id}}" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('words.delete_confirm')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> {{ __('message.delete_message') }} <b
                        class="">
                        @if($value->name)
                            {{$value->name}}
                        @elseif($value->title)
                            {!! $value->title !!}
                        @else
                            {{$value->email}}
                        @endif
                    </b></div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary"
                            data-dismiss="modal">{{__('words.cancel')}}</button>
                    <button type="submit" class="btn gray btn-outline-danger">{{__('words.delete')}}</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endif
@endif --}}
