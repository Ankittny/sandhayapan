@include('web.header')
<style>
    .Credit{
        color: #28a745!important
    }
    .newdesigang{
        color: #817b0d!important;
        background: hsl(45, 87%, 69%)!important;
    }
    .newddd{
        background: #c1c16f63!important;
        color:#a2a20f!important;
    }
</style>

<section class="services">
    <div class="container wrapper">
        <div class="row ">
            <div class="col-sm-5">
                <h5 class="order-title">Order History</h5>
                @php $date = date("Y/m/d") @endphp
                <p class="text-muted para-t">Show overview {{ date('M y').' - '. date('M y', strtotime("+12 months $date"));}} </p>
            </div>
            <div class="col-sm-7 text-md-end form-order">
                <div class="d-flex flex-parts">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg  " id="datepicker" autocomplete="off" placeholder="From Date">
                    </div>
                    <div class="form-group input-t">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="To">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="datepicker1" placeholder="To Date">
                    </div>

                    <div class="form-group">
                        <a href="#" download>
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
                    <h5>TXN Report</h5>
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
                             <th class="col-md-2">Type</th>
                        <th class="col-md-2">Amount</th>
                        <th class="col-md-2">Blance</th>
                        <th class="col-md-2">Status</th>


                    </tr>
                </thead>

                <tbody>
                    @if($data->count()>0)
                    @foreach($data as $items)
                      @if($items->status=="credit")
                        <tr>
                            <td>
                                <div class="d-flex align-items-center table-icon ">
                                    <i class="mdi mdi-arrow-top-right menu-icon ARROW-I"></i>
                                    <div class="table-user-name ms-3">
                                        <p class="mb-0 font-weight-medium">{{$items->details ?? ''}}</p>
                                        <span> {{ $items->detailsstatus ?? '' }}</span>
                                    </div>
                                </div>
                            </td>

                            <td class="highlight">
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium pan-sec">{{strtoupper($items->utrstatus ?? '')}}</p>
                                    <span class="time"> {{ $items->datetime ?? '' }}</span>
                                </div>
                            </td>
                            <td class="price">{{ $items->amount ?? '' }}</td>
                            <td>{{ $items->total ?? '' }}</td>
                            <td><button class="add btn success" id="add-task">Success</button></td>
                        </tr>
                   @elseif($items->status=="debit")
                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon icons-table">
                                <i class="mdi mdi-arrow-bottom-left menu-icon arrow-f"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{ $items->details ?? '' }}</p>
                                    <span> {{ $items->detailsstatus ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{strtoupper($items->utrstatus ?? '')}}</p>
                                <span class="time"> {{ $items->datetime ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td>{{$items->total ?? ''}}</td>
                        <td><button class="add btn btn-danger font-weight-regular  text-nowrap failed-btn Credit failed-c" id="add-task">{{ strtoupper($items->status ?? '') }}</button></td>
                    </tr>
                    @elseif($items->status=="0")
                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon icons-table ">
                                <i class="mdi mdi-arrow-bottom-left menu-icon newddd"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{ $items->details ?? '' }}</p>
                                    <span> {{ $items->detailsstatus ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{strtoupper($items->utrstatus ?? '')}}</p>
                                <span class="time"> {{ $items->datetime ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td>{{$items->total ?? ''}}</td>
                        <td><button class="add btn btn-danger newddd" id="add-task">{{ "Pending" }}</button></td>
                    </tr>
                    @elseif($items->status=="2")
                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon icons-table">
                                <i class="mdi mdi-arrow-bottom-left menu-icon"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{ $items->details ?? '' }}</p>
                                    <span> {{ $items->detailsstatus ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{strtoupper($items->utrstatus ?? '')}}</p>
                                <span class="time"> {{ $items->datetime ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td>{{$items->total ?? ''}}</td>
                        <td><button class="add btn 
                         failed-b" id="add-task">Failed</button></td>
                    </tr>


                    @elseif($items->status=="3")
                    <tr>
                        <td>
                            <div class="d-flex align-items-center table-icon icons-table">
                                <i class="mdi mdi-arrow-bottom-left menu-icon  arrow-d"></i>
                                <div class="table-user-name ms-3">
                                    <p class="mb-0 font-weight-medium">{{ $items->details ?? '' }}</p>
                                    <span> {{ $items->detailsstatus ?? '' }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="highlight">
                            <div class="table-user-name ms-3">
                                <p class="mb-0 font-weight-medium pan-sec">{{strtoupper($items->utrstatus ?? '')}}</p>
                                <span class="time"> {{ $items->datetime ?? '' }}</span>
                            </div>
                        </td>
                        <td class="price">{{ $items->amount ?? '' }}</td>
                        <td>{{$items->total ?? ''}}</td>
                        <td><button class="add btn refund-b" id="add-task">Refund</button></td>
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

@include('web.footer')


<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/js-grid.js"></script>
<script src="assets/js/jquery.dataTables.js"></script>
<script src="assets/js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page -->
<script>
    // 	$(document).ready(function() {
    //     $('.table').DataTable({
    //       //disable sorting on last column
    //       "columnDefs": [
    //         { "orderable": false, "targets": 2 }
    //       ],
    //       language: {
    //         //customize pagination prev and next buttons: use arrows instead of words
    //         'paginate': {
    //           'previous': '<span class="fa fa-chevron-left"></span>',
    //           'next': '<span class="fa fa-chevron-right"></span>'
    //         },
    //         //customize number of elements to be displayed
    //         "lengthMenu": 'Order <span>Report</span> <select class="form-control input-sm">'+
    //         '<option value="10">10</option>'+
    //         '<option value="20">20</option>'+
    //         '<option value="30">30</option>'+
    //         '<option value="40">40</option>'+
    //         '<option value="50">50</option>'+
    //         '<option value="-1">All</option>'+
    //         '</select> '
    //       }
    //     })
    // } );
    //

</script>
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
<script>
    $(".rotate").click(function() {
        $(this).toggleClass("down");
    })

</script>
</body>
</html>
