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
                  <h4 class="card-title">Commission</h4>

                  <a class="btn btn-primary mb-2" href="{{ url('admin/addcommission') }}">Add Commission</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Profile</th>
                              <th>Vat No </th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($commissionlist->count()>0)
                           @foreach($commissionlist as $item)
                           <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $item->profile ?? '' }}</td>
                              <td>{{ $item->vat_no ?? ''  }}</td>
                              <td>
                             <a href="{{ url('admin/editcommission').'/'.$item->id ?? '' }}"  class="btn btn-info btn-cons">Edit</a>
                                 <a href="{{ url('admin/deletecommission').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>
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


