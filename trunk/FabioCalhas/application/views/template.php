<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <base href="{base_url}" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="Fabio Calhas" />
        <meta name="title" content="Fabio Calhas" />
        <meta name="description" content="Fabio Calhas" />
        <meta name="google-site-verification" content="WUnpfObJd2UkN-0ZMcsc_Zebg0uHzPE5dcrgDiagyyA" />
        <title>Fabio Calhas</title>
        <!-- ////////////////////////////////// -->
        <!-- //      Start Stylesheets       // -->
        <!-- ////////////////////////////////// -->
        <link href="styles/style.css" rel="stylesheet" type="text/css" />
        <link href="styles/prettyPhoto.css" rel="stylesheet"  type="text/css" media="screen" title="prettyPhoto main stylesheet" />
        <!-- ////////////////////////////////// -->
        <!-- //      Javascript Files        // -->
        <!-- ////////////////////////////////// -->
        <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/Maven_Pro_400.font.js"></script>
        <script type="text/javascript" src="js/Quicksand_Book_400.font.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
        <script type="text/javascript" src="js/fade.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
        <script type="text/javascript">
            Cufon.replace('#menu li', {fontFamily: 'Maven Pro', hover:true});
            Cufon.replace('h1, h2, h3, h4, h5, h6',  {fontFamily: 'Maven Pro', hover:true});
            Cufon.replace('.pagetitle', {fontFamily: 'Quicksand Book', hover:true});
            Cufon.replace('.headingsmall, .customquote, .boldtext', {fontFamily: 'Maven Pro'});
        </script>
        <script type="text/javascript">
            var $jts = jQuery.noConflict();
            $jts(function() {
                // background cycle
                $jts('#bg-wrapper').cycle({
                    fx:     'fade', // You can choose effect do you like, for reference : http://www.malsup.com/jquery/cycle/browser.html
                    speed:  'slow',
                    timeout: 10000,
                    cleartype: true,  // true if clearType corrections should be applied (for IE) 
                    cleartypeNoBg: true, 
                    startingSlide : 0
                });
  
  
                // maincontent cycle
                $jts('#maincontent').cycle({
                    fx:     'blindY', // You can choose effect do you like, for reference : http://www.malsup.com/jquery/cycle/browser.html
                    speed:  'slow',
                    timeout: 0,
                    cleartype: true,  // true if clearType corrections should be applied (for IE) 
                    cleartypeNoBg: true, 
                    pager:  '#menu',
                    startingSlide : 0,
                    after:onAfter,
                    pagerAnchorBuilder: function(idx, slide) {
                        // return sel string for existing anchor
                        return '#menu li:eq(' + (idx) + ') a';
                    }
                });
	
                function onAfter(curr, next, opts, fwd){
                    //get the height of the current slide
                    var $ht =  $jts(this).height();
		
                    Cufon.refresh();
		
                    //set the container's height to that of the current slide
                    $jts(this).parent().animate({height: $ht});
                }
	
                Cufon.refresh();
	
                //portfolio gallery 
                $jts("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:2000});
            });



        </script>
        <style type="text/css">
            /*#bg-wrapper .bg1{
                background:#fff url(images/bg1.jpg);
            }*/
            #bg-wrapper .bg1{
                background:#fff url(images/bg2.jpg); 
            }
            #bg-wrapper .bg2{
                background:#fff url(images/bg3.jpg); 
            }
        </style>
    </head>
    <body>
        <div id="bg-wrapper">
            <div class="bg1"></div>
            <div class="bg2"></div>
        </div>
        <div id="wrapper">
            <div id="container">
                <div id="top">
                    <div id="logo"><a href="index.html"><img src="images/fabioCalhas.png" alt="Fabio Calhas" /></a></div><!-- end #top-->
                </div><!-- end #top-->
                <div id="content">
                    <div id="side">
                        <div id="mainmenu">
                            <ul id="menu">
                                <li><a href="index.html#">Empresa</a></li>
                                <li><a href="index.html#">Calhas e Rufos</a></li>
                                <li><a href="index.html#">Serviços</a></li>
                                <li><a href="index.html#">Contato</a></li>
                            </ul>
                        </div>
                    </div><!-- end #side-->
                    <div id="main">
                        <div id="maincontent">

                            <!-- PAGE 1-->
                            <div class="page" id="page1">
                                <h1 class="pagetitle">Empresa</h1>
                                <p>
                                    Atuando desde 2010 no mercado, buscando soluções personalizadas que venham atender a necessidade especifica de cada cliente na área de CALHAS e RUFOS. </p>
                                <p>Trabalhamos com materiais em galvanizado e alumínio. </p>
                                <p>Com uma equipe qualificada e capacitada, damos aos nossos clientes a segurança e confiança necessárias para que ele opte por nossa empresa em um relacionamento comercial sem receio. </p><br />


                            </div><!-- end #page1-->

                            <!-- PAGE 2-->
                            <div class="page" id="page2">
                                <h1 class="pagetitle">Calhas</h1>
                                <div id="ts-display-portfolio">
                                    <ul class="ts-display-pf-col-3">
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/calhas/calha-agua-furtada.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/calhas/calha-agua-furtada.jpg" alt="Calha agua furtada"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/calhas/calha-americana.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/calhas/calha-americana.jpg" alt="Calha americana"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/calhas/calha-moldura.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/calhas/calha-moldura.jpg" alt="Calha moldura"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/calhas/calha-quadrada.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/calhas/calha-quadrada.jpg" alt="Calha quadrada"/>
                                                </a>							
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="clear"></div>
                                </div><!-- end #ts-display-portfolio -->
                                <div class="clear"></div><!-- clear float -->
                                <h1 class="pagetitle">Rufos</h1>
                                <div id="ts-display-portfolio">
                                    <ul class="ts-display-pf-col-3">
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/rufos/rufo_agua_furtada.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/rufos/rufo_agua_furtada.jpg" alt="Rufo agua furdata"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/rufos/rufo_externo.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/rufos/rufo_externo.jpg" alt="Rufo externo"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/rufos/rufo_interno.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/rufos/rufo_interno.jpg" alt="Rufo interno"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/rufos/rufo_pingadeira.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/rufos/rufo_pingadeira.jpg" alt="Rufo pingadeira"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/rufos/rufo_pingadeira_duplo.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/rufos/rufo_pingadeira_duplo.jpg" alt="Rufo pingadeira duplo"/>
                                                </a>							
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div><!-- end #ts-display-portfolio -->
                                <div class="clear"></div><!-- clear float -->
                            </div><!-- end #page2-->

                            <!-- PAGE 3-->
                            <div class="page" id="page3">
                                <h1 class="pagetitle">Serviços realizados</h1>
                                <div id="ts-display-portfolio">
                                    <ul class="ts-display-pf-col-3">
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1815.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1815.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1816.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1816.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1820.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1820.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1827.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1827.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1927.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1927.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1928.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1928.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1929.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1929.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ts-display-pf-img">
                                                <a class="image" href="images/SAM_1930.jpg" rel="prettyPhoto[mixed]" >
                                                    <span class="rollover"></span>
                                                    <img src="images/SAM_1930.jpg" alt="Serviços realizados"/>
                                                </a>							
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div><!-- end #ts-display-portfolio -->
                                <div class="clear"></div><!-- clear float -->
                            </div><!-- end #page3-->

                            <!-- PAGE 4-->
                            <div class="page" id="page4">
                                <h1 class="pagetitle">Contato</h1>
                                <p>Entre em contato e faça um orçamento conosco.</p>
                                <div class="clear"></div><!-- clear float -->
                                <div class="one_half">
                                    <h2>Formulario de contato</h2>
                                    <div id="contactform">
                                        <form id="contact" action="{base_url}welcome/email">
                                            <fieldset>
                                                <span class="error" id="name_error">Por favor, insira o nome!</span>
                                                <span class="error" id="email_error">Por favor, insira o endereço de e-mail!</span>
                                                <span class="error" id="email_error2">Por favor, insira o endereço de e-mail válido!</span>
                                                <span class="error" id="msg_error">Por favor introduza a mensagem!</span>
                                                <input type="text" name="name" id="name" size="30" value="Nome" onblur="if (this.value == ''){this.value = 'Nome'; }" onfocus="if (this.value == 'Nome') {this.value = ''; }" class="text-input" />
                                                <input type="text" name="email" id="email" size="30" value="E-mail" onblur="if (this.value == ''){this.value = 'E-mail'; }" onfocus="if (this.value == 'E-mail') {this.value = ''; }" class="text-input" />
                                                <textarea cols="20" rows="10" name="msg" id="msg">Menssagem</textarea><br />
                                                <input type="submit" name="submit" class="button" id="submit_btn" value="Enviar"/><br /><br /><br />
                                            </fieldset>
                                        </form>
                                    </div><!-- end #contactform -->
                                </div>
                                <div class="one_half last">
                                    <h2>Outros contatos</h2>
                                    <ul class="listcustom">
                                        <li><span class="left">Telefone:</span> <span class="right">(16) 3013-2897</span></li>
                                        <li><span class="left">Celular:</span> <span class="right">(16) 8803-2022</span></li>
                                        <li><span class="left">Email:</span><span class="right"><a href="mailto:contato@fabiocalhas.com.br" class="mail">contato@fabiocalhas.com.br</a></span> </li>
                                    </ul>
                                </div>
                                <div class="clear"></div><!-- clear float -->
                            </div><!-- end #page4-->
                        </div><!-- end #maincontent-->
                    </div><!-- end #main-->
                </div><!-- end #content-->
                <div id="footer">
                    <div id="copyright">Fabio Calhas. Todos os Direitos Reservados <span style="float: right;">Lucas Designer</span></div>
                </div><!-- end #footer-->
            </div><!-- end #container-->
        </div>
        <!-- end #wrapper-->
        <script type="text/javascript"> Cufon.now(); Cufon.refresh(); </script> <!-- to fix cufon problems in IE browser -->
    </body>
</html>
