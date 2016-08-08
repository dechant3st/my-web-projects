<br/>
<br/>
{!! HTML::style('asset/css/bootstrap.min.css') !!}

<center>
    <style>
        #link-sort {
            color: black;
            text-decoration: none;
        }
    </style>
    <table class="table table-bordered table-striped" data-sort="table" style="width: 98%;">
        <thead>
            <tr>
                <th width="50px"><a id="link-sort">No</a></th>
                <th>
                    <a id="link-sort" href="javascript:DeleteRec('posting/list?field=title&sort={{Session::get("sort")=="asc"?"desc":"asc"}}')">
                        Title
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('p_field')=='title'?(Session::get('sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                        </i>
                    </a>
                </th>
                <th>
                    <a id="link-sort" href="javascript:DeleteRec('posting/list?field=description&sort={{Session::get("sort")=="asc"?"desc":"asc"}}')">
                        Description
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('p_field')=='description'?(Session::get('sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'glyphicon-sort-by-alphabet' }}">
                        </i>
                    </a>
                </th>
                <th id="link-sort">
                    <a id="link-sort">Attachment</a>
                </th>
                <th width="140px"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            @if($postings->total() === 0)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric" colspan="5">
                        <cente><h6>No record found!</h6></cente>
                    </td>
                </tr>
            @else
                @foreach($postings as $key=>$posting)
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric" align="center">{{$i++}}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{$posting->title}}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{$posting->description}}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{$posting->file_id}}</td>
                        <td class="mdl-data-table__cell--non-numeric" style="text-align: center">
                            <a class="btn btn-danger btn-xs" title="Delete"
                                   href="javascript:if(confirm('Are you sure want to delete?')) DeleteRec('posting/delete/{{$posting->id}}')">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    
    <div>
        {!! str_replace('/?','?',$postings->render()) !!}
    </div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$postings->total()}} records
        </i>
    </div>
</center>