
@include('admin.header')
@include('admin.sidebar')
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Commission</h4>

                  <a class="btn btn-primary mb-2" href="{{ url('admin/addpaymentmeth') }}">Add payment method</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Payment method</th>
                              <th>Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($paymentmethlist->count()>0)
                           @foreach($paymentmethlist as $item)
                           <tr>
                              <td>{{ ++$i }}</td>
                              <td>
                                {{ $item->payment_type ?? '' }}
                                 <p>{{ $item->bank_name ?? '' }}</p>
                                 <p> @if(!empty($item->bank_ifsc)) IFSC:{{ $item->bank_ifsc ?? '' }} @endif</p>
                              </td>
                              <td>{{ $item->name ?? $item->account_name   }}</td>
                              <td>
                             <a href="{{ url('admin/editpaymentmeth').'/'.$item->id ?? '' }}"  class="btn btn-info btn-cons">Edit</a>
                                 <a href="{{ url('admin/deletepaymentmeth').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>
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


