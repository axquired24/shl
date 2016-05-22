<div class="page-header"><h1>Feed & Article. <small>Berita dan Kabar SHL</small></h1></div>
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-list" id="myTab">
            <li class="active"><a href="#feed_1" data-toggle="tab"><i class="icon-bookmark"></i> Berita Terbaru</a></li>
            <li><a href="#feed_2" data-toggle="tab"><i class="icon-certificate"></i> Berita Penting</a></li>
			<li class="divider"></li>
            <li class="nav-header">Category</li>
            <li><a href="#" data-toggle="tab"><i class="icon-stop"></i> Event & Promo</a></li>
            <li><a href="#" data-toggle="tab"><i class="icon-stop"></i> IT Feed</a></li>
            <li><a href="#" data-toggle="tab"><i class="icon-stop"></i> Quotes</a></li>
            <li><a href="#" data-toggle="tab"><i class="icon-stop"></i> SHL Activity</a></li>
            <li><a href="#" data-toggle="tab"><i class="icon-stop"></i> Uncategorized</a></li>
			<li class="divider"></li>            
        </ul>
    </div>
    <div class="span9">
    	<div class="tab-content well">
        <!-- Satu berita -->
        	<div class="tab-pane active" id="shl_1">
                <legend>Berita Terbaru</legend>
                <?php for($i=0; $i<5; $i++){ //looping sebanyak 5kali ?>
                <div class="media">
                	<a href="#" class="pull-left">
                        <img class="img-polaroid media-object" src="img/product_service/_(2).jpg" width="64" height="64" />
                    </a>
                    <div class="media-body">
                    	<h5 class="media-heading"><a href="?ur=home>detail_article">Design Baru @ Web</a></h5>
                        <p> Ini adalah desain baru ... </p>
                    </div>
                </div>
                <?php } ?>
                <ul class="pager">
                  <li>
                    <a href="#">&larr; sebelumnya</a>
                  </li>
                  <li>
                    <a href="#">Lebih baru &rarr;</a>
                  </li>
                </ul>                                
             </div>
        <!-- END Satu berita -->        
        </div>
    </div>
</div>
<hr class="featurette-divider"> 
