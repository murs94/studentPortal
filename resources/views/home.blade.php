@extends('adminlte::page')

@section('title', 'TCMS 2.0')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('plugins.Sweetalert2', true)
@section('plugins.BsStepper', true)

@section('content_nav_right')
<x-main-menu></x-main-menu>
@stop

@section('content')
<section class="content">
    <div class="error-page">
        <h2 class="headline text-warning"> <i class="fas fa-exclamation-triangle text-warning"></i></h2>

        <div class="error-content">
            <h3> Harap Maaf. Halaman ini masih dalam pembangunan.</h3>

            <p>
                Kami amat kesali terhadap ketidaksempurna pada halaman ini. <br>
                Sementara itu, anda boleh hubungi pihak kami untuk pertanyaan yang lebih lanjut.
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>
@stop


@push('js')
    <script>
        $(document).ready(function() {
            $('#btnOpenSaltB').click(function() {
                Swal.fire(
                    {
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        reverseButtons: true
                    }).then(function(isConfirmed) {
                    if (isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                    }
                );
            });

            // var Toast = Swal.mixin({
            //     toast: true,
            //     position: 'top-end',
            //     showConfirmButton: false,
            //     timer: 3000
            // });

            $('#btnOpenSaltC').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                });
            });
        })
    </script>
    <script>
        var stepper1
        var stepper2
        var stepper3
        var stepper4
        var stepperForm

        document.addEventListener('DOMContentLoaded', function () {
            // stepper1 = new Stepper(document.querySelector('#stepper1'))
            // stepper2 = new Stepper(document.querySelector('#stepper2'), {
            //     linear: false
            // })
            // stepper3 = new Stepper(document.querySelector('#stepper3'), {
            //     linear: false,
            //     animation: true
            // })
            // stepper4 = new Stepper(document.querySelector('#stepper4'))
            //
            // var stepperFormEl = document.querySelector('#stepperForm')
            // stepperForm = new Stepper(stepperFormEl, {
            //     animation: true
            // })

            var stepperFormEl = document.querySelector('.bs-stepper')
                stepperForm = new Stepper(stepperFormEl, {
                animation: true
            })
            // BS-Stepper Init
            // document.addEventListener('DOMContentLoaded', function () {
            //     window.stepper = new Stepper(document.querySelector('.bs-stepper'))
            // });

            var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
            var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
            var inputMailForm = document.getElementById('inputMailForm')
            var inputPasswordForm = document.getElementById('inputPasswordForm')
            var form = stepperFormEl.querySelector('.bs-stepper-content form')

            btnNextList.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    stepperForm.next()
                })
            })

            stepperFormEl.addEventListener('show.bs-stepper', function (event) {
                form.classList.remove('was-validated')
                var nextStep = event.detail.indexStep
                var currentStep = nextStep

                if (currentStep > 0) {
                    currentStep--
                }

                var stepperPan = stepperPanList[currentStep]

                if ((stepperPan.getAttribute('id') === 'test-form-1' && !inputMailForm.value.length)
                    || (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                }
            })
        })
    </script>
@endpush
