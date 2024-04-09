@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.app")

@section("content")
@include("includes.header")

<!-- CONTENT START -->
<div class="page-content">


    <!-- SLIDER START -->
    <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container home-rev-slider" data-alias="mask-showcase" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                 <!-- SLIDE 1 -->
                <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/main-slider/slider1/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("images/main-slider/slider1/slide3.jpg") }}" data-bgcolor='#f8f8f8' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    
                    <!-- LAYER 1  right image overlay dark-->
                    <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" 
                    id="slide-75-layer-1" 
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontweight="['100','100','400','400']"
                    data-width="['full','full','full','full']"
                    data-height="['full','full','full','full']"
                    data-whitespace="nowrap"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 6;background-color:rgba(0,0,0,0.7);"> 
                    </div>
                                                
                    <!-- LAYER 3  Thin text title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-72-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','100']" 
                        data-fontsize="['22',22','20','16']"
                        data-lineheight="['26','26','26','22']"
                        data-width="['700','600','600','380']"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10; font-weight:500; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">Variety</div>
                        
                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-72-layer-4" 
                        data-x="['left','left','center','center']" data-hoffset="['46','46','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['190','190','190','150']" 
                        data-fontsize="['64','54','44','34']"
                        data-lineheight="['80','70','60','50']"
                        data-width="['700','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10;white-space: normal;font-weight: 800; color: #fff;font-family: 'Poppins', sans-serif;">Flooring for Any Interior site</div>
                                                        
                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-72-layer-5" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['30','60','50','70']" 
                        data-fontsize="['18','18','18','16']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                            style="z-index: 10; white-space: normal; color: #fff; font-family: 'Poppins', sans-serif;">Right design and right ideas matter a lot of in interior design business. a style that makes a statement.</div> 

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-72-layer-6" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['120','140','140','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;",
                        "speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button btn-half"><span> Read More</span></a></div>  
    
                    <!-- Border left Part -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-72-layer-8" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #eef1f2;"> </div> 
                    
                     <!-- Border bottom Part -->    
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-72-layer-7" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>                                                                
                </li>                          
                
                <!-- SLIDE 2 -->
                <li data-index="rs-73" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/main-slider/slider1/slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("images/main-slider/slider1/slide1.jpg") }}" data-bgcolor='#f8f8f8' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    
                    <!-- LAYER 1  right image overlay dark-->
                    <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" 
                    id="slide-73-layer-1" 
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontweight="['100','100','400','400']"
                    data-width="['full','full','full','full']"
                    data-height="['full','full','full','full']"
                    data-whitespace="nowrap"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 6;background-color:rgba(0,0,0,0.7);"> 
                    </div>
                                                
                    <!-- LAYER 3  Thin text title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-73-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','100']" 
                        data-fontsize="['22',22','20','16']"
                        data-lineheight="['26','26','26','22']"
                        data-width="['700','600','600','380']"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10; font-weight:500; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">Modish</div>
                        
                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-73-layer-4" 
                        data-x="['left','left','center','center']" data-hoffset="['46','46','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['190','190','190','150']" 
                        data-fontsize="['64','54','44','34']"
                        data-lineheight="['80','70','60','50']"
                        data-width="['700','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10;white-space: normal;font-weight: 800; color: #fff;font-family: 'Poppins', sans-serif;">Highest Quality Kitchen Solutions</div>
                                                        
                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-73-layer-5" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['30','60','50','70']" 
                        data-fontsize="['18','18','18','16']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                            style="z-index: 10; white-space: normal; color: #fff; font-family: 'Poppins', sans-serif;">Right design and right ideas matter a lot of in interior design business. a style that makes a statement.</div> 

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-73-layer-6" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['120','140','140','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;",
                        "speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button btn-half"><span> Read More</span></a></div>  
    
                    <!-- Border left Part -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-73-layer-8" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #eef1f2;"> </div> 
                    
                     <!-- Border bottom Part -->    
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-73-layer-7" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>                                                                
                </li>
                
         
                <!-- SLIDE 3 -->
                <li data-index="rs-74" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/main-slider/slider1/slide2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("images/main-slider/slider1/slide2.jpg") }}" data-bgcolor='#f8f8f8' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    
                    <!-- LAYER 1  right image overlay dark-->
                    <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" 
                    id="slide-74-layer-1" 
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontweight="['100','100','400','400']"
                    data-width="['full','full','full','full']"
                    data-height="['full','full','full','full']"
                    data-whitespace="nowrap"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 6;background-color:rgba(0,0,0,0.7);"> 
                    </div>
                                                
                    <!-- LAYER 3  Thin text title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-74-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','100']" 
                        data-fontsize="['22',22','20','16']"
                        data-lineheight="['26','26','26','22']"
                        data-width="['700','600','600','380']"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10; font-weight:500; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">Reliable</div>
                        
                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-74-layer-4" 
                        data-x="['left','left','center','center']" data-hoffset="['46','46','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['190','190','190','150']" 
                        data-fontsize="['64','54','44','34']"
                        data-lineheight="['80','70','60','50']"
                        data-width="['700','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10;white-space: normal;font-weight: 800; color: #fff;font-family: 'Poppins', sans-serif;">Professionals you can rely on</div>
                                                        
                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-74-layer-5" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['30','60','50','70']" 
                        data-fontsize="['18','18','18','16']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','500','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                            style="z-index: 10; white-space: normal; color: #fff; font-family: 'Poppins', sans-serif;">Right design and right ideas matter a lot of in interior design business. a style that makes a statement.</div> 

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-74-layer-6" 
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['120','140','140','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;",
                        "speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button btn-half"><span> Read More</span></a></div>  
    
                    <!-- Border left Part -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-74-layer-8" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','off','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #eef1f2;"> </div> 
                    
                     <!-- Border bottom Part -->    
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-74-layer-7" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
             
                        data-type="shape" 
                        data-basealign="slide" 
                        data-responsive_offset="off" 
                        data-responsive="off"
                        data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>                                                                
                </li>
                                                                  
       
            </ul>
            <div class="tp-bannertimer"></div>
           <!-- left side social bar--> 
            <div class="slide-left-social">
                <ul class="clearfix">
                    <li><a href="#" class="sx-title-swip" data-hover="Linkedin">Linkedin</a></li>
                    <li><a href="#" class="sx-title-swip" data-hover="Twitter">Twitter</a></li>
                    <li><a href="#" class="sx-title-swip"  data-hover="Facebook">Facebook</a></li>
                </ul>
            </div>
                                 
            </div>
    </div>
    <!-- SLIDER END -->         


          
            <!-- ABOUT COMPANY START -->
            <div class="section-full mobile-page-padding p-t80 p-b50 bg-gray">
                <div class="container">
						<div class="section-content">
                        	<div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                
                                	<div class="about-home-3 m-b30 bg-white">
                                    	<h3 class="m-t0 m-b20 sx-tilte">About Luxury Academy</h3>
                                        <p>Inteshape is a team of highly talented, experienced, and award-winning architects and designers. Our company has been the leading provider of architecture services to clients throughout the USA since 1999. We pay attention to every demand...</p>

									<ul class="list-angle-right anchor-line">
                                        <li><a href="#">We provide a architectural 3D modeling services.</a></li>
                                        <li><a href="#">Our specialists are ready to consult you on any topic.</a></li>
                                        <li><a href="#">We develop and implement better interior design.</a></li>
                                        <li><a href="#">We provide high-quality interior services for clients.</a></li>
                                    </ul>

                                        <div class="text-left">
                                            <a href="javascript:;" class="site-button btn-half"><span>Read More</span></a>
                                        </div>                                                    
                                    </div>
                                </div>
                                
                            	<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="video-section-full-v2">
                                        <div class="video-section-full bg-no-repeat bg-cover bg-center overlay-wraper m-b30" style="background-image:url(images/video-bg.jpg)">
                                            <div class="overlay-main bg-black opacity-04"></div>
                                            <div class="video-section-inner">
                                                <div class="video-section-content">
                                                     <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a> 
                                                    <div class="video-section-bottom">
                                                    	<h3 class="sx-title text-white">25 Years<br>Experience</h3>
                                                    </div> 
                                                </div> 
                                            </div>  
                                        </div>
                                    </div>
                                </div>  
                                                              
                    		</div>
                       </div>
                 </div>
               
            </div>   
            <!-- ABOUT COMPANY END -->
    
                     
   
   <!-- OUR AWARDS SECTION START -->
   <div class="section-full p-t80 p-b50 sx-bg-secondry bg-no-repeat bg-bottom-center mobile-page-padding" style="background-image:url(images/background/bg-map.png)">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="sx-separator-outer separator-center">
                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                    <h3 class="sep-line-one">Get Your Certification of Mastery</h3>
                </div>
            </div>
        </div>                   
        <!-- TITLE END -->               
       
        <div class="section-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 m-b30">
                    <div class="sx-box our-story text-white">
                        <div class="mt-media our-story-info d-flex justify-content-start">
                            
                            <h4 class="text-uppercase our-story-year"></h4>
                        </div>
                        <div class="our-story-detail">
                            <h4>Upon completing the course, you will receive a personalized certificate that validates your expertise and dedication to culinary excellence.</h4>
                          
                        </div>
                    </div>
                   
                 
                 </div>
                 
                                                                                                                                           

            </div>
        </div>
    </div>
    
    
</div>   
<!-- OUR AWARDS SECTION END --> 
                   
            <!-- WHAT WE DO START -->
            <div class="section-full  mobile-page-padding bg-white  p-t80 p-b50 bg-repeat overflow-hide" style="background-image:url(images/background/bg-5.png);">
            	
				<div class="container">
                        <div class="large-title-block text-center">

                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-center">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                    <h3 class="sep-line-one">Grand Prizes</h3>
                                    <h4 element-id="243">By registering for this course, you stand a chance to win extraordinary rewards that can transform your real estate career.</h4>
                                </div>
                            </div>
                        </div>                   
                        <!-- TITLE END --> 

                        </div>                
                    <div class="section-content">
                        <div class="row number-block-two-outer">
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">A plot of land on Lagos island
                                        </h4>
                                        {{-- <p>We combine Interior and Exterior Design services and often provide them as a single solution. It helps us...</p> --}}
                                        {{-- <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number animate-in-to-top-content">
                                            <span>01</span>
                                        </div>                                                                                
                                    </div>
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                  
                                    <div class="figcaption bg-white p-a30">
                                        <h4 class="m-t0">Grand prize of ₦2m</h4>
                                        {{-- <p>Landscape plans for drainage problems may also entail planting beds away from the home’s foundation.</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>02</span>
                                        </div>                                                                                
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                 
                                    <div class="figcaption bg-white p-a30">
                                        <h4 class="m-t0">4 people going home with ₦500k </h4>
                                        {{-- <p>We offer comprehensive Architectural Engineering Services including Interior design, Master planning...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>03</span>
                                        </div>                                                                                
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                   
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">5 people going home with ₦200k </h4>
                                        {{-- <p>We provide a range of architectural 3D modeling services to our customers to aid the design, planning...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a>  --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>04</span>
                                        </div>                                                                               
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                    
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">2 people get to Attend a month-long house and land inspection with the CEO of Spring luxury homes</h4>
                                        {{-- <p>Project management is the process by which our team plans and executes your project. We will develop...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>05</span>
                                        </div>                                        
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	{{-- <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                   
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">Style Selection</h4>
                                        <p>Our team also provides consultations on all architectural issues, even if you need specific info about working...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> 
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>06</span>
                                        </div>                                                                                 
                                    </div>
                                  
                                                                        
                                </div>
                                                            	
                            </div>                               
                          --}}
                          <div class="large-title-block full-content bg-gray">
                        	<div class="row">
                            	<div class="col-lg-12 col-md-12 col-sm-12">
                                	<div class="large-title">
                                      <h3 class="m-tb0">
                                        Embark on a transformative Real Estate journey for just ₦@money($setting->training_cost)
                                      </h3>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12	col-sm-12">
                                	<div class="large-title-info">
                                    	{{-- <p>Vivid colors and abstract patterns, combined with unique uses of light, textures, and space, create an outdoor space that magnifies...</p> --}}
										<div class="text-left mt-2">
                                        	<a href="{{ route("payment") }}" class="site-button-link">Click Here to Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                                                

                    </div>
                </div>
             </div>   
            <!-- WHAT WE DO END -->
    
  
    
             
                        
</div>
<!-- CONTENT END -->  


@endsection