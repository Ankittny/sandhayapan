@include('admin.header')
@include('admin.sidebar')


<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Weclome Massage</h4>
                  {{--  <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add Weclome Massage</button>  --}}
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Text</th>

                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($data->count()>0)
                           @foreach($data as $item)
                            <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->msg ?? '' }}</td>
                                <td>
                                    <button  onclick="myEditFunction({{$item->id}})" class="btn btn-info btn-cons">Edit</button>
                                    {{--  <a onclick="return confirm('Are you sure you want to delete this item')" href="{{ url('admin/deletebanner').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>  --}}
                                </td>
                            </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.footer')


<div class="modal fade" id="exampleModalCenter">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Weclome Massage</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
         </div>
         <div class="modal-body">
            <form method="Post" id="SaveTEXT" enctype="multipart/form-data">
               <input type="hidden" id="ids" name="id">
               <div class="mb-3">
                <input type="text" name="msg" class="form-control" id="msg">
                  <span style="color:red;" id="info"></span>
               </div>
                <div class="modal-footer">
                    <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
    $(function() {
        $('#SaveTEXT').on('submit', function(e) {
            e.preventDefault();
            var token = $(this).data("token");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'Post',
                url: "{{ url('admin/notification') }}",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    //alert("this this");
                    location.reload();
                }
            });
        });
    });

    function myEditFunction(id){
        $.ajax({
            type:"get",
            url:"{{url('admin/editnotification')}}/"+id,
            success:function(data){
                $("#ids").val(data.data.id);
                $("#msg").val(data.data.msg);
                $('#exampleModalCenter').modal('show');
            }
         });
    }
</script>
