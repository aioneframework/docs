<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aione Framework</title>
	<!-- Global stylesheets -->
	<link rel="stylesheet" type="text/css" href="http://aioneframework.com/aioneframework/assets/css/aione.min.css">
   <style type="text/css">
      .aione-nav>ul>li>ul{
         display: block
      }
   </style>
</head>
<body class="">

	<div id="aione_wrapper" class="aione-wrapper aione-layout-wide aione-theme-arcane">
		<div class="aione-row">
			<div id="aione_header" class="aione-header">
				<div class="aione-row">
				

				</div><!-- .aione-row -->
			</div><!-- #aione_header -->
			<div id="aione_main" class="aione-main">
				<div class="aione-row">
					<div id="aione_sidebar" class="aione-sidebar">
						<div class="aione-row">
							
						</div><!-- .aione-row -->
					</div><!-- #aione_sidebar -->
					<div id="aione_content" class="aione-content m-4 aione-border">
						<div class="aione-row">
							<div id="aione_page_header" class="aione-page-header">
								<div class="aione-row">
									<div class="aione-page-title-container">
										<h4 class="m-3 light-blue darken-4">view code</h4>
										<div class="clear"></div>
									</div> <!-- .aione-page-title-container -->
									<div class="clear"></div>
								</div> <!-- .row -->
							</div> <!-- #aione_page_header --> 
										<div id="aione_page_content" class="">
											<div class="aione-row">	
												<div class="aione-page-content-primary m-20">
													<code>&lt;!DOCTYPE html&gt;<br>
														&lt;html&gt;<br>
														&lt;head&gt;<br>
														<?php echo $_GET['param'];?>
															&lt;animation-&gt; &lt;/title&gt;<br>
															&lt;link rel="stylesheet" type="text/css" href="http://aioneframework.com/aioneframework/assets/css/aione.min.css"&gt;<br>
															&lt;link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700,800,900"&gt;<br>
															&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"&gt;<br>
															&lt;link rel="stylesheet" type="text/css" href="assets/css/style.css"&gt;<br>
															&lt;script type="text/javascript" src="http://aioneframework.com/aioneframework/assets/js/vendor.js"&gt;&lt;/script&gt;<br>
															&lt;script type="text/javascript" src="http://aioneframework.com/aioneframework/assets/js/aione.js"&gt;&lt;/script&gt;<br>
														&lt;/head&gt;<br>
														&lt;body&gt;<br>
														&lt;/body&gt;<br>
														&lt;/html&gt;<br></code>
				                        	 	</div>
									    	</div>     
									   </div>            
									  </div>	
									 </div> <!-- .aione-page-content-primary -->	
									<div class="aione-page-content-secondry">		
									</div> <!-- .aione-page-content-secondry -->
								</div> <!-- .aione-row -->
							</div> <!-- #aione_page_content -->
						</div><!-- .aione-row -->
					</div><!-- #aione_content -->
					<div class="clear"></div><!-- .clear -->
				</div><!-- .aione-row -->
			</div><!-- #aione_main -->
			<div id="aione_footer" class="aione-footer">
				<div class="aione-row">
					&copy;2017 <a href="http://oxosolutions.com/" target="_blank">OXO Solutions</a>. All rights reserved. 
				</div><!-- .aione-row -->
			</div><!-- #aione_content --> 
			<div class="clear"></div><!-- .clear -->
		</div><!-- .aione-row -->
	</div><!-- #aione_wrapper -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   <script type="text/javascript">
      $(window).on('load', function () {
         // $('.append-content').load('test.html');
         $('.aione-sidebar > .aione-row').load('sidenav.html');
         $('.aione-header > .aione-row').load('_header.html');
      });
   </script>
</html>