  @extends('layouts.master')

  <div id="app">
      <section class="section">
          <div class="container mt-5">
              <div class="row">
                  <div
                      class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                      <div class="login-brand">
                          <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                              class="shadow-light rounded-circle">
                      </div>

                      <div class="card card-primary">
                          <div class="card-header">
                              <h4>Registrasi</h4>
                          </div>
                          <div class="card-body">
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf

                                  <div class="form-group">
                                      <label for="username">{{ __('Username') }}</label>
                                      <input id="username" type="text"
                                          class="form-control @error('name') is-invalid @enderror" name="username"
                                          value="{{ old('username') }}" required autocomplete="username" autofocus>

                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                      <label for="email">{{ __('E-Mail Address') }}</label>
                                      <input id="email" type="email"
                                          class="form-control @error('email') is-invalid @enderror" name="email"
                                          value="{{ old('email') }}" required autocomplete="email">

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                      <label for="password">{{ __('Password') }}</label>
                                      <input id="password" type="password"
                                          class="form-control @error('password') is-invalid @enderror" name="password"
                                          required autocomplete="new-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                      <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                      <input id="password-confirm" type="password" class="form-control"
                                          name="password_confirmation" required autocomplete="new-password">
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary w-100">
                                          {{ __('Register') }}
                                      </button>
                                  </div>

                                  <div class="mt-5 text-muted text-center">
                                    have an account? <a href="{{ route('login') }}">Sign In</a>
                                  </div>
                              </form>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>
  </div>
