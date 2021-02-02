<style>
    
    .goog-te-gadget .goog-te-combo {
   top: 6px;
    padding: 2px;
    background-color: #dc3545;
    color: white;
    /* border: white; */
    border: 1px solid white;
    right: 63%;
    position: absolute;

}

@media only screen and (max-width: 600px) {
    
 .goog-te-gadget .goog-te-combo {
    top: 6px;
    padding: 2px;
    background-color: #dc3545;
    color: white;
    /* border: white; */
    border: 1px solid white;
    right: 15%!important;
    position: absolute;
    width: 155px!important;
}
}

</style>
<header class="xs-header header-transparent xs-box">
	<div class="container">
		<nav class="xs-menus">
			<div class="xs-top-bar clearfix">
				<ul class="xs-top-social">
					<li><a href="https://www.facebook.com/sheelacharitable/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/SheelaTrust?s=09" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/p/CGrZWPQANmQ/?igshid=145l0plpgqf4v" target="_blank"><i class="fa fa-instagram"></i></a></li>
					
				</ul>
				<a href="mailto:sheelacharitablefoundation.org" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i>help@sheelacharitablefoundation.org</a>
				<a href="tel:+91 9315398050" class="xs-top-bar-mail">+91 9315398050</a>
				<a href="tel:1800 891 7117" class="xs-top-bar-mail" style="
    margin-right: 5px;
"><i class="fa fa-phone"></i>1800 891 7117 ,</a>

	<div id="translate-a">  <!--  THIS WRAPPER NEEDS TO EXIST IN ORDER TO SEND THE MARKUP TO GOOGLE -->
  <div class="wrap-a">
    <div id="google_translate_element"></div>
  </div>
</div>

				
			</div>
			
		
  
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a href="index.php" class="xs-nav-logo">
					<img src="assets/images/logo.png" alt="">
				</a>
			</div><!-- .nav-header END -->
			<div class="nav-menus-wrapper row">
				<div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
					<a class="nav-brand" href="index.php">
						<img src="assets/images/logo.png" alt="">
					</a>
				</div><!-- .xs-logo-wraper END -->
				<div class="col-lg-10 col-xl-7">
					<ul class="nav-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="mission.php">about</a></li>
						<li><a href="causes.php">Activities</a></li>
						<li><a href="event.php">Event</a></li>
                        <li><a href="portfolio.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul><!-- .nav-menu END -->
				</div>
				<div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
					<a href="#ex1" rel="modal:open" class="btn btn-danger">
						<span class="badge"><i class="fa fa-heart"></i></span> Donate Now
					</a>
				</div><!-- .xs-navs-button END -->
			</div><!-- .nav-menus-wrapper .row END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div><!-- .container end -->
</header>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&languages=en,es"></script>

<script>
    
    $(function(){
  
  var $translateBar = $('#translate-a'),
      $translateToggle = $('.translate-toggle'),
      $picker = $translateBar.find('select'),
      visibleClass = "visible",
      hideOnChange = true; // hide bar after choice

      $translateToggle.on('click', function(e){
        e.preventDefault();
        $translateBar.toggleClass(visibleClass);
      });
  
      if(hideOnChange){
        $translateBar.on('change', 'select', function(){
          if($translateBar.hasClass(visibleClass)){
            $translateBar.removeClass(visibleClass);
          }
        });
      }
  
});

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    autoDisplay: true,
    includedLanguages: 'en,hi,bn,ta,te,gu,mr,ru,,pa,ru,pt,it,de',
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
  }, 'google_translate_element');
}



