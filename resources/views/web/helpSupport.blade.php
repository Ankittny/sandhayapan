@include('web.header')
<style>
    footer.footer {
    display: none !important;
}
</style>
		<section class="services">
            <div class="container wrapper">
                
			

                    <div class="table-orders">
                    <div class="row padd-all">
                      <div class="col-sm-7">
                        <!--<h5>Order <span class="history-title">Report</span></h5>-->
                   <button class="add  font-weight-regular  text-nowrap report" id="addd"  data-toggle="modal" data-target="#basicModalbn"> New Complain</button>
                      </div>
                     <div class="col-sm-5 text-md-end">
                         
                              
                              <l1>
                                         <div class="searching">
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
            </div>
       
                              </l1>
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
           
<!--                  <div class="dropdown-foot between"><a href="#" class="clickable">Reset Filter</a> <a href="#savedFilter" data-toggle="modal">Save Filter</a></div>-->
                </div>
              </li>
                     
                       
                     
                    </div>
                    </div>  
                
  <table class="table table-bordered table-hover table-partss" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th class="col-md-2">Name</th>
              <th class="col-md-2">Position</th>
              <th class="col-md-2">Office</th>
              <th class="col-md-2">Age</th>
              <th class="col-md-2"></th>
            
          </tr>
      </thead>
     
      <tbody>
          <tr>
		  <td>
                              <div class="d-flex align-items-center table-icon ">
                              <i class="mdi mdi-arrow-top-right menu-icon"></i>
                                <div class="table-user-name ms-3">
                                  <p class="mb-0 font-weight-medium">Cecelia Cooper</p>
                                  <span> 10 2017 00:00:00</span>
                                </div>
                              </div>
                            </td>
          
              <td class="highlight"><div class="table-user-name ms-3">
                                  <p class="mb-0 font-weight-medium pan-sec">Find Pan No</p>
                                  <span class="time"> 10 2017 00:00:00</span>
                                </div></td>
              <td>24.00</td>
             <td><button class="add btn btn-success font-weight-regular  text-nowrap success-btn" id="add-task">success</button></td>
              <td>
                  <!-- Chatbot -->
<div class="botIcon">
	<div class="botIconContainer">
		<div class="iconInner openbutton">
		<button>Open Chat</button>
		</div>
	</div>
	<div class="Layout Layout-open Layout-expand Layout-right">
		<div class="Messenger_messenger">
			<div class="Messenger_header">
				<h4 class="Messenger_prompt">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span>
			</div>
			<div class="Messenger_content">
				<div class="Messages">
					<div class="Messages_list"></div>
				</div>
				<form id="messenger">
					<div class="Input Input-blank">
<!-- 							<textarea name="msg" class="Input_field" placeholder="Send a message..."></textarea> -->
						<input name="msg" class="Input_field" placeholder="Type a message...">
						<button type="submit" class="Input_button Input_button-send">
							<div class="Icon">
								<svg viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
										<path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C5.08414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
									</g>
								</svg>
							</div>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Chatbot -->
                  
                  <!--<button class="add btn btn-primary font-weight-regular  text-nowrap print-btn" id="add"  data-toggle="modal" data-target="#basicModal">Open Chat</button>-->
                  
                  </td>
           
          </tr>
		  <!--   <tr>-->
		  <!--<td>-->
    <!--                          <div class="d-flex align-items-center table-icon icons-table">-->
    <!--                          <i class="mdi mdi-arrow-bottom-left menu-icon"></i>-->
    <!--                            <div class="table-user-name ms-3">-->
    <!--                              <p class="mb-0 font-weight-medium">Cecelia Cooper</p>-->
    <!--                              <span> 10 2017 00:00:00</span>-->
    <!--                            </div>-->
    <!--                          </div>-->
    <!--                        </td>-->
          
    <!--          <td class="highlight"><div class="table-user-name ms-3">-->
    <!--                              <p class="mb-0 font-weight-medium pan-sec">Find Pan No</p>-->
    <!--                              <span class="time"> 10 2017 00:00:00</span>-->
    <!--                            </div></td>-->
    <!--          <td>24.00</td>-->
    <!--          <td><button class="add btn btn-danger font-weight-regular  text-nowrap failed-btn" id="add-task">Failed</button></td>-->
    <!--          <td></td>-->
           
    <!--      </tr>-->
        
         
      </tbody>
      
  </table>
  <nav class="pagination">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-double-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-double-right"></i></a></li>
                      </ul>
                    </nav>
</div>
</div>
          
         
         </section>
          </div>

           
            
           
            
           
            </div>
      
          </div>
          





        
              <div class="modal fade" id="basicModalbn" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
    </div>
      
    <div class="card border-remove card-border card-boxss">
                  <div class="card-body">
				  
                   
                  <div class="card">
                  <div class="card-body">
                  
                    <form class="forms-sample pan-services">
                    
                      <div class="form-group">
                        <label for="exampleInputEmail1">Order Id</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Message</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2 pay-now">Submit</button>

                    </form>
                  </div>
                </div>
                
                   
                  </div>
				  
				 
                </div>
				
    </div>
  </div>
