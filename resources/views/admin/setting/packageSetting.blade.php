@include('admin.header')
@include('admin.sidebar')
<style>
    i.mdi.mdi-chevron-down {
        position: absolute;
        right: 22px;
        top: 7px;
        z-index: -1;
        color: #6e6e6e !important;
    }

    .content-body .container {
        margin-top: 0px !important;
    }

    .center-btn {
        margin: 0 auto;
    }

    input.inputRemove {
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
        border: none !important;
        color: white;
        padding: 5px 25px;
        border-radius: 6px;
        margin: 0 auto;
    }

    a.btn.btn-block.btn-primary.btn-lg.font-weight-medium.auth-form-btn {
        padding: 6px !important;

        border-radius: 4px !important;
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
        border: none !important;
    }

    [data-theme-version="dark"] .form-control {

        color: #000 !important;
    }

    i.mdi {
        color: #d900c5 !important;
    }

    input.form-control {
        height: 3.1rem !important;
    }

    .card {
        background: 0 !important;
        transition: 0.3s;


    }

    .active {
        color: hotpink;
    }

    .card {
        border-radius: 5px !important;
    }

    label {
        color: #000;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 7px !important;
        display: inline-block;
    }

    span.input-group-text {
        border: 1px solid #ddd !important;
        padding: 6px;
    }

    ul.list-group.list-user.user-lists-2 li i {
        color: #3ea9f5;
    }

    span.input-group-text {
        height: 49px;
    }

    .basic-list-group.plan-sec3 button {
        /* color: #b76be6; */
        background: #b76be6;
    }

    .basic-list-group.plan-sec3 span {
        color: #b76be6;
    }

    .basic-list-group.plan-sec3 h1 {
        color: #b76be6 !important;
    }

    .card-title {
        margin-bottom: 15px !important;
    }

    h4.card-title {
        color: #000 !important;
        /* margin-bottom: 18px; */
        /* display: inline-block; */
    }

    .basic-form input {
        background: 0 !important;
        border: 1px solid #ddd !important;
        border-radius: 0px !IMPORTANT;
    }

    select.select.form-select.form-select-lg.mb-3 {
        background: 0 !important;
        border: 1px solid #ddd;
        border-radius: 0px !important;
        font-size: 14px;
        height: 2.5rem;
    }

    .card {
        border-radius: 0px !important;
    }

    .card {
        border: 1px solid #ddd;
    }

    [data-theme-version="dark"] .card-header {
        border-color: #2a2833;
        border-bottom: none !important;
    }

    h4.card-title.title-s {
        font-size: 22px;
        line-height: 42px;
    }

    [data-theme-version="dark"] {
        /* background: #05031A; */
        color: #828690;
        background: 0 !important;
    }

    .card-body {
        padding: 12px;
    }

    .user-border {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 4px !important;
    }

    h4.card-title.title-text.most-p {
        color: #fe714e !important;
        font-size: 16px;
        padding: 4px;
        margin: 0 auto;
        text-align: center;
        font-weight: normal;
        margin-bottom: 0px !important;
    }

    .card-header.padd-0 {
        padding: 0px !important;
        background: #f6f5f1;
        border-radius: 0px !important;
    }

    .user-border h1 {
        color: #000 !important;
        font-size: 20px;
        text-transform: capitalize;
        margin-bottom: 24px;
    }

    [data-theme-version="dark"] .list-group-item {
        /* border-color: #2a2833; */
        border: none !important;
    }

    .card {
        height: auto;
    }

    li.list-group-item {
        padding: 1px;
        text-align: center;
        margin-bottom: 12px;
        font-weight: 700;


        font-size: 15px;
    }

    .active {
        background-color: #87CEEB !important;
    }

    h4.card-title.title-text {
        text-align: left;
        font-weight: 700;
        font-size: 24px;
    }

    .card-body {
        padding: 7px;
    }

    .card.top-plan {
        position: relative;
        top: 230px;
    }

    button.btn-block {
        background: #3769cc;
        color: white;
        border: none;
        padding: 11px;
        border-radius: 40px;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .basic-list-group h1 {
        color: #3769cc !important;
        text-align: center;
        font-size: 22px;
        margin: 30px 0 30px;
    }

    ul.list-group.list-user li i {
        color: #3769cc;
        font-size: 12px;
        margin-right: 15px;
    }

    .card.ss {
        padding-bottom: 0px;
    }

    ul.list-group.list-user li {
        text-align: left;
        /*font-weight: 600;*/
    }

    span.rupe {
        font-size: 25px !important;
    }

    .basic-list-group {
        text-align: center;
    }

    .basic-list-group p {
        color: #000;
    }

    .basic-list-group.plan-sec span {

        color: #56be8e !important;
    }

    .basic-list-group.plan-sec h1 {
        color: #56be8e !important;
    }

    .basic-list-group.plan-sec button {
        background: #56be8e;
    }

    .basic-list-group span {
        color: #3769cc;
        font-size: 40px;
        text-align: center;
    }

    .card.card-1.card-border {
        border-top-right-radius: 7px !important;
        border-bottom-right-radius: 7px !important;
    }

    ul.list-group.list-user.user-lists li i {
        color: #56be8e;
    }

    .basic-list-group.list-group.plan-sec3 {
        border-top-right-radius: 7px !important;
    }

    .card-title {

        margin-bottom: 50px;
    }

    .basic-list-group.plan-sec2 h1 {
        color: #3ea9f5 !important;
    }

    .text-center.mt-4 {
        margin-bottom: 20px;
    }

    .basic-list-group.plan-sec2 span {
        color: #3ea9f5 !important;
    }

    .card-body {

        padding: 0px !important;
    }

    .card.top-plan .bottom {
        border-bottom: none;
    }

    .card-header {

        border-bottom: none !important;
    }

    .card.top-plan .card-header {
        background: 0 !important;
    }

    li.list-group-item {
        padding-left: 12px;
        padding-right: 12px;
        border: none;
    }

    ul.list-group {
        border-top: 1px solid #ddd;
        border-radius: 0px !important;
        padding: 10px 0;
    }

    .card-header.card-title {
        background: 0 !important;
    }

    .card-header.card-title {
        text-align: center;
        margin-bottom: 40px !important;
    }

    .card.top-plan {
        border-top-left-radius: 7px !important;
        border-bottom-left-radius: 7px !important;
    }

    h4.card-title.title-text.bottom {
        margin-bottom: 20px;
    }

    .card.top-plan {
        position: relative;
        top: 231px;
    }

    .text-center.mt-4 {
        padding-right: 12px;
        padding-left: 12px;
    }

    .card.active {
        background-color: red;

    }

    .basic-list-group.plan-sec2 button {

        background: #3ea9f5;
    }

    .list-group {
        border-top: 1px solid #ddd;
        border-radius: 0px;
    }

    .content-body {
        margin-left: 14.563rem !important;
    }

    i.mdi.mdi-account.account {
        color: white !important;
    }

    i.mdi.mdi-chevron-left {
        color: white !important;
    }

    .card.card-1 {
        margin-top: 28px;

        border-radius: 0px !important;

        border-top: none;
    }

    li.list-group-item input {
        font-size: 14px;
        border: 1px solid #ddd;
        max-width: 196px !important;
        padding: 6px;
        border-radius: 6px;
    }

    .deznav {
        width: 13.563rem !important;
    }

    /*.card:hover {*/
    /*    border: 2px solid #00438b;*/
    /*      border-radius: 7px !important;*/
    /*      transition: 0.3s;*/
    /*}*/
    .col-md-15.col-sm-3 {
        float: left;
        width: 20%;
        padding: 0px;
    }

    .row.flex-parss {
        /* display: inherit !important; */
        display: initial !important;
        width: 100%;
    }

    @media only screen and (max-width: 480px) {
        .col-md-15.col-sm-3 {
            width: 100%;
            float: inherit !important;
        }

        .card.top-plan {

            position: inherit !important;
            top: inherit !important;
        }

        h4.card-title.title-s {
            font-size: 17px;
            line-height: 33px;
        }

        .card {

            margin-bottom: 15px;
        }

    }

    /*.card-header {*/
    /*    padding-left: 0px !important;*/
    /*}*/
    .card-header.header-c input {
        max-width: 170px;
        margin: 0 auto;
        padding-left: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
    }

    ::placeholder {
        color: #000 !important;
        font-weight: 700;
    }

    .basic-list-group.list-group.plan-sec span input::placeholder {
        color: #56be8e !important;
    }

    .basic-list-group.list-group.plan-sec2 h1 input::placeholder {
        color: #3ea9f5 !important;
    }

    .basic-list-group.list-group.plan-sec3 span input::placeholder {
        color: #b76be6 !important;
    }

    .basic-list-group.list-group.plan-sec2 span input::placeholder {
        color: #3ea9f5 !important;
    }

    .basic-list-group.list-group.plan-sec3 h1 input::placeholder {
        color: #b76be6 !important;
    }

    input[type="text"] {
        font-size: 20px;
        color: #000;
        font-weight: 700;
    }

    .card-header.header-c {
        /* width: 149px !important; */
        /* margin: 0 auto; */
        justify-content: center;
    }

    .basic-list-group.list-group h1 input {
        max-width: 196px !important;
        margin: 0 auto;
        /*padding-left: 10px;*/
        border: 1px solid #ddd;
        border-radius: 6px;
        text-align: center;
    }

    .basic-list-group.list-group input::placeholder {
        /* color: red !important; */
        color: #3769cc !important;
    }

    .basic-list-group.list-group span input {
        max-width: 196px !important;
        margin: 0 auto;
        /* padding-left: 10px; */
        border: 1px solid #ddd;
        border-radius: 6px;
        text-align: center;
    }

    .basic-list-group.list-group p input {
        max-width: 196px !important;
        margin: 0 auto;
        /* padding-left: 10px; */
        border: 1px solid #ddd;
        border-radius: 6px;
        text-align: center;
        font-size: 16px;
        margin: 9px 0;
    }

    .basic-list-group.list-group p input::placeholder {
        color: #000 !important;
        font-weight: normal;
    }

    input.form-control.text-send.btn-senmd {
        border: 1px solid #ddd;
    }

    select#inlineFormCustomSelect {
        border: 1px solid #ddd !important;
        /* background: transparent; */
        background-color: transparent;
        height: 37px !important;
        border-top-left-radius: 6px !important;
        border-bottom-left-radius: 6px !important;
        color: #000;
        border-top-left-radius: 6px !important;
        border-bottom-left-radius: 6px !important;
        font-weight: 700;
        border-radius: 0px !important;
        border-right: transparent !important;
    }

    li.list-group-item {
        display: flex;
    }

    input.form-control.text-send.btn-senmd {
        border-radius: 0px !important;
        height: 35px !important;
        border-top-right-radius: 6px !important;
        border-bottom-right-radius: 6px !important;
    }

    .col-auto.my-1 {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    select#inlineFormCustomSelect {
        border: 1px solid #ddd !important;
        /* background: transparent; */
        background-color: transparent;
        border-top-left-radius: 6px !important;
        border-bottom-left-radius: 6px !important;
        height: 35px !important;
        border-right: transparent !important;
        color: #000;
        font-weight: 700;
    }

    .basic-list-group.list-group.plan-sec h1 input::placeholder {
        color: #56be8e !important;
    }

    .input-group.mb-3.input-warning-o.input-fielddd input::placeholder {
        color: #000 !important;
    }

    li.list-group-item.bootom-spacing {
        margin-bottom: -4px !important;
    }

    li.list-group-item.btn-services button {
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
        border: none !important;
        color: white;
        padding: 5px 25px;
        border-radius: 6px;
        margin: 0 auto;
    }

