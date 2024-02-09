<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('css/portal.css')}}">

</head> 

<body class="app app-reset-password p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Alterar Senha</h2>

					<div class="auth-intro mb-4 text-center">Digite o e-mail de cadastro para recuperar a senha.</div>
	
					<div class="auth-form-container text-left">
						
							<form class="auth-form resetpass-form" method="POST" action="{{ route('password.email') }}">
                                @csrf     
								
								<div>
									<x-input-label for="email" :value="__('E-mail')" />
									<x-text-input id="email" class="form-control login-email"  type="email" name="email" :value="old('email')" required autofocus />
									<x-input-error :messages="$errors->get('email')" class="mt-2" />
								</div>
							<!-- <div class="email mb-3">
								<label class="sr-only" for="reg-email">Your Email</label>
								<input id="reg-email" name="reg-email" type="email" class="form-control login-email" placeholder="Your Email" required="required">
							</div> -->
<br>
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Alterar Senha</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5"><a class="app-link" href="login.html" >Log in</a> <span class="px-2">|     </span>
                        </div>
					</div><!--//auth-form-container-->


			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Desenvolvido <span class="sr-only"> </span><i class="fas fa-heart" style="color: #fb866a;"></i> por <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank"> Web Monkey</a> </small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Este Sistema foi desenvolvido para a Empresa </h5>
					    <div> Leve Limpo  </div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

