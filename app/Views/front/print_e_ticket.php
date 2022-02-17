<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        <div class="slide">
            <div class="bg-img" style="background-image: url(/public/img/flight5.jpg)"></div>
            <div class="wrap">
                <div class="wrap_float js_height">
                    <div class="slide_content">
                        <div class="title_wrap">
                            <h2 class="slide_title">Print<br> E-Ticket</h2>
                        </div>
                        <div class="next_title" >Dubai</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="arrows">
        <div class="arrow prev"></div>
        <div class="arrow next"></div>
    </div>
</div>
<div class="subscribe_section">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="subscribe_block" style="background-image: url(img/subscribe-bg.jpg)">
                       <div class="left">
                           <h2 class="_title"></h2>
                           <p class="_subtitle">Enter Refrence No. For Print E-Ticket</p>
                       </div>
                       <div class="right">
                           <div class="input_wrap">
                               <input type="text" class="input" placeholder="Reference No.">
                           </div>
                           <button class="submit button"><span>Subscribe</span></button>

                       </div>
                   </div>
               </div>
           </div>
       </div>
<?= $this->endSection() ?>
