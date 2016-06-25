@extends('admin.layouts.adminlayout')

@section('Content')
        <!-- BEGIN # BOOTSNIP INFO -->
    <div class="col-xs-12">
        <h1 class="text-center">Modal Login with jQuery Effects</h1>
        <p class="text-center">
            <a href="javascript:;" onclick="jQuery('#popupDlete').modal('show', {backdrop: 'fade'});" class="btn btn-primary btn-single btn-sm">Show Me</a>
        </p>
    </div>
<!-- END # BOOTSNIP INFO -->
@stop

    @section('Username')
    {{ $userD->name . " " .  $userD->family }}
    @stop

    @section('Email')
    {{ $userD->email }}
    @stop

    @section('EventNum')
            <!-- TODO: set Event Number -->
    5
    @stop

    @section('BottomScript')

            <!-- Modal 1 (Basic)-->
<div class="modal fade" id="popupDlete">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong class="text-danger">Are You Sure to Delete? </strong></h4>
            </div>

            <div class="modal-body">
                if Delete Driver, all detail has been delete, if want to Delete This Driver Click to
                <strong class="text-danger">Delete</strong>
                else Click <strong class="text-primary">Cancel</strong>
            </div>

            <div class="modal-footer">
                <form action="">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary col-xs-12" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-danger col-xs-12">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            <!-- Bottom Scripts -->
    <script src="{{ url('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets') }}/js/TweenMax.min.js"></script>
    <script src="{{ url('assets') }}/js/resizeable.js"></script>
    <script src="{{ url('assets') }}/js/joinable.js"></script>
    <script src="{{ url('assets') }}/js/xenon-api.js"></script>
    <script src="{{ url('assets') }}/js/xenon-toggles.js"></script>


    <!-- Imported scripts on this page -->
    <script src="{{ url('assets') }}/js/xenon-widgets.js"></script>
    <script src="{{ url('assets') }}/js/devexpress-web-14.1/js/globalize.min.js"></script>
    <script src="{{ url('assets') }}/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
    <script src="{{ url('assets') }}/js/toastr/toastr.min.js"></script>





    <!-- JavaScripts initializations and stuff -->
    <script src="{{ url('assets') }}/js/xenon-custom.js"></script>

@stop