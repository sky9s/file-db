<h3>파일</h3>
<form action="/upload-files" method="post" enctype="multipart/form-data">
    <input type="text" name="currentUrl" value="{{\Illuminate\Support\Facades\URL::current()}}">
    <div class="form-group">
        <div class="form-control-file">
            <input type="file" name="files[]" class="multi" maxlength="10" accept="txt|hwp|ppt|pptx|xls|xlsx|zip|alz|doc|docx|gif|jpg|png" multiple />
        </div>
        <div>
            <input type="submit" value="전송" />
        </div>
    </div>
</form>

<h3>이미지</h3>
<form action="/upload-files" method="post" enctype="multipart/form-data">
    <input type="text" name="currentUrl" value="{{\Illuminate\Support\Facades\URL::current()}}">
    <div class="form-group">
        <div class="form-control-file">
            <input type="file" name="files[]" class="multi with-preview" maxlength="10" accept="gif|jpg|png" multiple />
        </div>
        <div>
            <input type="submit" value="전송" />
        </div>
    </div>
</form>


{{--http://lampspw.wallonie.be/dgo4/tinymvc/myfiles/plugins/multifile-2.2.1/docs.html--}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="{{asset('vendor/filedb/js/multifile-master/jquery.MultiFile.min.js')}}" type="text/javascript" language="javascript"></script>