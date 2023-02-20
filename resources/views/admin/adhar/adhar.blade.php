@include('admin.header')
@include('admin.sidebar')
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Adhar Detail</h4>
                  <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Add Adhar </button>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Adhar No</th>
                              <th>Name </th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($adhar->count()>0)
                           @foreach($adhar as $item)
                           <tr>
                              <td>{{ ++$i }}</td>

                              <td>{{ $item->adharno ?? '' }}</td>
                              <td>{{$item->name ?? ''}}</td>

                              <td>
                             <button onclick="EditFunctio({{ $item->id ?? '' }})" class="btn btn-info btn-cons">Edit</button>
                                 <a href="{{ url('admin/deleteadhar').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>
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
            <h5 class="modal-title">Adhar Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
         </div>
         <div class="modal-body">
            <form method="Post" id="SaveBanner" enctype="multipart/form-data">
               <input type="hidden" id="id" name="id">
               <div class="mb-3">
                  <input type="text" class="form-control input-default " name="adharno" placeholder="adhar no " id="adharno">
                  <span style="color:red;" id="adharno"></span>
               </div>
               <div class="mb-3">
                  <input type="text" class="form-control input-default " name="name" placeholder="name " id="name">
                  <span style="color:red;" id="name"></span>
               </div>


               <div class="modal-footer">
                  <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script >
    var addadhar = "{{ url('admin/addadhar') }}";
    var Editadhar = "{{ url('admin/Editadhar') }}";

    $(function() {
        $('#SaveBanner').on('submit', function(e) {
            e.preventDefault();
            var token = $(this).data("token");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'Post',
                url: addadhar,
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == 201) {
                        $('#adharno').html(data.error.adharno);
                        $('#name').html(data.error.name);

                    } else {
                        $('#exampleModalCenter').modal('hide');
                        setTimeout(function() {
                            window.location.reload(1);
                        }, 500);
                    }
                }
            });
        });
    });

    function EditFunctio(id) {
        $.ajax({
            type: 'get',
            url: Editadhar + '/' + id,
            success: function(data) {
                console.log(data);
                if (data.status == 200) {
                    $('#id').val(data.data['id']);
                    $('#adharno').val(data.data['adharno']);
                    $('#name').val(data.data['name']);

                    $('#exampleModalCenter').modal('show');
                } else {
                    alert('data not Found!');
                }
            }
        });
    }
 </script>