/*
Web Interface Language Codes

hl=af          Afrikaans
hl=ak          Akan
hl=sq          Albanian
hl=am          Amharic
hl=ar          Arabic
hl=hy          Armenian
hl=az          Azerbaijani
hl=eu          Basque
hl=be          Belarusian
hl=bem         Bemba
hl=bn          Bengali
hl=bh          Bihari
hl=xx-bork     Bork, bork, bork!
hl=bs          Bosnian
hl=br          Breton
hl=bg          Bulgarian
hl=km          Cambodian
hl=ca          Catalan
hl=chr         Cherokee
hl=ny          Chichewa
hl=zh-CN       Chinese (Simplified)
hl=zh-TW       Chinese (Traditional)
hl=co          Corsican
hl=hr          Croatian
hl=cs          Czech
hl=da          Danish
hl=nl          Dutch
hl=xx-elmer    Elmer Fudd
hl=en          English
hl=eo          Esperanto
hl=et          Estonian
hl=ee          Ewe
hl=fo          Faroese
hl=tl          Filipino
hl=fi          Finnish
hl=fr          French
hl=fy          Frisian
hl=gaa         Ga
hl=gl          Galician
hl=ka          Georgian
hl=de          German
hl=el          Greek
hl=gn          Guarani
hl=gu          Gujarati
hl=xx-hacker   Hacker
hl=ht          Haitian Creole
hl=ha          Hausa
hl=haw         Hawaiian
hl=iw          Hebrew
hl=hi          Hindi
hl=hu          Hungarian
hl=is          Icelandic
hl=ig          Igbo
hl=id          Indonesian
hl=ia          Interlingua
hl=ga          Irish
hl=it          Italian
hl=ja          Japanese
hl=jw          Javanese
hl=kn          Kannada
hl=kk          Kazakh
hl=rw          Kinyarwanda
hl=rn          Kirundi
hl=xx-klingon  Klingon
hl=kg          Kongo
hl=ko          Korean
hl=kri         Krio (Sierra Leone)
hl=ku          Kurdish
hl=ckb         Kurdish (Soranî)
hl=ky          Kyrgyz
hl=lo          Laothian
hl=la          Latin
hl=lv          Latvian
hl=ln          Lingala
hl=lt          Lithuanian
hl=loz         Lozi
hl=lg          Luganda
hl=ach         Luo
hl=mk          Macedonian
hl=mg          Malagasy
hl=ms          Malay
hl=ml          Malayalam
hl=mt          Maltese
hl=mi          Maori
hl=mr          Marathi
hl=mfe         Mauritian Creole
hl=mo          Moldavian
hl=mn          Mongolian
hl=sr-ME       Montenegrin
hl=ne          Nepali
hl=pcm         Nigerian Pidgin
hl=nso         Northern Sotho
hl=no          Norwegian
hl=nn          Norwegian (Nynorsk)
hl=oc          Occitan
hl=or          Oriya
hl=om          Oromo
hl=ps          Pashto
hl=fa          Persian
hl=xx-pirate   Pirate
hl=pl          Polish
hl=pt-BR       Portuguese (Brazil)
hl=pt-PT       Portuguese (Portugal)
hl=pa          Punjabi
hl=qu          Quechua
hl=ro          Romanian
hl=rm          Romansh
hl=nyn         Runyakitara
hl=ru          Russian
hl=gd          Scots Gaelic
hl=sr          Serbian
hl=sh          Serbo-Croatian
hl=st          Sesotho
hl=tn          Setswana
hl=crs         Seychellois Creole
hl=sn          Shona
hl=sd          Sindhi
hl=si          Sinhalese
hl=sk          Slovak
hl=sl          Slovenian
hl=so          Somali
hl=es          Spanish
hl=es-419      Spanish (Latin American)
hl=su          Sundanese
hl=sw          Swahili
hl=sv          Swedish
hl=tg          Tajik
hl=ta          Tamil
hl=tt          Tatar
hl=te          Telugu
hl=th          Thai
hl=ti          Tigrinya
hl=to          Tonga
hl=lua         Tshiluba
hl=tum         Tumbuka
hl=tr          Turkish
hl=tk          Turkmen
hl=tw          Twi
hl=ug          Uighur
hl=uk          Ukrainian
hl=ur          Urdu
hl=uz          Uzbek
hl=vi          Vietnamese
hl=cy          Welsh
hl=wo          Wolof
hl=xh          Xhosa
hl=yi          Yiddish
hl=yo          Yoruba
hl=zu          Zulu




*/

</script>