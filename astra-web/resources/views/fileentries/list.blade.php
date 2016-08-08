<br/>
<br/>
<center>
    <table class="table table-bordered table-striped" data-sort="table" style="width: 98%;">
        <thead>
            <tr>
                <th width="50px" style="text-align: center"><a id="link-sort">No</a></th>
                <th>
                    <a id="link-sort" href="javascript:DeleteRec('fileentry/list?field=original_filename&sort={{Session::get("sort")=="asc"?"desc":"asc"}}')">
                        File Name
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('field')=='original_filename'?(Session::get('sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                        </i>
                    </a>
                    
                </th>
                <th width="140px"></th>
            </tr>
        </thead>
        <style>
            #link-sort {
                color: black;
                text-decoration: none;
            }
        </style>
        <tbody>
            <?php $i = 1;?>
            @if($fileentries->total() === 0)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric" colspan="4">
                        <cente><h6>No record found!</h6></cente>
                    </td>
                </tr>
            @else
                @foreach($fileentries as $key=>$fileentry)
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric" align="center">{{$i++}}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{$fileentry->original_filename}}</td>
                        <td class="mdl-data-table__cell--non-numeric" style="text-align: center">
                            <a class="btn btn-danger btn-xs" title="Delete"
                                   href="javascript:if(confirm('Are you sure want to delete?')) DeleteRec('fileentry/delete/{{$fileentry->id}}')">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    
    <div>{!! str_replace('/?','?',$fileentries->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$fileentries->total()}} records
        </i>
    </div>
</center>