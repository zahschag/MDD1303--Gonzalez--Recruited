 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Recruited</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="frontpage">Home</a></li>
              <li class="active"><a href="signup">Sign Up!</a></li>
              <li><a href="joblisting">Job Listing</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
  <div class='container'>
  
  <h2>Create</h2>
  
  <?php echo form_open('site/create');?>
  <?php echo form_close()?>
  </div>