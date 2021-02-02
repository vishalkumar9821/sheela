
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<style>
	.modal a.close-modal {
    position: absolute;
    top: 3.5px!important;
    right: 4.5px!important;
}
	.form-control:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #017d1d!important;
    background-color: transparent;
}
	.btn:hover {
    color: #ffffff!important;
    background-color: #017d1d!important;
}

	.modal{padding: 15px 20px;}
/* CSS Multiple Whatsapp Chat */
.whatsapp-name {
  font-size: 16px;
  font-weight: 600;
  padding-bottom: 0;
  margin-bottom: 0;
  line-height: 0.5;
}

#whatsapp-chat {
  box-sizing: border-box !important;
  outline: none !important;
  position: fixed;
  width: 350px;
  border-radius: 10px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
  bottom: 90px;
  right: 30px;
  overflow: hidden;
  z-index: 99;
  animation-name: showchat;
  animation-duration: 1s;
  transform: scale(1);
}

a.blantershow-chat {
  /*   background: #009688; */
 background: #188831;
    color: #ffffff;
  position: fixed;
  display: flex;
  font-weight: 400;
  justify-content: space-between;
  z-index: 98;
  bottom: 25px;
  right: 30px;
  font-size: 15px;
  padding: 10px 20px;
  border-radius: 30px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}

a.blantershow-chat svg {
  transform: scale(1.2);
  margin: 0 10px 0 0;
}
	
	
	
	a.blantershow-chat_donate {
  /*   background: #009688; */
 background: #188831;
    color: #ffffff;
  position: fixed;
  display: flex;
  font-weight: 400;
  justify-content: space-between;
  z-index: 98;
  bottom: 25px;
  right: 30px;
  font-size: 15px;
  padding: 10px 20px;
  border-radius: 30px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}

a.blantershow-chat_donate svg {
  transform: scale(1.2);
  margin: 0 10px 0 0;
}
	

.header-chat {
  /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
  background: #009688;
  background: #095e54;
  color: #fff;
  padding: 20px;
}

.header-chat h3 {
  margin: 0 0 10px;
}

.header-chat p {
  font-size: 14px;
  line-height: 1.7;
  margin: 0;
}

.info-avatar {
  position: relative;
}

.info-avatar img {
  border-radius: 100%;
  width: 50px;
  float: left;
  margin: 0 10px 0 0;
}

a.informasi {
  padding: 20px;
  display: block;
  overflow: hidden;
  animation-name: showhide;
  animation-duration: 0.5s;
}

a.informasi:hover {
  background: #f1f1f1;
}

.info-chat span {
  display: block;
}

#get-label,
span.chat-label {
  font-size: 12px;
  color: #888;
}

#get-nama,
span.chat-nama {
  margin: 5px 0 0;
  font-size: 15px;
  font-weight: 700;
  color: #222;
}

#get-label,
#get-nama {
  color: #fff;
}

span.my-number {
  display: none;
}

/* .blanter-msg {
  color: #444;
  padding: 20px;
  font-size: 12.5px;
  text-align: center;
  border-top: 1px solid #ddd;
} */
textarea#chat-input {
  border: none;
 
  width: 100%;
  height: 50px;
  outline: none;
  resize: none;
  padding: 10px;
  font-size: 14px;
}

a#send-it {
  width: 30px;
  font-weight: 700;
 padding: 12px 5px 0;
  background: #eee;
  
}
a#send-it svg {
  fill: #a6a6a6;
  height: 24px;
  width: 24px;
}

.first-msg {
  background: transparent;
  padding: 30px;
  text-align: center;
}
.first-msg span {
  background: #e2e2e2;
  color: #333;
  font-size: 14.2px;
  line-height: 1.7;
  border-radius: 10px;
  padding: 15px 20px;
  display: inline-block;
}

.start-chat .blanter-msg {
  display: flex;
}

#get-number {
  display: none;
}

a.close-chat {
  position: absolute;
  top: 5px;
  right: 15px;
  color: #fff;
  font-size: 30px;
}

