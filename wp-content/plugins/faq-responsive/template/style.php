#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading{
padding:0px !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title {
margin:0px !important; 
text-transform:none !important;
line-height: 1 !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a{
text-decoration:none;
color:<?php echo $acc_title_icon_clr; ?> !important;
font-size:<?php echo $title_size; ?>px !important;
display:block;
padding:0px;
font-family: <?php echo $font_family; ?> !important;
padding-top: 10px;
padding-bottom: 10px;
<?php if($enable_ac_border=="yes"){ ?>
border-bottom:1px solid  #ddd !important;
<?php } ?>

}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a:hover,#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a:visited, #wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a:focus {
	color:<?php echo $acc_title_icon_clr; ?> !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .acc-a{
	color: <?php echo $acc_title_icon_clr; ?> !important;
	background-color:<?php echo $acc_title_bg_clr; ?> !important;
	border-color: #ddd;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-default > .wpsm_panel-heading{
	color: <?php echo $acc_title_icon_clr; ?> !important;
	background-color: <?php echo $acc_title_bg_clr; ?> !important;
	border-color: <?php echo $acc_title_bg_clr; ?> !important;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-default {
	<?php if($acc_margin == 'yes' ) { ?>

	border:1px solid transparent !important;

	<?php } else { ?>
	border:0px solid transparent !important;
	<?php } ?>
}
#wpsm_accordion_<?php echo $post_id; ?> {
	margin-bottom: 20px;
	overflow: hidden;
	float: left;
	width: 100%;
	display: block;
}
#wpsm_accordion_<?php echo $post_id; ?> .ac_title_class{
	display: inline-block;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 13px;
    padding-right: 10px;
    border: 0px solid #ddd;
	font-size:<?php echo $title_size; ?>px !important;
font-family: <?php echo $font_family; ?> !important;
	

}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel {
	overflow:hidden;
	-webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .05);
	box-shadow: 0 0px 0px rgba(0, 0, 0, .05);
	
	<?php if($acc_radius == 'yes' ) { ?>
	border-radius: 4px;
	<?php }
	else {
	?>
	border-radius: 0px;
	<?php
	}
	?>
}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel + .wpsm_panel {
	<?php if($acc_margin == 'yes' ) { ?>
	margin-top: 5px;
	<?php }
	else {
	?>
	margin-top: 0px;
	<?php
	}
	?>
}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel-body{
background-color:<?php echo $acc_desc_bg_clr; ?> !important;
color:<?php echo $acc_desc_font_clr; ?> !important;
border-top-color: <?php echo $acc_title_bg_clr; ?> !important;
font-size:<?php echo $des_size; ?>px !important;
font-family: <?php echo $font_family; ?> !important;
overflow: hidden;

border: 0px solid #ddd !important;

border-top:0px !important;
<?php if($op_cl_icon!="3"){ ?>
padding-left: 60px;
<?php } ?>
}

#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
	background-color:<?php echo $acc_open_cl_icon_bg_clr; ?>;
	color: <?php echo $acc_open_cl_icon_ft_clr; ?>;
	
     padding-top: 5px; 
     padding-bottom: 5px; 
	 margin-left:10px;
    line-height: 1.0;
    font-size:<?php echo $title_size; ?>px !important;
text-align: center !important;
     width: 32px !important;
    display: inline-block;
	
	
}
#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_number{
 width: 25px !important;
    display: inline-block;
	 margin-left:10px;
	 text-align: center !important;
	 font-size:<?php echo $title_size; ?>px !important;

}

<?php 
	 switch($ac_styles){
			case "1":
			?>
			
			<?php
			break;
			case "2":
			 ?>
			 #wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading {
				background-image: url(<?php echo wpshopmart_faq_directory_url.'assets/images/style-soft.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
			}
			#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
				background-image: url(<?php echo wpshopmart_faq_directory_url.'assets/images/style-soft.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
			}
			<?php
			break;
			case "3":
			?>
				#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading {
				background-image: url(<?php echo wpshopmart_faq_directory_url.'assets/images/style-noise.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
				}
				#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
				background-image: url(<?php echo wpshopmart_faq_directory_url.'assets/images/style-noise.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
				}
			<?php
			break;
		}
?>	
