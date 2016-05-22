<div class="page-header"><h1>Order Now ! <small>Pesan sekarang.</small></h1></div>
<?php
/*
Halaman order ini, nantinya akan berisi order via, dan order di dalam website :
	Untuk order didalam website, kita akan menerima melalui beberapa kategoru:
		Web Service, Apps, dan Networking service
	Untuk order lewat social media, bisa langsung PM lewat akun ybs
*/
 ?>
<div class="row-fluid">
	<div class="span3">
    	<ul class="nav nav-list" id="myTab">
        	<li class="nav-header">Order Now !</li>
            <li class="active"><a data-toggle="tab" href="#order_1"><i class="icon-shopping-cart"></i> Order langsung</a></li>
            <li><a data-toggle="tab" href="#order_2"><i class="icon-shopping-cart"></i> Order Via Account</a></li>
            <li class="divider"></li>
        	<li class="nav-header">Need Help ?</li>
            <li><a href="?ur=home>help"><i class="icon-shopping-cart"></i> How to order ?</a></li>
        </ul>
    </div>
    
	<div class="span9">
    	<div class="tab-content well">
            <div class="tab-pane active" id="order_1">
                <form method="post">
                    <fieldset><legend>Order Sekarang</legend>
                    <?php						//label,icon, name, type, placeholder
						$inpArr = array(0=>array("Nama","user","nama","text","Nama anda ..."),
										1=>array("Email","envelope","email","email","Email yang valid ..."),
										);
						for($inp=0; $inp<count($inpArr); $inp++){
					?>
                    <label><?php echo $inpArr[$inp][0]; ?> :</label>
                    <div class="input-prepend">
                      <span class="add-on"><i class="icon-<?php echo $inpArr[$inp][1]; ?>"></i></span>
                      <input name="<?php echo $inpArr[$inp][2]; ?>" id="prependedInput" type="<?php echo $inpArr[$inp][3]; ?>" placeholder="<?php echo $inpArr[$inp][4]; ?>" required>
                    </div>
                    <?php } // end For ?>
                    
                    <label> Jenis order: </label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-tag"></i></span>
                        <select name="jenis_order" id="prependInput">                    	
                            <option value="web">Web Service</option>
                            <option value="apps">Desktop Apps</option>
                            <option value="net">Networking Service</option>
                        </select>
                    </div>
                    
                    <label> Rincian: </label>
                    <div class="input-prepend"> 
                    	<span class="add-on"><i class="icon-file"></i></span>
                        <textarea rows="5" name="rincian" id="prependInput" required></textarea>
                    </div>
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Order</button>
                      <button type="button" class="btn">Cancel</button>
                    </div>                    
                    </fieldset>
                </form>
            </div>
                
            <div class="tab-pane" id="order_2">
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
		</div>    
    </div>
</div>

<hr class="featurette-divider"> 