</style>
<div class="content-body" style="min-height: 788px;">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <div class="card-header card-title">
                    <h4 class="card-title title-s ">Package Setting
                    </h4>
                </div>
            </div>

            <div class="row flex-parss">


                <div class="col-md-15 col-sm-3">

                    <div class="card top-plan">
                        <div class="card-header header-c">
                            <input type="text" placeholder="Our Services" readonly>
                        </div>
                        <div class="card-body">
                            <div class="basic-list-group">
                                <ul class="list-group">
                                    @if($ourservices->count()>0)
                                        @foreach($ourservices as $items)
                                            <li class="list-group-item">
                                                <input type="text" placeholder=" Find PAN to Aadhaar No" value="{{ $items->name ?? '' }}" onkeyup="MyPlaneOverService(event,<?=$items->id?>)">
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @if($package->count()>0)
                  @foreach($package as $item)
                    @if($i==0)
                        <div class="col-md-15 col-sm-3">
                            <div class="card ss">
                                    <div class="card-header padd-0">
                                        <h4 class="card-title title-text most-p">
                                            MOST POPULAR!</h4>
                                    </div>
                                <div class="card-body">
                                    <div class="basic-list-group list-group">
                                        <h1>
                                            <input type="text" placeholder="  Free Retailer" value="{{ $item->name ?? '' }}" style="color:{{ $item->textcolor ?? '' }}" onkeyup="MyPlaneName(event,<?=$item->id?>)">
                                        </h1>
                                        <span class="rupe">
                                            <input type="text" placeholder="  ₹0" value="₹{{ $item->price ?? '' }}" style="color: {{ $item->textcolor ?? '' }}" onkeyup="MyPlanePrice(event,<?=$item->id?>)">
                                        </span>
                                        <p>
                                            <input type="text" placeholder="Lifetime Validity" value="{{ $item->validity ?? '' }}" style="color:{{ $item->textcolor ?? '' }}" onkeyup="MyPlaneValidity(event,<?=$item->id?>)">
                                        </p>
                                        <div class="text-center mt-4">
                                            <button type="submit" class=" btn-block" style="background:{{ $item->textcolor ?? '' }}">Buy now</button>
                                        </div>
                                        <ul class="list-group list-user">

                                        @php
                                            $attributes = DB::table('attributes')->where('packageid',$item->id)->get();
                                        @endphp

                                    @if($attributes->count()> 0)
                                       @foreach($attributes as $items1)
                                        @php $j = 1; @endphp

                                        <li class="list-group-item bootom-spacing">
                                            <div class="col-auto my-1">
                                                <select class="form-select me-sm-2 wide" aria-label="example" id="inlineFormCustomSelect" onchange="myFunction(event,{{$items1->id}},{{"'myvalue$items1->id'"}})">
                                                    <option value="charges" <?php if($items1->charge=="charges") echo 'selected="selected"'; ?>>Charges</option>
                                                    <option value="commission" <?php if($items1->charge=="commission") echo 'selected="selected"'; ?>>commission</option>

                                                </select>
                                            </div>

                                            <div class="input-group mb-3 input-warning-o input-fielddd">
                                                <input type="text" class="form-control text-send btn-senmd myvalue{{$items1->id}}" placeholder="amount" value="{{ $items1->price ?? '' }}">
                                            </div>
                                        </li>
                                @php $j++; @endphp
                                @endforeach
                            @endif




                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else

                    <div class="col-md-15 col-sm-3">

                        <div class="card card-1 ss">
                            <!--<div class="card-header padd-0" style="background:0;">-->
                            <!--    <h4 class="card-title title-text most-p" style=" visibility: hidden;">{{ $item->name ?? '' }}!</h4>-->

                            <!--</div>-->

                            <div class="card-body">
                                <div class="basic-list-group  list-group plan-sec">

                                    <h1>
                                        <input type="text" value="{{ $item->name ?? '' }}" style="color:{{ $item->textcolor ?? '' }}" onkeyup="MyPlaneName(event,<?=$item->id?>)">
                                    </h1>
                                    <span class="rupe">
                                        <input type="text" placeholder="  ₹500" value="{{ $item->price ?? '' }}" style="color:{{ $item->textcolor ?? '' }}" onkeyup="MyPlanePrice(event,<?=$item->id?>)">
                                    </span>
                                    <p>
                                        <input type="text" placeholder="Lifetime Validity" value="{{ $item->validity ?? '' }}" style="color:{{ $item->textcolor ?? '' }}" onkeyup="MyPlaneValidity(event,<?=$item->id?>)">
                                    </p>

                                    <div class="text-center mt-4">
                                        <button type="submit" class=" btn-block" style="background:{{ $item->textcolor ?? '' }}">Buy now</button>
                                    </div>

                                    <ul class="list-group list-user">

                                        @php
                                            $attributes = DB::table('attributes')->where('packageid',$item->id)->get();
                                        @endphp

                                    @if($attributes->count()> 0)
                                       @foreach($attributes as $items1)
                                        @php $j = 1; @endphp

                                        <li class="list-group-item bootom-spacing">
                                            <div class="col-auto my-1">
                                                <select class="form-select me-sm-2 wide" aria-label="example" id="inlineFormCustomSelect" onchange="myFunction(event,{{$items1->id}},{{"'myvalue$items1->id'"}})">
                                                    <option value="charges" <?php if($items1->charge=="charges") echo 'selected="selected"'; ?>>Charges</option>
                                                    <option value="commission" <?php if($items1->charge=="commission") echo 'selected="selected"'; ?>>commission</option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3 input-warning-o input-fielddd">
                                                <input type="text" class="form-control text-send btn-senmd myvalue{{$items1->id}}" placeholder="amount" value="{{ $items1->price ?? '' }}">
                                            </div>
                                        </li>
                                @php $j++; @endphp
                                @endforeach
                            @endif


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @php $i++ @endphp
                  @endforeach
                @endif



            </div>
        </div>
    </div>

    <div id="req_input" class="datainputs">

    </div>

