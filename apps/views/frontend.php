<html>
    <head>
        <title>Online association board</title>
		<meta charset="UTF-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>public/css/kube.min.css" media="screen" />
		
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>public/css/style.css" media="screen" />
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>public/css/chosen.min.css" media="screen" />  
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/green.css" media="screen" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/960.css" media="screen" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/text.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/archived_article_feed.css" media="screen" /> -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/cart.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>public/css/jsDatePick_ltr.min.css" />
        
          
  <!------------------------------------------------------>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/less.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/menu.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jsDatePick.min.1.3.js"></script>
        
        <script src="<?php echo base_url(); ?>public/js/color_functions.js"></script>
        	
        <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/redactor.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/tipsy.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/scroll-pagination.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/slimScroll.js"></script>
       
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.jeditable.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/functions.js"></script>
        
<script language="javascript" type="text/javascript">
	function toggle2(obj) {
	   
	   	var el = document.getElementById(obj);
		if ( el.style.display != 'none' ) {
			$('#' + obj).slideUp();
		}
		else {
			$('#' + obj).slideDown();
		}
	}
	

function all_org_selection(val)
{
  
	var myvar = document.getElementById(val).checked;
  
    if(myvar)
    {
        $("#"+val).attr("disabled",false);
        $("#select_org").attr("disabled",true);
        document.getElementById('org_list_div').style.display="none";
    }

 else
    {
       $("#select_org").attr("disabled",false);
       $("#all_org").attr("disabled",false);    
    }
   
}
function check_org_selection(val)
{
  
	var myvar = document.getElementById(val).checked;
  
    if(myvar)
    {
        $("#"+val).attr("disabled",false);
        $("#all_org").attr("disabled",true);
        document.getElementById('org_list_div').style.display="";
    }

 else
    {
       $("#select_org").attr("disabled",false);
       $("#all_org").attr("disabled",false);
       document.getElementById('org_list_div').style.display="none";
    }
   
}

function check_send_to_individual(val)
{
	var myvar = document.getElementById(val).checked;
    if(myvar)
    {
        $("#"+val).attr("disabled",false);
        $("#organization").attr("disabled",true);
        document.getElementById('email_addresses').style.display="";
    }

 else
    {
       $("#organization").attr("disabled",false);
       document.getElementById('email_addresses').style.display="none";
    }
   
}

    
function check_send_to_org(val)
{
   var myvar = document.getElementById(val).checked;
    if(myvar)
    {
        $("#"+val).attr("disabled",false);
        $("#individual").attr("disabled",true);
        document.getElementById('org_div').style.display="";
    }

 else
    {
       $("#individual").attr("disabled",false);
       document.getElementById('org_div').style.display="none";
       document.getElementById('org_list_div').style.display="none";
    }
   
}

function letter_create(val){
    
    if(val=="create_letter")
    {
        document.getElementById(val).style.display="";
        document.getElementById('upload_letter').style.display="none";
        document.getElementById('submit_button').style.display="";
        document.getElementById('sender_send_to').style.display="";
        document.getElementById('letter_title').style.display="";
    }
    if(val=="upload_letter")
    {
        document.getElementById(val).style.display="";
        document.getElementById('create_letter').style.display="none";
        document.getElementById('submit_button').style.display="";
        document.getElementById('sender_send_to').style.display="";
        document.getElementById('letter_title').style.display="";
    }
}



function check(val,id)
{
    
    var letter_filed = "letter"+id;
	var myvar = document.getElementById(letter_filed).checked;
    if(myvar)
    {
        $("#sms"+id).attr("disabled",true);
        $("#email"+id).attr("disabled",true);
    }
    else
    {
        $("#sms"+id).attr("disabled",false);
        $("#email"+id).attr("disabled",false);
    }
}


function check1(val,id)
{    
    var sms_filed = "sms"+id;
    var email_filed = "email"+id;
    var sms = document.getElementById(sms_filed).checked;
	var email = document.getElementById(email_filed).checked;
   
    if(sms || email)
    {
        $("#letter"+id).attr("disabled",true);        
    }
    else
    {
       $("#letter"+id).attr("disabled",false);  
    }
}