</div>



    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
	  <script src="assets/js/js-grid.js"></script>
	      <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables.bootstrap4.js"></script>
    
    @include('web.footer')
    
    
            <script>
            jQuery(document).ready(function($) {
	jQuery(document).on('click', '.iconInner', function(e) {
		jQuery(this).parents('.botIcon').addClass('showBotSubject');
		$("[name='msg']").focus();
	});

	jQuery(document).on('click', '.closeBtn, .chat_close_icon', function(e) {
		jQuery(this).parents('.botIcon').removeClass('showBotSubject');
		jQuery(this).parents('.botIcon').removeClass('showMessenger');
	});

	jQuery(document).on('submit', '#botSubject', function(e) {
		e.preventDefault();

		jQuery(this).parents('.botIcon').removeClass('showBotSubject');
		jQuery(this).parents('.botIcon').addClass('showMessenger');
	});
	
	/* Chatboat Code */
	$(document).on("submit", "#messenger", function(e) {
		e.preventDefault();

		var val = $("[name=msg]").val().toLowerCase();
		var mainval = $("[name=msg]").val();
		name = '';
		nowtime = new Date();
		nowhoue = nowtime.getHours();

		function userMsg(msg) {
			$('.Messages_list').append('<div class="msg user"><span class="avtr"><figure style="background-image: url(https://mrseankumar25.github.io/Sandeep-Kumar-Frontend-Developer-UI-Specialist/images/avatar.png)"></figure></span><span class="responsText text-response">' + mainval + '</span></div>');
		};
		function appendMsg(msg) {
			$('.Messages_list').append('<div class="msg"><span class="avtr"><figure style="background-image: url(https://mrseankumar25.github.io/Sandeep-Kumar-Frontend-Developer-UI-Specialist/images/avatar.png)"></figure></span><span class="responsText text-response-1">' + msg + '</span></div>');
			$("[name='msg']").val("");
		};


		userMsg(mainval);
		if( val.indexOf("hello") > -1 || val.indexOf("hi") > -1 || val.indexOf("good morning") > -1 || val.indexOf("good afternoon") > -1 || val.indexOf("good evening") > -1 || val.indexOf("good night") > -1 ) {
			if(nowhoue >= 12 && nowhoue <= 16) {
				appendMsg('good afternoon');
			} else if(nowhoue >= 10 && nowhoue <= 12) {
				appendMsg('hi');
			} else if(nowhoue >= 0 && nowhoue <= 10) {
				appendMsg('good morning');
			} else {
				appendMsg('good evening');
			}

			appendMsg("what's you name?");

		} else if( val.indexOf("i have problem with") > -1) {
			if (val.indexOf("girlfriend") > -1 || val.indexOf("gf") > -1) {

				appendMsg("take out your girlfriend, for dinner or movie.");
				appendMsg("is it helpful? (yes/no)");

			} else if (val.indexOf("boyfriend") > -1 || val.indexOf("bf") > -1) {
				appendMsg("bye something for him.");
				appendMsg("is it helpful? (yes/no)");
			} else {
				appendMsg("sorry, i'm not able to get you point, please ask something else.");
			}
		} else if( val.indexOf("yes") > -1) {

			var nowtime = new Date();
			var nowhoue = nowtime.getHours();
			appendMsg("it's my pleaser that i can help you");

			saybye();
		} else if( val.indexOf("no") > -1) {

			var nowtime = new Date();
			var nowhoue = nowtime.getHours();
			appendMsg("it's my bad that i can't able to help you. please try letter");

			saybye();
		} else if( val.indexOf("my name is ") > -1 || val.indexOf("i am ") > -1 || val.indexOf("i'm ") > -1 || val.split(" ").length < 2 ) {/*|| mainval != ""*/
			// var name = "";
			if(val.indexOf("my name is") > -1) {
				name = val.replace("my name is", "");
			}

			else if(val.indexOf("i am") > -1) {
				name = val.replace("i am", "");
			}

			else if(val.indexOf("i'm") > -1) {
				name = val.replace("i'm", "");
			}

			else {
				name = mainval;
			}

			// appendMsg("hi " + name + ", how can i help you?");
			appendMsg("hi " + name + ", how can i help you?");
		} else {
			appendMsg("sorry i'm not able to understand what do you want to say");
		}

		function saybye() {
			if (nowhoue <= 10) {
				appendMsg(" have nice day! :)");
			} else if (nowhoue >= 11 || nowhoue <= 20) {
				appendMsg(" bye!");
			} else {
				appendMsg(" good night!");
			}
		}

		var lastMsg = $('.Messages_list').find('.msg').last().offset().top;
		$('.Messages').animate({scrollTop: lastMsg}, 'slow');
	});
	/* Chatboat Code */
})
        </script>
    <!-- End custom js for this page -->
<script>
    const accordionItems = document.querySelectorAll("[data-accordion] > details");

const siblings = (el) => {
  if (el.parentNode === null) return [];
  return Array.prototype.filter.call(el.parentNode.children, function (child) {
    return child !== el;
  });
};

accordionItems.forEach((el) => {
  el.addEventListener("click", () => {
    const others = siblings(el);
    others.forEach((sibling) => {
      sibling.removeAttribute("open");
    });
  });
});

</script>
<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>

<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#datepicker1" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
    <script>
            $(".rotate").click(function () {
    $(this).toggleClass("down");
})
        </script>
    <script>
            $(".rotate").click(function () {
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
                  <script>
            $(".rotate").click(function () {
    $(this).toggleClass("down");
})
        </script>
        
