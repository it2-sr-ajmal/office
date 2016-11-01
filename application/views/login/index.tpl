<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
     <title>{$project_title} | {$SECONDARY_SCRIPTS['title']}</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
    <link href="{$RESOURCE_PATH}css/style-login.css" rel="stylesheet">
    <link href="{$RESOURCE_PATH}fonts/css/font-awesome.min.css" rel="stylesheet">   
    <script src='{$RESOURCE_PATH}js/jquery.min.js'></script>
  </head>

  <body>
      
    <div class="form">      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Admin</a></li>
        <li class="tab"><a href="#login">Agency</a></li>
      </ul>
      {include file="layout/error_box.tpl" title="" name=""}
      <div class="tab-content">
        <div id="signup">   
          <form action="login/validate_login" method="post">
         
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
              <input type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
              <input type="password" name="password" required autocomplete="off"/>
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          <button type="submit" class="button button-block"/>LOGIN</button> 
		  
          </form>

        </div>
        
        <div id="login">     
          
          <form action="#" method="post">
            <div class="field-wrap">
            <label>
              User name<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
			
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    
    <script src="{$RESOURCE_PATH}js/index-login.js"></script>
  </body>
</html>