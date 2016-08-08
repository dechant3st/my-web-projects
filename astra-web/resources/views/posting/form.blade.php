<div class="form-group">
    <label for="title">Job Title</label>
    <input type="text" class="form-control" name="title"/>
</div>
<div class="form-group">
    <label for="description">Job Description</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
</div>
<div class="form-group">
    <label for="file">Attachment</label>
    <select class="form-control" name="file">
        @foreach($files as $key=>$file)
            <option value="{{$file->id}}">{{$file->original_filename}}</option>
        @endforeach
    </select>
</div>

<div class="modal-footer">
    <input type="submit" class="btn btn-danger" value="Save"/>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>