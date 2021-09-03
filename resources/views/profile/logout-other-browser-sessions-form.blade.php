<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-outline card-orange">
                <div class="card-header">Browser Sessions</div>
                <div class="card-body">
                    <div>{{ __('Manage and log out your active sessions on other browsers and devices.') }}</div>
                    <div class="text-muted m-3">{{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}</div>

                    @if (count($this->sessions) > 0)
                        <div class="mt-3">
                            <!-- Other Browser Sessions -->
                            @foreach ($this->sessions as $session)
                                <div class="d-flex">
                                    <div>
                                        @if ($session->agent->isDesktop())
                                            <svg fill="none" width="32" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="text-muted">
                                                <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-muted">
                                                <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                            </svg>
                                        @endif
                                    </div>

                                    <div class="ml-2">
                                        <div>
                                            {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                                        </div>

                                        <div>
                                            <div class="small font-weight-lighter text-muted">
                                                {{ $session->ip_address }},

                                                @if ($session->is_current_device)
                                                    <span class="text-success font-weight-bold">{{ __('This device') }}</span>
                                                @else
                                                    {{ __('Last active') }} {{ $session->last_active }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    {{--                    <div class="d-flex mt-3">--}}
                    {{--                        <x-adminlte-button label="{{ __('Log Out Other Browser Sessions') }}" theme="outline-primary" icon="fas fa-lg fa-trash" wire:click="confirmLogout" />--}}
                    {{--                    </div>--}}

                    <x-adminlte-modal id="confirmingLogout" name="confirmingLogout" title="{{ __('Log Out Other Browser Sessions') }}" theme="outline-teal"
                                      icon="fas fa-bell" v-centered static-backdrop scrollable >
                        <div>{{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}
{{--                            <div x-data="{}" x-on:logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">--}}
                            <div x-data="{}" >
                            <x-adminlte-input name="password" type="password" placeholder="{{ __('Password') }}"
                                                  x-ref="password"
                                                  class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                  wire:model.defer="password"
                                                  wire:keydown.enter="logoutOtherBrowserSessions" />

                            </div>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="danger" label="{{ __('Cancel') }}" data-dismiss="modal"
                                               wire:click="$toggle('confirmingLogout')" />
                            <x-adminlte-button theme="success" label="{{ __('Log out Other Browser Sessions') }}"
                                               wire:click="logoutOtherBrowserSessions"/>
                        </x-slot>
                    </x-adminlte-modal>
                    {{-- Example button to open modal --}}
                    <x-adminlte-button label="{{ __('Log Out Other Browser Sessions') }}" theme="outline-primary" icon="fas fa-key"
                                       data-toggle="modal" data-target="#confirmingLogout"/>


                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    <script>
        $('#confirmingLogout').on('shown.bs.modal', function () {
            $('#password').focus();
        });
        window.livewire.on(('loggedOut'), function() {
            $('#confirmingLogout').modal('hide');
            Swal.fire(
                "Succes!",
                "Your have successfully logged out from other browsers.",
                "success"
            )
        });
        window.livewire.on(('loggedOutError'), function(e) {
            $('#confirmingLogout').modal('hide');
            Swal.fire(
                "Oopss?",
                "This password does not match our records.",
                "error",
            ).then(function(result) {
                if (result.value) {
                    $('#confirmingLogout').modal('show');
                }
            });
        });
    </script>
@stop
