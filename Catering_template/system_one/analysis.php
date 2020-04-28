	
	<?php include_once 'db_con.php'; ?>
	<?php function analytics(){
	
	
	?><div class="row">
      
    
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">
				
		<?php global $link; echo fetch_total_users($link)?></p>
                <p class="announcement-text">Users</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  <div class="col-lg-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-lock fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">
				
		<?php global $link; echo fetch_total_access($link)?></p>
                <p class="announcement-text">System Access Logs</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
     
    </div><!-- /.row -->
	<?php }?>