</script>
            <script type="text/javascript">
	$(document).ready(function(){
	    var index=1;
        
		$('.add_field').click(function(){
            
            if(index<5){
                index = index+1;
                var input = $('#input_clone');
                var clone = input.clone(true);
                clone.removeAttr ('id');
                clone.val('');
                clone.appendTo('.input_holder'); 
            }
			
		});

		$('.remove_field').click(function(){
		
			if($('.input_holder input:last-child').attr('id') != 'input_clone'){
                 
				$('.input_holder input:last-child').remove();
                  if(index>1){index = index-1;}
                
			}
		
		});
	
	});
	
	</script>
    
    
<script type="text/javascript">
	$(document).ready(function(){
	    var index=1;  
            $('.add_label').live("click", function(){   
                 if(index<=10){ 
                        index = index+1;
                        var input = $('#clone_field');
                        var clone = input.clone(true);
                        clone.val('');
                        clone.insertAfter('#clone_field:last-child');           
                }
            });
        
        $('.remove_label').live("click", function(){	
            if(index>1){$('#clone_field:last-child').remove(); index = index-1;}    
        });
	});
	
	</script>
    
<script type="text/javascript">
	$(document).ready(function(){
	    var index=1;        
		$('.add_product').live("click", function(){    
            	index = index+1;
                var input = $('#cloneable');
                var clone = input.clone(true);
                clone.val('');
                clone.insertAfter('#cloneable:last-child'); 
          	
		});

		$('.remove_product_field').live("click", function(){
		
                  if(index>1){$('#cloneable:last-child').remove(); index = index-1;}
            
		
		});
	
	});
	
	</script>
    </head>


<script type="text/javascript">
 
 $(function() {
     
    /*--------------------------------- Start mainboard article coment Edit ---------------------------------------*/

    $('a.edit').click(function()    {
        var c_id = $(this).attr("value");
        //$('#frame a').remove();
        
        $(".comment_text").editable("<?php echo base_url();?>main_board_comment_edit.php?comment_id="+c_id, { 
	        type: 		"textarea",
	        id: 		'elementid',
	        name:		'text_com',
	        submit  : 	"Save",
	        autogrow : {
	        lineHeight : 18,
	        minHeight  : 30
	        },
	        cssclass : "editable",
	        callback : function(value, settings) {
	            window.location.reload();
	        }
    });
    $(this).parent().parent().next('.comment_text').trigger('click');
 
    });
    
    /*--------------------------------- End mainboard article coment Edit ---------------------------------------*/

    
    /*--------------------------------- Start Forum coment Edit ---------------------------------------*/
     $('#topic_frame a').click(function()
    {
        var c_id = $(this).attr("value");
        $('#topic_frame a').remove();
        
        $(".comment_text").editable("<?php echo base_url();?>forum_topic_comment_edit.php?comment_id="+c_id, { 
        type    : "textarea",
        id   : 'elementid',
        name:'text_com',
        submit  : "Save",
        autogrow : {
        lineHeight : 18,
        minHeight  : 30
        },
        cssclass : "editable",
        callback : function(value, settings) {
            window.location.reload();
        }
    });
 
    })
    
    
        /*--------------------------------- End Forum coment Edit ---------------------------------------*/
        
       /*--------------------------------- Start mainboard article coment delete  ---------------------------------------*/
    $('.li_class .com_remove').click(function()
	{
        var c_id = $(this).attr("value");
       
		if (confirm("Are you sure you want to delete this row?"))
		{
			//var id = $(this).parent().parent().attr('id');
			//var data = 'id=' + id ;
			var parent = $(this).parent().parent().parent();

			$.ajax(
			{
				   type: "POST",
				   url: "<?php echo base_url();?>main_board_comment_delete.php?comment_id="+c_id,
				   //data: data,
				   cache: false,
				   success: function()
				   {
                        parent.fadeOut('slow', function() {$(this).remove();});
				   }
			 });
		}
	});
    /*--------------------------------- End mainboard article coment delete  ---------------------------------------*/
    
    
      /*--------------------------------- Start forum topic coment delete  ---------------------------------------*/
    $('.topic_class .com_remove').click(function()
	{
        var c_id = $(this).attr("value");
       
		if (confirm("Are you sure you want to delete this row?"))
		{
			//var id = $(this).parent().parent().attr('id');
			//var data = 'id=' + id ;
			var parent = $(this).parent().parent().parent();

			$.ajax(
			{
				   type: "POST",
				   url: "<?php echo base_url();?>forum_topic_comment_delete.php?comment_id="+c_id,
				   //data: data,
				   cache: false,
				   success: function()
				   {
                        parent.fadeOut('slow', function() {$(this).remove();});
				   }
			 });
		}
	});
    /*--------------------------------- End forum topic coment delete  ---------------------------------------*/


	// style the table with alternate colors
	// sets specified color for every odd row
	$('table#delTable tr:odd').css('background',' #FFFFFF');
})
</script>

