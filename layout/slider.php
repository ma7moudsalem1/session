<section id="slider" class="fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullwidthbanner" data-height="600" data-navigationStyle="">
					<ul class="hide">

						<!-- SLIDE -->
						
						<!-- SLIDE  -->
						<?php
                            $q_slider = "SELECT * FROM slider";
                            $r_slider = mysqli_query($conn, $q_slider);
                            while($slider = mysqli_fetch_array($r_slider)){
                        ?>
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="assets/images/slide1.png">

							<img src="<?= HOST_NAME ?>assets/images/1x1.png" data-lazyload="<?= HOST_NAME .SLIDER . $slider['img'] ?>" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="130"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; font-size:40px">
								<?= $slider['title'] ?>
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white"
								data-x="center"
								data-y="250"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
								<?= $slider['descrp'] ?>
							</div>

							

						</li>
<!-- SLIDE  -->			<?php
                            }
                        ?>
						

					</ul>
				</div>
			</section>
			<!-- /REVOLUTION SLIDER -->
