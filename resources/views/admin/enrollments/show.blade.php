@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.enrollment.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $enrollment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            User
                        </th>
                        <td>
                            {{ $enrollment->user->learners->first_name ?? '' }} {{ $enrollment->user->learners->last_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Course
                        </th>
                        <td>
                            {{ $enrollment->course ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Progress
                        </th>
                        <td>
                            {{ $enrollment->progress ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Marks
                        </th>
                        <td>
                           @if (isset($enrollment->marks))
                                {{ $enrollment->marks ?? '' }}
                                @else
                                -----
                           @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            {{ App\Enrollment::STATUS_RADIO[$enrollment->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection