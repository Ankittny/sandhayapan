
@include('admin.header')
@include('admin.sidebar')
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Offline Payment</h4>

                  {{--  <a class="btn btn-primary mb-2" href="{{ url('admin/addpaymentmeth') }}">Add payment method</a>  --}}
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>User Name</th>
                              <th>Amount</th>
                              <th>UTR No/ Bank Refrence</th>
                              <th>Date Time</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($data->count()>0)
                           @foreach($data as $item)
                           <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $item->user ?? '' }}</td>
                              <td>{{ $item->amount ?? '' }}</td>
                              <td>{{ $item->details ?? '' }}</td>
                              <td>{{ $item->datetime ?? '' }}</td>
                             @if($item->status=="0")
                              <td>
                                <select class="form-contorl" onchange="myFunction(this,{{$item->id.','.$item->agetid}})">
                                    <option value="0" <?php if($item->status == "0")echo 'selected'; ?>>Pending</option>
                                    <option value="1" <?php if($item->status == "1")echo 'selected'; ?>>Success</option>
                                    <option value="2" <?php if($item->status == "2")echo 'selected'; ?>>Failed</option>
                                    <option value="3" <?php if($item->status == "3")echo 'selected'; ?>>Refund</option>
                                </select>
                              </td>
                             @else
                             <td>
                                <select class="form-contorl" onchange="myFunction(this,{{$item->id.','.$item->agetid}})">
                                 <option value="0" <?php if($item->status == "0")echo 'selected'; ?>>Pending</option>
                                 <option value="1" <?php if($item->status == "1")echo 'selected'; ?>>Success</option>
                                 <option value="2" <?php if($item->status == "2")echo 'selected'; ?>>Failed</option>
                                 <option value="3" <?php if($item->status == "3")echo 'selected'; ?>>Refund</option>
                                </select>
                               </td>
                             @endif

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


<script>
   function myFunction(any,id,userid){
      alert(userid);
      var value = any.value;
      $.ajax({
        type: 'GET',
        url:"{{url("admin/changecreadit")}}"+'/'+value+'/'+id+'/'+userid,
        success:function(data){
            setTimeout(function(){
                alert(data.success);
                {{--  window.location.reload(1);  --}}
             }, 1000);
        }
    });
   }
</script>
