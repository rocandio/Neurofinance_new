<h2>Using YQL </h2>
<form name='upcoming_form'>
Symbol: <input name='symbol' id='symbol' type='text' size='20'/><br/>
<p><button id='find_symbol'>Find Symbol</button></p>
</form>

<script>
  // Attach event handler to button
  document.getElementById("find_symbol").addEventListener("click",find_symbol,false);
  // Get user input and submit form
  function find_symbol(){
    document.upcoming_form.symbol.value = document.getElementById('symbol').value || "nero";
    document.upcoming_form.submit();
  } 
</script>



index1.php

<div id="overlay"></div>
        <div id="login" class="block_popup">
            <div class="popup">
                <a href="#" class="close">Close</a>
                
                <div class="content">
                    <div class="title"><p>Enter the site</p></div>
                    
                    <div class="form">
                        <form action="http://finance.neuromama.com/wp-login.php?redirect_to=http%3A%2F%2Ffinance.neuromama.com%2F%25d0%25b1%25d0%25b5%25d0%25b7-%25d1%2580%25d1%2583%25d0%25b1%25d1%2580%25d0%25b8%25d0%25ba%25d0%25b8%2F%25d0%25bf%25d1%2580%25d0%25b8%25d0%25b2%25d0%25b5%25d1%2582-%25d0%25bc%25d0%25b8%25d1%2580%2F" method="post" name="login_form">
                            <div class="column">
                                <p class="label">Login</p>
                                <div class="field"><input type="text" name="log" id="log"></div>
                            </div>                      
                            
                            <div class="column">
                                <p class="label">Password</p>
                                <div class="field"><input type="password" name="pwd" id="pwd"></div>
                            </div>
                            
                            <div class="column_2">
                                <div class="remember">
                                    <div class="checkbox"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever"></div>
                                    <div class="remember_label"><p>Remember me</p></div>
                                </div>
                            </div>
                            
                            <div class="column_2">
                                <p class="forgot_pass"><a href="http://finance.neuromama.com/wp-login.php?action=lostpassword&redirect_to=http://finance.neuromama.com/%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8/%d0%bf%d1%80%d0%b8%d0%b2%d0%b5%d1%82-%d0%bc%d0%b8%d1%80/">Forgot password?</a></p>
                            </div>
                            
                            <div class="column button">
                                <input type="hidden" name="redirect_to" value="http://finance.neuromama.com/wp-admin/"/>
                                <a href="#" class="enter" id="submit" onclick="document.forms['login_form'].submit(); return false;"><span>Login</span></a>
                            </div>
                            
                            <div class="clearboth"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- POPUP END -->

        <script>
            var getElementsByClassName=function(a,b,c){if(document.getElementsByClassName){getElementsByClassName=function(a,b,c){c=c||document;var d=c.getElementsByClassName(a),e=b?new RegExp("\\b"+b+"\\b","i"):null,f=[],g;for(var h=0,i=d.length;h<i;h+=1){g=d[h];if(!e||e.test(g.nodeName)){f.push(g)}}return f}}else if(document.evaluate){getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e="",f="http://www.w3.org/1999/xhtml",g=document.documentElement.namespaceURI===f?f:null,h=[],i,j;for(var k=0,l=d.length;k<l;k+=1){e+="[contains(concat(' ', @class, ' '), ' "+d[k]+" ')]"}try{i=document.evaluate(".//"+b+e,c,g,0,null)}catch(m){i=document.evaluate(".//"+b+e,c,null,0,null)}while(j=i.iterateNext()){h.push(j)}return h}}else{getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e=[],f=b==="*"&&c.all?c.all:c.getElementsByTagName(b),g,h=[],i;for(var j=0,k=d.length;j<k;j+=1){e.push(new RegExp("(^|\\s)"+d[j]+"(\\s|$)"))}for(var l=0,m=f.length;l<m;l+=1){g=f[l];i=false;for(var n=0,o=e.length;n<o;n+=1){i=e[n].test(g.className);if(!i){break}}if(i){h.push(g)}}return h}}return getElementsByClassName(a,b,c)},
                dropdowns = document.getElementsByTagName( 'select' );
                console.log(dropdowns);
            for ( i=0; i<dropdowns.length; i++ )
                if ( dropdowns[i].className.match( 'dropdown-menu' ) ) dropdowns[i].onchange = function(){ if ( this.value != '' ) window.location.href = this.value; }
        </script>
        <script type='text/javascript' src='http://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201326'></script>
