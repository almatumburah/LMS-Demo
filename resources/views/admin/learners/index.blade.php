@extends('layouts.admin')
@section('content')
@can('enrollment_create')
    
@endcan
<div class="card">
    <div class="card-header">
        Registrants List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Enrollment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Registrant
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Level
                        </th>
                        <th>
                            Center
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($learners as $key => $learner)
                        <tr data-entry-id="{{ $learner->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $learner->id ?? '' }}
                            </td>
                            <td>
                                {{ $learner->first_name ?? '' }}  {{ $learner->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $learner->address ?? '' }} {{ $learner->city ?? '' }} {{ $learner->province ?? '' }}
                            </td>
                            <td>
                                {{ $learner->level ?? '' }}
                            </td>
                            <td>
                                {{ $learner->institution->name ?? '' }}
                            </td>
                            <td>
                                {{ $learner->status ?? '' }}
                            </td>
                            <td>
                                <a href="/registrants/{{$learner->id}}" class="btn btn-xs btn-primary" style="margin:5px;">
                                    <i class="fas fa-folder"></i> View
                                </a>
                                <a href="/registrants/{{$learner->id}}/edit" class="btn btn-xs btn-info" style="margin:5px;">
                                    <i class="fas fa-folder"></i> Edit
                                </a>
                                <form action="/registrants/{{$learner->id}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('enrollment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.enrollments.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Enrollment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection