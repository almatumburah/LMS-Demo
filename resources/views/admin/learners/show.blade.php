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
                            {{ $learner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $learner->first_name ?? '' }} {{ $learner->last_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Dob
                        </th>
                        <td>
                            {{ $learner->dob ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $learner->gender ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Contact
                        </th>
                        <td>
                            {{ $learner->contact ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $learner->user->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Address
                        </th>
                        <td>
                            {{ $learner->address ?? '' }} {{ $learner->city ?? '' }} {{ $learner->province ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current School
                        </th>
                        <td>
                            {{ $learner->current_school ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Level
                        </th>
                        <td>
                            {{ $learner->level ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Center
                        </th>
                        <td>
                            {{ $learner->institution->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Next of kin
                        </th>
                        <td>
                            {{ $learner->next_of_kin ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Next of kin Address
                        </th>
                        <td>
                            {{ $learner->next_of_kin_address ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Parent / Guardian Document
                        </th>
                        <td>
                            {{ $learner->guardian_document ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Reason for Applying?
                        </th>
                        <td>
                            {{ $learner->eligible_based_on ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Application Status
                        </th>
                        <td>
                            {{ $learner->status ?? '' }}
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