{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')
@section('content')
    <!--Basic User Details Starts-->
    {{-- <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title" id="horz-layout-colored-controls">User Profile</h4>
                    </div>
                    <div class="card-content">
                      <div class="px-3">
                        <form class="form form-horizontal">
                          <div class="form-body">
                            <h4 class="form-section"><i class="ft-info"></i> About User</h4>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput1">Name: </label>
                                  <div class="col-md-9">
                                    <input type="text" id="userinput1" class="form-control border-primary" name="firstname">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput2">E-mail: </label>
                                  <div class="col-md-9">
                                    <input type="text" id="userinput2" class="form-control border-primary" name="lastname">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput3">Password: </label>
                                  <div class="col-md-9">
                                    <input type="text" id="userinput3" class="form-control border-primary" name="username">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput4">Password Confirmation: </label>
                                  <div class="col-md-9">
                                    <input type="text" id="userinput4" class="form-control border-primary" name="nickname">
                                  </div>
                                </div>
                              </div>
                            </div>
            
                            <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput5">Email: </label>
                                  <div class="col-md-9">
                                    <input class="form-control border-primary" type="email" id="userinput5">
                                  </div>
                                </div>
            
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput6">Website: </label>
                                  <div class="col-md-9">
                                    <input class="form-control border-primary" type="url" id="userinput6">
                                  </div>
                                </div>
            
                                <div class="form-group row">
                                  <label class="col-md-3 label-control">Contact Number: </label>
                                  <div class="col-md-9">
                                    <input class="form-control border-primary" type="number" id="userinput7">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="userinput8">Bio: </label>
                                  <div class="col-md-9">
                                    <textarea id="userinput8" rows="6" class="form-control col-md-9 border-primary" name="bio"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
            
                          <div class="form-actions right">
                            <button type="button" class="btn btn-raised btn-warning mr-1">
                              <i class="ft-x"></i> Cancel
                            </button>
                            <button type="button" class="btn btn-raised btn-primary">
                              <i class="fa fa-check-square-o"></i> Save
                            </button>
                          </div>
                        </form>
            
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div> --}}
  <!--Basic User Details Ends-->

  <div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="horz-layout-colored-controls">User Profile</h4>
                        </div>
                        <div class="card-content">
                            <div class="px-3">
                                {{-- <form action="{{ route('update-profile') }}" method="POST" class="form form-horizontal"> --}}
                                <form class="form form-horizontal">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-info"></i> Change Passwor</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput1">Name:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="userinput1" class="form-control border-primary" name="name" value="{{ auth()->user()->name }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput2">E-mail:</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="userinput2" class="form-control border-primary" name="email" value="{{ auth()->user()->email }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput3">Password:</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="userinput3" class="form-control border-primary" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="userinput4">Password Confirmation:</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="userinput4" class="form-control border-primary" name="password_confirmation">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Edit Profile') }}</div>

              <div class="card-body">
                  @if (session('success'))
                      <div class="alert alert-success" role="alert">
                          {{ session('success') }}
                      </div>
                  @endif

                  <form method="POST" action="{{ route('users.update-profile') }}">
                  <form method="POST" >
                      @csrf
                      @method('PUT')

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Update Profile') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div> --}}




@endsection