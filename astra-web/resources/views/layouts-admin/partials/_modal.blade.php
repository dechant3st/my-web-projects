<div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-labelledby="ModalView">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalViewLabel">New message</h4>
            </div>
            {!! Form::open(['id'=>'frm']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body" id="ModalContent">
            </div>
            <div class="modal-footer" id="ModalFooter">
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>