@extends('adminlte::page2')

@section('title', 'Personal info / Maklumat Peribadi')

@section('content_header')
    <h1 class="m-0 text-dark"></h1>
@stop

@section('plugins.Sweetalert2', true)
@section('plugins.BsStepper', true)

@section('content_nav_right')
    <x-smp.main-menu></x-smp.main-menu>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-orange" style="margin: 120px 120px">
                    <div class="card-body">
                        <table style="width:100%;border:0;padding:0">
                            <tr>
                                <td>
                                    <div align="center">
                                        <a href="http://unisel.edu.my">
                                            <img src="{{asset('img/logo unisel terbaru.png')}}" width="205" height="75">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="center">
                                        <h5 class="text-bold">BORANG PERMOHONAN BARU <br/><em>NEW APPLICATION FORM</em></h5>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        <div class="card">
                            <div class="card card-orange card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs nav-fill" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-bold"
                                               id="custom-content-below-a-tab" data-toggle="tab"
                                               href="#a" role="tab">Maklumat Pelajar <br> <em>Personal Particulars</em></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               id="custom-content-below-b-tab" data-toggle="tab" href="#b"
                                               role="tab">Maklumat Akademik <br> <em>Academic Qualification</em></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               id="custom-content-below-c-tab" data-toggle="tab" href="#c"
                                               role="tab">Maklumat Program <br> <em>Programme Details</em></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               id="custom-content-below-c-tab" data-toggle="tab" href="#c"
                                               role="tab">Rumusan <br> <em>Preview</em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="custom-content-below-tabContent">
                                <!--Bahagian A Bermula-->
                                <div class="tab-pane fade show active" id="a" role="tabpanel"
                                     aria-labelledby="custom-content-below-a-tab">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-11">
                                                <h4>
                                                    Maklumat Pelajar / <em>Personal Particulars</em>
                                                </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <button class="btn btn-primary float-right next"
                                                        style=" background-color: #E83E8C; display: flex; justify-content: center; align-items: center;border-color: #E83E8C;"
                                                        type="button"><i
                                                        class="fas fa-chevron-circle-right"
                                                        style=' font-size:24px; color:white;'></i></button>
                                            </div>
                                        </div>
                                        <div class="card card-outline card-pink">
                                            <div class="card-header">
                                                Maklumat Geran
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Nama Geran<span
                                                            class="text-danger font-weight-bold">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" maxlength="100" class="form-control"
                                                               onkeyup="this.value = this.value.toUpperCase();"
                                                               name="grant_name" id="grant_name"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = 'Masukkan Nama Geran'"
                                                               placeholder="Masukkan Nama Geran">
                                                        <span class="text-danger font-weight-bold error"><p
                                                                id="grant_name_error"></p></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Penaja Geran<span
                                                            class="text-danger font-weight-bold">*</span></label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control select2 select2-hidden-accessible"
                                                                id="funder_id"
                                                                name="funder_id" style="width: 100%;" data-select2-id="1"
                                                                aria-invalid="true">
                                                            <option value="" selected disabled> - Pilih Penaja -</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Jenis Penaja</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="funder_type"
                                                               name="funder_type"
{{--                                                           value="{{Request::old('funder_type')}}" readonly>--}}
                                                               value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Jumlah Geran</label>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">RM</span>
                                                            </div>
                                                            <input type="text" name="total_grnt" id="total_grnt"
{{--                                                               value="{{Request::old('total')}}"--}}
                                                                   value=""
                                                                   onfocus="this.placeholder = ''"
                                                                   onblur="this.placeholder = 'EX: 556.00'"
                                                                   placeholder="EX: 556.00"
                                                                   class="form-control total" maxlength="14">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Penilaian</label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control select2 select2-hidden-accessible" id="type"
                                                                name="type" style="width: 100%;" data-select2-id="1"
                                                                aria-invalid="true">
                                                            <option value="" selected disabled> - Pilih Jenis Penilaian -
                                                            </option>
{{--                                                        <option value="1" @if(Request::old('type') == '1') selected @endif >--}}
{{--                                                            Penilaian--}}
{{--                                                            Dalaman--}}
{{--                                                        </option>--}}
{{--                                                        <option value="0" @if(Request::old('type') == '0') selected @endif>--}}
{{--                                                            Tiada Penilaian--}}
{{--                                                            Dalaman--}}
{{--                                                        </option>--}}
                                                        </select>
                                                    </div>
                                                    <span class="text-danger font-weight-bold error"><p
                                                            id="restype_error"></p></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="b" role="tabpanel"
                                     aria-labelledby="custom-content-below-a=b-tab">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-11">
                                                <h4>
                                                    Maklumat Akademik / <em>Academic Qualification</em>
                                                </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <button class="btn btn-primary float-right next"
                                                        style=" background-color: #E83E8C; display: flex; justify-content: center; align-items: center;border-color: #E83E8C;"
                                                        type="button"><i
                                                        class="fas fa-chevron-circle-right"
                                                        style=' font-size:24px; color:white;'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="c" role="tabpanel"
                                     aria-labelledby="custom-content-below-c-tab">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-11">
                                                <h4>
                                                    Maklumat Program / <em>Programme Details</em>
                                                </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <button class="btn btn-primary float-right next"
                                                        style=" background-color: #E83E8C; display: flex; justify-content: center; align-items: center;border-color: #E83E8C;"
                                                        type="button"><i
                                                        class="fas fa-chevron-circle-right"
                                                        style=' font-size:24px; color:white;'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