@keyframes ZpjSY {
  0% {
    background-color: #b6b5ba;
  }
  15% {
    background-color: #111111;
  }
  25% {
    background-color: #b6b5ba;
  }
}
@keyframes hPhMsj {
  15% {
    background-color: #b6b5ba;
  }
  25% {
    background-color: #111111;
  }
  35% {
    background-color: #b6b5ba;
  }
}
@keyframes iUMejp {
  25% {
    background-color: #b6b5ba;
  }
  35% {
    background-color: #111111;
  }
  45% {
    background-color: #b6b5ba;
  }
}
@keyframes showhide {
  from {
    transform: scale(0.5);
    opacity: 0;
  }
}
@keyframes showchat {
  from {
    transform: scale(0);
    opacity: 0;
  }
}
@media screen and (max-width: 480px) {
  #whatsapp-chat {
    width: auto;
    left: 5%;
    right: 5%;
    font-size: 80%;
  }
}
.hide {
  display: none;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}

.show {
  display: block;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}

.whatsapp-message-container {
  display: flex;
  z-index: 1;
}

.whatsapp-message {
  padding: 7px 14px 6px;
  background-color: white;
  border-radius: 0px 8px 8px;
  position: relative;
  transition: all 0.3s ease 0s;
  opacity: 0;
  transform-origin: center top 0px;
  z-index: 2;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
  margin-top: 4px;
  margin-left: -54px;
  max-width: calc(100% - 66px);
}

.whatsapp-chat-body {
  padding: 20px 20px 20px 10px;
  background-color: #e6ddd4;
  position: relative;
}
.whatsapp-chat-body::before {
  display: block;
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
  z-index: 0;
  opacity: 0.08;
  background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
}

.dAbFpq {
  display: flex;
  z-index: 1;
}

.eJJEeC {
  background-color: white;
  width: 52.5px;
  height: 32px;
  border-radius: 16px;
  display: flex;
  -moz-box-pack: center;
  justify-content: center;
  -moz-box-align: center;
  align-items: center;
  margin-left: 10px;
  opacity: 0;
  transition: all 0.1s ease 0s;
  z-index: 1;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
}

.hFENyl {
  position: relative;
  display: flex;
}

.ixsrax {
  height: 5px;
  width: 5px;
  margin: 0px 2px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  animation-duration: 1.2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  top: 0px;
  background-color: #9e9da2;
  animation-name: ZpjSY;
}

.dRvxoz {
  height: 5px;
  width: 5px;
  margin: 0px 2px;
  background-color: #b6b5ba;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  animation-duration: 1.2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  top: 0px;
  animation-name: hPhMsj;
}

.kAZgZq {
  padding: 7px 14px 6px;
  background-color: white;
  border-radius: 0px 8px 8px;
  position: relative;
  transition: all 0.3s ease 0s;
  opacity: 0;
  transform-origin: center top 0px;
  z-index: 2;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
  margin-top: 4px;
  margin-left: -54px;
  max-width: calc(100% - 66px);
}
.kAZgZq::before {
  position: absolute;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: contain;
  content: "";
  top: 0px;
  left: -12px;
  width: 12px;
  height: 19px;
}

.bMIBDo {
  font-size: 13px;
  font-weight: 700;
  line-height: 18px;
  color: rgba(0, 0, 0, 0.4);
}

.iSpIQi {
  font-size: 14px;
  line-height: 19px;
  margin-top: 4px;
  color: #111111;
}

.iSpIQi {
  font-size: 14px;
  line-height: 19px;
  margin-top: 4px;
  color: #111111;
}

.cqCDVm {
  text-align: right;
  margin-top: 4px;
  font-size: 12px;
  line-height: 16px;
  color: rgba(17, 17, 17, 0.5);
  margin-right: -8px;
  margin-bottom: -4px;
}

</style>






<a class='blantershow-chat_donate' href="#ex1" rel="modal:open" title='Donate Now' style="bottom: 80px; background:#dc3545;">Donate Now</a>


<div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      
      <p><span class="whatsapp-name">Sheela Charitable Foundation</span><br><small>Typically replies within an hour</small></p>

    </div>
    <div class='get-new hide'>
      <div id='get-label'></div>
      <div id='get-nama'></div>
    </div>
  </div>
  <div class='home-chat'>

  </div>
  <div class='start-chat'>
    <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
          <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Sheela Charitable Foundation</div>
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
          
        </div>
      </div>
    </div>

    <div class='blanter-msg'>
      <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
      <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

    </div>
  </div>
  <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> Support</a>


