@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.enrollment.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("registrants.update", [$learner->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col">
                    <label for="first_name">{{ __('First Name') }}</label>
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $learner->first_name }}" required autocomplete="first_name">

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="last_name">{{ __('Surname') }}</label>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $learner->last_name }}" required autocomplete="last_name">

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="gender">{{ __('Gender') }}</label>
                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $learner->gender }}" required autocomplete="gender">

                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="dob">{{ __('Date of Birth') }}</label>
                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $learner->dob }}" required autocomplete="dob">

                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="current_school">{{ __('Current School') }}</label>
                    <input id="current_school" type="text" class="form-control @error('current_school') is-invalid @enderror" name="current_school" value="{{ $learner->current_school }}" required autocomplete="current_school">

                    @error('current_school')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="level">{{ __('Level / Grade') }}</label>
                    <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ $learner->level }}" required autocomplete="level">

                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="contact">{{ __('Primary Contact') }}</label>
                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $learner->contact }}" required autocomplete="contact">

                    @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="address">{{ __('Primary Address') }}</label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $learner->address }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="city">{{ __('City') }}</label>
                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $learner->city }}" required autocomplete="city">

                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="province">{{ __('Province') }}</label>
                    <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ $learner->province }}" required autocomplete="province">

                    @error('province')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="next_of_kin">{{ __('Next of Kin') }}</label>
                    <input id="next_of_kin" type="text" class="form-control @error('next_of_kin') is-invalid @enderror" name="next_of_kin" value="{{ $learner->next_of_kin }}" required autocomplete="next_of_kin">

                    @error('next_of_kin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <label for="next_of_kin_address">{{ __('Next of Kin Address') }}</label>
                    <input id="next_of_kin_address" type="text" class="form-control @error('next_of_kin_address') is-invalid @enderror" name="next_of_kin_address" value="{{ $learner->next_of_kin_address }}" required autocomplete="next_of_kin_address">

                    @error('next_of_kin_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <label for="eligible_based_on">{{ __('Reason for Registration') }}</label>
                    <input id="eligible_based_on" type="text" class="form-control @error('eligible_based_on') is-invalid @enderror" name="eligible_based_on" value="{{ $learner->eligible_based_on }}" required autocomplete="eligible_based_on">

                    @error('eligible_based_on')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                   
                </div>
            </div>

            <br>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label>{{ trans('cruds.enrollment.fields.status') }}*</label>
                @foreach(App\Learner::STATUS_RADIO as $key => $label)
                    <div>
                        <input id="status_{{ $key }}" name="status" type="radio" value="{{ $key }}" {{ old('status', $learner->status) === (string)$key ? 'checked' : '' }} required>
                        <label for="status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
            </div>
            <br>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection