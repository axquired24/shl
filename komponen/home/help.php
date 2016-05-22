<div class="page-header"><h1>How to? <small>Pusat bantuan.</small></h1></div>
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-list" id="myTab">
                <li class="nav-header">How to ?</li>
                <li class="active"><a href="#help_1" data-toggle="tab"><i class="icon-question-sign"></i> How to order</a></li>
                <li><a href="#help_2" data-toggle="tab"><i class="icon-flag"></i> Knowledge base</a></li>
                <li><a href="#help_3" data-toggle="tab"><i class="icon-bell"></i> Contact our sales support</a></li>
                <li class="divider"></li>
                <li class="nav-header">Contact Us</li>
                <li><a href="#help_4" data-toggle="tab"><i class="icon-comment"></i> Guest Book</a></li>
                <li><a href="#help_5" data-toggle="tab"><i class="icon-facetime-video"></i> Social Media</a></li>
                <li class="divider"></li>
                <li><a href="#help_6" data-toggle="tab"><i class="icon-bullhorn"></i> FAQ</a></li>                    
                <li class="divider"></li>
        </ul>
    </div>
    <div class="span9">
    	<div class="tab-content well">
        	<div class="tab-pane active" id="help_1">
            <legend>How To Order</legend>
             Help
             </div>
        	<div class="tab-pane" id="help_2">
            <legend>Knowledge Base</legend>
             Help
             </div>
        	<div class="tab-pane" id="help_3">
            <legend>Contact Support</legend>
             Help
             </div>
        	<div class="tab-pane" id="help_4">
            <legend>Guest Book</legend>
             Help
             </div>
        	<div class="tab-pane" id="help_5">
            <legend>Social Media</legend>
            <?php
			// Array social media => URL Gambar, 	Title, 		Sub title, Link
			$arr = array(0=>array("facebook.png","Facebook","Software House Lampung","#")
						,1=>array("twitter.png","Twitter","@shl_tweet","#")
						,2=>array("yahoo.png","Yahoo! Messenger","shl_ysupport","#")						
						,3=>array("rss.png","RSS Feed","Klik untuk berlangganan Feed","#")						
						);
			for($s=0; $s<count($arr); $s++){
			
			?>
                <div class="media">
                	<a href="#" class="pull-left">
                        <img class="img-round media-object" src="img/social_media/<?php echo $arr[$s][0]; ?>" width="64" height="64" />
                    </a>
                    <div class="media-body">
                    	<h5 class="media-heading"><a href="<?php echo $arr[$s][3]; ?>"><?php echo $arr[$s][1]; ?></a></h5>
                        <p> <?php echo $arr[$s][2]; ?></p>
                    </div>
                </div>
             <?php } // end For ?>
             </div>
        	<div class="tab-pane" id="help_6">
            <legend>FAQ</legend>
             Help
             </div>
        </div>
    </div>
</div>
<hr class="featurette-divider"> 