<footer class="xs-footer-section">
			<div class="container">
				<div class="xs-footer-top-layer">
					<div class="row">
						<div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
							<a href="index.php" class="xs-footer-logo">
								<img src="assets/images/logo.png" alt="">
							</a>
							
							<ul class="xs-social-list-v2">
								<li><a href="https://m.facebook.com/sheelacharitable" target="_blank" class="color-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/SheelaTrust?s=09" target="_blank" class="color-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/p/CGrZWPQANmQ/?igshid=145l0plpgqf4v" target="_blank" class="color-dribbble"><i class="fa fa-instagram"></i></a></li>
							
							</ul><!-- .xs-social-list END -->
						</div>
						<div class="col-lg-2 col-md-6 footer-widget">
							<h3 class="widget-title">About Us</h3>
							<ul class="xs-footer-list">
								<li><a href="mission.php">How it works</a></li>
								<li><a href="causes.php">Activites</a></li>
								<li><a href="event.php">Events</a></li>
								<li><a href="portfolio.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 footer-widget">
							<div class="widget recent-posts">
								<h3 class="widget-title">Trending Post</h3>
								<ul class="xs-recent-post-widget">
									<li>
										<div class="posts-thumb float-left"> 
											<a href="event.php">
												<img alt="img" class="img-responsive" src="assets/images/news_feeds_1.jpg">
												<div class="xs-entry-date">
													<span class="entry-date d-block">24</span>
													<span class="entry-month d-block">dec</span>
												</div>
												<div class="xs-black-overlay bg-red"></div>
											</a>
										</div><!-- .posts-thumb END -->
										<div class="post-info">
											<h4 class="entry-title">
												<a href="event.php">Distributed<br> stationery</a>
											</h4>
											
										</div><!-- .post-info END -->
										<div class="clearfix"></div>
									</li><!-- 1st post end-->
									<li>
										<div class="posts-thumb float-left"> 
											<a href="event.php">
												<img alt="img" class="img-responsive" src="assets/images/news_feeds_2.jpg">
												<div class="xs-entry-date">
													<span class="entry-date d-block">27</span>
													<span class="entry-month d-block">Dec</span>
												</div>
												<div class="xs-black-overlay bg-green"></div>
											</a>
										</div><!-- .posts-thumb END -->
										<div class="post-info">
											<h4 class="entry-title">
												<a href="event.php">Cleanliness<br>Campaign</a>
											</h4>
											
										</div><!-- .post-info END -->
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 footer-widget">
							<h3 class="widget-title">Contact Us</h3>
							<ul class="xs-info-list">
								<li ><i class="fa fa-home bg-red"></i><A href="https://goo.gl/maps/ro4uGqFCNtNxiWQ98">A-1282, 1st Floor, G.D Colony Mayur-Vihar Phase-3, Delhi-110096.</A></li>
								<li><i class="fa fa-phone bg-green"></i><a href="tel:1800 891 7117">1800 891 7117</a> , <A href="tel:+91 9315398050">+91 9315398050</A></li>
								<li><i class="fa fa-envelope-o bg-blue"></i><a href="mailto:help@sheelacharitablefoundation.org">help@sheelacharitablefoundation.org</a></li>
							</ul><!-- .xs-list-with-icon END -->
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="xs-copyright">
					<div class="row">
						<div class="col-md-6">
							<div class="xs-copyright-text">
								<p style="text-transform: capitalize;"> All Right's Reserved by Sheelacharitablefoundation <br>Powered by <a href="https://www.estivasoftech.com" target="_blank">Estivasoftech</a> </p>
							</div>
						</div>
						<div class="col-md-6">
							<nav class="xs-footer-menu">
								<ul>
									<li><a href="javascript:void(0)">FAQ</a></li>
									<li><a href="javascript:void(0)">Help Desk</a></li>
									<li><a href="javascript:void(0)">Support</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="xs-back-to-top-wraper">
				<a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</footer>	


<div id="ex1" class="modal">
	
	 <input type="tel" name="currency-field" id="currency-field" pattern="^\₹\d{1,3}(,\d{3})*(\.\d+)?₹" value="" data-type="currency" placeholder="Enter Donation Amount" class="form-control" required>
	<center><button class="btn btn-danger" type="submit">Donate</button></center> 
  
</div>


<script>
	// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "₹" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "₹" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}



	
	

/* Whatsapp Chat Widget by www.bloggermix.com */
$(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+91 9315398050" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });

</script>
