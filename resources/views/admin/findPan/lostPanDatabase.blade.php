@include('admin.header')
@include('admin.sidebar')
<style>
    button.btn.btn-primary.mb-2 {
    background: #0400ff;
    border-radius: 4px !important;
    }
    div#example_filter {
  margin-left: 100px !important;
    padding-left: 30px;
    position: relative;
    left: -113px;
    top: -5px;
}th.sorting {
    border-right: 1px solid #ddd;
}
.btn-btn {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none !important;
    border-radius: 6px;
    padding: 12px 30px !important;
}
table#example {
    border: 1px solid #ddd;
}
.table-responsive {

    overflow-x: inherit;
}
.card-header {
    border-bottom: 1px solid #ddd !important;
}
th.sorting_asc {
    border-right: 1px solid #ddd;
}
button.btn.btn-primary.mb-2 {
     position: absolute;
    right: 33px;
    top: 93px;
        z-index: 1;
}
table.dataTable thead .sorting_asc {

    background: 0 !important;
}
.card {
    border: 1px solid #ddd;
}
a.btn.btn-danger.btn-cons {
    background: #e74a3b !important;
    border-radius: 6px;
}
button.btn.btn-info.btn-cons {
    background: #0400ff !important;
    border-radius: 6px !important;
}
th {
    border-bottom: 2px solid #ddd !important;
}
.card-header {
    background: #f8f9fd;
}
table.dataTable thead .sorting {
    background-image: url(../images/sort_both.png);
    background: 0 !important;
}
[data-theme-version="dark"] .modal-content {
 
    background: white !important;
}
.poup-form label {
    margin-bottom: 8px !important;
    display: inline-block;
    color: #000;
}
input.btn.btn-primary {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none !important;
    border-radius: 6px;
    padding: 12px 30px !important;
}
.poup-form input {
    border-radius: 6px !important;
}.modal-body.padddd {
    padding: 1.875rem !important;
}
.btn-close {
  
    background: 0 !important;
}

.modal-body h1 {
    font-size: 17px;
    text-align: center;
}
.modal-body {
    padding: 0px !important;
}
.poup-form input {
    color: #000 !important;
}
.modal-header i {
    color: #c700d0;
    opacity: ine !important;
    font-size: 22px;
}
.poup-form {
    /* padding-right: 30px; */
    /* padding-left: 30px; */
    padding: 20px;
}
div#example_paginate {
    border: 1px solid #ddd;
    margin: 20px 0;
    padding: 0px;
        border-radius: 6px;
}
a.paginate_button {
    background: transparent !important;
}
div#example_filter input {
    background: 0 !important;
    border: 1px solid #ddd;
    height: 42px !important;
}
.dataTables_wrapper .dataTables_paginate span .paginate_button.current {
    color: #fff !important;
    background: #4e73de !important;
    border: 0 !important;
}
.dataTables_wrapper .dataTables_paginate span .paginate_button {
    border-radius: 0px !important;
    height: 40px;
    width: 40px;
    padding: 0;
    margin-left: 0 !important;
    line-height: 40px;
    text-align: center;
  
    background-color: 0;
    color: #363062 !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.previous, .dataTables_wrapper .dataTables_paginate .paginate_button.next {
    margin-left: 5px;
    font-size: 16px;
    border: 0 !important;
    height: 40px;
    width: auto;
    padding: 0 15px;
    border-radius: 2rem;
    line-height: 40px;
    display: inline-block;
    background-color: #ebe9f4;
    color: #363062 !important;
    margin-left: 0px !important;
    border-radius: 0px;
}
input[type="search"] {
    color: #000 !important;
}
div#example_info {
    margin: 20px 0;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
 
    border: none !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.previous, .dataTables_wrapper .dataTables_paginate .paginate_button.next {
 
    background: 0 !important;
}
button.btn.dropdown-toggle.btn-light {
    border-radius: 6px;
}
</style>
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Lost Pan Database</h4>
                  <div class="btn-a">
                  <button class="btn btn-primary mb-2"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"> Add Data </button>
                  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr class="border-sea">
                              <th>Pan No</th>
                              <th>Adhar No</th>
                              <th>Name </th>
                              <th style="       width: 172.75px; !important">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($adhar->count()>0)
                           @foreach($adhar as $item)
                           <tr>
                              <td>{{ $item->panno ?? '' }}</td>

                              <td>{{ $item->aadhaarNo ?? '' }}</td>
                              <td>{{$item->appName ?? ''}}</td>

                              <td>
                             <button onclick="EditFunctio({{ $item->id ?? '' }})" class="btn btn-info btn-cons">Update </button>
                                 <a href="{{ url('admin/deleteadhar').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons" data-bs-toggle="modal" data-bs-target="#exampleModal2">Delete</a>
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

<div class="modal fade" id="exampleModalCenter">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Update Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <form method="Post" id="SaveBannerss" enctype="multipart/form-data">
               <input type="hidden" id="id" name="id">
               <div class="row poup-form">
                   
          <div class="col-md-6">
               <div class="mb-3">
                   <label>Aadhar NUmber</label>
                  <input type="text" class="form-control input-default " name="adharno" id="adharno">
                  <span style="color:red;" id="adharno"></span>
               </div></div>  
               <div class="col-md-6">
               <div class="mb-3">
                      <label>Pan Number</label>
                  <input type="text" class="form-control input-default " name="name"  id="name">
                  <span style="color:red;" id="name"></span>
               </div></div>
                <div class="col-md-12">
               <div class="mb-3">
                      <label>Name</label>
                  <input type="text" class="form-control input-default " name="name"  id="name">
                  <span style="color:red;" id="name"></span>
               </div></div>
     </div>

               <div class="modal-footer">
                  <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-modal="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            
            <i class="fa fa-times" aria-hidden="true"></i>
            
        </button>
      </div>
      <div class="modal-body padddd">
 <h1> Are you sure Delete Account Permanently ?</h1>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-primary btn-btn">Okay</button>
        <button type="button" class="btn btn-secondary btn-btn" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter3">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{url('admin/addlostPanDatabase')}}" method="Post" enctype="multipart/form-data">
                @csrf
               <input type="hidden" id="id" name="id">
               <div class="row poup-form">
                   
          <div class="col-md-6">
               <div class="mb-3">
                   <label>Aadhar NUmber</label>
                  <input type="text" class="form-control input-default " name="aadhaarNo" id="aadhaarNo"  required>
                  <span style="color:red;" id="aadhaarNo"></span>
               </div></div>  
               <div class="col-md-6">
               <div class="mb-3">
                      <label>Pan Number</label>
                  <input type="text" class="form-control input-default " name="panno"  id="panno" required>
                  <span style="color:red;" id="name"></span>
               </div></div>
                <div class="col-md-12">
               <div class="mb-3">
                      <label>Name</label>
                  <input type="text" class="form-control input-default " name="appName"  id="appName" required>
                  <span style="color:red;" id="appName"></span>
               </div></div>
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
    var addlostPanDatabase = "{{ url('admin/addlostPanDatabase') }}";
    var Editadhar = "{{ url('admin/Editadhar') }}";

    $(function() {
        $('#SaveBannerss').on('submit', function(e) {
            e.preventDefault();
            var token = $(this).data("token");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'Post',
                url: addlostPanDatabase,
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == 201) {
                        $('#appName').html(data.error.appName);
                        $('#aadhaarNo').html(data.error.aadhaarNo);
                        $('#panno').html(data.error.panno);

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


@include('admin.footer')


