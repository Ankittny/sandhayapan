@include('web.header')

<style>
   .sdfsfsfd {
        background: #44e2bb !important;
        color: white !important;
    }
   
    span.relative.z-0.inline-flex.shadow-sm.rounded-md svg {
    width: 30px !important;
}
.flex .justify-between {
    display: none;
}
</style>



<section class="services">
    <div class="container wrapper">

        <div class="row ">
            <div class="col-sm-5">
                <h5 class="order-title">Order History</h5>
                @php $date = date("Y/m/d") @endphp
                <p class="text-muted para-t">Show overview {{ date('M y').' - '. date('M y', strtotime("+12 months $date"))}}</p>
            </div>
            <div class="col-sm-7 text-md-end form-order">
                <div class="d-flex flex-parts">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg  " id="datepicker" autocomplete="off" placeholder="From Date">
                    </div>

                    <div class="form-group input-t">
                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="To">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="datepicker1" autocomplete="off" placeholder="To Date">
                    </div>

                    <div class="form-group">
                        <a href="#" onclick="openForm()" download>
                            <p class="  export-btn">
                                <i class="bx bx-cloud-download"></i>Export </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="table-orders">
            <div class="row padd-all all-p">
                <div class="col-sm-10">
                    <h5> All Order Report</span></h5>
                </div>
                <div class="col-sm-2 text-md-end">
                    <div class="row">
                         <div class="col-sm-8 ">
                  
                    <l1>
                        <div class="search-box">
  <input class="search-input" type="text" placeholder="">
  <button class="search-btn"><i class="fa fa-search"></i></button>
</div>
                       <!-- <div class="searching">
                            <center>
                                <a href="javascript:void(0)" class="search-open">
                                    <i class="fa fa-search search-icon"></i>
                                </a>
                            </center>
                            <div class="search-inline">
                                <form>
                                    <input type="text" class="form-control" placeholder="Searching...">
                                    <a href="javascript:void(0)" class="search-close">
                                        <i class="mdi mdi mdi-arrow-left"></i>
                                    </a>
                                </form>
                            </div>
                        </div>-->

                    </l1>
                    </div>
                       <div class="col-sm-2 ">
                    <li class="nav-item dropdown drop">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="bx bx-filter icons icon-none"></i>

                        </a>
                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list left-notification notixnx" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0 advance-filter">Service Provider</h6>
                            <div class="col-sm-12 form-group">
                                <!--<label class="overline-title overline-title-alt">Status</label>-->
                                <select name="payment_type" id="payment_type" onchange="optionCheck()" class="form-control select-insurance-information">
                                    <option>--Select Payment Type *--</option>
                                    <option value="self-pay"> Self Pay </option>
                                    <option value="self-pay2"> Self Pay 2 </option>
                                    <option value="self-pay3"> Self Pay 3</option>
                                    <option value="insurance"> Insurance </option>
                                </select>

                            </div>
                            <div>
                                <button class="add btn btn-primary font-weight-regular text-nowrap fund btn-funds" id="add-task" data-toggle="modal" data-target="#basicModal"> Filter</button>
                            </div>

                            <!--<div class="dropdown-foot between"><a href="#" class="clickable">Reset Filter</a> <a href="#savedFilter" data-toggle="modal">Save Filter</a></div>-->
                        </div>
                    </li>
                </div>
                 </div>
                  </div>
            </div>
            <table class="table table-bordered table-hover table-partss" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="col-md-2">Details</th>
                        <th class="col-md-2">Order</th>
                        <th class="col-md-2">Amount</th>
                        <th class="col-md-2">Status</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data->count()>0)
                    @foreach($data as $items)
                    @if($items->status=="credit")
                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon icons-table">
                                <i class="mdi mdi-arrow-bottom-left menu-icon"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{$items->details}}</p>
                                    <span> {{ $items->created_at ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{ $items->details ?? '' }}</p>
                                <span class="time"> {{ $items->created_at ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td><button class="add btn failed-cd  dddd" id="add">Failed</button></td>
                        <td><!--<button class="add btn btn-primary font-weight-regular  text-nowrap print-btn" id="add">Print</button>--></td>

                    </tr>
                    @elseif($items->status=="debit")

                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon">
                                <i class="mdi mdi-arrow-top-right menu-icon"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{ $items->detailsstatus ?? '' }}</p>
                                    <span> {{ $items->datetime ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{ $items->details ?? '' }}</p>
                                <span class="time"> {{ $items->utrstatus ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td><button class="add btn btn-success sdfsfsfd" id="add-task">Success</button></td>
                        {{--  <td>{{ $items->status ?? '' }}</td>  --}}
                        <td><a  class="iconss" href="#" data-toggle="modal" data-target="#basicModal90" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a  class="iconss" href="#">         <i class="fa fa-check" aria-hidden="true"></i></a>
               
                        </td>

                    </tr>
                    
                    
                    @endif

                    @endforeach
                    @endif



                </tbody>

            </table>

            <nav class="pagination">
                {{ $data->links() }}

            </nav>
        </div>
    </div>


</section>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="basicModal90" tabindex="-1" role="dialog" aria-labelledby="basicModal3" aria-hidden="true">
    <div class="modal-dialog box-secss">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Id <span class="id-text">1234567891</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>

                <div class="modal-body body-m">
                    <div class="col-md-12" >
                        <div class="nk-block-between flex-wrap g-3"><div class="nk-tnx-type"><div class="nk-tnx-type-icon bg-warning text-white"><i class="mdi mdi-arrow-top-right menu-icon"></i></div> <div class="nk-tnx-type-text"><h5 class="title">100</h5> <span class="sub-text mt-n1">2022-11-18T12:12:56.000000Z</span></div></div> <ul class="align-center flex-wrap gx-3"><li><span class="badge badge-sm badge-null">Credit</span></li></ul></div>
                        
                                  <div class="nk-modal-head mt-sm-5 mt-4 mb-4"><h5 class="title">Order Info</h5></div>
                                  
                                  <div class="row gy-3"><div class="col-lg-6"><span class="sub-text">Order ID</span> </div> <div class="col-lg-6"><span class="sub-text">Reference ID</span></div> <div class="col-lg-6"><span class="sub-text">0</span> <span class="caption-text"></span></div> <div class="col-lg-6"><span class="sub-text">24</span> </div></div>
                                  <button class="print-btn"> Print</button>
                    </div>
          

                    <!--<div class="form-group">-->
                    <!--    <label> Enter Amount </label>-->
                    <!--    <input type="text" name="amount" placeholder="RS 10" class="form-control" />-->
                    <!--</div>-->

             


                </div>




        </div>
    </div>
</div>

@include('web.footer')


<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/js-grid.js"></script>
<script src="assets/js/jquery.dataTables.js"></script>
<script src="assets/js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page -->

<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: "dd-mm-yy"
            , duration: "fast"
        });
    });

</script>

<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
    $(function() {
        $("#datepicker1").datepicker({
            dateFormat: "dd-mm-yy"
            , duration: "fast"
        });
    });

</script>
<script>
    $(".rotate").click(function() {
        $(this).toggleClass("down");
    })

</script>

<script>
    var sp = document.querySelector('.search-open');
    var searchbar = document.querySelector('.search-inline');
    var shclose = document.querySelector('.search-close');

    function changeClass() {
        searchbar.classList.add('search-visible');
    }

    function closesearch() {
        searchbar.classList.remove('search-visible');
    }
    sp.addEventListener('click', changeClass);
    shclose.addEventListener('click', closesearch);

</script>

</body>
</html>