</div>
@include('admin.footer')

<script>
    $(document).ready(function() {
        $("#addmore").click(function() {
            $("#req_input").append('<div class="required_inp"><div class="container"> <div class="row "> <div class="col-xl-12">  </div> <div class="row flex-parss"> <div class="col-md-15 col-sm-3"> <div class="card top-plan"> <div class="card-header header-c"> <input type="text" placeholder="Our Services" > </div> <div class="card-body"> <div class="basic-list-group"> <ul class="list-group"> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item"> <input type="text" placeholder=" Find PAN to Aadhaar No"> </li> <li class="list-group-item btn-services"> <button id="addmore" style="visibility:hidden">Add Services</button> </li> </ul> </div> </div> </div> </div> <div class="col-md-15 col-sm-3"> <div class="card ss "> <div class="card-header padd-0"> <h4 class="card-title title-text most-p"> MOST POPULAR!</h4> </div> <div class="card-body"> <div class="basic-list-group list-group"> <h1> <input type="text" placeholder="  Free Retailer"> </h1> <span class="rupe"> <input type="text" placeholder="  ₹0"> </span> <p> <input type="text" placeholder="Lifetime Validity"> </p> <div class="text-center mt-4"> <button type="submit" class=" btn-block">Buy now</button> </div> <ul class="list-group list-user"> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> </ul> </div> </div> </div> </div> <div class="col-md-15 col-sm-3"> <div class="card card-1 ss"> <!--<div class="card-header padd-0" style="background:0;">--> <!--    <h4 class="card-title title-text most-p" style=" visibility: hidden;">MOST POPULAR!</h4>--> <!--</div>--> <div class="card-body"> <div class="basic-list-group  list-group plan-sec"> <h1> <input type="text" placeholder="  Retailer Plus"> </h1> <span class="rupe"> <input type="text" placeholder="  ₹500"> </span> <p> <input type="text" placeholder="Lifetime Validity"> </p> <div class="text-center mt-4"> <button type="submit" class=" btn-block">Buy now</button> </div> <ul class="list-group list-user"> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> </ul> </div> </div> </div> </div> <div class="col-md-15 col-sm-3"> <div class="card card-1 ss"> <!--<div class="card-header padd-0" style="background:0;">--> <!--    <h4 class="card-title title-text most-p" style=" visibility: hidden;">MOST POPULAR!</h4>--> <!--</div>--> <div class="card-body"> <div class="basic-list-group  list-group plan-sec2"> <h1> <input type="text" placeholder="  Distributor"> </h1> <span class="rupe"> <input type="text" placeholder="  ₹1000"> </span> <p> <input type="text" placeholder="Lifetime Validity"> </p> <div class="text-center mt-4"> <button type="submit" class=" btn-block">Buy now</button> </div> <ul class="list-group list-user"> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> </ul> </div> </div> </div> </div> <div class="col-md-15 col-sm-3"> <div class="card card-1 ss card-border"> <!--<div class="card-header padd-0" style="background:0;">--> <!--    <h4 class="card-title title-text most-p" style=" visibility: hidden;">MOST POPULAR!</h4>--> <!--</div>--> <div class="card-body"> <div class="basic-list-group list-group plan-sec3"> <h1> <input type="text" placeholder="  Super Distributor"> </h1> <span class="rupe"> <input type="text" placeholder="  ₹2000"> </span> <p> <input type="text" placeholder="Lifetime Validity"> </p> <div class="text-center mt-4"> <button type="submit" class=" btn-block">Buy now</button> </div> <ul class="list-group list-user"> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> <li class="list-group-item bootom-spacing"><div class="col-auto my-1"> <select class="form-select me-sm-2 wide" aria-label="  example" id="inlineFormCustomSelect"> <option selected=""> Charge</option> <option value="1">Onejh</option> <option value="2">Two</option> <option value="3">Three</option> </select> </div> <div class="input-group mb-3 input-warning-o input-fielddd"> <input type="text" class="form-control text-send btn-senmd" placeholder="99"> </div> </li> </ul> </div> </div> </div> </div> </div>  </div>  </div>' + '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $('body').on('click', '.inputRemove', function() {
            $(this).parent('div.required_inp').remove()
        });
    });
</script>



<script>
    function myFunction(event,id,price){
      var price = $("."+price).val();
       var selectElement = event.target;
       var value = selectElement.value;

       $.ajax({
        type: 'GET',
        url: "{{url("admin/updatepackige")}}"+'/'+value+'/'+id+'/'+price,
        success:function(data){
         console.log(data);
        }
    });
    }
</script>



<script>
    function MyPlaneName(event,id){
        var selectElement = event.target;
        var value = selectElement.value;
        $.ajax({
            type: 'GET',
            url: "{{url("admin/updateName")}}"+'/'+value+'/'+id,
            success:function(data){
             console.log(data);
            }
        });
    }

    function MyPlanePrice(event,id){
        var selectElement = event.target;
        var value = selectElement.value;
        $.ajax({
            type: 'GET',
            url: "{{url("admin/MyPlanePrice")}}"+'/'+value+'/'+id,
            success:function(data){
             console.log(data);
            }
        });
    }


    function MyPlaneValidity(event,id){
        var selectElement = event.target;
        var value = selectElement.value;
        $.ajax({
            type: 'GET',
            url: "{{url("admin/MyPlaneValidity")}}"+'/'+value+'/'+id,
            success:function(data){
             console.log(data);
            }
        });
    }
    function MyPlaneOverService(event,id){
        var selectElement = event.target;
        var value = selectElement.value;
        $.ajax({
            type: 'GET',
            url: "{{url("admin/MyPlaneOverService")}}"+'/'+value+'/'+id,
            success:function(data){
             console.log(data);
            }
        });
    }
</script>
