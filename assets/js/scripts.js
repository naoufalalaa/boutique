
// function sign(){
//     document.getElementById('root').innerHTML='<h3>Sign in</h3><hr class="uk-width-1-2@s"><p class="uk-margin uk-text-muted">Sign in to the shop right now for free.</p><div><?php if(isset($msg)) echo $msg ?></div><form method="post"class="uk-grid-small uk-width-1-2@s" uk-grid>    <div class="uk-width-1-3@s">        <input required  class="uk-input" name="prenom" type="text" placeholder="Your firstname">    </div>    <div class="uk-width-1-3@s">        <input required  class="uk-input" name="nom" type="text" placeholder="Your Lastname">    </div>    <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span><input required  class="uk-input" name="pass1" type="password" placeholder="Enter your password"></div><div class="uk-width-2-3@s">        <input required  class="uk-input" name="email" type="email" placeholder="Enter your E-mail">    </div>        <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                        <input required  class="uk-input" name="pass" type="password" placeholder="Confirm your password">    </div><button class="uk-button uk-button-primary" name="sign" type="submit">Sign in</button></form>'
//     document.getElementById('ro').style.display='none'
//     document.getElementById('home').classList.remove('uk-active')
//     document.getElementById('about').classList.remove('uk-active')
//     document.getElementById('log').classList.remove('uk-active')
//     document.getElementById('sign').classList.add('uk-active')
// }
// function login(){
//     document.getElementById('root').innerHTML='<h3>Login</h3><hr class="uk-width-1-2@s"><?php if(isset($msg1)) echo $msg1?><p class="uk-margin uk-text-muted">Login to your account using an email and password.</p><div><?php if(isset($msg)) echo $msg ?></div><form method="post"class="uk-grid-small uk-width-1-2@s" uk-grid><div class="uk-width-2-3@s"><input required  class="uk-input" name="email" type="email" placeholder="Enter your E-mail"></div>        <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span><input required  class="uk-input" name="pass" type="password" placeholder="Confirm your password"></div><button class="uk-button uk-button-primary" name="connect" type="submit">Connect</button></form>'
//     document.getElementById('ro').style.display='none'
//     document.getElementById('home').classList.remove('uk-active')
//     document.getElementById('about').classList.remove('uk-active')
//     document.getElementById('sign').classList.remove('uk-active')
//     document.getElementById('log').classList.add('uk-active')
//     document.getElementByTagName('title').innerText = 'hello'
// }
function home(){
    document.getElementById('root').innerHTML="";
    document.getElementById('ro').style.display='block'
    document.getElementById('about').classList.remove('uk-active')
    document.getElementById('sign').classList.remove('uk-active')
    document.getElementById('log').classList.remove('uk-active')
    document.getElementById('home').classList.add('uk-active')
}
function about(){
    document.getElementById('root').innerHTML='<h3>About</h3>'
    document.getElementById('ro').style.display='none'
    document.getElementById('sign').classList.remove('uk-active')
    document.getElementById('log').classList.remove('uk-active')
    document.getElementById('home').classList.remove('uk-active')
    document.getElementById('about').classList.add('uk-active')
}
