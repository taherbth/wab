<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Dashboard | Adminscentral</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>public/css/kube.min.css" media="screen" />
		<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>public/css/style.css" media="screen" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/less.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/functions.js"></script>
	</head>
<body class="login">
	
	
		<!-- 
	<div class="org-selector">
		<?php $query=$this->db->query("select * from user_info where approval_status=2 && login_status=2");?>
		<?php echo form_open("organization/org/view_presentaion"); ?>
		<select name="org_id">
			<?php foreach($query->result() as $info):?>
				<option value="<?php echo $info->id;?>"><?php echo $info->org_name;?></option>
			<?php endforeach;?>
		</select>
		<input type="submit" value="go" />
		<?php echo form_close(); ?>
	</div>
	<a class="btn" href="<?php echo base_url(); ?>main/add_customer"><?php echo $this->lang->line('org_registration_link');?></a> -->
		<div class="login">	
		<img src="<?php echo base_url(); ?>public/img/default-logo.png" />
          <p class="error"><?php echo $this->session->flashdata('message'); ?></p> 
<?php echo form_open("home/process_login"); ?>
    	    <p>
    	      <label>
<input type="text" name="username" placeholder="<?php echo $this->lang->line('label_username');?>" class="inputText" id="textfield" autofocus/>
    	      </label>
 <span class="markcolor"><?php echo ucwords(form_error('username')); ?></span> 

  	      </p>
    	    <p>
    	      <label>
  <input type="password" name="password" placeholder="<?php echo $this->lang->line('label_password');?>" class="inputText" id="textfield2" />
  	        </label>
  <span class="markcolor"><?php echo ucwords(form_error('password')); ?></span>           

    	    </p>
    		 <input type="submit" name="login" value="<?php echo $this->lang->line('site_admin_login_btn');?>" class="button button-red">
             <label> <input type="checkbox" name="checkbox" id="checkbox" /> Remember me</label>            
    	   <?php echo form_close(); ?>
           <br clear="all" />
        <div id="forgot">
		</div>
</div><!-- end .login -->
</body>
</html>