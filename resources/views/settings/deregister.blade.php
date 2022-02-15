@extends('layouts.admin')
@section('content')
@can('enrollment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.enrollments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.enrollment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.enrollment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Enrollment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.enrollment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrollment.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrollment.fields.course') }}
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deregisters as $key => $deregister)
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{ $deregister->id ?? '' }}
                            </td>
                            <td>
                                {{ $deregister->user->learners->first_name ?? '' }} {{ $deregister->user->learners->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $deregister->course ?? '' }}
                            </td>
                            <td>
                                {{ $deregister->created_at ?? '' }}
                            </td>
                            <td>
                                @can('enrollment_show')
                                    <a class="btn btn-xs btn-primary" href="#">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('enrollment_edit')
                                    <a class="btn btn-xs btn-info" href="#">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

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