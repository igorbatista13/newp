<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>GYM </title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script src="{{asset('/plugins/fontawesome/js/all.min.js')}}"></script>

    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
    <link rel="stylesheet" href="{{asset('css/portal.css')}}">


</head> 

<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html">
                        <img class="logo-icon me-2" src="{{asset('images/app-losgo.svg')}}" ></a>
                    </div>
					<h2 class="auth-heading text-center mb-5">Seja bem vindo.</h2>
			        <div class="auth-form-container text-start">

						<form class="auth-form login-form"  method="POST" action="{{ route('login') }}">  
                                @csrf
						
                                <div class="email mb-3">
                                <div class="position-relative">

                              
                                    <x-input-label  for="email" :value="__('Usuário')" />
                                    <x-text-input id="email" class="form-control signin-email" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
                                <div class="position-relative">
                                    <!-- Password -->
                                    <x-input-label for="password" :value="__('Senha')" />
                                    <x-text-input id="password" class="form-control signin-password"  type="password" name="password" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
										Lembrar
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="{{ __('esqueci-senha') }}" >Esqueceu a senha?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Entrar</button>
							</div>
						</form>
						
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
                <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Desenvolvido <span class="sr-only"> </span><i class="fas fa-heart" style="color: #fb866a;"></i> por <a class="app-link" href="http://webmonkey.com.br" target="_blank"> Web Monkey</a> </small>
				       
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
                        <h5 class="mb-3 overlay-title">Desenvolvido por: </h5>
					    <div> Web Monkey  </div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

