@include('admin.header')
@include('admin.sidebar')

<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  @if(\Session::has('success'))
                  <div class="alert alert-info">
                     {!! \Session::get('success') !!} </ul>
                            </div>
                            @endif
                            <h4 class="card-title">Kyc Detail</h4>
                  <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Add Adhar </button> -->
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                           <tbody>
                              @foreach($kyc as $items)
                           <!-- <tr>   
                              <th>S.no</th>
                              <td>{{ ++$i }}</td>
                              </tr>
                           <tr> -->
                                 <th>Full Name</th>
                                 <td>{{$items->name}}</td>
                                 </tr>
                           <tr>  
                              <th>Email </th>
                              <td>{{$items->email}}</td>
                              </tr>
                           <tr>  
                              
                              <th>Phone No</th>
                              <td>{{$items->phoneNo }}</td>
                              </tr>
                           <tr>  

                              <th>Date Of Birth </th>
                              <td>{{$items->dob }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Aadhaar </th>
                              <td>{{$items->aadhaar }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Pan </th>
                              <td>{{$items->pan }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Country </th>
                              <td>{{$items->country }}</td>
                              </tr>
                           <tr>  
                              
                              <th>State </th>
                              <td>{{$items->state }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Town </th>
                              <td>{{$items->town }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Pin Code </th>
                              <td>{{$items->pin }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Country Code </th>
                              <td>{{$items->countryCode }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Flat/Room </th>
                              <td>{{$items->flat }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Name of Building </th>
                              <td>{{$items->building }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Road/Street</th>
                              <td>{{$items->street }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Area </th>
                              <td>{{$items->area }}</td>
                              </tr>
                           <tr>  
                              
                              <th>Aadhaar Front </th>
                              <td><img src="{{asset('public')}}/admin/images/{{$items->aadhaarFront }}" width="50px" height="50px" alt=""></td>
                              </tr>
                           <tr>  
                              
                              <th>Aadhaar Back </th>
                              <td><img src="{{asset('public')}}/admin/images/{{$items->aadhaarBack }}" width="50px" height="50px" alt=""></td>
                              </tr>
                           <tr>  
                              
                              <th>Pan Card Front </th>
                              <td><img src="{{asset('public')}}/admin/images/{{$items->panFront }}" width="50px" height="50px" alt=""></td>
                              </tr>
                           <tr>  
                              
                              <th>Shop Front</th>
                              <td><img src="{{asset('public')}}/admin/images/{{$items->shopFront }}" width="50px" height="50px" alt=""></td>
                              </tr>
                           <tr>  
                              
                              <th>Agent Live </th>
                              <td><img src="{{asset('public')}}/admin/images/{{$items->agentLive }}" width="50px" height="50px" alt=""></td>
                              </tr>
                           <tr>  

                           <tr>
                              <th>Status</th>
                              
                              <td>
                                        @if($items->status==1)
                                        <a href="{{ url('admin/change-status/'.$items->id) }}" onclick="return confirm('Are you sure to change status')" class="btn btn-sm btn-success">Active</a>
                                        @else
                                        <a href="{{ url('admin/change-status/'.$items->id) }}" onclick="return confirm('Are you sure to change status')" class="btn btn-sm btn-danger">InActive</a>
                                        @endif
                                    </td>
                              
                           </tr>
                              <tr>
                              <th>Action</th>
                              <td>
                             <!-- <button onclick="EditFunctio({{ $items->id ?? '' }})" class="btn btn-info btn-cons">Edit</button> -->
                                 <a href="{{ url('admin/deletekyc').'/'.$items->id ?? '' }}" class="btn btn-sm btn-danger btn-cons">Delete</a>
                              </td>
                              @endforeach
                           </tr>
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

