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
                  <h4 class="card-title">Video</h4>

                  <a class="btn btn-primary mb-2" href="{{ url('admin/addvideo') }}">Add video</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Title</th>
                              <th>Thumbnail </th>
                              <th>Video </th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($videolist->count()>0)
                           @foreach($videolist as $item)
                           <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $item->title ?? '' }}</td>
                              <td><img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" style="width:100px"></td>
                              <td><iframe width="160" height="115" src="https://www.youtube.com/embed/Eypuw9PrclM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>

                              <td>
                             <a href="{{ url('admin/editvideo').'/'.$item->id ?? '' }}"  class="btn btn-info btn-cons">Edit</a>
                                 <a href="{{ url('admin/deletevideo').'/'.$item->id ?? '' }}" class="btn btn-danger btn-cons">Delete</a>
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