<script type="text/javascript">
$(function(){
	/**
	* Integrating slim scroll
	**/
	$("#feeds ul").slimScroll({
        height: '520px'
    });
	/**
	* Integrating Scroll Pagination
	**/
	var feeds = $("#feeds ul");
	var last_time = feeds.children().last().attr('id');
    feeds.scrollFeedPagination({
        'contentPage': 'index.php',
        'contentData': {
            'last_time' : last_time
        },
        'scrollTarget': feeds, 
        'beforeLoad': function(){
            feeds.parents('#feeds').find('.loading').fadeIn();
        },
        'afterLoad': function(elementsLoaded){
            last_time = feeds.children().last().attr('id');
            feeds.scrollFeedPagination.defaults.contentData.last_time = last_time;
            feeds.parents('#feeds').find('.loading').fadeOut();
            var i = 1;
            $(elementsLoaded).fadeInWithDelay();
        }
    });
    $.fn.fadeInWithDelay = function(){
        var delay = 0;
        return this.each(function(){
            $(this).delay(delay).animate({
                opacity:1
            }, 200);
            delay += 100;
        });
    };
	//calling the function to update news feed
    setTimeout('updateFeed()', 1000);
});
/**
* Function to update the news feed
**/
function updateFeed(){
		var id = 0;
		id = $('#feeds li :first').attr('id');
        $.ajax({
            'url' : 'index.php',
            'type' : 'POST',
            'data' : {
                'latest_news_time' : id  
            },
            success : function(data){
				setTimeout('updateFeed()', 1000);
				if(id != 0){
                	$(data).prependTo("#feeds ul");
				}
            }
        }) 
	}
</script>
<body>

<?php
									
switch($this->session->userdata('logged_in_as')){
	case 'siteowner':
		$username = $this->session->userdata('username');
		$logout_url = base_url().'admin/home/logout';
		$menu = 'siteowner';
		break;
	case 'organization':
		$username = $this->session->userdata('user_name');
		$logout_url = base_url().'organization/info/logout';
		$menu = 'organization';
		break;
}
?>
		<header>
        
       
			<div class="header-inner" style="padding-top: 40px;">
				<div class="units-row">
					<div class="unit-20">
					<img src="<?php echo base_url(); ?>public/img/default-logo.png" />
					</div>
				<div class="unit-20 unit-push-60">
					<nav class="login-menu">
						<ul>
							<li class="login-button"><a><img width="24" src="<?php echo base_url(); ?>public/img/icons/avatar-blank.png" /> <?php echo $username; ?></a>
								<ul>
									<li><a class="icon-user" href="<?php echo base_url(); ?>organization/info/my_profile/<?php echo $mem_id = $this->session->userdata('mem_id'); ?>">My Profile</a></li>
									<li><a class="icon-edit" href="<?php echo base_url(); ?>organization/info/profile_setting_by_member/<?php echo $mem_id = $this->session->userdata('mem_id'); ?>">Profile Settings</a></li>
									<li><a class="icon-settings" href="<?php echo base_url(); ?>organization/info/system_configuration">System configuration</a></li>
									<li><a class="icon-logout" href="<?php echo $logout_url; ?>">Logout</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				</div>
			</div><!-- end .header-inner -->
			<div style="background: #181e25;">
				<div class="header-inner units-row">
						<div class="unit-80">
						<nav <?php if($menu == 'siteowner'){ echo 'id="adminmenu"'; } ?>>{SITE_TOP_MENU}</nav>
						</div>
						<div class="unit-push-right">
						<!--
