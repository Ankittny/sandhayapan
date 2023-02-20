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
                            <h4 class="card-title">Prices</h4>
                  <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Add Adhar </button> -->
                  </div>

               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                           <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Heading</th>
                              <th>Type </th>
                              <th>Price</th>
                              <th>Validity</th>
                              <th>Services</th>
                              <th>Charge 1</th>
                              <th>Charge 1</th>
                              <th>Charge 1</th>
                              <th>Charge 1</th>
                              <th>Action</th>
                           </tr>
                        </thead>

                        <tbody>
                            @foreach($price as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->validity }}</td>
                                <td>{{ $item->service }}</td>
                                <td>{{ $item->charge1 }}</td>
                                <td>{{ $item->charge2 }}</td>
                                <td>{{ $item->charge3 }}</td>
                                <td>{{ $item->charge4 }}</td>
                                <td>
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
						</table>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						
						

@include('admin.footer')