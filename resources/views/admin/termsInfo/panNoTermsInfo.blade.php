@include('admin.header')
@include('admin.sidebar')

@include('admin.header')
@include('admin.sidebar')
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Terms and Info Detail</h4>
                  <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Add Terms & Info </button>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <!--<th>S.no</th>-->
                              <th>Page
                              </th>
                              <th>Terms & Conditions</th>
                              <th>Info </th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($termsInfo->count()>0)
                           @foreach($termsInfo as $item)
                           <tr>
                              <!--<td>{{ ++$i }}</td>-->
                              <td>{{ $item->for ?? '' }}</td>
                              <td>{{ $item->terms ?? '' }}</td>
                              <td>{{$item->info ?? ''}}</td>

                              <td>
                             <!-- <button onclick="EditFunctio({{ $item->id ?? '' }})" class="btn btn-info btn-cons">Edit</button> -->
                                 <a href="{{ url('admin/deleteTermsInfo').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>
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
            <h5 class="modal-title">Add Terms and Info Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
         </div>
         <div class="modal-body">
            <form method="Post" id="SaveBanner" enctype="multipart/form-data">
               <input type="hidden" id="id" name="id">
               <div class="mb-3">
                  <select name="for" id="for" class="form-control input-default " required>
                     <option value="">Select your page for</option>
                     <option value="panNo-addhar">Pan-No By Aadhaar</option>
                     <option value="panNo-detail">Pan-No By Details</option>
                     <option value="kyc">Kyc</option>
                     <option value="discrepency">Discrepency</option>
                  </select>
                  <span style="color:red;" id="for"></span>
               </div>
               <div class="mb-3">
                  <!-- <input type="text" class="form-control input-default " name="terms" placeholder="Terms & Conditions" id="terms"> -->
                  <textarea name="terms" id="terms" cols="30" rows="5" class="form-control input-default " required placeholder="Terms & Conditions"></textarea>
                  <span style="color:red;" id="terms"></span>
               </div>
               <div class="mb-3">
                  <!-- <input type="text" class="form-control input-default " name="info" placeholder="Info " id="info"> -->
                  <textarea name="info" id="info" cols="30" rows="5" class="form-control input-default " required placeholder="Info"></textarea>
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
<script >
    var addadhar = "{{ url('admin/addPanNoTermsInfo') }}";
    var Editadhar = "{{ url('admin/EditPanNoTermsInfo') }}";

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
                       $('#for').html(data.error.for);
                        $('#terms').html(data.error.terms);
                        $('#info').html(data.error.info);

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
            url: editPanNoTermsInfo + '/' + id,
            success: function(data) {
                console.log(data);
                if (data.status == 200) {
                    $('#id').val(data.data['id']);
                    $('#for').val(data.data['for']);
                    $('#terms').val(data.data['terms']);
                    $('#info').val(data.data['info']);

                    $('#exampleModalCenter').modal('show');
                } else {
                    alert('data not Found!');
                }
            }
        });
    }
 </script>

