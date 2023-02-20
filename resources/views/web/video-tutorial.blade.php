@include('web.header')
<style>
   .card.mb-3.mb-sm-0.bg-rem {
   border-radius: 5px !important;
   border: 4px solid #c300d3 !important;
   border-right-color: #c901d0 !important;
   border-bottom-color: #7e01ff !important;
   }
   .card-body.py-3.px-4.card-servey {
   border-radius: 0px !important;
   }
   h1.title {
    font-size: 20px;
}
</style>
<section class="search-boxss">
    <div class="row">
         <div class="col-lg-6">
                     <h1>Video Tutorial</h1>
                  </div>
        <div class="col-lg-6">
    <div class="search-box">
  <input class="search-input" type="text" placeholder="Search something..">
  <button class="search-btn"><i class="fa fa-search"></i></button>
</div>
</div>
</div>
</section>

    
<!--</section>-->
<section class="services card-services">
   <div class="row">
      <div class="col-xl-12 stretch-card grid-margin">
         <div class="card border-remove">
             
            <div class="card-body">
               <div class="row">
                 
               </div>
               <div class="row">

                @php
                    $video = DB::table('video')->get();
                @endphp

                  @foreach ($video as $item)
                  <div class="col-sm-6">
                    <div class="card mb-3 mb-sm-0 bg-rem">
                       <div class="card-body py-3 px-4 card-servey ">


                           <iframe width="160" height="215" src="https://www.youtube.com/embed/{{ $item->link ?? '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           <h1 class="title">{{ $item->title ?? ''  }}</h1>
                       </div>
                    </div>
                 </div>
                  @endforeach

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('web.footer')

