<div class="col-xl-3 col-lg-12 ">
    <div class="row">

        <div class="col-xl-12 col-md-6 ">
            <p class="news-para">Latest News</p>

            <div id="carousel" class="carousel slide dash-slider" data-ride="carousel">
                <ol class="carousel-indicators indicotor">
                    @php $i=0; $j=0; @endphp
                    @if($banner->count() > 0)
                    @foreach($banner as $items)
                    <li data-target="#carousel" data-slide-to="{{$i}}" class="@if($i==0){{'active'}}@endif"></li>
                    @php $i++; @endphp
                    @endforeach
                    @endif
                </ol>
                <div class="carousel-inner inner" role="listbox">
                    @if($banner->count() > 0)
                    @foreach($banner as $itemss)
                    <div class="carousel-item @if($j==0){{"active"}}@endif" style="background-image: url('{{asset("public/admin/images").'/'.$itemss->image ?? '' }}'); background-size: cover;">
                    </div>
                    @php $j++; @endphp
                    @endforeach
                    @endif
                </div>
                <!--<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">-->
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">-->
                <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Next</span>-->
                <!--</a>-->
            </div>
            <!--<div class="card bg-warning">-->


            <!--</div>-->
        </div>



    </div>
</div>