<nav id="langmenu">
						<ul>
							<form name="langselect" class="langselect" method="post">
							<li><button type="submit" value="sv" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="sv"){?> selected="selected" <?php }?>> <?php echo $this->lang->line('sv_lang');?></button></li>
							<li><button type="submit" value="engus" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""      && $this->session->userdata('lang_file')=="engus"){?> selected="selected" <?php }?>><?php echo $this->lang->line('eng_us_lang');?></button></li>
							<li><button type="submit" value="enguk" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""  && $this->session->userdata('lang_file')=="enguk"){?> selected="selected" <?php }?>><?php echo $this->lang->line('eng_uk_lang');?></button></li>
							<li><button type="submit" value="ger" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="ger"){?> selected="selected" <?php }?>><?php echo $this->lang->line('ger_lang');?></button></li>
							<li><button type="submit" value="nor" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="nor"){?> selected="selected" <?php }?>><?php echo $this->lang->line('nor_lang');?></button></li>
							<li><button type="submit" value="den" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="den"){?> selected="selected" <?php }?>><?php echo $this->lang->line('den_lang');?></button></li>
							<li><button type="submit" value="fin" class="selang button" name="site_language" <?php if($this->session->userdata('lang_file')!=""         && $this->session->userdata('lang_file')=="fin"){?> selected="selected" <?php }?>><?php echo $this->lang->line('fin_lang');?></button></li>
							</form>
						</ul>
						</nav>
-->
						<form name="langselect" class="langselect" method="post">                    
						<select name="site_language" onChange="document.langselect.submit()" class="selang"> 
							<option value="sv" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="sv"){?> selected="selected" <?php }?>> <?php echo $this->lang->line('sv_lang');?></option> 
							<option value="engus" <?php if($this->session->userdata('lang_file')!=""      && $this->session->userdata('lang_file')=="engus"){?> selected="selected" <?php }?>><?php echo $this->lang->line('eng_us_lang');?></option> 
							<option value="enguk" <?php if($this->session->userdata('lang_file')!=""  && $this->session->userdata('lang_file')=="enguk"){?> selected="selected" <?php }?>><?php echo $this->lang->line('eng_uk_lang');?></option> 
							<option value="ger" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="ger"){?> selected="selected" <?php }?>><?php echo $this->lang->line('ger_lang');?></option> 
							<option value="nor" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="nor"){?> selected="selected" <?php }?>><?php echo $this->lang->line('nor_lang');?></option> 
							<option value="den" <?php if($this->session->userdata('lang_file')!=""       && $this->session->userdata('lang_file')=="den"){?> selected="selected" <?php }?>><?php echo $this->lang->line('den_lang');?></option> 
							<option value="fin" <?php if($this->session->userdata('lang_file')!=""         && $this->session->userdata('lang_file')=="fin"){?> selected="selected" <?php }?>><?php echo $this->lang->line('fin_lang');?></option>
						</select>
					</form>
						</div>
				</div>
				</div>
		</header>
	<div class="wrap">
		<div class="content">{SITE_MIDDLE_CONTENT}</div><!-- end .content -->
		<!-- <footer>{SITE_FOOTER}</footer><!-- end #footer -->
	</div> <!-- end .wrap -->
</body>
</html>


